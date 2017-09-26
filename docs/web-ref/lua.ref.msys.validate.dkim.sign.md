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

| msys.validate.dkim.sign |
| [Prev](lua.ref.msys.validate.dkim.reflect.php)  | 15.2. Lua Functions |  [Next](lua.ref.msys.validate.dkim.verify_results_get_count.php) |

<a name="lua.ref.msys.validate.dkim.sign"></a>
## Name

msys.validate.dkim.sign — Sign a message using a DKIM signature

<a name="idp27188016"></a>
## Synopsis

`msys.validate.dkim.sign(msg, vctx, options);`

```
msg: userdata, ec_message type
vctx: userdata, validate_context type
options: table, optional
```
<a name="idp27190800"></a>
## Description

This function requires the dkim_sign module. `msg` is a mail message. `vctx` is the validation context. It signs the message `msg` using a DKIM signature. `options` is a table which allows the caller to override the following options:

*   `base_domain/signing_domain` override the default signing domain. These two parameters are synonyms for one another, each will have the same effect.

*   `header_canon` override the default header canonicalization setting.

*   `body_canon` override the default body canonicalization setting.

*   `digest` override the default digest setting.

*   `headerlist` override the default list of headers to sign.

*   `identity` override the default signing identity.

*   `selector` Override the default signing selector

*   `keyfile` override the default signing key file, which may be parameterized as defined in [Section 14.27, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures").

*   `keybuf` Override the default signing key. This hash entry must contain the PEM encoded private key to use for signing the messages. This must be a contiguous string, with no line breaks and no white space, without the `BEGIN` and `END` tags that are found in the key file itself. The format is similar to the format used to store the public key in the DKIM DNS records.

*   `body_length_limit` Override the default body_length_limit setting.

<a name="lua.ref.msys.validate.dkim.sign.example"></a>

**Example 15.66. msys.validate.dkim.sign example**

require("msys.validate.dkim");
local mod = {};
function mod:core_final_validation(msg, accept, vctx)
  local options = {};
  options["base_domain"] = "example.com";
  options["selector"] = "*`selector_name`*";
  local domain = msys.validate.dkim.get_responsible_domain();
  print("msys.validate.dkim.get_responsible_domain returns ", domain);
  print("msys.validate.dkim.sign returns ", msys.validate.dkim.sign(nil, nil, options));
  local domains = msys.validate.dkim.get_domains(msg, vctx);
  print("msys.validate.dkim.get_domains returns ", domains);
  return msys.core.VALIDATE_CONT;
end

msys.registerModule("test_dkim", mod);

### Note

This function should only be invoked during the core_final_validation hook.

Enable this function with the statement `require('msys.validate.dkim');`.

<a name="idp27214480"></a>
## See Also

[msys.validate.dkim.get_responsible_domain](lua.ref.msys.validate.dkim.get_responsible_domain.php "msys.validate.dkim.get_responsible_domain"), [msys.validate.dkim.get_domains](lua.ref.msys.validate.dkim.get_domains.php "msys.validate.dkim.get_domains"), [msys.validate.dkim.reflect](lua.ref.msys.validate.dkim.reflect.php "msys.validate.dkim.reflect"), [Section 14.27, “dkim – DomainKeys Identified Mail Signatures”](modules.dkim.php "14.27. dkim – DomainKeys Identified Mail Signatures")

| [Prev](lua.ref.msys.validate.dkim.reflect.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.validate.dkim.verify_results_get_count.php) |
| msys.validate.dkim.reflect  | [Table of Contents](index.php) |  msys.validate.dkim.verify_results_get_count |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)