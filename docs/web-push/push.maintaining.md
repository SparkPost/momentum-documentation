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

| Appendix A. Maintaining APNs Recipient Lists |
| [Prev](push.apns.lua.php)  | Part I. Configuring Momentum for Apple Push Notification service (APNs) |  [Next](push.apple.error.php) |

## Appendix A. Maintaining APNs Recipient Lists

You can maintain APNs recipient lists by using a Perl script such as the one shown here.

The CPAN module Net::APNs::Extended::Feedback is used in the following script. For more information about this module refer to the CPAN reference page: [Net::APNs::Extended::Feedback](http://search.cpan.org/~xaicron/Net-APNs-Extended-0.02/lib/Net/APNs/Extended/Feedback.pm).

```
#!/opt/msys/3rdParty/bin/perl5.16

use strict;

use Net::APNs::Extended::Feedback;

our ($conf);

# if using separate conf.file, run command: apns_feedback conf.file

#----------- BEGIN of conf.file -----------
$conf = {
  is_sandbox => 1,
  cert_file    => '/path/to/cert',   #### fill me up
  key_file     => '/path/to/key',    #### fill me up
};

sub storeResult {
  my $feedback = shift;
  my $num = scalar(@$feedback);
  print("$num records retrieved!\n");
  if ($num > 0) {
    foreach my $node (@$feedback) {
      #print(ref($node));
      while (my ($key, $value) = each(%$node)) {
        print "$key => $value\n";
      }
    }
  }
}

#----------- END of conf.file -----------

# Enable if read $conf from configuration file
#my $conffile = $ARGV[0];
#do $conffile or die "$@: $conffile does not exist\n";

die "$@: No cert defined\n" if !defined($conf->{cert_file});
die "$@: No key defined\n" if !defined($conf->{key_file});
$conf->{is_sandbox} = '0' if !defined($conf->{is_sandbox});

my $apns = Net::APNs::Extended::Feedback->new(%$conf);
my $feedback = $apns->retrieve_feedback;
# return value is an ArrayRef of Hashrefs
# time_t : epoch time of when the notification was rejected
# token : hex encoded device token
# [
#   {
#     time_t    => "1",
#     token => "hex123",
#   },
#   {
#     time_t    => "2",
#     token => "hex987",
#   },
# ];
storeResult($feedback);
```

| [Prev](push.apns.lua.php)  | [Up](push.apple.php) |  [Next](push.apple.error.php) |
| Chapter 4. APNs and Lua  | [Table of Contents](index.php) |  Appendix B. Apple Status Codes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)