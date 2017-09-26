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

| Chapter 21. Tracking Engagement for SMTP |
| [Prev](log_formats.connection.stages.php)  | Part IV. How-To Guides: Reporting and Tracking |  [Next](getting.started.engage.php) |

## Chapter 21. Tracking Engagement for SMTP

**Beta Feature. ** Engagement tracking for SMTP injections is available as beta. By default, it is disabled. If you want to enable this feature globally, contact your Technical Account Manager.

**Introduction**

Understanding how your messaging is or isn't performing is a critical factor in creating a successful campaign. Just knowing that your messages are being delivered is not enough. You need to know how your customers interact with your message content. Are your customers opening your messages? Are they clicking the links you provide? SparkPost Elite provides real-time event tracking data, enabling you to track campaigns as they are being sent and to make modifications to improve customer engagement.

Engagement describes how a recipient interacts with your message. An engagement event occurs when the recipient opens an email or clicks a link within an email. When a message is injected using SMTP, you can override the configuration setting for a specific message by specifying the attributes in an optional X-MSYS-API header.

When engagement tracking is enabled, you can also specify engagement data for the message in the X-MSYS-API header. This data is included in the tracked URLs for each message. For open tracking, SparkPost Elite inserts an open-tracked image into the message. For click tracking, SparkPost Elite converts the target link into a click-tracked link. By default, metadata is included for open and click tracking, if specified.

**Configuration Change. ** If you want to exclude metadata from click tracking, contact your Technical Account Manager.

**X-MSYS-API Header Attributes** 

The X-MSYS-API header must be a JSON object serialized as a string that holds the various attributes for the message. [Table 21.1, “X-MSYS-API Header Attributes”](getting.started.smtp_tracking.php#x-msys-api-header-table "Table 21.1. X-MSYS-API Header Attributes") lists the fields supported in the JSON object.

<a name="x-msys-api-header-table"></a>

**Table 21.1. X-MSYS-API Header Attributes**

| Field | Type | Description | Required | Notes |
| --- | --- | --- | --- | --- |
| campaign_id | string | Name of the campaign to associate with the SMTP-injected message | no | Campaign ID is available during engagement events. Maximum length is 64 bytes. |
| metadata | JSON object | JSON key value pairs associated with the SMTP-injected message | no | Metadata is available during engagement events based on your configuration. A maximum of 200 bytes is available. |
| options | JSON object | JSON object in which engagement tracking options are enabled or disabled | no | For a full description, see the Options Attributes. |
| tags | JSON object | Array of text labels associated with the SMTP-injected message | no | Tags are available during engagement events. Maximum number of tags is 10 per recipient, 100 system wide. Any tags over the limits are ignored. |

[Table 21.2, “Options Attributes”](getting.started.smtp_tracking.php#x-msys-api-options-table "Table 21.2. Options Attributes") lists the fields supported in the "options" JSON object.

<a name="x-msys-api-options-table"></a>

**Table 21.2. Options Attributes**

| Field | Type | Description | Required | Notes |
| --- | --- | --- | --- | --- |
| click_tracking | boolean | Whether click tracking is enabled or disabled for this SMTP message | no | If specified, this field takes precedence over the configuration setting. |
| open_tracking | boolean | Whether open tracking is enabled or disabled for this SMTP message | no | If specified, this field takes precedence over the configuration setting. |

**X-MSYS-API Header Line Length** 

SMTP defines a maximum line length of 1000 characters including CRLF. Since the X-MSYS-API header is a JSON-encoded string possibly containing many tags and metadata, it is likely that this limit will be exceeded. If the value of the JSON string is longer than 998 characters, it must be folded across multiple lines before the message is injected, as shown in the following example:

```
X-MSYS-API: {"options" : {"open_tracking" : false, "click_tracking" : true},
   "metadata" : {"key" : "value"}, "tags" : ["cat", "dog"], "campaign_id" :
   "my_campaign"}
```

When the header is unfolded on the receiving system, as per [rfc2822](https://www.ietf.org/rfc/rfc2822.txt), a single space will be added between each line of the header.

For example,

```
X-MSYS-API: {"options" : {"open_tracking" : false }, "campaign_id" : "my_awes
   ome_campaign" }
```

will be unfolded with a space in the `"my_awes ome_campaign"` string:

`X-MSYS-API: {"options" : {"open_tracking" : false }, "campaign_id" : "my_awes ome_campaign" }`

Ideally, header values should be folded on whitespace. To ensure whitespace is present in a JSON-encoded string in Perl, use the JSON module's `space_before` and `space_after` modifiers, as shown in the following example:

```
my $api_hash = {
  options => {
    open_tracking => JSON::false
  },
  campaign_id => "my_awesome_campaign"
};

my $js = JSON->new();
$js->space_before(1);
$js->space_after(1);

my $x_msys_api_string = $js->encode($api_hash);
```

**non-ASCII Characters in the X-MSYS-API Header** 

If non-ASCII characters are present in the `"campaign_id"`, `"tags"`, or `"metadata"` fields, they must be escaped or rfc2047-encoded.

For example,

```
my $js = JSON->new();
$js->ascii(1);
```

will cause `$js->encode` to escape non-ASCII characters resulting in a JSON-encoded string such as:

```
X-MSYS-API: {"options" : {"open_tracking" : false, "click_tracking" : true},
   "metadata" : {"my_utf8" : "\u00e7\u00a7\u0081\u00e3\u0081\u00af\u00e3\u0082\u00ac" },
   "tags" : ["cat", "dog"], "campaign_id" : "my_campaign"}
```

**Invalid JSON Values in the X-MSYS-API Header** 

If the X-MSYS-API header includes invalid JSON values, the SMTP message will be rejected with one of the following codes:

<a name="x-msys-api-error-table"></a>

**Table 21.3. SMTP Error Codes**

| Code | Examples |
| --- | --- |
| 550 | 

5.6.0 X-MSYS-API 'metadata' must be of type 'json object'

5.6.0 smtpapi_campaign_id context is limited to 64 bytes

 |
| 421 | 

4.3.3 [internal] smtpapi unable to generate unique transmission id

 |

**Escaping {{ and }} in SMTP Message Body** 

Since SparkPost Elite inserts open-tracked and click-tracked URLs using its substitution engine, any existing `{{` or `}}` that exist in the SMTP-injected message must be escaped. Before injection, `{{` must be replaced with `{{opening_double_curly()}}` and `}}` must be replaced with `{{closing_double_curly()}}`.

| [Prev](log_formats.connection.stages.php)  | [Up](p.reporting_tracking.php) |  [Next](getting.started.engage.php) |
| 20.7. Connection Stages  | [Table of Contents](index.php) |  Chapter 22. Tracking Engagement for HTTP |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)