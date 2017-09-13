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

| Chapter 5. Creating Stored Templates |
| [Prev](getting.started.recipients.php)  | Part II. How-To Guides: Creating |  [Next](templates.ui.php) |

## Chapter 5. Creating Stored Templates

**Introduction**

A key component of a successful campaign is managing your message templates. Being able to design and reuse templates allows you to provide a consistent look and feel across all your campaigns. SparkPost Elite's message generation supports template management enabling you to create, update, and reuse stored templates. You can manage your templates in a web-based User Interface (UI) or using the REST API. Your company can easily build brand-aligned templates once and then focus on other challenges, such as who to send the messages to and what content is most relevant for each recipient.

As in the case of an "inline" template, the template content must be in JSON format and can use the substitution engine's powerful features, such as key/value substitutions, conditional statements, and looping. By default, templates are created as drafts. Once created, you can perform actions such as update, publish, and delete.

**Creating a Stored Template Using the REST API** 

In this tutorial, you will learn how to create a simple stored template using the REST API. It introduces you to the Templates API, which provides the means to manage your templates. In this simple case, the template will include a plain-text message only.

### Note

This tutorial assumes that you have completed the tutorial in [Chapter 9, *Using Substitution Data*](getting.started.sub.php "Chapter 9. Using Substitution Data") . A general knowledge of command line tools, JSON, HTTP protocol, and templating languages is required.

You must have a valid API key to complete this tutorial. If you do not, complete the tutorial in [Chapter 3, *Creating, Modifying, and Deleting an API Key*](getting.started.apikey_ui.php "Chapter 3. Creating, Modifying, and Deleting an API Key") .

Follow these steps to create a stored template:

1.  Specify your template.

    You create a template by first specifying all input data in a JSON blob that will be included in the Templates API call. The input data includes required and optional template attributes. At a minimum, you must specify the template "id" or "name" along with the "content". Content for a template is described in a JSON object. At a minimum, it must include a "from" address, a "subject", and "html" or "text" string.

    Using your text editor, create the following JSON file named `simple_template.json`. Be sure to use your information for sender address.

    {  
       "id":"simple_template",
       "published":false,
       "content":{  
          "from":"*`sender@your_address.com`*",
          "subject":"Sending Email Using a Stored Template",
          "text":"Hi {{firstName}},\r\nWelcome to {{sender}}!"
       }
    }

    The attribute "id" identifies the template when it is used in a transmission. As for inline templates, the "content" object includes the content that will be used to construct the message.

    The "published" attribute indicates whether the template is published or is a draft version. By default, templates are created as drafts, and this attribute is optional. It is included in this example to demonstrate how to publish a template later in this tutorial.

2.  Store your template as a draft.

    You store your template by sending a HTTP POST request to the appropriate URL with your JSON blob. To access the Templates API, you send an HTTP request to **https://*`your.server.domain`*/api/v1/templates/**.

    At the command line, enter the following command to store your template:

    curl -X POST https://*`your.server.domain`*/api/v1/templates/ \
    -d @*`path/to/file/`*simple_template.json \
    -H "Content-Type: application/json" \
    -H "Authorization: *`your_api_key`*"

    where `simple_template.json` is the name of your JSON file, `application/json` specifies the format as JSON, and *`your_api_key`* is your valid API key.

    If successful, the following response will be displayed at the command line:

    ```
    {  
       "results":{  
          "id":"simple_template"
       }
    }
    ```

    This response shows that the request was successful.

3.  Preview your template using substitution data.

    You can preview your template by providing a JSON blob that includes substitution data. The "content" of your template will be expanded using the "substitution_data."

    Using your text editor, create the following JSON file named `data_for_template.json`. Be sure to use your recipient name.

    {  
       "substitution_data":{  
          "firstName":"*`recipient first name`*            ",
          "sender":"SparkPost Elite"
       }
    }

    You preview your template by sending a HTTP POST request to the appropriate URL. Reference your template identifier and include your substitution data JSON blob. To preview a draft template, you must also include the **`draft=true`** query parameter in the API call.

    At the command line, enter the following command to preview your template:

    curl -X POST https://*`your.server.domain`*/api/v1/templates/simple_template/preview?draft=true \
    -d @*`path/to/file/`*data_for_template.json \
    -H "Content-Type: application/json" \
    -H "Authorization: *`your_api_key`*"

    where `data_for_template.json` is the name of your JSON file, `application/json` specifies the format as JSON, and *`your_api_key`* is your valid API key.

    If successful, the response will include the "content" with the data substituted, such as the following:

    {  
       "results":{  
          "from":"*`sender@your_address.com`*",
          "subject":"Sending Email Using a Stored Template",
          "text":"Hi *`recipient first name`*            ,\r\nWelcome to SparkPost Elite!"
       }
    }
4.  Update and publish your template.

    You can make changes to your template by specifying a JSON blob that includes the updates to the template. The "content" object given in the update request will completely overwrite any existing "content". If you want to modify fields besides "content", include the fields to modify. Only those fields specified will be updated.

    Using your text editor, create the following JSON file named `update_template.json`. This file includes updates to the content of "content" and changes the "published" attribute. Be sure to use your information for sender address.

    {  
       "id":"simple_template",
       "published":true,
       "content":{  
          "from":"*`sender@your_address.com`*",
          "subject":"Sending Email Using a Stored Template",
          "text":"Hi {{firstName}},\r\nWelcome to {{sender}}!\r\nThis is your first stored template."
       }
    }

    Publishing a template is just a specific case of an update. You publish your template by changing the published attribute to true **`"published": true`**      .

    You update and publish your template by sending a HTTP PUT request to the appropriate URL. Reference your template identifier and include your updates as the JSON blob.

    At the command line, enter the following command to update and publish your template:

    curl -X PUT https://*`your.server.domain`*/api/v1/templates/simple_template \
    -d @*`path/to/file/`*update_template.json \
    -H "Content-Type: application/json" \
    -H "Authorization: *`your_api_key`*"

    where `update_template.json` is the name of your JSON file, `application/json` specifies the format as JSON, and *`your_api_key`* is your valid API key.

    If successful, the following response will be displayed at the command line:

    `{ }`

    This response shows that the request was successful.

5.  Verify your updates.

    You can retrieve a template by specifying its identifier in the URI path of the GET method.

    At the command line, enter the following command to retrieve the template object:

    curl -X GET https://*`your.server.domain`*/api/v1/templates/simple_template \
    -H "Authorization: *`your_api_key`*"

    where *`your_api_key`* is your valid API key.

    If successful, a response similar to the following will be displayed at the command line:

    {  
       "results":{  
          "id":"simple_template",
          "name":"simple_template",
          "description":"",
          "published":true,
          "options":{  

          },
          "content":{  
             "from":"*`sender@your_address.com`*",
             "subject":"Sending Email Using a Stored Template",
             "text":"Hi {{firstName}},\r\nWelcome to {{sender}}!\r\nThis is your first stored template."
          }
       }
    }

    This response shows your updated template in the results JSON structure.

Congratulations! You have created your first stored template using SparkPost Elite's Templates API. To learn more about managing templates, see the Templates API documentation available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

**Managing Templates using the UI** 

You can also create and manage your templates using the web-based UI. For detailed instructions, see [Chapter 6, *Managing Templates using the UI*](templates.ui.php "Chapter 6. Managing Templates using the UI") .

| [Prev](getting.started.recipients.php)  | [Up](p.creating.php) |  [Next](templates.ui.php) |
| Chapter 4. Creating Stored Recipient Lists  | [Table of Contents](index.php) |  Chapter 6. Managing Templates using the UI |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)