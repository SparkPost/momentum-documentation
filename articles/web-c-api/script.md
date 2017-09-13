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

| Chapter 42. Scriptlet (and Alerting) Functions |
| [Prev](apis.scheduler_reuse_connection.php)  | Part II. C API |  [Next](apis.ec_alerting_inc_count.php) |

## Chapter 42. Scriptlet (and Alerting) Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_alerting_inc_count](apis.ec_alerting_inc_count.php) — Increment a counter for an arbitrary key for a given binding/domain</dt>

<dt>[scpt_autoload_ns](apis.scpt_autoload_ns.php) — Wire up autoload items, just in time</dt>

<dt>[scpt_compile_callout](apis.scpt_compile_callout.php) — Compile and register a scriptlet entrypoint</dt>

<dt>[scpt_compile_hook_callout](apis.scpt_compile_hook_callout.php) — Compile and register a scriptlet hook implementation entrypoint</dt>

<dt>[scpt_execute_or_resume](apis.scpt_execute_or_resume.php) — Execute or resume execution of a thread</dt>

<dt>[scpt_ffi_cif_alloc](apis.scpt_ffi_cif_alloc.php) — Allocate an ffi_cif via the cache</dt>

<dt>[scpt_ffi_closure_alloc](apis.scpt_ffi_closure_alloc.php) — allocates an ffi_closure via the cache</dt>

<dt>[scpt_get_bag](apis.scpt_get_bag.php) — Returns the environmental "bag" associated with the current callout</dt>

<dt>[scpt_get_traceback](apis.scpt_get_traceback.php) — Populate the top of the scriptlet stack with a traceback of the current excution stack</dt>

<dt>[scpt_getspecific](apis.scpt_getspecific.php) — Fetch previously associated pointer value</dt>

<dt>[scpt_parse_params](apis.scpt_parse_params.php) — Parse scriptlet function parameters</dt>

<dt>[scpt_push_double](apis.scpt_push_double.php) — pushes a double on to the stack</dt>

<dt>[scpt_push_integer](apis.scpt_push_integer.php) — Push an integer on to the stack</dt>

<dt>[scpt_push_object](apis.scpt_push_object.php) — Box a C structure to pass into a scriptlet routine</dt>

<dt>[scpt_push_object2](apis.scpt_push_object2.php) — Box a C structure to pass into a scriptlet routine</dt>

<dt>[scpt_push_object_and_allocate](apis.scpt_push_object_and_allocate.php) — Allocate room to hold a boxed C structure of a particular type</dt>

<dt>[scpt_push_object_and_allocate2](apis.scpt_push_object_and_allocate2.php) — Allocate room to hold a boxed C structure of a particular type</dt>

<dt>[scpt_push_object_by_typename](apis.scpt_push_object_by_typename.php) — box a C structure to pass into a scriptlet routine</dt>

<dt>[scpt_push_ref](apis.scpt_push_ref.php) — Push a reference onto the stack</dt>

<dt>[scpt_push_string](apis.scpt_push_string.php) — Push a string onto the stack</dt>

<dt>[scpt_raise_error](apis.scpt_raise_error.php) — triggers an "exception" in the scriptlet runtime</dt>

<dt>[scpt_register_autoload](apis.scpt_register_autoload.php) — register a set of autoloadable items in a namespace</dt>

<dt>[scpt_register_funcs](apis.scpt_register_funcs.php) — registers a set of functions in a namespace</dt>

<dt>[scpt_register_objtype](apis.scpt_register_objtype.php) — Register an object type with the scriptlet runtime</dt>

<dt>[scpt_register_objtype_augmentation](apis.scpt_register_objtype_augmentation.php) — Manually augment a set of methods for an objtype</dt>

<dt>[scpt_run_callout](apis.scpt_run_callout.php) — Execute or resume execution of a scriptlet callout</dt>

<dt>[scpt_set_output_string](apis.scpt_set_output_string.php) — Set the output string for a scriptlet thread</dt>

<dt>[scpt_setspecific](apis.scpt_setspecific.php) — associate an arbitrary pointer with an execution context</dt>

<dt>[scpt_thread_close](apis.scpt_thread_close.php) — release a scriptlet execution context</dt>

<dt>[scpt_thread_new](apis.scpt_thread_new.php) — create a new scriptlet execution context</dt>

<dt>[scpt_unpin_ref](apis.scpt_unpin_ref.php) — un-pin a reference</dt>

</dl>

The APIs documented here relate to the [scriptlet](https://support.messagesystems.com/docs/web-ref/modules.scriptlet.php) module and the [alerting](https://support.messagesystems.com/docs/web-ref/modules.alerting.php) module.

| [Prev](apis.scheduler_reuse_connection.php)  | [Up](pt.apis.php) |  [Next](apis.ec_alerting_inc_count.php) |
| scheduler_reuse_connection  | [Table of Contents](index.php) |  ec_alerting_inc_count |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)