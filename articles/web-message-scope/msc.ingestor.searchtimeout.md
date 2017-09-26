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

| 8.8. searchTimeOut |
| [Prev](msc.ingestor.cachewarmupcount.php)  | Chapter 8. Configuring the Ingestor |  [Next](msc.ingestor.maxResults.php) |

## 8.8. searchTimeOut

Searches on large datasets that return huge numbers of results will likely take a lot of time to complete, due to the sorting and deduplication necessary in providing UI results. It may be most beneficial for an administrator to cancel search results that might otherwise starve the system of resources and have adverse effects on other concurrent searches. When this time limit is hit, the UI displays an error stating that the search took too long. No data is returned to the user in this case.

The value for this option is specified in seconds, and a zero value (which is the default value upon installation) means that there is no time limit on searches.

| [Prev](msc.ingestor.cachewarmupcount.php)  | [Up](msc.ingestor.php) |  [Next](msc.ingestor.maxResults.php) |
| 8.7. cacheWarmupCount  | [Table of Contents](index.php) |  8.9. maxResults |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)