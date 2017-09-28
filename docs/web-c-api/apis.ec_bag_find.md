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

| ec_bag_find |
| [Prev](apis.ec_bag_empty.php)  | Chapter 5. Bag Functions |  [Next](apis.ec_bag_get.php) |

<a name="apis.ec_bag_find"></a>
## Name

ec_bag_find — Find something in the specified bag

## Synopsis

`#include "ec_boh.h"`

| `void * **ec_bag_find** (` | <var class="pdparam">bag</var>, |   |
|   | <var class="pdparam">typedname</var>`)`; |   |

`ec_bag * <var class="pdparam">bag</var>`;
`const char * <var class="pdparam">typedname</var>`;<a name="idp19861680"></a>
## Description

Find something in the specified bag. The default behavior is to attempt to find the type, and then attempt to locate the type within other types, provided that the original type is known.

The second parameter may look redundant, but since we're dealing with void pointers, it allows us a sanity check that the type we are returning is still correct in cases where the type of a structure member changes. For example:

```
struct foo {
  email_message *message;
};
```

Suppose the preceding code was changed to:

```
struct foo {
  ec_message *message;
};
void *m = foo->message;
```

This code will compile happily and return us something when asked for a message, but that something will not be what we were looking for. For this reason, we assign to a typed local variable first before returning so that the compiler will warn us about changes of this kind.

**Parameters**

<dl class="variablelist">

<dt>bag</dt>

<dd>

The bag we are looking in.

</dd>

<dt>typedname</dt>

<dd>

The data type that we are looking for.

</dd>

</dl>

**Return Value**

This function returns a void pointer to the named data type.

**Threading**

It is legal to call this function in any thread.

<a name="idp19873120"></a>
## See Also

[ec_bag_create](apis.ec_bag_create.php "ec_bag_create")

| [Prev](apis.ec_bag_empty.php)  | [Up](bag.php) |  [Next](apis.ec_bag_get.php) |
| ec_bag_empty  | [Table of Contents](index.php) |  ec_bag_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)