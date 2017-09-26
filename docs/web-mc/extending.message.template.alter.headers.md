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

| 12.7. Programmatically Altering Headers |
| [Prev](extending.message.template.caching.php)  | Chapter 12. Extending the Base Templating Facilities |  [Next](mc3.custom.application.php) |

## 12.7. Programmatically Altering Headers

If you would like to allow the user to be able to revise the value of a header at an arbitrary point in their template, then you can do something such as the following:

```
sub x_set_header {
  my ($self, $name, $value) = @_;
  $self->{x_headers}->{$name} = $value;
}

sub x_apply_headers {
  my ($self, $rv) = @_;

  # $rv holds the generated email output.  Split it into headers and body
  my ($hdrs, $body) = split /\r?\n\r?\n/, $rv, 2;

  # for each header that was set
  my $key;
  foreach $key (keys %{$self->{x_headers}}) {
    my $val = $self->{x_headers}->{$key};
    # FIXME: someone check my regex, quite possibly broken

    # NOTE WELL: this will only replace pre-existing single line headers and
    # will do the wrong thing with multi-line headers.  This example is provided
    # as illustrative only; it is an exercise for the reader to adapt this to
    # their own needs.

    # NOTE WELL TOO: this does not apply MIME header encoding (per RFC2047).
    # This is also an exercise for the reader

    if ($hdrs =~ s/^$key:\s+(.*)$/$key: $val/m) { 
      next;
    }
    # didn't find it, so add it
    $hdrs .= "\n$key: $val";
  }

  # return the complete modified body
  return $hdrs . "\n\n" . $body;
}

sub convertStringToExpression {
  my ($self, $string) = @_;

  unless (UNIVERSAL::isa($self, 'PostalEngine2::MessageTemplate')) {
    $string = $self;
    $self = __PACKAGE__;
  }

  # insert source transformations here
  $string =~ s/\[%=\s*:SETHDR\(([a-zA-Z-]+)\s*,\s*(.+?)\)\s*%\]/\[% \$T->x_set_header('$1', '$2'); %\]/g;
  # append a final processing step that unconditionally happens at the end
  $string .= '[% $rv = $T->x_apply_headers($rv); %]';

  # pass our partially compiled string to the default compilation processing
  return $self->SUPER::convertStringToExpression($string);
}
```

Use the preceding code with a template in the following way:

```
From: <sender@example.com>
To: <%= :PrettyTo %>
Subject: the message subject

Dear <%= :FullName %>,

This is your message.

[%= :SETHDR(Subject, the subject is now different) %]
```

The above template will generate a message such as the following:

```
From: <sender@example.com>
To: John Smith <john.smith@example.com>
Subject: the subject is now different

Dear John Smith,

This is your message.
```

As far as performance is concerned, if the generated message size is large, particularly if you have embedded large attachments, this approach can be relatively expensive because you will need to regex across the entire generated email content to find and replace the headers.

In situations like the one described above, it may be better to make the `x_apply_headers` method take effect at the time that `SETHDR` is invoked, or to pre-calculate the headers before they are emitted.

The best solution for altering headers depends heavily on the system requirements, message template size and recipient volume.

| [Prev](extending.message.template.caching.php)  | [Up](extending.message.template.php) |  [Next](mc3.custom.application.php) |
| 12.6. Caching Accesses to Expensive Resources  | [Table of Contents](index.php) |  Chapter 13. Custom Applications |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)