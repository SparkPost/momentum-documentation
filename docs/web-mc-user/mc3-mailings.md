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

| Chapter 5. Mailings |
| [Prev](mc3-campaign-editing.php)  |   |  [Next](mc3-mailings-adding.php) |

## Chapter 5. Mailings

**Table of Contents**

<dl class="toc">

<dt>[5.1\. Mailing Controls](mc3-mailings.php#mc3-mailings-controls)</dt>

<dt>[5.2\. Creating a Mailing](mc3-mailings-adding.php)</dt>

<dt>[5.3\. Editing a Mailing](mc3-mailings-editing.php)</dt>

</dl>

To manipulate mailings, choose the MAILINGS menu. Typically, the following tasks precede the creation of a mailing:

*   Adding recipients

*   Adding a campaign

*   Creating content

*   Creating lists / segments and tags

When you first navigate to this page, you should see something similar to the following:

<a name="figure-mailings"></a>

**Figure 5.1. Mailings**

![Mailings](images/mailings.jpg)

You can sort the data on any of the available columns. Click the "up" arrow for an ascending sort and click the "down" arrow for a descending sort.

By default the mailings page displays all existing mailings. You can limit the mailings shown using the search text box. Enter a search criterion and click the search icon to find mailings by name or description.

You can also limit your search by using the FILTER button. The following filters are available:

*   Campaign Active

*   Edit

*   Running

*   Complete

*   Ready

*   Archived

To view the specifics associated with a mailing, click the + button to the left of the mailing name. Doing this displays detailed information about the mailing as show below:

<a name="figure-mailing-details"></a>

**Figure 5.2. Mailing details**

![Mailing details](images/mailing_details.jpg)

The large question mark on the lower left of [Figure 5.2, “Mailing details”](mc3-mailings.php#figure-mailing-details "Figure 5.2. Mailing details") indicates that no content has yet been associated with this mailing. When content is associated, a thumbnail of that content is displayed.

You can edit a mailing by clicking on the row associated with a mailing. Editing a mailing is described in [Section 5.3, “Editing a Mailing”](mc3-mailings-editing.php "5.3. Editing a Mailing").

## 5.1. Mailing Controls

You can select one or more mailings using the check box in the leftmost column. After you have selected a mailing, you can perform the following operations:

*   Pause

    Pause a mailing that is currently running. You can pause a mailing to temporarily delay it from being sent.

    ### Note

    You cannot edit a mailing that has been paused.

    When you are ready to resume the mailing, click Run. For further information on pausing a mailing, see [Section 5.1.1, “Pausing a Mailing”](mc3-mailings.php#mc3-mailings-controls.pausing "5.1.1. Pausing a Mailing").

*   Run

    Start the mailing.

*   Duplicate

    Create a copy of the selected mailing. When duplicating a mailing, adjust the schedule of the duplicate if it conflicts with the original mailing. Otherwise it may not go out.

*   Archive

    Removes older mailings or test mailings from the user interface. Use for those mailings you no longer need to see.

    You cannot delete a mailing, only archive it.

*   Cancel

    Stops the mailing. You cannot restart it at a later point in time.

    If you cancel a recurring mailing, all instances of the mailing are cancelled.

Only applicable operations will be performed. For example, you cannot pause a mailing that is not running.

### 5.1.1. Pausing a Mailing

You can pause a mailing to temporarily delay it from being sent. This does not stop the mailing from being generated, but instead holds the generated email in the queue until you click Run, at which point delivery of the mailing resumes.

You cannot edit a mailing that has been paused. When a mailing is paused, it can be in any of six different states. You must edit a mailing before it is run - that is, before you have clicked Run on the Mailings page, or clicked Ready on a specific Mailing Overview page.

If you pause a mailing, it can take up to an hour to restart. If this is unacceptable, as a workaround you can reduce the value of the Momentum configuration option `retry_interval`. This will release the emails from the suspend queue sooner, but this can potentially have a negative impact on sending reputation. To mitigate this, you can limit the bindings used by Message Central and only reducing the `retry_interval` on those bindings. For more information about reducing the `retry_interval`, see the section ["Retry Interval" in the *Momentum Reference Manual (3.x)*](https://support.messagesystems.com/docs/web-ref/conf.ref.retry_interval.php) .

| [Prev](mc3-campaign-editing.php)  |   |  [Next](mc3-mailings-adding.php) |
| 4.2. Editing a Campaign  | [Table of Contents](index.php) |  5.2. Creating a Mailing |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)