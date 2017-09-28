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

| 6.2. Using a Proxy Server |
| [Prev](ad.adaptive.update.php)  | Chapter 6. Automated Updates for the Adaptive Rules |  [Next](ad.rules.sweep.rules.php) |

## 6.2. Using a Proxy Server

If a proxy server is used to access updates you must make configuration changes or use command-line switches when running **lu_pull**.

### 6.2.1. Changing `liveupdate.conf`

Add the following options to the `liveupdate.conf` file:

PROXYHOST=*`hostname`*  #e.g. proxy.foobar.com
PROXYTYPE=*`type`* #e.g. http
PROXYPORT=*`port`* #e.g. 80
#if required, also add a user:
PROXYUSER=*`username`*

If this file does not already exist, you will need to create it in the `/opt/msys/ecelerity/etc/updates/msys` directory.

When a proxy user is required, you must also configure a password which must be stored in a secured credentials database. To store this password, use the following command:

shell> /opt/msys/ecelerity/bin/credmgr set_cred --hostname=*`proxy_host`* --username=*`proxy_user`* \
  --facility=proxy -p *`password`*
### 6.2.2. Using a Proxy Server from the Command Line

Use the following command-line options when running **lu_pull**:

shell> /opt/msys/ecelerity/bin/lu_pull --proxy *`proxy_url`* \
  --proxy_user *`username`* --proxy_password *`password`*

The presence of `PROXYHOST` in `liveupdate.conf` or `proxy_url` from the command line, tells **lu_pull** that a proxy must be used. It will attempt to use a user/password for the proxy server using the following precedence rules:

1.  The command-line option, if present.

2.  `PROXYUSER` from `liveupdate.conf`. If a proxy password is not set, the credentials database will be searched to find the stored password.

3.  Environment variables: `HTTPS_PROXY_USERNAME` and `HTTPS_PROXY_PASSWORD`.

| [Prev](ad.adaptive.update.php)  | [Up](ad.adaptive.update.php) |  [Next](ad.rules.sweep.rules.php) |
| Chapter 6. Automated Updates for the Adaptive Rules  | [Table of Contents](index.php) |  Chapter 7. Sweep Rules – Configuring Bounce and FBL Behavior |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)