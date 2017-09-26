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

| A.7. Creating Dialogs |
| [Prev](msc.custom.behavior.add.buttons.php)  | Appendix A. The APIs for adding Custom Behavior |  [Next](msc.custom.behavior.handle.actions.php) |

## A.7. Creating Dialogs

When the user clicks a button, MessageScope presents a dialog to the user. To set the HTML for the dialog, implement or override the `getMessageActionDialog()` method. The method takes one parameter, the name of the button clicked by the user. The method returns a string of HTML to be rendered in the browser.

```
public function getMessageActionDialog($action_name)
{
switch($action_name) {
  case 'action-name-1':
    return <<<HTML
     <form id="message-action-form" method="post">
       <p class="dialog-error"></p>
       <fieldset>
         <label>Item 1: <input type="text" name="item_1" /></label>
         <label>Item 2:
           <input type="hidden" name="item_2" value="" />
           <label><input type="radio" name="item_2" value="option_a" />Option A</label>
           <label><input type="radio" name="item_2" value="option_b" />Option B</label>
           <label><input type="radio" name="item_2" value="option_c" />Option C</label>
         </label>
         <label>Item 3:
           <input type="hidden" name="item_3" value="0" />
           <label><input type="checkbox" name="item_3" value="1" />Checked?</label>
         </label>
       </fieldset>
       <div class="buttons">
         <input class="message-action-submit button orange" type="submit" value="Submit" />
         <input class="button" type="submit" value="Cancel" />
       </div>
     </form>
     HTML;
    break;

  case 'action-name-2':
    return <<<HTML
      <form id="message-action-form" method="post">
        <p class="dialog-error"></p>
        <div class="buttons">
          <input class="message-action-submit button orange" type="submit" value="Submit" />
          <input class="button" type="submit" value="Cancel" />
        </div>
      </form>
      HTML;
      break;

  default:
    throw new Exception("'$action_name' is not a recognized message action.");
    break;
  }
}
```

| [Prev](msc.custom.behavior.add.buttons.php)  | [Up](msc.custom.behavior.php) |  [Next](msc.custom.behavior.handle.actions.php) |
| A.6. Adding Buttons  | [Table of Contents](index.php) |  A.8. Handling Actions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)