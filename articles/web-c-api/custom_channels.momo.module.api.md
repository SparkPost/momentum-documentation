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

| A.2. Momentum Modules |
| [Prev](custom_channels.overview.php)  | Appendix A. Custom Delivery Modules |  [Next](custom_channels.custom.module.api.php) |

## A.2. Momentum Modules

The Generic Delivery and Generic HTTP Client modules are the base modules used in developing a custom delivery module. This section provides details about these modules as they relate to the custom build_request, handle_response, and status_classifier functions.

### A.2.1. Generic Delivery Module

The following is the module API for the Generic Delivery module (`generic_delivery`).

```
/* Delivery Action Codes */
/* *
 * Return value of custom status_classifier
 * Note: DELIVERY_CONTINUE is the same value as "no status code" 
 * */        
#define DELIVERY_CONTINUE 0 
#define DELIVERY_DONE 1
#define DELIVERY_SUCCESS 2
#define DELIVERY_TEMPFAILED 3
#define DELIVERY_PERMFAILED 4

/* Context Variables */
/* address, e.g. From */ 
#define VCTX_KEY_DLV_SOURCE_ADDRESS "DLV_Source_Addr"
/* id, e.g. protocol specific */
#define VCTX_KEY_DLV_SOURCE_ID "DLV_Source_ID"
/* address, e.g. To */
#define VCTX_KEY_DLV_DEST_ADDRESS "DLV_Dest_Addr"
/* id, e.g. protocol specific */
#define VCTX_KEY_DLV_DEST_ID "DLV_Dest_ID"  
/* protocol specific */                           
#define VCTX_KEY_DLV_TRANSACTION_ID "DLV_Transaction_ID"
/* response status code */
#define VCTX_KEY_DLV_RESPONSE_STATUS "DLV_Response_Status"
/* response status description */
#define VCTX_KEY_DLV_RESPONSE_STATUS_DETAIL "DLV_Response_Status_Detail"
/* bytes of the whole delivery message */
#define VCTX_KEY_DLV_MSG_LENGTH "DLV_Msg_Length"
/* IP address of connected remote entity */
#define VCTX_KEY_DLV_REMOTE_IP_ADDRESS "DLV_Remote_IP_Address"

#define DELIVERY_API(x) x

/* Message Function */
/* *
 * ob_get_current_message
 * 
 * Utility function to return the current ec_message being processed:
 * o delivery batch mode disabled: returns conn->curr_message
 * o delivery batch mode enabled: returns the 1st message in conn->curr_messages array
 * */
DELIVERY_API(ec_message*) ob_get_current_message(connection_handle *connh);
```
**Delivery Action Codes**

Your custom status_classifier callback must classify the status codes associated with your service as successfully delivered, temporarily failed, or permanently failed and return the corresponding delivery action codes. For details about these return codes, see [Table A.5, “Return Codes for Status Classifier Callback”](custom_channels.custom.routines.php#status.classifier.return.values.table "Table A.5. Return Codes for Status Classifier Callback").

**Message Context Variables**

The context variables specifically associated with a custom delivery module are `DLV_Response_Status` and `DLV_Response_Status_Detail`. The disposition of a message within the generic_delivery and httpclnt module depends on the settings of the `DLV_Response_Status` context variable. This context variable will not initially exist for the message you are processing. The base modules consider no context variable to be a successfully delivered message. If you encounter an error in your custom functions, you must set the `DLV_RESPONSE_STATUS` context variable to a corresponding status code. These status codes are specific to your delivery module. Your status_classifier callback classifies these status codes into successful delivery, permfail delivery, or tempfail delivery. The system will retry tempfailed messages within the parameters defined in the Momentum configuration for your delivery domains.

The corresponding `DLV_Response_Status_Detail` context variable is used to provide an additional description of the status code. Only the `DLV_Response_Status` is used for classifying the message disposition.

For additional details about ec_message context variables, see [Message Context Variables](https://support.messagesystems.com/docs/web-ref/policy.context-mess.php). For a list of all `DLV_` variables, see [Callouts and Push Notifications](https://support.messagesystems.com/docs/web-push/push.generic_delivery_lua.php).

**Message Function**

Your custom build_request and handle_response callbacks use [ob_get_current_message](apis.ob_get_current_message.php "ob_get_current_message") to get the current ec_message.

### A.2.2. Generic HTTP Client Module

The following is the module API for the Generic HTTP Client Module (`httpclnt`).

```
/* HTTP Internal Codes */
/* *
 * Return value of custom build_request and custom handle_response
 * */
#define HTTP_INTERNAL_CONT 0
#define HTTP_INTERNAL_DONE 1
#define HTTP_INTERNAL_FAIL -1
#define HTTP_INTERNAL_OK HTTP_INTERNAL_CONT

/* Max HTTP response length */
#define MAX_HTTP_RESPONSE_LENGTH 2048

#define HTTP_API(x) x

/* Utility to initialize function pointers */
ec_pd* http_pd_init(const char *prot);

/* httpclnt Functions */ 
/* *
 * Utilities to build HTTP request message
 * */
HTTP_API(int) http_request_add_header(http_session *sess, const char *header,
  const char *value, int replace);
HTTP_API(int) http_request_delete_header(http_session *sess, const char *header);
HTTP_API(void) http_request_set_body(http_session *sess, const char *body);
HTTP_API(int) http_status_classifier(int status);
/* *
 * http_request_finalize
 *
 * Utility to build request->data from request_line + headers + body
 * Shall be called when modified structural data in http_request
 * to re-construct the raw data to be sent (request->data)
 * */
HTTP_API(int) http_request_finalize(http_session *sess, int update);
```
**HTTP Internal Codes**

Your custom build_request and handle_response callbacks must return one of the `HTTP_Internal` codes. For details about these return codes, see [Table A.3, “Return Codes for Build Request Callback”](custom_channels.custom.routines.php#http.internal.request.table "Table A.3. Return Codes for Build Request Callback") and [Table A.4, “Return Codes for Handle Response Callback”](custom_channels.custom.routines.php#http.internal.response.table "Table A.4. Return Codes for Handle Response Callback"), respectively.

**Function Pointer Utility**

The utility `http_pd_init` is used to get a protocol driver structure in the module setup routine. For details, see [the section called “Module Configuration Setup”](custom_channels.custom.module.api.php#custom_channels.config.routine "Module Configuration Setup").

**httpclnt Functions**

Momentum provides several functions that can be used when building an HTTP request message. Definitions of these functions are available at [Chapter 27, *httpclnt Functions*](httpclnt.php "Chapter 27. httpclnt Functions") .

**Data Structures**

The data structures `http_session`, `http_request`, and `http_response` are used in your custom callbacks. Definitions are available at [Section 68.54, “http_session”](structs.http_session.php "68.54. http_session").

The `http_request` structure within the `http_session` structure data is used by your custom build_request callback to set the information for the message payload. [Table A.1, “Data Fields for http_request”](custom_channels.momo.module.api.php#http.request.fields.table "Table A.1. Data Fields for http_request") provides a description of the data fields. Some of the fields are initialized from message context variables and configuration options.

<a name="http.request.fields.table"></a>

**Table A.1. Data Fields for http_request**

| Field | Description |
| :-- | :-- |
| string **method* | String that contains the HTTP method. The httpclnt module will initialize this value to `VCTX_KEY_HTTP_METHOD` if it exists, [http_method](https://support.messagesystems.com/docs/web-ref/conf.ref.http_method.php) if it is defined, or “POST” otherwise. |
| string **version* | String that contains the HTTP version. The httpclnt module will initialize this value to `VCTX_KEY_HTTP_VERSION` if it exists, [http_version](https://support.messagesystems.com/docs/web-ref/conf.ref.http_version.php) if it is defined, or “1.1” otherwise. |
| string **uri* | String that contains the URI to use on the HTTP request line. The httpclnt module will initialize this value to `VCTX_KEY_HTTP_URI` if it exists, [http_uri](https://support.messagesystems.com/docs/web-ref/conf.ref.http_uri.php) if it is defined, or “\” otherwise. |
| *ec_hash_table headers*  | Hash table of headers to be used in building the HTTP message headers for transmission. “Host” header – The headers hash table will contain the HTTP Host name for the Host header if `VCTX_KEY_HTTP_HOST` exists or [http_host](https://support.messagesystems.com/docs/web-ref/conf.ref.http_host.php) is defined. If neither is defined, the “Host” header will not be present in the headers hash table. “Authorization” header – The headers will contain the HTTP Authorization base64 encoded Basic authorization value if `VCTX_KEY_BASIC_AUTH` exists or [http_basic_auth](https://support.messagesystems.com/docs/web-ref/conf.ref.http_basic_auth.php) is defined. If neither is defined, the “Authorization” header will not be present in the headers hash table. Additional headers that your delivery module requires must be added to the header hash using [http_request_add_header](apis.http_request_add_header.php "http_request_add_header"). |
| string** body*  | Set to NULL before the build_request handler is called. For details, see [Section A.4.1, “Build Request”](custom_channels.custom.routines.php#custom_channels.build.request "A.4.1. Build Request"). |
| string** data*  | Set to NULL before the build_request handler is called. For details, see [Section A.4.1, “Build Request”](custom_channels.custom.routines.php#custom_channels.build.request "A.4.1. Build Request"). |
| void **userdata* | Available for use by your custom delivery module. If your delivery module uses this field to store reference to allocated memory, the module is responsible for freeing it. |

Prior to calling your custom handle_response, the `http_response` structure within the `http_session` structure data is allocated and contains values based on the HTTP response message received from the server. [Table A.2, “Data Fields for http_response”](custom_channels.momo.module.api.php#http.response.fields.table "Table A.2. Data Fields for http_response") provides a description of the data fields available for use in the handle_response callback. Other fields are for internal use only.

<a name="http.response.fields.table"></a>

**Table A.2. Data Fields for http_response**

| Field | Description |
| :-- | :-- |
| string **version* | String that contains the HTTP version reported in the HTTP response status line |
| string **status_code* | String that contains the HTTP status code reported in the HTTP response status line |
| string **status_reason* | String that contains the HTTP status reason reported in the HTTP status line |
| *ec_hash_table headers*  | Headers hash table that contains the HTTP response headers and corresponding values |
| string** data*  | String that contains the complete HTTP response (status line, headers, and body, if present) |
| char **body* | Pointer to the body content within the HTTP response string |

| [Prev](custom_channels.overview.php)  | [Up](custom_channels.php) |  [Next](custom_channels.custom.module.api.php) |
| A.1. Overview  | [Table of Contents](index.php) |  A.3. Custom Delivery Module Setup |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)