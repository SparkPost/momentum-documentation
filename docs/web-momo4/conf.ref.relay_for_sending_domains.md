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

| relay_for_sending_domains |
| [Prev](conf.ref.rcptto_timeout.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.relay_domains.php) |

<a name="conf.ref.relay_for_sending_domains"></a>
## Name

relay_for_sending_domains — domains that may use the MTA as a relay.

## Synopsis

relay_for_sending_domains = *`(“*.example.com”)`*

<a name="idp25921520"></a>
## Description

Provides a mechanism for finer control over SMTP relaying. If specified with no parameters, it allows unrestricted use of the instance as an SMTP relay (a.k.a., open relay) from the IP ACL that was matched.

If parameters of the form `"domainname" "other_domainname"` are specified, relaying will be allowed from that IP ACL if the sender domain matches one of the specified domain names. You can also use wildcards to specify a series of domain names, for example, `"*.foo.com"`. The `relay_hosts` options will override any restrictions enacted by this option for the specified IP addresses.

<a name="idp25925664"></a>
## Scope

relay_for_sending_domains is valid in the esmtp_listener, listen, pathway, pathway_group, and peer scopes.

<a name="idp25927568"></a>
## See Also

[relay_hosts](conf.ref.relay_hosts.php "relay_hosts")

| [Prev](conf.ref.rcptto_timeout.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.relay_domains.php) |
| rcptto_timeout  | [Table of Contents](index.php) |  relay_domains |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)