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

| 14.43. jlog – The jlog Module |
| [Prev](modules.ipv6_lookup.php)  | Chapter 14. Modules Reference |  [Next](modules.live.bounce.updates.php) |

## 14.43. jlog – The jlog Module

<a class="indexterm" name="idp20267248"></a>

jlog-formatted logs are binary logs used by the web console and by centralized cluster logging. Additionally, custom deployments can log data to jlog files for consumption by perl scripts. In turn, these scripts may push the data elsewhere, to a database for example.

### Warning

We expressly recommend **against** writing jlogs to an NFS file system because of concerns about its performance in general and its reliability, especially on Linux.

### 14.43.1. Configuration

**Configuration Change. ** In version 3.0, this module is loaded automatically as required and does not need to be explicitly included.

The **ec_rt_stats2** command performs statistical analysis on jlog files. For more information see [ec_rt_stats2](executable.ec_rt_stats2.php "ec_rt_stats2").

**14.43.1.1. jlog Executable Files**

There are three executable files used for analyzing and maintaining jlog files. These are:

*   [jlog_change_endian](executable.jlog_change_endian.php "jlog_change_endian")

*   [jlog_sanity_check](executable.jlog_sanity_check.php "jlog_sanity_check")

*   [jlogctl](executable.jlogctl.php "jlogctl")

### 14.43.2. Using JLog::Reader

Any jlog files that you create can be read by a Perl script using the JLog::Reader module that ships with Momentum. This module is found in the `/opt/msys/lib/perl5/vendor_perl/5.10.0/x86_64-linux-thread-multi/JLog` directory on any Momentum node.

A common use case is to process the jlog files created by a custom_logger module. Suppose that you have the following custom_logger:

<a name="modules.jlog.reader.custom_logger.example"></a>

**Example 14.71. custom_logger**

```
custom_logger "custom_logger_jlog" {
  # custom logging in jlog format
  delivery_logfile = "jlog://var/log/ecelerity/delivery_log_rt=>my_subscriber"
  delivery_format = "%t@%r@%R@%vctx_mess{customerid}"
}
```

In [Example 14.71, “custom_logger”](modules.jlog.php#modules.jlog.reader.custom_logger.example "Example 14.71. custom_logger") a jlog is created at `/var/log/ecelerity/delivery_log_rt` and has a subscriber name `my_subscriber` You can read this jlog in the following way:

<a name="crm.processing.logs.jlog.reader.example"></a>

**Example 14.72. JLog::Reader example**

```
#!/opt/ecelerity/3rdParty/bin/perl
use JLog::Reader;
my $path = "/var/log/ecelerity/delivery_log_rt";
my $subscriber = "my_subscriber";

my $reader = JLog::Reader->new($path);
$reader->open($subscriber);

while (my $line = $reader->read) {
  # Do something with $line such as process and push into a database
}
# If you're done with the various $line's or they were pushed to a db
# successfully set a checkpoint.
$reader->checkpoint();
# if you're done with reading the log, close it
$reader->close();
```

This code opens a jlog and reads each line in that jlog. The `$path` variable should match the path configured in the custom_logger module as should the `$subscriber` variable. The `checkpoint` method indicates that records have been read successfully to this point. Records are removed after they have been read by all registered subscribers.

For more information about JLog::Reader issue the command **`/opt/msys/3rdParty/bin/perldoc JLog::Reader`**              .

| [Prev](modules.ipv6_lookup.php)  | [Up](modules.php) |  [Next](modules.live.bounce.updates.php) |
| 14.42. ipv6_lookup – Multi-address-family MX Records  | [Table of Contents](index.php) |  14.44. Live Bounce Updates – Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)