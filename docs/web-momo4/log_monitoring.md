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

| Chapter 33. Log Monitoring |
| [Prev](logging.configuration.php)  | Part IV. Logging |  [Next](log_rotating.php) |

## Chapter 33. Log Monitoring

This chapter lists and describes the logs associated with Momentum 4.

<a name="idp3457024"></a>

**Table 33.1. Log Monitoring**

| Log File Name and Location | Node Type | Description |
| --- | --- | --- |
| /var/log/ecelerity/paniclog.ec | Platform | Error level information for ecelerity is written here. |
| /var/log/eccluster/paniclog.ec | Manager | Error level information for eccmgr is written here. |
| /var/log/msys-nginx/error.log | All | Nginx log |
| /var/log/msys-cassandra | Platform and Manager | Cassandra log |
| /var/log/msys-rabbitmq/rabbit@*node*.log | Platform | Internal logging **** Note**      that the content of this log must not be altered or truncated - listed here for informational purposes only. |
| /var/db/vertica/msys/dblog | Analytics | Vertica log |
| /var/ecconfigd/apache/error.log | Platform | Apache log |
| /var/log/msys-nodejs/*.log | Analytics | NodeJS log |
| /var/log/ecelerity/gencp_* | Platform | Internal logging ** **** Note**      that the content of this log must not be altered or truncated - listed here for informational purposes only. These files show if you are getting a backup of transmission requests. |
| /var/log/ecelerity/traces/* | All | These files show if Ecelerity is having a problem. |

| [Prev](logging.configuration.php)  | [Up](p.logs.php) |  [Next](log_rotating.php) |
| 32.2. Logging Configuration  | [Table of Contents](index.php) |  Chapter 34. Rotating Logs **ec_rotate** |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)