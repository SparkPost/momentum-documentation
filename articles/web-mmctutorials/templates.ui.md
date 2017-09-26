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

| Chapter 6. Managing Templates using the UI |
| [Prev](getting.started.simple.php)  | Part II. How-To Guides: Creating |  [Next](getting.started.unsubscribe_link.php) |

## Chapter 6. Managing Templates using the UI

**Introduction**

In addition to using the Templates API, you can create and manage your templates in the web-based User Interface (UI). The UI provides a flexible, easy-to-use interface to view your templates, create new templates, preview, test, and update existing templates, publish your templates, and delete templates you no longer need.

### Note

For this tutorial, you will need a web browser to access the UI. The UI supports Firefox and Internet Explorer, version 9 and 10. All browsers must have cookies and JavaScript enabled.

**Creating a Template Using the UI** 

Follow these steps to create a template in the UI:

1.  Open the UI by pointing your web browser at the appropriate IP address and log in using your credentials. If you do not know the IP address, contact your system administrator.

    <a name="figure_login_5"></a>

    **Figure 6.1. Login**

    ![Login](images/login.png)

2.  Click TEMPLATES in the left navigation panel to open the Templates area, as shown in [Figure 6.2, “Templates”](templates.ui.php#figure_templates_icon "Figure 6.2. Templates").

    <a name="figure_templates_icon"></a>

    **Figure 6.2. Templates**

    ![Templates](images/templates_icon.png)

3.  In the Templates area, click NEW TEMPLATE to open the form to create a new template, as shown in [Figure 6.3, “Create New Template”](templates.ui.php#figure_new_template "Figure 6.3. Create New Template").

    <a name="figure_new_template"></a>

    **Figure 6.3. Create New Template**

    ![Create New Template](images/new_template_form.png)

4.  Enter the following information in the form: (Note: An asterisk (*) denotes the required fields.)

    *   Template Name* - User-friendly label for the template, only used for display

    *   ID* - Short, unique, alphanumeric ID used to reference the template when it is used in a transmission

        Note that this field is auto-filled.

    *   From Name - A friendly from for your recipients

    *   From Email* - Email address used to compose the email’s "From" header

    *   Subject* - Email "Subject" line

    *   Description - Detailed description of the template

    *   Engagement Tracking - By default, open tracking and click tracking are enabled in your configuration. You can override this setting at the template or transmission level. To override open and click tracking at the template level, click the TRACK OPENS option and/or TRACK CLICKS option under Engagement Tracking.

        ### Note

        The precedence for engagement tracking options, from highest to lowest is as follows:

        *   transmission level

        *   template level

        *   configuration setting

        For example, if click tracking is not specified at the transmission level, the TRACK CLICKS option at the template level is used. If the template level is also not specified, the configuration setting is used.

        If you want to disable engagement tracking globally, contact your Technical Account Manager.

    *   Transactional Message? - You can distinguish between transactional and non-transactional messages for unsubscribe and suppression purposes by clicking YES or NO under Transactional Message?.

    You can use substitution in the top-level header of your template (i.e. "Subject") and template content. The UI supports the same substitution features available in the API. For details about using substitution in your templates, see the Substitution Reference available at [SparkPost Elite REST API](https://www.sparkpost.com/api#/introduction/substitutions-reference). [Figure 6.4, “Template Details”](templates.ui.php#figure_template_details "Figure 6.4. Template Details") shows an example of a simple form of direct substitution in the "Subject". When the email is built, *`{{name}}`* will be replaced by the value you specify for a given recipient.

    <a name="figure_template_details"></a>

    **Figure 6.4. Template Details**

    ![Template Details](images/template_details.png)

5.  Enter your template content in the Template Content area of the form. You can enter HTML content for the email’s text/html MIME part and text content for the email’s text/plain MIME part. Select HTML or Text from the drop-down menu and type your content using the online editor. Note that you can use substitution in the message body of your template, enabling you to create personalized messages for every recipient.

    An example of HTML content is shown in [Figure 6.5, “HTML Content”](templates.ui.php#figure_html_content "Figure 6.5. HTML Content"). This example uses a simple form of direct substitution. When the email is built, *`{{name}}`* and *`{{subject}}`* will be replaced by the values you specify for a given recipient.

    <a name="figure_html_content"></a>

    **Figure 6.5. HTML Content**

    ![HTML Content](images/html_content.png)

    An example of plain text content using direct substitution is shown in [Figure 6.6, “Text Content”](templates.ui.php#figure_text_content "Figure 6.6. Text Content").

    <a name="figure_text_content"></a>

    **Figure 6.6. Text Content**

    ![Text Content](images/text_content.png)

    Click SAVE to save your template as a draft. If successful, the following message will display. Click the x to close the message.

    <a name="figure_created_template"></a>

    **Figure 6.7. Success!**

    ![Success!](images/template_created.png)

**Previewing and Testing Your Template** 

You can preview and test your template by specifying test data in the Template Content area of the form. Test data must be in the form of a JSON object of key/value pairs of recipient-specific data. Note that the test data is not saved.

Follow these steps to preview and test your template:

1.  In the Template Content area of the form, click TEST SUBSTITUTION DATA. Type your test data using the online editor. [Figure 6.8, “Test Data”](templates.ui.php#figure_test_data "Figure 6.8. Test Data") shows test data for the simple template in this example. The substituion data *John* and *simple stored template*                 will replace *`{{name}}`* and *`{{subject}}`*, respectively, in the preview of your template.

    <a name="figure_test_data"></a>

    **Figure 6.8. Test Data**

    ![Test Data](images/test_data.png)

2.  Click PREVIEW to preview the HTML content, plain text content, and top-level header substitution of your email using the UI. [Figure 6.9, “Preview Template”](templates.ui.php#figure_preview_template "Figure 6.9. Preview Template") shows a preview of the HMTL content for the Simple_Template. Notice the substitution for *`{{name}}`* and *`{{subject}}`*. Click TEXT to preview the plain text content.

    <a name="figure_preview_template"></a>

    **Figure 6.9. Preview Template**

    ![Preview Template](images/preview_template.png)

3.  Enter a To address in the Preview form, and then click SEND EMAIL to send a test email from the UI.

4.  If successful, a message will briefly appear indicating that your message is on its way. Your recipient should receive an email with your test data included in the message body.

5.  Click the x to return to the Template form.

**Modifying Your Template** 

If you need to make changes to your template, complete the following steps:

1.  Enter the changes in the Template form shown in [Figure 6.10, “Edit Template”](templates.ui.php#figure_edit_template "Figure 6.10. Edit Template"), and then click SAVE to save your changes. Note that all fields in the template can be edited with the exception of the ID.

    <a name="figure_edit_template"></a>

    **Figure 6.10. Edit Template**

    ![Edit Template](images/edit_template.png)

2.  If the template successfully updates, the following message will display. Click the x to close the message.

    <a name="figure_updated_template"></a>

    **Figure 6.11. Success!**

    ![Success!](images/updated_template.png)

**Publishing Your Template** 

Publishing a template makes the published version the default for transmissions that use the template. You can continue to use a template's draft version, if any, by specifying its use in the Transmissions API request.

Follow these steps to publish a template in the UI:

1.  In the Template form, click SAVE & PUBLISH, as shown in [Figure 6.12, “Publish a Template”](templates.ui.php#figure_save_publish "Figure 6.12. Publish a Template").

    <a name="figure_save_publish"></a>

    **Figure 6.12. Publish a Template**

    ![Publish a Template](images/save_publish.png)

2.  If the template is successfully published, the following message will display. Click the x to close the message.

    <a name="figure_published_template"></a>

    **Figure 6.13. Success!**

    ![Success!](images/published_template.png)

**Deleting a Template** 

If you no longer need a template, you can delete an existing template in the UI.

Follow these steps to delete an existing template:

1.  In the Template area, select the template that you want to delete, as shown in [Figure 6.14, “Select Template”](templates.ui.php#figure_select_template "Figure 6.14. Select Template").

    <a name="figure_select_template"></a>

    **Figure 6.14. Select Template**

    ![Select Template](images/select_template.png)

2.  In the Template form, click the trash can icon in the bottom, right corner.

3.  A warning message will display, as shown in [Figure 6.15, “Confirm Delete”](templates.ui.php#figure_confirm_delete_template "Figure 6.15. Confirm Delete"). To confirm your request, click DELETE.

    <a name="figure_confirm_delete_template"></a>

    **Figure 6.15. Confirm Delete**

    ![Confirm Delete](images/confirm_delete_template.png)

4.  If the template is successfully deleted, the following message will display. Click the x to close the message.

    <a name="figure_deleted_template"></a>

    **Figure 6.16. Success!**

    ![Success!](images/deleted_template.png)

    The `Delete` option is a "hard delete". ALL versions of the template will be deleted from the system, both published AND draft versions.

    If you delete a template DURING the build of a transmission that is currently using that template, you will get an error in the response. You must retry the delete when the template is no longer being used.

| [Prev](getting.started.simple.php)  | [Up](p.creating.php) |  [Next](getting.started.unsubscribe_link.php) |
| Chapter 5. Creating Stored Templates  | [Table of Contents](index.php) |  Chapter 7. Adding an Unsubscribe Link |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)