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

| 3.5. Sieve Usage |
| [Prev](ch03s04.php)  | Chapter 3. The msc_logger Module |  [Next](modules.msc_logger.lua.php) |

## 3.5. Sieve Usage

When this module is loaded the `messagescope_gen_thread_id` Sieve function is available. This function retrieves the current message id and takes a single argument or no argument. If the message is not passed in, the current message will be used if available. Otherwise, an error is returned.

<a name="modules.msc_logger.messagescope_gen_thread_id.example"></a>

**Example 3.3. messagescope_gen_thread_id example**

```
$id = messagescope_gen_thread_id;
vctx_mess_set "siv_thread_id-%{vctx_mess:rcptto_localpart}" $id;
ec_log "%{vctx_mess:rcptto_localpart}: ${id}";
```

| [Prev](ch03s04.php)  | [Up](modules.msc_logger.php) |  [Next](modules.msc_logger.lua.php) |
| 3.4. Logging of SMPP Events  | [Table of Contents](index.php) |  3.6. Lua Usage |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)