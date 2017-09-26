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

| 14.8. beik – BEIK Module |
| [Prev](modules.auth_radius.php)  | Chapter 14. Modules Reference |  [Next](modules.bounce_classifier.php) |

## 14.8. beik – BEIK Module

<a class="indexterm" name="idp10722416"></a>

The beik module is an anti-spam module that provides support for the Symantec Brightmail Engine Integration Kit (BEIK). Because BEIK is an in-process version of the brightmail module it provides superior performance.

If you intend to use this module be sure to choose it during installation. The beik module is licensed by Symantec. Register this license as instructed by Symantec.

**Configuration Change. ** This feature is available as of version 2.2.3.46.

You must have a valid `cert.pem` file in place to use the beik module with Momentum. Take the following steps:

1.  Get the *`file_name`*.slf file from Symantec

2.  To create a `cert.pem` file run the following command as root:

    shell> /opt/ecelerity/3rdParty/symantec/beik/sbin/register        \
              -c /opt/msys/3rdParty/symantec/beik/etc/bmiconfig.xml \
              -l *`file_name`*.slf
3.  Stop ecelerity by issuing the command **/etc/init.d/ecelerity stop**      and add a beik stanza to your `ecelerity.conf` file.

4.  Start BEIK by issuing the command: **`/etc/init.d/msys-beik start.`**        

5.  Restart ecelerity by issuing the command: **`/etc/init.d/ecelerity start`**       .

    ### Note

    You must restart ecelerity for these changes to have effect. Using **config reload**        is ineffective here.

### 14.8.1. Configuration

<a name="idp10739888"></a>

**Example 14.11. beik module**

```
Validate validate/beik beik {
  use_wire_rep = true
  bmiconfig_path = "/opt/ecelerity/3rdParty/symantec/beik/etc/bmiconfig.xml"
  header_padding = 512
}
```

<dl class="variablelist">

<dt>accum_pool</dt>

<dd>

Which thread pool to use when accumulating data against the scanned message. The default value for this option is the `IO` thread pool.

</dd>

<dt>bmiconfig_path</dt>

<dd>

This option indicates the full path to the BEIK configuration file, `bmiconfig.xml`. The default value for this option is `/opt/ecelerity/3rdParty/symantec/beik/etc/bmiconfig.xml.` For more information about this file see the documentation provided by Symantec.

</dd>

<dt>header_padding</dt>

<dd>

When `use_wire_rep` is not or cannot be used, the number assigned to `header_padding` is added as padding to an internal allocation to avoid an additional call to `realloc`. Sizing for this is guided by approximate size of the trace headers added by *this* MTA. The value of `header_padding` should be larger than those trace headers, otherwise the internal memory buffers may need to be `realloc`'d. The default value for this option is `512`.

</dd>

<dt>scan_pool</dt>

<dd>

Which thread pool to use when scanning a message. The default value for this option is the `CPU` thread pool. For more information about defining thread pools see [threadpool](conf.ref.threadpool.php "threadpool").

</dd>

<dt>use_wire_rep</dt>

<dd>

This option determines whether to avoid an additional malloc or memcpy by passing in the data for the message headers and body as they are received, instead of the possibly locally modified data. This optimization is only available if the message is not large (meaning that it is less than `large_message_threshold`). When this option is used, local received headers added by *this* MTA, and any other modifications made locally are not included in the data sent to BEIK. The default value for this option is `true`.

</dd>

</dl>

### 14.8.2. Runtime Usage

If you are scanning email using a script at runtime, this module must be loaded in passive mode. For more information about loading a module in passive mode see [Chapter 13, *Modules*](modules.overview.php "Chapter 13. Modules").

**Sieve Usage**

When this module is loaded in passive mode inbound messages are only scanned when the Sieve `beik_scan` action is invoked.

This function should be invoked in the `each_rcpt_phase` phase as shown in the following:

```
$verdict = beik_scan;
vctx_mess_set "bm_verdict" $verdict;
```

### 14.8.3. beik and IPv6

The beik module does **not** currently support IPv6 addresses.

If you attempt to inject and scan a message with an IPv6 address you will see an error in the panic log similar to the following:

`1337205547:BEIK: bmiProcessConnection() fatal error [0x3000006] client: The API received an invalid argument`

There is no other indication of an error.

### 14.8.4. beik Management Using Console Commands

The beik module can be controlled through the `ec_console`; the following command is available:

**14.8.4.1. beik reload**

Use this command to reload the beik module. You do not need to manually invoke this command; it is triggered by the updates service, msys-beik.

| [Prev](modules.auth_radius.php)  | [Up](modules.php) |  [Next](modules.bounce_classifier.php) |
| 14.7. auth_radius – RADIUS based SMTP Authentication  | [Table of Contents](index.php) |  14.9. bounce_classifier – Bounce Classifier |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)