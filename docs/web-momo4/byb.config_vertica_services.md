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

| 6.12. Configuring Locale |
| [Prev](byb.redefine_ephemeral_ports.php)  | Chapter 6. Before You Begin |  [Next](byb.config_SSH_and_SSHD.php) |

## 6.12. Configuring Locale

Ensure that your locale is a UTF-8 setting by invoking the locale command. There are two environment variables that identify non-default locale settings: `LANG` and `LC_ALL`. We recommend that you set `LANG` to `en_US.UTF-8`.

If either variable is set for an ISO value; e.g., `LANG=en_US.ISO88591`, you must overwrite the setting with a UTF-8 equivalent for the vertica_dba user.

### Note

If the system configuration can be changed; then change the setting in the `/etc/sysconfig/i18n` file. Otherwise, add the override specific to the vertica_dba user in the `/var/db/vertica/.i18n` file. For example, your locale setting should look similar to this: `LANG=fr_FR`.

If set, `LC_ALL` supersedes `LANG`. If neither is set, Vertica will use `en_US`.

For examples of how to set `LANG`, see [Implement Locales for International Data Sets](https://my.vertica.com/docs/7.1.x/HTML/Content/Authoring/AdministratorsGuide/ConfiguringTheDB/ImplementLocalesForInternationalDataSets.htm).

| [Prev](byb.redefine_ephemeral_ports.php)  | [Up](before_you_begin.php) |  [Next](byb.config_SSH_and_SSHD.php) |
| 6.11. Redefining Ephemeral Ports  | [Table of Contents](index.php) |  6.13. Configuring SSH and SSHD |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)