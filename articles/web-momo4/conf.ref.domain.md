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

| domain |
| [Prev](conf.ref.domain_for_unqualified_sender_address.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.domainkeys.php) |

<a name="conf.ref.domain"></a>
## Name

domain — configure domain specific options

<a name="idp24451232"></a>
## Description

```
domain "example.com" {
  # domain-specific settings
}

binding example {
  domain "example.com" {
    # domain-specific settings for the "example" binding
  }
}
```

Use the `domain` stanza to define per-domain configuration options. You can nest `domain` stanzas beneath `binding` stanzas creating a binding:domain configuration. For additional details, see [Section 15.3, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "15.3. Configuration Scopes and Fallback").

In addition to defining `domain` stanzas using domain names, you can also use IP addresses:

```
domain "192.0.43.10" {
}
```

When declaring IPv6 domains, use the following syntax:

```
domain "[IPv6:fd82:7796:815b:be0:222:19ff:fe52:3629]" {
  # domain specific settings
}
```

<a name="conf.ref.domain.regex"></a>**Regex Domains. ** In addition to specifying a domain by domain name, you may use Perl-compatible regular expression (PCRE) syntax to define a "Regex Domain". Using regex domains, you can define common rules for domains that have similar configurations, without needing to specify the rules for every possible matching domain.

```
domain "example.com" {
  max_outbound_connections = 20
}

domain "/(?:^|[.])example[.](?:com|co[.]uk)$/" {
  max_outbound_connections = 15
  max_deliveries_per_connection = 5
}
```

In the example above, mail for `example.com` will use no more than 20 connections, and will send no more than 5 messages on a given connection before tearing it down. Mail for `example.co.uk` will have `max_deliveries_per_connection` set to 5 and `max_outbound_connections` set to 15, as would mail for any sub-domain of `example.com` or `example.co.uk`.

Option resolution will always match a value defined in a normal `domain` stanza before looking for a matching regex domain stanza in the same container, which is why `example.com` would have `max_outbound_connections` set to 20, despite it being set to 15 in the regex domain stanza that matches.

If multiple regex domain stanzas are declared in the same container, normal domain stanzas are checked first before finding a match from the regex domain stanzas in the order that the regex domain stanzas were declared in the configuration file.

### Note

You almost always want to anchor the start and end of your regular expressions when using them for regex domains, otherwise they will perform substring matching which might have unexpected side effects, such as matching subdomains of "bad guy" domains and routing unwanted mail via trusted interfaces.

For domain naming when using Momentum Mobile, see [Multi-protocol Domain Naming](https://support.messagesystems.com/docs/web-mobility/mobility.mm7.multiprotocol.php).

<a name="idp24470704"></a>
## Scope and Valid Options

`domain` is valid in the binding, binding_group, and global scopes.

For a complete list of options valid in the domain scope, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

<a name="idp24474672"></a>
## See Also

[binding](conf.ref.binding.php "binding"), [host](conf.ref.host.php "host"), [match_cache_life](conf.ref.match_cache_life.php "match_cache_life"), [match_cache_size](conf.ref.match_cache_size.php "match_cache_size")

| [Prev](conf.ref.domain_for_unqualified_sender_address.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.domainkeys.php) |
| domain_for_unqualified_sender_address  | [Table of Contents](index.php) |  domainkeys |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)