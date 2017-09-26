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

| msys.bounce.classify_smtp_response |
| [Prev](lua.ref.msys.bounce.classify.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.brightmail.scan.php) |

<a name="lua.ref.msys.bounce.classify_smtp_response"></a>
## Name

msys.bounce.classify_smtp_response — Create a bounce classification from SMTP response text and the domain name

<a name="idp26225904"></a>
## Synopsis

`msys.bounce.classify_smtp_response(response_text, domain);`

```
response_text: string
domain: string
```
<a name="idp26228640"></a>
## Description

This function takes the SMTP response text and the domain name as input and returns a tuple (code, code_string, description). `code` is a numerical classification code; `code_string` is the string representation of the code; `description` is the textual description of the code. The bounce_classifier_override module must be configured for this function to produce the correct result.

<a name="lua.ref.msys.bounce.classify_smtp_response.example"></a>

**Example 15.50. msys.bounce.classify_smtp_response example**

```
require("msys.bounce");

local mod = {};

function mod:validate_data_spool(msg, accept, vctx)
  code, name, desc, rcpts = msys.bounce.classify(msg);
  print("msys.bounce.classify: code = ", code, " symbol = ", name, " desc = ", desc, " orig rcpt: ", rcpts);
  code, name, desc = msys.bounce.classify_smtp_response("this domain is no longer used");
  print("msys.bounce.classify_smtp_response: code = ", code, " symbol = ", name, " desc = ", desc );
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("test_bc", mod);
```

Enable this function with the statement `require('msys.bounce');`.

<a name="idp26235600"></a>
## See Also

[Section 14.12, “bounce_classifier_override – The Bounce Classifier Override Module”](modules.bounce_classifier_override.php "14.12. bounce_classifier_override – The Bounce Classifier Override Module"), [msys.bounce.classify](lua.ref.msys.bounce.classify.php "msys.bounce.classify")

| [Prev](lua.ref.msys.bounce.classify.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.brightmail.scan.php) |
| msys.bounce.classify  | [Table of Contents](index.php) |  msys.brightmail.scan |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)