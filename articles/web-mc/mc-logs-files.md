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

| Chapter 9. Files Associated with Message Central |
| [Prev](mcsched.php)  |   |  [Next](mc-logs-mainlog.php) |

## Chapter 9. Files Associated with Message Central

**Table of Contents**

<dl class="toc">

<dt>[9.1\. Files Used by All Components](mc-logs-files.php#mc-logs-all-components)</dt>

<dt>[9.2\. Message Central `mainlog.ec` Log Entries](mc-logs-mainlog.php)</dt>

<dt>[9.3\. The MC Logger Files](mc-logs-logger-files.php)</dt>

<dt>[9.4\. The `pe2sched` Component File](mc-logs-mcsched.php)</dt>

<dt>[9.5\. PostgreSQL Files](mc-logs-postgres.php)</dt>

<dt>[9.6\. The Web UI Files](mc-logs-web-ui.php)</dt>

<dt>[9.7\. Log Rotation Configuration Files](mc-files-log-rotation.php)</dt>

</dl>

This chapter documents the various log and configuration files related to Message Central. The first section covers files used by all components. Otherwise, files are arranged by component.

### Note

You will only find files and logs on the machine that hosts the related component.

While the files related to the pe2 logger module are properly part of the MTA, they are documented here for your convenience.

## 9.1. Files Used by All Components

If you extracted the Message Central tarball to the recommended location all the installation files are found in the /var/tmp/message-central-bundle-*`version`* directory. This directory contains the installer script, `installer`, and the installer log file `installer`*`date_time_stamp`*.`log`.

The `packages` directory contains the RPM files and is also found in the /var/tmp/message-central-bundle-*`version`* directory.

The `pe2.conf` file is located in the `/opt/msys/pe2/etc/` directory and is used by all components.

| [Prev](mcsched.php)  |   |  [Next](mc-logs-mainlog.php) |
| pe2sched  | [Table of Contents](index.php) |  9.2. Message Central `mainlog.ec` Log Entries |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)