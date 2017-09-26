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

| 68.11. delivery_construct |
| [Prev](structs.connection_handle.php)  | Chapter 68. Structs |  [Next](structs.dns_cache_cachenode.php) |

## 68.11. delivery_construct

This struct is defined as follows:

```
struct _delivery_construct
{
  Event *e;
  ec_message *message;
  connection_handle *conn_handle;
  int last_nread;
  int bytes;
  int towrite;
  char *buffer;
  buf_storage *large_buf;
  int large_buf_bytes;
  unsigned transform_8bitmime:2;
  unsigned batch_assessed:1;
  unsigned _spare:29;
  /* array of ec_message* */
  ec_ptr_array batch;
  ec_config_header *transaction;
  /* Alternative IO object populated when we need to do intelligent
   * transformation of the message body for 8BITMIME downconversion */
  io_object *alt_body;
  /* Cached config info to use for life of the delivery_construct object */
  time_t config_last_refreshed;
  int use_sendfile;
  int tcpbuf;
  int migrate_connections_between_sibling_domains;
  int keep_message_dicts_in_memory;
  int binding_domain_idle_timeout;
  int binding_domain_rset_timeout;
  int binding_domain_ehlo_timeout;
  int binding_domain_mailfrom_timeout;
  int binding_domain_rcptto_timeout;
  int binding_domain_body_timeout;
  int binding_domain_delivery_method;
  int binding_domain_max_deliveries;
  int binding_domain_max_recipients_per_connection;
  int binding_domain_max_recipients_per_batch;
  int binding_domain_transform_8bitmime;
  int binding_domain_send_8bitmime;
  int binding_domain_use_xclient;

  int tls_parms_loaded;

  int binding_domain_use_tls;
  int binding_domain_tls_verify;
  char *binding_domain_tls_cert;
  char *binding_domain_tls_key;
  char *binding_domain_tls_ca;
  char *binding_domain_tls_ciphers;
};
```

To use this struct, include the file `smtp.h`.

### 68.11.1. See Also

[ec_smtp_closeconn](apis.ec_smtp_closeconn.php "ec_smtp_closeconn") and [smtp_should_session_shutdown](hooks.core.smtp_should_session_shutdown.php "smtp_should_session_shutdown")

| [Prev](structs.connection_handle.php)  | [Up](structs.php) |  [Next](structs.dns_cache_cachenode.php) |
| 68.10. connection_handle  | [Table of Contents](index.php) |  68.12. dns_cache_cachenode |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)