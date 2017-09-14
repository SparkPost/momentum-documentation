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

| 5.6. Production Environment Configurations |
| [Prev](hardware.config.php)  | Chapter 5. Hardware Considerations |  [Next](addl.config.notes.php) |

## 5.6. Production Environment Configurations

This section provides hardware specifications for different target volume levels. All systems are rated for use with CPU utilization at 50% in order to accommodate traffic spikes. All volumes are specified with the assumption of an average message size of 100 kB.

### Enterprise Basic Cluster

The Enterprise Basic Configuration consists of three nodes running all roles with the resources specified below. The system supports the following performance ratings.

<a name="enterprise_basic_performance_ratings"></a>

**Table 5.3. Enterprise Basic - Performance Ratings**

| Node Capacity | 

Cluster Capacity

(2 Nodes Operational)

 | 

Peak Cluster Capacity

(3 Nodes Operational)

 |
| --- | --- | --- |
| 500,000 Msg/hr | 1 M Msg/hr | 1.5 M Msg/hr |

<a name="enterprise_basic_cluster_hw_reqs"></a>

**Table 5.4. Enterprise Basic - Hardware Requirements**

| Resource | Minimum Specification |
| --- | --- |
| CPU | 8 x 2.5 GHz Cores (Min Speed) |
| Memory | 32 GB RAM |
| Network Interface | 1 GB NIC |

<a name="enterprise_basic_cluster_storage_array"></a>

**Table 5.5. Enterprise Basic - Storage Array Configuration**

| Array | Configuration | Mount Points and Notes |
| --- | --- | --- |
| All Storage | 6 x 300 GB 15k RPM HDD |   |
| Message Spools | 2 x 300 GB in RAID1 | 

/var/spool/ecelerity

Note: This array should be dedicated to the spools.

 |
| OS, App Binaries, Logs, Platform DB, Analytics DB | 2 x 300 GB in RAID1 | 

*   OS - / (root)

*   Logs - /var/log/ecelerity

*   App Binaries - /opt./msys

*   Platform DB - /var/db/cassandra

*   Analytics DB - /var/db/vertica

 |

### Enterprise Standard Cluster

The Enterprise Standard Configuration consists of three nodes running all roles with the resources specified below. The system supports the following performance ratings.

<a name="enterprise_standard_performance_ratings"></a>

**Table 5.6. Enterprise Standard - Performance Ratings**

| Node Capacity | 

Cluster Capacity

(2 Nodes Operational)

 | 

Peak Cluster Capacity

(3 Nodes Operational)

 |
| --- | --- | --- |
| 1 M Msg/hr | 2 M Msg/hr | 3 M Msg/hr |

<a name="enterprise_standard_cluster_hw_reqs"></a>

**Table 5.7. Enterprise Standard - Hardware Requirements**

| Resource | Minimum Specification |
| --- | --- |
| CPU | 16 x 2.5 GHz Cores (Min Speed) |
| Memory | 64 GB RAM |
| Network Interface | 1 GB NIC |

<a name="enterprise_standard_cluster_storage_array"></a>

**Table 5.8. Enterprise Standard - Storage Array Configuration**

| Array | Configuration | Mount Points and Notes |
| --- | --- | --- |
| All Storage | 8 x 300 GB 15k RPM HDD |   |
| Message Spools | 4 x 300 GB in RAID10 | 

/var/spool/ecelerity

Note: This array should be dedicated to the spools.

 |
| OS, App Binaries, Logs, Platform DB | 2 x 300 GB in RAID1 | 

*   OS - / (root)

*   Logs - /var/log/ecelerity

*   App Binaries - /opt./msys

*   Platform DB - /var/db/cassandra

 |
| Analytics DB | 2 x 300 GB in RAID1 | 

Analytics DB - /var/db/vertica

Note: This array should be dedicated to the Analytics DB.

 |

### Enterprise Plus Cluster

The Enterprise Plus Configuration consists of three nodes running all roles with the resources specified below. The system supports the following performance ratings.

<a name="enterprise_plus_performance_ratings"></a>

**Table 5.9. Enterprise Plus - Performance Ratings**

| Node Capacity | 

Cluster Capacity

(2 Nodes Operational)

 | 

Peak Cluster Capacity

(3 Nodes Operational)

 |
| --- | --- | --- |
| 1.5 M Msg/hr | 3 M Msg/hr | 4.5 M Msg/hr |

<a name="enterprise_plus_cluster_hw_reqs"></a>

**Table 5.10. Enterprise Plus - Hardware Requirements**

| Resource | Minimum Specification |
| --- | --- |
| CPU | 20 x 2.5 GHz Cores (Min Speed) |
| Memory | 64 GB RAM |
| Network Interface | 1 GB NIC |

<a name="enterprise_plus_cluster_storage_array"></a>

**Table 5.11. Enterprise Plus - Storage Array Configuration**

| Array | Configuration | Mount Points and Notes |
| --- | --- | --- |
| All Storage | 8 x 600 GB 15k RPM HDD |   |
| Message Spools | 4 x 600 GB in RAID10 | 

/var/spool/ecelerity

Note: This array should be dedicated to the spools.

 |
| OS, App Binaries, Logs, Platform DB | 2 x 600 GB in RAID1 | 

*   OS - / (root)

*   Logs - /var/log/ecelerity

*   App Binaries - /opt./msys

*   Platform DB - /var/db/cassandra

 |
| Analytics DB | 2 x 600 GB in RAID1 | 

Analytics DB - /var/db/vertica

Note: This array should be dedicated to the Analytics DB.

 |

### Enterprise Scaling Cluster

The Enterprise Scaling Configuration consists of both an Analytics Cluster and a Platform Cluster. Because large volume deployments require more resources for sending than for analytics, Message Systems recommends separating the Platform and Analytics roles to separate clusters. This configuration allows you to scale the Platform cluster independent of the analytics cluster. The baseline configuration consists of a three-node Analytics Cluster and a three-node Platform Cluster. You may scale sending capacity by incrementally adding Platform nodes to the cluster as needed.

The baseline system supports the following performance ratings.

<a name="enterprise_scaling_performance_ratings"></a>

**Table 5.12. Enterprise Scaling - Performance Ratings**

| 

Baseline Cluster Capacity

(2 Nodes Operational)

 | 

Baseline Peak Cluster Capacity

(3 Nodes Operational)

 | Incremental Platform Node Capacity |
| --- | --- | --- |
| 3 M Msg/hr | 4.5 M Msg/hr | 1.5 M Msg/hr |

<a name="enterprise_scaling_platform_node_cluster_hw_reqs"></a>

**Table 5.13. Enterprise Scaling - Hardware Requirements for Platform Node**

| Resource | Minimum Specification |
| --- | --- |
| CPU | 20 x 2.5 GHz Cores (Min Speed) |
| Memory | 64 GB RAM |
| Network Interface | 1 GB NIC |

<a name="enterprise_scaling_platform_node_cluster_storage_array"></a>

**Table 5.14. Enterprise Scaling - Storage Array Configuration for Platform Node**

| Array | Configuration | Mount Points and Notes |
| --- | --- | --- |
| All Storage | 8 x 600 GB 15k RPM HDD |   |
| Message Spools | 4 x 600 GB in RAID10 | 

/var/spool/ecelerity

Note: This array should be dedicated to the spools.

 |
| OS, App Binaries, Logs, Platform DB | 2 x 600 GB in RAID1 | 

*   OS - / (root)

*   Logs - /var/log/ecelerity

*   App Binaries - /opt./msys

*   Platform DB - /var/db/cassandra

 |

<a name="enterprise_scaling_analytics_node_cluster_hw_reqs"></a>

**Table 5.15. Enterprise Scaling - Hardware Requirements for Analytics Node**

| Resource | Minimum Specification |
| --- | --- |
| CPU | 20 x 2.5 GHz Cores (Min Speed) |
| Memory | 64 GB RAM |
| Network Interface | 1 GB NIC |

<a name="enterprise_scaling_analytics_node_cluster_storage_array"></a>

**Table 5.16. Enterprise Scaling - Storage Array Configuration for Analytics Node**

| Array | Configuration | Mount Points and Notes |
| --- | --- | --- |
| All Storage | 4 x 600 GB 15k RPM HDD |   |
| OS, App Binaries, Logs | 2 x 600 GB in RAID1 | 

*   OS - / (root)

*   Logs - /var/log/ecelerity

*   App Binaries - /opt./msys

 |
| Analytics DB | 2 x 600 GB in RAID1 | 

Analytics DB - /var/db/vertica

Note: This array should be dedicated to the Analytics DB.

 |

| [Prev](hardware.config.php)  | [Up](hardware.requirements.php) |  [Next](addl.config.notes.php) |
| 5.5. Hardware Deployment Configuration  | [Table of Contents](index.php) |  5.7. Additional Configuration Notes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)