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

| ec_valid_binding |
| [Prev](sieve.ref.ec_url_ripper.php)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_valid_mime.php) |

<a name="sieve.ref.ec_valid_binding"></a>
## Name

ec_valid_binding, ec_valid_binding_group — Check whether a named MultiVIP© binding exists

## Synopsis

`ec_valid_binding` [ *`binding`* ]

`ec_valid_binding_group` [ *`binding_group`* ]

<a name="idp30776208"></a>
## Description

`ec_valid_binding` is a Sieve test that checks whether the specified binding *`binding`* exists.

`ec_valid_binding_group` is a Sieve test that checks whether the specified binding group *`binding_group`* exists.

<a name="example.ec_valid_binding"></a>

**Example 16.103. ec_valid_binding example**

The following example shows how you can check whether a binding or binding group exists before assigning a message to it. Note that the binding `smtp-04` and binding group `group-c` do not exist.

```
Binding_Group "group-a" {
  Binding "smtp-01" {
    EHLO_Hostname = smtp-01.com
  }
}

Binding_Group "group-b" {
  Binding "smtp-02" {
    EHLO_Hostname = smtp-02.com
  }
  Binding "smtp-03" {
    EHLO_Hostname = smtp-03.com
  }
}

sieve "sieve1" {
  script "set_binding_phase1" {
    source = "/path/to/myscript.siv"
  }
}
```

and the contents of `myscript.siv`:

```
$to = envelope :domain "to";
if ec_test :is $to "foo.com" {
  if ec_valid_binding "smtp-04" {
    ec_set_binding "smtp-04";
  } elsif ec_valid_binding "smtp-01" {
    ec_set_binding "smtp-01";
  }
} elsif ec_test :is $to "bar.com" {
  if ec_valid_binding_group "group-c" {
    ec_set_binding_group "group-c";
  } elsif ec_valid_binding_group "group-b" {
    ec_set_binding_group "group-b";
  }
}
```

<a name="idp30787024"></a>
## See Also

[ec_set_binding](sieve.ref.ec_set_binding.php "ec_set_binding").

| [Prev](sieve.ref.ec_url_ripper.php)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_valid_mime.php) |
| ec_url_ripper  | [Table of Contents](index.php) |  ec_valid_mime |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)