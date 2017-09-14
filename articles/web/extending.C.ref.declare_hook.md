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

| hooks |
| [Prev](extending.C.ref.php)  | Chapter 17. C API Reference |  [Next](extending.C.ref.ec_cache.php) |

<a name="extending.C.ref.declare_hook"></a>
## Name

EC_DECLARE_VOID_HOOK, EC_DECLARE_HOOK — runtime hooking

## Synopsis

```
#include "module-hooks.h"

EC_DECLARE_VOID_HOOK(modulename,
  hookname,
  (void *, my_param *),
  (my_param *param1),
  (EC_HOOK_CLOSURE, param1)
)
```

```
#include "module-hooks.h"

EC_DECLARE_HOOK(modulename,
  int,
  hookname,
  (void *, my_param *),
  (my_param *param1),
  (EC_HOOK_CLOSURE, param1),
  if (EC_HOOK_RETVAL) return EC_HOOK_RETVAL;
)
```
<a name="idp16640864"></a>
## Description

## Defining your own hook points

If you're considering building extensions in a modular fashion, where one module can optionally take advantage of features provided by another, possibly third-party, module, then you may wish to use the hooking infrastructure in Momentum.

Hooks are prototyped in a header file which defines a set of inline type-safe functions that allow hook implementers or hook consumers to tell if a given hook point has an implementation registered, make a call to that hook, or register an implementation of that hook for others to consume.

Hook binding and resolution is performed at runtime so that there are no hard compile-time or circular dependencies between modules; all that is need for a module to consume or implement a hook is access to the C header file that defines the hook.

## Defining a hook with no return type

```
#include "module-hooks.h"

EC_DECLARE_VOID_HOOK(modulename<a name="extending.hooks.void.modulename"></a>![1](images/callouts/1.png),
  hookname<a name="extending.hooks.void.hookname"></a>![2](images/callouts/2.png),
  (void *, my_param *)<a name="extending.hooks.void.funccast"></a>![3](images/callouts/3.png),
  (my_param *param1)<a name="extending.hooks.void.calldecl"></a>![4](images/callouts/4.png),
  (EC_HOOK_CLOSURE, param1)<a name="extending.hooks.void.callmagic"></a>![5](images/callouts/5.png)
)
```

| 

[![1](images/callouts/1.png)](#extending.hooks.void.modulename)

 | `modulename`

By convention, this should match the symbolname that is used when loading your module. Its purpose is to namespace the hook declaration so that the risk of hook name collision is reduced when using modules provided by more than one vendor. The modulename must be a valid C identifier.

 |
| 

[![2](images/callouts/2.png)](#extending.hooks.void.hookname)

 | `hookname`

An identifier that describes the purpose or function of the hook. It must be a valid C identifier.

 |
| 

[![3](images/callouts/3.png)](#extending.hooks.void.funccast)

 | `(void *, my_param *)`

This is used to build a typedef for referencing the function signature for this hook. The convention is to declare the function with a `void *` as the first parameter so that the implementation can retrieve the closure that was registered with the function. This aids in the creation of re-entrant modules that can be loaded multiple times with differing configuration parameters.

A second convention is that any structured data types be referenced by a typedef instead of long hand (`struct my_param`). This helps dynamic language interpreters to resolve and bind the types correctly at runtime.

Note that the parentheses are required and that the type names *only* are specified here.

 |
| 

[![4](images/callouts/4.png)](#extending.hooks.void.calldecl)

 | `(my_param *param1)`

This defines the prototype for the function that will be used to invoke the hook. It *must* consist of parameter types and names.

If you declared the hook as taking a `void*` closure as the first parameter, then you must omit that from the declaration in this section; it will be populated automatically.

The parentheses are required.

 |
| 

[![5](images/callouts/5.png)](#extending.hooks.void.callmagic)

 | `(EC_HOOK_CLOSURE, param1)`

This is used to route the invocation to the implementation. `EC_HOOK_CLOSURE` is compiler magic to pass the implementation specific closure through to its corresponding hook function. If you don't need this context information, you must omit both the `void *` and `EC_HOOK_CLOSURE` from your hook declaration.

The parentheses are required; their contents must consist of the names of the parameters that you specified in the previous argument.

 |

This hook declaration causes the following functions to defined in the header file:

```
typedef void ec_hook_modulename_hookname_func_t(void *, my_param *);
static INLINE int has_modulename_hookname_hook(void);
static INLINE void register_modulename_hookname_hook_first(
                    ec_hook_modulename_hookname_func_t hook,
                    void *closure);
static INLINE void register_modulename_hookname_hook_last(
                    ec_hook_modulename_hookname_func_t hook,
                    void *closure);
static INLINE void call_modulename_hookname_hook(my_param *param1);
```

## triggering the hook point

In your code, you'd simply write something like this:

```
my_param foo;
call_modulename_hookname_hook(&foo);
```

This will cause each hook implementation to be called and passed `foo` as the second parameter.

## registering a hook implementation

To implement the hook point, you'd write something like this:

```
#include "config.h"
#include "configuration.h"
#include "module-hooks.h"
#include "module.h"

/* This header should contain the EC_DECLARE_VOID_HOOK definition for the hook */
#include "path/to/modulename.h"

static void my_implementation(void *closure, my_param *param)
{
  /* This is called when anyone issues a:
   *   call_modulename_hookname_hook(param);
   */

  /* Perform our actions */
}

void my_post_conf(void *closure)
{
  /* This is called after all modules have been loaded, configured and
     initialized */
  /* Do post configuration stuff */
  register_modulename_hookname_hook_first(my_implementation, self);
}

static int my_module_init(generic_module_infrastructure *self)
{
  /* This will be invoked immediately after the module is loaded
     and configured */
  register_core_post_conf_hook_last(my_post_conf, self);
  return 0;
}
```

## Defining a hook with a return type

If you need to return information from a hook implementation, then you will want to declare your hooks using this alternative method. Hooks with return types can also be extended to control chaining behavior.

```
#include "module-hooks.h"

EC_DECLARE_HOOK(modulename,
  int<a name="extending.hooks.retval.rettype"></a>![1](images/callouts/1.png),
  hookname,
  (void *, my_param *),
  (my_param *param1),
  (EC_HOOK_CLOSURE, param1),
  if (EC_HOOK_RETVAL) return EC_HOOK_RETVAL;<a name="extending.hooks.retval.handlret"></a>![2](images/callouts/2.png)
)
```

| 

[![1](images/callouts/1.png)](#extending.hooks.retval.rettype)

 | `int`

Defines the return type for the hook implementation

 |
| 

[![2](images/callouts/2.png)](#extending.hooks.retval.handlret)

 | `if (EC_HOOK_RETVAL) return EC_HOOK_RETVAL;`

Defines a code fragment that will be triggered after calling each hook implementation in a chain. `EC_HOOK_RETVAL` is a magic symbol that references a variable with the same type as the return type for the hook; it holds the return value from the last hook implementation to be called.

The purpose of this code fragment is to decide if further hooks in the chain should be called, or whether to simply return the current status back to the caller. This allows you some flexibility in defining hook behavior.

In this example, the first hook implementation to return a non-zero value will cause subsequent hooks to be skipped for this invocation.

 |

| [Prev](extending.C.ref.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.ref.ec_cache.php) |
| Chapter 17. C API Reference  | [Table of Contents](index.php) |  ec_cache |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)