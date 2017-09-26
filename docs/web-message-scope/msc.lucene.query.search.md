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

| 7.3. Searches |
| [Prev](msc.lucene.query.search.fields.php)  | Chapter 7. Advanced Search Syntax |  [Next](msc.lucene.query.operators.php) |

## 7.3. Searches

Searches are initiated using one of the defined field names followed by a ‘`:`’ and the search term. Search criteria are not case-sensitive. For example, `d:Momentum` or `d:momentum` both return the same result. However, field names are case-sensitive. Using `D:Momentum` will not work.

The word `term` is used to describe either a single word or a phrase. A phrase is any number of words separated by spaces and enclosed by double quotation marks.

The field names are not always shown in the following examples. For a list of allowable fields see [Section 7.2, “Message Scope Search Fields”](msc.lucene.query.search.fields.php "7.2. Message Scope Search Fields").

### Search Terms

Search by a single word or a phrase.

Example: `word`, `"sample phrase"`

### Wildcard Searches

Wildcard searches are supported for single words only. Use ‘`?`’ as a wildcard for a single character and ‘`*`’ for multiple characters. You may use more than one wild card and any combination of ‘`*`’ or ‘`?`’. *You cannot use a ‘`*`’ or ‘`?`’ symbol as the first character of a search.* 

Example: `s:f*nd`

### Note

Wildcard searches can be done using the `Advanced Search` criterion only.

It is possible to use leading wildcards, but such queries are very slow and not recommended.

### Fuzzy Search

A fuzzy search uses a single word terminated by a ‘`~`’ to search for something approximating the specified word. You can also append a value between 0 and 1, and with a value closer to 1, only terms with a higher similarity will be matched.

Example: `s:close~0.8`

### Proximity Searches

Proximity searches find terms separated by a maximum number of words. Use ‘`~`’ followed by a number.

Example: `s:"special bargain"~10`

### Range Search

Specify upper and lower bounds for a field. This must be one of the fields defined in [Section 7.2, “Message Scope Search Fields”](msc.lucene.query.search.fields.php "7.2. Message Scope Search Fields"). Use square brackets for an inclusive search and braces for an exclusive search. The following example finds messages with a timestamp from March 16, 2011 up to and including March 17, 2011.

Example: `ts:[1300233600 TO 1300406400]`

You can also use range queries with non-datetime fields (also note the use of braces for an *exclusive*) search. The following example queries against the binding field.

Example: `b:{AOL TO Yahoo}`

### Boosting a Term

You can boost the relevance of a specific word using the ‘`^`’ character. In the following example, `Pittsburgh` is boosted by a factor of `4`.

Example: `s:Pittsburgh^4 Philadelphia`

You can also boost terms:

Example: `s:"Pittsburgh Penguins"^4 "Philadelphia Flyers"`

### Escaping Special Characters

Special characters are as follows:

`+ - && || ! ( ) { } [ ] ^ " ~ * ? : \`

Use the ‘`\`’ character as the escape character.

Example: `tid:B0/00-11719-46C328D4\:default\:`

| [Prev](msc.lucene.query.search.fields.php)  | [Up](msc.lucene.query.php) |  [Next](msc.lucene.query.operators.php) |
| 7.2. Message Scope Search Fields  | [Table of Contents](index.php) |  7.4. Operators |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)