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

| 68.48. eclist_node |
| [Prev](structs.ecdata_value.php)  | Chapter 68. Structs |  [Next](structs.event.php) |

## 68.48. eclist_node

This struct is defined as follows:

```
union eclist_object_definition_u
{
  LIST_UNION_MEMBERS 
  struct eclist_object_definition_u_vkeyval {
    union vkeyval_key {
      LIST_UNION_MEMBERS
    } key;
    union vkeyval_val {
      LIST_UNION_MEMBERS
    } val;
  } vkeyval;
};
typedef union eclist_object_definition_u eclist_object_definition;

struct ec_list_node
{
  int type;
  eclist_object_definition object;
  struct ec_list_node *next;
};
```

This struct is typedef'ed as follows: `typedef struct ec_list_node eclist_node;`. To use this struct, include the file `eclist.h`.

### 68.48.1. See Also

[stringwrite_config_list](apis.stringwrite_config_list.php "stringwrite_config_list")

| [Prev](structs.ecdata_value.php)  | [Up](structs.php) |  [Next](structs.event.php) |
| 68.47. ecdata_value  | [Table of Contents](index.php) |  68.49. Event |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)