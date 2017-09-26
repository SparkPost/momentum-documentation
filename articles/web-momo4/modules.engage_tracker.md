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

| 71.32. engagement_tracker – HTTP Engagement Tracking |
| [Prev](modules.eleven.php)  | Chapter 71. Modules Reference |  [Next](modules.event_hydrant.php) |

## 71.32. engagement_tracker – HTTP Engagement Tracking

**Configuration Change. ** For version 4.1 and earlier, metadata is included in open tracking only. As of version 4.1-HF4, metadata can also be included in click tracking based on the `click_tracking_include_metadata` option.

The engagement_tracker module handles the creation of open-tracked and click-tracked links and the corresponding parsing of the links when an open or click event occurs. When open tracking is enabled, the engagement_tracker module constructs an open-tracked link from the transmission-level and recipient-level data. Likewise, when click tracking is enabled, it constructs a click-tracked link from the target link, link name, transmission-level data, and recipient-level data. When a recipient opens an email or clicks a link within the email, this module parses the tracked URLs for this data to be used by the various reporting options.

### 71.32.1. Configuration

The [msg_gen](modules.msg_gen.php "71.48. msg_gen – Message Generation") module requires the engagement_tracker module and will autoload it in the `msg_gen.conf` file that is created during installation. The following is the default configuration:

<a name="modules.engage_tracker.configuration.example"></a>

**Example 71.59. engage_tracker Configuration**

```
engagement_tracker {
  click_tracking_include_metadata = "true"
  max_metadata_len = 1000
}
```

The following are the configuration options defined by this module:

<dl class="variablelist">

<dt>click_tracking_include_metadata</dt>

<dd>

Determines if metadata is included in the click-tracked links for engagement tracking. By default, metadata is included, i.e.: `"true"`. To disable metadata in the tracked links set the option to `"false"`.

Whether metadata is included depends on the setting at the time Momentum sent the message, i.e.: If this option is set to include metadata in click tracking but later changed to disable metadata, messages sent while metadata was enabled will still include metadata when parsed.

</dd>

<dt>max_metadata_len</dt>

<dd>

The maximum amount of metadata bytes that will be encoded into click and open tracking URLs and provided in click and open events. Defaults to 1000 bytes.

**Configuration Change. ** This option is available as of Momentum 4.2.

</dd>

</dl>

### Note

Metadata can be included in click tracking for messages injected using SMTP and REST. The setting of the `click_track_include_metadata` and `max_metadata_len` options applies to both types of messages.

| [Prev](modules.eleven.php)  | [Up](modules.php) |  [Next](modules.event_hydrant.php) |
| 71.31. eleven – Eleven eXpurgate Content Scanning  | [Table of Contents](index.php) |  71.33. event_hydrant – Message Tracking |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)