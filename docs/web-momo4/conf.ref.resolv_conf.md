| resolv_conf |
| [Prev](conf.ref.reserve_maintenance_interval.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.response_transcode_pattern.php) |

<a name="conf.ref.resolv_conf"></a>
## Name

resolv_conf — specify a custom resolv.conf

## Synopsis

`resolv_conf = "/my/resolv.conf"`

<a name="idp26031136"></a>
## Description

This directive instructs Momentum to initialize its internal resolver with the configuration information located in the filename specified instead of `/etc/resolv.conf` on Unix-like platforms.

<a name="idp26033552"></a>
## Configuration Options

Momentum supports one option above what `resolv.conf(5)` supports, as well as a subset of the standard options. The list below constitutes all of the options that Momentum's library supports; details of the standard options can be found in the man page for `resolv.conf`.

<dl class="variablelist">

<dt>`nameserver 1.2.3.4` , `search domain1.tld domain2.tld` , `domain localdomain.tld` , `sortlist 1.2.3.4/255.255.252.0`</dt>

<dd>

Identical to the resolv.conf(5) usage.

</dd>

<dt>`lookup bf`</dt>

<dd>

Determines the order in which nameserver lookups are done. The default order is DNS then /etc/hosts, and corresponds to the string `bf`. You can reverse that order by using `lookup fb`.

</dd>

<dt>`options ndots:1` , `options timeout:5` , `options attempts:2`</dt>

<dd>

Identical to the resolv.conf(5) usage.

</dd>

<dt>`options retrans:5`</dt>

<dd>

Alias for `options timeout:5`

</dd>

<dt>`options retry:2`</dt>

<dd>

Alias for `options attempts:2`

</dd>

</dl>

<a name="idp26054720"></a>
## Scope

resolve_conf is valid in the global scope.

| [Prev](conf.ref.reserve_maintenance_interval.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.response_transcode_pattern.php) |
| reserve_maintenance_interval  | [Table of Contents](index.php) |  response_transcode_pattern |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)