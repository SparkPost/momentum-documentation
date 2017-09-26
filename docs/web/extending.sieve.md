Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| 16.7. Extending Sieve |
| [Prev](extending.hooks.php)  | Chapter 16. Extending Momentum using C |  [Next](extending.C.ref.php) |

## 16.7. Extending Sieve

It is possible to extend Sieve++ by registering additional tests and actions with the runtime. For each action and test you implement, you need to provide two callback functions. The first is called during compilation of the sieve script to validate that the usage of the extension is semantically correct and the second is called during execution to perform the actual action or test.

There are three principal structures used by the sieve runtime; `SIEVE` represents a compiled sieve script, `SENG` represents an instance of the sieve virtual machine (engine) and its state, and `SIEVEARGS` represents a sieve variable (string, number, stringlist, or a reference to a variable). These types are deliberately opaque to sieve extension modules and should only be interpreted using the functions exported from the `sieve/ecsieve.h` header file.

The `sievereq` parameter allows the extension author to describe what features or information is required as well as a specific phase that the action expects when it will be executed. The options, which are logically ORed together are noted in the sieve/ecsieve.h header provided with the SDK. Those that begin with `SIEVEREQ_PHASE` indicate that the the action should only be allowed in a sieve script running in the indicated phase. Other `SIEVEREQ_` defines indicate that a specific piece of information be available in order for the action to be used.

<dl class="variablelist">

<dt>SIEVEREQ_MSG</dt>

<dd>

This define makes the availability of the email_message within the sieve engine a prerequisite for using the action.

</dd>

<dt>SIEVEREQ_ENV_FROM</dt>

<dd>

This define makes the availability of the envelope sender within the sieve engine a prerequisite for using the action.

</dd>

<dt>SIEVEREQ_ENV_TO</dt>

<dd>

This define makes the availability of the envelope recipient within the sieve engine a prerequisite for using the action.

</dd>

<dt>SIEVEREQ_AC</dt>

<dd>

This define makes the availability of the accept_construct within the sieve engine a prerequisite for using the action.

</dd>

<dt>SIEVEREQ_550_OK</dt>

<dd>

This define ensures that the action is only callable from sieve scripts that are allowed to request a 550 SMTP time response code.

</dd>

<dt>SIEVEREQ_DNS_LOOKUP_OK</dt>

<dd>

This define ensures that the action is only callable from sieve scripts that are allowed to perform DNS resolution.

</dd>

<dt>SIEVEREQ_PHASE_CONNECT</dt>

<dd>

This limits the action to be called only from the connect phase Sieve scripts.

</dd>

<dt>SIEVEREQ_PHASE_EHLO</dt>

<dd>

This limits the action to be called only from the ehlo phase Sieve scripts.

</dd>

<dt>SIEVEREQ_PHASE_MAILFROM</dt>

<dd>

This limits the action to be called only from the mailfrom phase Sieve scripts.

</dd>

<dt>SIEVEREQ_PHASE_RCPTTO</dt>

<dd>

This limits the action to be called only from the rcptto phase Sieve scripts.

</dd>

<dt>SIEVEREQ_PHASE_DATA</dt>

<dd>

This limits the action to be called only from the data phase Sieve scripts.

</dd>

<dt>SIEVEREQ_PHASE_SPOOL</dt>

<dd>

This limits the action to be called only from the spool phase Sieve scripts.

</dd>

<dt>SIEVEREQ_PHASE_EACH_RCPT</dt>

<dd>

This limits the action to be called only from the each_rcpt phase Sieve scripts.

</dd>

</dl>

It is recommended that you use the `SIEVEREQ_PHASE_` with care as it directly limits where the action may be used. Basing the requirements on features and function provides the caller of the Sieve action much more flexibility.

<a name="idp16625440"></a>

**Example 16.1. Implementing a Sieve action in C**

```
#include "config.h"
#include "sieve/ecsieve.h"

/* this example action squares its single argument */ 

static int my_compile(void *closure, SIEVE *sieve, SIEVEARGS *args, int *sievereq)
{
  if (!sieve_get_num_args(args) != 1) {
    sieve_error(sieve, 0, "invalid number of args to \"my_action\"");
    return 0;
  }
  return 1;
}

static enum sieve_action_return my_execute(void *closure, SENG *seng, SIEVEARGS *args)
{
  char *val;
  int len;

  if (sieve_get_arg_as_string(args, 0, &val, &len)) {
    int num = atoi(val);
    char numbuf[32];
    num *= num;
    ec_itoa(num, numbuf);
    sieve_return_value_string(seng, numbuf, strlen(numbuf));
  }
  return SIV_CONT;
}

/* sieve extensions MUST be registered from a post-conf hook so that the sieve
 * module can complete its runtime initialization */
static void my_post_conf(void *vself)
{
  generic_module_infrastructure *self = (generic_module_infrastructure*)vself;

  sieve_register_extension(0, self, "action_name", NULL, compile_cb, execute_cb);

}

static int my_init(generic_module_infrastructure *self)
{
  register_core_post_conf_hook_first(my_post_conf, self);
}

generic_module_infrastructure my_sieve = {
  { 
    EC_MODULE_SHARED_INIT,
    "my_sieve",
    "my sample sieve extension"
    NULL,
    my_conf, /* omitted from this example for brevity */
    NULL,
    my_init,
    /* other initializers omitted for brevity */
  }
};
```

<a name="idp16630528"></a>

**Example 16.2. Sieve script using a custom Sieve action**

```
$result = my_square "100";
ec_log "Square of 100 is ${result}";
```

| [Prev](extending.hooks.php)  | [Up](c.sdk.php) |  [Next](extending.C.ref.php) |
| 16.6. Registerable Hooks  | [Table of Contents](index.php) |  Chapter 17. C API Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)