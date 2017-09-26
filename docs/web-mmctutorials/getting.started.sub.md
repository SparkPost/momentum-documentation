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

| Chapter 9. Using Substitution Data |
| [Prev](getting.started.http.php)  | Part III. How-To Guides: Sending |  [Next](sending_cc_bcc.php) |

## Chapter 9. Using Substitution Data

**Introduction**

With the ever-increasing demand for their attention, your customers are bombarded with all sorts of messages. Generic, broadcast messaging will definitely be ignored. SparkPost Elite's message generation supports dynamic content, enabling you to send relevant and personalized messages to every recipient. You can easily address each recipient by name and target specifics such as their interests or purchasing behavior.

SparkPost Elite applies substitutions per recipient using data provided as part of the JSON structures in the transmission's template. Messages are generated for transmission for all specified recipients using the template and performing substitution of data as necessary. The substitutions can be applied in the top-level header of the message or in the message body. Substitution data can be a JSON object of key/value pairs of recipient-specific data, nested JSON objects, or even arrays of objects. In the simplest case, substitution is applied directly, while more complex cases can use conditional statements, looping over JSON arrays, or execution of built-in macros. You can also create your own custom macros.

**Sending Email Using Substitution Data** 

In this tutorial, you will build on your knowledge of the Transmissions API by using simple key/value pair substitution in your inline template. The example generates two personalized emails in one transmission using substitution data in the transmission and recipient JSON structures.

### Note

This tutorial assumes that you have completed the tutorial in [Chapter 8, *Generating a Transmission*](getting.started.http.php "Chapter 8. Generating a Transmission") . A general knowledge of command line tools, JSON, HTTP protocol, and templating languages is required.

You must have a valid API key to complete this tutorial. If you do not, complete the tutorial in [Chapter 3, *Creating, Modifying, and Deleting an API Key*](getting.started.apikey_ui.php "Chapter 3. Creating, Modifying, and Deleting an API Key") .

Follow these steps to use substitution data in a simple transmission:

1.  Specify your input data using substitution.

    The tutorial in [Chapter 8, *Generating a Transmission*               ](getting.started.http.php "Chapter 8. Generating a Transmission") included only the required transmission attributes in the JSON blob. The attribute "substitution_data" is optional and includes key/value pairs that will be provided to SparkPost Elite's substitution engine. This attribute can include any number of substitutions, and each key/value pair is completely user-defined. This example uses substitution data as part of the transmission JSON structure and each recipient JSON structure.

    Using your text editor, create the following JSON file named `subdata_template.json`. Be sure to use your information for sender address, recipient addresses, and recipient names.

    {  
       "return_path":"*`sender@your_address.com`*",
       "substitution_data":{  
          "sender":"SparkPost Elite"
       },
       "recipients":[  
          {  
             "address":{  
                "email":"*`recipient1@their_address.com`*"
             },
             "substitution_data":{  
                "firstname":"*`recipient1 first name`*            "
             }
          },
          {  
             "address":{  
                "email":"*`recipient2@their_address.com`*"
             },
             "substitution_data":{  
                "firstname":"*`recipient2 first name`*            "
             }
          }
       ],
       "content":{  
          "from":"*`sender@your_address.com`*",
          "subject":"Sending Email Using Substitution Data",
          "text":"Hi {{firstname}},\r\nWelcome to {{sender}}!\r\nThis email was sent using substitution data."
       }
    }

    In the "content" object, the double curly braces define the start and end markers for the substitution data. For instance, **`{{name}}`** will be replaced with the name you specify for each recipient.

2.  Inject your message.

    At the command line, enter the following command to inject your email:

    curl -X POST https://*`your.server.domain`*/api/v1/transmissions/ \
    -d @*`path/to/file/`*subdata_template.json \
    -H "Content-Type: application/json" \
    -H "Authorization: *`your_api_key`*"

    where `subdata_template.json` is the name of your JSON file, `application/json` specifies the format as JSON, and *`your_api_key`* is your valid API key.

    If successful, a response similar to the following will be displayed at the command line:

    {  
       "results":{  
          "total_rejected_recipients":0,
          "total_accepted_recipients":2,
          "id":"*`11668787484950529`*"
       }
    }

    This response shows that two emails were accepted and none were rejected.

3.  Confirm your email delivery.

    Verify that each recipient received a personalized email, then open the UI and confirm that two messages were successfully injected into SparkPost Elite (Targeted) and accepted by the ISP (Accepted). For instructions to view reports in the UI, see [Chapter 17, *Using the UI for Reporting*](getting.started.reports_ui.php "Chapter 17. Using the UI for Reporting") .

Congratulations! You have taken the first step to using SparkPost Elite's powerful substitution capability. This tutorial demonstrates simple substitution, yet SparkPost Elite supports many advanced features. To learn more about using substitution data including details about syntax, see the Substitution Reference available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

| [Prev](getting.started.http.php)  | [Up](p.sending.php) |  [Next](sending_cc_bcc.php) |
| Chapter 8. Generating a Transmission  | [Table of Contents](index.php) |  Chapter 10. Sending Emails as CC and BCC |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)