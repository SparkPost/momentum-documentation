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

| 30.2. Running the Riak Service |
| [Prev](riak.php)  | Chapter 30. Riak |  [Next](operations.riak.ports.php) |

## 30.2. Running the Riak Service

Riak is configured to start automatically when the system boots. The service can be controlled by the script located at `/etc/init.d/msys-riak`. This initialization script has the usual stop, start, and restart options. The following additional options are also available:

*   `reboot` – Perform a clean restart by first terminating the Erlang VM.

*   `ping` – Check that the service is running.

*   join *`node`* – Join a Riak cluster. Equivalent to running the **riak-admin cluster join *`riak-cluster@otherip`***                                       command. Joins the running node to another running node so that they participate in the same cluster.

*   `attach` – Attaches to the console of a Riak node running in the background, giving access to the Erlang shell and runtime messages.

*   `console` – Start the Riak node in the foreground, giving access to the Erlang shell and runtime messages.

| [Prev](riak.php)  | [Up](riak.php) |  [Next](operations.riak.ports.php) |
| Chapter 30. Riak  | [Table of Contents](index.php) |  30.3. Riak Ports |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)