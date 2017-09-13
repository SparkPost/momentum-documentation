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

| 68.40. ec_ptr_array |
| [Prev](structs.ec_message_part.php)  | Chapter 68. Structs |  [Next](structs.ec_scheduler_inst.php) |

## 68.40. ec_ptr_array

The members of this struct are as follows:

```
typedef struct _ec_ptr_array {
  u_int32_t sizeof_ec_ptr_array;
  int size;
  int allocd;
  void **items;
  ec_ptr_array_free_func free_func;
#define EC_PTR_ARRAY_DEFAULT_PREALLOC 16
  void *static_items[EC_PTR_ARRAY_DEFAULT_PREALLOC];
} ec_ptr_array;
```

To use this struct, include the file `misc/ec_ptr_array.h`.

### 68.40.1. See Also

[ec_ptr_array_init](apis.ec_ptr_array_init.php "ec_ptr_array_init") and [module_get_hook_array_from_transaction](apis.module_get_hook_array_from_transaction.php "module_get_hook_array_from_transaction")

| [Prev](structs.ec_message_part.php)  | [Up](structs.php) |  [Next](structs.ec_scheduler_inst.php) |
| 68.39. ec_message_part  | [Table of Contents](index.php) |  68.41. ec_scheduler_inst |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)