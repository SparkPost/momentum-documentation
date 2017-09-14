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

| ec_cmd |
| [Prev](executable.ec_adtool.php)  | 11.2. Executable Commands |  [Next](executable.ec_console.php) |

<a name="executable.ec_cmd"></a>
## Name

ec_cmd — allow the web UI to manage nodes

## Synopsis

`/opt/msys/ecelerity/bin/ec_cmd` [ start | stop | restart ]

<a name="idp13276064"></a>
## Description

**ec_cmd** is a shell script that runs on port 2028 and allows the web UI to manage the nodes and drives and enables the status page in the web UI. If you install the web UI, this service starts automatically.

If you do not want to use the status page, it is not a required service. It is considered a trusted local network service and must not be exposed to the Internet, since the ec_cmd service can start or stop eccmgr or ecelerity on the node in question.

### Warning

Access to the ec_cmd service is not authenticated. Anyone with telnet access to port 2028 can shut down the ecelerity process.

<a name="idp13279904"></a>
## See Also

[eccmgr](executable.eccmgr.php "eccmgr"), [ecelerity](executable.ecelerity.php "ecelerity")

| [Prev](executable.ec_adtool.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_console.php) |
| ec_adtool  | [Table of Contents](index.php) |  ec_console |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)