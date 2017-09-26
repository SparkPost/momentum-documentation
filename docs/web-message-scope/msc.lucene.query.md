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

| Chapter 7. Advanced Search Syntax |
| [Prev](msc.server.data.handling.php)  |   |  [Next](msc.lucene.query.search.fields.php) |

## Chapter 7. Advanced Search Syntax

**Table of Contents**

<dl class="toc">

<dt>[7.1\. Lucene "stop" Words](msc.lucene.query.php#msc.lucene.query.stop.words)</dt>

<dt>[7.2\. Message Scope Search Fields](msc.lucene.query.search.fields.php)</dt>

<dt>[7.3\. Searches](msc.lucene.query.search.php)</dt>

<dt>[7.4\. Operators](msc.lucene.query.operators.php)</dt>

</dl>

From the SEARCH page (see [Section 5.1, “Search”](msc.ui.php#msc.ui.search "5.1. Search")) you can choose to perform an Advanced Search. This type of search uses fields specific to Message Scope and special operators. Only users assigned the `Admin` role can issue custom queries.

Custom queries are implemented using a subset of the Lucene query language documented at "[Apache Lucene – Query Parser Syntax](http://lucene.apache.org/core/old_versioned_docs/versions/2_9_1/queryparsersyntax.html)". Query parser syntax may vary by version. Message Scope ships with Lucene version 3.0.3\. When you click the Advanced Search link, the user interface assumes the following appearance:

<a name="figure_custom_query"></a>

**Figure 7.1. Advanced Search**

![Advanced Search](images/custom_query.jpg)

### Note

When performing an advanced search you must always specify a field. The fields that you can use are listed in [Section 7.2, “Message Scope Search Fields”](msc.lucene.query.search.fields.php "7.2. Message Scope Search Fields").

The following sections summarize the Apache Lucene documentation and document the fields specific to Message Scope that can be used with a custom query.

## 7.1. Lucene "stop" Words

You cannot search for certain common words such as `the` and `into` when using a custom query. Such words are known as "stop" words. The "stop" words incorporated into Message Scope are as follows:

```
"a", "an", "and", "are", "as", "at", "be", "but", "by",
"for", "if", "in", "into", "is", "it",
"no", "not", "of", "on", "or", "such",
"that", "the", "their", "then", "there", "these",
"they", "this", "to", "was", "will", "with"
```

However, these words can appear as part of a phrase. A search term such as, "into the text", will be found.

| [Prev](msc.server.data.handling.php)  |   |  [Next](msc.lucene.query.search.fields.php) |
| 6.9. Handling Data with GIMME  | [Table of Contents](index.php) |  7.2. Message Scope Search Fields |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)