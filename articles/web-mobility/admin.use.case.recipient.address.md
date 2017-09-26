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

| 4.2. Route to SMS Based on the Recipient Address |
| [Prev](admin.use.cases.php)  | Chapter 4. Use Cases |  [Next](admin.use.case.sender.ip.php) |

## 4.2. Route to SMS Based on the Recipient Address

When a specific email address appears in the `To` header, you can map the email address to a phone number.

Create a Lua script named `changeSMS.lua` and save it in a directory that is in the Lua search path—`/opt/msys/ecelerity/etc/conf/default/policy`, for example. Be sure to add the script to the repository as described in [Best Practices for Manually Created Policy Scripts](https://support.messagesystems.com/docs/web-ref/policy.best.practices.php).

```
##  support files
require('msys.core');
require('msys.extended.message');
require('msys.pcre');
require('msys.extended.message_routing')

local mod = {};

--Each RCPT Phase ##############################
function mod:validate_data_spool_each_rcpt(msg)
-- This script is setting the RCPT TO of the message based on the recipients preference.  For the purpose of this demonstration
-- the system will use the RCPT TO address to look up the preference in a static table provided below.  If the preference is 'email'
-- the message will unaltered and delivers to the supplied email address.  If the preference is 'mobile' the RCPT TO will be
-- rewritten to the mobile number as follows <mobile>@smpp.mblox.com

-- Subscriber preferences are stored in the prefab table defined below.  The table columns are
--        email    localpart  email domain  preference  mobile#   mobileDomain

  local preftab = {  {"john.doe",   "messagesystems.com",   "mobile",  "16508922465",   "smpp.deliver.com"},
        {"jane.doe",  "messagesystems.com",  "smtp",  "16508922465",   "smpp.deliver.com"},
        {"georgie.porgie",    "messagesystems.com",  "mobile",  "12062250488",   "smpp.deliver.com"}
      };

  print ("table size = " .. #preftab);
  local i = 1;

  local localpt = msg:context_get(msys.core.ECMESS_CTX_MESS, "rcptto_localpart");
  local domain = msg:context_get(msys.core.ECMESS_CTX_MESS, "rcptto_domain");

  print ("rcpt to address = " .. localpt .. "@" ..  domain);  --This will appear in the /var/log/ecelerity/panic.log  (remove or comment out for production use)

  while i <=  #preftab do        -- loop through the available values in opts
    if (preftab[i][1] == localpt) then
      print ("match on localpt in row: " .. i);  -- (remove or comment out for production use)
      if (preftab[i][2] == domain) then
        print ("Match on domain, getting preference");
        if (preftab[i][3] == "mobile") then
          local mobnum = preftab[i][4];
          local mobdom = preftab[i][5];
                                            print ("User preference " .. preftab[i][3] ..  "rewriting destination to: " .. mobnum .. "@" .. mobdom);
          msys.core.ec_message_context_set(msg, msys.core.ECMESS_CTX_MESS, "SMS_Destination_Address", mobnum);
          msg:routing_domain(mobdom)
          return msys.core.VALIDATE_CONT;
        else
          print ("Sending as email");
          return msys.core.VALIDATE_CONT;
        end
      end
    end
  end
  print ("No email address match, sending as email ");

  return msys.core.VALIDATE_CONT;
end

--Module Register
msys.registerModule("changeSMS", mod);
```

| [Prev](admin.use.cases.php)  | [Up](admin.use.cases.php) |  [Next](admin.use.case.sender.ip.php) |
| Chapter 4. Use Cases  | [Table of Contents](index.php) |  4.3. Route to SMS Based on the Sender IP Address |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)