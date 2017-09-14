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

| Chapter 6. Before You Begin |
| [Prev](addl.config.notes.php)  | Part II. Installing Momentum |  [Next](byb.os.php) |

## Chapter 6. Before You Begin

**Table of Contents**

<dl class="toc">

<dt>[6.1\. Momentum License](before_you_begin.php#byb.msg.gen.license)</dt>

<dt>[6.2\. Operating System](byb.os.php)</dt>

<dt>[6.3\. Redundancy](byb.redundancy.php)</dt>

<dt>[6.4\. Load Balancing](byb.load_balancing.php)</dt>

<dt>[6.5\. Disable SELinux](byb.disable_selinux.php)</dt>

<dt>[6.6\. Enable Network Time Protocol (NTP)](byb.ntp.php)</dt>

<dt>[6.7\. Adjusting `/etc/sysctl.conf`](byb.sysctl.conf.php)</dt>

<dt>[6.8\. Setting Hostnames](byb.set_hostnames.php)</dt>

<dt>[6.9\. Java Runtime Environment (JRE)](byb.jre.php)</dt>

<dt>[6.10\. Creating `root` and `vertica_dba` Accounts](byb.root_and_vertica_dba.php)</dt>

<dt>[6.11\. Redefining Ephemeral Ports](byb.redefine_ephemeral_ports.php)</dt>

<dt>[6.12\. Configuring Locale](byb.config_vertica_services.php)</dt>

<dt>[6.13\. Configuring SSH and SSHD](byb.config_SSH_and_SSHD.php)</dt>

<dt>[6.14\. Basic Required Packages](byb.basic_packages.php)</dt>

<dt>[6.15\. Riak Provisioning](byb.riak_provisioning.php)</dt>

<dt>[6.16\. Separate Vertica Partition](byb.vertica_partition.php)</dt>

<dt>[6.17\. Disable Postfix and QPIDD](byb.disable_postfix.php)</dt>

<dt>[6.18\. Verifying Analytics Node Requirements](byb.analytics_reqs.php)</dt>

</dl>

This chapter describes issues that need to be considered or addressed prior to preparing for the installation on Analytics and/or Platform/MTA nodes.

## 6.1. Momentum License

For each of your servers that run the MTA you will need a `license` file in this directory: `/opt/msys/ecelerity/etc/`

You will need to provide Message Systems with a MAC address for each MTA node in your deployment. Be sure that your nodes have access to the Internet over port 80 so that you can download the license.

### Note

The [Momentum REST Injector](https://support.messagesystems.com/docs/web-rest-injector/) introduced in Momentum 3.14 continues to work in Momentum 4 and does not require a license. You can still use this injector to inject messages with simple template substitutions, but it has a very limited feature set compared to the Momentum 4 REST APIs.

| [Prev](addl.config.notes.php)  | [Up](p.installing.php) |  [Next](byb.os.php) |
| 5.7. Additional Configuration Notes  | [Table of Contents](index.php) |  6.2. Operating System |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)