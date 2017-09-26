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

| 12.2. Extending MessageTemplate |
| [Prev](extending.message.template.php)  | Chapter 12. Extending the Base Templating Facilities |  [Next](extending.message.template.modify.behavior.php) |

## 12.2. Extending MessageTemplate

There are three steps in extending MessageTemplate:

*   Define a Perl module that extends the base MessageTemplate. class

*   Install that Perl module in the site Perl directory.

*   Update `/opt/msys/pe2/etc/pe2.conf` on the generator, webui, clicktracker and REST machines (safest to update it on all of them) to tell Message Central about your custom template class.

### 12.2.1. Defining a Template Class

Use the following code as a starting point; name it `MyTemplate.pm`:

```
package MyTemplate;
  use PostalEngine2::MessageTemplate;
  use PostalEngine2::Link;
  use PostalEngine2::Config;
  use base qw/PostalEngine2::MessageTemplate/;

  sub convertStringToExpression {
    my ($self, $string) = @_;

    unless (UNIVERSAL::isa($self, 'PostalEngine2::MessageTemplate')) {
    $string = $self;
    $self = __PACKAGE__;
  }

  # insert source transformations here

  # pass our partially compiled string to the default compilation processing
  return $self->SUPER::convertStringToExpression($string);
}
```

### 12.2.2. Installing the Perl module to the site Perl Directory

If you are familiar with building and installing Perl modules, you will simply perform a site-perl installation from the package that you create via your `Makefile.PL` file.

In practical terms, this means that you will copy `MyTemplate.pm` to `/opt/msys/3rdParty/lib/perl5/site_perl/5.10.0/MyTemplate.pm`. You may need to create the 5.10.0 directory under `/opt/msys/3rdParty/lib/perl5/site_perl`.

This step must be carried out on each node that performs template expansion. It is simplest to deploy this file on all of your Message Central nodes.

### 12.2.3. Updating `pe2.conf`

Edit `/opt/msys/pe2/etc/pe2.conf` and add (or update) the following line:

`pe2g.template_class = MyTemplate`

This step must be carried out on each node that performs template expansion. It is simplest to deploy this file on all of your Message Central nodes.

For more information about this option see [pe2g.template_class](conf.mcg.pe2g.template_class.php "pe2g.template_class").

| [Prev](extending.message.template.php)  | [Up](extending.message.template.php) |  [Next](extending.message.template.modify.behavior.php) |
| Chapter 12. Extending the Base Templating Facilities  | [Table of Contents](index.php) |  12.3. Modifying existing Behavior |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)