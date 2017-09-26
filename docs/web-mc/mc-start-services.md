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

| 1.7. Services |
| [Prev](mc-mtas.php)  | Chapter 1. Installing Message Central |  [Next](mc-postgresql.php) |

## 1.7. Services

Depending upon the configuration of your installation, some or all of the following services are started up when Message Central is installed:

*   `/etc/init.d/msys-riak` The Riak database used by custom reports, Adaptive Delivery and the mobility modules.

    **Configuration Change. ** This service was introduced in Momentum 3.3.

*   `/etc/init.d/pe2httpd` the Message Central web UI and REST server (if selected)

*   `/etc/init.d/mbusd_monitor` the Momentum cluster messaging bus monitor

    **Configuration Change. ** As of momentum 3.4, this service is no longer used; cluster messaging is handled by [The msgc Modules](https://support.messagesystems.com/docs/web-ref/modules.msgc.php).

*   `/etc/init.d/pe2thumbq` the thumbnail preview queue processor. This service is available as of Message Central version 3.6.

*   `/etc/init.d/ec_cmd` the command dispatcher for the Momentum web UI

*   `/etc/init.d/ecelerity` the Momentum server process

*   `/etc/init.d/ecconfigd` the Momentum configuration Server

*   `/etc/init.d/eccmgr` the Momentum cluster manager

*   `/etc/init.d/ecwebconsole` the Momentum web console

*   `/etc/init.d/cidr_server` the cidr_server (part of a Momentum cluster console installation)

*   `/etc/init.d/pe2sched` the Message Central scheduler

*   `/etc/init.d/pe2clickctl` the Message Central click tracker

*   `/etc/init.d/msyspg` the PostgreSQL server

### Note

If you start services manually, only start the services that have been installed on the current machine and be sure to start the PostgreSQL server first; other services will fail if the PostgreSQL server is not running.

In some circumstances it is useful to invoke these start-up commands manually, passing in different options. For more information about this topic see [Chapter 8, *Message Central Commands*](executable-commands.php "Chapter 8. Message Central Commands") .

| [Prev](mc-mtas.php)  | [Up](mc-installation.php) |  [Next](mc-postgresql.php) |
| 1.6. Inbound and Outbound MTAs  | [Table of Contents](index.php) |  Chapter 2. Message Central and PostgreSQL |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)