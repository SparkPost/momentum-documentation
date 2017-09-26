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

| Part II. C API |
| [Prev](arch.secondary.apis.php)  |   |  [Next](adaptive.php) |

## Part II. C API

This part contains all C API functions grouped thematically and arranged alphabetically.

### Note

Some of the APIs documented here have been created manually and others are automatically generated from functions found in the header files. Automatically generated documentation is noted as such.

**Table of Contents**

<dl class="toc">

<dt>[2\. Adaptive Functions](adaptive.php)</dt>

<dt>[3\. AV/Scanning Functions](antivirus.php)</dt>

<dt>[4\. Audit Series Functions](audit_series.php)</dt>

<dt>[5\. Bag Functions](bag.php)</dt>

<dt>[6\. Base64 Encode/Decode and Related Functions](base64.php)</dt>

<dt>[7\. Blobject Functions](blobject.php)</dt>

<dt>[8\. Bounce Functions](bounce.php)</dt>

<dt>[9\. Buffer Functions](buffer.php)</dt>

<dt>[10\. CIDR Functions](cidr.php)</dt>

<dt>[11\. Configuration Functions I (binding/domain)](config_get1.php)</dt>

<dt>[12\. Configuration Functions II](config_get.other.php)</dt>

<dt>[13\. Connection-related Functions](connection.php)</dt>

<dt>[14\. Control Functions](control.php)</dt>

<dt>[15\. Conversion](data_type_conversion.php)</dt>

<dt>[16\. Datasource Functions](datasource.php)</dt>

<dt>[17\. Debug Functions](debug.php)</dt>

<dt>[18\. Dictionary Functions](dict.php)</dt>

<dt>[19\. DKIM/DK Functions](dkim.php)</dt>

<dt>[20\. DNS Functions](dns.php)</dt>

<dt>[21\. ec_cache Functions](eccache.php)</dt>

<dt>[22\. ec_double Functions](double.php)</dt>

<dt>[23\. echash Functions](echash.php)</dt>

<dt>[24\. Event Functions](event.php)</dt>

<dt>[25\. Fast Cache Functions](fastcache.php)</dt>

<dt>[26\. File-related Functions](file.php)</dt>

<dt>[27\. httpclnt Functions](httpclnt.php)</dt>

<dt>[28\. httpsrv Functions](httpsrv.php)</dt>

<dt>[29\. Interpolation Functions](interpolation.php)</dt>

<dt>[30\. io_wrapper Functions](io_wrapper.php)</dt>

<dt>[31\. Logging Functions](logging.php)</dt>

<dt>[32\. Mail Queue Functions](mailq.php)</dt>

<dt>[33\. Memory Functions](memory.php)</dt>

<dt>[34\. Message Functions](ec_message.php)</dt>

<dt>[35\. Miscellaneous Functions](misc.php)</dt>

<dt>[36\. Module Configuration Functions](module.config.php)</dt>

<dt>[37\. Module-related Functions](module.php)</dt>

<dt>[38\. Netlistener Functions](netlistener.php)</dt>

<dt>[39\. Pointer Array Functions](ptr_array.php)</dt>

<dt>[40\. RFC Functions](rfc.php)</dt>

<dt>[41\. Scheduler Functions](scheduler.php)</dt>

<dt>[42\. Scriptlet (and Alerting) Functions](script.php)</dt>

<dt>[43\. Security](security.php)</dt>

<dt>[44\. Sieve Functions](sieve.php)</dt>

<dt>[45\. Skiplist Functions](skiplist.php)</dt>

<dt>[46\. SMPP Functions](smpp.php)</dt>

<dt>[47\. SMTP-related Functions](smtp.php)</dt>

<dt>[48\. Socket Address Functions](sockaddr.php)</dt>

<dt>[49\. Spool-related Functions](spool.php)</dt>

<dt>[50\. SSL Functions](ssl.php)</dt>

<dt>[51\. String Functions](string.php)</dt>

<dt>[52\. Threadpool Functions](threadpool.php)</dt>

<dt>[53\. Throttle Functions](throttle.php)</dt>

<dt>[54\. Time Series Functions](time_series.php)</dt>

<dt>[55\. Utility Functions](utility.php)</dt>

<dt>[56\. Validation Context Functions](validate.php)</dt>

<dt>[57\. XMPP Functions](xmpp.php)</dt>

</dl>

| [Prev](arch.secondary.apis.php)  |   |  [Next](adaptive.php) |
| 1.4. Secondary Momentum APIs  | [Table of Contents](index.php) |  Chapter 2. Adaptive Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)