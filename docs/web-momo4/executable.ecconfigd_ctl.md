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

| ecconfigd_ctl |
| [Prev](executable.ecconfigd.php)  | Chapter 74. Executable Commands Reference |  [Next](executable.ecelerity.php) |

<a name="executable.ecconfigd_ctl"></a>
## Name

ecconfigd_ctl — start, stop or restart the Momentum Configuration Server

## Synopsis

`/opt/msys/ecelerity/bin/ecconfigd_ctl` [ start | stop | restart ]

<a name="idp11870448"></a>
## Description

**ecconfigd_ctl** is a shell script that you can use to start, stop, or restart the Momentum configuration server **ecconfigd**.

The `TRY` environment variable is one of the variables that may be set in the `environment` file. This variable controls the number of times to loop waiting for **ecconfigd** to start up. In some configurations, it can take a long time for **ecconfigd** to start and, if the default `TRY` value is too small, the **ecconfigd_ctl** script may decide that startup has failed. The default value for this variable is `10`. Increasing `TRY` to a higher value will increase the amount of time that **ecconfigd_ctl** will wait for **ecconfigd** to start before deciding that it is broken. With `TRY` set to a default value of `‘10’`, the amount of time that **ecconfigd_ctl** waits is 55 seconds (10+9+8+7+6+5+4+3+2+1).

If the `EXTRA_ARGS` environment variable is set, its contents will be passed as additional arguments to **ecconfigd**.

<a name="idp11881392"></a>
## See Also

[ecconfigd](executable.ecconfigd.php "ecconfigd"), [Chapter 31, *Configuring the Environment File*](environment_file.php "Chapter 31. Configuring the Environment File") 

| [Prev](executable.ecconfigd.php)  | [Up](exec.cmds.ref.php) |  [Next](executable.ecelerity.php) |
| ecconfigd  | [Table of Contents](index.php) |  ecelerity |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)