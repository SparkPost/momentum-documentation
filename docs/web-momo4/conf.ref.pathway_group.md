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

| pathway_group |
| [Prev](conf.ref.pathway.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.pcre_cache_size.php) |

<a name="conf.ref.pathway_group"></a>
## Name

pathway_group — a container for pathways

<a name="idp25815984"></a>
## Description

### Warning

Currently, esmtp_listener options used in the pathway_group scope are not recognized by ecelerity. For this reason, do not use pathway_group as a configuration container. As a workaround, use the pathway scope only.

The `pathway_group` scope is used to logically group pathways so that common configuration options need not be repeated throughout a configuration file.

```
pathway_group "group1" {
  idle_time = 400
  pathway "example1" {
    banner_hostname = "example1.mail.server"
  }

  pathway "example2" {
    banner_hostname = "example2.mail.server"
  }
}
```

In the example above, both pathways will have the same `idle_time` but different `banner_hostname`s.

<a name="idp25821776"></a>
## Scope

pathway_group is valid in the global scope.

<a name="idp25824144"></a>
## See Also

[pathway](conf.ref.pathway.php "pathway")

| [Prev](conf.ref.pathway.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.pcre_cache_size.php) |
| pathway  | [Table of Contents](index.php) |  pcre_cache_size |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)