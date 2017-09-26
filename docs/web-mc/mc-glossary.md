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

| Glossary |
| [Prev](mc3-pitr-restoring.php)  |   |  [Next](copyrights.php) |

## Glossary

<dl>

<dt><a name="mc3.gloss.ab.split"></a>A/B Split Mailing</dt>

<dd class="glossdef">

Using an A/B Split mailing is a way to test content or subject line without having to set up two separate mailings. Once two or more test segments, the content items, the wait period, and the winning statistics (either clicks or opens) are set up, the A/B Split Mailing will automatically send out the winning content to the remainder of the list.

</dd>

<dt><a name="mc3.gloss.api.triggered"></a>API-triggered Mailing</dt>

<dd class="glossdef">

An api-triggered mailing is a mailing that is never built, but is continually evaluated to see if recipients have been pushed to it via the API. When they have been pushed, mail is generated for those recipients. You may not use the UI to add recipients to an API-triggered mailing, because it is API-triggered, not UI-triggered.

</dd>

<dt><a name="mc-esp"></a>Email Service Provider (ESP)</dt>

<dd class="glossdef">

A company that provides email services. Message Central lets an ESP set up a different Org for each client.

</dd>

<dt><a name="mc-mta"></a>Mail Transfer Agent (MTA)</dt>

<dd class="glossdef">

A server application that communicates using SMTP to receive and deliver messages via SMTP. An MTA accepts messages from end-user email clients and campaign management applications for delivery to external hosts but does not deliver messages to the end user.

</dd>

<dt><a name="mc-mime"></a>Multipurpose Internet Mail Extensions (MIME)</dt>

<dd class="glossdef">

The standard that specifies the format of email messages so that they can be exchanged between different MTAs.

</dd>

<dt><a name="mc-prce"></a>Perl Compatible Regular Expressions (PCRE)</dt>

<dd class="glossdef">

A C regular expression library modelled on the Perl regular expression library. This library is incorporated into a number of open-source projects.

</dd>

<dt><a name="mc3.gloss.rest"></a>Representational State Transfer (REST)</dt>

<dd class="glossdef">

Web services available over HTTP. In Message Central the REST API replaces the original SOAP API. Using REST you can interact with Message Central programmatically.

</dd>

<dt><a name="mc-rfc"></a>Request For Comment (RFC)</dt>

<dd class="glossdef">

New standards and protocols are released to their relative engineering groups as RFCs. These RFCs are evolved and ratified to become the standards using for communications across the Internet.

</dd>

<dt>RFC2047 - MIME</dt>

<dd class="glossdef">

The standard for message header extensions for non-ASCII text. See also [Request For Comment](mc-glossary.php#mc-rfc "Request For Comment").

</dd>

<dt><a name="mc-segment"></a>Segment</dt>

<dd class="glossdef">

A segment is a subset of the recipients of a List. Segments are usually used in order to send different content to different subsets of a mailing. Using Message Central you can define a single mailing that targets different audiences who recieve unique content.

</dd>

<dt><a name="mc-toast"></a>The Oversized-Attribute Storage Technique (TOAST)</dt>

<dd class="glossdef">

In PostgreSQL it is not possible to store large fields directly. TOAST is the technique used to break up large fields over multiple rows. Creating any PostgreSQL database creates a `pg_toast` schema for handling large field values.

</dd>

<dt><a name="mc-verp"></a>Variable Envelope Return Path (VERP)</dt>

<dd class="glossdef">

This technique specifies a different return path for every email making it possible to associate bounced email with a specific sender so that invalid addresses can be removed from mailing lists. For more information see ["RFC 3464"](http://tools.ietf.org/html/rfc3464).

</dd>

</dl>

| [Prev](mc3-pitr-restoring.php)  |   |  [Next](copyrights.php) |
| A.3. Restoring Normal Operations After Database Fail Over  | [Table of Contents](index.php) |  Appendix B. Copyright Notices |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)