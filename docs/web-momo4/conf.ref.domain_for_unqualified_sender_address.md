| domain_for_unqualified_sender_address |
| [Prev](conf.ref.domain_for_unqualified_recipient_addresses.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.domain.php) |

<a name="conf.ref.domain_for_unqualified_sender_address"></a>
## Name

domain_for_unqualified_sender_address — configure a domain which will be used to substitute for unqualified sender addresses

## Synopsis

`domain_for_unqualified_sender_address = "example.com"`

<a name="idp24439056"></a>
## Description

When set, `domain_for_unqualified_sender_address` will rewrite the envelope address internally, although the original "MAIL FROM:" is still available from Sieve during all rcptto and data phases, using `vctx mailfrom_string`. The trace headers, however, will reflect the original "MAIL FROM" string. NOTE that the "FROM:" header in the e-mail is never rewritten.

`domain_for_unqualified_sender_address` is valid in either a global scope (for a single fallback domain for all unqualified addresses) or can be set in a Pathway scope (for specific fallback domains for any number of specific domains). The usual fallback semantics apply.

<a name="idp24443216"></a>
## Scope

domain_for_unqualified_sender_address is valid in a pathway, pathway_group, listener, and global scopes.

| [Prev](conf.ref.domain_for_unqualified_recipient_addresses.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.domain.php) |
| domain_for_unqualified_recipient_addresses  | [Table of Contents](index.php) |  domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)