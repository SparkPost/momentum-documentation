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

| 7.8. Configuration for MM7 |
| [Prev](mobility.mm7.aggregator.specific.php)  | Chapter 7. Mobile Momentum MM7 |  [Next](mobility.mm7.options.php) |

## 7.8. Configuration for MM7

<a class="indexterm" name="idp1184016"></a>

Prior to Momentum version 3.5.6, MM7 domains are configured in the following way:

<a name="mobility.mm7.config.domain.example1"></a>

**Example 7.4. Configuration prior to 3.5.6**

```
domain "mm7.example.com" { 
  mm7_xml_schema = "http://www.3gpp.org/ftp/Specs/archive/23_series/ »
    23.140/schema/REL-5-MM7-1-0.xsd" 
  mm7_version = "5.3.0" 
  mm7_mmsc_port = "8080" 
  mm7_http_auth_user = "admin" 
  mm7_http_auth_password = "secret" 
  mm7_mmsc_server = "example.com" 
  mm7_vasid = "test_domain_vas_id" 
  mm7_vaspid = "test_global_vasp_id" 
  mm7_message_class="personal" 
  mm7_delivery_report="true" 
  mm7_inactivity_timer = 300
  generate_bounces = "true" 
}
```

### Note

In Momentum 3.6, domains continue to be configured in the same way as shown in [Example 7.4, “Configuration prior to 3.5.6”](mobility.mm7.config.php#mobility.mm7.config.domain.example1 "Example 7.4. Configuration prior to 3.5.6").

As of Momentum version 3.5.6 generic HTTP options replace MM7-specific options. Configure MM7 domains as follows:

<a name="mobility.mm7.config.domain.example2"></a>

**Example 7.5. Configuration as of 3.5.6**

```
domain "mm7.example.com" { 
  http_host = "example.com" 
  http_uri = "/mmssend" 
  mm7_xml_schema = "http://www.3gpp.org/ftp/Specs/archive/23_series/23.140/ »
    schema/REL-5-MM7-1-0.xsd" 
  mm7_version = "5.3.0" 
  delivery_method = "mm7"
  routes = ( "mm7://example.com/mmssend?port=8080" ) 
  http_basic_auth = "admin:secret" 
  mm7_vasid = "test_domain_vas_id" 
  mm7_vaspid = "test_global_vasp_id" 
  mm7_message_class="personal" 
  mm7_delivery_report="true"
  idle_timeout = 300
  generate_bounces = "true" 
}
```

The changes are as follows:

*   `mm7_mmsc_port` and `mm7_mmsc_server` – These options have been replaced by [routes](https://support.messagesystems.com/docs/web-ref/conf.ref.routes.php), which specifies the protocol, the server and the port. Note that you must also set the [delivery_method](https://support.messagesystems.com/docs/web-ref/conf.ref.delivery_method.php) to `mm7`.

*   `mm7_http_auth_user` and `mm7_http_auth_password` – These options have been replaced by [http_basic_auth](https://support.messagesystems.com/docs/web-ref/conf.ref.http_basic_auth.php).

*   `mm7_inactivity_timer` – This option has been replaced by [idle_timeout](https://support.messagesystems.com/docs/web-ref/conf.ref.idle_timeout.php).

*   `mm7_mmsc_path` – This option has been replaced by [http_uri](https://support.messagesystems.com/docs/web-ref/conf.ref.http_uri.php).

Additionally, as of version 3.5.6, you must also specify [http_host](https://support.messagesystems.com/docs/web-ref/conf.ref.http_host.php).

| [Prev](mobility.mm7.aggregator.specific.php)  | [Up](mobility.mm7.php) |  [Next](mobility.mm7.options.php) |
| 7.7. Aggregator-specific Requirements  | [Table of Contents](index.php) |  Chapter 8. Mobile Momentum MM7 Options |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)