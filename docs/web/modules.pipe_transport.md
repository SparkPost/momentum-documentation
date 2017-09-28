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

| 14.43. pipe_transport – Module |
| [Prev](modules.pipeio.php)  | Chapter 14. Modules Reference |  [Next](modules.postfix_logger.php) |

## 14.43. pipe_transport – Module

<a class="indexterm" name="idp12533904"></a>

Instead of immediately spooling messages to disk, the pipe_transport I/O module causes them to be piped into a program on the local machine. This module provides a means of running a program whenever there is mail for a specific domain or domains. The success of that program affects the success of the SMTP transaction.

### 14.43.1. Configuration

The pipe_transport module is configured in your `ecelerity.conf` file. To load this module, add the following lines to the main body of your `ecelerity.conf` file:

<a name="example.pipe_transport"></a>

**Example 14.62. pipe_transport version**

```
IO_System io/pipe_transport pipe_transport
{
   program_name  = "/bin/cat"
   output_file = "/var/log/ecelerity/pipe.stdout"
   error_file = "/var/log/ecelerity/pipe.stderr"
   domain = "example.com"
   domain =  "another.example.com"
   "0" = "250 ok"
}
```

<dl class="variablelist">

<dt>"n" (where "n" is a number)</dt>

<dd>

By default, if `program_name` exits with a "0" exit status it is assumed that the message was delivered correctly, and the SMTP response to the client will be the usual 250 response along with the queue ID. If `program_name` exits with a non-0 exit status then the pipe is assumed to have failed, and the SMTP response will be set to "504 5.5.0 pipe transport gave exit status %d" where "%d" is replaced by the exit status. If your `program_name` uses a variety of different exit statuses to inform you of different outcomes you can map them to SMTP response codes. This is used by Unix MTA software. For example read the EXIT CODES portion of this manual page: [http://untroubled.org/ezmlm/man/man8/qmail-queue.8.html](http://untroubled.org/ezmlm/man/man8/qmail-queue.8.html). If `program_name` has a set of defined exit codes you can map them to meaningful SMTP response codes. So for **qmail-command**, 100 would equate to a 550 code because it indicates a hard error, but 111 should be a 450 code because it indicates a soft error. You might want to indicate this in the following way:

```
100 = "550 command failed"

111 = "450 try again later"
```
</dd>

<dt>domain</dt>

<dd>

This option determines which domains should be piped through the module.

</dd>

<dt>error_file</dt>

<dd>

This option determines the error file. If the error_file is omitted, it is assumed to be `/dev/null`.

</dd>

<dt>output_file</dt>

<dd>

This option determines the output file. If the output_file is omitted, it is assumed to be `/dev/null`.

</dd>

<dt>program_name</dt>

<dd>

This option configures the program that will be used.

</dd>

</dl>

| [Prev](modules.pipeio.php)  | [Up](modules.php) |  [Next](modules.postfix_logger.php) |
| 14.42. pipe_io – Pipe IO Wrapper  | [Table of Contents](index.php) |  14.44. postfix_logger – Postfix-Compatible Logging |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)