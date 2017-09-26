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

| 8.9. maxResults |
| [Prev](msc.ingestor.searchtimeout.php)  | Chapter 8. Configuring the Ingestor |  [Next](msc.ingestor.mscServerPort.php) |

## 8.9. maxResults

This option can be used in conjunction with or instead of `searchTimeOut` to improve system responsiveness. For instance, if there is a policy dictating that all searches must take less than 45 seconds to complete, set `searchTimeOut` to `45`. However, if it is noticed that this tends to happen when a result set would return over 20,000 records, the administrator may wish to tune `maxResults` to 20,000 to ensure that some data is returned to the user in most cases (or all, if `searchTimeOut` is set to zero). These results will be sorted and ordered as expected. However, since this data by definition does not include the full set of the search results, the desired record may not be found.

The default value for this option is `0`, which means that there is no limit on the maximum number of results that the system will return.

| [Prev](msc.ingestor.searchtimeout.php)  | [Up](msc.ingestor.php) |  [Next](msc.ingestor.mscServerPort.php) |
| 8.8. searchTimeOut  | [Table of Contents](index.php) |  8.10. mscServerPort |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)