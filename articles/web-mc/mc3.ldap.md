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

| 3.9. Using LDAP with Message Central |
| [Prev](mc-post.click-tracker.cache.php)  | Chapter 3. Post-installation Tasks |  [Next](mc-post-installation.imd.php) |

## 3.9. Using LDAP with Message Central

As of version 3.6, you can manually configure Message Central to connect via SSL/TLS to an LDAP service, and use LDAP instead of the Message Central database to authenticate users. Roles and permissions will continue to be managed in Message Central.

This feature is implemented using Momentum's Control facility which has supported authentication in the Momentum web UI using an LDAP datasource since version 3.2.2\. If the configuration settings for LDAP authentication are present, then Message Central will use that method for authentication instead of the default. Note: If you authenticate using LDAP, you cannot set user passwords using the Message Central web UI. For more information see [Users](https://support.messagesystems.com/docs/web-mc-user/mc3-administration-users.php).

### Note

For your convenience, LDAP tools are available in the `/opt/msys/3rdParty/bin` directory.

Message Systems does not provide support for the use of any third party tools included or referenced by name within our products or product documentation; support is the sole responsibility of the third party provider.

### 3.9.1. LDAP Configuration

### Note

In order to use LDAP there must first be matching LDAP and Message Central accounts. To set up a Message Central account see [Users](https://support.messagesystems.com/docs/web-mc-user/mc3-administration-users.php). Users are matched using the `query` option within an authenticate stanza.

In order to use LDAP authentication for the Message Central web UI or for the Message Central REST be sure you are familiar with the following sections of the Momentum manual:

*   [Control_Listener](https://support.messagesystems.com/docs/web-ref/ecelerity.conf.php#ecelerity.conf3.control_listener)

*   [The ds_core Module](https://support.messagesystems.com/docs/web-ref/modules.ds_core.php)

*   [The auth_ds Module](https://support.messagesystems.com/docs/web-ref/modules.auth_ds.php)

    The "bind-only mode" is currently supported in Message Central. We have not implemented an LDAP query that returns the common name of the user.

Set up LDAP authentication in the following way:

1.  Follow this step only if you are using SSL/TLS. Create the directory `/opt/msys/3rdParty/etc/openldap/cacerts` and place the `.pem` certificate file there.

2.  Follow this step only if you are using SSL/TLS. Create a file with the contents TLS_CACERT /opt/msys/3rdParty/etc/openldap/cacerts/*`example-CA.pem`* replacing *`example-CA.pem`* with your certificate name. Save this file as `ldap.conf` to the `/opt/msys/3rdParty/etc/openldap/` directory.

3.  Create the configuration file `/opt/msys/pe2/etc/mc_auth_ldap.conf` with the following contents:

    ```
    include "/opt/msys/etc/installer/ecelerity.d/mcdb.conf"

    Control_Listener {
      AuthLoginParameters = [
        uri = "mcauth://"
        realm = "Message Central"
      ]
      Enable_Authentication = "true"

      Enable_Authorization = "false"
      AuthorizationParameters = [
        uri = "mcauth://"
        realm = "Message Central"
      ]

      Listen "/tmp/2025" {
        Enable_Authentication = "false"
      }
      Listen "127.0.0.1:2025" {
      }
    }

    Datasource "ldap_auth" {
      uri = ( "ldaps://ads.example.net" )
      no_cache = true
    }

    ds_ldap {
      #debug_level = "DEBUG"
      #client_debug_level = 255
    }

    ds_core {
      #debug_level = "DEBUG"
    }

    auth_ds {
      Scheme "mcauth" {
        Authenticate {
          query = "ldaps:///DC=example,DC=net????bindname=$user@example.net,x-bindpw=$pass,»
          x-ignore-referrals=1,x-ldap-version=3"
          cache = "ldap_auth"
          map = [
            user = "%{username}"
            pass = "%{password}"
          ]
        }
      }
    }
    ```

    ### Note

    The ‘`»`’ character in the preceding example is used to indicate that the `query` should appear on one line. If this line is not broken up, it will be truncated in some forms of the documentation.

    Change the uri parameter in the datasource stanza to match your LDAP service URI. If desired, enable SSL/TLS by using `ldaps://` at the beginning of the URI.

    Be sure to configure an LDAP query string in the auth_ds stanza which maps Message Central users to the corresponding LDAP users.

    For OpenLDAP the `bindname` must map to the Distinguished Name (dn) but for Active Directory the `bindname` can map to any of the following fields:

    *   `User Principal Name (userPrincipalName)`

    *   `Distinguished Name (dn)`

    *   `SAM Account Name (sAMAccountName)`

    **Mapping bindname to LDAP Names**

    Check LDAP user entries to determine the best format, as the dn format varies. For example, in OpenLDAP, if the Distinguished Name (dn) looks like this on the LDAP server:

    `dn: uid=testuser,ou=People,dc=example,dc=net`

    Then the bindname mapping would be:

    `bindname=uid=$user%2cou=People%2cDC=example%2cDC=net`
    ### Note

    The comma is a special character and must be encoded as ‘`%2c`’.

    For example, in Active Directory if the User Principal Name (userPrincipalName) looks like this on the Active Directory server:

    `userPrincipalName: testuser@example.net`

    Then the bindname mapping would be:

    `bindname=$user@example.net`
4.  Create a configuration file `/opt/msys/pe2/webui/application/configs/5-auth.ini` with the contents:

    ```
    [production]

    ; whether LDAP authentication is enabled instead of the default, true or false
    auth_ldap = true
    ; config file to set the Control listener, authentication mechanism and
    ; parameters such as the authentication query
    auth_config = "/opt/msys/pe2/etc/mc_auth_ldap.conf"

    [testing : production]

    [development : production]
    ```

    This file enables LDAP functionality for the MC Web UI and the REST API and sets the location of the `mc_auth_ldap.conf` file.

| [Prev](mc-post.click-tracker.cache.php)  | [Up](mc-post-installation.php) |  [Next](mc-post-installation.imd.php) |
| 3.8. Remove Clicktracker Cache  | [Table of Contents](index.php) |  3.10. Configuring For Intelligent Message Disposition |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)