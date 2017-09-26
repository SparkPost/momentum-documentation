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

| Chapter 17. Configuring Momentum's System Console |
| [Prev](cluster.riak.configuration.php)  | Part III. Configuring Momentum |  [Next](control_auth.php) |

## Chapter 17. Configuring Momentum's System Console

**Table of Contents**

<dl class="toc">

<dt>[17.1\. Control_Listener Configuration](control_listener.php#control_listener.config)</dt>

<dt>[17.2\. Control_Listener Authentication](control_auth.php)</dt>

<dt>[17.3\. Control_Listener Accounting](control_acct.php)</dt>

<dt>[17.4\. Control_Listener Authorization](control_authz.php)</dt>

</dl>

Momentum's online administration, management, and analysis is through the Momentum System Console program `ec_console`, henceforth referred to as the console. The Control_Listener is Momentum's listener for incoming control connections made via this console. It is configured in the `ecelerity.conf` file for connection to the nodes and in the `eccluster.conf` file for connection to `eccmgr`.

## 17.1. Control_Listener Configuration

The Control_Listener specifies the end-point(s) on which Momentum's `ec_console` should listen for incoming control connections. The `ec_console` can connect to a Momentum instance via a Unix domain socket or a TCP/IP socket (with an optional user@ prefix) depending upon how the Control_Listener is configured. For local-only configurations, a Unix domain socket may be appropriate. If your network is reasonably secure, you can specify an IPv6 address and port for TCP/IP services.

The following is an example configuration for a Unix domain socket:

```
Control_Listener {
  Listen "/tmp/2025" {
    file_mode = 0666
  }
}
```

In this example, the Unix domain socket is located in `tmp`, and the endpoint for the control listener is `/tmp/2025`. The `file_mode` option is set to `0666`. With the socket file permission set to 0666, every user who can log in to the system can use `ec_console` to connect to the server.

In addition, the Control_Listener supports a `Timeout` option that specifies a timeout for idle control connections. Default value is `60` seconds.

For details about the non-module specific configuration options that are valid in the Control_Listener and its nested scopes, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

Modules and their configuration options are discussed in the [Chapter 71, *Modules Reference*](modules.php "Chapter 71. Modules Reference") .

For general information regarding listeners, see [Section 15.4, “Listeners”](listeners.php "15.4. Listeners").

The Control_Listener supports a number of extended properties including `ALWAYS-ALLOW`, `LOGIN` and `DIGEST-MD5`. For more information, see [Section 17.2, “Control_Listener Authentication”](control_auth.php "17.2. Control_Listener Authentication").

| [Prev](cluster.riak.configuration.php)  | [Up](p.configuration.php) |  [Next](control_auth.php) |
| 16.7. Configuring Riak in a Cluster  | [Table of Contents](index.php) |  17.2. Control_Listener Authentication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)