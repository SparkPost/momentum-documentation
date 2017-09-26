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

| eccluster_pull_config |
| [Prev](executable.ec_stats.php)  | 11.2. Executable Commands |  [Next](executable.eccmgr.php) |

<a name="executable.eccluster_pull_config"></a>
## Name

eccluster_pull_config — copy the configuration file from the cluster manager

## Synopsis

`/opt/ecelerity/bin/eccluster_pull_config` { --host=*`eccmgr_host:port`* } [ --user=*`username`* --pass=*`password`* ] [ --fetch=*`boot | running`*            ] [ --outfile=*`/opt/ecelerity/etc/ecelerity.conf`* ] [ --help ]

<a name="idp8374000"></a>
## Description

**eccluster_pull_config** is used to copy the `default` configuration file from the cluster manager to a cluster node.

It has the following options:

<dl class="variablelist">

<dt>--host=*`eccmgr_host:port`*</dt>

<dd>

Specify the cluster manager domain name or IP address and port and the `default` file will be copied to the `/opt/ecelerity/etc/ecelerity.conf` file on the current node.

</dd>

<dt>--user=*`username`* --pass=*`password`*</dt>

<dd>

Specify the username and password if required.

</dd>

<dt>--fetch=*`boot | running`* </dt>

<dd>

The `--fetch=running` option pulls the "live" configuration settings for the MTA. The `--fetch=boot` option is the default behavior and is provided for completeness only.

</dd>

<dt>*--outfile=*`/var/tmp/ecelerity.conf`**</dt>

<dd>

Specify an output file other than `/opt/ecelerity/etc/ecelerity.conf`.

</dd>

</dl>

| [Prev](executable.ec_stats.php)  | [Up](exe.commands.details.php) |  [Next](executable.eccmgr.php) |
| ec_stats  | [Table of Contents](index.php) |  eccmgr |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)