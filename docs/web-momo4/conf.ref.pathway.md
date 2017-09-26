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

| pathway |
| [Prev](conf.ref.outbound_throttle_messages.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.pathway_group.php) |

<a name="conf.ref.pathway"></a>
## Name

pathway — a grouping of inbound configuration options

<a name="idp25791152"></a>
## Description

The `pathway` *scope* is used to group inbound configuration options that you wish to apply to a specific ESMTP_Listener. A pathway scope may be defined in the global scope or within a `pathway_group` scope.

```
pathway "example1" {
  allow_null_envelope_sender = true
}

pathway_group "group1" {

  pathway "example2" {
    idle_time = 400
  }
}
```

The usual fallback semantics apply to options valid in the Pathway scope. The value that an option assumes, in order of decreasing precedence, is as follows:

1.  pathway_group::pathway

2.  pathway

3.  pathway_group

4.  global

A pathway is associated with a specific ESMTP_Listener or a listen or peer scope within an ESMTP_Listener by setting the `pathway` *option* within that scope. For example:

```
pathway "example1" {
  allow_null_envelope_sender = true
}

ESMTP_Listener {
  listen ":25" {
    ...
    **pathway = "example1"** 
  }
}
```

Pathway_groups are used for logical groupings only and cannot be associated with ESMTP_Listeners.

Because a pathway is just a message context variable, you can set it in the following way:

`vctx_mess_set "pathway" "example1"`<a name="idp25804336"></a>
## Scope

The pathway scope is valid in the global scope and within a pathway group scope.

The pathway *option* references a pathway scope and is valid within an esmtp_listener or within a listen or peer scope within an esmtp_listener.

<a name="idp25807760"></a>
## See Also

[pathway_group](conf.ref.pathway_group.php "pathway_group")

| [Prev](conf.ref.outbound_throttle_messages.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.pathway_group.php) |
| outbound_throttle_messages  | [Table of Contents](index.php) |  pathway_group |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)