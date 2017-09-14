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

| Chapter 5. Message Scope Web UI |
| [Prev](msc.postgres.log.file.php)  |   |  [Next](msc.ui.search.https.php) |

## Chapter 5. Message Scope Web UI

**Table of Contents**

<dl class="toc">

<dt>[5.1\. Search](msc.ui.php#msc.ui.search)</dt>

<dt>[5.2\. The Clicktrack Server and HTTPS](msc.ui.search.https.php)</dt>

<dt>[5.3\. Adding a Message to a List](msc.ui.flag.message.php)</dt>

<dt>[5.4\. Remediation](msc.ui.remediation.php)</dt>

<dt>[5.5\. Exports](msc.ui.exports.php)</dt>

<dt>[5.6\. Overview](msc.ui.roles.overview.php)</dt>

<dt>[5.7\. Managing Users](msc.ui.add.users.php)</dt>

<dt>[5.8\. Roles & Permissions](msc.ui.roles.php)</dt>

</dl>

The primary purpose of the web interface is to allow authorized users to search for a given message based on a minimum number of required fields and display the search information gathered by the data collection portion of the system.

The Message Scope web UI is used to query the logs created by the Message Scope module, create remediation lists and create and maintain user access to the web UI.

Log in to the Message Scope web UI by pointing your browser at the machine that hosts the Message Scope web console. If this is the first time you have logged in to Message Scope, use the admin credentials created during installation. You should see the following menu options:

<a name="figure_menu"></a>

**Figure 5.1. Menu**

![Menu](images/menu.jpg)

*Note*: Message Scope supports Firefox 3.6 and higher on Mac and Windows. Internet Explorer 8 and higher is also supported.

Regular, non-administrative users—users assigned the `User` role—can only use the web UI for searches. No administrative menu options are available for users assigned this role other than the MY ACCOUNT option used for changing one's password.

### Note

If, for security purposes, you wish to set an idle timeout for the Message Scope web UI, you can do this by editing the line `session.gc_maxlifetime=N` to the `/opt/msys/scope/www/config/httpd.conf` file. The value `N` indicates seconds; substitute a reasonable value. In order for this to take effect you must restart the webconsole process by issuing the command **`/etc/init.d/mscwebconsole restart`**         .

## 5.1. Search

Upon successfully logging in, users are immediately taken to the SEARCH page. You should see a screen similar to the following:

<a name="figure_search"></a>

**Figure 5.2. Search**

![Search](images/search.jpg)

### Note

The search criteria may vary depending upon a user's role. For more information see [Section 5.6, “Overview”](msc.ui.roles.overview.php "5.6. Overview"). Messages that pass through Momentum may take up to ten minutes to appear in the Message Scope web UI.

If you find that searches time out and you see an error such as `Could not connect to server '127.0.0.1'.` consider increasing the `nofile` option (the maximum number of open files) in `limits.conf` (the configuration file for the pam_limits module) and culling old data.

Choose one of the following criteria from the drop down list box:

*   To Header

*   From Header

*   Subject

*   SMS Contents

*   Date/Time

*   Event Type

*   Binding

*   Binding Group

*   Pathway

*   Pathway Group

*   Source IP Address

*   Destination IP Address

*   Spool ID

*   Batch ID

*   Connection ID

*   Message ID Header

*   RCPT TO Local Part

*   RCPT TO Domain

*   MAIL FROM Local Part

*   MAIL FROM Domain

*   Destination Short/Long Code

*   Originating Short/Long Code

*   Device Type

*   Subcluster

*   Final Rule Field

*   Thread ID

*   SMTP Remote Response

*   SMPP Remote Response

*   ExampleSearchFilterLabel

### Note

Criteria are not case-sensitive. Searching for `person@example.com` returns the same results as searching for `Person@example.com`.

Most criteria are self-explanatory. Those requiring explanation are discussed below.

**SMS Content. ** Short Message Service (SMS) message are text messages. This search criterion is only applicable if you are using Mobile Momentum.

**ExampleSearchFilterLabel. ** This is an example of a custom search filter. For more information see [Appendix A, *The APIs for adding Custom Behavior*](msc.custom.behavior.php "Appendix A. The APIs for adding Custom Behavior") .

**Originating Short/Long Code. ** This criterion applies to Short Message Peer-to-Peer Protocol (SMPP) messages only. It can be either a long or a short code. A long code is a normal length phone number and a short code is a short telephone number—the type of numbers often associated with voting via text message. The same applies to `Destination Short/Long Code`.

**Final Rule. ** The final rule field is stored in a validation context variable with the name `msc_final_rule`. Its intended use is to capture an identifier that represents the final ruling on the message. For example, if the Momentum server rejected the message, this might indicate that an RBL was triggered and the variable would contain the name of the RBL, the pertinent key field that was looked up against the RBL and the text associated with that RBL record. The system makes a best effort at automatically populating this field if it is not explicitly set by the site policy.

**Event Type. ** For a list of the different event types see [Section 3.3, “Logging SMTP Events”](msc.log.smtp.events.php "3.3. Logging SMTP Events").

**Device Type. ** The only device type currently applicable is `Momentum`.

**Advanced Search. ** You can initiate an advanced search using the Lucene query language. The syntax is described in [Chapter 7, *Advanced Search Syntax*](msc.lucene.query.php "Chapter 7. Advanced Search Syntax") . Only the admin type user has this search permission by default. You can add this permission to other roles as described in [Section 5.8, “Roles & Permissions”](msc.ui.roles.php "5.8. Roles & Permissions").

You can search on as many as four criteria. Use the Add another parameter link if you wish to further refine your search. An example follows:

<a name="figure_search_criteria"></a>

**Figure 5.3. Search criteria**

![Search criteria](images/search_criteria.jpg)

Use the Start Over button to clear existing criteria.

To improve response time it is strongly recommended that you always specify a date range when performing a search.

### 5.1.1. Search Results

After choosing appropriate criteria, initiate a search by clicking the Search button. A list of messages matching the criteria is returned, with pagination if the list is long. High level information is displayed showing the most recent messages first as indicated by the following image:

<a name="figure_search_results"></a>

**Figure 5.4. Search results**

![Search results](images/search_results.jpg)

If your search returns a large number of pages the application may hang while processing results. This is a limitation of any web application. To avoid this issue narrow the criteria used in your search. For example, search using a more limited time frame.

### Note

If you have configured multiple ingestors, when a search is executed from the web UI, the search request is sent to the msc_server process on any one of the ingestor nodes. This node searches the local datastore and then forwards the request to the remaining ingestor nodes. After the remaining nodes have finished searching, results are sent back to the original ingestor node. This node does not sort results and simply forwards the data to the web UI; The results from an individual node are sorted but the aggregated results are not. Consequently, when paging through the results in the web UI items won't necessarily be in temporal sequence.

Information is **not** replicated across ingestor nodes. There **will** be missing data if a single ingestor node goes down.

Mousing over truncated data activates a tool tip that exposes all the data in the cell.

If search results exceed a page, you can page through them using the buttons on the right immediately above the column headers. You can adjust the number of results per page using the per page drop-down list box.

At the bottom is a check box that enables you to act on all messages. Use this check box when you want to add all messages to a remediation list or export all messages.

Move the mouse over a message to highlight it. Clicking a message displays message details and history:

<a name="figure_search_detail"></a>

**Figure 5.5. Search detail**

![Search detail](images/search_detail.jpg)

Use the Add To List to add a message to a remediation list. Doing this is described in the following section.

The list box to the right of the Add To List button has the following options:

*   Act on all *`number`* Messages

*   Add to list

*   Export

Use the `Export` option to download message details in JSON format. For a description of the format see [Appendix B, *Export Files*](msc.export.format.php "Appendix B. Export Files") . If you create a large export file, you can continue to use the web UI while this file is being created. For more information see [Section 5.5, “Exports”](msc.ui.exports.php "5.5. Exports").

| [Prev](msc.postgres.log.file.php)  |   |  [Next](msc.ui.search.https.php) |
| 4.5. The PostgreSQL Log File  | [Table of Contents](index.php) |  5.2. The Clicktrack Server and HTTPS |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)