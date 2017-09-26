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

| Chapter 26. File-related Functions |
| [Prev](apis.ec_fc_store_expire.php)  | Part II. C API |  [Next](apis.ec_copy_file.php) |

## Chapter 26. File-related Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_copy_file](apis.ec_copy_file.php) — Copy a file from one location to another</dt>

<dt>[ec_find_conf_file](apis.ec_find_conf_file.php) — Find a filename in the default search path and return the resulting path</dt>

<dt>[ec_find_conf_file2](apis.ec_find_conf_file2.php) — Find a filename in the given search path and return the resulting path</dt>

<dt>[ec_find_file](apis.ec_find_file.php) — Find a file in the given search path and return the resulting path</dt>

<dt>[ec_open_tmpfile](apis.ec_open_tmpfile.php) — Open a file with a unique name; unlink the file from disk and returns its descriptor</dt>

<dt>[ec_open_tmpfile2](apis.ec_open_tmpfile2.php) — Open a file with a unique name and store the name in `outname`</dt>

<dt>[ec_open_tmpfile3](apis.ec_open_tmpfile3.php) — Open a file with a unique name in the specified a directory</dt>

</dl>

| [Prev](apis.ec_fc_store_expire.php)  | [Up](pt.apis.php) |  [Next](apis.ec_copy_file.php) |
| ec_fc_store_expire  | [Table of Contents](index.php) |  ec_copy_file |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)