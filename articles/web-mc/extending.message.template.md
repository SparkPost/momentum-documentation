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

| Chapter 12. Extending the Base Templating Facilities |
| [Prev](enhanced.dynamic.content.case.insensitive.php)  |   |  [Next](extending.message.template.extending.php) |

## Chapter 12. Extending the Base Templating Facilities

**Table of Contents**

<dl class="toc">

<dt>[12.1\. How MessageTemplate Operates](extending.message.template.php#extending.message.template.fundamentals)</dt>

<dt>[12.2\. Extending MessageTemplate](extending.message.template.extending.php)</dt>

<dt>[12.3\. Modifying existing Behavior](extending.message.template.modify.behavior.php)</dt>

<dt>[12.4\. Defined Properties of the MessageTemplate Class](extending.message.template.properties.php)</dt>

<dt>[12.5\. Programmatically Overriding Properties of Tracked Links](extending.message.template.tracked.links.php)</dt>

<dt>[12.6\. Caching Accesses to Expensive Resources](extending.message.template.caching.php)</dt>

<dt>[12.7\. Programmatically Altering Headers](extending.message.template.alter.headers.php)</dt>

</dl>

If either of the following circumstances apply, then this section on extending templating may be of interest:

*   You would like to add additional macros as shortcuts for larger sections of Perl escapes to make it easier for your content users to create more dynamic content.

*   You would like to programmatically set headers or content without requiring that the content use any explicit macros.

To do this, you'll need to extend the base MessageTemplate class provided by Message Central.

## 12.1. How MessageTemplate Operates

Before extending the template class, you need to understand the fundamentals of how the MessageTemplate class operates. This file is found in the `/opt/msys/lib/perl5/vendor_perl/5.10.0/PostalEngine2/` directory.

**Configuration Change. ** Prior to version 3.6, this file was located at /opt/msys/lib/perl5/vendor_perl/5.10.0/*`arch-os`*thread-multi/PostalEngine2/MessageTemplate.pm .

When the generator runs, it needs to expand the template for each recipient in the mailing (recipients are selected via segmentation). The generator will create a new instance of the configured template class. Part of the processing carried out in the constructor of this class is the loading of the template source from the database and the conversion of this source into a Perl code reference. Each template is loaded and compiled once for each block that is processed by the generator (by default, the system batches generator runs in chunks of one hundred thousand recipients, meaning that each distinct template is fetched and compiled once per hundred thousand recipients).

The compilation stage has the goal of converting the saved template source into a code reference. This code reference is evaluated for each recipient with a freshly initialized set of environmental data—the `$T, $siteinfo, $userinfo, $mailinginfo, $rv` and `$JSON` variables are re-set for each recipient. (For documentation of these variables see [Chapter 10, *Template Syntax*](mc-template-syntax.php "Chapter 10. Template Syntax") .)

| [Prev](enhanced.dynamic.content.case.insensitive.php)  |   |  [Next](extending.message.template.extending.php) |
| 11.3. Case-insensitive Comparisons  | [Table of Contents](index.php) |  12.2. Extending MessageTemplate |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)