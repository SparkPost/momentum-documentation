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

| 14.4. alias – Alias Expansion Module |
| [Prev](modules.alerting.php)  | Chapter 14. Modules Reference |  [Next](modules.antivirus.php) |

## 14.4. alias – Alias Expansion Module

<a class="indexterm" name="idp17659728"></a>

The alias module lets you rewrite the recipient addresses of messages passing through Momentum. It is similar in spirit to sendmail's `/etc/aliases`, but alias expansions can be stored in any backend supported by Momentum's datasource layer. [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core")

When the alias module is loaded, alias expansion is disabled by default. The `Alias_Schemes` option, a list that can be specified in the Domain or Global scopes, enables the list of schemes that will be used to expand recipient addresses in that domain in decreasing order of preference. Expansion of a recipient address stops after the first alias scheme that yields a non-empty expansion for that address; the original address is replaced in the recipient list by the address(es) in the expansion. To prevent loops, a recipient address that has been expanded cannot be added back to the list of recipients as the result of expanding another recipient address.

### 14.4.1. Configuration

A Scheme is specified in an alias module. The mandatory `cache` parameter specifies the datasource cache that will be used as the backend, in this example `aliasdb`. The mandatory `query` parameter specifies the query string that will be used. The `map` dictionary specifies the alias map used to construct the bind variables used together with the query string; though technically optional, it is almost certainly necessary. The optional `column` parameter specifies the name of the column containing the results of the expansion; it may be omitted if the query only returns a single column. All the values (if any) in the results column must be valid email addresses.

```
alias "alias1" {
  Scheme "myscheme" {
    query = "SELECT expansion FROM foo WHERE address = :address"
    cache = "aliasdb"
    map = [
        address = "%{rcptto}"
      ]
  }
}
Datasource "aliasdb" {
  uri = ( "sqlite:/path/to/sqlite.db" )
}
Domain "example.com" {
  Alias_Schemes = ( "myscheme" )
}
```

A map dictionary is specified by the `map` option. It may contain any number of arbitrarily named variables; macro expansion is performed on these, with the substrings `%{localpart}`, `%{domain}` and `%{rcptto}` being replaced by the local part, domain and complete address of the recipient being expanded, respectively. No other substrings of the form `%{...}` are allowed.

Within the desired domain, the `Alias_Schemes` option is set to the Scheme name defined within the alias module.

### 14.4.2. See Also

[alias_schemes](conf.ref.alias_schemes.php "alias_schemes") and [Section 14.30, “ds_core – Datasource Query Core”](modules.ds_core.php "14.30. ds_core – Datasource Query Core").

| [Prev](modules.alerting.php)  | [Up](modules.php) |  [Next](modules.antivirus.php) |
| 14.3. alerting – alerting  | [Table of Contents](index.php) |  14.5. antivirus – Antivirus Modules |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)