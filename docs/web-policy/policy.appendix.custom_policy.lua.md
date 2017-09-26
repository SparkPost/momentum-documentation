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

| A.2. The `custom_policy.lua` File |
| [Prev](policy.appendix.php)  | Appendix A. The `dp_config.lua` and `custom_policy.lua` Files |   |

## A.2. The `custom_policy.lua` File

Custom policy is configured using the `custom_policy.lua` file. A sample configuration file is found in the `/opt/msys/ecelerity/etc/sample-configs` directory and is reproduced below. If you do not implement any custom policy, you need not be concerned with this file. However, you will need to comment out the line, `require("custom_policy");` at the top of the `dp_config.lua` file.

```
module("msys.dp_config.custom_policy", package.seeall);

--[[
The default policy looks for custom policy in the
msys.db_config.custom_policy namespace.  That namespace can
contain 'pre' or 'post' callouts for the following hook points:

init
validate_connect
validate_ehlo
validate_mailfrom
validate_rcptto
validate_data
validate_data_spool
validate_data_spool_each_rcpt
validate_set_binding

So, to run before the default policy actions in validate_data,
you would define the pre_validate_data function, with the same
parameters at the validate_data function.  You may return
msys.core.VALIDATE_DONE to terminate processing for that
phase, or msys.core.VALIDATE_CONT to continue.  The only exception
to the return value semantics is the 'init' function, which must
return true if successful, or false if there was a failure.
]]

--
-- function msys.dp_config.custom_policy.pre_init()
--   return true
-- end
--
-- function msys.dp_config.custom_policy.post_init()
--   return true
-- end
--
-- function msys.dp_config.custom_policy.pre_validate_connect(ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.post_validate_connect(ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.pre_validate_ehlo(ehlo_string, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.post_validate_ehlo(ehlo_string, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.pre_validate_mailfrom(mailfrom_string, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.post_validate_mailfrom(mailfrom_string, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.pre_validate_rcptto(msg, rcptto_string, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.post_validate_rcptto(msg, rcptto_string, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.pre_validate_data(msg, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.post_validate_data(msg, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.pre_validate_data_spool(msg, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.post_validate_data_spool(msg, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.pre_validate_data_spool_each_rcpt(msg, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.post_validate_data_spool_each_rcpt(msg, ac, vctx)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.pre_validate_set_binding(msg)
--   return msys.core.VALIDATE_CONT;
-- end
--
-- function msys.dp_config.custom_policy.post_validate_set_binding(msg)
--   return msys.core.VALIDATE_CONT;
-- end

-- $Revision: 2874 $
```

| [Prev](policy.appendix.php)  | [Up](policy.appendix.php) |   |
| Appendix A. The `dp_config.lua` and `custom_policy.lua` Files  | [Table of Contents](index.php) |   |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)