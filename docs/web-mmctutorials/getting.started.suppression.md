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

| Chapter 14. Using a Suppression List |
| [Prev](getting.started.complex.php)  | Part III. How-To Guides: Sending |  [Next](p.reporting_tracking.php) |

## Chapter 14. Using a Suppression List

**Introduction**

Protecting your sender reputation is essential to maximizing your email deliverability. Many inbox providers, e.g. Yahoo, Gmail, Hotmail/Outlook.com, or AOL, opt to limit or refuse message traffic based on it. Continuing to send messages to invalid email addresses or to recipients who no longer want to receive your emails can negatively impact your sender reputation. By maintaining an up-to-date suppression list, you can avoid sending unwanted messages. A suppression list — or exclusion list, as it is sometimes called — is a list of recipient email addresses to which you do NOT want to send email.

SparkPost Elite supports a customer-specific exclusion list for your account and a global suppression list. Your exclusion list is specific to your SparkPost Elite environment only, while Message Systems maintains a global suppression list across all customers, e.g. No accounts should ever send email to spam@yahoo.com. When a message is injected either using SMTP or HTTP, SparkPost Elite will check the email address against these lists. If the email address matches an address on a list, that message will be rejected.

### Note

The following is the response received when a message is rejected:

554 5.7.1 recipient address was suppressed due to customer policy (*`source`*)

where *`source`* is what caused the suppression (e.g. FBL, unsubscribe).

There are several ways that an email address can end up on your customer-specific exclusion list:

*   Spam Complaints / FeedBack Loops (FBLs) - When a recipient clicks the “this is spam” button provided by the ISP, the ISP sends a Spam Complaint or FBL message to SparkPost Elite. SparkPost Elite will automatically add the recipient's email address to your exclusion list.

*   Hard Bounces - When messages bounce, the ISP will include a message that lets the sender know whether it was a “Soft Bounce” or a “Hard Bounce”. A “Soft Bounce” is a temporary error or delay indicating that the message was set to a valid recipient address, while a “Hard Bounce” indicates that the message was sent to an invalid email address that should not be retried. SparkPost Elite will automatically add any email address associated with a “Hard Bounce” to your exclusion list. Note that Bounce classes 10 (the recipient is invalid), 30 (no recipient could be determined for the message), and 90 (the message is an unsubscribe request) are suppressed. For details about the Bounce Classifications, see [Section 20.6, “Bounce Classification Codes”](bounce_logger.classification.codes.php "20.6. Bounce Classification Codes").

*   Unsubscribe Requests - Recipients can request to be unsubscribed by clicking the SparkPost-provided unsubscribe link in the message or by using the List-Unsubscribe header. SparkPost Elite will automatically add the recipient's email address to the exclusion list. For information about adding an unsubscribe link, see the tutorial [Chapter 7, *Adding an Unsubscribe Link*](getting.started.unsubscribe_link.php "Chapter 7. Adding an Unsubscribe Link") .

*   Compliance Team - Recipients can contact Message Systems and request that they no longer receive messages from a particular sender. Protecting our customers’ brands and maintaining high deliverability across all Message Systems' accounts is of the utmost importance. Message Systems' Compliance Team ensures that we’re acting as a good sender within the email community across all our customers and takes requests of recipients very seriously. If a request is received, the Compliance Team will add the recipient's email address to that sender’s exclusion list.

*   Suppression API - Using the REST API, you can insert/update a single entry or multiple entries in your exclusion list, check the suppression status for a specific recipient, or remove a recipient from your exclusion list. For more information, see the [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

You can monitor events associated with spam complaints, bounces, and unsubscribe requests using the Log API ([Chapter 19, *Retrieving Reporting Logs*](getting.started.raw_log.php "Chapter 19. Retrieving Reporting Logs") ), Metrics API ([Chapter 18, *Using the Metrics API for Reporting*](getting.started.metrics.php "Chapter 18. Using the Metrics API for Reporting") ), Webhooks API ([Chapter 15, *Using Webhooks for Event Data*](getting.started.webhooks.php "Chapter 15. Using Webhooks for Event Data") ), or UI ([Chapter 17, *Using the UI for Reporting*](getting.started.reports_ui.php "Chapter 17. Using the UI for Reporting") ). For additional details about the types of events available through the Webhooks API and the reporting available using the Metrics API, see the respective sections of the REST API documentation at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

### Note

SparkPost Elite does not currently provide events about recipients added to your exclusion list by the Compliance Team.

**Inserting Exclusion List Entries** 

In this tutorial, you will learn how to insert entries into your exclusion list using the REST API. It introduces you to the Suppression List API, which provides the means to manage your customer-specific exclusion list.

### Note

This tutorial is intended for beginners. However, a general knowledge of command line tools, JSON, HTTP protocol, and templating languages is required.

You must have a valid API key to complete this tutorial. If you do not, complete the tutorial [Chapter 3, *Creating, Modifying, and Deleting an API Key*](getting.started.apikey_ui.php "Chapter 3. Creating, Modifying, and Deleting an API Key") .

Follow these steps to insert entries into your exclusion list:

1.  Specify your recipient information.

    You bulk insert entries into your exclusion list by first specifying the recipient data in a JSON blob that will be included in the Suppression List API call. The recipient data includes required and optional attributes. At a minimum, you must specify the recipient's email address and at least one of the following fields: "transactional" or "non_transactional".

    SparkPost Elite supports treating transactional messages, such as password resets and shipping notifications, and non-transactional messages, such as marketing offers and newsletters, differently for the purpose of suppressing recipients. For example, you likely do not want to suppress recipients from your password reset messages but do want to honor their request to stop receiving marketing offers. By default, all messages are designated as non-transactional. You can override this default setting by designating a transmission or a template as transactional using the *options.tranactional* field available upon creation of the transmission or upon creation of the template. For details about this field, see the documentation for the Transmissions API and Templates API available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

    ### Warning

    Abusing the transactional designation is in violation of Message System's policies and can result in many complaints, reducing your deliverability.

    In your exclusion list, you indicate which type of messages to suppress using the "transactional" and "non_transactional" fields. Setting the "transactional" field to `true` indicates that no transactional messages should be sent to the recipient; likewise, setting the "non_transactional" field to `true` indicates that no non-transactional messages should be sent to the recipient. Note that you must specify at least one of these fields.

    The optional "description" field can be used to include an explanation of what type of message should be suppressed.

    Using your text editor, create the following JSON file named `suppression_list.json`. Be sure to use your information for the recipient email addresses.

    {  
       "recipients":[  
          {  
             "email":"*`recipient1@their_address.com`*",
             "transactional":true,
             "description":"Recipient requested to not receive any transactional emails."
          },
          {  
             "email":"*`recipient2@their_address.com`*",
             "transactional":false,
             "non_transactional":true,
             "description":"Recipient requested to not receive any non-transactional emails."
          }
       ]
    }
2.  Insert the entries into your exclusion list.

    You insert the entries into your exclusion list by sending a HTTP PUT request to the appropriate URL with your JSON blob. To access the Suppression List API, you send an HTTP request to **https://*`your.server.domain`*/api/v1/suppression-list/**.

    At the command line, enter the following command to insert the entries into your exclusion list:

    curl -X PUT https://*`your.server.domain`*/api/v1/suppression-list/ \
    -d @*`path/to/file/`*suppression_list.json \
    -H "Content-Type: application/json" \
    -H "Authorization: *`your_api_key`*"

    where `suppression_list.json` is the name of your JSON file, `application/json` specifies the format as JSON, and *`your_api_key`* is your valid API key.

    If successful, the following response will be displayed at the command line:

    ```
    {  
       "results":{  
          "message":"Suppression List successfully updated"
       }
    }
    ```

    This response shows that the new entries were successfully inserted into your exclusion list.

Congratulations! You have added your first entries to your exclusion list using the Suppression List API. To learn more about managing your customer-specific exclusion list, see the documentation available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

| [Prev](getting.started.complex.php)  | [Up](p.sending.php) |  [Next](p.reporting_tracking.php) |
| Chapter 13. Using Complex Templates  | [Table of Contents](index.php) |  Part IV. How-To Guides: Reporting and Tracking |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)