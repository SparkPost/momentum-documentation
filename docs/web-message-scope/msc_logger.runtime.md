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

| 3.2. Runtime Usage |
| [Prev](modules.msc_logger.php)  | Chapter 3. The msc_logger Module |  [Next](msc.log.smtp.events.php) |

## 3.2. Runtime Usage

The message context variables provided by this module are:

*   `msc_partner_data`

*   `msc_user_data`

*   `msc_final_rule`

*   `msc_thread_id`

These variables are discussed in detail below.

**`msc_partner_data`. ** The partner data field is stored in a validation context variable with the name `msc_partner_data`. Partner integrations will automatically append information to this variable using RFC1891 "xtext" encoding. For example, Cloudmark would store Cloudmark-specific information as follows: CMAE="score=1 isspam=1". An example with both Cloudmark and Commtouch information: CMAE="score=1" COMMTOUCH="spam=class virus=class refid=id". For more information about the cloudmark module see "[cloudmark Module](https://support.messagesystems.com/docs/web-ref/modules.cloudmark.php)".

**`msc_user_data`. ** User data is not restricted in format (as partner data is) and is stored in the `msc_user_data` key of the validation context. Retrieval of this data for logging prefers the message’s validation context.

**`msc_final_rule`. ** The final rule field is stored in a validation context variable with the name `msc_final_rule`. Its intended use is to capture an identifier that represents the final ruling on the message. For example, if the Momentum server rejected it, this might indicate that an RBL was triggered and the variable would contain the name of the RBL, the pertinent key field that was looked up against the RBL and the text associated with that RBL record. The system makes a best effort at automatically populating this field if it is not explicitly set by the site policy.

**`msc_thread_id`. ** The thread ID is stored in the validation context variable `msc_thread_id`. Checks for the thread ID should look for the value in the message's validation context before looking in the connection context. Sieve and Lua functions are provided to generate the canonical thread ID of the message. The Sieve interface is accessible through calling `messagescope_generate_thread_id`. The Lua equivalent is accessed through `msys.message_scope.generate_thread_id`. The latter accepts an ec_message, accept_construct, and vctx argument. It is the responsibility of the caller of either of these functions to use its output to set the thread_id based on the return value. For more information about these functions see [Section 3.5, “Sieve Usage”](modules.msc_logger.sieve.php "3.5. Sieve Usage") and [Section 3.6, “Lua Usage”](modules.msc_logger.lua.php "3.6. Lua Usage").

| [Prev](modules.msc_logger.php)  | [Up](modules.msc_logger.php) |  [Next](msc.log.smtp.events.php) |
| Chapter 3. The msc_logger Module  | [Table of Contents](index.php) |  3.3. Logging SMTP Events |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)