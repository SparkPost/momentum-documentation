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

| 68.74. shared_module_infrastructure_8 |
| [Prev](structs.seng.php)  | Chapter 68. Structs |  [Next](structs.sieve.php) |

## 68.74. shared_module_infrastructure_8

This struct is defined as follows:

```
struct _shared_module_infrastructure_8
{
  u_int32_t module_api_version;
  module_instance_data *_inst;
  void *_proxy;
  /** this name only shows up in 'module list' */
  const char *module_name;
  /** this description only shows up in 'module list' */
  const char *module_description;
  /** allows control channel interaction with your module */
  ControlHookFunc module_control;
  /** @deprecated do not use in 3.0 modules */
  ModuleConfFunc module_conf;
  /** @deprecated do not use in 3.0 modules */
  ModuleExtendedConfFunc module_ext_conf;
  /** @deprecated do not use in 3.0 modules */
  ModuleInitFunc module_init;
  /** @deprecated do not use in 3.0 modules */
  ModuleInitFunc module_post_init;
  /**
   * Gets called when your module is first loaded; use it to register any
   * capabilities your module provides, and do any other initialization
   * that you only do once regerdless of the number of instances.
   */
  ModuleConfSetupFunc module_config_setup;
  /** @deprecated do not use in 3.0 modules */
  ModuleEnablerFunc module_enable;
  /** @deprecated do not use in 3.0 modules */
  ModuleCanUnloadFunc module_can_unload;
  /**
   * @since 3.0
   * Gets called for every new instance at commit time (if the module stanza
   * is modified in the transaction, a new instance is created) with the
   * EC_MODULE_INIT_INIT flag.
   *
   * Gets called once with the EC_MODULE_INIT_POSTINIT flag for all the
   * instances in the initial config after we've forked and dropped privileges.
   *
   * Gets called when an instance is destroyed (on the old instance when a
   * commit changes or removes a module stanza) with the
   * EC_MODULE_INIT_DESTROY flag.
   *
   * @return 0 on success, -1 on error; return value ignored for DESTROY
   */
  ModuleExtendedInitFunc module_ext_init;
};

typedef int  (*ModuleConfSetupFunc) (generic_module_infrastructure *self,
  int ignoreme);
typedef int  (*ModuleExtendedInitFunc) (generic_module_infrastructure *self,
  ec_config_header *transaction, string *output, int flags);
typedef void (*ControlHookFunc) (generic_module_infrastructure *self,
  string *response, const char *command, int xml);

/* The below types are deprecated, do not use them in 3.0 */
typedef int  (*ModuleConfFunc) (generic_module_infrastructure *,
                                ec_config_header *, const char *, const char *);
typedef int  (*ModuleExtendedConfFunc) (generic_module_infrastructure *,
                                ec_config_header *, const char *, int type,
                                void *data);
typedef int  (*ModuleInitFunc) (generic_module_infrastructure *);
typedef void (*ModuleEnablerFunc)(generic_module_infrastructure *, int enable);
typedef int  (*ModuleCanUnloadFunc)(generic_module_infrastructure *);
```

To use this struct, include the file `shared_module.h`.

### 68.74.1. See Also

[log_attempt_v1](hooks.core.log_attempt_v1.php "log_attempt_v1"), [log_delivery_v1](hooks.core.log_delivery_v1.php "log_delivery_v1"), [log_rejection](hooks.core.log_rejection.php "log_rejection"), [log_permanent_failure_v1](hooks.core.log_permanent_failure_v1.php "log_permanent_failure_v1"), [log_reopen](hooks.core.log_reopen.php "log_reopen"), and [log_transient_failure_v1](hooks.core.log_transient_failure_v1.php "log_transient_failure_v1").

| [Prev](structs.seng.php)  | [Up](structs.php) |  [Next](structs.sieve.php) |
| 68.73. SENG (sieve_engine)  | [Table of Contents](index.php) |  68.75. SIEVE (sieve_state) |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)