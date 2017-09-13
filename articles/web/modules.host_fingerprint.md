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

| 14.30. fingerprint – Host Fingerprinting |
| [Prev](modules.fsecure.php)  | Chapter 14. Modules Reference |  [Next](modules.httpio.php) |

## 14.30. fingerprint – Host Fingerprinting

<a class="indexterm" name="idp12147072"></a>

Passive OS fingerprinting is installed as part of the Policy Tools suite. This functionality yields information about inbound connections.

The Host Fingerprint module performs passive OS fingerprinting based on the incoming SMTP connections and exposes the resulting information through a Sieve action.

**Configuration Change. ** The Host Fingerprinting module was discontinued as of version 2.2.2.30 and is again available as of version 2.2.3.46.

### 14.30.1. Configuration

<a name="example.fingerprint"></a>

**Example 14.50. fingerprint module**

```
Validate validate/policy_tools fingerprint {
  fingerprints = "/opt/ecelerity/etc/fingerprints"
  max_cache_size = 10000
}
```

<dl class="variablelist">

<dt>fingerprints</dt>

<dd>

The `fingerprints` option specifies the location of a cache to keep a list of common hosts.

</dd>

<dt>max_cache_size</dt>

<dd>

The `max_cache_size` option specifies the maximum size of the cache of common hosts. The default value for this option is `10000`.

</dd>

</dl>

**Configuration Change. ** This feature is available as of version 2.2.3.46.

As of version 2.2.3.46, passive operating system fingerprinting runs as a daemon that Momentum communicates with over a socket, `/tmp/p0fd`. This daemon is started using the command: **/etc/init.d/ecp0f start** . The fingerprints are all included in the ecp0f package and are located here: `/opt/ecelerity/3rdParty/etc/p0f/`. These fingerprints do not need to be modified.

### 14.30.2. Operational Example

The Host Fingerprint module exposes Sieve functionality. This functionality is explained in: [ec_host_fingerprint](sieve.ref.ec_host_fingerprint.php "ec_host_fingerprint").

| [Prev](modules.fsecure.php)  | [Up](modules.php) |  [Next](modules.httpio.php) |
| 14.29. fsecure – F-Secure  | [Table of Contents](index.php) |  14.31. http_io – HTTP I/O Provider |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)