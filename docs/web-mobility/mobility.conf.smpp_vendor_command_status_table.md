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

| smpp_vendor_command_status_table |
| [Prev](mobility.conf.smpp_use_reverse_address_mappings.php)  | 3.1. SMPP Configuration Option Details |  [Next](mobility.conf.smpp_vendor_tlv_table.php) |

<a name="mobility.conf.smpp_vendor_command_status_table"></a>
## Name

smpp_vendor_command_status_table — define the path name to the vendor-specific command status codes

## Synopsis

`smpp_vendor_command_status_table = "path_to_CSV_file"`

<a name="idp2243216"></a>
## Description

SMS carriers and aggregators may use or require an SMPP protocol extension called vendor-specific command status codes. This parameter provides the path to a CSV file defining vendor specific command status codes to be used or interpreted for the SMPP connection. See SMPP Vendor Specific Command Status Configuration for more information.

There is no default value for this option.

<a name="idp2245728"></a>
### SMPP Vendor Specific Command Status Configuration

SMPP Vendor specific command status codes are defined in a CSV file. The format of this CSV file is as following:

<a name="idp2247520"></a>**Comments**

Comment line starts with ‘`;`’ or ‘`#`’. No empty lines are accepted in the CSV file. Comment lines are ignored during processing.

<a name="idp2250336"></a>**Fields and Values**

Each data line in the CSV file has a value separated by a comma. The fields are:

*   `Column 1:` hex value of the status code.

*   `Column 2:` Action to take on the ESME upon receiving the status code. Valid values are:

    *   `0: perm` – failure, corresponding request failed without retry

    *   `1: temp` – failure, corresponding request will be retried

*   `Column 3:` Reason for failure or a description of the return code

<a name="idp2260208"></a>**Sample Command Status Configuration CSV File**
```
;comment line: starts with ";" or "#"
;no empty line accepted
;
0x404,0,Invalid account Error
0x405,0,No longer applicable
0x406,1,Destination busy - The message was not sent due to the fact that the QoS was busy. Please try again.
0x407,0,Reply Type Error
```
<a name="idp2263040"></a>
## Scope

smpp_vendor_command_status_table is valid in the binding, binding_group, domain and global scopes.

| [Prev](mobility.conf.smpp_use_reverse_address_mappings.php)  | [Up](mobility.smpp.options.php#mobility.conf) |  [Next](mobility.conf.smpp_vendor_tlv_table.php) |
| smpp_use_reverse_address_mappings  | [Table of Contents](index.php) |  smpp_vendor_tlv_table |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)