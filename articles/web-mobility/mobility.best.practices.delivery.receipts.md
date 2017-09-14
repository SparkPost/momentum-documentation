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

| 5.4. Delivery Receipts |
| [Prev](mobility.best.practices.timer.params.php)  | Chapter 5. SMPP Configuration Best Practices |  [Next](mobility.best.practices.persistent.cnnections.php) |

## 5.4. Delivery Receipts

Delivery receipts are messages generated from carrier and/or aggregator network equipment notifying a short message submitter of an intermediate or final status of an SMS submission.

Two parameters in Mobile Momentum control deliver receipt handling. First, delivery receipts are requested for message submissions by setting the `SMPP_Registered_Delivery` configuration parameter to one of the following the classes of delivery status:

*   SMSC_Delivery

*   SMSC_Delivery_Failure

*   SME_Delivery

*   SME_User

*   Intermediate

If you wish to receive delivery receipts, consult with your carrier or provider about which classes of delivery receipts are supported on their network.

If you are *receiving* delivery receipts, use the `SMPP_Notify_Deliver_Receipt` option to forward receipts as email to the original sender. The following list specifies the delivery status values that can be returned:

*   ALL

*   DELIVRD

*   EXPIRED

*   DELETED

*   UNDELIV

*   ACCEPTD

*   UNKNOWN

*   REJECTD

Both of these configuration parameters use array notation to accept multiple values.

In the following example, the `SMPP_Registered_Delivery` option requests delivery notifications of the type `SMSC_Delivery_Failure` for its SMS submissions. `SMPP_Notify_Deliver_Receipt` is set to `ALL`, indicating that email messages are to be constructed for all delivery receipt message status types.

```
domain "somewhere.com" {
  ...
  SMPP_Registered_Delivery = ("SMSC_Delivery_Failure")
  SMPP_Notify_Deliver_Receipt = ("ALL")
  ...
```

| [Prev](mobility.best.practices.timer.params.php)  | [Up](mobility.best.practices.php) |  [Next](mobility.best.practices.persistent.cnnections.php) |
| 5.3. SMPP Timer Parameters  | [Table of Contents](index.php) |  5.5. Persistent Connections |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)