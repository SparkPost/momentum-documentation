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

| Chapter 3. Creating, Modifying, and Deleting an API Key |
| [Prev](getting.started.ui.php)  | Part II. How-To Guides: Creating |  [Next](getting.started.recipients.php) |

## Chapter 3. Creating, Modifying, and Deleting an API Key

**Introduction**

SparkPost Elite offers a set of REpresentational State Transfer (REST) Application Programming Interfaces (APIs) enabling client applications to integrate with the underlying SparkPost Elite platform and perform actions associated with generating messages and reporting analytics data. To ensure security for your application, SparkPost Elite enforces authentication by default. All REST APIs require authentication with every request by specifying an `Authorization` header. The value of the `Authorization` header must be a valid API key with the appropriate permissions to use the REST API. For examples of supplying the `Authorization` header, refer to the cURL examples in the following tutorials or any of the individual REST API request examples in the [SparkPost Elite REST API](https://www.sparkpost.com/api#/reference) documentation.

### Note

For this tutorial, you will need a web browser to access the UI. The UI supports Firefox and Internet Explorer, version 9 and 10. All browsers must have cookies and JavaScript enabled.

You must also have system administration privileges.

**Creating an API Key** 

If you are the system administrator, you can generate an API key using the web-based User Interface (UI). Take care to record and safeguard your API keys at all times. You cannot retrieve an API key after it has been created.

Follow these steps to create an API key:

1.  Open the UI by pointing your web browser at the appropriate IP address and log in using your administrator credentials.

    <a name="figure_login_1"></a>

    **Figure 3.1. Login**

    ![Login](images/login.png)

2.  Click ACCOUNT in the left navigation panel to open the API & SMTP area, as shown in [Figure 3.2, “API & SMTP”](getting.started.apikey_ui.php#figure_account_icon "Figure 3.2. API & SMTP").

    <a name="figure_account_icon"></a>

    **Figure 3.2. API & SMTP**

    ![API & SMTP](images/account_icon.png)

3.  In the </> API Keys area, click NEW API KEY to open the form to create a new API key, as shown in [Figure 3.3, “Create New API Key”](getting.started.apikey_ui.php#figure_new_api_key "Figure 3.3. Create New API Key").

    <a name="figure_new_api_key"></a>

    **Figure 3.3. Create New API Key**

    ![Create New API Key](images/new_api_key.png)

    **Coming Soon. ** Relay Webhooks is a new feature that will be available soon.

4.  Enter the following information in the form: (Note: An asterisk (*) denotes the required fields.)

    *   API Key Name* - User-friendly name for the API key

    *   API Permissions* - Select all desired permissions from the list. It is always best practice to ONLY select the permissions that are necessary. To complete the examples in the following tutorials, you will need all permissions.

        API keys can access any resource you give them access to except for the user resources. This restriction is for security reasons. An API key should not be able to modify users. If your key gets loose, this restriction prevents it from being used to gain unfettered access to your system accounts.

    *   Account password* - Password for your account to verify access. Your password is required to securely authorize this addition to your account.

5.  When complete, click ADD API KEY to create your new API key. If the API key is successfully created, a message will display upon return to the </> API Keys area showing the value of the API key.

6.  Record the value of your API key to use in the following tutorials. Click the x to close the message.

    ### Note

    Be sure to copy and paste the API key when it is displayed. Following the creation of an API key, you can modify its permissions and associated name, but the UI will no longer expose the original value. Please take care to record and safeguard your API keys at all times.

**Modifying an API Key** 

You can also modify an existing API key in the UI. Note that you can only modify its permissions and associated name. You cannot modify its value.

Follow these steps to modify an existing API key:

1.  In the </> API Keys area, click the EDIT icon to the right of the API key that you want to modify, as shown in [Figure 3.4, “Modify API Key”](getting.started.apikey_ui.php#figure_modify_api_key "Figure 3.4. Modify API Key").

    <a name="figure_modify_api_key"></a>

    **Figure 3.4. Modify API Key**

    ![Modify API Key](images/modify_api_key.png)

2.  Make your changes in the form shown in [Figure 3.5, “Update API Key”](getting.started.apikey_ui.php#figure_update_api_key "Figure 3.5. Update API Key"), and then click UPDATE API KEY.

    <a name="figure_update_api_key"></a>

    **Figure 3.5. Update API Key**

    ![Update API Key](images/update_api_key.png)

3.  If the API key successfully updates, the following message will display. Click the x to close the message.

    <a name="figure_updated_api_key"></a>

    **Figure 3.6. Victory!**

    ![Victory!](images/updated_api_key.png)

**Deleting an API Key** 

If you no longer need an API Key, you can delete an existing API key in the UI.

Follow these steps to delete an existing API key:

1.  In the </> API Keys area, click the trash can icon to the right of the API key that you want to delete, as shown in [Figure 3.7, “Delete API Key”](getting.started.apikey_ui.php#figure_delete_apikey "Figure 3.7. Delete API Key").

    <a name="figure_delete_apikey"></a>

    **Figure 3.7. Delete API Key**

    ![Delete API Key](images/modify_api_key.png)

2.  A warning message will display, as shown in [Figure 3.8, “Confirm Delete”](getting.started.apikey_ui.php#figure_confirm_delete_api_key "Figure 3.8. Confirm Delete"). To confirm your request, click DELETE.

    <a name="figure_confirm_delete_api_key"></a>

    **Figure 3.8. Confirm Delete**

    ![Confirm Delete](images/confirm_delete_api_key.png)

    Deleting an API key revokes all future actions that requests with that API key will take. This is irreversible.

3.  If the API key is successfully deleted, the following message will display. Click the x to close the message.

    <a name="figure_deleted_api_key"></a>

    **Figure 3.9. Done!**

    ![Done!](images/deleted_api_key.png)

Congratulations! You have successfully created an API key using SparkPost Elite's UI and learned how to manage your existing API keys.

| [Prev](getting.started.ui.php)  | [Up](p.creating.php) |  [Next](getting.started.recipients.php) |
| Chapter 2. Using the Web-based User Interface  | [Table of Contents](index.php) |  Chapter 4. Creating Stored Recipient Lists |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)