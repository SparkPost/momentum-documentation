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

| 20.2. `eventlog` |
| [Prev](log_formats.php)  | Chapter 20. Log Formats |  [Next](log_formats.fbllog.php) |

## 20.2. `eventlog`

**Coming Soon. ** Unsubscribe events is a new feature. For more information, contact your Technical Account Manager.

The `eventlog` logs message, generation, engagement, or unsubscribe events.

Message events describe the life cycle of a message including injection, delivery, and disposition. The following are the available message events:

*   Delivery ("delivery") - Remote mail transfer agent (MTA) acknowledged receipt of a message.

*   Injection ("reception") - Message is received by or injected into SparkPost Elite.

*   Policy Rejection ("rejection") - Due to policy, SparkPost Elite rejected a message or failed to generate a message.

*   Bounce ("inband") - Remote MTA has permanently rejected a message.

*   Out-of-Band ("out-of-band") - Remote MTA initially reported acceptance of a message, but it has since asynchronously reported that the message was not delivered.

*   Delay ("tempfail") - Remote MTA has temporarily rejected a message.

*   Spam Complaint ("feedback") - Message was classified as spam, whether manually or programmatically.

Generation events provide insight into message generation failures or rejections. The following are the available generation events:

*   Generation Rejection ("gen_rejection") - SparkPost Elite rejected message generation due to policy.

*   Generation Failure ("gen_fail") - Message generation failed for an intended recipient.

Engagement events describe the behavior of a recipient with respect to the message sent. The following are the available engagement events:

*   Click ("click") - Recipient clicked a tracked link in a message, thus prompting a redirect through the SparkPost Elite click-tracking server to the link’s destination.

*   Open ("open") - Recipient opened a message in a mail client, thus rendering a tracking pixel.

Unsubscribe events provide insight into the action the user performed to become unsubscribed:

*   List Unsubscribe - User clicked the "unsubscribe" button on an email client.

*   Link Unsubscribe - User clicked a hyperlink in a received email.

### 20.2.1. Event Records

The `eventlog` includes a batch of event data consisting of one or more event records, each composed of a payload wrapped in a type-specific JSON envelope. Each event record payload includes the data fields specific to that event type.

The following shows an example "delivery" payload. For the field definitions and a mapping of the fields that constitute a payload for a given event type, use the Webhook Events and Webhook Sample Events endpoints. See the Webhooks API documentation available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

```
{  
   "msys":{  
      "message_event":{  
         "binding":"example_binding",
         "delv_method":"esmtp",
         "num_retries":"0",
         "msg_spoolname":"71/D2-04507-0E86CA45",
         "customer_id":"1",
         "ip_address":"00.000.00.00",
         "type":"delivery",
         "msg_batchname":"61/D2-04507-0E86CA45",
         "timestamp":"1420585186",
         "transmission_id":"65946784328843389",
         "node_name":"example_node",
         "queue_time":"1390",
         "conn_stage":"1",
         "routing_domain":"example_domain.com",
         "recv_method":"rest",
         "rcpt_meta":{  
            "place":"Example City",
            "key":"value"
         },
         "conn_name":"00/00-00000-00000000",
         "msg_size":"1290",
         "binding_group":"example_group",
         "campaign_id":"ExampleCampaign",
         "message_id":"0003e068ac549b11172d",
         "rcpt_tags":[  
            "tag1",
            "tag2"
         ]
      }
   }
}
```

| [Prev](log_formats.php)  | [Up](log_formats.php) |  [Next](log_formats.fbllog.php) |
| Chapter 20. Log Formats  | [Table of Contents](index.php) |  20.3. `fbllog` |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)