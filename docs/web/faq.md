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

| Appendix A. Frequently Asked Questions |
| [Prev](p.appendices.php)  | Part IV. Appendices |  [Next](smtp-response-codes.php) |

## Frequently Asked Questions

<a name="idp23879408"></a>

<dl>

<dt>A.1\. [I see the message "421 no adequate servers" in my mainlog.ec, what's causing this?](faq.php#faq.no.adequate.servers)</dt>

<dt>A.2\. [I see the message "An operation on a socket could not be performed because the system lacked sufficient buffer space or because a queue was full" in my paniclog.ec and/or the ec_console paniclog output, what's causing this?](faq.php#faq.win32.enobufs)</dt>

<dt>A.3\. [How can I run two or more Momentum instances concurrently?](faq.php#faq.running.multiple.instances)</dt>

<dt>A.4\. [I see error messages saying "errno=24" (on linux), "nropen too low," or "Could not set nofiles high enough!" in my mainlog.ec. What do they mean and how can I prevent this?](faq.php#faq.num.open.files)</dt>

<dt>A.5\. [When I say:](faq.php#faq.sieve.array.after.variable)</dt>

</dl>

| <a name="faq.no.adequate.servers"></a><a name="idp23880288"></a>

**A.1.**

 | 

I see the message "`421 no adequate servers`" in my `mainlog.ec`, what's causing this?

 |
|  | 

This occurs when Momentum is unable to determine a suitable MX when attempting to deliver mail to a particular domain. There are two probable causes for this situation:

*   DNS resolution is broken.

*   The remote site is employing firewall rules which drop traffic from your IP address.

The cause can be determined via the console:

```
ecelerity> dig problemdomain.com
submitted
ecelerity> domain problemdomain.com
```

If the output indicates that there are no MXs for the domain, then the problem is likely DNS related. Check that your `/etc/resolv.conf` is correct, and that the nameservers it references are in working order.

If the output lists one or more MXs then the cause is likely due to a connectivity problem. You verify this by attempting to manually connect to the remote machine using **telnet <ip> 25** . You can also use the the [swaks](http://www.jetmore.org/john/code/swaks/) tool.

 |
| <a name="faq.win32.enobufs"></a><a name="idp23890304"></a>

**A.2.**

 | 

I see the message "`An operation on a socket could not be performed because the system lacked sufficient buffer space or because a queue was full`" in my `paniclog.ec` and/or the **ec_console** **paniclog** output, what's causing this?

 |
|  | 

This can happen when a server is busy initiating outbound connections to more than a few thousand IP addresses. By default, on Windows, the ephemeral port range is set very low which can cause acute problems if you have a lot of mail to route outbound from your ecelerity server. The solution to this problem is to increase the range of ephemeral ports available to Windows, as described in the Microsoft Knowledge Base article [Q196271](http://support.microsoft.com/default.aspx/kb/q196271/). We recommend setting this option to the maximum allowed value of 65534\. After changing this setting, you should reboot the server. You should also take another look at [Section 1.10.1, “Performance Considerations on Windows”](install.win32.php#install.win32.perf "1.10.1. Performance Considerations on Windows") in case you may have overlooked other performance relevant tunables for Windows.

### Note

Momentum is no longer supported on Windows.

 |
| <a name="faq.running.multiple.instances"></a><a name="idp23897760"></a>

**A.3.**

 | 

How can I run two or more Momentum instances concurrently?

 |
|  | 

If you want to run two or more Momentum instances concurrently on a single machine, you need to make some adjustments to the various instance-specific configuration options.

This requires that each instance uses its own configuration file. So the first thing you need to do is to get a separate configuration file for your new instance. Let's call it `ecelerity1.conf`. You need to modify or add the following settings in `ecelerity1.conf` (This example is based on linux, changes on other operating systems should be similar):

<dl class="variablelist">

<dt>Listeners</dt>

<dd>

ESMTP, ECSTREAM, Control and other listeners should each be configured to use distinct IP addresses and/or port numbers, as they can't both bind to the same ports on the same IPs.

The Control_Listener used for [ec_console](executable.ec_console.php "ec_console") connections should have a different Unix domain socket for each instance.

</dd>

<dt>SNMP</dt>

<dd>

SNMP listens on 127.0.0.1:8162 by default, even if you have no SNMP specific configuration in `ecelerity.conf`. You should change the port number used by the new instance:

```
SNMP {
  State = enabled
  Address = 127.0.0.1:8163
  Community = "public"
}
```
</dd>

<dt>SpoolBase</dt>

<dd>

Each Momentum instance must have its own spool directory. The following snippet in your `ecelerity1.conf` will change the spool base directory:

`SpoolBase = /var/spool/ecelerity1`</dd>

<dt>Pidfile</dt>

<dd>

Since version 2.0, Momentum maintains a pidfile that can be used by other processes to determine if the instance is running; therefore, each instance must have its own pidfile.

`Pidfile = /var/run/ecelerity1.pid`</dd>

<dt>Masterdb_file</dt>

<dd>

Momentum stores persistent summary and Sieve counter information in the masterdb_file.

`masterdb_file = /var/log/ecelerity1/ecdb`</dd>

<dt>ec_ctl</dt>

<dd>

If you want to arrange for each Momentum instance to start at system boot time, you might want to copy and modify the [ec_ctl](executable.ec_ctl.php "ec_ctl") script, so that you have one copy per instance. Let's copy `/opt/ecelerity/bin/ec_ctl` to `/opt/ecelerity/bin/ec_ctl1` and modify the copy. Change the following two lines:

```
CONFFILE=/opt/ecelerity/etc/ecelerity.conf
CONTROL=/tmp/2025
```

to

```
CONFFILE=/opt/ecelerity/etc/ecelerity1.conf
CONTROL=/tmp/2026
```

Make sure the *`CONTROL`* parameter matches what you have configured for your Control_Listener in `ecelerity1.conf`.

</dd>

<dt>Logs</dt>

<dd>

While they are not strictly required to be instance-specific, you will usually want to make sure that you're logging to a separate set of log files for each instance. This is simply a matter of configuring your logging modules appropriately:

```
Logger logging/ec_logger ec_logger {
  mainlog = /var/log/ecelerity1/mainlog.ec
  paniclog = /var/log/ecelerity1/paniclog.ec
  rejectlog = /var/log/ecelerity1/rejectlog.ec
}
```

If you do configure a separate log directory, you might also want to arrange for the logs to be rotated. Our Linux packages drop a maintenance script into `/etc/cron.d` that launches [ec_rotate](executable.ec_rotate.php "ec_rotate") for this purpose. It's a trivial matter to adjust it to rotate the logs for your second log directory.

</dd>

</dl>

You're now ready to start your ecelerity1 instance using the following invocation:

`# /opt/ecelerity/bin/ec_ctl1 start` |
| <a name="faq.num.open.files"></a><a name="idp23930000"></a>

**A.4.**

 | 

I see error messages saying "`errno=24`" (on linux), "`nropen too low`," or "`Could not set nofiles high enough!`" in my `mainlog.ec`. What do they mean and how can I prevent this?

 |
|  | 

These errors happen when the Momentum process has hit either the per-process system limit for maximum open file descriptors or the `Server_Max_Outbound_Connections` limit configured in `ecelerity.conf`.

Consult your system documentation for further information on changing the per-process open file descriptor limit, or see [Section 1.4, “Operating System Specific Preparation”](install.os-specific.php "1.4. Operating System Specific Preparation") for recommended settings specific to your operating system.

 |
| <a name="faq.sieve.array.after.variable"></a><a name="idp23936672"></a>

**A.5.**

 | 

When I say:

```
$local = envelope :localpart "from";
if ec_test :is $local ["foo1", "foo2"] {
  ec_action 550 "no foos allowed";
}
```

Why do I get the Sieve error "syntax error near token COMMA"?

 |
|  | 

The Sieve parser has no way of telling a hash dereference like `$local["foo1"]` from a regular variable followed by an array like `$local ["foo1"]`, so when it sees a variable followed by an open bracket, it always assumes that it's seeing a hash dereference. As a result, once it gets to the comma in `$local ["foo1", "foo2"]` it thinks this is invalid syntax (which it is, for a hash dereference). To work around this, you can substitute the variable into a string:

```
$local = envelope :localpart "from";
if ec_test :is "${local}" ["foo1", "foo2"] {
  ec_action 550 "no foos allowed";
}
```
 |

| [Prev](p.appendices.php)  | [Up](p.appendices.php) |  [Next](smtp-response-codes.php) |
| Part IV. Appendices  | [Table of Contents](index.php) |  Appendix B. SMTP Response Codes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)