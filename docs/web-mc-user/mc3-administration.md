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

| Chapter 11. Administration |
| [Prev](mc3-custom.php)  |   |  [Next](mc3-administration-users.php) |

## Chapter 11. Administration

**Table of Contents**

<dl class="toc">

<dt>[11.1\. Organizations](mc3-administration.php#mc3-administration-orgs)</dt>

<dt>[11.2\. Users](mc3-administration-users.php)</dt>

<dt>[11.3\. Permissions](mc3-administration-permissions.php)</dt>

<dt>[11.4\. Suppression Lists](mc3-administration-suppression-lists.php)</dt>

<dt>[11.5\. Relational Data](mc3-administration-relations.php)</dt>

<dt>[11.6\. Link Groups](mc3-administration-link-groups.php)</dt>

<dt>[11.7\. Link Types](mc3-administration-link-types.php)</dt>

<dt>[11.8\. List Builder Criteria](mc3-administration-list-builder-criteria.php)</dt>

<dt>[11.9\. Process Manager](mc3-administration-process-manager.php)</dt>

</dl>

What a user sees in the web UI depends upon the privileges that they have been granted. The tasks described in this chapter are administrative so require privileges associated with the root user, the global sysadmin or the org sysadmin.

The administrative tasks that can be performed using the UI are:

*   Organizations – The organization associated with a mailing. There may be one or more organizations.

*   Users – Authorized users of Message Central

*   Permissions – The various permissions that apply to users

*   Suppression Lists – Lists of recipients that do not receive emails

*   Relations – Manage data from external databases

*   Link Groups – Create groups for related links

*   Profile Fields – Custom data related to recipients

*   List Builder Criteria – add or remove operators for fields

## 11.1. Organizations

To view existing organizations, choose the ORGANIZATIONS menu option from the ADMIN menu.

<a name="figure-orgs"></a>

**Figure 11.1. Orgs**

![Orgs](images/orgs.jpg)

<a name="ui-1"></a>You can sort the data on any of the available columns. Click the "up" arrow for an ascending sort and click the "down" arrow for a descending sort.

At a minimum you should see the org created during installation. You can edit an existing org by clicking the org row.

To add an org, click the CREATE NEW ORGANIZATION button. Required fields are indicated in the user interface by a red asterisk.

The fields are as follows:

*   Organization Name – Text box (required)

*   Address 1 – Text box

*   Address 2 – Text box

*   City – Text box

*   Region/State – Text box

*   Postal Code – Text box

*   Country – Drop-down list box

*   Language – Drop-down list box

*   Contact Name – Text box

*   Contact Email – Text box

*   Account Rep Email – Text box

*   Maintenance Message – Text box

*   Sending Domain – Text box (required)

*   Web Domain – Text box (required)

*   Timezone – Drop-down list box

*   Logins Enabled – Check box

*   Down For Maintenance – Check box

*   Permitted Bindings – Text area

*   Momentum Instructions – Text area

*   Unique Key Fields – Text area

*   DomainKey Signing Enabled – Check box

*   DKIM Signing Enabled – Check box

*   Allow editing of Lists/Segments which are currently or were previously used by a Mailing: – Check box

*   Default From Address – Text box

*   Eligible for Regeneration – List box

### Note

If you wish to use signing in any of your campaigns or mailings, you must have it selected in the parent org. Selecting signing after you have already created a campaign or a mailing enables signing for that campaign or mailing. To use signing you must also configure Momentum. For more information see [DKIM Signing](https://support.messagesystems.com/docs/web-mc/mc-post-dkim.php).

For the most part the field names associated with an Org are self-explanatory.

The Allow editing of Lists/Segments which are currently or were previously used by a Mailing check box determines whether or not you can edit Lists/Segments that are already in use or have been used. For more information see [Section 6.2, “Lists/Segments”](mc3-recipients-lists.php "6.2. Lists/Segments").

The Web Domain field identifies the Click Tracker server. This *must* be the domain that points to the server hosting the pe2clicktrack service. When entering this field, you must include the protocol, for example `http://example.com`.

### Note

If you have a proxy server between the clicktracker and the Internet you must set Web Domain to the value http://*`clicktracker_server:port`*/MSWeb/ProxyServlet?assetString=. For more information see "[Using a Proxy Server with the Clicktracker](https://support.messagesystems.com/docs/web-mc/mc-clicktracker-component.php#mc-clicktracker-proxy)".

The Eligible for Regeneration control determines whether the Org uses Intelligent Message Disposition (IMD). You must configure the `/opt/msys/pe2/etc/mc_sched.conf` file for this option to appear. To do this see [Intelligent Message Disposition](https://support.messagesystems.com/docs/web-mc/mc-post-installation.imd.php). Set this to `Yes` at the Org level if IMD is typically required. When necessary, you can override this setting at the campaign and mailing levels.

### Note

If the value of regeneration for an org is set to `Inherit` then the value is effectively the default which is "no" or "do not regenerate".

The Sending Domain, Permitted Bindings, Momentum Instructions and Unique Key Fields fields also require an explanation. They are discussed in the following sections.

### 11.1.1. The Sending Domain

The Sending Domain field is the VERP address entered during installation unless an overriding value is entered here.

This field forms the basis of the MAIL FROM address for each piece of mail sent by Message Central. The MAIL FROM is constructed as follows: bounces-*`orgid-mailingid-segmentid-templateid-contactid-progresscounter`*@*`sendingdomain.com`*. All numbers are hex encoded. The *`progresscounter`* specifies the order in which a recipient was identified as eligible for the mailing.

See also ["verpdomain"](https://support.messagesystems.com/docs/web-mc/conf.soap.verpdomain.php).

### 11.1.2. The Permitted Bindings

The Permitted Bindings text area is used to associate bindings or binding groups with an org. These bindings must also be set up by your Momentum administrator. Setting the Permitted Bindings will *not*, on its own, preset the binding selection. For more information about bindings, see ["Bindings"](https://support.messagesystems.com/docs/web-ref/conf.ref.binding.php) and ["Binding Groups"](https://support.messagesystems.com/docs/web-ref/conf.ref.binding_group.php).

<a name="figure-permitted_bindings"></a>

**Figure 11.2. Permitted bindings**

![Permitted bindings](images/permitted_bindings.jpg)

To add a binding group, preface the binding group name with `group:`. No prefix is required when adding a binding.

Use the + button to add a new binding. Bindings or binding groups added here can be associated with campaigns and mailings. They show up in the BINDING GROUPS frame when adding or editing a campaign or a mailing. For more information see [Section 4.2, “Editing a Campaign”](mc3-campaign-editing.php "4.2. Editing a Campaign") and [Section 5.3, “Editing a Mailing”](mc3-mailings-editing.php "5.3. Editing a Mailing").

### Note

Only bindings added to the parent org can be used in a campaign or mailing.

### 11.1.3. The Momentum Instructions

The Momentum Instructions text area defines validation context variables for use in policy scripts. Variables entered here must have already have been set up by your Momentum administrator. For a discussion of context variables see ["Context Variables"](https://support.messagesystems.com/docs/web-ref/policy.context.variables.php). Adding variables to the Momentum Instructions will *not*, on its own, create them.

A Momentum instruction is added to this text box in the same way that a context variable is added. Assign a value to a key in the following way: `key=value`.

Variables entered here show up in the Momentum Instructions frame when adding or editing a campaign or mailing.

The Momentum Instructions can also be set in a campaign or a mailing.

### 11.1.4. Unique Key Fields

The Unique Key Fields defines one or more key fields for uniquely identifying the recipients associated with a specific org. The default values that make up the unique key are `localpart` and `domain`.

If the existing key fields do not match data that you wish to import into Message Central, you can redefine the key fields. This is a task that is typically performed shortly after installation.

**Do Not Change the Unique Key**

Once you have defined the unique key for an org *do not change it* . If you import recipients, change an org's unique key and then import recipients again it is possible to duplicate recipients. When updates are performed, there is no way of knowing which record will be updated with the new information.

### Warning

You cannot use `email` as the unique key for an org. Use `localpart` and `domain` instead. You can use any other combination of fields that uniquely identify a recipient. For a list of fields see [Section 6.1.2, “Adding Recipients”](mc3-recipients.php#mc3-recipients-adding "6.1.2. Adding Recipients"). Any recipients added to an org must have these key fields defined.

Note that the key fields defined through the web UI do not constitute database constraints. However, recipients that do not possess the unique key fields defined for an org cannot be added through the web UI, either directly or by importing a file. Nor can they be added using the REST API or the `load_contacts_db.pl` script.

### 11.1.5. Adding an Org

You can add an org exactly as described in the preceding sections. Once you have added an org, the next time that you log in to the web UI, a page with a drop-down list box of orgs appears after you have logged in. On this page you must choose which org you wish to manipulate.

**New Orgs and High Volume Mailings**

When a large volume of API-triggered mailings are running the system may be unable to create a new Org. If there is a pressing need to create a new Org and you cannot wait till the mailings finish, you can temporarily bring down the system.

Do this by shutting down the pe2sched process on the database node using the command **`/etc/init.d/pe2sched stop`**      . Also shutdown all instances of the pe2mgr processes on all of the generator nodes by issuing the command **`/etc/init.d/pe2mgr stop`**      .

Wait 5-10 minutes for generator and database activity to stop. Log in to the web UI and attempt to create the new Org. After this, restart the processes in reverse order using the commands, **`/etc/init.d/pe2mgr start`**        and **`/etc/init.d/pe2sched start`**       . Any API triggers that were generated during the maintenance window are not lost and will be processed.

| [Prev](mc3-custom.php)  |   |  [Next](mc3-administration-users.php) |
| Chapter 10. Custom Apps  | [Table of Contents](index.php) |  11.2. Users |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)