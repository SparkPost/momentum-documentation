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

| signing_stats |
| [Prev](console_commands.shutdown.php)  | 12.2. System Console Commands |  [Next](console_commands.signing_stats_reset.php) |

<a name="console_commands.signing_stats"></a>
## Name

signing_stats — show DK/DKIM signing stats

## Synopsis

`signing_stats`

<a name="idp16331264"></a>
## Description

This command shows DKIM and Domainkeys signing statistics since startup or the last reset of statistics. Global and Per Binding statistics are persistent across Momentum shutdown and startup. Per Domain and Per Binding-Per Domain statistics are not persistent.

```
10:47:35 /tmp/2025> signing_stats
Signing Statistics

Global
        DomainKeys
                AccumulatedSigningTime    0.0494
                TotalMessagesSigned            1
                FailedSigningAttempts          0
                TotalMessagesProcessed         1
        DKIM
                AccumulatedSigningTime    0.0187
                TotalMessagesSigned            1
                FailedSigningAttempts          0
                TotalMessagesProcessed         1
Per Domain
        DomainName  omniti.com
        DomainKeys
                AccumulatedSigningTime    0.0494
                TotalMessagesSigned            1
                FailedSigningAttempts          0
                TotalMessagesProcessed         1
        DKIM
                AccumulatedSigningTime    0.0187
                TotalMessagesSigned            1
                FailedSigningAttempts          0
                TotalMessagesProcessed         1
Per Binding
        binding_name example
        DomainKeys
                AccumulatedSigningTime    0.0494
                TotalMessagesSigned            1
                FailedSigningAttempts          0
                TotalMessagesProcessed         1
        DKIM
                AccumulatedSigningTime    0.0187
                TotalMessagesSigned            1
                FailedSigningAttempts          0
                TotalMessagesProcessed         1
        Per Binding Per Domain
        DomainName  omniti.com
        DomainKeys
                AccumulatedSigningTime    0.0494
                TotalMessagesSigned            1
                FailedSigningAttempts          0
                TotalMessagesProcessed         1
        DKIM
                AccumulatedSigningTime    0.0187
                TotalMessagesSigned            1
                FailedSigningAttempts          0
                TotalMessagesProcessed         1
```

<dl class="variablelist">

<dt>Global</dt>

<dd>

The statistics in this section are accumulated across all domains and bindings.

</dd>

<dt>Per Domain</dt>

<dd>

The statistics in this section are grouped by domain and identified by the domain name. The statistics under each domain name are accumulated for that domain only.

</dd>

<dt>Per Binding</dt>

<dd>

The statistics in this section are grouped by binding, headed by the binding name, and by domain within the binding. The statistics under each binding name are accumulated for all domains within that binding. Statistics headed by domain name are accumulated for that domain within the binding only.

</dd>

<dt>DomainKeys</dt>

<dd>

This term labels signing statistics accumulated by Domainkeys signing.

</dd>

<dt>DKIM</dt>

<dd>

This term labels statistics accumulated by DKIM signing.

</dd>

<dt>AccumulatedSigningTime</dt>

<dd>

The total amount of time (in seconds) spent processing messages.

</dd>

<dt>TotalMessagesSigned</dt>

<dd>

The total number of Messages successfully signed.

</dd>

<dt>FailedSigningAttempts</dt>

<dd>

The total number of failed attempts at signing.

</dd>

<dt>TotalMessagesProcessed</dt>

<dd>

The total number of messages processed including messages that the signing algorithm determines are not to be signed.

</dd>

</dl>

<a name="idp16353856"></a>
## See Also

[Section 14.29, “domainkeys – Yahoo! DomainKeys”](modules.domainkeys.php "14.29. domainkeys – Yahoo! DomainKeys"), [Section 14.49, “opendkim – OpenDKIM module”](modules.opendkim.php "14.49. opendkim – OpenDKIM module") and [signing_stats reset](console_commands.signing_stats_reset.php "signing_stats reset")

| [Prev](console_commands.shutdown.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.signing_stats_reset.php) |
| shutdown  | [Table of Contents](index.php) |  signing_stats reset |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)