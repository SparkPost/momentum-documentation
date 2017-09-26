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

| eccluster.conf |
| [Prev](cluster.ref.php)  | Chapter 10. Cluster Configuration Reference |  [Next](eccluster-client.conf.php) |

<a name="eccluster.conf"></a>
## Name

eccluster.conf — Momentum Cluster Manager configuration file

<a name="idp7259360"></a>
## Description

`eccluster.conf` configures the behavior of the Momentum Cluster Manager, **eccmgr**.

```
Networking {
  Bus = "4803"
  Cluster_Group = "ec_cluster"
}

Logs {
  Logfile = "/var/eccluster/logs/%Y/%m/%d/%{l}/%{n}"
  Max_Open = "128"
  Max_Idle = "10"
  File_Mode = "0640"
  Dir_Mode = "0755"
  Control_Cache = "/var/log/eccluster/control.cache"
}

Config {
  Repository = "/var/eccluster/config"
}

Control_Listener = (
  /tmp/2026
  "*:2026" [
    0.0.0.0/0 = ( DIGEST-MD5
                  [ uri = "digest:///opt/ecelerity/etc/console_passwd" ]
                )
  ]
)
```
<a name="idp7263024"></a>
## Networking

<dl class="variablelist">

<dt>Bus</dt>

<dd>

The bus is the port on which Spread is listening. This should match the port following the broadcast address in the `mbus.conf` file (see [mbus.conf](mbus.conf.php "mbus.conf")) as well as the mbus_daemon parameter in the cluster configuration in `ecelerity.conf`.

</dd>

<dt>Cluster_Group</dt>

<dd>

This describes the group on which clustering will be managed. This is a short textual string and must match the cluster_group parameter in the cluster configuration in `ecelerity.conf`.

</dd>

</dl>

<a name="idp7270464"></a>
## Logs

<dl class="variablelist">

<dt>Logfile</dt>

<dd>

This describes the full pathname of the logfile to be written. As eccmgr is capable of writing log files into several distinct locations, a simple interpolation set is provided. All of the POSIX strftime macros are supported (see the POSIX strftime standard) as well as two special interpolations. %{n} will interpolate to the name of the Momentum cluster node that generated the log line in question. %{l} will interpolate to the name of the log as named in the logs section of the cluster configuration in the `ecelerity.conf`.

</dd>

<dt>Max_Open</dt>

<dd>

The maximum number of concurrently open log files.

</dd>

<dt>Max_Idle</dt>

<dd>

The maximum number of seconds a log file may be left open without writing a new log entry to it.

</dd>

<dt>File_Mode</dt>

<dd>

The octal representation of the file permissions of newly created log files.

</dd>

<dt>Dir_Mode</dt>

<dd>

Is the octal representation of the file permissions of newly created log directories.

</dd>

<dt>Control_Cache</dt>

<dd>

The name of the cache file storing asynchronous responses to clusterwide Momentum inquiries.

</dd>

</dl>

<a name="idp7283296"></a>
## Config

<dl class="variablelist">

<dt>Repository</dt>

<dd>

The full path to the Subversion repository that will house cluster-wide configuration information.

</dd>

</dl>

<a name="idp7286592"></a>
## See Also

[eccmgr](executable.eccmgr.php "eccmgr"), [mbus.conf](mbus.conf.php "mbus.conf").

| [Prev](cluster.ref.php)  | [Up](cluster.ref.php) |  [Next](eccluster-client.conf.php) |
| Chapter 10. Cluster Configuration Reference  | [Table of Contents](index.php) |  eccluster-client.conf |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)