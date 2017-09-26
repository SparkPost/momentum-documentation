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

| 11.7. Restore Transmissions to the First Platform Node and Stop Transmissions to all other Platform Nodes |
| [Prev](upgrade.two_tier.preparation.ecelerity_rolling.php)  | Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |  [Next](upgrade.two_tier.preparation.upgrade_ecelerity_rolling.php) |

## 11.7. Restore Transmissions to the First Platform Node and Stop Transmissions to all other Platform Nodes

1.  On **all Analytics nodes** , edit `/opt/msys/3rdParty/nginx/conf.d/momo_upstream.conf` and restore the line identifying the first Platform node. For a combined cluster upgrade, perform this action on **all nodes in the cluster** .

2.  Reload the NGINX configuration.

    `pssh -h /var/tmp/vertica-hosts-file "/etc/init.d/msys-nginx reload"`
3.  On **all Analytics nodes** , edit `/opt/msys/3rdParty/nginx/conf.d/momo_upstream.conf` and comment out the lines identifying all nodes other than the first Platform node. For a combined cluster upgrade, perform this action on **all nodes in the cluster** .

4.  Reload the NGINX configuration.

    `pssh -h /var/tmp/vertica-hosts-file "/etc/init.d/msys-nginx reload"`
5.  Allow all other nodes time to finish generation.

    ```
    $ /opt/msys/ecelerity/bin/ec_console
    16:26:02 /tmp/2025> msg_gen joblist   
    Job: 84158406797069455 jctl: 4 Restarts: 0 resync: 0 complete: 0 del_pend: 0
          inprog: 1 Recips:    100  LastStart:      1 worker(count: 1 complete: 0)

          own  start count s_recip s_count s_total complete fail status state restart seqno finish
            4      1   100       1     100       0        0    0      0     0       0     1      0
    Job: 84158406797069346 jctl: 4 Restarts: 0 resync: 0 complete: 0 del_pend: 0
          inprog: 1 Recips:    100  LastStart:      1 worker(count: 1 complete: 0)

          own  start count s_recip s_count s_total complete fail status state restart seqno finish
            4      1   100       1     100       0        0    0      0     0       0     1      0

    16:26:06 /tmp/2025> msg_gen joblist                                                                                          
    Ok
    ```

| [Prev](upgrade.two_tier.preparation.ecelerity_rolling.php)  | [Up](upgrade.two_tier_configuration_rolling.php) |  [Next](upgrade.two_tier.preparation.upgrade_ecelerity_rolling.php) |
| 11.6. Upgrade Ecelerity and the Cassandra Schema on the First Platform Node  | [Table of Contents](index.php) |  11.8. Upgrade Ecelerity on the Remaining Platform Nodes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)