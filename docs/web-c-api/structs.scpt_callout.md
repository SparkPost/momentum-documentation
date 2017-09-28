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

| 68.70. scpt_callout |
| [Prev](structs.rsplaytree.php)  | Chapter 68. Structs |  [Next](structs.scpt_objtype.php) |

## 68.70. scpt_callout

This struct is defined as follows:

```
* defines a C parameter type */
struct scpt_arg_def {
  char *type_name;   /* C type name */
  scpt_objtype *objtype;
  unsigned int size; /* size of C type on stack */
  enum {
    SCPT_T_IGNORE, /* don't map this one */
    SCPT_T_META,   /* use meta table */
    SCPT_T_STRING, /* read-only string */
    SCPT_T_INT,    /* an integer type */
    SCPT_T_VALIST, /* va_list */
    SCPT_T_VCTX,   /* validate_context */
  } type;
  const char *bag_type_name; /* name used for ec_bag */
  const char *ctx_key_name; /* name used to index _CTX */
  int looked_for_metatable; /* if true and objtype == NULL, we have no clue */
};

/* defines a hook or callout point */
struct scpt_callout {
  char *name;
  struct scpt_arg_def *rettype;
  /* id number is based on the order of registration of the
   * callout and can be used for accelerated resolution of
   * the callout hook chain at runtime */
  int calloutid;
  /* array of scpt_arg_def */
  ec_ptr_array arg_defs; 
  /* key for hash table (may be different from canonical name) */
  char *hashkey;
};
```

To use this struct, include the file `modules/scriptlets/ec_scriptlet.h`.

### 68.70.1. See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*                         ](script.php "Chapter 42. Scriptlet (and Alerting) Functions") and [Section 68.72, “scpt_thread”](structs.scpt_thread.php "68.72. scpt_thread")

| [Prev](structs.rsplaytree.php)  | [Up](structs.php) |  [Next](structs.scpt_objtype.php) |
| 68.69. rsplaytree  | [Table of Contents](index.php) |  68.71. scpt_objtype |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)