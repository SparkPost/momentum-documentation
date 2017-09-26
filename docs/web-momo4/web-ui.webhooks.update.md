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

| 60.4. Updating Your Webhook |
| [Prev](web-ui.webhooks.test.php)  | Chapter 60. Managing Your Webhooks in the UI |  [Next](web-ui.webhooks.delete.php) |

## 60.4. Updating Your Webhook

You can edit any configuration option of an existing webhook. From the Webhooks tab, click the icon in the upper-right corner of the webhook you want to update. In the list, click Edit Configuration, as shown in [Figure 60.7, “Update Webhook”](web-ui.webhooks.update.php#figure_update_webhook "Figure 60.7. Update Webhook").

<a name="figure_update_webhook"></a>

**Figure 60.7. Update Webhook**

![Update Webhook](images/update_webhook.png)

Make your changes in the Edit Webhook form, as shown in [Figure 60.8, “Edit Webhook”](web-ui.webhooks.update.php#figure_edit_webhook "Figure 60.8. Edit Webhook"), and then click Update.

<a name="figure_edit_webhook"></a>

**Figure 60.8. Edit Webhook**

![Edit Webhook](images/edit_webhook.png)

If the webhook successfully updates, a message will briefly display upon return to the Webhooks tab. Batches currently queued for delivery to this webhook will not be affected by these modifications. For example: If you change the webhook’s target URL, batches already queued for delivery will still be posted to the previous URL.

Also if you update the target URL, a test POST will be sent to the URL for validation, as described in [Section 60.2, “Creating a Webhook”](web-ui.webhooks.create.php "60.2. Creating a Webhook").

| [Prev](web-ui.webhooks.test.php)  | [Up](web-ui.webhooks.php) |  [Next](web-ui.webhooks.delete.php) |
| 60.3. Testing Your Webhook  | [Table of Contents](index.php) |  60.5. Deleting a Webhook |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)