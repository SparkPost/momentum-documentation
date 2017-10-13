## 71.46. maildir – Maildir Delivery Support

<a class="indexterm" name="idp22141520"></a>

The maildir I/O module subverts the regular spooling actions for qualified messages to storage in maildir format as specified by qmail: [http://www.qmail.org/man/man5/maildir.html](http://www.qmail.org/man/man5/maildir.html) .

### 71.46.1. Configuration

<a name="example.maildir.3"></a>

**Example 71.71. maildir module**

```
maildir "maildir1" {
  basedir = "/var/tmp/popbase"
  dirmode = 775
  filemode = 664
  create_users = true
  domain_in_path = true
  all_domains = false
  domains = ( "example.com"
            "another.example.com")
}
```

<dl class="variablelist">

<dt>all_domains</dt>

<dd>

If set to true, all domains will be delivered to the maildir store; otherwise, only the domains configured by the `domain` option will be delivered to the maildir store.

</dd>

<dt>basedir</dt>

<dd>

The base directory under which to create maildir mailboxes.

</dd>

<dt>createusers</dt>

<dd>

If set to true, any user for one of the configured domains will be accepted for local delivery and the mailbox will be created if it does not already exist. This is most useful in conjunction with custom logic programmed using policy scripts.

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

</dl>

| [Prev](modules.mail_loop.php)  | [Up](modules.php) |  [Next](modules.msgc.php) |
| 71.45. mail_loop – Mail Loop Detection  | [Table of Contents](index.php) |  71.47. msgc – Message Systems Group Communication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)