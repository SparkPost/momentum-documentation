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

| A.1. Overview |
| [Prev](custom_channels.php)  | Appendix A. Custom Delivery Modules |  [Next](custom_channels.momo.module.api.php) |

## A.1. Overview

The Generic HTTP Client module is used in conjunction with the Generic Delivery module to provide connection services, message queuing services, message delivery via HTTP protocol, response reception, and message disposition handling. These features provide the core framework of a custom delivery module. However, the message control, payload, and response requirements vary for each delivery channel. You must implement these differences in custom functions that are registered as callbacks in the delivery module setup routine.

The custom functions are the following:

*   build_request callback routine – to customize the control and message payload for delivery

*   handle_response callback routine – to interpret the response and set the status information

*   status_classifier callback routine – to classify status information to determine message disposition

[Figure A.1, “Custom Delivery Module Diagram”](custom_channels.overview.php#figure_http_client_overview "Figure A.1. Custom Delivery Module Diagram") shows the flow of a custom delivery module. The first time the delivery module is loaded, the conf_setup callback sets and registers the module configuration and custom handlers that the module will implement. The process flow is synchronous in nature. When the connection gets a message to process for delivery, the Generic HTTP Client (`httpclnt`) calls a custom build_request callback passing the connection session data (`http_session`). This callback creates the message payload content for the request data (`http_session`–>`http_request`). On return, httpclnt sends the HTTP request message via the HTTP connection and waits for a HTTP response message. When a response is received, httpclnt calls a custom handle_response callback that parses the response and sets the status code in the response data (`http_session`–>`http_response`). This status code is used by a custom status_classifier to determine the message disposition. Upon completion, httpclnt waits for the next message for delivery, up to a configurable amount of time.

<a name="figure_http_client_overview"></a>

**Figure A.1. Custom Delivery Module Diagram**

![Custom Delivery Module Diagram](images/http_client_overview.png)

Additionally, you must write a custom logger if logging is required. A generic logger is not currently available in Momentum.

Core Momentum hooks, as well as the callback points provided by the Generic Delivery module and the Generic HTTP Client module, are available for additional customization.

| [Prev](custom_channels.php)  | [Up](custom_channels.php) |  [Next](custom_channels.momo.module.api.php) |
| Appendix A. Custom Delivery Modules  | [Table of Contents](index.php) |  A.2. Momentum Modules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)