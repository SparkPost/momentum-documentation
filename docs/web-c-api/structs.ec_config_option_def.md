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

| 68.22. ec_config_option_def |
| [Prev](structs.ec_config_header.php)  | Chapter 68. Structs |  [Next](structs.ec_config_value.php) |

## 68.22. ec_config_option_def

The members of this struct are as follows:

```
/** this structure is used for defining symbolic values for config options */
struct ec_config_value_mapping {
  const char *name;
  const char *value;
};
struct _ec_config_option_def {
  const char *name;
  ec_config_item_type_t type;
  const char *personality;
  const char *fallback;
  unsigned int flags;
  void *closure;

  const char *defval;
  const struct ec_config_value_mapping *map;

  int (*validate_value)(ec_config_option_def *option, string *output,
                        ec_config_header *cfghdr, ec_config_value *val);
  void (*postset)(ec_config_option_def *option, string *output,
                  ec_config_header *cfghdr, ec_config_value *val);
  void (*datafree)(ec_config_option_def *option, void *data);
};
```

To use this struct, include the file .

Valid ec_config_item_type_t constants are:

```
ECCFGTYPE_STRING:
ECCFGTYPE_INT:
ECCFGTYPE_UINT64:
ECCFGTYPE_PERMS:
ECCFGTYPE_BOOL:
ECCFGTYPE_FLOAT:
ECCFGTYPE_SOCKADDR:
ECCFGTYPE_THROTTLE:
ECCFGTYPE_ECDICT:
ECCFGTYPE_SIZE_T:
ECCFGTYPE_EC_CONFIG_REGEX:
ECCFGTYPE_SOCKADDR_PORTLESS:
```

To use this struct, include the file `configuration.h`.

### 68.22.1. See Also

[Section 1.3.5.1, “Define the Configuration Object”](arch.primary.apis.php#arch.def.config "1.3.5.1. Define the Configuration Object"), [Section 68.21, “ec_config_header”](structs.ec_config_header.php "68.21. ec_config_header"), [Section 68.21, “ec_config_header”](structs.ec_config_header.php "68.21. ec_config_header") and [ec_config_register_option](apis.ec_config_register_option.php "ec_config_register_option")

| [Prev](structs.ec_config_header.php)  | [Up](structs.php) |  [Next](structs.ec_config_value.php) |
| 68.21. ec_config_header  | [Table of Contents](index.php) |  68.23. ec_config_value |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)