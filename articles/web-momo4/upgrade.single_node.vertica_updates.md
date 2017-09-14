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

| 10.2. Vertica Updates |
| [Prev](upgrade.single_node.php)  | Chapter 10. Upgrade - Single Node |  [Next](upgrade.single_node.configuration.flyway.php) |

## 10.2. Vertica Updates

It is best to perform these steps at a time of low volume. Some services will need to be temporarily stopped, and queues could back up if there is too much activity. Also, pay special attention to the verification steps; some will take longer to complete, and they will need to be verified before moving on.

### 10.2.1. Performance

1.  Run updates to the tuple mover.

    `/opt/vertica/bin/vsql -U vertica_dba -f /opt/msys/app/db/scripts/V2015.07.09_14.35.00__update_tuple_mover.sql`
2.  Stop the ETLs, and wait for ETL queries to complete on each node (up to a minute should be enough time).

    ```
    /etc/init.d/msys-app-metrics-etl stop
    /etc/init.d/msys-app-webhooks-transmitter stop
    /etc/init.d/msys-app-webhooks-batch stop
    ```

3.  Trigger moveout.

    `/opt/vertica/bin/vsql -U vertica_dba -c "select do_tm_task('moveout');"`
4.  Monitor/verify the moveout to ensure that it contains zeros for all rows in `region_in_use_size_kb`.

    `/opt/vertica/bin/vsql -U vertica_dba -c "select * from wos_container_storage;"`
5.  Run the Write Optimize Store (WOS) resource pool update.

    `/opt/vertica/bin/vsql -U vertica_dba -f /opt/msys/app/db/scripts/V2015.07.09_14.45.00__update_wos.sql`
6.  Start the ETLs.

    ```
    /etc/init.d/msys-app-metrics-etl start
    /etc/init.d/msys-app-webhooks-transmitter start
    /etc/init.d/msys-app-webhooks-batch start
    ```

7.  Verify the new configuration.

    ```
    /opt/vertica/bin/vsql -U vertica_dba -c "select get_config_parameter('MoveOutInterval');"
    /opt/vertica/bin/vsql -U vertica_dba -c "select get_config_parameter('MoveOutSizePct');"
    /opt/vertica/bin/vsql -U vertica_dba -c "select plannedconcurrency, maxmemorysize, memorysize from resource_pools \
       where name='wosdata';"
    /opt/vertica/bin/vsql -U vertica_dba -c "select memorysize, maxconcurrency from resource_pools where name='tm';"
    /opt/vertica/bin/vsql -U vertica_dba -c "select * from databases where database_name='msys';"
    ```

    Your results should look something like this:

    ```
    [root@ops-842-1 ~]# /opt/vertica/bin/vsql -U vertica_dba -c "select get_config_parameter('MoveOutInterval');"
     get_config_parameter 
    ----------------------
     90
    (1 row)
    [root@ops-842-1 ~]# /opt/vertica/bin/vsql -U vertica_dba -c "select get_config_parameter('MoveOutSizePct');"
     get_config_parameter 
    ----------------------
     50
    (1 row)
    [root@ops-842-1 ~]# /opt/vertica/bin/vsql -U vertica_dba -c "select plannedconcurrency, maxmemorysize, memorysize 
    from resource_pools where name='wosdata';"
     plannedconcurrency | maxmemorysize | memorysize 
    --------------------+---------------+------------
     6                  | 33%           | 33%
    (1 row)
    [root@ops-842-1 ~]# /opt/vertica/bin/vsql -U vertica_dba -c "select memorysize, maxconcurrency from resource_pools 
    where name='tm';"
     memorysize | maxconcurrency 
    ------------+----------------
     600M       |             15
    (1 row)
    [root@ops-842-1 ~]# /opt/vertica/bin/vsql -U vertica_dba -c "select * from databases where database_name='msys';"
        database_id    | database_name |     owner_id      | owner_name  |          start_time           |  (cont'd below)
    -------------------+---------------+-------------------+-------------+-------------------------------+  (cont'd below)
     45035996273704974 | msys          | 45035996273704962 | vertica_dba | 2015-08-17 13:01:40.135772-04 |  (cont'd below)
    (1 row)

                          compliance_message                      | export_subnet | load_balance_policy 
    --------------------------------------------------------------+---------------+---------------------
     The database is in compliance with respect to raw data size. |             0 | none
    (1 row)
    ```

    ### Note

    The last table rows shown above had to be displayed here on two lines due to browser limitations. Your results will be displayed on a single line.

### 10.2.2. msg_events Data Repartition

1.  Stop the metrics-api.

    `/etc/init.d/msys-app-metrics-api stop`
2.  Run the repartition.

    ```
    echo "set search_path='momo';\\i /opt/msys/app/db/data-migrations/V2015.01.27_14.30.00__repartition_msg_events.sql" | \
       /opt/vertica/bin/vsql -U vertica_dba
    ```

3.  Check the repartition status.

    1.  Confirm that msg_events repartitions are at 100 percent.

        `/opt/vertica/bin/vsql -U vertica_dba -c "select * from v_monitor.partition_status;"`
    2.  Confirm your output:

        `/opt/vertica/bin/vsql -U vertica_dba -c "select export_objects('', 'momo.msg_events');" | grep "PARTITION BY"`

        Your results should look something like this:

        ```
        # PARTITION BY (concat(((date_part('year', "timezone"('UTC', msg_events.tdate_hour)))::int)::varchar, \
        # ((date_part('month', "timezone"('UTC', msg_events.tdate_hour)))::int)::varchar));
        ```

    3.  Verify the partition keys are in the format YYYYM(M).

        `/opt/vertica/bin/vsql -U vertica_dba -c "select partition_key from partitions where table_schema = 'momo'"`

        Your results should look something like this:

        ```
        # example output:
        partition_key
        ---------------
         20157
         20157
         20157
         20157
         20157
         20157
         20157
         20157
         20157
         20157
        (10 rows)
        ```

| [Prev](upgrade.single_node.php)  | [Up](upgrade.single_node.php) |  [Next](upgrade.single_node.configuration.flyway.php) |
| Chapter 10. Upgrade - Single Node  | [Table of Contents](index.php) |  10.3. Prepare and Run Flyway |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)