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

| Chapter 6. FAQ |
| [Prev](mobility.best.practices.message.mode.php)  | Part I. Mobile Momentum SMPP |  [Next](faq-mobility2.php) |

## Chapter 6. FAQ

**Table of Contents**

<dl class="toc">

<dt>[6.1\. Configuration](faq.php#faq-mobility1)</dt>

<dt>[6.2\. Domains](faq-mobility2.php)</dt>

</dl>

## 6.1. Configuration

<a name="idp1472096"></a>

<dl>

<dt>6.1.1\. [I want to install the mobility module. Am I right in assuming that configuration of domains specifically for SMPP (as opposed to bindings) will play a large part in setting up delivery of email to text SMS?](faq.php#faq-mobility-installation)</dt>

<dt>6.1.2\. [When a message status is ‘P’ (permanent failure), the size of the SMS payload doesn't appear in the permanent failure log. Is there a way to add this information?](faq.php#faq-sms-payload)</dt>

<dt>6.1.3\. [How do I use the SMPP_Persistent_Connections option?](faq.php#faq-mobility-persistent)</dt>

<dt>6.1.4\. [When setting the SMPP_Persistent_Connections option, you set the name of a binding to a number. What does the number assigned to this name do?](faq.php#faq-mobility-persistent-number)</dt>

</dl>

| <a name="faq-mobility-installation"></a><a name="idp1472864"></a>

**6.1.1.**

 | 

I want to install the mobility module. Am I right in assuming that configuration of domains specifically for SMPP (as opposed to bindings) will play a large part in setting up delivery of email to text SMS?

 |
|  | 

Yes, domain configuration defines the interface to the SMSC. A minimal, quick start configuration would look something like this :

```
smpp {}

Domain "somewhere.com" {
  SMPP_SMSC_Server  = "10.0.0.1"
  SMPP_SMSC_Port = "2776"
  SMPP_SMSC_System_ID = "GSMSGW"
  SMPP_SMSC_Password = "secret"
  SMPP_SMSC_System_Type = "CMT"
  SMPP_ESME_Address = "57425"
}
```

Everything but `SMPP_SMSC_Server`, `SMPP_SMSC_Port` and `SMPP_Persistent_Connections` can also be specified or overridden on a per-binding basis.

The `smpp {}` stanza is technically not necessary; if you configure any of the SMPP options it should get autoloaded (but it doesn't hurt to put it in and if you wish to do module-level debugging you will need it). The `SMPP_SMSC_System_Type` may or may not be needed—that depends on the SMSC you are connecting to, and you'll need to ask the SMSC owner if they expect you to provide a system type or not. If you expect SMS-to-email traffic (and not just email-to-SMS), I would also set a `SMPP_Default_Email_Address`; this is used as a catch-all in case the reverse address mappings can't find what email address to send SMS-to-email replies to.

 |
| <a name="faq-sms-payload"></a><a name="idp486336"></a>

**6.1.2.**

 | 

When a message status is ‘`P`’ (permanent failure), the size of the SMS payload doesn't appear in the permanent failure log. Is there a way to add this information?

 |
|  | 

You can add the size of the SMS payload by changing the format string for the `log_permfail_format` option. The default value for this option is `%t@S@%s@%d@%q@%bg@%b@%ip@%rm@%T@%S@%e`. To include the size, simply add the macro `%l`.

 |
| <a name="faq-mobility-persistent"></a><a name="idp513408"></a>

**6.1.3.**

 | 

How do I use the `SMPP_Persistent_Connections` option?

 |
|  | 

The following configuration shows how to use the `SMPP_Persistent_Connections` option.

```
Domain "somewhere.com" {
  SMPP_SMSC_Server  = "10.0.0.1"
  SMPP_SMSC_Port = "2776"
  SMPP_SMSC_System_ID = "GSMSGW"
  SMPP_SMSC_Password = "secret"
  SMPP_ESME_Address = "57425"
  SMPP_Default_Email_Address = "user@domain.com"
  SMPP_Bind_Type = "Transmitter"
  SMPP_Persistent_Connections = [ "persist_this" = 1 ]
}

Binding "persist_this" {
  Max_Outbound_Connections = 1
  SMPP_Bind_Type = "Receiver"
}
```

In this case, Momentum will create connections as needed for transmitting SMS on the Domain `somewhere.com` and will also maintain a single persistent connection for receiving SMS on the binding `persist_this`.

 |
| <a name="faq-mobility-persistent-number"></a><a name="idp425312"></a>

**6.1.4.**

 | 

When setting the `SMPP_Persistent_Connections` option, you set the name of a binding to a number. What does the number assigned to this name do?

 |
|  | 

In `SMPP_Persistent_Connections`, each binding is mapped to the number of connections you want to have to a particular domain from that binding. If a binding appears in `SMPP_Persistent_Connections`, then instead of figuring out the number of connections based on the number of messages queued for the domain/binding using the settings, `Max_Outbound_Connections` and `Connection_Allocation_Aggressiveness`, we always try to open (and keep open) the number of connections you have configured in `SMPP_Persistent_Connections`. Bindings configured with a `SMPP_Bind_Type` of `Receiver` should always appear in `SMPP_Persistent_Connections`, or no connections will ever be opened on that binding (because Receiver bindings will never have messages queued on them).

 |

| [Prev](mobility.best.practices.message.mode.php)  | [Up](p.smpp.php) |  [Next](faq-mobility2.php) |
| 5.9. Message Mode  | [Table of Contents](index.php) |  6.2. Domains |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)