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

| 6.5. The `pe2.conf` File |
| [Prev](mc.conf.mc_auth.conf.php)  | Chapter 6. Configuration Files in Version 3.5 and Higher |  [Next](mc.conf.php) |

## 6.5. The `pe2.conf` File

The `/opt/msys/pe2/etc/pe2.conf` file is created during installation. For your convenience the sample `pe2.conf` file included with Message Central 3.5 is reproduced below.

```
This is an example Postal Engine configuration file
# This file is read by the various PE components

# Connection string to enable access to your Postal Engine database
# instance
postgres.connect_string=host=127.0.0.1 dbname=pe2 user=pe2user password=pe2user

# logging level and log file name configuration is now done in mc_<component>.conf files
# e.g. mc_sched.conf for MC scheduler

# Where to relay draft/test/preview messages generated via SOAP.
# It must reference one of your Ecelerity machines
soap.relay_url = smtp://localhost

# The domain to be used in VERP generation
# This MUST match up to a domain you control; there should be an MX record
# that causes mail addressed to the VERP domain to be delivered to one
# of your Ecelerity machines
soap.verpdomain =

# Where the pass-through mode mailings store block data
pe2sched.siphon.block_path = /var/log/pe2/mc_blocks

# number of database handles to cache, per org (default: 10)
pe2g.db_pool_size = 10

# number of templating threads (default: 8)
# the default will likely need tuning to best fit your deployment
pe2g.templatizer_concurrency = 8

# How many generated emails can be waiting in the queue for delivery to the MTA
# via the outbound driver. Defaults to 100\. This should be tuned after
# observation of system performance.
pe2g.relay_queue_backlog = 100

# MTAs to start delivery threads for. Syntax is a comma separated list of
# '[X@]smtp://hostname[:1825]/' (bracketed items
# indicate optional). This is a required config option on pe2g boxes.
pe2g.relay_urls = 5@smtp://localhost

# These settings affect click tracking; the defaults will not likely need
# to be changed, but must be specified in this file to take effect.
clicktrack_decouple = on
clicktrack_cache = /var/log/pe2-webui/linkcache/db
clicktrack_jlog = /var/log/pe2-webui/clicktrack/jlog
clicktrack_errors = /var/log/pe2-webui/clicktrack/errors.log

## These settings are default for process pe2m (manager)
## On each generator Node
pe2m.loop_period = 1
pe2m.update_period = 1
pe2m.call_period = 1
pe2m.max_generators_per_poll = 10
##
## These settings are default for process pe2sched (scheduler)
## On scheduler Node
pe2sched.max_generator_limit = 1000
pe2sched.max_generator_per_mailing = 4
pe2sched.spawn_interval_by_client = 2
pe2sched.cron.interval = 60

#pe2g.gimli.enable_heartbeats = 1
#pe2g.gimli.beat_every = 1

#pe2g.valgrind.enable = 0
#pe2g.valgrind.path = /usr/bin/valgrind
#pe2g.valgrind.logfile = /var/log/pe2/traces/pe2g_vg
#pe2g.valgrind.options = --tool=memcheck --free-fill=0xfe --malloc-fill=0xe0 --leak-check=no
# --num-callers=24 --track-origins=yes -v --run-libc-freeres=no

# vim:ts=2:sw=2:et:ft=conf:
```

| [Prev](mc.conf.mc_auth.conf.php)  | [Up](mc.conf.3.5.php) |  [Next](mc.conf.php) |
| 6.4. The `mc_auth.conf` File  | [Table of Contents](index.php) |  Chapter 7. Message Central Configuration Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)