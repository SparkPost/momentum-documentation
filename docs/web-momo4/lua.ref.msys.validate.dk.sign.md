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

| msys.validate.dk.sign |
| [Prev](lua.ref.msys.validate.dk.get_responsible_domain.php)  | Chapter 70. Lua Functions Reference |  [Next](lua.ref.msys.validate.opendkim.get_num_sigs.php) |

<a name="lua.ref.msys.validate.dk.sign"></a>
## Name

msys.validate.dk.sign — Sign a message using a Domain Key

<a name="idp18592128"></a>
## Synopsis

`msys.validate.dk.sign(msg, vctx, options);`

```
msg: userdata, ec_message type
vctx: userdata, validate_context type
options: table
```
<a name="idp18595184"></a>
## Description

This function signs a message using a DomainKey signature. This function requires the [`dk_sign`](modules.domainkeys.php "71.28. domainkeys – Yahoo! DomainKeys") module.

Enable this function with the statement `require('msys.sign.dk');`.

It requires the following parameters:

*   `msg` – mail message to sign

*   `vctx` – validation context

*   `options` – table that allows the caller to override the following options with values different from that provided by the dk_sign module:

    *   `base_domain` – default signing domain

    *   `selector` – default signing selector

    *   `keyfile` – default signing key file (which may be parameterized as defined in [Section 71.50, “opendkim – Open Source DKIM”](modules.opendkim.php "71.50. opendkim – Open Source DKIM"))

    *   `keybuf` – default signing key

        This hash entry must contain the PEM encoded private key to use for signing the messages.

### Note

This function should only be invoked from the core_final_validation hook.

<a name="idp18612160"></a>
## See Also

[msys.validate.dk.get_responsible_domain](lua.ref.msys.validate.dk.get_responsible_domain.php "msys.validate.dk.get_responsible_domain")

| [Prev](lua.ref.msys.validate.dk.get_responsible_domain.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.validate.opendkim.get_num_sigs.php) |
| msys.validate.dk.get_responsible_domain  | [Table of Contents](index.php) |  msys.validate.opendkim.get_num_sigs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)