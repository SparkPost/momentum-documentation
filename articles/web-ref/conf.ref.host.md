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

| host |
| [Prev](conf.ref.growbuf_size.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.host_failure_retry.php) |

<a name="conf.ref.host"></a>
## Name

host — configure host specific options

<a name="idp9733760"></a>
## Description

```
host "smtp.example.com" {
  # host specific settings
}

binding "example" {
  # binding specific settings
  host "smtp.example.com" {
    # host specific settings for this binding
  }
}
```

Use the `Host` stanza to define per-host configuration options. `Host` stanzas can be nested beneath `Binding` stanzas to define binding::host configuration options.

**Configuration Change. ** As of version 3.6.11, Regex is supported in the `Host` stanza.

In addition to specifying a host by host name, you may use Perl-compatible regular expression (PCRE) syntax to define a "Regex Host". Using regex hosts you can define common rules for hosts that have similar configurations, without needing to specify the rules for every possible matching host.

```
host "/(?:^|[.])example[.](?:com|co[.]uk)$/" {
  max_outbound_connections = 15
}
```

If you are unsure of the correct host name, you can determine it using the **domain *`domain_name`***                 command from the system console. For example, issuing the command **`domain messagesystems.com`**                     results in the following output:

```
Domain 'messagesystems.com' has 2 MXs and a TTL of 86397 seconds
    [10 edge.omniti.com. TTL:597]
  =>	[8.8.38.6]:0 IPv4 (0.00ms con 0.00ms dlv)
    [10 edge2.omniti.com. TTL:597]
      [8.8.38.36]:0 IPv4 (0.00ms con 0.00ms dlv)
      ...
```

In this case, the host name to use would be `edge.omniti.com` or `edge2.omniti.com`.

You can also determine MX servers from the Unix command line by entering **dig *`domain_name`* mx**                   . If you do a dig and there are no MX records returned, then the host name is the same as the domain name.

The following options can be specified in a `Host` stanza:

*   [cluster_max_outbound_connections](conf.ref.cluster_max_outbound_connections.php "cluster_max_outbound_connections")

*   [max_outbound_connections](conf.ref.max_outbound_connections.php "max_outbound_connections")

<a name="conf.ref.host.scope"></a>
### The `host` Scope

The host scope is more specific than the domain scope; host applies to the individual host name of the mail exchanger that is being communicated with.

For example, you can determine Yahoo's MX hosts by issuing the command, **dig +short yahoo.com mx** , from the command line. You should see something similar to the following:

```
1 i.mx.mail.yahoo.com.
1 j.mx.mail.yahoo.com.
1 k.mx.mail.yahoo.com.
1 a.mx.mail.yahoo.com.
1 b.mx.mail.yahoo.com.
1 c.mx.mail.yahoo.com.
1 d.mx.mail.yahoo.com.
1 e.mx.mail.yahoo.com.
1 f.mx.mail.yahoo.com.
1 g.mx.mail.yahoo.com.
1 h.mx.mail.yahoo.com.
```

If you wanted to configure settings specific to `i.mx.mail.yahoo.com`, you would do so using a host stanza.

You might use a host stanza outside of a domain stanza if you were configuring concurrency limits for hosts that provide service for multiple domains. For instance, Google apps provides mail services to many domains; to limit your overall concurrency to a specific MX machine at Google for a given binding, regardless of which domain you are sending to, do the following:

```
binding "mycustomer" {
  host "aspmx.l.google.com" {
    max_outbound_connections = 32
  }
}
```

To be effective, you would do this for each of the MX hosts that service Google apps hosts. You can find the list of hosts in the documentation provided by Google.

<a name="idp9757680"></a>
## Scope

host is valid in the binding, binding_group and global scopes.

<a name="idp9759344"></a>
## See Also

[binding](conf.ref.binding.php "binding"), [domain](conf.ref.domain.php "domain"), [Section 2.6, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "2.6. Configuration Scopes and Fallback")

| [Prev](conf.ref.growbuf_size.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.host_failure_retry.php) |
| growbuf_size  | [Table of Contents](index.php) |  host_failure_retry |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)