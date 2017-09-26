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

| Chapter 2. Configuring Momentum to Use the Injector |
| [Prev](rest.overview.php)  |   |  [Next](rest.http_listener.php) |

## Chapter 2. Configuring Momentum to Use the Injector

**Table of Contents**

<dl class="toc">

<dt>[2.1\. The httpsrv and restinjector Modules](rest.configuring.php#rest.httpsrv)</dt>

<dt>[2.2\. HTTP_Listener](rest.http_listener.php)</dt>

</dl>

Messages are injected into Momentum by activating the `httpsrv`, `restinjector` and HTTP_Listener modules. A simple configuration follows:

<a name="rest.injector.configuration"></a>

**Example 2.1. Configuring Momentum for REST Injection**

```
# Set the debugging level for the http server
httpsrv {debug_level = "debug"}

# Set up the http listener
HTTP_Listener {
  Listen ":8081" {}
}

# Activate the REST API for injection
restinjector {}
```

Manually changing the `ecelerity.conf` file is described in "[Best Practices for Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php)". You can also make these changes through the Momentum web console.

### Note

Unlike the SMTP listener, there is no `mcmt_reception` option within the HTTP_Listener scope. *This listener is always MCMT enabled* .

Configuration is described in detail in the following sections.

## 2.1. The httpsrv and restinjector Modules

These modules only support the two options common to all modules, namely `enabled` and `debug_level`. In [Example 2.1, “Configuring Momentum for REST Injection”](rest.configuring.php#rest.injector.configuration "Example 2.1. Configuring Momentum for REST Injection") the debug level is set to `debug` for test purposes only.

For more information about the `debug_level` option see "[Module Debugging](https://support.messagesystems.com/docs/web-ref/modules.overview.implicit.php#modules.overview.debugging)".

### Note

Setting the `debug_level` to `debug` results in numerous `paniclog.ec` entries and can quickly use up disk space.

If you are adding these modules through the web UI, you must add the httpsrv module and commit this change before you can add the HTTP_Listener.

| [Prev](rest.overview.php)  |   |  [Next](rest.http_listener.php) |
| Chapter 1. Overview  | [Table of Contents](index.php) |  2.2. HTTP_Listener |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)