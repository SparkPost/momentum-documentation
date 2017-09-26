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

| 3.5. DKIM Signing |
| [Prev](mc-post-installation-bindings.php)  | Chapter 3. Post-installation Tasks |  [Next](mc-creating-roles.php) |

## 3.5. DKIM Signing

If you wish to use DKIM signing in any campaigns or mailings, signing must be enabled at the org level. For instructions on doing this through the Message Central web UI see ["Organizations"](https://support.messagesystems.com/docs/web-mc-user/mc3-administration.php#mc3-administration-orgs).

### Note

Configuring DKIM signing through the *Message Central*         web UI does **not** automatically create the appropriate DKIM stanza in the Momentum configuration file. You must configure DKIM in the `ecelerity.conf` file first. To do this see [The DKIM Module](https://support.messagesystems.com/docs/web-ref/modules.dkim.php).

The DKIM option, `dkim`, should be configured as "Disabled" in the global scope in the Momentum `ecelerity.conf` file. (You can edit this configuration option through the Momentum web UI if you prefer.) A sample code snippet taken from an `ecelerity.conf` file follows:

<a name="mc-post-dkim-config"></a>

**Example 3.1. dkim configuration**

```
# DKIM configuration option (global scope)
  dkim = "disabled"
  # DKIM module configuration
  dkim_sign "dkim_sign1"{
    sign_condition = "can_relay"
    digest = "rsa-sha1"
    header_canon = "relaxed"
    body_canon = "simple"
    headerlist = "From:Subject:Date:To:MIME-Version?:Content-Type?"
    key = "/opt/msys/ecelerity/etc/conf/dkim/%{d}/%{s}.key"
    dk_domain "example.com" {
      selector = "s1024"
    }
    dk_domain "example.net" {
      selector = "s512"
    }
  }

  #Scriptlet configuration
  alerting {}

  scriptlet "scriptlet" {
    # this loads default scripts
    script "boot" {
      source = "msys.boot"
    }
    # this loads the user-defined script
    script "final_validation" {
      source = "myscripts.dkim"
    }
  }
```

Create a Lua script to run in the final validation hook. For an example see [msys.validate.dkim.sign](https://support.messagesystems.com/docs/web-ref/lua.ref.msys.validate.dkim.sign.php).

If you prefer, you can create a Sieve script such as the following:

<a name="mc-post-dkim-dkim_sign.siv"></a>

**Example 3.2. dkim_sign.siv**

```
if vctx_conn :is "dkim" "enabled" {
  ec_dkim_sign;
}
```

For more information about the `dkim` configuration option see ["dkim Option"](https://support.messagesystems.com/docs/web-ref/conf.ref.dkim.php). For more information about the dkim module see ["dkim – DomainKeys Identified Mail Signatures"](https://support.messagesystems.com/docs/web-ref/modules.dkim.php).

| [Prev](mc-post-installation-bindings.php)  | [Up](mc-post-installation.php) |  [Next](mc-creating-roles.php) |
| 3.4. Creating Bindings  | [Table of Contents](index.php) |  3.6. Adding Roles |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)