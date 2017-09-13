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

| Chapter 19. DKIM/DK Functions |
| [Prev](apis.dict_unserialize.php)  | Part II. C API |  [Next](apis.ec_dk_responsible_domain.php) |

## Chapter 19. DKIM/DK Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_dk_responsible_domain](apis.ec_dk_responsible_domain.php) — Function to return responsible domain</dt>

<dt>[ec_dk_sign](apis.ec_dk_sign.php) — Function to sign a mail message</dt>

<dt>[ec_dkim_domains](apis.ec_dkim_domains.php) — Function to return a list of valid signing domains</dt>

<dt>[ec_dkim_domains_string](apis.ec_dkim_domains_string.php) — Function to return a list of valid signing domains</dt>

<dt>[ec_dkim_get_verify_results](apis.ec_dkim_get_verify_results.php) — Return the number of DKIM signature results</dt>

<dt>[ec_dkim_reflect](apis.ec_dkim_reflect.php) — Function to reflect validation result to email address specified in "rcpts"</dt>

<dt>[ec_dkim_responsible_domain](apis.ec_dkim_responsible_domain.php) — Function to return responsible domain</dt>

<dt>[ec_dkim_responsible_domain_string](apis.ec_dkim_responsible_domain_string.php) — Function to return responsible domain</dt>

<dt>[ec_dkim_sign](apis.ec_dkim_sign.php) — Function to sign a mail message</dt>

<dt>[ec_opendkim_sign](apis.ec_opendkim_sign.php) — Function to sign a mail message</dt>

<dt>[ec_opendkim_start](apis.ec_opendkim_start.php) — Create a DKIM verify structure</dt>

<dt>[ec_opendkim_verify](apis.ec_opendkim_verify.php) — Function to validate a message's DKIM signature</dt>

</dl>

The APIs documented here relate to the [dk](https://support.messagesystems.com/docs/web-ref/modules.domainkeys.php) module, the [opendkim](https://support.messagesystems.com/docs/web-ref/modules.opendkim.php) module and the [dkim](https://support.messagesystems.com/docs/web-ref/modules.dkim.php) module.

| [Prev](apis.dict_unserialize.php)  | [Up](pt.apis.php) |  [Next](apis.ec_dk_responsible_domain.php) |
| dict_unserialize  | [Table of Contents](index.php) |  ec_dk_responsible_domain |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)