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

| Chapter 5. Authentication |
| [Prev](rest.response.codes.php)  |   |  [Next](rest.roles.php) |

## Chapter 5. Authentication

**Table of Contents**

<dl class="toc">

<dt>[5.1\. HTTP Digest Authentication](rest.authentication.php#rest.digest.authentication)</dt>

</dl>

The API authentication is based on HTTP authentication. Clients should supply both the username and password created for integration with the API. Depending on the HTTP client in use, this username and password may only need to be supplied upon the first request to the API. Our recommendation is to use HTTPS with Basic authentication. Digest authentication can also be used over HTTPS, but there is no gain in doing so, as Digest authentication requires additional client—server round trips to complete, which will add latency to each API request.

<a name="idp197136"></a>

**Example 5.1. Using cURL**

`curl -u "username:password" "https://api.mc.messagesystems.com/v1.0/recipient?orgid=2"`

If the authentication fails, a "401 Unauthorized" message will be returned. You can add users via the web UI. For more information see [Users](https://support.messagesystems.com/docs/web-mc-user/mc3-administration-users.php).

<a name="idp200864"></a>

**Example 5.2. Using digest authentication and no SSL**

`curl --digest -u "username:password" "http://api.mc.messagesystems.com/v1.0/recipient?orgid=2"`

If the authentication fails, a "401 Unauthorized" message will be returned.

## 5.1. HTTP Digest Authentication

A request that does not provide valid authentication credentials fails with a response from the server with a challenge as follows.

```
HTTP/1.0 401 Unauthorized
Server: HTTPd/0.9
Date: Sun, 10 Apr
2010 20:26:47 GMT
WWW-Authenticate: Digest realm="messagesystems.com",qop="auth,auth-int",
  nonce="dcd98b7102dd2f0e8b11d0f600bfb0c093",opaque="5ccc069c403ebaf9f0171e9517f40e41"
```

A client is expected to re-submit the request as a response to the challenge presented by the server

```
GET /v1.0/recipient?orgid=2 HTTP/1.0
Host: localhost
Authorization: Digest username="admin", realm="testrealm@messagesystems.com",
  nonce="dcd98b7102dd2f0e8b11d0f600bfb0c093", uri="/v1.0/recipient?orgid=2",
  qop=auth, nc=00000001, cnonce="0a4f113b", response="6629fae49393a05397450978507c4ef1",
  opaque="5ccc069c403ebaf9f0171e9517f40e41"
```

| [Prev](rest.response.codes.php)  |   |  [Next](rest.roles.php) |
| Chapter 4. Common HTTP Status/Response Codes  | [Table of Contents](index.php) |  Chapter 6. Roles, Permissions and Security |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)