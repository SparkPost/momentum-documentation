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

| Part III. Configuring Momentum |
| [Prev](node_remove_analytics.php)  |   |  [Next](conf.overview.php) |

## Part III. Configuring Momentum

**Table of Contents**

<dl class="toc">

<dt>[15\. Configuration Overview](conf.overview.php)</dt>

<dd>

<dl>

<dt>[15.1\. Configuration Files](conf.overview.php#conf.files)</dt>

<dt>[15.2\. Configuration Options](conf.options.php)</dt>

<dt>[15.3\. Configuration Scopes and Fallback](ecelerity.conf.fallback.php)</dt>

<dt>[15.4\. Listeners](listeners.php)</dt>

<dt>[15.5\. Modules](module_config.php)</dt>

<dt>[15.6\. `ecelerity.conf` File](conf.ref.ecelerity.conf.php)</dt>

</dl>

</dd>

<dt>[16\. Cluster-specific Configuration](cluster.php)</dt>

<dd>

<dl>

<dt>[16.1\. Cluster-specific Configuration Files](cluster.php#cluster.config_files)</dt>

<dt>[16.2\. `eccluster.conf` File](conf.ref.eccluster.conf.php)</dt>

<dt>[16.3\. `ecelerity-cluster.conf` File](conf.ref.ecelerity_cluster.conf.php)</dt>

<dt>[16.4\. `msgc_server.conf` File](conf.ref.msgc_server.conf.php)</dt>

<dt>[16.5\. Cluster-specific Listeners](cluster.listeners.php)</dt>

<dt>[16.6\. Configuring Momentum for High Availability and Failover](cluster.config.failover.php)</dt>

<dt>[16.7\. Configuring Riak in a Cluster](cluster.riak.configuration.php)</dt>

</dl>

</dd>

<dt>[17\. Configuring Momentum's System Console](control_listener.php)</dt>

<dd>

<dl>

<dt>[17.1\. Control_Listener Configuration](control_listener.php#control_listener.config)</dt>

<dt>[17.2\. Control_Listener Authentication](control_auth.php)</dt>

<dt>[17.3\. Control_Listener Accounting](control_acct.php)</dt>

<dt>[17.4\. Control_Listener Authorization](control_authz.php)</dt>

</dl>

</dd>

<dt>[18\. Configuring Inbound Mail Service Using ECStream](ecstream_listener.php)</dt>

<dd>

<dl>

<dt>[18.1\. ECStream_Listener Configuration](ecstream_listener.php#ecstream_listener.config)</dt>

</dl>

</dd>

<dt>[19\. Configuring Inbound Mail Service Using SMTP](esmtp_listener.php)</dt>

<dd>

<dl>

<dt>[19.1\. ESMTP_Listener Configuration](esmtp_listener.php#esmtp_listener.config)</dt>

<dt>[19.2\. Inbound Email Relay or Gateway](esmtp_listener.relay_domains.php)</dt>

<dt>[19.3\. `Reconfig_Message` Option](esmtp_listener.reconfig_message.php)</dt>

<dt>[19.4\. SMTP Extensions](esmtp_listener.extensions.php)</dt>

<dt>[19.5\. ESMTP_Listener Authentication](inbound_smtp.php)</dt>

<dt>[19.6\. Inbound SSL](inbound_ssl.php)</dt>

<dt>[19.7\. Inbound TLS](inbound_tls.php)</dt>

</dl>

</dd>

<dt>[20\. Configuring Inbound Mail Service Using HTTP](http_listener.php)</dt>

<dd>

<dl>

<dt>[20.1\. HTTP_Listener Configuration](http_listener.php#http_listener.config)</dt>

<dt>[20.2\. `msg_gen.conf` File](conf.ref.msg_gen.conf.php)</dt>

</dl>

</dd>

<dt>[21\. Enforcing REST API/UI User Authentication](auth.php)</dt>

<dt>[22\. Using Yahoo! DomainKeys](using_domainkeys.php)</dt>

<dd>

<dl>

<dt>[22.1\. DomainKeys Signing](using_domainkeys.php#using_domainkeys.signing)</dt>

<dt>[22.2\. DomainKeys Validation](using_domainkeys.validation.php)</dt>

</dl>

</dd>

<dt>[23\. Using DomainKeys Identified Mail (DKIM) Signatures](using_dkim.php)</dt>

<dd>

<dl>

<dt>[23.1\. DKIM Signing](using_dkim.php#using_dkim.signing)</dt>

<dt>[23.2\. DKIM Validation](using_dkim.validation.php)</dt>

</dl>

</dd>

<dt>[24\. Configuring Multiple Event Loops](multi_event_loops.php)</dt>

<dt>[25\. Configuring Outbound Mail Delivery](outbound_mail.php)</dt>

<dd>

<dl>

<dt>[25.1\. Routing Mail](outbound_mail.php#outbound_mail.routing.mail)</dt>

<dt>[25.2\. Prohibited_Hosts](outbound_mail.prohibited.hosts.php)</dt>

<dt>[25.3\. MultiVIP© Interfaces](outbound_mail.multivip.interfaces.php)</dt>

<dt>[25.4\. Throttling and Traffic Shaping](outbound_mail.traffic.shaping.php)</dt>

<dt>[25.5\. Outbound TLS](tls_option.php)</dt>

<dt>[25.6\. Outbound XCLIENT support](outbound_mail.outbound.xclient.php)</dt>

<dt>[25.7\. Outbound Email Relay](outbound_mail.relay_hosts.php)</dt>

</dl>

</dd>

<dt>[26\. Log Aggregation](log_aggregation.php)</dt>

<dd>

<dl>

<dt>[26.1\. Configuring Log Aggregation](log_aggregation.php#log_aggregation.configuration)</dt>

<dt>[26.2\. Centralized Logging Example](cluster.config.logging.centalized.logging.php)</dt>

<dt>[26.3\. Complex Centralized Logging Deployments](cluster.config.logging.complex.php)</dt>

<dt>[26.4\. Redundant Logs](cluster.config.logging.redundancy.php)</dt>

<dt>[26.5\. Decommissioning a Log Aggregator](cluster.config.logging.decommissioning.php)</dt>

</dl>

</dd>

<dt>[27\. DuraVIP™: IP Fail over](cluster.config.duravip.php)</dt>

<dd>

<dl>

<dt>[27.1\. IP Addresses and `duravip_follow`](cluster.config.duravip.php#cluster.config.duravip_follow)</dt>

<dt>[27.2\. `duravip_follow` and the #mmove Binding](cluster.config.mmove.php)</dt>

<dt>[27.3\. Address Resolution Protocol (ARP) traffic](cluster.config.arp_all_hosts.php)</dt>

<dt>[27.4\. DuraVIP™ Configuration Conflicts and Ambiguities](cluster.duravip.conflict.php)</dt>

</dl>

</dd>

<dt>[28\. Data Replication](cluster.config.replication.php)</dt>

<dd>

<dl>

<dt>[28.1\. Replication Configurations](cluster.config.replication.php#cluster.replication.features)</dt>

</dl>

</dd>

<dt>[29\. PostgreSQL](postgresql.php)</dt>

<dd>

<dl>

<dt>[29.1\. PostgreSQL Overview](postgresql.php#postgresql.overview)</dt>

<dt>[29.2\. Running the PostgreSQL Server](postgresql.server.php)</dt>

<dt>[29.3\. Using the PostgreSQL Client Program](postgresql.client.php)</dt>

<dt>[29.4\. Dumping and Restoring the Database](postgresql.migrating.php)</dt>

</dl>

</dd>

<dt>[30\. Riak](riak.php)</dt>

<dd>

<dl>

<dt>[30.1\. Riak Overview](riak.php#riak.overview)</dt>

<dt>[30.2\. Running the Riak Service](riak.service.php)</dt>

<dt>[30.3\. Riak Ports](operations.riak.ports.php)</dt>

<dt>[30.4\. Backups](operations.riak.backups.php)</dt>

</dl>

</dd>

<dt>[31\. Configuring the Environment File](environment_file.php)</dt>

</dl>

| [Prev](node_remove_analytics.php)  |   |  [Next](conf.overview.php) |
| 14.2. Removing an Analytics Node  | [Table of Contents](index.php) |  Chapter 15. Configuration Overview |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)