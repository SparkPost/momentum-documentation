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

| domain_for_unqualified_recipient_addresses |
| [Prev](conf.ref.domain.php)  | 9.2. Configuration Files and Option Details |  [Next](conf.ref.domain_for_unqualified_sender_address.php) |

<a name="conf.ref.domain_for_unqualified_recipient_addresses"></a>
## Name

domain_for_unqualified_recipient_addresses — configure a domain which will be used to resolve delivery for unqualified addresses

## Synopsis

`Domain_for_unqualified_recipient_addresses = "example.com"`

<a name="idp5009392"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.26.

RFC-2821, section 4.5.1, requires that all compliant MTA's accept the special address of "RCPT TO:<postmaster>" without a domain name. Mail sent to this address should normally be forwarded to the entity responsible for the MTA as a whole, not some specific domain being accepted by that MTA. To make this support more flexible, `Domain_for_unqualified_recipient_addresses` will actually support any unqualified e-mail address. For example, a site may wish to also support "RCPT TO:<abuse>" as an alias, as suggested by RFC-2142.

When set, `Domain_for_unqualified_recipient_addresses` will rewrite the envelope address internally, although the original "RCPT TO:" is still available from Sieve during all rcptto and data phases, using `vctx rcptto_string`. The envelope address is actually rewritten before the each_rcpt phases, and will now use the expanded address when relayed to the final destination. The trace headers, however, will reflect the original "RCPT TO" string. NOTE that the "TO:" header in the e-mail is never rewritten.

`Domain_for_unqualified_recipient_addresses` is valid in either a global scope (for a single fallback domain for all unqualified addresses) or can be set in a Pathway scope (for specific fallback domains for any number of specific domains). The more specific Pathway scope overrides any existing value set in a global scope.

To accept unqualified "Postmaster" mail for the entire MTA, one would specify

`domain_for_unqualified_recipient_addresses = "example.com"`

which would rewrite any message sent to "RCPT TO:<postmaster>" as if it had originally been written "RCPT TO:<postmaster@example.com>" .

<a name="idp5020384"></a>
## Scope

Domain_for_unqualified_recipient_addresses is valid in pathway, pathway_group, global and listener scopes.

| [Prev](conf.ref.domain.php)  | [Up](conf.ref.files.php) |  [Next](conf.ref.domain_for_unqualified_sender_address.php) |
| domain  | [Table of Contents](index.php) |  domain_for_unqualified_sender_address |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)