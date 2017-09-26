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

| Chapter 5. Sample Custom Configurations |
| [Prev](ad.custom.rules.php)  |   |  [Next](ad.adaptive.update.php) |

## Chapter 5. Sample Custom Configurations

## New Response Codes

You may come across response codes that haven't yet been integrated into the Message Systems adaptive rules file. In such cases you can customize the existing rules by adding a file. For example:

```
require('msys.adaptive')
local rules =
{
  ["hotmail.com"] =
  {
    responses =
    {
      {
        code = "421 PR\\((dt1|ct1)\\)",
        trigger = "1",
        action =  {"throttle", "down"},
        phase = "connect",
      },
      {
        code = "421 RP-00[123]",
        trigger = "1",
        action = {"throttle", "down"},
        phase = "connect",
      }
    }
  }
}

msys.adaptive.registerRules(rules, "augment")
```

For detailed instructions on customization see [Chapter 4, *Custom Rules*](ad.custom.rules.php "Chapter 4. Custom Rules") .

## Throttle Down to Avoid Suspension

You may discover codes that result in suspensions because they are not covered by existing rules. For example, the following bounce codes eventually result in suspension of delivery:

```
421 #4.4.5 Too many connections from your host
421 #4.x.2 Too many messages for this session
```

When these error codes are left unaltered by the system, they generate excessive bounces and then execute the "High Action"—suspension. By adding the following custom code you can throttle delivery and avoid suspension:

```
require('msys.adaptive')
local rules =
{
  ["example.ca <http://example.ca/>"] =
  {
    responses =
    {
      {
        code = "421 #4.4.5 Too many connections from your host",
        trigger = "1",
        action =  {"throttle", "down"},
      },
      {
        code = "421 #4.x.2 Too many messages for this session",
        trigger = "1",
        action = {"throttle", "down"},
      }
    }
  }
}
msys.adaptive.registerRules(rules, "augment")
```

| [Prev](ad.custom.rules.php)  |   |  [Next](ad.adaptive.update.php) |
| Chapter 4. Custom Rules  | [Table of Contents](index.php) |  Chapter 6. Automated Updates for the Adaptive Rules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)