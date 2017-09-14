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

| Chapter 56. Validation Context Functions |
| [Prev](apis.rs_next.php)  | Part II. C API |  [Next](apis.validate_context_add_rcpt.php) |

## Chapter 56. Validation Context Functions

**Table of Contents**

<dl class="toc">

<dt>[validate_context_add_rcpt](apis.validate_context_add_rcpt.php) — Function to append an addr to the list</dt>

<dt>[validate_context_can_modify_rcpts](apis.validate_context_can_modify_rcpts.php) — Function to check if it is still ok to change rcpts list</dt>

<dt>[validate_context_delete](apis.validate_context_delete.php) — Remove the specified key from either the message context or connection context</dt>

<dt>[validate_context_destroy](apis.validate_context_destroy.php) — Release resources associated with this validation context dictionary</dt>

<dt>[validate_context_exists](apis.validate_context_exists.php) — Determine if the specified validation context key exists</dt>

<dt>[validate_context_exists_and_get](apis.validate_context_exists_and_get.php) — If a validation context key exists, then retrieve its value</dt>

<dt>[validate_context_find_message_construct](apis.validate_context_find_message_construct.php) — Find the specified message construct.</dt>

<dt>[validate_context_get](apis.validate_context_get.php) — Retrieve the value associated with a message context key or connection context key</dt>

<dt>[validate_context_init](apis.validate_context_init.php) — Allocate resources for a validation context dictionary</dt>

<dt>[validate_context_iterate_rcpt](apis.validate_context_iterate_rcpt.php) — Function to iterate through recipient list</dt>

<dt>[validate_context_remove_all_rcpts](apis.validate_context_remove_all_rcpts.php) — Function to remove all addr from recipient list</dt>

<dt>[validate_context_remove_rcpt](apis.validate_context_remove_rcpt.php) — Function to remove addr from recipient list</dt>

<dt>[validate_context_set](apis.validate_context_set.php) — Create or set a validation context keypair determined by `key`</dt>

<dt>[validate_context_set_code](apis.validate_context_set_code.php) — Set the SMTP response code and message for the session</dt>

</dl>

For a discussion of validation context variables see [Validation Context Variables](https://support.messagesystems.com/docs/web-ref/policy.context.variables.php).

| [Prev](apis.rs_next.php)  | [Up](pt.apis.php) |  [Next](apis.validate_context_add_rcpt.php) |
| rs_next  | [Table of Contents](index.php) |  validate_context_add_rcpt |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)