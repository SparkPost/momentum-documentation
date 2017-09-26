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

| mbuscfg |
| [Prev](executable.lu_pull.php)  | 11.2. Executable Commands |  [Next](executable.mbusd.php) |

<a name="executable.mbuscfg"></a>
## Name

mbuscfg — cluster messaging bus configuration tool

## Synopsis

`/opt/msys/ecelerity/bin/mbuscfg` [ -g ] [ -r *`revision`* ] [ -c *`eccluster.conf`* ] [ -n *`nodename`* ] [ *`file`* ]

<a name="idp14731200"></a>
## Description

**mbuscfg** is a wrapper around Subversion for managing the mbusd configuration.

**Configuration Change. ** As of version 3.4, cluster communication is handled by the msgc modules rather than by mbus. For more information see [Section 14.47, “msgc – Modules”](modules.msgc.php "14.47. msgc – Modules").

Available options:

<dl class="variablelist">

<dt>-h</dt>

<dd>

Display usage information.

</dd>

<dt>-s</dt>

<dd>

Check in a configuration file.

</dd>

<dt>-g</dt>

<dd>

Check out a configuration file.

</dd>

<dt>-c `file`</dt>

<dd>

Specify path to Momentum Cluster Manager configuration file. Defaults to /opt/ecelerity/etc/eccluster.conf

</dd>

<dt>-r `revision`</dt>

<dd>

Specify the revision number for check out.

</dd>

<dt>-n `nodename`</dt>

<dd>

Specify a node. The default value is `default`. The configuration file of the specified node will be checked in or out. If there is no configuration file at the specified node to check out, nodename will take the default value.

</dd>

<dt>file</dt>

<dd>

Specify the file to check in or the file to save the check out. If no file name is specified to save the check out, the output will be directed to `STDOUT`.

Once the mbus.conf file has been checked in to the repository, the copy located at `/opt/ecelerity/etc/mbus.conf` on the cluster manager will be regularly overwritten by the message bus monitoring process. If you need to edit the `mbus.conf` file, copy it to `/var/tmp/mbus.conf`, edit the copy and then check it in using the command shown above, substituting `/var/tmp/mbus.conf` for the regular path.

</dd>

</dl>

<a name="idp14753232"></a>
## See Also

[mbusd](executable.mbusd.php "mbusd"), [mbus.conf](mbus.conf.php "mbus.conf")

| [Prev](executable.lu_pull.php)  | [Up](exe.commands.details.php) |  [Next](executable.mbusd.php) |
| lu_pull  | [Table of Contents](index.php) |  mbusd |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)