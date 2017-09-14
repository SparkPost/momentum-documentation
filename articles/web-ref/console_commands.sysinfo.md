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

| sysinfo |
| [Prev](console_commands.summary_reset.php)  | 12.2. System Console Commands |  [Next](console_commands.threads.php) |

<a name="console_commands.sysinfo"></a>
## Name

sysinfo — show system information

## Synopsis

`sysinfo`

<a name="idp16492688"></a>
## Description

This command shows Momentum version information and the information of the operating system.

```
Momentum Version: HEAD r(12527/12532M) (32-bit)
build date: Aug 15 2006 (RELEASE)
product name: Momentum
Linux battleaxe 2.6.10-1.737_FC3smp #1 SMP Mon Jan 10 14:04:45 EST 2005 i686
```

As of version 3.0.23, this command also displays the OS release:

```
Ecelerity Version: 3.0.0.36220 r(36220) (64-bit)
build date: Mar 23 2010 (RELEASE)
product name: Ecelerity Momentum Sending
CentOS release 5 (Final)
Linux rh5bare 2.6.18-8.el5 #1 SMP Thu Mar 15 19:46:53 EDT 2007 x86_64
```

```
Ecelerity Version: 3.0.0.36264 r(36264) (64-bit)
build date: Mar 26 2010 (RELEASE)
product name: Ecelerity Momentum Sending
Solaris 10 10/08 s10x_u6wos_07b X86
SunOS 5.10 Generic_137138-09 i86pc i386 i86pc
```

```
Ecelerity Version: 3.0.0.36220 r(36220) (64-bit)
build date: Mar 23 2010 (RELEASE)
product name: Ecelerity Momentum Sending
SUSE Linux Enterprise Server 10 (x86_64)
Linux sel10bare 2.6.16.21-0.8-default #1 Mon Jul 3 18:25:39 UTC 2006 x86_64
```

| [Prev](console_commands.summary_reset.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.threads.php) |
| summary reset  | [Table of Contents](index.php) |  threads |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)