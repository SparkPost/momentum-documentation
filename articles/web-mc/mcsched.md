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

| pe2sched |
| [Prev](mcg.php)  | Chapter 8. Message Central Commands |  [Next](mc-logs-files.php) |

<a name="mcsched"></a>
## Name

pe2sched — start the scheduler

## Synopsis

`/opt/msys/pe2/sbin/pe2sched` [ -f *`/path/to/config_file`* ] [ -l ] [ -D ]

<a name="idp2406944"></a>
## Description

The **pe2sched** command controls the Message Central scheduler. Normally the scheduler is started by calling **/etc/init.d/pe2sched start** .

If the mailing rate reaches four mailings per minute the scheduler may fail. This may result from low open file descriptor limits. Use the ulimit command to check the file descriptor limits on the manager and on nodes:

```
shell> ulimit -Sn; ulimit -Hn
1024
4096
```

You can increase the file descriptor limits by creating the file `/etc/security/limits.d/10-messagesystems.conf` with the following contents:

```
ecuser soft nofile 65536
ecuser hard nofile 65536
root soft nofile 65536
root hard nofile 65536
```

Invoke the scheduler directly when you wish to start it with one of the following options:

<dl class="variablelist">

<dt>-f</dt>

<dd>

Use an alternate configuration file. If this option is not specified, the default configuration file is used.

</dd>

<dt>-1</dt>

<dd>

Perform only one scheduling iteration.

</dd>

<dt>-D</dt>

<dd>

Run in the foreground, useful for debugging purposes.

</dd>

</dl>

<a name="idp2419072"></a>
## See Also

[Section 1.7, “Services”](mc-start-services.php "1.7. Services")

| [Prev](mcg.php)  | [Up](executable-commands.php) |  [Next](mc-logs-files.php) |
| pe2g  | [Table of Contents](index.php) |  Chapter 9. Files Associated with Message Central |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)