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

| 14.51. outbound_smtp_auth – Module |
| [Prev](modules.outbound_audit.php)  | Chapter 14. Modules Reference |  [Next](modules.pe2_logger.php) |

## 14.51. outbound_smtp_auth – Module

<a class="indexterm" name="idp20709264"></a>

This module enables users to specify authentication parameters for a given set of messages so that Momentum will authenticate against the peer server when it sends outbound mail. It currently supports the 'AUTH LOGIN' and 'AUTH PLAIN' methods of authentication. You can specify the parameters in configuration or in lua, or use a combination of both.

### Note

This module makes heavy use of message contexts to facilitate authentication. If it is enabled, you risk having extra I/O unless `keep_message_dicts_in_memory` is on.

**Configuration Change. ** This feature is available starting from Momentum 3.6.12.

### 14.51.1. Configuration

Configuration variables are listed below. These values can all be changed and overridden by setting context variables with the same name as the options in lua. All variables are valid in the binding group, binding, domain, and global scopes.

<dl class="variablelist">

<dt>outbound_smtp_auth_key</dt>

<dd>

A unique key that can be used in lua to look up authorization details in a database. It enables you to easily trigger custom behavior based on a configuration scope. The default value is `false`.

</dd>

<dt>outbound_smtp_auth_pass</dt>

<dd>

The password that will be passed to the remote server. The default value is `false`.

### Note

Setting the password in configuration will leave it as plaintext. To set the password more securely, dynamically retrieve it from a data store in lua and set it in the context variable that corresponds to this option.

</dd>

<dt>outbound_smtp_auth_type</dt>

<dd>

Determines what authentication protocol should be used. The only supported values are 'PLAIN' and 'LOGIN'. The default value is `false`.

</dd>

<dt>outbound_smtp_auth_user</dt>

<dd>

The username that will be passed to the remote server. The default value is `false`.

</dd>

</dl>

### 14.51.2. Usage

Basic examples of usage are provided below.

The following example shows how you can extend the new hook and set the username and password in lua.

<a name="modules.outbound_smtp_auth.example.set_username_pw"></a>

**Example 14.78. Setting User Name and Password in Lua**

```
function mod:outbound_smtp_auth_config(msg, ac, vctx)
  print('NOTICE: outbound_smtp_auth_config Lua hook called');
  print('NOTICE: msg:['.. tostring(msg) ..']')
  msg:context_set(VCTX_MESS, 'outbound_smtp_auth_user', 'foo')
  msg:context_set(VCTX_MESS, 'outbound_smtp_auth_pass', 'bar')
end
```

The following example shows how to use the new configuration variables to set distinct authorization parameters for two different domains.

<a name="modules.outbound_smtp_auth.example.set_auth_parms"></a>

**Example 14.79. Setting Distinct Authorization Parameters**

```
outbound_smtp_auth { }

Keep_Message_Dicts_In_Memory = true

Domain "messagesystems.com" {
  Outbound_SMTP_AUTH_Type = "LOGIN"
  Outbound_SMTP_AUTH_User = "msys"
  Outbound_SMTP_AUTH_Pass = "msys"
  Outbound_SMTP_AUTH_Key = "somestring"
}

Domain "sparkpost.com" {
  Outbound_SMTP_AUTH_Type = "PLAIN"
  Outbound_SMTP_AUTH_user = "sparkpost"
  Outbound_SMTP_AUTH_pass = "sparkpost"
  Outbound_SMTP_AUTH_Key = "someotherstring"
}
```

| [Prev](modules.outbound_audit.php)  | [Up](modules.php) |  [Next](modules.pe2_logger.php) |
| 14.50. outbound_audit – Outbound traffic analytics  | [Table of Contents](index.php) |  14.52. pe2_logger – Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)