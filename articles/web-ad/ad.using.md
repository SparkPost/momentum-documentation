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

| Chapter 2. Implementing Adaptive Delivery |
| [Prev](ad.scope.php)  |   |  [Next](ad.adaptive.rules.php) |

## Chapter 2. Implementing Adaptive Delivery

**Table of Contents**

<dl class="toc">

<dt>[2.1\. Setting up Adaptive Delivery](ad.using.php#ad.adaptive.setup)</dt>

</dl>

AD is implemented using the adaptive module along with other Momentum modules. These modules are as follows:

*   scriptlet – adaptive response rules are implemented using Lua so this module must be enabled

*   alerting – this module provides notification when adaptive actions are taken and it is also required when the scriptlet module is loaded

*   inbound_audit – as well as collecting delivery statistics for AD sweep rules, this module facilitates communication between nodes in a cluster and is used by Adaptive Rules

*   cluster (the `replicate "metrics"` stanza) – this ensures that metrics are visible across a cluster

*   fbl – this is not a requirement but if you want sweep rules to respond to feedback loops, this module must be activated

*   bounce_classifier_override – this is not a requirement but if you want AD to respond to bounces, this module must be activated

You can fine tune AD to meet your specific needs by setting configuration options in different scopes. The non-module options listed in [Appendix A, *Adaptive Options*        ](ad.options.php "Appendix A. Adaptive Options") are valid in global, binding_group, binding and domain scopes. These different scopes make it possible to apply specific configurations to all domains, to groups of domains or only to a specific domain. For discussion of the binding scope see [binding](https://support.messagesystems.com/docs/web-ref/conf.ref.binding.php) and follow the links at the bottom of that page.

### Note

When using bindings with AD, use DuraVIP™ bindings to help reduce possible overhead due to transfers between nodes. For more information see [DuraVIP™: IP Fail over](https://support.messagesystems.com/docs/web-ref/cluster.config.duravip.php).

## 2.1. Setting up Adaptive Delivery

To use AD perform the following steps:

1.  Ensure that your license file is enabled for Adaptive Delivery.

2.  During installation, enable "AD Rules Update". For more information see [Adaptive Delivery Rule Updates](https://support.messagesystems.com/docs/web-ref/install.additional.packages.php#install.additional.packages.adaptive.updates).

3.  Add the following to your ecelerity configuration file:

    <a name="ad.adaptive.setup.example"></a>

    **Example 2.1. Sample adaptive setup**

    ```
    adaptive_enabled = true
    adaptive {
      # set the debug level for log information
      debug_level = info
    }
    # Add the Lua adaptive rules script
    scriptlet "scriptlet" {
      script "adaptive" {
        source = "msys.adaptive"
      }
      # The following script stanza loads default scripts to
      # support enhanced control channel features
      # and is part of the default configuration
      script "boot" {
        source = "msys.boot"
      }
    }
    alerting {}
    inbound_audit {
      monitors = ("300,6")
    }
    # Datasource for use with bounce classifier
    datasource "my_sqlite" {
      uri = ( "sqlite:/path/to/db" )
    }
    # Use bounce classifier for bounce sweep rules
    # and for custom bounce codes
    bounce_classifier_override {
      user_smtp_classification_override =
        ":datasource:my_sqlite:SELECT domain, bounce_code, rule FROM overrides;"
      refresh = 900
      custom_classes = [
        99 = "profanity"
      ]
    }
    # Use fbl for fbl sweep rules
    fbl {
      auto_log = true # default is "false"
      addresses = ( "^.*@fbl.foo.com" ) # default is unset
      user_string = "%{vctx_mess:my_context_variable}" # default is unset
    }
    ```

    The alerting module should already be declared in your configuration file and the `adaptive_enabled` must be set to `true` in order for the adaptive module to function. In the example above it is set to `true` in a global scope. Disable it in other scopes if required. Sometimes it is simpler to set `adaptive_enabled` to `true` in specific scopes and disable it in the global scope. Follow whichever method suits your circumstances. For instructions on making configuration changes manually see [Best Practices for Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php).

4.  To enable adaptive rules you must add a `script` stanza to the scriptlet module and point to the `adaptive.lua` file. The scriptlet module should already exist so you need only add the new script scope that sets the `source` to `msys.adaptive`. This is discussed in detail in [Chapter 3, *Adaptive Rules*](ad.adaptive.rules.php "Chapter 3. Adaptive Rules") .

    Adaptive delivery provides many options that are intended to be placed in `domain` and/or `binding` stanzas. You can manually configure these options instead of using adaptive rules. These options are shown in [Table A.2, “adaptive options”](ad.options.php#adaptive-options-table "Table A.2. adaptive options").

5.  If you wish to use bounce sweep rules you must add the bounce_classifier_override module to your configuration. You can also assign custom codes to specific bounces and send alerts based on these custom codes, but this is not a requirement. Likewise, add the feedback loop module to enable feedback loop sweep rules.

6.  If you have made the changes manually, be sure to apply them by issuing the **config reload**        command on the system console (or by restarting the ecelerity process).

7.  Set adaptive options in the appropriate scope. For a complete list of the options that affect the adaptive module see [Appendix A, *Adaptive Options*](ad.options.php "Appendix A. Adaptive Options") .

    Alerting statistics (used by sweep rules) are implemented using replicated named audit series. For this reason the inbound_audit module must be configured. This module is described in the [inbound_audit Module](https://support.messagesystems.com/docs/web-ref/modules.inbound_audit.php).

8.  Add the following `replicate "metrics"` stanza to your cluster module configuration. Typically this module is configured in the `ecelerity-cluster.conf` file.

    ```
    cluster {
      ...
      replicate "metrics" {
        parameters="audit_series"
      }
    }
    ```

    The `metrics` replication stanza maintains cluster-wide, time-series views of the status of adaptive parameters across the cluster.

    For more information about replication and the cluster module See [Data Replication](https://support.messagesystems.com/docs/web-ref/cluster.config.replication.php).

9.  If your bindings have established a good reputation, you should use the **adaptive warmup *`binding`* [*`age`*]**                              command to inform AD how old each binding is, so that it doesn't scale back your shaping parameters for IP Warmup. For more information about the adaptive system console commands see [adaptive Management using System Console Commands](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.console).

10.  Configure sweep rules. This topic is discussed in [Chapter 7, *Sweep Rules – Configuring Bounce and FBL Behavior*](ad.rules.sweep.rules.php "Chapter 7. Sweep Rules – Configuring Bounce and FBL Behavior") .

### Note

The adaptive module only takes action if there is a default value for a specific setting. The default value can be specified in either the `ecelerity.conf` file or the `adaptive_rules.lua` file (or your own custom Lua file). If no default value is defined, no action is taken. The `adaptive_rules.lua` file is discussed in [Chapter 4, *Custom Rules*](ad.custom.rules.php "Chapter 4. Custom Rules") .

| [Prev](ad.scope.php)  |   |  [Next](ad.adaptive.rules.php) |
| Chapter 1. What Does Adaptive Delivery Do?  | [Table of Contents](index.php) |  Chapter 3. Adaptive Rules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)