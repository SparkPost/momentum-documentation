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

| 5.7. Additional Configuration Notes |
| [Prev](production.config.php)  | Chapter 5. Hardware Considerations |  [Next](before_you_begin.php) |

## 5.7. Additional Configuration Notes

### File System

Momentum writes a copy of every message to the spool disk to assure no loss of messages. Sending at high volumes requires sufficient disk IOP capacity, particularly for the spool disk. Message Systems recommends the use of ext4 file systems. You can also use SANs or network attached file systems; however, these storage options introduce additional network IO and latency that can degrade performance. Make sure you account for this additional network traffic or consider a separate network for the storage components.

### Memory Speed

Momentum is a memory and CPU intensive application. For optimal performance, the system memory must operate at 1866 MHz or faster.

### Network Interface

Ensure that you are running on a kernel that is 2.6.18-194 or newer. This will help you avoid bugs that were found in previous Linux kernels related to Broadcom NICs. Also, if you build custom kernels, review RedHat bug numbers 587799 and 581148 for more information.

### noatime

Momentum does not require the creation, modification or access times on either the data or metadata files to be correct (or maintained). So mounting a volume with the noatime mount option will greatly reduce the number of unnecessary disk accesses. The spool array should be formatted using either the ext2 or ext4 file system. ext2 and ext4 have comparable performance, with ext4 being considered more reliable (because of journaling). ext3 can slow down performance, so is not recommended. Set the following options in your fstab:

ext2:

`LABEL=/var/spool/ecelerity /var/spool/ecelerity ext2 rw,noatime 0 2`

ext4:

`LABEL=/var/spool/ecelerity /var/spool/ecelerity ext4 rw,noatime,barrier=0 0 2`
### RAID

RAID arrays should be configured only in RAID1 or RAID10 configurations. The Momentum software maintains a very high write load that is not suitable for a RAID5 array; therefore, RAID5 is not supported.

### Virtualization

Momentum performance testing is executed on physical (non-virtualized) servers. If you run Momentum in Amazon Web Services (AWS) or OpenStack environments, or in other common virtualized environments such as VMware, you should plan for a potential loss of 20% - 30% in performance.

| [Prev](production.config.php)  | [Up](hardware.requirements.php) |  [Next](before_you_begin.php) |
| 5.6. Production Environment Configurations  | [Table of Contents](index.php) |  Chapter 6. Before You Begin |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)