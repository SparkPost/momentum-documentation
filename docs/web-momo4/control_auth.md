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

| 17.2. Control_Listener Authentication |
| [Prev](control_listener.php)  | Chapter 17. Configuring Momentum's System Console |  [Next](control_acct.php) |

## 17.2. Control_Listener Authentication

Momentum can be configured to perform authentication on Control connections by using the authentication modules.

The following is an example `Control_Listener` stanza:

<a name="control_auth.control_listener.stanza"></a>

**Example 17.1. Control_Listener Stanza**

```
Control_Listener {
  AuthDigestMD5Parameters = [
    uri = "ecauth://"
  ]
  Enable_Authentication = "true"

  Enable_Authorization = "false"
  AuthorizationParameters = [
    uri = "ecauth://"
  ]

  Listen "/tmp/2025" {
    Enable_Authentication = "false"
  }
  Listen "127.0.0.1:2025" {
  }
}
```

The usual fallback semantics apply to the `Enable_Authentication` option. In the example, access to the control listener via TCP requires authentication because the fallback value of "Enable_Authentication" is "true". On the other hand, authentication is disabled for access via a Unix domain socket because `Enable_Authentication` is set to `false` in the scope defined by `Listen "/tmp/2025"`. The `Enable_Authorization` option is used in the same way as the `Enable_Authentication` option.

The `uri = "ecauth://"` inside both `AuthDigestMD5Parameters` and `AuthorizationParameters` references an authentication scheme named "`ecauth`" defined in an auth_ds module. This scheme is created during installation. For more information on the `ecauth` scheme, see [Section 17.4.1, “Authorization Using the `ecauth` Scheme”](control_authz.php#control_authz.ecauth "17.4.1. Authorization Using the ecauth Scheme").

### 17.2.1. DIGEST-MD5 Authentication

In the following example, `DIGEST-MD5` is used to authenticate users who try to connect to the console over TCP/IP rather than by using a Unix socket.

```
Control_Listener {
  Listen /tmp/2025 {}
  Listen ":2025" {
    AuthDigestMD5Parameters = [
      uri = digest:///opt/msys/ecelerity/etc/console_passwd
    ]
  }
}
```

The digest file, referenced by the `uri` parameter, can be created and updated using the [ec_md5passwd](executable.ec_md5passwd.php "ec_md5passwd") tool.

The `digest://` auth storage scheme references the path to an htdigest compatible password file. Lines starting with a ‘`#`’ are treated as comments and are ignored. The lines are divided into three fields separated by ‘`:`’ characters; e.g. `user:realm:password`.

### 17.2.2. Clear Text LOGIN Authentication

The LOGIN mechanism stores passwords in clear text locally and transmits the username and password credentials in clear text over the network. Configuration is similar to DIGEST-MD5:

```
Control_Listener {
  Listen "/tmp/2025" {
    AuthLoginParameters = [
      uri = "file:///opt/msys/ecelerity/etc/unsafe_passwd"
    ]
  }
}
```

Currently there's no TLS/SSL support for control listeners, so the use of clear text LOGIN with anything other than Unix domain sockets is discouraged.

### 17.2.3. Operating System Authentication

On Unix systems, the control listener will implicitly authenticate connections made over Unix domain sockets using the system level username of the user connecting to the socket.

By default, the control listener creates Unix domain sockets so that they are only accessible to the user identity you have configured for ecelerity. To enable connections from other users you may specify the file mode using the following syntax:

```
Control_Listener {
  Listen "/tmp/2025" {
    File_Mode = 0666
  }
}
```

With the socket file permission set to `0666`, every user who can log in to the system can use **ec_console** to connect to the server. When using system level authentication on a Unix domain socket, all authentication and authorization events on that connection will be logged to the accounting subsystem. Note that you need to configure a location to log accounting information; you can find more details on the configuration of the accounting log in [Section 71.30, “EC_logger – Momentum-Style Logging”](modules.ec_logger.php "71.30. EC_logger – Momentum-Style Logging").

### 17.2.4. Overriding Authentication

You can override the results of authentication using the `always_allow` and the `always_deny` options. Consider the following code snippet:

```
Control_Listener {
  Listen "127.0.0.1:2025" {
    Enable_Authentication = true
    Peer "127.0.0.1" {
      Always_Allow = true
    }
  }
  ...
}
```

In this case, access to `Peer "127.0.0.1"` is always allowed regardless of the results of authentication.

| [Prev](control_listener.php)  | [Up](control_listener.php) |  [Next](control_acct.php) |
| Chapter 17. Configuring Momentum's System Console  | [Table of Contents](index.php) |  17.3. Control_Listener Accounting |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)