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