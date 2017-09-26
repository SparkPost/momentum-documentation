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

| A.2. Failing Over to a Slave Database |
| [Prev](mc3-pitr.php)  | Appendix A. Point-In-Time Recovery (PITR) for Message Central |  [Next](mc3-pitr-restoring.php) |

## A.2. Failing Over to a Slave Database

### Note

PITR is a flexible solution that can be leveraged to provide fail over options customized to meet various needs. As with any backup and disaster recovery solution, if you don't test the system's capabilities, it is extremely difficult to know how long the recovery process will take and to get a good feel for what risks are involved. In the worst case, if things are set up incorrectly, you may be walking on a tightrope with no backup safety net. Test early, test often, and then if the worst happens, your fire drill procedures will kick in and downtime can be effectively minimized.

In the event that the master database becomes unavailable and a fail over is required, one of the following commands should be executed on the slave:

*   **touch /var/log/pe2/omnipitr/finish.recovery** 

or:

*   **echo NOW > /var/log/pe2/omnipitr/finish.recovery** 

**touch /var/log/pe2/omnipitr/finish.recovery**                                       causes the slave to finish processing all the PITR data in its queue and then start up, allowing connections. If an immediate startup is desired, which will result in the loss of any unprocessed PITR data, execute the second command listed above instead.

The logs in `/var/db/msyspg/pg_log` should be monitored to make sure that the slave database comes up cleanly, and then any Message Central services that were interacting with the master database should be pointed to the slave database to restore system functionality. The trigger file `/var/log/pe2/omnipitr/finish.recovery` should be removed after slave startup has been confirmed.

The exact procedure following fail over will differ depending on where the failed master was, and whether you are failing over locally, or to a separate data center. It may be possible to limit the changes to local DNS such that the hostname of the failed master now resolves to the slave. If that is not possible, configuration files for Message Central services will need to be updated—you will have to change the `postgres.connect_string` option, for example—and the services themselves restarted.

If you are failing over to a data center containing only warm spare machines, it is possible that the configuration files will already be pointing to the correct locations. In that case, it's only necessary to make sure that all required Message Central services that were not running are started up.

| [Prev](mc3-pitr.php)  | [Up](mc3-pitr.php) |  [Next](mc3-pitr-restoring.php) |
| Appendix A. Point-In-Time Recovery (PITR) for Message Central  | [Table of Contents](index.php) |  A.3. Restoring Normal Operations After Database Fail Over |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)