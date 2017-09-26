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

| Chapter 15. Using Webhooks for Event Data |
| [Prev](p.reporting_tracking.php)  | Part IV. How-To Guides: Reporting and Tracking |  [Next](webhooks.ui.php) |

## Chapter 15. Using Webhooks for Event Data

**Introduction**

Webhooks provide an alternate way to get reporting data from SparkPost Elite. Instead of passively polling for data, webhooks push notifications when events happen. Webhooks act as user-defined HTTP callbacks. When you create a webhook, you register a URL and specify the events for which you want reporting data. When those events occur, SparkPost Elite will post the data to your URL. Your application can then perform whatever action is required based on your specific needs. Webhooks enables you to fully integrate your custom application with SparkPost Elite.

You can create webhooks to push data for various types of events. When an event occurs, a batch of event data is HTTP POSTed to your target URL. This batch consists of one or more event records, each composed of a payload wrapped in a type-specific JSON envelope. The payload includes all the metrics related to that specified event.

In this tutorial, you will learn how to create a webhook using the Webhooks API. You will create a webhook for tracking engagement data and generate this data by sending the email that you created in the tutorial on tracking engagement.

### Note

This tutorial assumes that you have completed the tutorial in [Chapter 22, *Tracking Engagement for HTTP*](getting.started.engage.php "Chapter 22. Tracking Engagement for HTTP") . A general knowledge of command line tools, JSON, HTTP protocol, and templating languages is required.

You must have a valid API key to complete this tutorial. If you do not, complete the tutorial [Chapter 3, *Creating, Modifying, and Deleting an API Key*](getting.started.apikey_ui.php "Chapter 3. Creating, Modifying, and Deleting an API Key") .

You will also need a URL to receive the event data.

**Determining the Available Event Types** 

The type of events that are available in your environment and the fields that constitute a webhook's payload for a given event type depend on your environment and your specific transmissions or SMTP injections. The Webhook API provides two documentation endpoints that list details about the various reporting data available in your environment. Prior to setting up your webhooks, use these two endpoints to get descriptions and examples of the events, event types, and event fields.

1.  List the available event data.

    The Webhooks API Events Documentation endpoint provides documentation about the event types available in your environment. At the command line, enter the following command:

    curl -X GET https://*`your.server.domain`*/api/v1/webhooks/events/documentation \
    -H "Authorization: *`your_api_key`*"

    The response provides descriptions for the available event categories, along with the associated event types and event fields that could be included in the payload, depending on your specific transmissions or SMTP injections. The following is an example response (abbreviated to display only the "Click" event type and its associated event fields for the sake of space):

    ```
    {
       "results":{
        .
        .
        .
          "track_event":{"events":{
             "click":{"event":{"type":{"description":"Type of event this record describes",»
                     "sampleValue":"click"},
                "campaign_id":{"description":"Campaign of which this message was a part",»
                 "sampleValue":"Example Campaign Name"},
                "customer_id":{"description":"SparkPost-customer identifier through which this message»
                 was sent","sampleValue":"1"},
                "delv_method":{"description":"Protocol by which SparkPost delivered this message",»
                 "sampleValue":"esmtp"},
                "ip_address":{"description":"IP address of the host to which SparkPost delivered this»
                 message; in engagement events, the IP address of the host where the HTTP request»
                 originated","sampleValue":"127.0.0.1"},
                "message_id":{"description":"SparkPost-cluster-wide unique identifier for this»
                 message","sampleValue":"0e0d94b7-9085-4e3c-ab30-e3f2cd9c273e"},
                "rcpt_meta":{"description":"Metadata describing the message recipient","sampleValue":{}},
                "rcpt_tags":{"description":"Tags applied to the message which generated this event",»
                 "sampleValue":["male","US"]},
                "rcpt_to":{"description":"Recipient address used on this message's SMTP envelope",»
                 "sampleValue":"recipient@example.com"},
                "target_link_name":{"description":"Name of the link for which a click event was»
                 generated","sampleValue":"Example Link Name"},
                "target_link_url":{"description":"URL of the link for which a click event was»
                 generated","sampleValue":"http://example.com"},
                "template_id":{"description":"Slug of the template used to construct this message",»
                 "sampleValue":"templ-1234"},
                "template_version":{"description":"Version of the template used to construct this»
                 message","sampleValue":"1"},
                "timestamp":{"description":"Event date and time, in Unix timestamp format (integer»
                 seconds since 00:00:00 GMT 1970-01-01)","sampleValue":1427736822},
                "transmission_id":{"description":"Transmission which originated this message",»
                 "sampleValue":"65832150921904138"},
                "user_agent":{"description":"Value of the browser's User-Agent header","sampleValue":»
                 "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko)»
                 Chrome/41.0.2272.118 Safari/537.36"},
                "geo_ip":{"description":"Geographic location based on the IP address, including latitude,»
                 longitude, city, country, and region","sampleValue":{"country":"US","region":"MD",»
                 "city":"Columbia","latitude":"39.1749","longitude":"-76.8375"}}},
             "description":"Recipient clicked a tracked link in a message, thus prompting a redirect»
              through the SparkPost Elite click-tracking server to the link's destination.",»
              "display_name":"Click"},
        .
        .
        .
    ```

    ### Note

    The response shown is an example. Your actual response will differ.

2.  Get an example payload.

    The Webhooks API Events Samples endpoint provides an example of the event data that could be included in the payload, depending on your specific transmissions or SMTP injections. For instance, to view an example of the fields included in a "Click" payload, enter the following command:

    curl -X GET https://*`your.server.domain`*/api/v1/webhooks/events/samples?events=click \
    -H "Authorization: *`your_api_key`*"

    The following is an example response:

    ```
    {  
       "results":[  
          {  
             "msys":{  
                "track_event":{  
                   "type":"click",
                   "campaign_id":"Example Campaign Name",
                   "customer_id":"1",
                   "delv_method":"esmtp",
                   "ip_address":"127.0.0.1",
                   "message_id":"0e0d94b7-9085-4e3c-ab30-e3f2cd9c273e",
                   "rcpt_meta":{  
                   },
                   "rcpt_tags":[  
                      "male",
                      "US"
                   ],
                   "rcpt_to":"recipient@example.com",
                   "target_link_name":"Example Link Name",
                   "target_link_url":"http://example.com",
                   "template_id":"templ-1234",
                   "template_version":"1",
                   "timestamp":1427736822,
                   "transmission_id":"65832150921904138",
                   "user_agent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) Chrome/41.0.2272.118",
                   "geo_ip":{  
                      "country":"US",
                      "region":"MD",
                      "city":"Columbia",
                      "latitude":"39.1749",
                      "longitude":"-76.8375"
                   }
                }
             }
          }
       ]
    }
    ```

    ### Note

    The response shown is an example. Your actual response will differ.

**Receiving Event Data Using Webhooks** 

Once you know what event data is available in your environment, you can create custom webhooks. Follow these steps to receive event data using webhooks:

1.  Specify your webhook properties.

    You create a webhook by first specifying the webhook’s properties in a JSON blob that will be included in the Webhooks API call. You must specify a name for the webhook, the URL of the target to which to send the event data, and the event types that will trigger the webhook.

    Optionally, you can include an authentication token. This token is present in the X-MessageSystems-Webhook-Token header of POST requests to the target URL and can be used in your target application to confirm that data is coming from your webhook. This simple example does not use authentication.

    Using your text editor, create the following JSON file named `webhook_example.json`. Be sure to use your URL for the target.

    {
      "name": "Example webhook",
      "target": "http://*`your_targetURL.com`*",
      "events": [
        "injection",
        "delivery",
        "open",
        "click"
      ]
    }

    Note that this example will get data for injection, delivery, open, and click event types.

2.  Create your webhook.

    You create a webhook by sending a HTTP POST request to the appropriate URL with your JSON blob. To access the Webhooks API, you send an HTTP request to **https://*`your.server.domain`*/api/v1/webhooks/**.

    At the command line, enter the following command to create your webhook:

    curl -X POST https://*`your.server.domain`*/api/v1/webhooks/ \
    -d @*`path/to/file/`*webhook_example.json \
    -H "Content-Type: application/json" \
    -H "Authorization: *`your_api_key`*"

    where `webhook_example.json` is the name of your JSON file, `application/json` specifies the format as JSON, and *`your_api_key`* is your valid API key.

    On creation, a test POST is sent to the target URL for validation. If this request does not receive an HTTP 200 response, your request to the Webhook API will fail with HTTP 400, and the webhook will not be created.

    If the test POST is successful, a response similar to the following will be displayed at the command line:

    {  
       "results":{  
          "id":"*`1cc94ef0-ab17-11e4-b135-0ff9de159aa7`*",
          "links":[  
             {  
                "href":"*`http://your.server.domain/api/v1/webhooks/1cc94ef0-ab17-11e4-b135-0ff9de159aa7`*",
                "rel":"urn.msys.webhooks.webhook",
                "method":[  
                   "GET",
                   "PUT"
                ]
             }
          ]
       }
    }
3.  Inject a message.

    After a 1 minute activation time, the new webhook will be ready to receive event data. Send the email that you created in the tutorial in [Chapter 22, *Tracking Engagement for HTTP*](getting.started.engage.php "Chapter 22. Tracking Engagement for HTTP") .

4.  Open the email and click the link.

    Open the email and click the link included in the message body.

5.  Confirm receipt of event data.

    Confirm that the event data posted to your target URL. Your click event data should be similar to the following:

    ```
    {  
       "msys":{  
          "track_event":{  
             "type":"click",
             "campaign_id":"Example Campaign Name",
             "customer_id":"1",
             "delv_method":"esmtp",
             "ip_address":"000.0.0.0",
             "message_id":"0e0094b7-9015-4e3c-ad30-e3f5cd9e273e",
             "rcpt_meta":{  
             },
             "rcpt_tags":[  
                "male",
                "US"
             ],
             "rcpt_to":"recipient@example.com",
             "target_link_name":"Example Link Name",
             "target_link_url":"http://example.com",
             "template_id":"templ-1234",
             "template_version":"1",
             "timestamp":1427736822,
             "transmission_id":"65832150921904138",
             "user_agent":"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) Chrome/41.0.2272.118",
             "geo_ip":{  
                "country":"US",
                "region":"MD",
                "city":"Columbia",
                "latitude":"39.1749",
                "longitude":"-76.8375"
             }
          }
       }
    }
    ```

    ### Note

    The response shown is an example. Your actual response will differ.

Congratulations! You have successfully created a webhook using the Webhooks API. In addition to the POST method used in this example, the Webhooks API supports several other methods. You can find more information in the Webhooks API documentation available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

| [Prev](p.reporting_tracking.php)  | [Up](p.reporting_tracking.php) |  [Next](webhooks.ui.php) |
| Part IV. How-To Guides: Reporting and Tracking  | [Table of Contents](index.php) |  Chapter 16. Managing Webhooks using the UI |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)