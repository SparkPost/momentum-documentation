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

| Chapter 19. Configuring Inbound Mail Service Using SMTP |
| [Prev](ecstream_listener.php)  | Part III. Configuring Momentum |  [Next](esmtp_listener.relay_domains.php) |

## Chapter 19. Configuring Inbound Mail Service Using SMTP

**Table of Contents**

<dl class="toc">

<dt>[19.1\. ESMTP_Listener Configuration](esmtp_listener.php#esmtp_listener.config)</dt>

<dt>[19.2\. Inbound Email Relay or Gateway](esmtp_listener.relay_domains.php)</dt>

<dt>[19.3\. `Reconfig_Message` Option](esmtp_listener.reconfig_message.php)</dt>

<dt>[19.4\. SMTP Extensions](esmtp_listener.extensions.php)</dt>

<dt>[19.5\. ESMTP_Listener Authentication](inbound_smtp.php)</dt>

<dt>[19.6\. Inbound SSL](inbound_ssl.php)</dt>

<dt>[19.7\. Inbound TLS](inbound_tls.php)</dt>

</dl>

The ESMTP_Listener is the listener that enables you to inject message using SMTP. Momentum can listen on any number of Unix domain sockets and/or IP:port addresses for TCP/IP service.

The ESMTP_Listener supports all of the extended properties and extensions described below.

## 19.1. ESMTP_Listener Configuration

The ESMTP_Listener is configured in the `ecelerity.conf` file and specifies the end-point(s) on which Momentum should listen for incoming SMTP connections. The following is an example configuration:

```
ESMTP_Listener {
  Listen ":25" {
      **Listen_Backlog = 500**       # new default, can be set > 200 now
      TCP_Recv_Buffer_Size = 4096
      TCP_Send_Buffer_Size = 4096
      Disable_Nagle_Algorithm = false
  }
  Listen ":587" {
      Enable = "false"
      Accept_Queue_Backlog = 200
      Events_Per_Iter = 20
      Concurrency = 4
      # you need to also create this pool in your configuration,
      # otherwise you get a warning and use the IO pool instead
      Pool_Name = "accept-pool"
  }
  # serve inbound SMTP on port 25 in IPv6
  #Listen "[::1]:25" {}

  # serve inbound SMTP at 192.168.0.1 on port 25 in IPv6
  #Listen "[::192.168.0.1]:25" {}
  # or
  #Listen "[::C0A8:1]:25" {}
}
ThreadPool accept-pool {
  Concurrency = 4
}
```

Listen stanzas map 1:1 to an underlying socket, this means that `:25` (which is the same as *:25) binds to IPv4 (and perhaps IPv6, depending on the kernel); for explicit IPv6, use `[*]:25` instead.

The `Pool_Name` option associates the `accept-pool` ThreadPool with the listener. `Concurrency` should have a value that is equal to or less than the concurrency defined in the ThreadPool.

When using threaded accepts for listeners, you must provision the thread pool you intend to use via the ThreadPool directive. If the thread pool you name is not found or is unspecified, the IO pool will be used and a critical message will appear in your log.

For details about the non-module specific configuration options that are valid in the ESMTP_Listener and its nested scopes, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

Modules and their configuration options are discussed in the [Chapter 71, *Modules Reference*](modules.php "Chapter 71. Modules Reference") .

For general information regarding listeners, see [Section 15.4, “Listeners”](listeners.php "15.4. Listeners").

| [Prev](ecstream_listener.php)  | [Up](p.configuration.php) |  [Next](esmtp_listener.relay_domains.php) |
| Chapter 18. Configuring Inbound Mail Service Using ECStream  | [Table of Contents](index.php) |  19.2. Inbound Email Relay or Gateway |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)