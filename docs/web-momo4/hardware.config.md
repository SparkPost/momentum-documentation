## 5.5. Hardware Deployment Configuration

The Single Node Lab system is designed to support multiple functions in your environment, including development, testing staging, and other non-production roles. The system deploys to a single server supporting all Momentum functionality. The Single Node Lab System should not be used for performance testing, nor is it recommended for production use due to its lack of redundancy.

<a name="single_node_lab_hw_reqs"></a>

**Table 5.1. Hardware Requirements**

| Resource | Minimum Specification |
| --- | --- |
| CPU | 8 x 2.5 GHz Cores (Min Speed) |
| Memory | 32 GB RAM |
| Network Interface | 1 GB NIC |

<a name="single_node_lab_storage_array"></a>

**Table 5.2. Hardware Deployment - Storage Array Configuration**

| Array | Configuration | Mount Points and Notes |
| --- | --- | --- |
| All Storage | 4 x 150 GB 15k RPM HDD |   |
| Message Spools | 2 x 150 GB in RAID1 | 

/var/spool/ecelerity

Note: This array should be dedicated to the spools.

 |
| OS, App Binaries, Logs, Platform DB, Analytics DB | 2 x 150 GB in RAID1 | 

*   OS - / (root)

*   Logs - /var/log/ecelerity

*   App Binaries - /opt./msys

*   Platform DB - /var/db/cassandra

*   Analytics DB - /var/db/vertica

 |

| [Prev](hardware.environmental.php)  | [Up](hardware.requirements.php) |  [Next](production.config.php) |
| 5.4. Environmental Considerations  | [Table of Contents](index.php) |  5.6. Production Environment Configurations |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)