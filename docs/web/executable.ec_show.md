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

| ec_show |
| [Prev](executable.ec_sendmail.php)  | 11.2. Executable Commands |  [Next](executable.ec_spp.php) |

<a name="executable.ec_show"></a>
## Name

ec_show — show spool or message information

## Synopsis

`/opt/ecelerity/bin/ec_show` [ -c *`config_file`* ] [ --end_date *`PCRE`* ] [ -h ] [ -m *`message id`*     ] [ -n ] [ --recipient *`PCRE`* ] [ -s ] [ --sender *`PCRE`* ] [ --start_date *`PCRE`* ]

<a name="idp8168608"></a>
## Description

`ec_show` is a utility to show spool or message information. It can also show messages matching a specified PCRE ([Perl Compatible Regular Expression](http://www.pcre.org/)).

It has the following options:

<dl class="variablelist">

<dt>-c *`/path/to/config`*</dt>

<dd>

Specify a Momentum configuration file to work with.

</dd>

<dt>--end_date *`PCRE`*</dt>

<dd>

Show the messages whose creation time is no later than the time specified in the PCRE.

</dd>

<dt>-h</dt>

<dd>

Show a help message.

</dd>

<dt>-m *`message_id`*</dt>

<dd>

Show the message specified by *`message_id`*.

</dd>

<dt>-n</dt>

<dd>

Show the count of messages in the spool only.

</dd>

<dt>--recipient *`PCRE`*</dt>

<dd>

Show the messages whose recipients match the specified PCRE.

</dd>

<dt>-s</dt>

<dd>

Show spool the directory including the messages. Spool directory is the default or the file specified by the Momentum configuration file.

</dd>

<dt>--sender *`PCRE`*</dt>

<dd>

Show the messages whose sender match the specified PCRE.

</dd>

<dt>--start_date *`PCRE`*</dt>

<dd>

Show the messages whose creation time is no earlier than the time specified in the PCRE.

</dd>

</dl>

Find below the output of the command **ec_show -s**    when there is one message in the message queue:

```
Message: 00/00-02001-C6DD1CA4
  ID: (slot: 1254219116, pid: 2001, counter: 0)
  BatchID: (slot: 1254219116, pid: 2001, counter: 0)
  ConnID: (slot: 1254219116, pid: 2001, counter: 1)
  Swapped: Yes
  Created: 2009-09-29 06:11:56
  Next Attempt: 2009-09-29 06:11:56
  Retries: 0
  Received From: ESMTP 192.168.0.5:47780
  Received Via: 192.168.0.50:25
  Sender: peter@kubuntu
  Recipient: peter@gmail.com
  Code:
  Size: 505
  Connection Context: [
  connection_message_count = "1"
  pathway = "default"
  ehlo_domain = "kubuntu"
  connection_rcpt_count = "1"
  can_relay = "true"
  ehlo_string = "EHLO kubuntu"
  message_rcpt_count = "1"
  ]
  Message Context: [
  rcptto_string = "RCPT TO:<peter@gmail.com>"
    mailfrom_localpart = "peter"
    mailfrom_string = "MAIL FROM:<peter@kubuntu>"
      rcptto_localpart = "peter"
      rcptto_domain = "gmail.com"
      mailfrom_domain = "kubuntu"
      ]

      Return-Path: <peter@kubuntu>
        Received: from [192.168.0.5] ([192.168.0.5:47780] helo=kubuntu)
        by centos (envelope-from <peter@kubuntu>)
          (ecelerity 3.0.16.33344 r(33348)) with ESMTP
          id 00/00-02001-C6DD1CA4; Tue, 29 Sep 2009 06:11:56 -0400
          Date: Tue, 29 Sep 2009 10:11:58 -0400
          Message-ID: <00.00.02001.C6DD1CA4@centos>
            To: peter@gmail.com
            From: peter@kubuntu
            Subject: test Tue, 29 Sep 2009 10:11:58 -0400
            X-Mailer: swaks v20061116.0 jetmore.org/john/code/#swaks

            This is a test mailing

            .
```

| [Prev](executable.ec_sendmail.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_spp.php) |
| ec_sendmail  | [Table of Contents](index.php) |  ec_spp |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)