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

| Chapter 3. Post-installation Tasks |
| [Prev](mc-postgres-log-file.php)  |   |  [Next](mc-post-config-options.php) |

## Chapter 3. Post-installation Tasks

**Table of Contents**

<dl class="toc">

<dt>[3.1\. Orgs and Modes](mc-post-installation.php#mc-post-installation-modes)</dt>

<dt>[3.2\. Configuration Options](mc-post-config-options.php)</dt>

<dt>[3.3\. Update the Default Org](mc-post-org.php)</dt>

<dt>[3.4\. Creating Bindings](mc-post-installation-bindings.php)</dt>

<dt>[3.5\. DKIM Signing](mc-post-dkim.php)</dt>

<dt>[3.6\. Adding Roles](mc-creating-roles.php)</dt>

<dt>[3.7\. Creating Users](mc-creating-users.php)</dt>

<dt>[3.8\. Remove Clicktracker Cache](mc-post.click-tracker.cache.php)</dt>

<dt>[3.9\. Using LDAP with Message Central](mc3.ldap.php)</dt>

<dt>[3.10\. Configuring For Intelligent Message Disposition](mc-post-installation.imd.php)</dt>

<dt>[3.11\. Exposing IMD Controls in the Web UI](mc-post-installation.enabling.imd.php)</dt>

<dt>[3.12\. Configuring for SMS](mc-post-installation.sms.php)</dt>

<dt>[3.13\. Installing an Additional Generator](mc-post-installation.second.generator.php)</dt>

</dl>

This chapter describes administrative tasks performed after installation.

## 3.1. Orgs and Modes

Clients using both Database-centric mode and Direct Access mode must set up different Orgs for each mode. For information on creating new Orgs see ["Orgs"](https://support.messagesystems.com/docs/web-mc-user/mc3-administration.php#mc3-administration-orgs).

| [Prev](mc-postgres-log-file.php)  |   |  [Next](mc-post-config-options.php) |
| 2.6. The PostgreSQL Log File  | [Table of Contents](index.php) |  3.2. Configuration Options |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)