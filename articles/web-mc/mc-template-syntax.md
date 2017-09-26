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

| Chapter 10. Template Syntax |
| [Prev](mc-files-log-rotation.php)  |   |  [Next](mc-template-syntax-macros.php) |

## Chapter 10. Template Syntax

**Table of Contents**

<dl class="toc">

<dt>[10.1\. Available Objects](mc-template-syntax.php#mc-template-syntax-objects)</dt>

<dt>[10.2\. Macros](mc-template-syntax-macros.php)</dt>

</dl>

When you create content using the web UI you also make use of macros. Some of these fields will be created for you automatically, the "To:" field for example, and others can be selected from the Personalization list box (for more information see ["Managing Content Using the Web UI"](https://support.messagesystems.com/docs/web-mc-user/mc3-content-editing.php)). In a few cases macros may need to be entered manually.

The place holders and macros discussed in this chapter can all be defined using angle or square bracket escape sequence and using HTML entities. The following are identical in effect:

```
<%= :PrettyTo %>
&lt;%= :PrettyTo %&gt;
[%= :PrettyTo %]
```

Placeholder names are not case sensitive so `PrettyTo` and `prettyto` are identical.

### Note

The `PrettyTo` macro is designed for use in the header only. It cannot be used in the body of a mailing.

## 10.1. Available Objects

A number of objects can be accessed in the context of the template expansion code.

### 10.1.1. The $userinfo Object

`$userinfo` is a dictionary of name/value pairs that contains information about the current recipient. The available values for this object are any of the contact information fields, and any profile data fields for the recipient. A list of defined values is provided in the table below, but does not include profile data fields. (For more information on this topic see [Section 10.1.1.1, “Profile Data Fields”](mc-template-syntax.php#mc-template-syntax-userinfo-profile-data "10.1.1.1. Profile Data Fields").) It is important to note that when the template is compiled, the userinfo fields that are used in the template influence which fields are pulled in the runSQL. It is therefore beneficial to only reference fields that are actually used in the template to reduce the overall database load and bandwidth needed to process the mailing.

<a name="mc-template-syntax-userinfo-table"></a>

**Table 10.1. $userinfo values**

| Key | Table source |
| --- | --- |
| [%= :progresscounter %] | active mailings for the current mailing |
| [%= :segmentid %] | segmentid for the current mailing |
| [%= :contactid %] | contacts.id |
| [%= :statusid %] | contacts.statusid |
| [%= :localpart %] | contacts.localpart |
| [%= :domain %] | computed from domainid |
| [%= :domainid %] | contacts.domainid |
| [%= :emailaddress %] | computed from localpart and domain |
| [%= :firstname %] | contactdetails.firstname |
| [%= :lastname %] | contactdetails.lastname |
| [%= :birthdate %] | contactdetails.birthdate |
| [%= :gender %] | contactdetails.gender |
| [%= :address1 %] | contactdetails.address1 |
| [%= :address2 %] | contactdetails.address2 |
| [%= :phone1 %] | contactdetails.phone1 |
| [%= :phone2 %] | contactdetails.phone2 |
| [%= :city %] | contactdetails.city |
| [%= :region %] | contactdetails.region |
| [%= :postalcode %] | contactdetails.postalcode |
| [%= :countrycode %] | contactdetails.countrycode |
| [%= :languagecode %] | contactdetails.languagecode |
| [%= :contenttypeid %] | contactdetails.contenttypeid |
| [%= :contenttype %] | computed from contenttypeid |
| [%= :createddate %] | contactdetails.createddate |
| [%= :modifieddate %] | contactdetails.modifieddate |
| [%= :unsubscribe %] | contacts.statusid |
| [%= :fullname %] | contactdetails.firstname and contactdetails.lastname |

The macros shown in [Table 10.1, “$userinfo values”](mc-template-syntax.php#mc-template-syntax-userinfo-table "Table 10.1. $userinfo values") are available from the "Personalization" drop-down list box when you are working from the web UI as are profile data fields.

**10.1.1.1. Profile Data Fields**

If you reference a field prefixed with `pd_`, this is interpreted as accessing a profile data field by ID. For example `pd_1` is a reference to a profile data field with the ID number `1`. Use the following syntax to access profile data:

```
[%= :pd_1 %]
[%= $userinfo->{pd_1} %]
```

It is also possible to reference profile data by the profile data name. For instance, if profile data field ID `1` is `shoesize`, then the following are equivalent methods for expanding the value of that field for the current recipient:

```
[%= :pd_1 %]
[%= $userinfo->{'profile::shoesize'} %]
```

**Profile Data ID Numbers**

The profile data ID numbers are accessible from the web UI by clicking the PERSONALIZATION drop down list box when creating content. Choosing the desired profile data field will insert text such as `[%= :pd_1 %]`.

You can also make a REST API call to determine ID numbers. The easiest way to do this is to enter http://*`rest_node`*/v1.0/profilefield?orgid=*`number`*&format=xml into the address bar of your web browser. Choose the appropriate node name and org ID. You will be asked to supply a user name and password. Use the admin credentials created during installation. This API call will return a list of all profile data fields.

### 10.1.2. The `$siteinfo` Object

`$siteinfo` is a dictionary of name/value pairs (detailed below) that reflect site-wide settings in the context of the current mailing. The `$siteinfo` values are as follows:

<a name="mc-template-syntax-siteinfo-table"></a>

**Table 10.2. $siteinfo values**

| Key | Purpose |
| --- | --- |
| [%= :sendingdomain %] | The value of the sending domain field for the org |
| [%= :webdomain %] | The value of the web domain field of the org (which is actually a base URL rather than a domain) |
| [%= :verpdomain %] | The sending domain associated with the segment |

### 10.1.3. The $mailinginfo Object

`$mailinginfo` is a dictionary of name/value pairs that contains information about the mailing. The basic product-defined values are listed in the table below. This dictionary is also populated with the name/value pairs from the "Momentum Information" (formerly "Validation Context"). The product defines a handful of significant values for these (prefixed with mc_) and the integration may configure additional items as they wish here. Note that the if the template code modifies the $mailinfo dictionary, those resultant set of data is passed to the Momentum server. In other words, it is possible for the template to add or remove items from the Momentum Information as well as take action based on those values.

<a name="mc-template-syntax-mailinginfo-table"></a>

**Table 10.3. $mailinginfo values**

| Key | Purpose |
| --- | --- |
| [%= :campaign_id %] | The org ID and the mailing ID, both as decimal numbers, joined together using a colon, for example: `1:1` |
| [%= :mc_bindings %] | A comma separated list of bindings/binding groups that will be used by Message Central for this message |
| [%= :mc_throttle %] | The throttle parameter to be used by Momentum for this mailing (not a per message value) |

### 10.1.4. $JSON Object

When using a REST API-triggered mailing, the "context" parameter may be passed to the template; `{{{$JSON}}}` is the result of calling `{{{JSON::jsonToObj}}}` on this string and is provided as a convenience to you. For example, if a recipient was added to the mailing and the context was set as follows:

{ *`mailing_parameters ...`*     , "rid": 25, "context": {"ordernumber": 123}}

(For a description of the triggered mailing API, see "[Triggered Mailings](https://support.messagesystems.com/docs/web-mc-rest/rest.triggered.mailing.php)".)

In this case, you can access the order number in the following way:

`[% $rv .= $JSON->{ordernumber}; %]`

Note that you must use the full escape-to-Perl notation to access the $JSON object.

### Warning

`$rv` is the internal variable that the generator uses to hold the entire contents of the template during generation. You **must** append values to this variable rather than simply assigning values to it. If you use the assignment operator the template will be truncated and the entire mailing may fail.

If your Perl logic generates output that it appends to the `$rv` variable, then that output must observe the transfer encoding of the current MIME part. We provide a method on the `$T` object for this purpose:

```
[%
$rv .= $T->te_encode("my output string with an = sign in it");
%]
```

In the example above, the `=` sign has special meaning in quoted-printable encoding and must be encoded. The `te_encode` function will apply quoted-printable encoding (if the current part uses quoted-printable!) and so the above will effectively produce:

```
[%
$rv .= "my output string with an =3D sign in it";
%]
```

It should also be noted that if your generated output contains newlines, you should ensure that any line starting with a "." character is doubled up to use two "." characters. The `te_encode` function will handle this case for you if you pass your multi-line content to it. If you are emitting line by line, the responsibility for dealing with this (it is called "dot-stuffing" or "SMTP session transparency") is yours.

### 10.1.5. Date Place holders

You may need to format dates in non-standard ways. The various date formats are listed below:

*   `[%= :currentdate_month_dd_yyyy %]` – Expands to the current date as returned from `strftime` using the format %B %d, %Y.

*   `[%= :currentdate_mm_dd_yyyy %]` – Expands to the current date as returned from `strftime` using the format %m/%d/%Y.

*   `[%= :currentdate_mm_dd_yy %]` – Expands to the current date as returned from `strftime` using the format %m/%d/%y.

*   `[%= :currentdate_dow_dd_mon_yy %]` – Expands to the current date as returned from `strftime` using the format %a, %d %b %y.

*   `[%= :currentdate_dow_dd_mon_yyyy %]` – Expands to the current date as returned from `strftime` using the format %a, %d %b %Y.

*   `[%= :currentdate_dow_dd_mon %]` – Expands to the current date as returned from `strftime` using the format %a, %d %b.

*   `[%= :currentdate_dd_mon_yy %]` – Expands to the current date as returned from `strftime` using the format %d %b %y.

*   `[%= :currentdate_dd_mon_yyyy %]` – Expands to the current date as returned from `strftime` using the format %d %b %Y.

*   `[%= :currentdate_month_day_year %]` – Expands to the current date as returned from `strftime` using the format %B %d, %Y.

*   `[%= :currentdate_mon_dd_year %]` – Expands to the current date as returned from `strftime` using the format %b %d %Y.

*   `[%= :currentdate_yyyy_mm_dd %]` – Expands to the current date as returned from `strftime` using the format %Y/%m/%d.

*   `[%= :currentdate_yyyy-mm-dd %]` – Expands to the current date as returned from `strftime` using the format %Y-%m-%d.

*   `[%= :currentdatetime %]` – Expands to the current date as returned from `strftime` using the format %B %d, %Y %H:%M:%S.

For the meaning of the `strftime` format specifiers see the man page for the `strftime` function.

### 10.1.6. Other Place holders

*   `[%= :trackerimage %]` – This will be replaced by the open-tracking image. It will render invisibly in an HTML portion of an email message. This macro is automatically inserted into content that is created through the Message Central web UI. If you create content using the REST API, this macro must be manually inserted if you wish to track 'opens'.

*   `[%= :idstring %]` – This will be replaced with an identifier containing the orgid, mailingid, segmentid, templateid, contactid and progresscounter fields that uniquely identify the recipient and message instance within the mailing.

*   `[%= :unsubscribe %]` – Generates an unsubscribe link.

*   `[%= :prettyto %]` – Evaluates to a well-formed name and email address suitable for use in message headers, applying RFC 2047 header encoding so that international characters are correctly presented.

    ### Note

    The `PrettyTo` macro is designed for use in the header only. It cannot be used in the body of an email.

| [Prev](mc-files-log-rotation.php)  |   |  [Next](mc-template-syntax-macros.php) |
| 9.7. Log Rotation Configuration Files  | [Table of Contents](index.php) |  10.2. Macros |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)