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

| 68.29. ec_double_list |
| [Prev](structs.ec_datasource_value_iterator.php)  | Chapter 68. Structs |  [Next](structs.ec_hash_iter.php) |

## 68.29. ec_double_list

This struct is defined as follows:

```
typedef struct _ec_double_list_node {
  void *data;
  struct _ec_double_list_node *prev;
  struct _ec_double_list_node *next;
} ec_double_list_node;

typedef struct _ec_double_list {
  ec_double_list_node *head;
  ec_double_list_node *tail;
  pthread_mutex_t lock;
  int ts;
} ec_double_list;
```

To use this struct, include the file `misc/ec_double_list.h`.

### 68.29.1. See Also

[ec_double_list_destroy](apis.ec_double_list_destroy.php "ec_double_list_destroy")

| [Prev](structs.ec_datasource_value_iterator.php)  | [Up](structs.php) |  [Next](structs.ec_hash_iter.php) |
| 68.28. ec_datasource_value_iterator  | [Table of Contents](index.php) |  68.30. ec_hash_iter |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)