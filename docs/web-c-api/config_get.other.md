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

| Chapter 12. Configuration Functions II |
| [Prev](apis.config_get_binding_domain_use_tls.php)  | Part II. C API |  [Next](apis.config_get_binding_group.php) |

## Chapter 12. Configuration Functions II

**Table of Contents**

<dl class="toc">

<dt>[config_get_binding_group](apis.config_get_binding_group.php) — Get the name of a binding group</dt>

<dt>[config_get_binding_id_from_name](apis.config_get_binding_id_from_name.php) — Get the identifier associated with a binding name</dt>

<dt>[config_get_binding_name_from_id](apis.config_get_binding_name_from_id.php) — Get the binding name associated with the specified identifier</dt>

<dt>[config_get_connect_timeout](apis.config_get_connect_timeout.php) — Get the value of the connect_timeout option</dt>

<dt>[config_get_hostname](apis.config_get_hostname.php) — Get the value of the hostname option</dt>

<dt>[config_get_spool_mode](apis.config_get_spool_mode.php) — Get the value of the spool_mode option</dt>

<dt>[ec_get_default_conf_path](apis.ec_get_default_conf_path.php) — Return the default search path, with parsed {NODENAME} and {SUBCLUSTER} references</dt>

</dl>

These functions relate to obtaining the value of various Momentum configuration options. See [Options Summary](https://support.messagesystems.com/docs/web-ref/options-summary.php) for documentation of Momentum configuration options. See also [Section 1.3.5, “Configuration API”](arch.primary.apis.php#arch.configuration "1.3.5. Configuration API") and [Configuration Scopes and Fallback](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.fallback.php).

| [Prev](apis.config_get_binding_domain_use_tls.php)  | [Up](pt.apis.php) |  [Next](apis.config_get_binding_group.php) |
| config_get_binding_domain_use_tls  | [Table of Contents](index.php) |  config_get_binding_group |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)