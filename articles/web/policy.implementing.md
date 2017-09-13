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

| 5.2. Implementing Policy Using Sieve |
| [Prev](policy.validation.php)  | Chapter 5. Implementing Policy with Momentum |  [Next](policy.context-based-on-ip.php) |

## 5.2. Implementing Policy Using Sieve

Implementation of your site policy is a matter of loading and configuring the appropriate modules via `ecelerity.conf`, and, optionally, using the sieve module to make decisions based on the validation context. A number of the available modules predate the sieve module, and can be configured to either take an active role in the validation process, or to simply store the processing results in the validation context.

The advantage of allowing a module to perform unilateral validation is that the Momentum configuration is restricted to just the one `ecelerity.conf` file, making it conceptually a lot simpler to configure Momentum. The trade off is simplicity versus flexibility; we recommend that larger sites deploy the modules in a passive configuration and leave the final policy decisions to scripts implemented in Sieve. The passive option may be used with all modules. However, the effect that 'passive' has on modules differs on a module by module basis. For some modules, it will have no effect. But, the idea is that validation modules loaded in passive mode will **not** have their validation hooks called automatically. Rather, the calls will be driven by a Sieve action associated with the module. For example, the Sieve action 'antivirus' will drive the antivirus modules such as the 'clamav' module. The rest of this chapter assumes that you are deploying such modules in a passive configuration.

Once you have selected the modules that you want to use you need to configure the sieve module to run your Sieve script. For example, if you're using the url_ripper module to examine the bodies of messages, you need to write a Sieve script that will run in the data phase, after the url_ripper has run. You'll want to configure `ecelerity.conf` as shown in [Example 5.1, “Configuring the url_ripper for use with Sieve”](policy.implementing.php#policy.configure.sieve "Example 5.1. Configuring the url_ripper for use with Sieve").

<a name="policy.configure.sieve"></a>

**Example 5.1. Configuring the url_ripper for use with Sieve**

```
Validate validate/policy_tools url_ripper {
  base = "multi.surbl.org"
  checklist_suppress_hostnames = "ur_suppress_addresses"
  checklist_suppress_ips = "ur_suppress_ips"
  bits [
    # RBL hits are compared against this mapping, causing
    # the right hand side of the following statements to be
    # set in the validation context if the bits on the left
    # hand side are set.
    0.0.0.1 = "list1_hits"
    0.0.0.2 = "list2_hits"
    0.0.0.4 = "list3_hits"
    0.0.0.8 = "list4_hits"
    0.0.0.16 = "list5_hits"
    0.0.0.32 = "list6_hits"
    0.0.0.64 = "list7_hits"
    0.0.1.0 = "list8_hits"
  ]
  values [
    127.0.0.2 = "simple_hits"
  ]
  address_headers = Return-Path:From:Sender:Reply-To:Errors-To
}

# You almost always want to list the sieve module as the very last
# validation module in your ecelerity.conf, so that the other modules
# run before it
Validate validate/sieve sieve {
  data_phase1 = /opt/ecelerity/etc/site/my-data.siv
}
```

### Note

The `checklist_suppress_hostnames` and `checklist_suppress_ips` option are dependent upon the `checklist` module which is deprecated. Replace the checklist module with Sieve datasource functions. For more information see [Section 14.25, “ds_core – Datasource Query Core”](modules.ds_core.php "14.25. ds_core – Datasource Query Core").

This configuration will run the url_ripper module after the message body has been received, and look up all the URLs from the message and check them against the configured RBL. Once that is complete, the sieve module will then run the Sieve script contained in `/opt/ecelerity/etc/site/my-data.siv` . [Example 5.2, “An Example Sieve Policy for the Data Phase”](policy.implementing.php#policy.example.sieve.data.script "Example 5.2. An Example Sieve Policy for the Data Phase") demonstrates a sample site policy.

<a name="policy.example.sieve.data.script"></a>

**Example 5.2. An Example Sieve Policy for the Data Phase**

```
if vctx :contains "list1_hits" "" {
  # we found URLs or IP addresses that match 0.0.0.1 (list1)
  # For this example, we decide that we don't want the spam mail
  # so we're going to reject it, but first, we're going to retaliate
  # against the offender by imposing a time cost.
  # ec_tarpit causes the connection to be put on hold for a while
  # (60 seconds), which is a cheap operation for Momentum, but is comparatively
  # expensive for a spammer.
  ec_tarpit 60 "spam:list1 tarpit";
  # after the tarpit time limit expires, we'll reject the mail
  ec_action 550 "5.7.1 reject content [list1]" "spam:Known Spam Source";
}

# similar actions can be taken on the other lists configured:
if vctx :contains "list2_hits" "" {
  ec_tarpit 60 "spam:list2 tarpit";
  ec_action 550 "5.7.1 reject content [list2]" "spam:Known Spam Source";
}

# and so on
```

This example makes use of the Sieve counter mechanism to keep track of how you're handling mail. The first call to `ec_tarpit` uses `spam:list1 tarpit` as the counter name. This event is counted by Sieve as an informational event. The `ec_action` call counts the event as a rejection. You can view the current counters by issuing **sieve stats**       via **ec_console**.

The convention for naming counters is to use a short category name, followed by a colon character, followed by a more descriptive name. The web console graphical interface uses counters named in this way to present a pie chart based on the short category name, so that you can see at a glance what proportions of mail are being rejected as spam, virus and so on.

| [Prev](policy.validation.php)  | [Up](policy.php) |  [Next](policy.context-based-on-ip.php) |
| 5.1. Validation and the Validation Context  | [Table of Contents](index.php) |  5.3. Setting Context Based on Connecting IP |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)