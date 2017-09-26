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

| A.8. Handling Actions |
| [Prev](msc.custom.behavior.create.dialogs.php)  | Appendix A. The APIs for adding Custom Behavior |  [Next](msc.custom.behavior.installation.php) |

## A.8. Handling Actions

When the user is done, the dialog will be submitted back to MessageScope. To process the submission, implement or override the `doMessageAction()` method. The method takes three parameters:

*   `$action_name`: The name of the action that generated the dialog

*   `$get`: The contents of $_GET

*   `$post`: The contents of $_POST

Examine `$action_name` to see which action is being submitted, and then hand off to other methods of your choosing:

```
public function doMessageAction($action_name, $get, $post)
{
  switch($action_name) {
    case 'action-name-1':
      return $this->doActionName1($get, $post);
      break;
    case 'action-name-2':
      return $this->doActionName2($get, $post);
      break;
    default:
      throw new Exception("'$action_name' is not a recognized action.");
      break;
   }
}
```

You may implement any backend logic you wish in your handler methods. If you throw an exception at any time during the `doMessageAction()` process (or any methods it calls), then the user will see a "Failure" response and will have to re-submit the dialog. Otherwise, the user will see a "Success" response.

| [Prev](msc.custom.behavior.create.dialogs.php)  | [Up](msc.custom.behavior.php) |  [Next](msc.custom.behavior.installation.php) |
| A.7. Creating Dialogs  | [Table of Contents](index.php) |  A.9. Installing Your Driver |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)