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

| 44.2. Creating an API Key |
| [Prev](web-ui.apikeys.php)  | Chapter 44. Managing Your API Keys |  [Next](web-ui.apikeys.update.php) |

## 44.2. Creating an API Key

In the Settings section, click the New API Key icon in the upper-right corner to open the Create New API Key form, as shown in [Figure 44.3, “Create New API Key”](web-ui.apikeys.create.php#figure_create_apikey "Figure 44.3. Create New API Key").

<a name="figure_create_apikey"></a>

**Figure 44.3. Create New API Key**

![Create New API Key](images/create_apikey.png)

Enter the following information:

*   Label - User-friendly label for the API key

*   Account Password - Password for account to verify access

    Your password is required to securely authorize this addition to your account.

Grants specify the permissions assigned to the API key. Select the grant types that you want from the list displayed. It is always best practice to ONLY select the permissions that are necessary. When complete, click Create to create your new API key.

If the API key is successfully created, a message will display upon return to the Settings section showing the value of the API key.

### Note

Be sure to copy and paste the API key when it is displayed. Following the creation of an API key, you can modify its grants and associated label, but the UI will no longer expose the original value. Please take care to record and safeguard your API keys at all times.

| [Prev](web-ui.apikeys.php)  | [Up](web-ui.apikeys.php) |  [Next](web-ui.apikeys.update.php) |
| Chapter 44. Managing Your API Keys  | [Table of Contents](index.php) |  44.3. Updating an API Key |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)