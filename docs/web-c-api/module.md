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

| Chapter 37. Module-related Functions |
| [Prev](apis.ec_config_release_value.php)  | Part II. C API |  [Next](apis.ec_declare_hook.php) |

## Chapter 37. Module-related Functions

**Table of Contents**

<dl class="toc">

<dt>[EC_DECLARE_HOOK](apis.ec_declare_hook.php) — Runtime hooking</dt>

<dt>[ec_module_manifest_iter_clone](apis.ec_module_manifest_iter_clone.php) — clone a module manifest iterator</dt>

<dt>[ec_module_manifest_iter_destroy](apis.ec_module_manifest_iter_destroy.php) — destroy a module manifest iterator</dt>

<dt>[ec_module_manifest_iter_init](apis.ec_module_manifest_iter_init.php) — initialize a module manifest iterator</dt>

<dt>[ec_module_manifest_iter_next](apis.ec_module_manifest_iter_next.php) — advances a module manifest iterator</dt>

<dt>[ec_module_manifest_refresh](apis.ec_module_manifest_refresh.php) — refreshes the manifest list</dt>

<dt>[ec_module_manifest_value_as_dict](apis.ec_module_manifest_value_as_dict.php) — retrieves a dictionary of manifest values for a named module</dt>

<dt>[ec_module_manifest_value_as_list](apis.ec_module_manifest_value_as_list.php) — retrieves a list of manifest values for a named module</dt>

<dt>[ec_module_manifest_value_as_string](apis.ec_module_manifest_value_as_string.php) — retrieves a manifest value for a named module</dt>

<dt>[ec_module_resolve_capability](apis.ec_module_resolve_capability.php) — resolve a capability by loading modules</dt>

<dt>[module_add_hook_first](apis.module_add_hook_first.php) — Add a hook as the first hook</dt>

<dt>[module_add_hook_last](apis.module_add_hook_last.php) — Add a hook as the last hook</dt>

<dt>[module_get_hook_array_from_transaction](apis.module_get_hook_array_from_transaction.php) — Get the hooks associated with the current transaction</dt>

<dt>[module_get_hook_head](apis.module_get_hook_head.php) — Fetch the arguments for a hook</dt>

</dl>

For an overview of the Momentum module API see [Section 1.3.1, “Module API”](arch.primary.apis.php#arch.module "1.3.1. Module API") and for an overview of hooks see [Section 1.3.2, “Hooking API”](arch.primary.apis.php#arch.hooking "1.3.2. Hooking API").

| [Prev](apis.ec_config_release_value.php)  | [Up](pt.apis.php) |  [Next](apis.ec_declare_hook.php) |
| ec_config_release_value  | [Table of Contents](index.php) |  EC_DECLARE_HOOK |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)