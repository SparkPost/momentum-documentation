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

| 68.21. ec_config_header |
| [Prev](structs.ec_cache_head.php)  | Chapter 68. Structs |  [Next](structs.ec_config_option_def.php) |

## 68.21. ec_config_header

The members of this struct are as follows:

```
/**
 * This structure represents scope instances in the configuration, such as
 * bindings, modules and listeners. You must not modify anything in this
 * structure yourself; always call the appropriate API.
 */
struct _ec_config_header {
  /** refcount */
  ec_atomic_t refcnt;

  /* Generation */
  ec_atomic_t generation;

  /** the name of this instance */
  char *name;

  /** @deprecated always NULL */
  char *comment;
  /** @deprecated always NULL */
  ECDict attributes;
  /** @deprecated always 0 */
  int suppress_write_config;

  /** the scope this is an instance of */
  struct ec_config_scope *myscope;

  /** @deprecated always NULL */
  struct _ec_config_header *parent;
  /** @deprecated always NULL */
  void **cfgslots;
  /** @deprecated always NULL */
  void **dataslots;
  /** @deprecated always NULL */
  ECDict comments;

  /** child scope instances */
  ec_hash_table *children;
  /** information for finding matching child scopes; may be NULL */
  ec_hash_table *match_scopes;

  /** true if this instance was used via legacy APIs and so can't be freed */
  int leaked;
  /** the ancestry of this instance */
  char *ancestry;
  /** pointer to the root of the transaction */
  struct _ec_config_header *transaction;
  /** option values by option slot */
  ec_ptr_array *options;
  /* references to the syntax tree nodes we came from */
  ec_ptr_array *nodes;
  /* hash for looking up which of our nodes a child node comes from */
  ec_hash_table *childnodes;
};
```

To use this struct, include the file `configuration.h`.

### Note

`ec_atomic_t` is a typedef of a long integer.

### 68.21.1. See Also

[ec_config_fetch_globalconf](apis.ec_config_fetch_globalconf.php "ec_config_fetch_globalconf"), [Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table") and [Section 68.40, “ec_ptr_array”](structs.ec_ptr_array.php "68.40. ec_ptr_array")

| [Prev](structs.ec_cache_head.php)  | [Up](structs.php) |  [Next](structs.ec_config_option_def.php) |
| 68.20. ec_cache_head  | [Table of Contents](index.php) |  68.22. ec_config_option_def |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)