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

| ec_sendmail |
| [Prev](executable.ec_running.php)  | 11.2. Executable Commands |  [Next](executable.ec_show.php) |

<a name="executable.ec_sendmail"></a>
## Name

ec_sendmail — a sendmail compatibility interface

## Synopsis

`/opt/ecelerity/bin/ec_sendmail` [ -F *`full_name`* ] [ -f *`email_address`* ] [ -h ] [ -i ] [ -t ]

<a name="idp8135856"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**ec_sendmail** is a command line utility for Unix systems that requires a local binary to perform submission to the local MTA.

It has the following options:

<dl class="variablelist">

<dt>-F *`full_name`*</dt>

<dd>

Set sender's full name. This will be displayed in the From: header.

</dd>

<dt>-f *`email_address`*</dt>

<dd>

Specify the MAIL FROM: part on the envelope. This address is also displayed in the From: header. If `-f` is used to specify a different address other than the actual `username@hostname` by a user who is not root or whose `geteuid()` doesn't return 0, a `X-Authentication-Warning` header will be added in the email.

</dd>

<dt>-h</dt>

<dd>

Show a help message.

</dd>

<dt>-i</dt>

<dd>

Ignore lines containing only a single dot. It is recommended to set this if data is read from a file.

</dd>

<dt>-t</dt>

<dd>

Scanning the message for recipient(s). Lines starting with To:, Cc: or Bcc: will be used to extract recipient address(es).

</dd>

</dl>

| [Prev](executable.ec_running.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_show.php) |
| ec_running  | [Table of Contents](index.php) |  ec_show |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)