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

| 14.49. seedlist – Seedlist Integration |
| [Prev](modules.sched.php)  | Chapter 14. Modules Reference |  [Next](modules.sendmail_logger.php) |

## 14.49. seedlist – Seedlist Integration

<a class="indexterm" name="idp12713216"></a>

The seedlist module allows for seamless, zero-effort integration with the popular deliverability monitoring service, ReturnPath's [Mailbox Monitor](http://www.returnpath.net/commercialsender/monitoring/). Services of this nature automatically monitor your deliverability into various ISPs by having you send a copy of every campaign/mailing to a set of unique addresses which they then poll on a regular basis. Momentum's seedlist module simplifies this process by allowing you to pass the list of seeds to the MTA, as well as define criteria that distinguish unique campaigns (for example matching a VERP pattern or a particular header). When Momentum detects a new campaign, it will send a copy of the new campaign to every address on the seedlist. Campaigns are determined by patterns specified in either the `match_verp` or `match_header` options.

### Note

The Momentum seedlist module was designed with ReturnPath seed lists in mind, not real email addresses. If you use the seedlist module in conjunction with Message Central, this module will send a copy of the first email it sees to the entire seedlist *as a copy* . What this means is that if the first email to hit the seedlist module was customized for "John Smith", then that exact email will be copied and send to *all* the addresses in the seedlist. This is by design because this is how ReturnPath seed lists work. However, if your seedlist has *real* email addresses in it, then recipients will get a copy of John Smith's customized email. That also means that if those real people click or open the email, it will represent a click or open associated with John Smith. This is probably not what you want.

If you are using ReturnPath seeds and just want to test domain penetration, with generic mail then use this module. If you want to send customized mail to each recipient in a real-person seed list, then you should create a target list of Message Central recipients.

### 14.49.1. Basic Configuration

A typical seedlist configuration looks like the following:

<a name="example.seedlist"></a>

**Example 14.66. seedlist module**

```
Validate validate/seedlist seedlist {
  seedlist_file = "/opt/ecelerity/etc/seeds"
  cache_file = "/var/log/ecelerity/sent_seeds"
  no_seed_condition = "context_variable"
  criteria:verp = "bounces-(?P<campaignid>\w+)"
}
```

The `seedlist_file` option sets the path to the file containing the list of 'seed' email addresses to send copies to. This file should contain the destination addresses, one per line.

The `cache_file` option specifies the location where Momentum will keep its cache of what campaigns it has identified so far (so that it does not send to the seedlist more than once per campaign). The file pointed to by this option is a SQLite database maintained by the seedlist module.

The `criteria:verp` option tells Momentum how to detect a new campaign. It applies the specified pattern to the envelope sender (MAIL FROM) of the message, and tries to extract the campaign identifier. You must extract the campaign identifier into a subexpression named `campaignid`. The localpart of your VERP address should be constructed so that a unique expression is extracted to the `campaignid` identifier. For example, `bounces-123-456@bounces.foo.com` will extract '123-456' into the `campaignid` identifier. This will enable the seedlist module to recognize your campaign as new.

The `no_seed_condition` option tells Momentum to check for the context variable that you specify. If that variable is set to **ANY** value, then the message is assumed *not* to be part part of that campaign.

**Configuration Change. ** The no_seed_condition option is available in Momentum 2.1.2.

In addition to matching VERP'd senders, you can also match against headers in the mail, for instance:

<a name="example.seedlist.headers"></a>

**Example 14.67. seedlist VERP**

```
Validate validate/seedlist seedlist {
  seedlist_file = "/opt/ecelerity/etc/seeds"
  cache_file = "/var/log/ecelerity/sent_seeds"
  no_seed_condition = "context_variable"
  criteria:verp = "bounces-(?P<campaignid>\w+)"
  criteria:header:Message-ID = "foo-(?P<campaignid>\w+)"
  criteria:header:Message-ID = "bar-(?P<campaignid>\w+)"
  insert_campaign_header = "X-Campaign-ID"
}
```

In the above we matched our original VERP header, as well as two possible patterns against the `Message-ID` header in the mail. You can specify an arbitrary number of patterns—they will be applied in order until one matches. If there are no matches, then the mail will not be considered part of a campaign and a message will not be sent to the seedlist.

The `insert_campaign_header` option is optional and allows Momentum to add a header to the seedlist copy mails that contains just the campaign identifier extracted by the matching rules. This can be convenient for integrating against services like Return Path's Mailbox Monitor which prefer you to use a header to uniquely identify campaigns.

| [Prev](modules.sched.php)  | [Up](modules.php) |  [Next](modules.sendmail_logger.php) |
| 14.48. sched – The Schedule Module  | [Table of Contents](index.php) |  14.50. sendmail_logger – Sendmail-Compatible Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)