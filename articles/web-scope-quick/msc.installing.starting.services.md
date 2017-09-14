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

| 3.3. Completing Installation and Starting Services |
| [Prev](msc.installing.general.php)  | Chapter 3. Installing the Message Scope Bundle |  [Next](msc.installing.login.php) |

## 3.3. Completing Installation and Starting Services

When installation is complete you will see a screen such as the following:

```
Installation complete.

Based on your selection, the following services have been installed
and are set to automatically start when the system boots.
Some of them may not be running, so you should run the following
set of commands to start them:

  /etc/init.d/mscingestor start
  /etc/init.d/mscsearchserver start
  /etc/init.d/mscwebconsole start

Should these be started now? (y,n)
```

### Note

The example above shows all services. Only those installed on the current machine will be shown. The database service (msyspg) starts up prior to the completion of installation.

If you wish, start the services immediately by entering **y**. If you wish to increase the amount of memory used by Java create the `/opt/msys/scope/etc/environment` file before starting the services. This file is described in "[Configuring the Ingestor](https://support.messagesystems.com/docs/web-message-scope/msc.ingestor.php)".

Once the webconsole service has started, you can log into the Message Scope web UI.

| [Prev](msc.installing.general.php)  | [Up](msc.installing.php) |  [Next](msc.installing.login.php) |
| 3.2. Installing Roles  | [Table of Contents](index.php) |  3.4. Logging In |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)