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

| 20.2. `msg_gen.conf` File |
| [Prev](http_listener.php)  | Chapter 20. Configuring Inbound Mail Service Using HTTP |  [Next](auth.php) |

## 20.2. `msg_gen.conf` File

The `msg_gen.conf` file contains the configuration relevant to message generation. This file is included from within `ecelerity.conf`.

### Warning

Restart the ecelerity process if you make any changes to the `msg_gen.conf` file. Running the **`config reload`**         command will not suffice.

The following is an example `msg_gen.conf` file:

<a name="conf.ref.msg_gen.conf.example"></a>

**Example 20.1. msg-gen.conf**

```
httpsrv { }
HTTP_Listener {
  Listen ":2081" {}
}
substitution_engine {}

scriptlet "scriptlet" {
  script "rest_templates" { source = "msys.rest.templates" }
  script "rest_users" { source = "msys.rest.users" }
  script "rest_transmissions" { source = "msys.rest.transmissions" }
  script "open_track" { source = "msys.rest.open_tracker" }
  script "click_tracker" { source = "msys.rest.click_tracker" }
}
# One entry for each Platform node
cassandra_client {
  uri = ("name=cassandra_db;host=192.168.1.204;port=9160"
         "name=cassandra_db;host=192.168.1.206;port=9160")
}

engagement_tracker {}

msg_gen {
  engagement_tracking_host = "example.com:81"
  cluster_cfg = true
  quorum = 2
  # a node stanza for each Platform node
  node node1.lan {
    mta_id = 1
    votes = 1
  }
  node node2.lan {
    mta_id = 2
    votes = 1
  }
}
```

For a discussion of scopes and fallbacks, see [Section 15.3, “Configuration Scopes and Fallback”](ecelerity.conf.fallback.php "15.3. Configuration Scopes and Fallback").

For a summary of all the non-module specific configuration options, refer to [Chapter 66, *Configuration Options Summary*](config.options.summary.php "Chapter 66. Configuration Options Summary") .

Modules and their configuration options are discussed in the [Chapter 71, *Modules Reference*](modules.php "Chapter 71. Modules Reference") .

The following are the modules configured in the `msg_gen.conf` file:

<dl class="variablelist">

<dt>cassandra_client</dt>

<dd>

This module configuration includes a `uri` entry for each Platform node in your cluster. Do not change this setting.

</dd>

<dt>engagement_tracker</dt>

<dd>

This module handles the creation of open-tracked and click-tracked links and the corresponding parsing of the links when an open or click event occurs. See [Section 71.32, “engagement_tracker – HTTP Engagement Tracking”](modules.engage_tracker.php "71.32. engagement_tracker – HTTP Engagement Tracking").

</dd>

<dt>HTTP_Listener</dt>

<dd>

To use the REST API, this listener module must be loaded. By default, the HTTP_Listener listens on port 2081\. See [Chapter 20, *Configuring Inbound Mail Service Using HTTP*](http_listener.php "Chapter 20. Configuring Inbound Mail Service Using HTTP") .

</dd>

<dt>httpsrv</dt>

<dd>

To use the REST API, this HTTP server infrastructure module must be loaded. See [Section 71.38, “httpsrv – HTTP Server”](modules.httpsrv.php "71.38. httpsrv – HTTP Server").

</dd>

<dt>msg_gen</dt>

<dd>

Handles message generation. See [Section 71.48, “msg_gen – Message Generation”](modules.msg_gen.php "71.48. msg_gen – Message Generation").

</dd>

<dt>scriptlet</dt>

<dd>

The scriptlet module defined in `msg_gen.conf` supplements the scriptlet module defined in `ecelerity.conf`. The various `script` scopes point to the scripts needed to support message generation. Note that the scriptlet module instance name, `scriptlet`, is the same as the scriptlet instance name in the `ecelerity.conf` file. All instances of the scriptlet module must use the same instance name. For more information, see [Section 71.60, “scriptlet - Lua Policy Scripts”](modules.scriptlet.php "71.60. scriptlet - Lua Policy Scripts").

</dd>

<dt>substitution_engine</dt>

<dd>

This module handles substitution in the templates. It has no configuration options.

</dd>

</dl>

| [Prev](http_listener.php)  | [Up](http_listener.php) |  [Next](auth.php) |
| Chapter 20. Configuring Inbound Mail Service Using HTTP  | [Table of Contents](index.php) |  Chapter 21. Enforcing REST API/UI User Authentication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)