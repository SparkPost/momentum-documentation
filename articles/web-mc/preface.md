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

| Preface |
| [Prev](index.php)  |   |  [Next](mc-installation.php) |

## Preface

**Table of Contents**

<dl class="toc">

<dt>[1\. Typographical Conventions Used in This Document](preface.php#typographical)</dt>

</dl>

## 1. Typographical Conventions Used in This Document

Certain typographical conventions are used in this document. Take a moment to familiarize yourself with the following examples.

*   **Text in this style**               indicates executable programs such as **/etc/init.d/pe2clickctl start** .

*   `Text in this style` is used when referring to file names. For example, "The `pe2.conf` file is used to configure Message Central".

*   `Text in this style` is used when referring to command options. For example, "`list` is an option for the **module** command."

*   *Text in this style*               is used for emphasis.

*   **Text in this style**               is used for added emphasis.

*   *`Text in this style`*                indicates variable input—text that changes depending upon circumstances. For example, "The pe2-*`version`* directory where *`version`* indicates your version number."

*   **`Text in this style`**                indicates user input. For example, "Install the application by issuing the command **`./installer`**."

*   `Text in this style` is used for literal values and variable names. For example, "A license file named `license`."

*   Text such as the following, ‘`C`’, is used to indicate a literal reference to a specific character. For example, "The letter ‘`C`’ in CIDR stands for 'Classless'".

In some circumstances, what appears on one line on the screen or in a program listing cannot be represented on one line in some forms of the documentation. In circumstances such as this, the ‘`»`’ character is used. For example:

```
1187990817@DD/0C-13258-881AAC64@T@gmal.com@0@foogroup@foo1@21@8@ »
306072.00@10.0.0.1@421 4.4.0 [internal] no adequate servers
```

The preceding line would appear unbroken in a log file but, if left as is, it would be truncated in a PDF version of the documentation.

Where possible, Unix command-line commands are broken using the ‘`\`’ character, making it possible to copy and paste commands. For example:

```
/opt/msys/ecelerity/bin/ec_md5passwd -r "Ecelerity Command Center" \
  -f /opt/msys/ecelerity/etc/console_passwd ecadmin testing
```

### Feedback

To provide feedback regarding this document, send email to `<[documentation@messagesystems.com](mailto:documentation@messagesystems.com)>`.

| [Prev](index.php)  |   |  [Next](mc-installation.php) |
| Message Central 3.x Reference  | [Table of Contents](index.php) |  Chapter 1. Installing Message Central |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)