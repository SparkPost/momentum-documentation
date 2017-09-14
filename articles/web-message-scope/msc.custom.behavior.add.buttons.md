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

| A.6. Adding Buttons |
| [Prev](msc.custom.behavior.act.on.message.php)  | Appendix A. The APIs for adding Custom Behavior |  [Next](msc.custom.behavior.create.dialogs.php) |

## A.6. Adding Buttons

To add buttons to the message results, implement or override the `getMessageActionButtons()` method. This method returns an array of arrays. Each sub-array has a `name` key and a `label` key. The `name` key is used to identify which button was clicked and the `label` key defines the text of the button displayed to the user.

```
<?php
public function getMessageActionButtons()
{
  return array(
    array(
      'name' => 'action-name-1',
      'label' => 'Button Label 1',
    ),
    array(
      'name' => 'action-name-2',
      'label' => 'Button Label 2',
    ),
  );
}
```

| [Prev](msc.custom.behavior.act.on.message.php)  | [Up](msc.custom.behavior.php) |  [Next](msc.custom.behavior.create.dialogs.php) |
| A.5. "Act On Message" Behaviors  | [Table of Contents](index.php) |  A.7. Creating Dialogs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)