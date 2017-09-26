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

| 14.7. auth_radius – RADIUS based SMTP Authentication |
| [Prev](modules.auth_mysql.php)  | Chapter 14. Modules Reference |  [Next](modules.beik.php) |

## 14.7. auth_radius – RADIUS based SMTP Authentication

<a class="indexterm" name="idp10678592"></a>

**Configuration Change. ** This feature is available starting from Momentum 2.2.0.18.

The `auth_radius` module allows Momentum to provide authenticated SMTP sessions via SMTP AUTH using up to 10 RADIUS servers. The authentication mode is limited to simple authentication; challenge/response RADIUS authentication is not supported.

The following example demonstrates how to configure Momentum to pass LOGIN credentials through to RADIUS. We recommend employing TLS when using LOGIN authentication, as the password is sent over the wire in clear text. Two radius servers are configured; when an authentication attempt is made, the servers will be tried in the order that they were listed in the configuration file. If no response is received within the configured `timeout`, then the request will be repeated against that server until the maximum number of retries is reached. If a retry would exceed `max_tries` then the next server will be attempted. If no response is received from any of the radius servers, an error will be logged and authentication will not succeed. Otherwise, the radius server indicates whether authentication succeeded and this is reflected in the SMTP session.

<a name="example.auth_radius"></a>

**Example 14.9. auth_radius module**

```
# Configure the RADIUS client
Module auth/auth_radius auth_radius {
  NAS-IP-Address = 10.0.0.1 # the IP address of this SMTP server
  server:one [
    host = "radius-1.example.com"
    secret = "secret1"
    max_tries = "1"
    timeout = "30"
  ]
  server:two [
    host = "radius-2.example.com"
    secret = "secret2"
    max_tries = "2"
    timeout = "30"
  ]
}

Esmtp_Listener = (
  *:25 [
    0.0.0.0/0 = (
      # Activate the AUTH LOGIN smtp extension
      LOGIN [
        extension = "AUTH"
        extension_argument = "LOGIN"
        # use RADIUS as the authentication backend
        uri = "radius://"
      ]
      continue
    )
  ]
)
```

The RADIUS protocol says that a RADIUS client "SHOULD" send either `NAS-IP-Address` or `NAS-Identifier`, perhaps even both. The Momentum RADIUS client implementation does not force you to specify either. If you are configuring a cluster, and your RADIUS server doesn't require either of these options to be present (the FreeRADIUS server implementation is one that does not), you might find it simplest to omit them from your configuration file.

### Configuration Options

The following options are supported:

<dl class="variablelist">

<dt>NAS-IP-Address</dt>

<dd>

Specifies the IP address of the RADIUS client. This may be omitted, but some RADIUS server implementations require either NAS-IP-Address or NAS-Identifier to be present in the request packet.

</dd>

<dt>NAS-Identifier</dt>

<dd>

A 32-bit integer client identifier. This may be omitted, but some RADIUS server implementations require either NAS-IP-Address or NAS-Identifier to be present in the request packet.

</dd>

</dl>

RADIUS servers can be defined using the dictionary syntax shown above; the dictionary name must be prefixed with `server:` to be recognized as a server definition. The portion of the name after the colon is arbitrary, but should be unique among the radius servers being defined. The contents of the server dictionary can have the following keys:

<dl class="variablelist">

<dt>host</dt>

<dd>

The hostname or IP address of the RADIUS server. If a colon is present in the string then the left side of the string will be used as the hostname/IP address and the right hand side will be used as the port number on the server. If left unspecified, the RADIUS standard port number of 1812 will be used.

</dd>

<dt>secret</dt>

<dd>

A secret string shared between the client and the server.

</dd>

<dt>max_tries</dt>

<dd>

The maximum number of times we'll try this RADIUS server for a given authentication attempt.

</dd>

<dt>timeout</dt>

<dd>

The maximum number of seconds to wait for a response from this RADIUS server before trying again or giving up.

</dd>

</dl>

You can additionally provide a 'map' that is applied to the provided username and password. This allows for the addition of default domain to usernames, etc. The allowable keys in the map are `username` and `password`, which sets the mapping for the username passed into RADIUS, respectively. The contents of the map stanza look like the following:

<a name="example.auth_radius.map"></a>

**Example 14.10. auth_radius map**

```
Module auth/auth_radius auth_radius {
  NAS-IP-Address = 10.0.0.1 # the IP address of this SMTP server
  server:one [
    host = "radius-1.example.com"
    secret = "secret1"
    max_tries = "1"
    timeout = "30"
  ]
  map [
    username = "%{username_localpart}@%{username_domain||example.com}"
  ]
}
```

This stanza has the effect of providing a default domain on the username provided to RADIUS in the event that a domain was not provided. Possible template values are:

<dl class="variablelist">

<dt>username</dt>

<dd>

The provided username.

</dd>

<dt>username_localpart</dt>

<dd>

The email localpart of the provided username.

</dd>

<dt>username_domain</dt>

<dd>

The email domain of the provided username.

</dd>

<dt>password</dt>

<dd>

The password provided.

</dd>

<dt>||</dt>

<dd>

If the token to the left of the `||` is the empty string, then the value to the right of the `||` will be used in its place.

</dd>

</dl>

| [Prev](modules.auth_mysql.php)  | [Up](modules.php) |  [Next](modules.beik.php) |
| 14.6. auth_mysql – MySQL Based SMTP Authentication  | [Table of Contents](index.php) |  14.8. beik – BEIK Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)