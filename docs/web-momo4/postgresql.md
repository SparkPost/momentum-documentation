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

| Chapter 29. PostgreSQL |
| [Prev](cluster.config.replication.php)  | Part III. Configuring Momentum |  [Next](postgresql.server.php) |

## Chapter 29. PostgreSQL

**Table of Contents**

<dl class="toc">

<dt>[29.1\. PostgreSQL Overview](postgresql.php#postgresql.overview)</dt>

<dt>[29.2\. Running the PostgreSQL Server](postgresql.server.php)</dt>

<dt>[29.3\. Using the PostgreSQL Client Program](postgresql.client.php)</dt>

<dt>[29.4\. Dumping and Restoring the Database](postgresql.migrating.php)</dt>

</dl>

<a class="indexterm" name="idp3649776"></a>

Momentum includes a PostgreSQL database used by the MTA application. There can be only one instance of this database. In a cluster configuration, it is installed on the Manager node.

## 29.1. PostgreSQL Overview

The following describes the default directories and configuration related to the PostgreSQL database:

*   `/var/db` – Root database directory for PostgreSQL

*   `/var/db/msyspg` – Contains the `postgresql.conf` configuration file and the PID file

    The logging options set in the configuration file are discussed in [the section called “PostgreSQL Log Files”](postgresql.php#postgresql.log-files "PostgreSQL Log Files").

    The msyspg database contains the real-time data collected by Momentum and, since this data is retained for two years, **be sure that there is adequate space on the drive that hosts the PostgreSQL server** .

*   `/var/db/msyspg/pg_log` – Contains the PostgreSQL log files, as configured in `postgresql.conf`

*   `/opt/msys/3rdParty/bin` – Contains the PostgreSQL client program `psql`

    Other PostgreSQL programs such as **pg_dump** and **pg_dumpall** are also found in this directory.

*   `/opt/msys/3rdParty/etc/php.d` – Contains the `ecdb.ini` file, which includes the database credentials

### Warning

We expressly recommend **against** using an NFS file system because of concerns about its performance in general and its reliability, especially on Linux.

### PostgreSQL Log Files

<a class="indexterm" name="idp3882352"></a>

The following settings in the `postgresql.conf` file determine the configuration for the PostgreSQL log files:

<dl class="variablelist">

<dt>log_directory</dt>

<dd>

Location of the PostgreSQL log files

Default setting is the `/var/db/msyspg/pg_log` directory.

</dd>

<dt>log_filename</dt>

<dd>

Format of the logging file name

At runtime, this is resolved as a four digit representation of the year and a two digit representation of the month, day, and minute. Default value is `postgresql-%Y-%m-%d-%M.log`.

</dd>

<dt>logging_collector</dt>

<dd>

Controls log rotation

Default setting is `on`.

</dd>

<dt>log_rotation_size</dt>

<dd>

Controls log rotation

Default setting is `100MB`. With the default settings, a new log file will be created after 100MB have been written into a log file.

</dd>

</dl>

| [Prev](cluster.config.replication.php)  | [Up](p.configuration.php) |  [Next](postgresql.server.php) |
| Chapter 28. Data Replication  | [Table of Contents](index.php) |  29.2. Running the PostgreSQL Server |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)