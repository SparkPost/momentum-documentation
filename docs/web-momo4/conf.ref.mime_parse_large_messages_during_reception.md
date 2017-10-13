| mime_parse_large_messages_during_reception |
| [Prev](conf.ref.migrate_connections_between_sibling_domains.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.min_dns_ttl.php) |

<a name="conf.ref.mime_parse_large_messages_during_reception"></a>
## Name

mime_parse_large_messages_during_reception — configure whether large messages are parsed upon reception or just in time.

## Synopsis

`mime_parse_large_messages_during_reception = true`

<a name="idp25563936"></a>
## Description

This option sets or unsets the message mime parse state on a message generated with the builder API.

### Warning

Setting this value to "false" may result in blocking the scheduler thread. The default value for this option is `true`.

<a name="idp25567296"></a>
## Scope

`mime_parse_large_messages_during_reception` is valid in the global scope.

| [Prev](conf.ref.migrate_connections_between_sibling_domains.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.min_dns_ttl.php) |
| migrate_connections_between_sibling_domains  | [Table of Contents](index.php) |  min_dns_ttl |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)