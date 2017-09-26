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

| Chapter 1. Overview |
| [Prev](p.overview.php)  | Part I. Customization |  [Next](DC.DevelopingApplicationsfortheSMPPESME.php) |

## Chapter 1. Overview

**Table of Contents**

<dl class="toc">

<dt>[1.1\. Developing Applications for Mobile Momentum 2.1](DeveloperandCustomization.php#DC.developapplications)</dt>

<dt>[1.2\. Developing Applications for the SMPP ESME](DC.DevelopingApplicationsfortheSMPPESME.php)</dt>

<dt>[1.3\. Developing Applications for the MM7 VASP](DC.DevelopingApplicationsfortheMM7VASP.php)</dt>

</dl>

## 1.1. Developing Applications for Mobile Momentum 2.1

Mobile Momentum 2.1 provides "hooks" for the customization of SMPP and MMS message processing. Hooks are message processing points where customer-written scripts (or scriptlets) and programs may be used to enforce policy and/or extend functionality. Hook instances may be implemented in C or Lua. In addition, instances of the SMPP Received Message Validation Hook and the MM7 Server Received Message Validation Hook may be implemented in Sieve using the Momentum core validation infrastructure.

For documentation of the SMS conversion hook points see "[Hook Points](https://support.messagesystems.com/docs/web-mobility/mobility.runtime.hooks.php)".

### 1.1.1. The Hook Interface

The hook interface is a function call using variable hook-specific parameters. Where possible, hook interfaces include the ec_message structure as one of the parameters. The ec_message structure contains a collection of key-value pairs called message context variables. By inspecting and setting context variables, hook implementations are able to communicate with other hook implementations. In addition, some context variable keys are set by Mobile Momentum and hook implementations may affect subsequent processing of the message by changing those context variable values. The following sections include descriptions of the context variable acted upon by Mobile Momentum.

Here is an example of getting and setting message context variables in a Lua script:

```
-- Retrieve the message context variable containing the SMS
-- destination address, a.k.a phone number:
 local destaddr = msys.core.ec_message_context_get
   (msg, msys.core.ECMESS_CTX_MESS, "SMS_Destination_Address")

-- phone number processing goes here, e.g., make sure the address/phone number,
-- begins with a "1":
 destaddr = "1" .. destaddr

-- Set the context variable with the modified value to be used as the
-- SMS destination phone number:
 msys.core.ec_message_context_set (msg, msys.core.ECMESS_CTX_MESS, 
  "SMS_Destination_Address", destaddr)
```

The ec_message structure includes another collection of a data type called blobject. Blobjects are similar to message context variables in that a key is used to retrieve and set their values, but where context variable values are normally strings, blobjects may be containers for arbitrary data types. Blobjects are also reference counted, so it is possible for the data contained by the blobject to survive beyond the life of the ec_message. Mobile Momentum uses blobjects to make message text available for inspection or modification by hook implementations.

### Note

In Momentum version 2.1, `require("msys.smpp");` replaces `require("msys.mobility");`.

Here is an example of retrieving the email text blob in Lua:

```
local emailtxt = msys.smpp.smpp_read_msg_text_blob(msg,
  msys.smpp.BLOB_KEY_MO_EMAIL_TEXT).buffer
```

Finally, many hook interfaces include a return value. Hook implementations may set return values to indicate the message disposition, such as:

*   To continue processing the message using any context variable or blob values set by the hook implementation

*   To cancel subsequent message processing and treat the message as a failure

*   To cancel subsequent message processing and treat the message as "delivered"

Each hook interface description includes a description of the acceptable return values.

### 1.1.2. Structure of Hook Implementations

Hooks are implemented as modules using Momentum's module infrastructure. With Lua, most of these details are transparent. The basic components for both C and Lua are the hook and module function definitions and the functions that are invoked during Momentum initialization which register the module's hook functions. Each of these components is implemented according to respective C or Lua programming conventions.

**1.1.2.1. Hook Structure for Lua**

The basic components of hooks written in Lua are:

*   One or more Lua require statements identifying the Momentum and Mobile Momentum APIs used by the hook

*   A Lua statement defining the Lua module

*   One or more hook function definitions

*   Optional helper and business logic functions

*   Lua statements registering each hook within the module

**1.1.2.2. Hook Structure for C**

A hook implementation written in C requires:

*   C `#include` statements for the required API declarations.

*   The Momentum generic module infrastructure definition. This identifies the hook name for configuration purposes, and also the module's initialization and termination functions. The hook implementation registration is invoked from a module initialization function.

*   One or more hook implementations. These are functions within the module. The functions are registered (using the hook definition's registration function) during module initialization.

*   Optional helper and business logic functions.

### 1.1.3. Hook Implementations: Lua Scriptlets

A hook implementation is activated by specifying its location within the scriptlet stanza of the Momentum configuration file:

```
scriptlet "scriptlet" {
  script "stock_alert" {
    source = "/opt/msys/ecelerity/conf/global/scripts/stock_alert.lua"
  }
}
```

In this example, the file `/opt/msys/ecelerity/conf/global/scripts/stock_alert.Lua` contains one or more hook implementations.

For more information about the scriptlet module see "[scriptlet Module](https://support.messagesystems.com/docs/web-ref/modules.scriptlet.php)".

### 1.1.4. Hook Implementations Written in C

C modules containing hook implementations are activated by adding a module instance to the Momentum configuration file. If your C module name is `my_mod`, it is activated by the configuration statement:

```
my_mod "my_mod_instance_name" {
 "my_mods parameters"
 ...
}
```

| [Prev](p.overview.php)  | [Up](p.overview.php) |  [Next](DC.DevelopingApplicationsfortheSMPPESME.php) |
| Part I. Customization  | [Table of Contents](index.php) |  1.2. Developing Applications for the SMPP ESME |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)