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

| Chapter 2. The messagescope Module |
| [Prev](msc.intro.php)  |   |  [Next](modules.messagescope.sieve.php) |

## Chapter 2. The messagescope Module

**Table of Contents**

<dl class="toc">

<dt>[2.1\. Module Configuration](modules.messagescope.php#messagescope.configuration)</dt>

<dt>[2.2\. Sieve Usage](modules.messagescope.sieve.php)</dt>

<dt>[2.3\. Lua Usage](modules.messagescope.lua.php)</dt>

<dt>[2.4\. messagescope Management Using Console Commands](messagescope.console.php)</dt>

</dl>

The messagescope module configures the behavior of the Momentum Message Scope server. This server prepares the data collected by the msc_logger module for consumption by the Message Scope web UI. How this is done is described in detail in [Chapter 6, *Message Scope Server*](msc.server.php "Chapter 6. Message Scope Server") .

## 2.1. Module Configuration

<a name="example.messagescope.2"></a>

**Example 2.1. messagescope module 2.2**

```
Validate validate/messagescope messagescope {
  timeout = 120
  iteration = 20
  diff_host = "127.0.0.1"
}
```

<a name="example.messagescope.3"></a>

**Example 2.2. messagescope module 3.x**

```
messagescope {
  timeout = 120
  iteration = 20
  diff_host = "127.0.0.1"
}
```

Module configuration options can be set through the Momentum web UI in exactly the same way as other options. Setting module options through the web UI is described in "[Administration](https://support.messagesystems.com/docs/web-ref/web3.administration.php)". The module options are described below.

<dl class="variablelist">

<dt><a name="modules.messagescope.diff_host"></a>diff_host</dt>

<dd>

Hostname from which to fetch differential updates. A connection is made to `http://[diff_host]/_momentum/fetchDiff.php?s=[timestamp]` to fetch a set of differential updates to apply to the remedial lists. This includes insertions, deletions, updates, and expirations. The default value for this option is `127.0.0.1`.

Differential updates must be applied every so often to make sure the list information is up-to-date. Instead of doing a full update every time, the differential update provides a set of actions applied to the list since a given timestamp. When this update is downloaded, the module performs these actions to make the list "proper". It's a pull model, so updates do not happen in real-time.

</dd>

<dt>iteration</dt>

<dd>

Used to determine how often to poll whether list data has been loaded. The default value for this option is `20` seconds.

</dd>

<dt>timeout</dt>

<dd>

Maximum amount of time to wait (in seconds) before timing out a connection to request list data from the message scope database. The default value for this option is `120`, indicating 2 minutes.

</dd>

</dl>

| [Prev](msc.intro.php)  |   |  [Next](modules.messagescope.sieve.php) |
| Chapter 1. Introduction to Message Scope  | [Table of Contents](index.php) |  2.2. Sieve Usage |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)