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

| Chapter 1. Installation |
| [Prev](p.guide.php)  | Part I. Configuration Guide |  [Next](install.requirements.php) |

## Chapter 1. Installation

**Table of Contents**

<dl class="toc">

<dt>[1.1\. System Requirements](install.requirements.php)</dt>

<dt>[1.2\. Ports Used by Momentum](install.ports.php)</dt>

<dt>[1.3\. Security Considerations](install.security.php)</dt>

<dt>[1.4\. Preparing the System](install.prepare.php)</dt>

<dt>[1.5\. Operating System Specific Preparation](install.os-specific.php)</dt>

<dt>[1.6\. Installation on Linux](install.linux.php)</dt>

<dt>[1.7\. Installation on Solaris](install.solaris.php)</dt>

<dt>[1.8\. Installer Options](install.options.php)</dt>

<dt>[1.9\. Installing Additional Packages](install.additional.packages.php)</dt>

<dt>[1.10\. Riak Server](install.riak.php)</dt>

<dt>[1.11\. Performing a Stand-alone Installation](install.standalone.php)</dt>

<dt>[1.12\. Installing a Cluster](install.cluster.php)</dt>

</dl>

The binary packages are designed for easy installation. Each platform uses its native installation format (`RPM` for Linux, `pkg` for Solaris). All installations have identical installation paths, so no path translations are required in this section.

The supported platforms are as follows:

*   Red Hat Enterprise Linux 5 (x86_64)

*   Red Hat Enterprise Linux 5 (i386)

*   Red Hat Enterprise Linux 6 (x86_64) (As of version 3.4.)

*   Solaris 10 (amd64)

*   Solaris 10 (sparcv9)

### Note

Message Systems only supports 64-bit environments for Momentum 3.6.x and later.

### Note

Please unset the following environmental variables before installing or upgrading:

*   unset `LC_MONETARY`

*   unset `LC_NUMERIC`

*   unset `LC_MESSAGES`

*   unset `LC_COLLATE`

*   unset `LC_CTYPE`

*   unset `LC_TIME`

The variables are sometimes set by your terminal program, by iTerm for Mac OS X, for example. Also, make sure that the following variable is set:

`LANG=en_US.UTF-8`

This is especially important for upgrades from 3.2.x to 3.3.x.

The expected installation path is `/opt/msys/ecelerity`: If you choose to move this installation to a different final location we recommend soft linking `/opt/msys/ecelerity` to that location.

If you are upgrading to Momentum version 3.3, be sure to review [Section 4.3.1, “PostgreSQL in Momentum Version 3.3”](operations.postgresql.php#operations.postgresql.migrating.3.3 "4.3.1. PostgreSQL in Momentum Version 3.3").

## Supported Versions in Momentum 3.5.4

*   Red Hat 5.9 (and its CentOS equivalent) on both i386 and x86-64 architectures

*   Red Hat 6.4 (and its CentOS equivalent) on x86-64 architecture

*   Solaris variants: Solaris 10 (minimum level U3) on both SPARC and AMD64 architectures

*   Note that Momentum 3.5 and future releases are not supported on Red Hat 4\. Red Hat dropped support for this release in February 2012.

| [Prev](p.guide.php)  | [Up](p.guide.php) |  [Next](install.requirements.php) |
| Part I. Configuration Guide  | [Table of Contents](index.php) |  1.1. System Requirements |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)