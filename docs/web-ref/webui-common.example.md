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

| Appendix D. Example LDAP `webui-common.conf` File |
| [Prev](smtp-response-codes.php)  | Part III. Appendices |  [Next](log_formats.php) |

## Example LDAP `webui-common.conf` File

This appendix provides a sample `webui-common.conf` file for use when setting up Active Directory authentication with Momentum 3.2.2\. For more information see [Section 2.3, “Setting Up Active Directory Authentication With Momentum 3.2.2”](conf.ldaps.php "2.3. Setting Up Active Directory Authentication With Momentum 3.2.2").

### Note

The ‘`»`’ character in the following example is used to indicate that the `query` should appear on one line. If this line is not broken up, it will be truncated in some forms of the documentation.

```
# Holds definitions needed by both ecelerity and eccmgr when used with
# the webui and user management database

# WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING
# For this to actually work, you'll also need to set the Control_Listener
# to use AuthLoginParameters instead of AuthDigestMD5Parameters.
# WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING WARNING

Datasource "activedirectory_auth" {
  uri = ( "ldaps://ads.example.com" )
  no_cache = true
}

Datasource "activedirectory_groups" {
  uri = ( "ldaps://ads.example.com" )
  no_cache = true
}

ds_ldap {
  debug_level = "DEBUG"
}

ds_core {
  debug_level = "DEBUG"
}

auth_ds {
  Scheme "ecauth" {
    Authenticate {
      # Return the primaryGroupID field, which is an integer.
      # The auth_ds module will authenticate the user
      # if the following query succeeds, and the primaryGroupID is non-zero.
      query = "ldaps:///CN=$user,CN=Users,DC=ads,DC=example,DC=com?primaryGroupID??(&(objectClass=user)»
                 (|(memberOf=cn=Momo-SuperAdmins,cn=users,dc=ads,dc=example,dc=com)»
                 (memberOf=cn=Momo-Admins,cn=users,dc=ads,dc=example,dc=com)»
                 (memberOf=cn=Momo-Users,cn=users,dc=ads,dc=example,dc=com)))»
                 ?bindname=CN=$user%2cCN=Users%2cDC=ads%2cDC=example%2cDC=com,»
                 x-bindpw=$pass,x-disable-connection-cache=true"
      cache = "activedirectory_auth"
      map = [
        user = "%{username}"
        pass = "%{password}"
      ]
    }
    # Groups aren't supported in Momentum 3.2.0.
  }
}
```

| [Prev](smtp-response-codes.php)  | [Up](p.appendices.php) |  [Next](log_formats.php) |
| Appendix C. SMTP Response Codes  | [Table of Contents](index.php) |  Appendix E. Log Formats |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)