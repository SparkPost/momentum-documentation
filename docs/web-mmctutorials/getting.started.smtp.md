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

| Chapter 1. Sending Email Using SMTP |
| [Prev](p.injection.php)  | Part I. How-To Guides: Injection |  [Next](p.creating.php) |

## Chapter 1. Sending Email Using SMTP

**Introduction**

"How do I send email?" Many companies ask this question. Enterprises of all kinds need to send email, but few know where to even start. Whether you are sending a few transactional messages or managing high-volume marketing campaigns, SparkPost Elite easily integrates with your new or existing applications. It combines sending with real-time reporting and customer engagement data to meet your messaging needs.

SparkPost Elite accepts mail for delivery using SMTP (Simple Mail Transfer Protocol) or HTTP (Hypertext Transfer Protocol). When using SMTP, SparkPost Elite presents itself exactly as any other message transfer agent (MTA). User-level, client mail applications combine recipient list, template, and content into fully formed messages, conforming to the RFC 2822 standard, and send these messages to SparkPost Elite, which relays the messages ultimately to the recipients' inbox. By default, SMTP uses TCP port 25 for communication from the client mail application to a MTA.

### Note

To inject messages using SMTP, you will need existing generation or mail merge software that creates an email for delivery. The information provided in this section is intended as an introduction. However, a general knowledge of your existing client mail application is required.

**Adjusting your Client Mail Application** 

The following examples provide instructions to transition from your existing Postfix or Sendmail MTA to SparkPost Elite.

**Example 1:** 

If your application is already using SMTP to send messages directly to your existing MTA, simply adjust your application to send the messages to SparkPost Elite.

Common SMTP libraries include JavaMail (Java), Net::SMTP (Perl and Ruby), smtplib (Python), and OpenSmtp.net (C#).

**Example 2:** 

If you have some management code that needs to use the local server's "Mail" function:

*   If you are using Sendmail, edit the **/etc/mail/sendmail.mc** file to add a "smart-host" definition.

    **define(`SMART_HOST',`smtp.MySparkPostEliteServer.com')**

*   If you are using Postfix, edit the **/etc/postfix/transport** file to add an smtp relay definition.

    **`* smtp:MySparkPostEliteServer.com`**                                 

*   Apply the changes and restart the local mail services.

*   Execute the management code as normal.

The mail will route to SparkPost Elite for delivery.

**Using SMTP Authentication** 

SMTP authentication allows you to use an API key with "Send via SMTP" permissions as the password to authenticate SMTP injections on port 587\. You can add this permission to an existing API key or create a new API key. For instructions about API keys, see [Chapter 3, *Creating, Modifying, and Deleting an API Key*](getting.started.apikey_ui.php "Chapter 3. Creating, Modifying, and Deleting an API Key") .

**Configuration Change. ** If you want to use SMTP authentication, contact your Technical Account Manager. Your Technical Account Manager will coordinate with you to ensure that you have the necessary functionality in place before this feature is fully enabled, as once it is, you will no longer be able to inject over port 25.

| [Prev](p.injection.php)  | [Up](p.injection.php) |  [Next](p.creating.php) |
| Part I. How-To Guides: Injection  | [Table of Contents](index.php) |  Part II. How-To Guides: Creating |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)