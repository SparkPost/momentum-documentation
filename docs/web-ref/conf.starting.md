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

| 2.10. Starting Momentum |
| [Prev](conf.adding.configuration.files.php)  | Chapter 2. Configuration |  [Next](conf.testing.installation.php) |

## 2.10. Starting Momentum

<a class="indexterm" name="idp1440144"></a>

If your `Max_Outbound_Connections` setting is larger than 1000, you will need to adjust your system-wide and shell-specific open file limits to avoid errors.

1.  Assume root privileges

2.  Run **/etc/init.d/ecelerity start** 

All errors from the program are placed in `/var/log/ecelerity/paniclog.ec`.

Once Momentum has started, you can connect to it by running **/opt/msys/ecelerity/bin/ec_console** with root privileges. For a list of available commands, type **`help`**. See [Section 4.1, “The Momentum System Console”](operations.console.php "4.1. The Momentum System Console") for additional information.

Depending on your local configuration, you may want to perform additional tasks whenever Momentum starts or stops. For example, if you have configured the spool directory as a separate filesystem, you might want to make sure that filesystem is mounted before starting Momentum. The directory `/opt/msys/ecelerity/bin/rc.includes` is scanned at startup and shutdown for scripts named "start.*`purpose`*" or "stop.*`purpose`*". Any scripts found are sourced with 'sh .' and included in the startup or shutdown.

The following example illustrates how to check for the spool filesystem. Save it as `/opt/msys/ecelerity/bin/rc.includes/start.checkmount`.

```
SPOOL_FS=/var/spool/ecelerity

/sbin/mount | /usr/bin/grep -q $SPOOL_FS

if [ $? != 0 ]; then
  echo "Spool filesystem not mounted, aborting."
  exit 1
fi
```

### 2.10.1. Unbound Resolver

The unbound resolver is a modern DNS resolver that is replacing Momentum’s older internal ARES resolver. The unbound resolver will provide more features, more efficient code, and smoother integration with Momentum.

The unbound server is turned off by default, but can be enabled by entering the following lines into `/opt/msys/ecelerity/etc/environment`:

```
ECELERITY_DNS_BACKEND='unbound' 
export ECELERITY_DNS_BACKEND
```

To confirm the resolver's status, look for the following line in the summary command:

`DNS Resolver: unbound`
### Note

The only other valid value is "ares".

| [Prev](conf.adding.configuration.files.php)  | [Up](conf.php) |  [Next](conf.testing.installation.php) |
| 2.9. Best Practices for Adding Configuration Files  | [Table of Contents](index.php) |  2.11. Testing Your Installation |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)