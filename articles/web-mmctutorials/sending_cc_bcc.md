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

| Chapter 10. Sending Emails as CC and BCC |
| [Prev](getting.started.sub.php)  | Part III. How-To Guides: Sending |  [Next](getting.started.stored_list.php) |

## Chapter 10. Sending Emails as CC and BCC

**Introduction**

An email's header provides details about the sender and recipients, in addition to descriptive information about the message. Typically, the header will include "From", displaying who sent the message, and "To", displaying who received the message. However, you can also send an email as a Carbon Copy ("CC") or Blind Carbon Copy ("BCC").

Carbon Copy or "CC" indicates that the recipient received a "copy" of an email that was sent to another recipient. The email's header will include "To", showing the original recipient, and "CC", showing the recipient who received the copy. Recipients will see the email addresses of all the persons who received the email. Conversely, Blind Carbon Copy or "BCC" indicates that the recipient also received a "copy" of an email that was sent to another recipient, however, the recipients do not know to who the email was copied. The email's header will include only "To". The *BCC* recipient's email address is not visible to the other recipients. This capability enables you to protect the email addresses of your recipients. To maintain your recipient's privacy, you can send the email to yourself and *BCC* all your recipients.

When you create your transmission using SparkPost Elite's REST API, you can include *CC* and *BCC* recipients by using optional fields available in the Template and Recipient Lists API. You must specify separate data for your "To", "CC", and "BCC" recipients. Ensure that this data is, infact, a carbon copy of each other. When "CC" and "BCC" are specified, your recipients will then receive emails with the appropriate header.

**Sending Email with *CC* and *BCC* Recipients** 

In this tutorial, you will learn how to send an email as a *CC* and *BCC* using the REST API. It will build on your knowledge of the Template and Recipient Lists API by using optional fields to specify the *CC* and *BCC* recipients. The example in this tutorial specifies the recipients inline and uses a simple inline template with a plain-text message, but the transmission can also reference a stored template and recipient list.

### Note

This tutorial assumes that you have completed the tutorial in [Chapter 4, *Creating Stored Recipient Lists*](getting.started.recipients.php "Chapter 4. Creating Stored Recipient Lists") . A general knowledge of command line tools, JSON, HTTP protocol, and templating languages is required.

You must have a valid API key to complete this tutorial. If you do not, complete the tutorial in [Chapter 3, *Creating, Modifying, and Deleting an API Key*](getting.started.apikey_ui.php "Chapter 3. Creating, Modifying, and Deleting an API Key") .

Follow these steps to send a simple transmission with *CC* and *BCC* recipients:

1.  Specify your input data.

    The Recipient List API supports a "header_to" field in the "address" attribute. This field will be displayed in the "To" header instead of the "email" field of the recipient. To send an email as a *CC* or *BCC*, you must specify the *CC* or *BCC* recipient using the "email" field and the recipient that you want displayed in the "To" header using the "header_to" field in the "recipients" JSON array. Each recipient must have the same substitution data and meta data, if included in the transmission.

    The Template API supports a "headers" field in the "content" JSON array. This field is a JSON dictionary that can be used to specify additional headers in your emails, such as "CC". To include a "CC" header in your email, you must specify the *CC* recipient in the "recipients" JSON array, as previously described, and in the "headers" field in the "content" JSON array using the "CC" field.

    Note that the *BCC* and *To* recipients are not specified in the "headers" field. The "To" header is generated from the *`to_recipient's`* "email" field. For details about constructing additional headers using the "headers" field, see the Template API documentation available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

    Using your text editor, create the following JSON file named `cc_bcc_example.json`. Be sure to use your sender address and recipient addresses. Note that the "header_to" fields are a carbon copy of the "To" recipient's email address.

    {  
       "return_path":"*`sender@return_path.com`*",
       "recipients":[  
          {  
             "address":{  
                "email":"*`to_recipient@their_address.com`*"
             },
             "substitution_data":{  
                "some_sub_data":"SparkPost Elite"
             }
          },
          {  
             "address":{  
                "email":"*`cc_recipient@their_address.com`*",
                "header_to":"*`to_recipient@their_address.com`*"
             },
             "substitution_data":{  
                "some_sub_data":"SparkPost Elite"
             }
          },
          {  
             "address":{  
                "email":"*`bcc_recipient@their_address.com`*",
                "header_to":"*`to_recipient@their_address.com`*"
             },
             "substitution_data":{  
                "some_sub_data":"SparkPost Elite"
             }
          }
       ],
       "content":{  
          "from":"*`sender@your_address.com`*",
          "headers":{  
             "CC":"*`cc_recipient@their_address.com`*"
          },
          "subject":"Sending Email with CC and BCC Recipients",
          "text":"Welcome to {{some_sub_data}}!\r\nThis is an example of including a CC and BCC header."
       }
    }

    In this example, the email will be sent to the *`to_recipient`*, as indicated in the email's "To" header, and a copy of the email will be sent to the *`cc_recipient`*, as indicated in the email's "CC" header. A second copy will be sent to the *`bcc_recipient`*. However, this recipient's email address will not be displayed.

2.  Inject your message.

    At the command line, enter the following command to inject your email:

    curl -X POST https://*`your.server.domain`*/api/v1/transmissions/ \
    -d @*`path/to/file/`*cc_bcc_example.json \
    -H "Content-Type: application/json" \
    -H "Authorization: *`your_api_key`*"

    where `cc_bcc_example.json` is the name of your JSON file, `application/json` specifies the format as JSON, and *`your_api_key`* is your valid API key.

    If successful, a response similar to the following will be displayed at the command line:

    {  
       "results":{  
          "total_rejected_recipients":0,
          "total_accepted_recipients":3,
          "id":"*`11977354662379529`*"
       }
    }

    This response shows that three emails were accepted and none were rejected.

3.  Confirm your email delivery.

    Each recipient (To, CC, BCC, and archive) is counted as a targeted message. As a result, each *CC* and *BCC* message, as well as the archive copy of the nmessage, is given a unique tracking URL.

    Verify that your recipients received the emails, then open the UI and confirm that your message was successfully injected into SparkPost Elite (Targeted) and accepted by the ISP (Accepted). For instructions to view reports in the UI, see [Chapter 17, *Using the UI for Reporting*](getting.started.reports_ui.php "Chapter 17. Using the UI for Reporting") .

Congratulations! You have used your knowledge of the REST API to send an email as a *CC* and *BCC*. You can find more information about the attributes used in the Templates and Recipient Lists API documentation available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

| [Prev](getting.started.sub.php)  | [Up](p.sending.php) |  [Next](getting.started.stored_list.php) |
| Chapter 9. Using Substitution Data  | [Table of Contents](index.php) |  Chapter 11. Using Stored Recipient Lists |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)