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

| 11.3. Perform a Cassandra Snapshot |
| [Prev](upgrade.two_tier.preparation.prepare_all_nodes_rolling.php)  | Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |  [Next](upgrade.two_tier.preparation.upgrade_cassandra_rolling.php) |

## 11.3. Perform a Cassandra Snapshot

1.  Prepare the database on each node for a snapshot. Perform the following steps on the **first Platform node** , then repeat on the remaining Platform nodes.

    ### Note

    The size of your snapshot will depend on the size of your instance. If you do not have enough space available to create a snapshot, this command will fail.

2.  From a separate host, perform a Cassandra global snapshot of **all** keyspaces. This requires doing the snapshots on **all Platform nodes**                as simultaneously as possible. This can be done on the cluster nodes by executing `tmux ... pssh` on a separate host. It can also be done manually on multiple terminal windows. For a combined cluster upgrade, perform this action on **all nodes in the cluster** .

    Snapshot subdirectories will be created under `/var/db/cassandra/data/*`. These subdirectories, which contain Cassandra sstable data, can be copied to a backup system.

    Using pssh:

    ```
    pssh -h /var/tmp/cassandra-hosts-file -o /var/tmp/gsnapshot-results \
    /opt/msys/3rdParty/cassandra/bin/nodetool snapshot --tag snapshot_name
    ```

    Using multiple terminal windows:

    `/opt/msys/3rdParty/cassandra/bin/nodetool snapshot --tag snapshot_name`
    ### Note

    A snapshot will place references on the current set of Cassandra sstables. After a snapshot compaction, operations will cause growth in disk space usage as new sstables will be created. To clear a snaphot and recover disk space, run the following command:

    `/opt/msys/3rdParty/cassandra/bin/nodetool clearsnapshot -t snapshot_name`

| [Prev](upgrade.two_tier.preparation.prepare_all_nodes_rolling.php)  | [Up](upgrade.two_tier_configuration_rolling.php) |  [Next](upgrade.two_tier.preparation.upgrade_cassandra_rolling.php) |
| 11.2. Before You Begin the Upgrade  | [Table of Contents](index.php) |  11.4. Upgrade Cassandra on the Platform Nodes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)