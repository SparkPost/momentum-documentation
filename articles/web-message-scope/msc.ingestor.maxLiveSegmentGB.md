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

| 8.3. maxLiveSegmentGB |
| [Prev](msc.ingestor.indexbasedirectory.php)  | Chapter 8. Configuring the Ingestor |  [Next](msc.ingestor.timewindow.php) |

## 8.3. maxLiveSegmentGB

This controls the maximum size of a segment in a particular Lucene index, and is specified in GB. To understand important performance implications behind this, it is necessary to understand how Lucene constructs its indexes. Lucene indexes are built up of multiple segments; each segment is in and of itself essentially a sub-index.

Lucene may decide at some point to merge segments into a larger single segment or to determine that a segment is full and that it will no longer be written to (which is what this configuration option actually specifies). Segments are merged when the merge factor is reached: currently our merge factor is set statically to 16\. This means that for every power of 16, we merge segments until the size of the segment is [maxLiveSegmentGB] GB in size.

For example:

16 indexes are created storing 16 documents. These are then merged into a single index containing 256 documents. Once we have 16 indexes containing 256 documents, we merge into a single index containing 4096 documents. This continues as long as the segment size is under [maxLiveSegmentGB] GB

Tuning this parameter is beneficial for cases where an array is known to have substantially better read performance, or better write performance. When the characteristic is better read performance, tuning this number down will allow the Ingestor to write faster. If read performance is the typical sufferer, making the value larger will help search speeds.

| [Prev](msc.ingestor.indexbasedirectory.php)  | [Up](msc.ingestor.php) |  [Next](msc.ingestor.timewindow.php) |
| 8.2. indexBaseDirectory  | [Table of Contents](index.php) |  8.4. timeWindow |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)