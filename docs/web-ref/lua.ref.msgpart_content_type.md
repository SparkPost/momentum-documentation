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

| msgpart:content_type |
| [Prev](lua.ref.msgpart_body_replace.php)  | 15.2. Lua Functions |  [Next](lua.ref.msgpart_header.php) |

<a name="lua.ref.msgpart_content_type"></a>
## Name

msgpart:content_type — Returns a table of content type related information

<a name="idp25741504"></a>
## Synopsis

`msgpart:content_type();`

<a name="idp25743488"></a>
## Description

Returns a table of content type related information with the following fields:

*   mimetype (text/plain)

*   charset (utf-8)

*   encoding (base64)

*   is_attachment – This element is a boolean and is always `true` when there is a filename in Content-Type/Content-Disposition.

*   filename – The "filename" attribute is taken from the "filename" attribute in the Content-Disposition header if present, otherwise the "name" parameter from the Content-Type header is used.

### Note

This function only returns one filename. The filename specified in the Content-Disposition field takes precedence over the name parameter specified in Content-Type.

<a name="lua.ref.msgpart.content_type.example2"></a>

**Example 15.45. msgpart:content_type example**

```
require("msys.core");
require('msys.extended.message');

local mod = {};

function mod:validate_data_spool_each_rcpt (msg, accept, vctx)
  local msgpart = msg:mime(true);
  while msgpart != nil do
    local ct = msgpart:content_type();
    for k,v in pairs(ct) do
      print(k,v)
    end
    msgpart = msgpart.thread;
  end
  return msys.core.VALIDATE_DONE;
end

msys.registerModule('validate_data_spool_each_rcpt', mod);
```

Enable this function with the statement `require('msys.extended.message');`.

| [Prev](lua.ref.msgpart_body_replace.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msgpart_header.php) |
| msgpart:body_replace  | [Table of Contents](index.php) |  msgpart:header |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)