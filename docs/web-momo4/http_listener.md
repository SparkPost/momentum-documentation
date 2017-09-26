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

| Chapter 20. Configuring Inbound Mail Service Using HTTP |
| [Prev](inbound_tls.php)  | Part III. Configuring Momentum |  [Next](conf.ref.msg_gen.conf.php) |

## Chapter 20. Configuring Inbound Mail Service Using HTTP

**Table of Contents**

<dl class="toc">

<dt>[20.1\. HTTP_Listener Configuration](http_listener.php#http_listener.config)</dt>

<dt>[20.2\. `msg_gen.conf` File](conf.ref.msg_gen.conf.php)</dt>

</dl>

The HTTP_Listener is the listener that enables you to inject messages using HTTP and to use the REST API.

## 20.1. HTTP_Listener Configuration

The HTTP_Listener is configured in the `msg_gen.conf` file that is included from within `ecelerity.conf` and specifies the end-point(s) on which Momentum should listen for incoming HTTP connections. The following is an example configuration:

```
HTTP_Listener {
  Listen ":2081" {}
}
```

By default, the HTTP_Listener listens on port 2081.

### Note

In version 4.0, the API endpoints were accessed on port 8081\. As of version 4.1, no explicit port number is required to access the API endpoints.

For details about the non-module specific configuration options that are valid in the HTTP_Listener and its nested scopes, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

Modules and their configuration options are discussed in the [Chapter 71, *Modules Reference*](modules.php "Chapter 71. Modules Reference") .

For general information regarding listeners, see [Section 15.4, “Listeners”](listeners.php "15.4. Listeners").

| [Prev](inbound_tls.php)  | [Up](p.configuration.php) |  [Next](conf.ref.msg_gen.conf.php) |
| 19.7. Inbound TLS  | [Table of Contents](index.php) |  20.2. `msg_gen.conf` File |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)