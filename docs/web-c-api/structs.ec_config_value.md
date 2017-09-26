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

| 68.23. ec_config_value |
| [Prev](structs.ec_config_option_def.php)  | Chapter 68. Structs |  [Next](structs.ec_data_source_query_cache.php) |

## 68.23. ec_config_value

The members of this struct are as follows:

```
struct _ec_config_value {
  /** refcount */
  ec_atomic_t refcnt;
  /** true if the value was used via legacy APIs and so can't be freed */
  int leaked;
  /** pointer to option this is an instance of */
  ec_config_option_def *opt;
  /** true if the value shadows an earlier definition */
  int shadow;
  /** reference to the syntax tree node we came from */
  ecGeneric_config_node_t *node;
  ec_config_value_storage *v;
  void *data;
};
union _ec_config_value_storage {
  char *vstr;
  int vint; /* also used by PERM and BOOL */
  u_int64_t vu64;
  double vdouble; /* FLOAT type */
  struct sockaddr *vsa;
  throttle *vthrot;
  ECDict vdict;
  size_t vsize;
  ec_config_regex *vre;
  ec_ptr_array *varr; /* used for is_array options */
};
```

To use this struct, include the file `configuration.h`.

### 68.23.1. See Also

[config_get_binding_domain_tls_verify](apis.config_get_binding_domain_tls_verify.php "config_get_binding_domain_tls_verify"), [Section 68.22, “ec_config_option_def”](structs.ec_config_option_def.php "68.22. ec_config_option_def")and [ec_config_release_value](apis.ec_config_release_value.php "ec_config_release_value")

| [Prev](structs.ec_config_option_def.php)  | [Up](structs.php) |  [Next](structs.ec_data_source_query_cache.php) |
| 68.22. ec_config_option_def  | [Table of Contents](index.php) |  68.24. ec_data_source_query_cache |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)