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

| 16.6. Registerable Hooks |
| [Prev](extending.validation.php)  | Chapter 16. Extending Momentum using C |  [Next](extending.sieve.php) |

## 16.6. Registerable Hooks

In addition to the standard IO, logging, and validation hooks, starting in version 1.2, Momentum allows modules to register functions which can be called by other modules, and a set of core hooks which can be implemented by modules as well.

Every hook declaration automatically creates two registration functions, shown here for `post_conf`:

<dl class="variablelist">

<dt>register_core_post_conf_first(void (*function)(void *), void *closure);</dt>

<dd>

Register the hook to be called before all other hooks registered at this time.

</dd>

<dt>register_core_post_conf_last(void (*function)(void *), void *closure);</dt>

<dd>

Register the hook to be called after all other hooks registered at this time.

</dd>

</dl>

Additionally, the declaration of a hook offers a testing and a calling function that can be used to determine if any functions have been registered on a given hook and call them, respectively.

<dl class="variablelist">

<dt>int has_core_post_conf_hook();</dt>

<dd>

Will return 0 if no functions have been registered at this hook point and non-zero otherwise. If this hook name (post_conf in this case) has not been registered in the run time, this call will register it with the prototype known by the invoker.

</dd>

<dt>[rtype] call_core_post_conf_hook(void *closure);</dt>

<dd>

This will invoke the hook point and call each registered function in turn until a return condition is satisfied. The return type and arguments depend entirely on the hook definition. The registered function will always be invoked with a first argument `closure` that is the `closure` passed to `register_core_post_conf_*` when the function was registered.

</dd>

</dl>

Typically module authors should declare their hooks can call them in the module_init function to dynamically insert their prototypes into the runtime as early as possible.

Registering functions to be run during these hooks should be done after all other modules have been given the opportunity to register their prototypes. While you *can* register hooks before they are ever invoked by the systems, it is possible to have a prototyping mismatch error which would render the hook point useless. Hooks are typesafe and the goal of calling a hook (typically by testing for any registrations) will allow the hook point provider to definitively set the prototype.

To register any of these hooks in a module, you should define them, then register them in your `module_init` function using the register_core_HOOK_NAME_{first,last} function as follows:

```
#include "config.h"
#include "configuration.h"
#include "module-hooks.h"
#include "module.h"

/* This header should declare the 'othermodule_sample' hook */
#include "path/to/othermodule.h"

void my_othermodule_sample_hook(void *closure)
{
  /* This is called when anyone issues a:
       call_othermodule_sample_hook();
  */

  /* Perform our actions */
}
void my_post_conf(void *closure)
{
  /* This is called after all modules have been loaded, configured and
     initialized */
  /* Do post configuration stuff */
  register_othermodule_sample_hook_first(my_othermodule_sample_hook, self);
}

static int my_module_init(generic_module_infrastructure *self)
{
  /* This will be invoked immediately after the module is loaded
     and configured */
  register_core_post_conf_hook_last(my_post_conf, self);
  return 0;
}
```

Complete listings of all the available hooks can be found in the reference sections of this document, such as [Chapter 18, *Hooks in the core scope*](extending.hooks.core.php "Chapter 18. Hooks in the core scope") , [Chapter 25, *Hooks in the sieve scope*](extending.hooks.sieve.php "Chapter 25. Hooks in the sieve scope") , and [Chapter 19, *Hooks in the checklist scope*](extending.hooks.checklist.php "Chapter 19. Hooks in the checklist scope") .

[hooks](extending.C.ref.declare_hook.php "hooks") contains information on declaring and consuming your own hooks.

| [Prev](extending.validation.php)  | [Up](c.sdk.php) |  [Next](extending.sieve.php) |
| 16.5. Extensible Validation Infrastructure  | [Table of Contents](index.php) |  16.7. Extending Sieve |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)