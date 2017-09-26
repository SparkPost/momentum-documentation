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

| 3.12. Configuring for SMS |
| [Prev](mc-post-installation.enabling.imd.php)  | Chapter 3. Post-installation Tasks |  [Next](mc-post-installation.second.generator.php) |

## 3.12. Configuring for SMS

As of Message Central 3.7 it is possible to use the REST API to send SMS messages. In order to do this you must configure your `ecelerity.conf` file as described in [SMPP Configuration Best Practices](https://support.messagesystems.com/docs/web-mobility/mobility.best.practices.php).

You can create content as before using the /v1.0/content API but to send MCMT content requires using the new REST APIs. For more information about these fields see [Contentv37](https://support.messagesystems.com/docs/web-mc-rest/rest.Contentv37.php) and [recipient](https://support.messagesystems.com/docs/web-mc-rest/rest.autogen.struct.recipient.php).

### Note

Regardless of which content API you use, you must to set the smsContact field of the recipient object. Do this using the REST API or when loading contacts using [load_contacts_db.pl](load_contacts_db.php "load_contacts_db.pl").

In order for recipients to receive SMS messages, the `smsSubscribed` field of a recipient must also be set to `t`.

There are also Lua files that must be referenced and changed in order to send SMS messages via Message Central. These files are found in the `/opt/msys/ecelerity/libexec/scriptlets/msys/mc/` directory and are as follows:

*   `routing.lua` – A script that determines whether the message should be routed as an SMS message

*   `routing_rules.lua` – This file specifies a default SMS routing domain

*   `sample_custom_routing_rules.lua` – This optional file overrides the settings of the `routing_rules.lua` file. If only one SMS routing domain is required and it is configured in `ecelerity.conf` file, then this file is not needed at all.

The `routing.lua` file checks the routing rule(s), checks the mc_sms_contact and mc_sms_subscribed context variables that are created by the generator and determines the routing domain for the message. You do not need to make any changes to this file. You simply need to reference it from the scriptlet module as shown in [Example 3.5, “Configuring the scriptlet module”](mc-post-installation.sms.php#mc-post-installation.sms.example "Example 3.5. Configuring the scriptlet module").

You should configure the routing domain in `ecelerity.conf` first; then just replace the "your_default_sms_routing_domain.con" with the routing domain defined there. The snippet below shows the option that needs changing:

<a name="mc-post-installation.sms.routing_rules"></a>

**Example 3.3. routing_rules.lua**

```
Rules = {
  ["0-0"] = {
    configuration = {
      sms_routing_domain = "your_default_sms_routing_domain.com",
    },
  },
};
```

`Rules` is a Lua table keyed by *`orgid`*-*`mailingid`*. The element with the key `0-0` holds the "default" rules. The recommended best practice is to configure a default SMS routing domain in this file and all other rules, if required, in a custom file created using the `sample_custom_routing_rules.lua` file.

Change this file by setting `your_default_sms_routing_domain.com` to a value suitable to your circumstances. After changing this file leave it in the `/opt/msys/ecelerity/libexec/scriptlets/msys/mc/` directory.

If your circumstances require per-org or per-mailing routing rules then configure a `custom_rules.lua` file. The Lua table used for configuring custom rules has the same structure as the table used in the `routing_rules.lua` file:

<a name="mc-post-installation.sms.routing_rules.custom"></a>

**Example 3.4. custom_rules.lua**

```
local rules = {
  ["1-0"] = {
    configuration = {
      sms_routing_domain = "SMSChannel2.com",
    }
  },
  ["1-1"] = {
    configuration = {
      sms_routing_domain = "SMSChannel1.com",
    },
  },
  ["1-2"] = {
    configuration = {
      sms_routing_domain = "SMSChannel2.com",
    }
  },
};
```

The `sms_routing_domain` is set for custom rules in the same way that it is set in the `routing_rules.lua` file.

Change the `sample_custom_routing_rules.lua` and save it to a directory that is under revision control, the `/opt/mys/ecelerity/etc/conf/default/myscripts` directory, for example. Commit it to the repository as described in [Best Practices for Adding Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.adding.configuration.files.php).

After changing `routing_rules.lua` and, if required, `custom_rules.lua`, reference these files from a the scriptlet module in the following way:

<a name="mc-post-installation.sms.example"></a>

**Example 3.5. Configuring the scriptlet module**

```
scriptlet "scriptlet1" {
    ...
  script "routing" {
    source = "msys.mc.routing"
  }
  # Only include the following if
  # custom rules are required
  script "custom_routing" {
    source = "/path/to/custom/rules"
  }
}
```

Creating a `script` stanza is described in detail in [scriptlet - Module](https://support.messagesystems.com/docs/web-ref/modules.scriptlet.php).

### Note

You can send SMS content using the REST API. This capability is not yet available for the web UI.

| [Prev](mc-post-installation.enabling.imd.php)  | [Up](mc-post-installation.php) |  [Next](mc-post-installation.second.generator.php) |
| 3.11. Exposing IMD Controls in the Web UI  | [Table of Contents](index.php) |  3.13. Installing an Additional Generator |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)