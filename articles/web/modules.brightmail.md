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

| 14.11. brightmail – Brightmail Module |
| [Prev](modules.bounce_logger.php)  | Chapter 14. Modules Reference |  [Next](modules.cidrdb.php) |

## 14.11. brightmail – Brightmail Module

<a class="indexterm" name="idp10871712"></a>

**Configuration Change. ** This feature was introduced in Momentum 2.1.

The Brightmail module provides a mechanism for checking the current inbound message context (for each recipient) against a Symantec Brightmail AntiSpam content server.

If you intend to use this module be sure to choose it during installation. You will also need to purchase a license from Symantac.

### 14.11.1. Configuration

<a name="example.brightmail"></a>

**Example 14.14. brightmail module**

```
Validate validate/brightmail brightmail {
  server = 10.10.10.20:41111
  num_workers = 10
  sieve_mode = "on"
  sieve_prefix = brightmail
  max_size = 2048
  timeout = 15
}
```

<dl class="variablelist">

<dt>idle_timeout</dt>

<dd>

Open connections to the brightmail server are cached. This defines how long to keep an idle connection open.

</dd>

<dt>max_messages_per_connection</dt>

<dd>

**Configuration Change. ** This feature is available as of version 2.2.3.46.

The brightmail module will drop a connection after processing this many messages. Set this option to `0` to process an unlimited number. The default value for this option is `0`.

</dd>

<dt>max_size</dt>

<dd>

This option specifies the number of bytes sent to the brightmail server. For example, if this is set to `2048` and a message of 4,000 bytes is received, only `2048` will be sent to the Brightmail server.

</dd>

<dt>max_tries</dt>

<dd>

The number of times to attempt a connection to the brightmail server; if we can't connect and max_tries is greater than one, retry the connection `max_tries` number of times.

</dd>

<dt>num_workers</dt>

<dd>

Specifies the concurrency of access to the Brightmail service. For numbers greater than zero, this specifies the number of threads that will be used to concurrently communicate with Brightmail. Each thread will have its own TCP/IP connection to the server and be capable of handling new messages serially. 0 (zero) has a special meaning: exactly one connection will be made synchronously to the main Momentum process and thus block other operations—this is highly discouraged.

</dd>

<dt>server</dt>

<dd>

Specifies the IP address and port on which the Brightmail service should be reached. Since the module makes a TCP connection it isn't essential that it run on the same server as Momentum. Instead of an IP address, you can also specify the hostname.

</dd>

<dt>sieve_mode</dt>

<dd>

Specifies whether to operate in Sieve-only mode or not. If Sieve-only mode is active then no brightmail checking will occur unless called for directly in Sieve. If the module is loaded with "sieve_mode = off" then the scanner will be run for all messages in the data phase. If you set `sieve_mode` to `on` then you need to invoke the brightmail_scanner manually. This can be invoked at the data, spool or each_rcpt phases. It will not work at the connect, ehlo, mailfrom or rcptto phases. If you don't want brightmail to see a given message, do not call `brightmail_scanner` for that message.

For more information on using brightmail from Sieve see [brightmail](sieve.ref.brightmail.php "brightmail").

</dd>

<dt>sieve_prefix</dt>

<dd>

Specifies a name for a specific brightmail server instance. Allows you to concurrently interface with any number of servers that use the brightmail module. This setting also determines the prefix for the validation context variable and the names of the brightmail Sieve functions. See [Section 14.11.2, “Brightmail Runtime Usage”](modules.brightmail.php#modules.brightmail.runtime.usage "14.11.2. Brightmail Runtime Usage") and [brightmail](sieve.ref.brightmail.php "brightmail"). The default value for this option is `brightmail`.

</dd>

<dt>timeout</dt>

<dd>

Specifies the maximum time to wait for a response before assuming a failure on the part of the brightmail server.

</dd>

</dl>

### 14.11.2. Brightmail Runtime Usage

The brightmail module sets one context variable in the event of an error:

<dl class="variablelist">

<dt>*`brightmail`*::error</dt>

<dd>

This variable, if it exists, contains information pertaining to the error that occurred while attempting to process the current message through the Brightmail service.

</dd>

</dl>

**Sieve Usage**

See [brightmail](sieve.ref.brightmail.php "brightmail") for more details on implementing policy based on the Brightmail verdict.

The *`brightmail`*::error variable is accessible in the message validation context and can be used in the following way:

```
$err = vctx_mess_get "brightmail::error";
if not ec_test :is $err "" {
  ec_action 451 "Brightmail issue";
}
```

Note that the prefix for this variable is determined by the `sieve_prefix` setting. For example, if this module is loaded with `sieve_prefix` set to `bm`, you would access the error message using the code `$err = vctx_mess_get "bm::error";`.

| [Prev](modules.bounce_logger.php)  | [Up](modules.php) |  [Next](modules.cidrdb.php) |
| 14.10. bounce_logger – Momentum-Style Bounce Logging  | [Table of Contents](index.php) |  14.12. cidrdb – CIDRDB |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)