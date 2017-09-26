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

| 68.14. domain_record |
| [Prev](structs.dns_cache_query.php)  | Chapter 68. Structs |  [Next](structs.ec_async_job.php) |

## 68.14. domain_record

The members of this struct are as follows:

```
struct _domain_record
{
  /**
   * name and expiry must be the first two records
   * in this struct and cannot change types
   */
  char *domain;                  /* Domain name */
  u_int64_t expiry;              /* Expiry as an absolute time_t */
  mail_queue equeue;             /* Mail Queue */
  struct timeval last_delivery;  /* last delivery on this domain */
  mx_record **mxlist;            /* List of MXs */

  u_int32_t deliveries;          /* Number of deliveries */
  u_int32_t attempts;            /* Number of message attempts */
  u_int32_t transients;          /* Number of trans. failures */
  u_int32_t failures;            /* Number of failures */
  int mxcnt;                     /* Number of MX records */
  unsigned int recycled:1;       /* Is this domain recycled (in the drbhash) */
  ec_atomic_t referencecnt;      /* Is referenced by any outstandings */
  mxtype type;                   /* MX type () */
  u_int8_t dns_failures;         /* Number of sequential DNS failures */
};
```

To use this struct, include the file `dns_ds.h`.

### 68.14.1. See Also

See also [Chapter 20, *DNS Functions*](dns.php "Chapter 20. DNS Functions") 

| [Prev](structs.dns_cache_query.php)  | [Up](structs.php) |  [Next](structs.ec_async_job.php) |
| 68.13. dns_cache_query  | [Table of Contents](index.php) |  68.15. ec_async_job |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)