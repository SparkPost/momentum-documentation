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

| 11.4. Upgrade Cassandra on the Platform Nodes |
| [Prev](upgrade.two_tier.preparation.snapshot_cassandra_rolling.php)  | Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |  [Next](upgrade.two_tier.preparation.stop_generations_rolling.php) |

## 11.4. Upgrade Cassandra on the Platform Nodes

To allow for continuous functioning of the Cassandra cluster, only one Cassandra server instance should be stopped for upgrade at any one time. Run the following command to check the Cassandra cluster status:

`/opt/msys/3rdParty/cassandra/bin/nodetool status`

This should be done after each node is updated to verify the cluster is fully functional before proceeding to the next node.

1.  Upgrade Cassandra from version 2.0.8 to 2.0.15\. Perform the following Cassandra steps on the **first node** .

    1.  Drain and remove the node from the Cassandra cluster.

        `/opt/msys/3rdParty/cassandra/bin/nodetool drain`
    2.  Stop the Cassandra service.

        `service msys-cassandra stop`
    3.  Backup the Cassandra configuration files. This is an optional step; no changes should need to be merged into the new configuration files, but it is good practice to perform a backup.

        ```
        pushd /opt/msys/3rdParty/cassandra
        tar -cf ~/cassandra_conf_2_0_8.tar conf
        popd
        ```

    4.  Upgrade the Cassandra Redhat Package Manager (RPM). Be sure to run this command from the directory containing the bundle.

        `yum --disablerepo=* --config momentum.repo --enablerepo=momentum upgrade msys-cassandra`
    5.  Compare the new configuration with the backup. Differences such as comments, jvmver, and JVM variables are fine, and you should not have to merge or replace anything at this point.

        ### Note

        Significant differences indicate a problem. If this occurs, you need to correct the issue before continuing. If you cannot correct the issue, revert to your backup.

        ```
        pushd ~
        tar -xvf cassandra_conf_2_0_8.tar
        diff -r conf /opt/msys/3rdParty/cassandra/conf
        popd
        ```

    6.  Start Cassandra.

        `service msys-cassandra start`

2.  Repeat Step 1 for the **remaining Platform nodes** .

| [Prev](upgrade.two_tier.preparation.snapshot_cassandra_rolling.php)  | [Up](upgrade.two_tier_configuration_rolling.php) |  [Next](upgrade.two_tier.preparation.stop_generations_rolling.php) |
| 11.3. Perform a Cassandra Snapshot  | [Table of Contents](index.php) |  11.5. Stop Transmissions to the First Platform Node |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)