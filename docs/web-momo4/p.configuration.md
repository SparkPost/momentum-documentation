| Part III. Configuring Momentum |
| [Prev](node_remove_analytics)  |   |  [Next](conf.overview) |

## Part III. Configuring Momentum

**Table of Contents**

<dl class="toc">

<dt>[15\. Configuration Overview](conf.overview)</dt>

<dd>

<dl>

<dt>[15.1\. Configuration Files](conf.overview#conf.files)</dt>

<dt>[15.2\. Configuration Options](conf.options)</dt>

<dt>[15.3\. Configuration Scopes and Fallback](ecelerity.conf.fallback)</dt>

<dt>[15.4\. Listeners](listeners)</dt>

<dt>[15.5\. Modules](module_config)</dt>

<dt>[15.6\. `ecelerity.conf` File](conf.ref.ecelerity.conf)</dt>

</dl>

</dd>

<dt>[16\. Cluster-specific Configuration](cluster)</dt>

<dd>

<dl>

<dt>[16.1\. Cluster-specific Configuration Files](cluster#cluster.config_files)</dt>

<dt>[16.2\. `eccluster.conf` File](conf.ref.eccluster.conf)</dt>

<dt>[16.3\. `ecelerity-cluster.conf` File](conf.ref.ecelerity_cluster.conf)</dt>

<dt>[16.4\. `msgc_server.conf` File](conf.ref.msgc_server.conf)</dt>

<dt>[16.5\. Cluster-specific Listeners](cluster.listeners)</dt>

<dt>[16.6\. Configuring Momentum for High Availability and Failover](cluster.config.failover)</dt>

<dt>[16.7\. Configuring Riak in a Cluster](cluster.riak.configuration)</dt>

</dl>

</dd>

<dt>[17\. Configuring Momentum's System Console](control_listener)</dt>

<dd>

<dl>

<dt>[17.1\. Control_Listener Configuration](control_listener#control_listener.config)</dt>

<dt>[17.2\. Control_Listener Authentication](control_auth)</dt>

<dt>[17.3\. Control_Listener Accounting](control_acct)</dt>

<dt>[17.4\. Control_Listener Authorization](control_authz)</dt>

</dl>

</dd>

<dt>[18\. Configuring Inbound Mail Service Using ECStream](ecstream_listener)</dt>

<dd>

<dl>

<dt>[18.1\. ECStream_Listener Configuration](ecstream_listener#ecstream_listener.config)</dt>

</dl>

</dd>

<dt>[19\. Configuring Inbound Mail Service Using SMTP](esmtp_listener)</dt>

<dd>

<dl>

<dt>[19.1\. ESMTP_Listener Configuration](esmtp_listener#esmtp_listener.config)</dt>

<dt>[19.2\. Inbound Email Relay or Gateway](esmtp_listener.relay_domains)</dt>

<dt>[19.3\. `Reconfig_Message` Option](esmtp_listener.reconfig_message)</dt>

<dt>[19.4\. SMTP Extensions](esmtp_listener.extensions)</dt>

<dt>[19.5\. ESMTP_Listener Authentication](inbound_smtp)</dt>

<dt>[19.6\. Inbound SSL](inbound_ssl)</dt>

<dt>[19.7\. Inbound TLS](inbound_tls)</dt>

</dl>

</dd>

<dt>[20\. Configuring Inbound Mail Service Using HTTP](http_listener)</dt>

<dd>

<dl>

<dt>[20.1\. HTTP_Listener Configuration](http_listener#http_listener.config)</dt>

<dt>[20.2\. `msg_gen.conf` File](conf.ref.msg_gen.conf)</dt>

</dl>

</dd>

<dt>[21\. Enforcing REST API/UI User Authentication](auth)</dt>

<dt>[22\. Using Yahoo! DomainKeys](using_domainkeys)</dt>

<dd>

<dl>

<dt>[22.1\. DomainKeys Signing](using_domainkeys#using_domainkeys.signing)</dt>

<dt>[22.2\. DomainKeys Validation](using_domainkeys.validation)</dt>

</dl>

</dd>

<dt>[23\. Using DomainKeys Identified Mail (DKIM) Signatures](using_dkim)</dt>

<dd>

<dl>

<dt>[23.1\. DKIM Signing](using_dkim#using_dkim.signing)</dt>

<dt>[23.2\. DKIM Validation](using_dkim.validation)</dt>

</dl>

</dd>

<dt>[24\. Configuring Multiple Event Loops](multi_event_loops)</dt>

<dt>[25\. Configuring Outbound Mail Delivery](outbound_mail)</dt>

<dd>

<dl>

<dt>[25.1\. Routing Mail](outbound_mail#outbound_mail.routing.mail)</dt>

<dt>[25.2\. Prohibited_Hosts](outbound_mail.prohibited.hosts)</dt>

<dt>[25.3\. MultiVIP© Interfaces](outbound_mail.multivip.interfaces)</dt>

<dt>[25.4\. Throttling and Traffic Shaping](outbound_mail.traffic.shaping)</dt>

<dt>[25.5\. Outbound TLS](tls_option)</dt>

<dt>[25.6\. Outbound XCLIENT support](outbound_mail.outbound.xclient)</dt>

<dt>[25.7\. Outbound Email Relay](outbound_mail.relay_hosts)</dt>

</dl>

</dd>

<dt>[26\. Log Aggregation](log_aggregation)</dt>

<dd>

<dl>

<dt>[26.1\. Configuring Log Aggregation](log_aggregation#log_aggregation.configuration)</dt>

<dt>[26.2\. Centralized Logging Example](cluster.config.logging.centalized.logging)</dt>

<dt>[26.3\. Complex Centralized Logging Deployments](cluster.config.logging.complex)</dt>

<dt>[26.4\. Redundant Logs](cluster.config.logging.redundancy)</dt>

<dt>[26.5\. Decommissioning a Log Aggregator](cluster.config.logging.decommissioning)</dt>

</dl>

</dd>

<dt>[27\. DuraVIP™: IP Fail over](cluster.config.duravip)</dt>

<dd>

<dl>

<dt>[27.1\. IP Addresses and `duravip_follow`](cluster.config.duravip#cluster.config.duravip_follow)</dt>

<dt>[27.2\. `duravip_follow` and the #mmove Binding](cluster.config.mmove)</dt>

<dt>[27.3\. Address Resolution Protocol (ARP) traffic](cluster.config.arp_all_hosts)</dt>

<dt>[27.4\. DuraVIP™ Configuration Conflicts and Ambiguities](cluster.duravip.conflict)</dt>

</dl>

</dd>

<dt>[28\. Data Replication](cluster.config.replication)</dt>

<dd>

<dl>

<dt>[28.1\. Replication Configurations](cluster.config.replication#cluster.replication.features)</dt>

</dl>

</dd>

<dt>[29\. PostgreSQL](postgresql)</dt>

<dd>

<dl>

<dt>[29.1\. PostgreSQL Overview](postgresql#postgresql.overview)</dt>

<dt>[29.2\. Running the PostgreSQL Server](postgresql.server)</dt>

<dt>[29.3\. Using the PostgreSQL Client Program](postgresql.client)</dt>

<dt>[29.4\. Dumping and Restoring the Database](postgresql.migrating)</dt>

</dl>

</dd>

<dt>[30\. Riak](riak)</dt>

<dd>

<dl>

<dt>[30.1\. Riak Overview](riak#riak.overview)</dt>

<dt>[30.2\. Running the Riak Service](riak.service)</dt>

<dt>[30.3\. Riak Ports](operations.riak.ports)</dt>

<dt>[30.4\. Backups](operations.riak.backups)</dt>

</dl>

</dd>

<dt>[31\. Configuring the Environment File](environment_file)</dt>

</dl>

| [Prev](node_remove_analytics)  |   |  [Next](conf.overview) |
| 14.2. Removing an Analytics Node  | [Table of Contents](index) |  Chapter 15. Configuration Overview |

