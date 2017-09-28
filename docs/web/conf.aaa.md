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

| 2.2. Authentication, Authorization and Accounting |
| [Prev](conf.ecelerity.conf.php)  | Chapter 2. Configuration |  [Next](conf.initial.conf.php) |

## 2.2. Authentication, Authorization and Accounting

Momentum can be configured to perform authentication on SMTP and Control connections. Momentum 2.2 introduces an extensible authorization and accounting subsystem that can be configured to restrict access to console commands based on role while recording an audit trail.

### 2.2.1. Configuring inbound SMTP authentication and inbound TLS/SSL

Momentum provides out-of-the-box support for authenticating remote users against a flat-file using LOGIN, DIGEST-MD5 and CRAM-MD5 authentication extensions to SMTP. Additional authentication backends can be plugged into Momentum in the form of authentication modules; Momentum ships with authentication modules for a number of standard datasources, and third-party vendors may provide others. See [Section 14.4, “auth_ds – Datasource based SMTP Authentication”](modules.auth_ds.php "14.4. auth_ds – Datasource based SMTP Authentication") for more details on datasource based authentication modules.

### Note

Any hosts specified by the `Relay_Hosts` option are not subject to any SMTP authentication that you may have implemented. For more information see [relay_hosts](conf.ref.relay_hosts.php "relay_hosts").

**2.2.1.1. DIGEST-MD5 Authentication**

To configure DIGEST-MD5 authentication, you would configure your ESMTP_Listener as shown below. This configures SMTP service on port 25 with a ruleset that matches all clients connecting from any IP address (`0.0.0.0/0` defines an IP-based access control list (ACL) that matches any IP address) . Inside that ruleset, the AUTH SMTP extension is configured for DIGEST-MD5, using the digest file `/opt/ecelerity/etc/smtp_passwd` as the authentication source. The authentication realm is configured using the optional `realm` parameter; if left unspecified, the hostname of the server is used instead (see [hostname](conf.ref.hostname.php "hostname")).

```
ESMTP_Listener = (
  *:25 [
    0.0.0.0/0 = (
      DIGEST-MD5 [
        extension = "AUTH"
        extension_argument = "DIGEST-MD5"
        uri = "digest:///opt/ecelerity/etc/smtp_passwd"
        realm = "my choice of realm"
      ]
    )
  ]
)
```

The digest file referenced by the `uri` parameter, can be created and updated using the **ec_md5passwd** tool, which is documented in [ec_md5passwd](executable.ec_md5passwd.php "ec_md5passwd").

Upon successful authentication, the authenticated user name is stored in the connection validation context under the `auth_user` key, and the SMTP session will be marked as relayable, setting the connection context variable can_relay = "true". For more information see [Chapter 6, *Validation Context Variables*](policy.context.variables.php "Chapter 6. Validation Context Variables") .

The results of the authentication attempt (whether it is successful or not) are also recorded and will be used to generate an `Authentication-Results:` header in the mail before it is delivered from Momentum.

**2.2.1.2. CRAM-MD5 authentication**

CRAM-MD5 authentication is configured in a similar way to DIGEST-MD5, except that the password file stores passwords in clear text.

```
ESMTP_Listener = (
  *:25 [
    0.0.0.0/0 = (
      CRAM-MD5 [
        extension = "AUTH"
        extension_argument = "CRAM-MD5"
        uri = "file:///opt/ecelerity/etc/cram_md5_passwd"
      ]
    )
  ]
)
```
**2.2.1.3. Clear Text LOGIN Authentication**

The LOGIN mechanism stores passwords in clear text locally and transmits the username and password credentials in clear text over the network. Its use is discouraged unless TLS is also configured on the listener. Configuration is similar to CRAM-MD5:

```
ESMTP_Listener = (
  *:25 [
    0.0.0.0/0 = (
      LOGIN [
        extension = "AUTH"
        extension_argument = "LOGIN"
        uri = "file:///opt/ecelerity/etc/unsafe_passwd"
      ]
    )
  ]
)
```
**2.2.1.4. Plain Text Authentication**

Plain text authentication is handled in the same way as clear text:

```
ESMTP_Listener = (
  *:25 [
    0.0.0.0/0 = (
      LOGIN [
         extension = "AUTH"
         extension_argument = "PLAIN"
         uri = "file:///opt/ecelerity/etc/unsafe_passwd"
      ]
    )
  ]
)
```

The `file://` authentication storage scheme references the path to a plain text password file. Within this file lines starting with a ‘`#` are treated as comments and are ignored. The lines are divided into two fields separated by a ‘`:` character where the first field is the username and the second is the plain text password.

**2.2.1.5. SMTP Authentication Accounting**

**Configuration Change. ** This feature is available starting from Momentum 2.2.

You can enable logging of SMTP authentication events by setting the `log_authentication` to `true` in your SMTP authentication configuration block.

```
ESMTP_Listener = (
  *:25 [
    0.0.0.0/0 = (
      CRAM-MD5 [
        extension = "AUTH"
        extension_argument = "CRAM-MD5"
        uri = "file:///opt/ecelerity/etc/cram_md5_passwd"
        log_authentication = "true"
      ]
    )
  ]
)
```

However, you still need to configure an account log logging module in order to record the accounting information. When log authentication is enabled and the `acctlog` option is set in your `ec_logger` module, a line is written to the account log for every authorization event. Each command and its authorization status will be logged to the account log. If a command is allowed, the role that matched will be included in the log entry. For information on configuring an accounting log and its format see [Section C.1.4, “The `acctlog.ec` Format”](log_formats.version_2.php#log_formats.acctlog "C.1.4. The acctlog.ec Format") .

**2.2.1.6. Inbound TLS**

Transport Layer Security (TLS) can be easily configured on an SMTP listener using the following configuration snippet:

```
Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      TLS [
        extension = "STARTTLS"
        certificate = "/path/to/cert.pem"
        key = "/path/to/key.pem"
        clientca = "/path/to/clientca.bundle"
        ciphers = "DEFAULT"
        verify_mode = "require"
      ]
      continue
    )
  ]
)
```

The `key` and `certificate` parameters specify which server certificate will be presented by Momentum to connecting clients, and the optional `clientca` parameter specifies a set of issuing certificate authorities that will be used to validate client certificates. The `verify_mode` option can be set to `require` or `none`. When set to `none`, if the SMTP client presents a certificate, it is ignored. When set to `require`, the SMTP client must present a certificate. When set to anything else, the client certificate will be verified if it is presented. By default no certificate is required.

If client certificate verification fails, the SMTP session does not terminate. The TLS status is stored in predefined context validation variables so it is possible to drive TLS policy from policy scripts. You can use this to reject messages when client verification failed. For more information regarding the TLS-related context variables see [Chapter 6, *Validation Context Variables*](policy.context.variables.php "Chapter 6. Validation Context Variables") .

More details on inbound TLS configuration can be found in [the section called “STARTTLS Extension for SMTP”](ecelerity.conf.php#ecelerity.conf.TLS "STARTTLS Extension for SMTP").

**2.2.1.7. Inbound SSL**

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Secure Sockets Layer (SSL) can also be configured on an SMTP listener using the following configuration snippet:

```
Esmtp_Listener = (
  *:465 [
    0.0.0.0/0 = (
      SSL [
        certificate = "/path/to/cert.pem"
        key = "/path/to/key.pem"
        clientca = "/path/to/clientca.bundle"
        ciphers = "DEFAULT"
      ]
      continue
    )
  ]
)
```

SSL Listeners function similarly to STARTTLS Listeners, except that connections are handed up to SSL immediately. For this reason, SSL is mutually exclusive with STARTTLS and cannot be configured on the same listener. The recommended configuration is to have any SSL listeners on separate ports from standard or STARTTLS listeners.

### 2.2.2. Configuring Authentication for the Control Listener

Authentication can also be configured for the control listener by using the authentication modules. For example:

```
Control_Listener = (
  /tmp/2025
  *:2025 <proto=ipv4> [
    0.0.0.0/0 = ( DIGEST-MD5 [
                    uri = digest:///opt/ecelerity/etc/console_passwd
                  ]
                )
  ]
)
```

In this case, `DIGEST-MD5` is used to authenticate users who try to connect to the system console over TCP/IP rather than by using a Unix socket.

The digest file referenced by the `uri` parameter, can be created and updated using the **ec_md5passwd** tool, which is documented in [ec_md5passwd](executable.ec_md5passwd.php "ec_md5passwd").

The `digest://` auth storage scheme references the path to an htdigest compatible password file. Lines starting with a ‘`#` are treated as comments and are ignored. The lines are divided into three fields separated by ‘`:` characters; `user:realm:password`.

**2.2.2.1. Clear Text LOGIN authentication for a Control_Listener**

The LOGIN mechanism stores passwords in clear text locally and transmits the username and password credentials in clear text over the network. Configuration is similar to DIGEST-MD5:

```
Control_Listener = (
  /tmp/2025 [
    0.0.0.0/0 = (
      LOGIN [
        extension = "AUTH"
        extension_argument = "LOGIN"
        uri = "file:///opt/ecelerity/etc/unsafe_passwd"
      ]
    )
  ]
)
```

Currently there's no TLS/SSL support for control listeners so the use of clear text LOGIN with anything other than Unix domain sockets is discouraged.

*   accept_queue_backlog

*   always_allow

*   always_deny

*   authcrammd5parameters

*   authdigestmd5parameters

*   authloginparameters

*   authorizedparameters

*   concurrency

*   disable_nagle_algorithm

*   duravip_follow

*   duravip_preference

*   enable

*   enable_authentication

*   enable_authorization

*   enable_duravip

*   events_per_iter

*   file_mode

*   listen_backlog

*   pool_name

*   tcp_recv_buffer_size

*   tcp_send_buffer_size

*   timeout

**2.2.2.2. Operating System Authentication**

**Configuration Change. ** This feature is available starting from Momentum 2.2.

On Unix systems, the control listener will implicitly authenticate connections made over Unix domain sockets using the system level username of the user connecting to the socket.

By default, the control listener creates Unix domain sockets so that they are only accessible to the user identity you have configured for ecelerity. To enable connections from other users you may specify the file mode using syntax like this:

```
Control_Listener = (
  /tmp/2025 <file_mode=0666>
)
```

With the socket file permission set to `0666`, every user who can log in to the system can use **ec_console** to connect to the server. When using system level authentication on a Unix domain socket, all authentication and authorization events on that connection will be logged to the accounting subsystem. Note that you need to configure a location to log accounting information; you can find more details on the configuration of the accounting log in [Section 14.26, “ec_logger – Momentum-Style Logging”](modules.ec_logger.php "14.26. ec_logger – Momentum-Style Logging").

**2.2.2.3. Overriding Authentication**

It is possible to override the results of authentication using the `always_allow` and the `always_deny` options. Consider the following code snippet:

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

In this case, access to `Peer "127.0.0.1"` is always allowed regardless of the results of authentication. These two options are valid in the listener, listen and peer scopes and have a default value of `false`

The options that are valid within the Peer scope within a Control_Listener scope are:

*   always_allow

*   always_deny

*   authcrammd5parameters

*   authdigestmd5parameters

*   authloginparameters

*   authorizedparameters

*   enable_authentication

*   enable_authorization

*   timeout

**2.2.2.4. Control Listener Accounting**

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Accounting is enabled by default for Unix socket connections. However, if you are connecting via TCP/IP then accounting for the control listener will not be enabled unless you explicitly turn it on. To employ an authentication scheme such as `DIGEST-MD5` and to log authentication events use the following syntax:

```
Control_Listener = (
  /tmp/2025 <file_mode=0666>
  *:2025 <proto=ipv4> [
    0.0.0.0/0 = ( DIGEST-MD5 [
                    uri = digest:///opt/ecelerity/etc/console_passwd
                    log_authentication = "true"
                  ]
                )
  ]
)
```

Logging of authentication events is enabled by turning on `log_authentication` in the listener configuration *and* configuring an accounting log in the `ec_logger` module. You may also develop your own accounting modules by implementing a hook.

More information about authentication modules can be found at [Section 14.4, “auth_ds – Datasource based SMTP Authentication”](modules.auth_ds.php "14.4. auth_ds – Datasource based SMTP Authentication").

### 2.2.3. Control Listener Authorization

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The authorization subsystem allows you to restrict the ability to run console commands based on the role of the user. The role membership of the user is determined based on the authenticated username; pluggable authorization modules provide the means to map the username to a number of roles (or groups) than can then be matched against the rules defined in the Authorization stanza. For more information about the Authorization stanza see [authorization](conf.ref.authorization.php "authorization").

The logging of authorization events is controlled only by the presence or absence of an Authorization stanza in the listener access control list (ACL). An example configuration with authorization enabled is shown below:

```
Control_Listener = (
  /tmp/2025 <file_mode=0666> [
    0.0.0.0/0 = (
      Authorization
      [ uri = "groups:///opt/ecelerity/etc/console_roles"]
    )
  ]

  *:2025 <proto=ipv4> [
    0.0.0.0/0 = (
      DIGEST-MD5 [
        uri = digest:///opt/ecelerity/etc/console_passwd
        log_authentication = "true"
      ]
      Authorization
      [ uri = "groups:///opt/ecelerity/etc/console_roles"]
    )
  ]
)

Authorization {
   root [ allow = ".*" ]
   admin [
       allow = "^config"
       allow = "^summary$"
   ]
   ec [ allow = "^flush" ]
}
```

This configuration enables the `groups` authorization module that provides Unix style `/etc/group` and Apache style `htgroup` flat file database of role membership.

In this example, `/opt/ecelerity/etc/console_roles` is being used to hold the group membership information.

The contents of the groups file can be one of the following two formats:

`group:user1[,user2,user3, ...]``group:unusedpasswd:user1[,user2,user3, ...]`

The following file asserts that the role `root` applies to users with the username `root` and that the role `admin` applies to users names `serv` and `ec`.

```
root:root
admin:serv,ec
```

In this example, authorization is enabled for all connections over TCP as well as over the Unix domain socket. Note that connections over a Unix domain socket are mapped as loopback addresses when applying the listener ACL to determine which authentication and authorization rulesets to select.

```
Authorization {
  role [
    allow = "regular expression"
    allow = "another regular expression"
  ]
  username [
    allow = "regular expression"
  ]
}
```

The authorization system will prevent console commands from being run unless an allow entry is explicitly configured. The authorization process first enumerates the roles/group membership of the user by querying the authorization module. Then the username and each role for the user are compared against the authorization rules; if the username or rolename matches, then the `allow` rules are processed in the order that they are defined.

Each `allow` rule is a Perl compatible regular expression that will be matched against the command being executed. If the regular expression matches, then processing of authorization rules stops and the console command is allowed to execute.

If no rules matched, then the command is not allowed to execute.

| [Prev](conf.ecelerity.conf.php)  | [Up](conf.php) |  [Next](conf.initial.conf.php) |
| 2.1. The `ecelerity.conf` File  | [Table of Contents](index.php) |  2.3. Options that Must Change |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)