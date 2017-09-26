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

| Chapter 19. Retrieving Reporting Logs |
| [Prev](getting.started.metrics.php)  | Part IV. How-To Guides: Reporting and Tracking |  [Next](log_formats.php) |

## Chapter 19. Retrieving Reporting Logs

**Introduction**

In addition to the reporting available through the UI, SparkPost Elite provides log files tracking the full disposition status of every message transiting the system:

*   Main log complete information about every message received and delivered by SparkPost Elite. It logs receptions, deliveries, transient failures, and permanent failures.

*   Bounce log records in-band and out-of-band bounces.

*   Reject log stores records of inbound messages that are rejected by SparkPost Elite, either due to policy or protocol deviations. It lists the full context for all rejected messages, as well as a summary of why the message was rejected.

*   FBL log records the information provided by the ISP's feedback loop service with regard to spam notifications.

*   Event log includes a batch of event data consisting of one or more event records, each composed of a payload wrapped in a type-specific JSON envelope. Each event record payload includes the data fields specific to that event type. For the field definitions and a mapping of the fields that constitute a payload for a given event type, use the Webhook Events and Webhook Sample Events endpoints. See the Webhooks API documentation available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

The Log API enables you to retrieve the raw, compressed logs for a given date and node. Logs include data for one day. The format of the logs is designed to be a concise, machine-parseable, computationally inexpensive format. The log entries differ depending upon the event type. The logs, with the exception of the `eventlog`, are in @ delimited format. For information about the log formats, see [Chapter 20, *Log Formats*](log_formats.php "Chapter 20. Log Formats") .

**Retrieving Reporting Logs** 

In this tutorial, you will learn how to retrieve the `mainlog` using the Log API. You can easily retrieve other logs by changing the log type in the REST API call.

### Note

A general knowledge of the Linux operating system, command line tools, JSON, and HTTP protocol is required.

You must have a valid API key to complete this tutorial. If you do not, complete the tutorial [Chapter 3, *Creating, Modifying, and Deleting an API Key*](getting.started.apikey_ui.php "Chapter 3. Creating, Modifying, and Deleting an API Key") .

Follow these steps to retrieving the reporting logs:

1.  List all dates for which logs are currently available.

    The Log API is designed for discoverability of available logs. You query and retrieve logs by sending a HTTP GET request to the appropriate URL. For example to access the Log API, you send an HTTP request to **https://*`your.server.domain`*/rawlog/**.

    At the command line, enter the following command to list all dates for which logs are currently available:

    curl -X GET https://*`your.server.domain`*/rawlog/ \
    -H "Authorization: *`your_api_key`*"

    If successful, the response body lists all available logs dates as a JSON string, such as the following (shortened for the sake of space):

    {
      "results": [
        {
          "date": "*`2014/10/29`*",
          "href": "http://*`your.server.domain`*/rawlog/*`2014/10/29`*"
        },
        .
        .
        .
      ]
    }
2.  List all nodes that contain available logs for a given date.

    You can list all nodes that contain available logs for a given date by specifying the year, month, and day in the GET method.

    At the command line, enter the following command using a URL listed in the response from step 2.

    curl -X GET https://*`your.server.domain`*/rawlog/*`2014/10/29`* \
    -H "Authorization: *`your_api_key`*"

    If successful, the response body lists all nodes for which logs are available, such as the following (shortened for the sake of space):

    {
      "results": [
        {
          "node": "*`example_node`*",
          "href": "http://*`your.server.domain`*/rawlog/*`2014/10/29`*/*`example_node`*"
        },
        .
        .
        .
      ]
    }
3.  List all available logs for a given date and node.

    You can list all available logs for a given date and node by specifying the year, month, day, and node in the GET method.

    At the command line, enter the following command using a URL listed in the response from step 3.

    curl -X GET https://*`your.server.domain`*/rawlog/*`2014/10/29`*/*`example_node`* \
    -H "Authorization: *`your_api_key`*"

    If successful, the response body lists all available logs, such as the following:

    {
      "results": [
        {
          "log":
            "rejectlog",
            "size":3127,
            "href":"https://*`your.server.domain`*/rawlog/*`2014/10/29`*/*`example_node`*/reject"
          },
          {
            "log":
              "mainlog",
              "size":29693817,
              "href":"https://*`your.server.domain`*/rawlog/*`2014/10/29`*/*`example_node`*/main"
          },
          {
            "log":
              "bouncelog",
              "size":7884400,
              "href":"https://*`your.server.domain`*/rawlog/*`2014/10/29`*/*`example_node`*/bounce"
          }
      ]
    }
4.  Retrieve the main log.

    You can retrieve one of the available logs by specifying the year, month, day, node, and log type in the GET method. In this tutorial, you will retrieve the `mainlog`. To retrieve any of the other logs available, specify a different log type in the following REST API call.

    ### Note

    The log files are bzip2 compressed and will come across as a binary stream.

    At the command line, enter the following command using a URL listed in the response from step 4.

    curl -O https://*`your.server.domain`*/rawlog/2014/10/29/*`example_node`*/main \
    -H "Authorization: *`your_api_key`*"
5.  View the log.

    The downloaded file is in bzip2 format. You can verify this using the following command:

    `file mainlog`

    The following is an example response:

    `mainlog: bzip2 compressed data, block size = 900k`

    To decompress the downloaded file and view your log, enter the following command:

    `bzcat mainlog | head -n 4`

    The following is an example `mainlog` file:

    ```
    1414540800@9B/A5-03654-00E20545@8B/A5-03654-00E20545@00/00-00000-00000000@R »
    @recipient1@example_domain1.com@info1@example_domain3.com@10.0.0.1@9321 »
    @rest@example_binding_group@example_binding11414540800@7B/A5-03654-FFD20545@6B/ »
    A5-03654-FFD20545@00/00-00000-00000000@D@example_domain1.com@10421 »
    @example_binding_group@example_binding3@0@0.00@10.0.0.11414540800@DB/A5-03654-00E20545 »
    @CB/A5-03654-00E20545@00/00-00000-00000000@R@recipient2@example_domain2.com@info2 »
    @example_domain3.com@10.0.0.1@9281@rest@example_binding_group@example_binding2
    ```

Congratulations! You have successfully retrieved your log files from SparkPost Elite using the Log API. Additional details about the Log API are available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference).

| [Prev](getting.started.metrics.php)  | [Up](p.reporting_tracking.php) |  [Next](log_formats.php) |
| Chapter 18. Using the Metrics API for Reporting  | [Table of Contents](index.php) |  Chapter 20. Log Formats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)