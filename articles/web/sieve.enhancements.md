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

| 8.3. RFC Standard Sieve Enhancements |
| [Prev](sieve.syntax.basic.php)  | Chapter 8. Sieve++ |  [Next](sieve.ecaddons.php) |

## 8.3. RFC Standard Sieve Enhancements

This section describes a number of open standards (or draft proposals) for Sieve extensions that are implemented in Momentum and that may also be found in other implementations of Sieve.

### 8.3.1. relational

The following comparisons and comparators are implemented as specified in RFC 3431\. These relational comparisons require an argument that describes the nature of the relational match.

`require ["relational", "comparator-i;ascii-numeric"];`<a name="sieve.comparison.operators"></a>

**Table 8.1. Sieve comparison operators**

| Relational Match | Meaning |
| --- | --- |
| gt | Greater than |
| ge | Greater than or equal to |
| lt | Less than |
| le | Less than or equal to |
| eq | Equal to |
| ne | Not equal to |
| bitwise-and | Bitwise and |

**8.3.1.1. Numeric Comparator**`:comparator "i;ascii-numeric"`

Specifying this comparator will cause the Sieve engine to interpret the string value of the operands as numeric values.

**8.3.1.2. The :count tag**`:count <relational match>`

When present, this tag will cause the Sieve engine to use the number of items represented by the test, rather than a literal value. The test in the example below is triggered when there are 20 or more "Received" headers in the message.

<a name="example.sieve.count.headers"></a>

**Example 8.14. Counting headers with Sieve**

```
# reject messages with 20 or more Received headers
if header :count "ge" :comparator "i;ascii-numeric" "Received" "20" {
  ec_action 551 "mail loop detected";
  stop;
}
```

**8.3.1.3. the :value tag**`:value <relational match>`

The `:value` tag causes the Sieve engine to take the value of the item represented by the test. It can be used only with comparators that return sorting information (such as relational comparators).

<a name="example.sieve.numeric.value.header"></a>

**Example 8.15. taking action based on the numeric value of a header**

```
# make priority greater than 1 wait 10 seconds
if header :value "gt" :comparator "i;ascii-numeric" ["x-priority"] ["1"] {
  ec_tarpit 10 "suspect self-importance";
}
```

### 8.3.2. body analysis

The RFC draft, "draft-degener-sieve-body-02" describes concise methodologies to analyze the bodies of email messages.

`body <body transform> <comparison> ( keylist: string | stringlist )`

The body test uses the body of the message in various forms as specified by the *`body transform`*           . All available comparisons can be used.

**8.3.2.1. :raw**

Raw indicates that the message should be presented as is. No content decoding will be performed and malformed MIME messages will still be processed by the comparison.

<a name="example.sieve.raw.content"></a>

**Example 8.16. matching against the raw content of a message**

```
# Look for the PCRE /\bv[il1][a4].{,3}[gk].{,2}r[a4]\b/ (Viagra)
# and make the transaction wait 2 minutes (120 seconds)
if body :raw :regex "\\bv[il1][a4].{,3}[gk].{,2}r[a4]\\b" {
  ec_tarpit 120 "Possible viagra reference";
}
```

**8.3.2.2. :content**`:content ( content-types: string | stringlist )`

This transform will selectively process MIME parts that match the specified content types. The content types specified may be of the form `type` or `type/subtype`. If only the type is specified, then subtypes are ignored during the selection. If both the type and subtype are specified, then an exact match is used for selection of MIME parts.

All MIME parts are decoded according to the appropriate transfer encoding (base64, quoted-printable, etc.). If possible the content will be translated into UTF-8.

If the MIME parts are binary, you should use `:binary` instead of `:content`.

<a name="example.sieve.attachments"></a>

**Example 8.17. Checking for attachments of a particular MIME type**

```
if body :content "text/plain" :contains "CONGRATULATIONS!" {
  ec_action 550 "5.7.1 possible lottery spam";
  stop;
}
```

**8.3.2.3. :binary**`:binary ( content-types: string | stringlist ) [ :offset ( start: number ) ]`

This acts similarly to the `:content` transform with a few exceptions. MIME transfer decoding is performed, but no charset transformation is attempted. The content of the body for the purposes of matches is interpreted as the lowercased hexadecimal representation.

Additionally, you may specify an optional byte offset into the binary content using the `:offset` tag.

<a name="example.sieve.mp3"></a>

**Example 8.18. Checking for attachments of a particular MIME type**

```
# Reject mp3 audio types
if body :binary "audio/mp3" :contains "" {
  ec_action 550 "5.7.1 no mp3's via email please";
  stop;
}
```

<a name="example.sieve.magic.number"></a>

**Example 8.19. Looking for a magic number signature in an attachment**

```
# Check if the bytes at offsets 1000...1003 match some fictitious
# signature 44, 3c, 0, 1; if yes, reject the message.
if body :binary ["application"] :offset 1000 :matches "44 3c 00 01 *" {
  ec_action 550 "example virus detected";
  stop;
}
```

**8.3.2.4. :text**

The `:text` transform iterates over all parts of an email and makes every effort to convert the data into textual information in UTF-8 format.

<a name="example.sieve.decode"></a>

**Example 8.20. decode a message to textual form and search for a string**

```
# Look for the string "some bad text"
if body :text :contains "some bad text" {
  ec_action 550 "we don't accept email with some bad text";
  stop;
}
```

| [Prev](sieve.syntax.basic.php)  | [Up](sieve.php) |  [Next](sieve.ecaddons.php) |
| 8.2. Sieve's Basic Syntax  | [Table of Contents](index.php) |  8.4. Sieve++, Momentum-specific extensions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)