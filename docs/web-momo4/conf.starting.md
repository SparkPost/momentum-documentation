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

| Chapter 36. Starting Momentum (**ecelerity**) |
| [Prev](p.operations.php)  | Part V. Using the System Console |  [Next](operations.php) |

## Chapter 36. Starting Momentum (ecelerity)

**Table of Contents**

<dl class="toc">

<dt>[36.1\. Startup Scripts](conf.starting.php#startup.scripts)</dt>

</dl>

<a class="indexterm" name="idp3781216"></a>

**ecelerity** is the main server component of the Momentum Application Server. On start up, the script **/etc/init.d/ecelerity start**       starts Momentum. For details about the available options, see [ecelerity](executable.ecelerity.php "ecelerity").

### Note

To run this script, you must have root privileges.

Use **ec_ctl** to start, stop, or restart this process. For details about this command, see [ec_ctl](executable.ec_ctl.php "ec_ctl").

## 36.1. Startup Scripts

It can be useful to execute specific scripts on startup or shutdown. For example, if you have configured the spool directory as a separate filesystem, you might want to make sure that filesystem is mounted before starting Momentum. If Momentum is started up using [ec_ctl](executable.ec_ctl.php "ec_ctl"), startup scripts in the `rc.includes` directory will be executed.

The `rc.includes` directory under the `/opt/msys/ecelerity/bin` directory allows third party module providers and local administrators to add startup and shutdown procedures to the **ec_ctl** command. For example, use this directory for scripts that initiate database recovery, set environment variables, or check for necessary mount points.

Start scripts must be named start.*`purpose`* and stop scripts stop.*`purpose`*. **ec_ctl** will use `sh .` to include each script named in this format.

The following example illustrates how to check for the spool filesystem. Save it as `/opt/msys/ecelerity/bin/rc.includes/start.checkmount`.

```
SPOOL_FS=/var/spool/ecelerity

/sbin/mount | /usr/bin/grep -q $SPOOL_FS

if [ $? != 0 ]; then
  echo "Spool filesystem not mounted, aborting."
  exit 1
fi
```

| [Prev](p.operations.php)  | [Up](p.operations.php) |  [Next](operations.php) |
| Part V. Using the System Console  | [Table of Contents](index.php) |  Chapter 37. Using the System Console (**ec_console**) |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)