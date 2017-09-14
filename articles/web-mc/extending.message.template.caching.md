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

| 12.6. Caching Accesses to Expensive Resources |
| [Prev](extending.message.template.tracked.links.php)  | Chapter 12. Extending the Base Templating Facilities |  [Next](extending.message.template.alter.headers.php) |

## 12.6. Caching Accesses to Expensive Resources

Should you need to access a database or a remote web service to facilitate your template expansion, you need to keep in mind that there can be a large number of recipients generated in quick succession (by default, one hundred thousand per generator process), so you will want to take some action to reduce the volume of queries that you present against external services, both to reduce the load on those resources and to reduce the latency for a given generator run.

The recommended approach for this is to define a global cache for those resources. In the example below, we alter the DISCLAIMER macro to pull its text from a database:

```
# database handle
my $dbh = undef;

# results cache
my $db_cache = {};

sub x_LookupSomething {
  my ($self, $key) = @_;

  # Return from the cache if we have it already:
  if (exists $db_cache->{$key}) {
    return $db_cache->{$key};
  }

  # Connect if we have not already done so
  if (!$dbh) {
    $dbh = DBI->connect(...);
  }

  # look it up
  my $sth = $dbh->prepare('select value from mytable where key = ?');
  $sth->execute($key);
  my $r = $sth->fetchrow_hashref();
  # cache a copy for possible later use
  $db_cache->{$key} = $r;
  return $r;
}

sub x_DISCLAIMER {
  my ($self) = @_;
  return $self->te_encode($self->x_LookupSomething('DISCLAIMER'));
}
```

The above will prevent repeated queries for the same data, but you should also consider the cost of making many discrete database calls versus the cost of one big up-front call.

For example, if your template can pull in fragments of text from a database of thousands of possible text fragments, and you are sending a mailing to a relatively low volume of recipients per generator run, then the above per-record caching scheme will be effective. If your recipient volume is such that you are very likely to use most or all of those text fragments in a given mailing run, then you should consider using the following approach instead, which fetches all of the possible rows the first time any one of them is needed:

```
# database handle
my $dbh = undef;

# results cache
my $db_cache = {};

sub x_LookupSomething {
  my ($self, $key) = @_;

  # Return from the cache if we have it already:
  if (exists $db_cache->{$key}) {
    return $db_cache->{$key};
  }

  # Connect if we have not already done so
  if (!$dbh) {
    $dbh = DBI->connect(...);
  }

  # look up everything
  my $sth = $dbh->prepare('select key, value from mytable');
  $sth->execute();
  # cache all the possible values
  while (my $r = $sth->fetchrow_hashref()) {
    $db_cache->{$r->{key}} = $r->{value};
  }

  # and return the one they asked for
  return $db_cache->{$key};
}
```

This technique means that your generator will issue one large query per generator run, versus several thousand discrete queries across the generator run. (It should also be noted at this point that the generator is threaded, so you will see one query per generator thread per run, versus thousands).

| [Prev](extending.message.template.tracked.links.php)  | [Up](extending.message.template.php) |  [Next](extending.message.template.alter.headers.php) |
| 12.5. Programmatically Overriding Properties of Tracked Links  | [Table of Contents](index.php) |  12.7. Programmatically Altering Headers |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)