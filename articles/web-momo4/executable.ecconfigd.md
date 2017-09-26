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

| ecconfigd |
| [Prev](executable.eccmgr_ctl.php)  | Chapter 74. Executable Commands Reference |  [Next](executable.ecconfigd_ctl.php) |

<a name="executable.ecconfigd"></a>
## Name

ecconfigd — Momentum Configuration Server

## Synopsis

`/opt/msys/ecelerity/sbin/ecconfigd` [ --log-level {*`level`*} ] --debug

<a name="idp12228624"></a>
## Description

**ecconfigd** is the Momentum Configuration Server. Configuration files are maintained in a version control repository and exported via this service. The user for this service is `ecuser`. The associated password is created during installation.

The service consists of two processes. In a cluster configuration, one process participates in the messaging bus to maintain membership, and the other process, active in both cluster and stand-alone configurations, is an Apache-based Subversion server listening on port 2027\. Together these processes manage the configuration repositories for the clusters on the network or for a single-node system. Momentum's version control management tool is **eccfg**. It is used to track and update configuration file changes.

**ecconfigd** always uses SSL. The self-signed certificate created during installation is valid for a year. To renew this certificate, use the **create_ssl_cert** command.

When **ecconfigd** is started using the script in the `/etc/init.d` directory, if the service doesn't start immediately, it will try for up to a minute to connect. This occurs only if there is a `cluster.boot` file in the `/opt/msys/ecelerity/etc` directory.

Use **ecconfigd_ctl** to start, stop, or restart this server.

### Note

It is advisable to restart **ecconfigd** after making extensive changes to `msgc_server.conf`, such as adding multiple nodes. Use the command **`/etc/init.d/ecconfigd restart`**         .

No additional arguments are required for normal operation. However, the `EXTRA_ARGS` environment variable may be used to control how **ecconfigd** is started. If this variable is set, its contents will be passed as additional arguments to **ecconfigd**. The following arguments may be specified as part of EXTRA_ARGS:

<dl class="variablelist">

<dt>--debug</dt>

<dd>

Run in the foreground and set the log level to 7.

</dd>

<dt>--log-level *`level`*</dt>

<dd>

Set the log file verbosity. The log level is a number from 0 to 7, where higher numbers result in more information. The default log level is 4, which logs warnings and errors.

</dd>

</dl>

<a name="idp11853120"></a>
## See Also

[ecconfigd_ctl](executable.ecconfigd_ctl.php "ecconfigd_ctl"), [eccfg](executable.eccfg.php "eccfg"), [Section 15.1.3, “Configuration Management (**ecconfigd**)”](conf.overview.php#conf.ecconfigd "15.1.3. Configuration Management (ecconfigd)"), [create_ssl_cert](executable.create_ssl_cert.php "create_ssl_cert")

| [Prev](executable.eccmgr_ctl.php)  | [Up](exec.cmds.ref.php) |  [Next](executable.ecconfigd_ctl.php) |
| eccmgr_ctl  | [Table of Contents](index.php) |  ecconfigd_ctl |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)