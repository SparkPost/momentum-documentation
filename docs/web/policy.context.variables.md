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

| Chapter 6. Validation Context Variables |
| [Prev](policy.conclusion.php)  | Part I. Configuration Guide |  [Next](policy.predefined-context-conn.php) |

## Chapter 6. Validation Context Variables

**Table of Contents**

<dl class="toc">

<dt>[6.1\. Connection Context Variables](policy.predefined-context-conn.php)</dt>

<dt>[6.2\. Message Context Variables](policy.context-mess.php)</dt>

</dl>

<a class="indexterm" name="idp1760192"></a>

As mentioned in [Chapter 5, *Implementing Policy with Momentum*](policy.php "Chapter 5. Implementing Policy with Momentum") , context variables have a significant role to play when policy is enforced using Sieve scripts. There is a description of user-defined connection context variables set in a listener stanza in [the section called “Defining Connection-based Validation Context Variables, The "context" Property”](ecelerity.conf.php#ecelerity.conf.validation.context.variables "Defining Connection-based Validation Context Variables, The "context" Property"). In addition to these variables, there are validation context variables accessible in the connection context or the message context. Not all context variables will be set in all cases; some, for example, depend on TLS settings and others on the modules that are loaded into Momentum. Some context variables are defined in a global scope and some are defined within a module scope.

| [Prev](policy.conclusion.php)  | [Up](p.guide.php) |  [Next](policy.predefined-context-conn.php) |
| 5.4. Conclusion  | [Table of Contents](index.php) |  6.1. Connection Context Variables |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)