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

| 12.3. Modifying existing Behavior |
| [Prev](extending.message.template.extending.php)  | Chapter 12. Extending the Base Templating Facilities |  [Next](extending.message.template.properties.php) |

## 12.3. Modifying existing Behavior

After following the preceding steps, you will have routed all message compilation through your own function. Currently this does nothing more than the basic template syntax. The following sections modify the system behavior.

### 12.3.1. Adding a new macro

The `convertStringToExpression` method of the parent class is responsible for returning a string containing Perl source code that the other portions of the template subsystem will compile for use by the generator, view-in-browser and preview facilities.

The `$string` parameter contains the source of the complete template, which follows the syntax described in [Chapter 10, *Template Syntax*](mc-template-syntax.php "Chapter 10. Template Syntax") .

If you'd like to add a macro that evaluates to some boiler plate text, you would add the following lines to MyTemplate.pm:

<a name="extending.message.template.convertstringtoexpression"></a>

**Example 12.1. Changing disclaimer text**

```
my $disclaimer_text = "This message was brought to you by MyFantasticProductName!";

sub x_DISCLAIMER {
  my ($self) = @_;
  return $self->te_encode($disclaimer_text);
}

sub convertStringToExpression {
  my ($self, $string) = @_;

  unless (UNIVERSAL::isa($self, 'PostalEngine2::MessageTemplate')) {
    $string = $self;
    $self = __PACKAGE__;
  }

  # insert source transformations here
  $string =~ s/\[%=\s*:DISCLAIMER\s*%\]/\[% \$rv .= \$T->x_DISCLAIMER(); %\]/g;

  # pass our partially compiled string to the default compilation processing
  return $self->SUPER::convertStringToExpression($string);
}
```

Given the following template source code:

```
From: <sender@example.com>
To: <%= :PrettyTo %>
Subject: the message subject

Dear <%= :FullName %>,

This is your message.

[%= :DISCLAIMER %]
```

The overridden `convertStringToExpression` method in [Example 12.1, “Changing disclaimer text”](extending.message.template.modify.behavior.php#extending.message.template.convertstringtoexpression "Example 12.1. Changing disclaimer text") causes this to now be expanded to:

```
From: <sender@example.com>
To: <%= :PrettyTo %>
Subject: the message subject

Dear <%= :FullName %>,

This is your message.

[% $rv .= $T->x_DISCLAIMER(); %]
```

Which in turn is ultimately expanded to text such as the following:

```
From: <sender@example.com>
To: John Smith <john.smith@example.com>
Subject: the message subject

Dear John Smith,

This is your message.

This message was brought to you by MyFantasticProductName!
```
<a name="extending.message.template.template.instance"></a>

**The Template Instance**

The template instance is referred to as `$T` in the Perl code that you are generating, but any methods that you define will receive that template instance as their first parameter, which is often assigned to the `$self` variable inside those methods. Be careful to avoid accidentally using `$self` in the Perl source that you generate in `convertStringToExpression`, as the `$self` parameter in `convertStringToExpression` refers to a different instance of the message template class.

If you are adding functionality to the template class and defining methods, you are strongly encouraged to prefix those method names with `x_` to avoid the possibility of accidentally colliding with present or future functionality provided by the base MessageTemplate class. The same applies to properties that you want to store in the template object itself; prefix the names with `x_` to avoid present or future collisions.

| [Prev](extending.message.template.extending.php)  | [Up](extending.message.template.php) |  [Next](extending.message.template.properties.php) |
| 12.2. Extending MessageTemplate  | [Table of Contents](index.php) |  12.4. Defined Properties of the MessageTemplate Class |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)