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

| 5.2. Message Conversion Parameters |
| [Prev](mobility.best.practices.php)  | Chapter 5. SMPP Configuration Best Practices |  [Next](mobility.best.practices.timer.params.php) |

## 5.2. Message Conversion Parameters

The following parameters may be used to tailor Email to SMS message conversion and the SMS/Email interworking format of Mobile Momentum SMS transmissions.

1.  `SMPP_Max_Sms_Message_Size` – default 140

2.  `SMPP_Sms_Segment_Size` – default 140

3.  `SMPP_Max_Sms_From_Size` – default 0

4.  `SMPP_Max_Sms_Subject_Size` – default 10

`SMPP_Max_Sms_Message_Size` restricts the total message length while `SMPP_Sms_Segment_Size` specifies the size of SMS segments. If `SMPP_Max_Sms_Message_Size` is larger than `SMPP_Sms_Segment_Size`, then any messages larger than SMPP_Sms_Segment_Size will be sent in multiple segments as described in the [smpp_max_sms_message_size](mobility.conf.smpp_max_sms_message_size.php "smpp_max_sms_message_size"), "Email to SMS Conversions". `SMPP_Max_Sms_From_Size` and `SMPP_Max_Sms_Subject_Size` are lengths of the email sender address and email subject to include in the SMS message according to the SMS/Email interworking format. `SMPP_Max_Sms_Message_Size` is inclusive of `SMPP_Max_Sms_From_Size` and `SMPP_Max_Sms_Subject_Size`.

```
domain "somewhere.com" {
  ...
  SMPP_Max_Sms_Message_Size = 140
  SMPP_Sms_Segment_Size = 140
  SMPP_Max_Sms_From_Size = 12
  SMPP_Max_Sms_Subject_Size = 10
  ...
}
```

Using the above configuration, the email message `Greetings from Orlando!` from `mailto:mickey@disneyworld.com` with the subject `stay in touch` would result in the following truncated SMS text:

`mickey@disne (stay in to) Greetings from Orlando!`

To turn off email/SMS interworking formatting, set: `SMPP_Max_Sms_Subject_Size = 10` and set `SMPP_Max_Sms_From_Size` from the default to `0`.

| [Prev](mobility.best.practices.php)  | [Up](mobility.best.practices.php) |  [Next](mobility.best.practices.timer.params.php) |
| Chapter 5. SMPP Configuration Best Practices  | [Table of Contents](index.php) |  5.3. SMPP Timer Parameters |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)