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

| Chapter 25. REST Structs |
| [Prev](rest.Recipientv37.php)  |   |  [Next](rest.autogen.struct.campaign.php) |

## Chapter 25. REST Structs

**Table of Contents**

<dl class="toc">

<dt>[25.1\. assets](rest.autogen.structs.php#rest.autogen.struct.assets)</dt>

<dt>[25.2\. campaign](rest.autogen.struct.campaign.php)</dt>

<dt>[25.3\. content.attachment](rest.autogen.struct.content.attachment.php)</dt>

<dt>[25.4\. content.sms 3.7](rest.autogen.struct.content.sms3.7.php)</dt>

<dt>[25.5\. content](rest.autogen.struct.content.php)</dt>

<dt>[25.6\. content 3.7](rest.autogen.struct.content3.7.php)</dt>

<dt>[25.7\. dbprocess](rest.autogen.struct.dbprocess.php)</dt>

<dt>[25.8\. dict:profileData](rest.autogen.struct.dict.profileData.php)</dt>

<dt>[25.9\. dict:vctx](rest.autogen.struct.dict.vctx.php)</dt>

<dt>[25.10\. link](rest.autogen.struct.link.php)</dt>

<dt>[25.11\. list](rest.autogen.struct.list.php)</dt>

<dt>[25.12\. listtag](rest.autogen.struct.listtag.php)</dt>

<dt>[25.13\. mailing.lists](rest.autogen.struct.mailing.lists.php)</dt>

<dt>[25.14\. mailing.segment](rest.autogen.struct.mailing.segment.php)</dt>

<dt>[25.15\. mailing](rest.autogen.struct.mailing.php)</dt>

<dt>[25.16\. org](rest.autogen.struct.org.php)</dt>

<dt>[25.17\. preview 3.5](rest.autogen.struct.preview3.5.php)</dt>

<dt>[25.18\. preview 3.7](rest.autogen.struct.preview3.7.php)</dt>

<dt>[25.19\. profilefield](rest.autogen.struct.profilefield.php)</dt>

<dt>[25.20\. recipient](rest.autogen.struct.recipient.php)</dt>

<dt>[25.21\. recipient 3.7](rest.autogen.struct.recipient3.7.php)</dt>

<dt>[25.22\. report.mailingbouncedetails](rest.autogen.struct.report.mailingbouncedetails.php)</dt>

<dt>[25.23\. report.mailingevents](rest.autogen.struct.report.mailingevents.php)</dt>

<dt>[25.24\. report.mailingstatistics](rest.autogen.struct.report.mailingstatistics.php)</dt>

<dt>[25.25\. report.mailingsummary](rest.autogen.struct.report.mailingsummary.php)</dt>

<dt>[25.26\. report.segmentstatistics](rest.autogen.struct.report.segmentstatistics.php)</dt>

<dt>[25.27\. spamcheck 3.5](rest.autogen.struct.spamcheck3.5.php)</dt>

</dl>

This chapter provides a description of the structures used by the REST API.

If a field is identified as a key field, this means that it maps to a keyfield in the database and that it is read only. Detailed documentation of fields of type `map` is given in [Chapter 26, *REST Mappings*](rest.autogen.map.php "Chapter 26. REST Mappings") .

## 25.1. assets

Assets are used to store images on the asset server that is part of MC install. assets are stored in the database and are served upon request by the asset server. Each asset can be accessed via an URL that points to the asset server and can be included in the content when it is created.

*   **aid** – Unique ID of the Asset.

    This property is a key field. Its data type is `int`.

*   **name** – The name of the Asset.

    This property is not a key field. Its data type is `string`.

*   **type** – The MIME content-type for this asset. This is typically a string of the form "image/jpeg", listing just the MIME-type, You may use any encoding format (jpeg, png, bmp, tiff) for the data you wish, but it is your responsibility to ensure that the value of the "binary" property, when base64 decoded, is encoded using that encoding format, and that the "type" property is consistent with that encoding.

    This property is not a key field. Its data type is `string`.

*   **url** – URL of the asset in the asset server. Each asset can accessed via an URL that points to the asset server and this URL can be included in the content when it is created. URL is of the format http://clickdomain/assets/orgid/aid.filetype Example: http://test.messagesystems.com/assets/1/1.jpg

    This property is not a key field. Its data type is `string`.

*   **binary** – If the Assets object was requested with full=true, then the binary field is present and contains the binary data from the asset, represented here as a base64 encoded string. The string MUST be a base64 encoded string. This base64 content is used as-is in the asset. You may use any encoding format(jpeg, png, bmp, tiff) for the data you wish, but it is your responsibility to ensure that the value of the "binary" property, when base64 decoded, is encoded using that encoding format, and that the "type" property is set consistent with that encoding.

    This property is not a key field. Its data type is `string`. This field is only returned when requested by setting 'full=true' in the parameters for the request.

| [Prev](rest.Recipientv37.php)  |   |  [Next](rest.autogen.struct.campaign.php) |
| Recipientv37  | [Table of Contents](index.php) |  25.2. campaign |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)