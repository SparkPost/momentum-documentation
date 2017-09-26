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

| Chapter 4. Creating Stored Recipient Lists |
| [Prev](getting.started.apikey_ui.php)  | Part II. How-To Guides: Creating |  [Next](getting.started.simple.php) |

## Chapter 4. Creating Stored Recipient Lists

**Introduction**

As consumer behaviors and preferences continue to change rapidly, it’s critical that you send the right message to the right customer at the right time and place. Creating different recipient lists based on various demographic information enables you to personalize messages and to provide relevant content to your customers. SparkPost Elite supports creating stored recipient lists, to reuse in future campaigns, using the REST API. The REST API also supports associating tags, metadata, and substitution data with a recipient, providing further insight into your customer engagement.

As in the case of an "inline" recipient list, the recipient list must be in JSON format and can use the substitution engine's powerful features. Note that recipient substitution data takes precedence over transmission substitution data.

**Creating a Stored Recipient List** 

In this tutorial, you will learn how to create a simple stored recipient list using the REST API. It introduces you to the Recipient Lists API, which provides the means to create and manage your recipient lists.

### Note

This tutorial assumes that you have completed the tutorial in [Chapter 8, *Generating a Transmission*](getting.started.http.php "Chapter 8. Generating a Transmission") . A general knowledge of command line tools, JSON, HTTP protocol, and templating languages is required.

You must have a valid API key to complete this tutorial. If you do not, complete the tutorial [Chapter 3, *Creating, Modifying, and Deleting an API Key*](getting.started.apikey_ui.php "Chapter 3. Creating, Modifying, and Deleting an API Key") .

Follow these steps to create a stored recipient list:

1.  Specify your recipient information.

    You create a stored recipient list by first specifying all recipient data in a JSON blob that will be included in the Recipient Lists API call. The recipient data includes required and optional attributes. At a minimum, you must specify the recipient's email address.

    Using your text editor, create the following JSON file named `simple_list.json`. Be sure to use your information for recipient addresses and recipient names.

    {  
       "id":"simple_list",
       "recipients":[  
          {  
             "address":{  
                "email":"*`recipient1@their_address.com`*",
                "name":"*`recipient1`*"
             }
          },
          {  
             "address":{  
                "email":"*`recipient2@their_address.com`*",
                "name":"*`recipient2`*"
             }
          }
       ]
    }

    As for inline recipient lists, the "recipients" object includes the email address for each recipient.

    An identifier for the recipient list is optional. However, this field will be required to identify the recipient list when it is used in a transmission. If an "id" is not specified, one will be generated when the recipient list is created.

2.  Store your recipient list.

    You store your recipient list by sending a HTTP POST request to the appropriate URL with your JSON blob. To access the Recipient Lists API, you send an HTTP request to **https://*`your.server.domain`*/api/v1/recipient-lists/**.

    At the command line, enter the following command to store your recipient list:

    curl -X POST https://*`your.server.domain`*/api/v1/recipient-lists/ \
    -d @*`path/to/file/`*simple_list.json \
    -H "Content-Type: application/json" \
    -H "Authorization: *`your_api_key`*"

    where `simple_list.json` is the name of your JSON file, `application/json` specifies the format as JSON, and *`your_api_key`* is your valid API key.

    If successful, the following response will be displayed at the command line:

    ```
    {  
       "results":{  
          "total_rejected_recipients":0,
          "total_accepted_recipients":2,
          "name":"simple_list",
          "id":"simple_list"
       }
    }
    ```

    This response shows that a list including two recipients was successfully stored.

3.  View your stored recipient list.

    You can retrieve details about your recipient list by specifying its identifier in the URI path of the GET method. To retrieve the recipients contained in a list, you must include the **`show_recipients=true`** query parameter in the API call.

    At the command line, enter the following command to retrieve the recipient list object:

    curl -X GET https://*`your.server.domain`*/api/v1/recipient-lists/simple_list?show_recipients=true \
    -H "Authorization: *`your_api_key`*"

    where *`your_api_key`* is your valid API key.

    If successful, a response similar to the following will be displayed at the command line:

    {  
       "results":{  
          "id":"simple_list",
          "name":"simple_list",
          "description":"",
          "total_accepted_recipients":2,
          "recipients":[  
             {  
                "address":{  
                   "email":"*`recipient1@their_address.com`*",
                   "name":"*`recipient1`*"
                },
                "return_path":""
             },
             {  
                "address":{  
                   "email":"*`recipient2@their_address.com`*",
                   "name":"*`recipient2`*"
                },
                "return_path":""
             }
          ]
       }
    }

Congratulations! You have created your first stored recipient list using SparkPost Elite's Recipient Lists API. To learn more about managing recipient lists, see the Recipient Lists API documentation available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

| [Prev](getting.started.apikey_ui.php)  | [Up](p.creating.php) |  [Next](getting.started.simple.php) |
| Chapter 3. Creating, Modifying, and Deleting an API Key  | [Table of Contents](index.php) |  Chapter 5. Creating Stored Templates |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)