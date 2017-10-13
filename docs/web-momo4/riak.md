| Chapter 30. Riak |
| [Prev](postgresql.migrating.php)  | Part III. Configuring Momentum |  [Next](riak.service.php) |

## Chapter 30. Riak

**Table of Contents**

<dl class="toc">

<dt>[30.1\. Riak Overview](riak.php#riak.overview)</dt>

<dt>[30.2\. Running the Riak Service](riak.service.php)</dt>

<dt>[30.3\. Riak Ports](operations.riak.ports.php)</dt>

<dt>[30.4\. Backups](operations.riak.backups.php)</dt>

</dl>

<a class="indexterm" name="idp3460960"></a>

Riak is a distributed key-value data storage technology with excellent scalability properties. It is used by the [adaptive](modules.adaptive.php "71.3. adaptive – Adaptive Delivery") module, Adaptive Delivery reporting, and Mobile Momentum for resubmission of messages.

Riak is freely available for use in a LAN deployment, but WAN deployments that need to be synchronized require a commercially licensed variant. Note that multiple data centers may still use Riak if each data center has its own local Riak cluster. For more information, see the [Riak](http://http://docs.basho.com/riak/latest/) documentation.

## 30.1. Riak Overview

The following describes the default directories and configuration related to the Riak database:

*   `/opt/msys/3rdParty/riak/` – Riak packages provided by Message Systems are installed under this path.

*   `/opt/msys/3rdParty/riak/bin` – Administrative tools for Riak are provided under this path. These tools are named "`riak`", "`riak-admin`" and "`search-cmd`".

*   `/opt/msys/3rdParty/riak/etc` – Contains the main configuration file named `app.config` and an additional configuration file named `vm.args`. The contents of `app.config` are formatted as an Erlang "term"; a structured file with meaningful "keys" and "values". The file is terminated with a period ‘`.`’ character. The `vm.args` file includes the unique names of the nodes in a cluster, as specified with the "-name" parameter switch.

*   `/var/db/riak` – The default configuration for Momentum's Riak package stores Riak state at this location.

    During installation there is no prompt for an alternative data storage location; instead, the system administrator may opt to partition the system such that `/var/db/riak` maps to its own set of spindles prior to installation or may choose to mount alternative storage. In the latter case, the administrator will need to edit `app.config` and change the paths that refer to `/var/db/riak` to the alternate location.

*   `/var/log/riak` – Contains log files.

For additional details about configuration, see [Section 16.7, “Configuring Riak in a Cluster”](cluster.riak.configuration.php "16.7. Configuring Riak in a Cluster").

| [Prev](postgresql.migrating.php)  | [Up](p.configuration.php) |  [Next](riak.service.php) |
| 29.4. Dumping and Restoring the Database  | [Table of Contents](index.php) |  30.2. Running the Riak Service |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)