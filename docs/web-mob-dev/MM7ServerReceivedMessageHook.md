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

| Chapter 29. MM7 Server Received Message Hook |
| [Prev](MM7LogTempfailHook.examples.php)  | Part III. MM7 Hooks |  [Next](MM7ServerReceivedMessageHook.interface.php) |

## Chapter 29. MM7 Server Received Message Hook

**Table of Contents**

<dl class="toc">

<dt>[29.1\. Purpose](MM7ServerReceivedMessageHook.php#MM7ServerReceivedMessageHook.purpose)</dt>

<dt>[29.2\. Interface](MM7ServerReceivedMessageHook.interface.php)</dt>

<dt>[29.3\. Examples](MM7ServerReceivedMessageHook.examples.php)</dt>

</dl>

## 29.1. Purpose

The MM7 Server Received Message Hook enables customer applications to inspect and modify MM7 server requests received by Mobile Momentum. The hook is invoked once for each incoming MM7 request following parsing of the MM7 soap message. The following elements are available to the hook for inspection:

*   MM7 transaction type

*   MM7 SOAP envelope

The MM7 transaction type is defined as the following enum:

```
enum transaction_type {DeliverReq = 1, DeliveryReportReq,
ReadReplyReq};
```

The following elements are available to the hook for inspection and/or modification:

*   MM7 SOAP attachment

*   An ec_dict structure containing the MM7 SOAP envelope XML parse result

*   An ec_double_list, also a product of the MM7 SOAP envelope XML parse, containing the intended recipients of the MM7 transaction

The following information elements are not pre-populated and are available to the hook for modification:

*   The MM7 SOAP status code to be returned in the MM7 response

*   The MM7 SOAP status text to be returned in the MM7 response

*   The MM7 SOAP status details to be returned in the MM7 response

*   The MM7 SOAP service code to be returned in the MM7 response

These elements are accessible by customer hook implementations using the mm7_transaction structure:

```
struct mm7_transaction {
  ec_blobject * my_blob;
  enum transaction_type trx_type;
  string soap_envelope;
  string soap_attachment;
  void * indoc; //xmlDocPtr
  ECDict tags;
  ec_double_list recipients;
  int complete;
  /* The following values get set in the mm7 response */
  unsigned int status_code;
  string status_text;
  string status_details;
  string service_code;
};
```

Note that this structure contains more fields than the information elements noted above. Do not access or modify any information within the mm7_transaction structure except as indicated above.

### 29.1.1. Return Values

Finally, the hook implementation may set the following return values:

*   MM7_CONTINUE – continue converting the MM7 request into an ec_message

*   MM7_DELIVERED – the MM7 request is considered "delivered". Cease additional conversion, but do not perform Momentum failure processing.

*   MM7_PERM_FAIL – the MM7 request is considered "permanently failed". Performs Momentum failure processing.

| [Prev](MM7LogTempfailHook.examples.php)  | [Up](p.mm7.php) |  [Next](MM7ServerReceivedMessageHook.interface.php) |
| 28.3. Examples  | [Table of Contents](index.php) |  29.2. Interface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)