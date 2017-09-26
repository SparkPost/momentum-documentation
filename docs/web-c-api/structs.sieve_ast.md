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

| 68.76. SIEVEARGS (sieve_ast) |
| [Prev](structs.sieve.php)  | Chapter 68. Structs |  [Next](structs.skiplist.php) |

## 68.76. SIEVEARGS (sieve_ast)

This struct is defined as follows:

```
typedef struct sieve_ast AST;
typedef struct _token_value SIEVETOKEN;

struct sieve_ast {
  int op;
  AST *next;
  AST **args;
  int nargs;  /* number of actual args */
  int margs;  /* number of arg slots */
  SIEVETOKEN value;
  ec_atomic_t refcount;
};
struct _token_value {
  enum { TV_VOID, TV_NUMBER, TV_STRING, TV_AST, TV_ACT, TV_HASH, TV_TAG } type;
  union {
    /* RFC3028: all numbers are unsigned and MUST provide
     * at least 31 bits */
    int32_t number;
    string str;
    AST *ast;
    sieve_extension_action *act;
    ec_hash_table *hash;
  } v;
  sieve_accelerator a;
  int lineno;
};
typedef struct _sieve_accelerator {
  enum { TAC_NONE, TAC_PCRE, TAC_USER, TAC_AHO } type;
  int can_accel;
  union {
    ec_pcre_elt *pcre_work;
    void *userdata;
    struct {
      ac_automaton_t *machine;
      ec_hash_table *by_len;
    } aho_work;
  } work;
} sieve_accelerator;
```

The `sieve_ast` struct is typedef'ed as follows: `typedef struct sieve_ast SIEVEARGS;`.

To use this struct, include the file `sieve/sieve-parser-internals.h`.

### 68.76.1. See Also

[Chapter 44, *Sieve Functions*](sieve.php "Chapter 44. Sieve Functions") 

| [Prev](structs.sieve.php)  | [Up](structs.php) |  [Next](structs.skiplist.php) |
| 68.75. SIEVE (sieve_state)  | [Table of Contents](index.php) |  68.77. Skiplist |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)