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

| 1.10. Installation on Microsoft Windows (Deprecated) |
| [Prev](install.options.php)  | Chapter 1. Installation |  [Next](conf.php) |

## 1.10. Installation on Microsoft Windows (Deprecated)

*Note: Momentum is no longer supported on Windows.*                                             Momentum runs on Windows Server 2003 and later. You must ensure that Internet Information Services (IIS) is installed prior to installing Momentum.

Momentum is packaged using the native Windows Installer; simply double click on the MSI file and Momentum will be installed on the "best" available drive (usually the drive with the most disk space). You can change the drive during the install by clicking on the Browse button on the Custom Setup screen.

Momentum is always installed under `DRIVE:\opt\ecelerity`, where `DRIVE:` represents the selected drive.

In addition to installing the product, the installer performs the following tasks:

*   Creates a Local (not domain!) Momentum user account (`ecuser`).

*   Registers Momentum as a service that runs as the `ecuser` user at system startup.

*   Schedules a nightly maintenance task for log processing.

*   Registers statistical services that are used for graphing by the Web Console.

*   Creates a Web Console virtual web site under IIS.

*   Attempts to automatically fetch your license file from Message Systems, so that the Momentum service can start.

Once the installation completes, your browser should launch automatically, taking you to the web console for further instructions.

### 1.10.1. Performance Considerations on Windows

*Note: Momentum is no longer supported on Windows.*                                             You might find that adjusting file system parameters can improve performance. You can use the **fsutil** utility to adjust the following parameters:

**Disable short filenames**`**fsutil behavior set disable8dot3 1**`

Disables the generation of DOS style 8.3 style filenames. This will speed up the creation of files for your whole system, at the cost of losing backwards compatibility with older DOS style applications.

**Disable last access time metadata**`**fsutil behavior set disablelastaccess 1**`

When disabled, this avoids the need to update the last access time meta data for all files on your system, which means that the system won't need to write out buffers to disk when reading in files from the spool, improving system performance.

**Increase master file table (MFT) reservation**`**fsutil behavior set mftzone [1-4]**`

This command adjusts the amount of disk space reserved for the NTFS MFT zone. Increasing the reservation will improve performance by avoiding the need to dynamically reallocate the MFT as the number of files increases. The amount of disk space reserved is calculated as **setting * disk_space / 8** ; setting 1 corresponds to a reservation of 1/8th of your disk size, and setting 4 corresponds to a reservation of half your disk size.

In addition, tuning the following Windows Registry parameters might also be beneficial; all the usual caveats for modifying the Registry apply:

**Increase file system cache size**

The system default file system cache size is limited to 8MB by default. Increasing the file system buffer cache will improve disk performance, at the cost of reducing the overall available memory for applications.

Setting the following registry entry will set the system to LargeSystemCache mode, which allows the buffer cache to use almost all available RAM, if required.

```
[HKEY_LOCAL_MACHINE\System\CurrentControlSet\Control\Session Manager
\Memory Management]
"LargeSystemCache"=dword:00000001
```

### Note

The first line has been wrapped for display purposes.

For more information on file system tuning, consult Microsoft TechNet: [http://www.microsoft.com/technet/scriptcenter/guide/sas_fsd_xdvz.mspx](http://www.microsoft.com/technet/scriptcenter/guide/sas_fsd_xdvz.mspx).

### 1.10.2. Networking Configuration

We recommend increasing the range of ephemeral ports that can be used to initiate outbound connections, as the default value can impose artificial constraints on mail throughput.

You can find instructions on configuring the ephemeral port range in the Microsoft Knowledge Base article [Q196271](http://support.microsoft.com/default.aspx/kb/q196271/). We recommend setting this option to the maximum allowed value of 65534.

| [Prev](install.options.php)  | [Up](install.php) |  [Next](conf.php) |
| 1.9. Installer Options  | [Table of Contents](index.php) |  Chapter 2. Configuration |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)