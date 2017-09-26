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

| Chapter 3. Roles and Behaviors |
| [Prev](loam.php)  | Part I. Introduction to Momentum |  [Next](licensed_features.php) |

## Chapter 3. Roles and Behaviors

Certain roles and behaviors are set up during installation. An overview of each is provided below:

*   **Platform nodes** , apart from the log aggregator, handle message generation and transmission along with the traditional functionality of Momentum. When performing a cluster installation, you must begin with a Platform node. This initial node displays as *`nodename`*(Manager) on the summary installation screen. It functions as the cluster manager and configuration server, in addition to log aggregator. You must reference it (using the `fetch-config` option) when installing additional nodes. The Manager can be part of the Cassandra cluster, but it is not required. For help determining the necessary number of nodes, see [Section 6.3, “Redundancy”](byb.redundancy.php "6.3. Redundancy").

*   **Analytics nodes**       handle UI reporting capabilities, the Analytics database, and the REST server. For help determining the necessary number of nodes, see [Section 6.3, “Redundancy”](byb.redundancy.php "6.3. Redundancy").

*   **Message Generation**            enables you to inject messages using HTTP and to use the Engagement Tracking service. It is a licensed feature. For a detailed description, see [Section 4.1, “Message Generation”](licensed_features.php#licensed_features.message.generation "4.1. Message Generation").

*   The **Engagement Tracking**          service enables you to track opens and clicks. This option is only available if you are licensed for Message Generation. During installation, be prepared to identify the Platform node that will perform this function. This machine must be accessible to other nodes in a cluster configuration, open to the Internet, and have an active DNS name.

    Only one server can perform this function. It is identified during installation and assigned to the `engagement_tracking_host` option in the `msg_gen.conf` file.

*   The **Administration account**         provides access to the web-based UI. The user name is `admin`. Be sure to retain the password created during installation.

*   The **REST server**        provides access to the API endpoints. Momentum 4 offers a set of REST API that enables client applications to integrate with Momentum and perform actions associated with message generation and reporting. The REST API greatly enhances the feature set of the HTTP listener provided in Momentum 3.14 and later. See the [Momentum 4 REST API](https://support.messagesystems.com/docs/web-rest/v1_index.html) documentation.

*   The web-based **UI** provides a flexible, easy-to-use interface to perform various tasks related to message generation and reporting. This application runs on an Analytics node, which is identified during installation. If this node fails in a cluster configuration, another arbitrary Analytics node assumes UI duties. For additional information about the UI, see [Chapter 55, *Getting Started with the Web-based User Interface*](web-ui.php "Chapter 55. Getting Started with the Web-based User Interface") .

*   **Cluster log aggregation**                 applies only if you require aggregation of log files in a cluster configuration. The Manager node functions as the log aggregator. When you choose log aggregation during installation, the required ec_logger module is created in the `ecelerity-cluster.conf` file on the Manager.

| [Prev](loam.php)  | [Up](p.intro.php) |  [Next](licensed_features.php) |
| Chapter 2. Life of A Message  | [Table of Contents](index.php) |  Chapter 4. Licensed Features |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)