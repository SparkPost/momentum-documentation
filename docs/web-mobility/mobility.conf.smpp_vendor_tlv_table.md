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

| smpp_vendor_tlv_table |
| [Prev](mobility.conf.smpp_vendor_command_status_table.php)  | 3.1. SMPP Configuration Option Details |  [Next](admin.use.cases.php) |

<a name="mobility.conf.smpp_vendor_tlv_table"></a>
## Name

smpp_vendor_tlv_table — The path to a file defining vendor-specific type length values (TLVs)

## Synopsis

`smpp_vendor_tlv_table = "path_to_CSV_file"`

<a name="idp2269952"></a>
## Description

SMS carriers and aggregators may use or require an SMPP protocol extension called vendor-specific type length values (TLVs). This option provides the path to a CSV file defining vendor-specific TLVs to be used or interpreted for the SMPP connection.

There is no default value for this option.

<a name="idp2272352"></a>
### SMPP Vendor TLV Configuration

An SMPP Vendor TLV Configuration is defined through a CSV file. Comment line starts with ‘`;`’ or ‘`#`’. No empty lines are accepted in the CSV file. The format of the CSV file is as follows:

*   Column 1: tagName –Name description of the TLV tag. Prefixing with the vendor name is recommended.

*   Column 2: tagID – Hex value of the TLV value.

*   Column 3: type – TLV SMPP PDU type, corresponding to the SMPP PDU type defined in Spec v3.4 Session 3.1\. Valid values are:

    *   0: Integer

    *   1: Octet String, not necessariy NULL terminated

    *   2: C-Octet String, NULL terminated

*   Column 4: minLen – Minimum octet length of the TLV

*   Column 5: maxLen – Maximum octet length of the TLV

*   Column 6: bitmask – Define which PDU has this TLV. Bitmask values are:

    *   0x01: TLV valid in MO

    *   0x02: TLV valid in MT

    *   0x03: The TLV is valid in both MO and MT PDUs.

    *   0x04: TLV valid in Delivery Receipt

*   Column 7: Default value to put into MT when converting an email to SMS

Find below a sample configuration file:

```
;comment line: starts with ";" or "#"
;no empty line accepted
;
;Valid value for TLV TYPE
#define TLV_TYPE_INTEGER 0
#define TLV_TYPE_OCTETS  1  /* not necessarily NULL terminated, has length constraint */
#define TLV_TYPE_STRING  2  /* NULL terminated, does not have length contraint */
;
#define TLV_IN_MO   0x01
#define TLV_IN_MT   0x02
#define TLV_IN_DR   0x04
;
;minLen, maxLen: size of octets
;
;tagName,        tagID, type,minLen,maxLen,validIn,default
my_operator,     0x1402,  1,   5,      5,    0x03, Message Systems
my_tariff,       0x1403,  1,   5,      5,    0x03
my_sessionid,    0x1404,  2,   1,      64,   0x03
my_servicedist,  0x1405,  2,   1,      64,   0x02, Message Systems
```

### Usage Note

For mobile originated (MO) messages, a message context variable is created for each TLV entry's tagName. Each message context variable name is the same name as tagName in the TLV table entry and the value is set from the corresponding SMPP TLV value. This enables MO conversion hook points to inspect the values of vendor-specific TLVs.

For mobile terminated (MT) messages, hook points may create message context variables with names corresponding to tagNames in TLV entries. When generating the SMPP message, values of any such message context variables override the corresponding default values provided in the TLV table.

<a name="idp2293968"></a>
## Scope

`smpp_vendor_tlv_table` is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.smpp_vendor_command_status_table.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](admin.use.cases.php) |
| smpp_vendor_command_status_table  | [Table of Contents](index.php) |  Chapter 4. Use Cases |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)