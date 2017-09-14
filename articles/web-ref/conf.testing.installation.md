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

| 2.11. Testing Your Installation |
| [Prev](conf.starting.php)  | Chapter 2. Configuration |  [Next](web3.php) |

## 2.11. Testing Your Installation

You can test your installation by using telnet to connect to port 25 on a cluster node. However, the [swaks](http://www.jetmore.org/john/code/swaks/) tool provides an easier way to test your installation.

### Note

Message Systems does not provide support for the use of any third party tools that we include or reference by name within our product or product documentation; support is the sole responsibility of the third party provider.

Assuming that the user `admin` is configured to receive email at `example.org`, you can send a test message in the following way. Log in to a node, then go to the command line and issue the command:

`shell> swaks -t admin@example.org -f root@centos32 -s localhost`

Doing this sends an email to `admin@example.org` through the mail server on localhost. The received message should be similar to the following:

```
From root@centos32 Mon Aug 09 11:12:11 2010
Return-path: <root@centos32>
Envelope-to: admin@example.org
Delivery-date: Mon, 09 Aug 2010 11:12:11 -0400
Received: from centos32.lan ([192.168.0.56] helo=centos32)
  by kubuntu with esmtp (Exim 4.69)
  (envelope-from <root@centos32>)
  id 1OiU1L-00020b-84
  for admin@example.org; Mon, 09 Aug 2010 11:12:11 -0400
Received: from [127.0.0.1] ([127.0.0.1:50033] helo=centos32)
  by centos32 (envelope-from <root@centos32>)
  (ecelerity 3.0.24.37068 r(37071)) with ESMTP
  id 80/00-02010-982EF5C4; Mon, 09 Aug 2010 07:12:09 -0400
Date: Mon, 09 Aug 2010 07:12:09 -0400
Message-ID: <0.00.02010.982EF5C4@centos32>
To: admin@example.org
From: root@centos32
Subject: test Mon, 09 Aug 2010 07:12:09 -0400
X-Mailer: swaks v20061116.0 jetmore.org/john/code/#swaks
Status: O
Content-Length: 24
Lines: 2

This is a test mailing
```

In this example, for the sake of clarity, the server is specified using the `-s` option. If Momentum is hosted on the local machine this option is not required. However, if you wish to connect to an MTA from a remote computer you must ensure that relaying is configured correctly and that swaks is available on the remote computer.

To learn more about swaks navigate to the [swaks](http://jetmore.org/john/code/swaks/) website.

| [Prev](conf.starting.php)  | [Up](conf.php) |  [Next](web3.php) |
| 2.10. Starting Momentum  | [Table of Contents](index.php) |  Chapter 3. Using the Web Console |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)