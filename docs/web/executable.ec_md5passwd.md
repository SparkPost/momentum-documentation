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

| ec_md5passwd |
| [Prev](executable.ec_log_trace.php)  | 11.2. Executable Commands |  [Next](executable.ec_rotate.php) |

<a name="executable.ec_md5passwd"></a>
## Name

ec_md5passwd — changes the password for a system or web console user's password

## Synopsis

`/opt/ecelerity/bin/ec_md5passwd` [ -h ] [ -f ] [ -r *`realm`* ] [ *`username`* ] [ *`password`* ]

<a name="idp7870976"></a>
## Description

**ec_md5passwd** creates a hash of a password using the MD5 hash algorithm. The user name and password are required. Credentials are stored in `/opt/ecelerity/etc/console_passwd`.

This command has the following options:

<dl class="variablelist">

<dt>-h</dt>

<dd>

Display a help message.

</dd>

<dt>-f</dt>

<dd>

Specify a password file to update. The password file is defined by the `uri` option in the access control list of the `Control_Listener` stanza of `ecelerity.conf`. Typically, this value is `digest:///opt/ecelerity/etc/console_passwd`. If you do not use the `-f` option, output is sent to the screen and you can copy the output and paste it into a text file.

</dd>

<dt>-r *`realm`*</dt>

<dd>

Specify a realm. If not specified, the value of the environment variable `EC_DIGEST_REALM` is used. If `EC_DIGEST_REALM` is not set, the value `Momentum Console` is used.

</dd>

<dt>*`username`*</dt>

<dd>

If you do not specify a user name, you are prompted for one. You can update the password of an existing user by specifying a user's name.

</dd>

<dt>*`password`*</dt>

<dd>

If you do not specify a password, you are prompted for one.

</dd>

</dl>

This command is typically used in the following manner:

shell> /opt/ecelerity/bin/ec_md5passwd -f *`/opt/ecelerity/etc/console_passwd`* *`new_usr`* *`passwd`*

If the specified file does not exist, it will be created. If the path does not exist, an error message will be displayed.

If the file, user name and password are omitted, you will be prompted to enter the information, as shown in the following example:

shell>  /opt/ecelerity/bin/ec_md5passwd
Username: *`fred`*
Please enter password for *`fred`*
Password:
Please enter the password again
Password:
Password updated.
Place or replace this line in your password file:
*`fred`*:Momentum Console:*`f8cd71a383c02d5e5b0d7eb0385d38ad`*

Copy the output of this command into the password file as instructed.

You can also update an existing user's password by specifying the user name and then supplying the new password.

You do not need to restart the MTA after adding a new user.

<a name="idp7894976"></a>
## See Also

[DIGEST-MD5 Authentication](ecelerity.conf.php#ecelerity.conf.digest-md5.authentication "DIGEST-MD5 Authentication")

[Web Console Authentication](webconsole.authentication.php "3.2. Web Console Authentication")

| [Prev](executable.ec_log_trace.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_rotate.php) |
| ec_log_trace  | [Table of Contents](index.php) |  ec_rotate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)