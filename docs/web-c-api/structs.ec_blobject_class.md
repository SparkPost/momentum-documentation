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

| 68.18. ec_blobject_class |
| [Prev](structs.ec_blobject.php)  | Chapter 68. Structs |  [Next](structs.ec_cache_elt.php) |

## 68.18. ec_blobject_class

This struct is a typedef of `_ec_blobject_class`. It is defined as follows:

```
struct _ec_blobject_class {
  /** typename as per memtype naming conventions */
  const char *objectType;
  /**
   * destructor function.
   * the dtor is called when the
   * last reference to the blobject is released
   **/
  void (*dtor)(void *self);
  /**
   * printer.
   * For introspection, renders state into a string.
   **/
  void (*printer)(void *self, string *output);
};
```

To use this struct, include the file `ec_blobject.h`.

### 68.18.1. See Also

[Section 68.17, “ec_blobject”](structs.ec_blobject.php "68.17. ec_blobject"), [ec_blobject_wrap](apis.ec_blobject_wrap.php "ec_blobject_wrap"), [ec_blobject_addref](apis.ec_blobject_addref.php "ec_blobject_addref"), and [ec_blobject_delref](apis.ec_blobject_delref.php "ec_blobject_delref").

| [Prev](structs.ec_blobject.php)  | [Up](structs.php) |  [Next](structs.ec_cache_elt.php) |
| 68.17. ec_blobject  | [Table of Contents](index.php) |  68.19. ec_cache_elt |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)