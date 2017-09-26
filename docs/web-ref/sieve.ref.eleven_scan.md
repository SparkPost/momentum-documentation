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

| eleven_scan |
| [Prev](sieve.ref.ec_valid_mime.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.envelope.php) |

<a name="sieve.ref.eleven_scan"></a>
## Name

eleven_scan — email virus scan

## Synopsis

`eleven_scan`

<a name="idp30811712"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 3.1.

Use of this function requires that the eleven module be loaded. The `eleven` module implements the spam filter and e-mail categorization service available from [http://www.eleven.de/](http://www.eleven.de/) .

Use eleven_scan in a data phase Sieve script and then read the context variable `eleven-result`. The possible values are:

*   non-virus

*   unknown

*   medium

*   high

*   virus

Other message context variables are:

*   eleven-majorscore – the numeric classification of the scan

*   eleven-minorscore – the numeric minor classification

*   eleven-result-subtype – the string representation corresponding to the eleven-minorscore number

For a description of the possible values for these variables see [Section 14.32.2, “Runtime Usage”](modules.eleven.php#modules.eleven.runtime "14.32.2. Runtime Usage").

Sieve scripts using `eleven_scan` should be used in the data phase.

<a name="idp30828816"></a>

**Example 16.105. eleven_scan example**

```
eleven_scan;

if vctx :contains "eleven-majorscore" "error" {
 ec_action 451 "AV system offline" "virus:check error";
 stop;
}

if vctx :is :comparator "i;ascii-casemap"  "eleven-result" ["spam", "dangerous"]
{
 ec_action 550 "Virus detected" "virus:Viruses rejected";
 stop;
}
```

<a name="idp30831504"></a>
## See Also

[Section 14.32, “eleven – Module”](modules.eleven.php "14.32. eleven – Module")

| [Prev](sieve.ref.ec_valid_mime.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.envelope.php) |
| ec_valid_mime  | [Table of Contents](index.php) |  envelope |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)