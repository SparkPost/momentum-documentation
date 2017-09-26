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

| 68.79. SMPP_PDU |
| [Prev](structs.smpp_conn.php)  | Chapter 68. Structs |  [Next](structs.smpp_seg_data.php) |

## 68.79. SMPP_PDU

This struct is defined as follows:

```
/* used pre-processor to expand union pdu_u so that APIScan doesn't need
 * further heavy lifting. If smpp_pdu.def changes (e.g. smpp command def
 * needs changes), the expanded union may need to be regenerated.*/
/* 
union pdu_u {
  #define OPTIONAL_BEGIN
  #define TLV_INTEGER(name, octets) unsigned long name;
  #define TLV_NULTERMINATED(name, max_len) string *name;
  #define TLV_OCTETS(name, min_len, max_len) string *name;
  #define TLV_LIST(name, size) ec_ptr_array name;
  #define OPTIONAL_END
  #define INTEGER(name, octets) unsigned long name;
  #define NULTERMINATED(name, max_octets) string *name;
  #define NULDELIMITED(name, max_octets) string *name;
  #define OCTETS(name, field_giving_octets) string *name;
  #define PDU(name, id, fields) struct name { fields } name;
  #include "smpp_pdu.def"
 };*/
typedef union pdu_u pdu_u;
union pdu_u {
  ...
}

typedef struct SMPP_PDU SMPP_PDU;
struct SMPP_PDU {
    unsigned long type;
    const char *type_name;
    pdu_u u;
};
```

To use this struct, include the file `modules/mobility/smpp.c`.

### 68.79.1. See Also

[Chapter 46, *SMPP Functions*](smpp.php "Chapter 46. SMPP Functions") 

| [Prev](structs.smpp_conn.php)  | [Up](structs.php) |  [Next](structs.smpp_seg_data.php) |
| 68.78. smpp_conn  | [Table of Contents](index.php) |  68.80. smpp_seg_data |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)