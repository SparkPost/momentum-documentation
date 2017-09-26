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

| Chapter 28. httpsrv Functions |
| [Prev](apis.http_status_classifier.php)  | Part II. C API |  [Next](apis.ec_httpsrv_ctx_get.php) |

## Chapter 28. httpsrv Functions

**Table of Contents**

<dl class="toc">

<dt>[ec_httpsrv_ctx_get](apis.ec_httpsrv_ctx_get.php) — Gets the per-request closure blobject from a session</dt>

<dt>[ec_httpsrv_ctx_set](apis.ec_httpsrv_ctx_set.php) — Sets a per-request closure blobject on a session</dt>

<dt>[ec_httpsrv_register](apis.ec_httpsrv_register.php) — Registers an HTTP URI handler</dt>

<dt>[ec_httpsrv_request_accept_construct_get](apis.ec_httpsrv_request_accept_construct_get.php) — Returns the accept construct from the current session</dt>

<dt>[ec_httpsrv_request_content_type_get](apis.ec_httpsrv_request_content_type_get.php) — Gets the content type and charset from the session request</dt>

<dt>[ec_httpsrv_request_data_get](apis.ec_httpsrv_request_data_get.php) — Gets a handle on the request payload data</dt>

<dt>[ec_httpsrv_request_data_get_json](apis.ec_httpsrv_request_data_get_json.php) — Gets a JSON object representation of the request payload data</dt>

<dt>[ec_httpsrv_request_data_get_string](apis.ec_httpsrv_request_data_get_string.php) — Buffers request payload data to memory and returns a string pointer to it</dt>

<dt>[ec_httpsrv_request_data_get_xml](apis.ec_httpsrv_request_data_get_xml.php) — Gets an XML object representation of the request payload data</dt>

<dt>[ec_httpsrv_request_event_get](apis.ec_httpsrv_request_event_get.php) — Returns the Event from the current session</dt>

<dt>[ec_httpsrv_request_event_get_scheduler_inst](apis.ec_httpsrv_request_event_get_scheduler_inst.php) — Returns the scheduler for an Event from the current session</dt>

<dt>[ec_httpsrv_request_header_get](apis.ec_httpsrv_request_header_get.php) — Gets the value of a specific HTTP request header</dt>

<dt>[ec_httpsrv_request_method_get](apis.ec_httpsrv_request_method_get.php) — Gets the method from the session request</dt>

<dt>[ec_httpsrv_request_subject_cn_get](apis.ec_httpsrv_request_subject_cn_get.php) — Gets the peer SSL certificate common name string</dt>

<dt>[ec_httpsrv_request_url_get](apis.ec_httpsrv_request_url_get.php) — Gets the request URL</dt>

<dt>[ec_httpsrv_request_username_get](apis.ec_httpsrv_request_username_get.php) — Gets the authenticated user name</dt>

<dt>[ec_httpsrv_response_append](apis.ec_httpsrv_response_append.php) — Append data to the session response output</dt>

<dt>[ec_httpsrv_response_flush](apis.ec_httpsrv_response_flush.php) — Flush pending session response output</dt>

<dt>[ec_httpsrv_response_header_set](apis.ec_httpsrv_response_header_set.php) — Sets a header in the session response</dt>

<dt>[ec_httpsrv_response_io](apis.ec_httpsrv_response_io.php) — Set the session response to an IO object</dt>

<dt>[ec_httpsrv_response_json](apis.ec_httpsrv_response_json.php) — Set the session response to a JSON object</dt>

<dt>[ec_httpsrv_response_printf](apis.ec_httpsrv_response_printf.php) — Format and append a string to the session response output</dt>

<dt>[ec_httpsrv_response_status_denied](apis.ec_httpsrv_response_status_denied.php) — Sets the HTTP status to indicate a 403 error, and sets content-type</dt>

<dt>[ec_httpsrv_response_status_error](apis.ec_httpsrv_response_status_error.php) — Sets the HTTP status to indicate a server error, and sets content-type</dt>

<dt>[ec_httpsrv_response_status_not_found](apis.ec_httpsrv_response_status_not_found.php) — Sets the HTTP status to indicate a 404 error, and sets content-type</dt>

<dt>[ec_httpsrv_response_status_ok](apis.ec_httpsrv_response_status_ok.php) — Sets the HTTP status to indicate success, and sets content-type</dt>

<dt>[ec_httpsrv_response_status_set](apis.ec_httpsrv_response_status_set.php) — Sets the HTTP status for the session response</dt>

<dt>[ec_httpsrv_response_status_set_std](apis.ec_httpsrv_response_status_set_std.php) — Sets the HTTP status for the session response</dt>

<dt>[ec_httpsrv_response_string](apis.ec_httpsrv_response_string.php) — Set the session response to an ec_string object</dt>

<dt>[ec_httpsrv_response_vprintf](apis.ec_httpsrv_response_vprintf.php) — Format and append a string to the session response output</dt>

<dt>[ec_httpsrv_response_xml](apis.ec_httpsrv_response_xml.php) — Set the session response to an XML object</dt>

<dt>[ec_httpsrv_service_ctx_get](apis.ec_httpsrv_service_ctx_get.php) — Returns the closure parameter that was registered with the handler</dt>

<dt>[ec_httpsrv_session_resume](apis.ec_httpsrv_session_resume.php) — Arranges for a suspended http session to be resumed</dt>

<dt>[ec_httpsrv_session_suspend](apis.ec_httpsrv_session_suspend.php) — Arranges for an http session to be suspended</dt>

</dl>

The APIs documented here relate to the [httpsrv](https://support.messagesystems.com/docs/web-rest-injector/rest.configuring.php#rest.httpsrv) module.

| [Prev](apis.http_status_classifier.php)  | [Up](pt.apis.php) |  [Next](apis.ec_httpsrv_ctx_get.php) |
| http_status_classifier  | [Table of Contents](index.php) |  ec_httpsrv_ctx_get |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)