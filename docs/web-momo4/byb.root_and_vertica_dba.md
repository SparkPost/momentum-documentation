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

| 6.10. Creating `root` and `vertica_dba` Accounts |
| [Prev](byb.jre.php)  | Chapter 6. Before You Begin |  [Next](byb.redefine_ephemeral_ports.php) |

## 6.10. Creating `root` and `vertica_dba` Accounts

`root` and `vertica_dba` accounts must have their own RSA or Digital Signature Algorithm (DSA) keysets.

### Note

This requirement is necessary only if the local security policy has configured SSH `StrictHostKeyChecking` to `yes`.

*   The `vertica_dba` public key(s) must be in the `/var/db/vertica/.ssh/authorized_keys` file on **all** Analytics nodes. Create them if they don't exist.

*   The `root` public key(s) must be in the `/root/.ssh/authorized_keys` and `/var/db/vertica/.ssh/authorized_keys` files on **all** Analytics nodes. Create them if they don't exist.

*   All `root` accounts on the Analytics nodes may have different keysets, depending on local security policy. In this case, public keys from the root account on all Analytics nodes need to be added to both `authorized_keys` files noted above.

| [Prev](byb.jre.php)  | [Up](before_you_begin.php) |  [Next](byb.redefine_ephemeral_ports.php) |
| 6.9. Java Runtime Environment (JRE)  | [Table of Contents](index.php) |  6.11. Redefining Ephemeral Ports |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)