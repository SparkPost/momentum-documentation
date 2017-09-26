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

| 14.37. maildir – Maildir Delivery Support |
| [Prev](modules.mail_loop.php)  | Chapter 14. Modules Reference |  [Next](modules.mtamark.php) |

## 14.37. maildir – Maildir Delivery Support

<a class="indexterm" name="idp12348224"></a>

The maildir I/O module subverts the regular spooling actions for qualified messages to storage in maildir format as specified by qmail: [http://www.qmail.org/man/man5/maildir.html](http://www.qmail.org/man/man5/maildir.html) .

### 14.37.1. Configuration

<a name="example.maildir"></a>

**Example 14.57. maildir module**

```
IO_System io/local_store maildir {
  basedir = /var/tmp/popbase
  dirmode = 775
  filemode = 664
  maxiovec = 16
  create_users = true
  domain_in_path = true
  all_domains = false
  domain = example.com
  domain = another.example.com
}
```

<dl class="variablelist">

<dt>all_domains</dt>

<dd>

If set to true, all domains will be delivered to the maildir store, otherwise, only the domains configured by the `domain` option will be delivered to the maildir store.

</dd>

<dt>basedir</dt>

<dd>

The base directory under which to create maildir mailboxes.

</dd>

<dt>createusers</dt>

<dd>

If set to true, any user for one of the configured domains will be accepted for local delivery; the mailbox will be created if it does not already exist. This is most useful in conjunction with custom logic programmed using policy scripts.

If set to false, the message will be rejected if the mailbox does not already exist.

</dd>

<dt>dirmode</dt>

<dd>

The file permission mode to use on directories created by the module.

</dd>

<dt>domain</dt>

<dd>

This option configures a domain for delivery to the maildir store. It can be specified multiple times.

</dd>

<dt>domain_in_path</dt>

<dd>

If set to true the mailbox path will include the domain name, otherwise it will not.

</dd>

<dt>filemode</dt>

<dd>

The file permission mode to use on files created by the module.

</dd>

<dt>maxiovec</dt>

<dd>

The maximum number of io vectors to use with the `writev` system call. Increasing the value results in a lower number of system calls to completely journal the message to disk, however, some systems have a lower maximum limit on the number of iovecs than others; consult your system documentation for more details.

**Configuration Change. ** This option is deprecated in version 2.2.

</dd>

</dl>

### 14.37.2. Sieve support

In addition to the `domain` configuration, you can use [ec_maildir](sieve.ref.ec_maildir.php "ec_maildir") to selectively store messages in the maildir store.

| [Prev](modules.mail_loop.php)  | [Up](modules.php) |  [Next](modules.mtamark.php) |
| 14.36. mail_loop – Mail Loop Detection  | [Table of Contents](index.php) |  14.38. mtamark – MTAMARK |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)