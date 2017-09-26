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

| Chapter 22. Tracking Engagement for HTTP |
| [Prev](getting.started.smtp_tracking.php)  | Part IV. How-To Guides: Reporting and Tracking |   |

## Chapter 22. Tracking Engagement for HTTP

**Introduction**

Understanding how your messaging is or isn't performing is a critical factor in creating a successful campaign. Just knowing that your messages are being delivered is not enough. You need to know how your customers interact with your message content. Are your customers opening your messages? Are they clicking the links you provide? With SparkPost Elite's message generation, you can get real-time data on message processing and disposition, enabling you to track campaigns as they are being sent and to make modifications to improve customer engagement.

Engagement describes how a recipient interacts with your message. An engagement event occurs when the recipient opens an email or clicks a link within an email. By default, open tracking and click tracking are enabled in your configuration. You can override the configuration for a specific stored template by specifying the attributes in the template or for a specific transmission by specifying the attributes in the transmission. For details about these attributes, see the Transmissions and Templates API documentation available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

**Configuration Change. ** If you want to disable engagement tracking globally, contact your Technical Account Manager.

When you create your recipient lists and transmissions, you specify various attributes including metadata using the [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference). This data is included in the tracked URLs for each message. For open tracking, SparkPost Elite inserts an open-tracked image into the message. For click tracking, SparkPost Elite converts the target link into a click-tracked link. By default, metadata is included for open and click tracking, if specified.

**Configuration Change. ** If you want to exclude metadata from click tracking, contact your Technical Account Manager.

### Note

Tracked links include an expiry time of 1 year. After that time, engagement events will not be reported for that specific message.

With click and open tracking enabled, you can track engagement using the REST API or a specially designed report in the UI. The Engagement report enables you to drill down to the level of a link within your message. Using this report, you can quickly view the number of messages that were accepted, were opened, and had a link selected and view how many times a link within your message was clicked.

**Including a Link in the Message Body** 

In this tutorial, you will send an email using an inline template with a link in the message body and track engagement in the UI. The template will show how to override the default configuration, in the event you have requested that this feature be globally disabled. Later tutorials will discuss tracking engagement data and retrieving reporting data using the REST API.

### Note

This tutorial assumes that you have completed the tutorial in [Chapter 8, *Generating a Transmission*](getting.started.http.php "Chapter 8. Generating a Transmission") . A general knowledge of command line tools, JSON, HTTP protocol, and templating languages is required.

You must have a valid API key to complete this tutorial. If you do not, complete the tutorial [Chapter 3, *Creating, Modifying, and Deleting an API Key*](getting.started.apikey_ui.php "Chapter 3. Creating, Modifying, and Deleting an API Key") .

Follow these steps to create a transmission with a link in the message body:

1.  Specify your input data.

    This example uses the simple inline template from the tutorial in [Chapter 8, *Generating a Transmission*               ](getting.started.http.php "Chapter 8. Generating a Transmission") as a starting point and adds a link in the message body.

    Using your text editor, create the following JSON file named `sample_link.json`. Be sure to use your sender and recipient addresses.

    {  
       "options":{  
          "open_tracking":true,
          "click_tracking":true
       },
       "return_path":"*`sender@your_address.com`*",
       "recipients":[  
          {  
             "address":{  
                "email":"*`recipient@their_address.com`*"
             }
          }
       ],
       "content":{  
          "from":"*`sender@your_address.com`*",
          "subject":"Tracking Engagement",
          "text":"Welcome to SparkPost Elite!\r\nClick http://www.messagesystems.com to learn more about SparkPost Elite."
       }
    }

    The "content" object includes a link to the Message Systems, Inc. website so that you can verify click tracking in the UI.

    ### Note

    The [Substitutions Reference](https://www.sparkpost.com/api#/reference) in the REST API documentation provides important information about including links in your messages. See the sections on *Personalized Links* , *Link Names* , *URLs Generated Using Substitution Data* , and *Links and Substitution Expressions Within Substitution Values* .

    Engagement tracking is globally enabled or disabled in your configuration settings. You can override this setting at the transmission or template level. If your engagement tracking is disabled by default, include the following attributes as shown in this example to override open and click tracking at the transmission level.

    ```
    "options":{
      "open_tracking":true,
      "click_tracking":true
    }
    ```

    ### Note

    The precedence for engagement tracking options, from highest to lowest is as follows:

    *   transmission level

    *   template level

    *   configuration setting

    For example, if click tracking is not specified at the transmission level, the "click_tracking" attribute at the template level is used. If the template level is also not specified, the global configuration setting is used.

    By default, open tracking and click tracking are enabled in your configuration.

2.  Inject your message.

    At the command line, enter the following command to inject your email:

    curl -X POST https://*`your.server.domain`*/api/v1/transmissions/ \
     -d @*`path/to/file/`*sample_link.json \
     -H "Content-Type: application/json" \
     -H "Authorization: *`your_api_key`*"

    where `sample_link.json` is the name of your JSON file, `application/json` specifies the format as JSON, and *`your_api_key`* is your valid API key.

    If successful, a response similar to the following will be displayed at the command line:

    {  
       "results":{  
          "total_rejected_recipients":0,
          "total_accepted_recipients":1,
          "id":"*`11668787484950529`*"
       }
    }

    This response shows that one email was accepted and none were rejected.

**View Engagement Data** 

Follow these steps to view your engagement data:

1.  Open the email and click the link.

    Verify that your recipient received the email. Open the email and click the link included in the message body.

2.  Open the UI and navigate to the Engagement report. In the Engagement report, confirm that your message was successfully injected into SparkPost Elite (Targeted), accepted by the ISP (Accepted), and opened (Unique Confirmed Opens) and that the link was clicked (Unique Clicks), as shown in [Figure 22.1, “Engagement Report”](getting.started.engage.php#figure_engagement "Figure 22.1. Engagement Report").

    <a name="figure_engagement"></a>

    **Figure 22.1. Engagement Report**

    ![Engagement Report](images/engagement.png)

Congratulations! You have successfully sent an email with a link and tracked the engagement of your message in the UI. To learn more about using the Engagement report, see the [Reports and Engagement Tracking](https://support.messagesystems.com/docs/web-mmcui/mmc-ui.reports.php) section in the SparkPost Elite User Interface Guide.

| [Prev](getting.started.smtp_tracking.php)  | [Up](p.reporting_tracking.php) |   |
| Chapter 21. Tracking Engagement for SMTP  | [Table of Contents](index.php) |   |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)