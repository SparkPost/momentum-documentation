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

| 3.1. Administering the Web Console |
| [Prev](webconsole.php)  | Chapter 3. The Web Console |  [Next](webconsole.authentication.php) |

## 3.1. Administering the Web Console

This section covers starting and stopping the Web Console. If you have not yet installed the Web Console, please see the appropriate section of the manual for your OS.

*   [Section 1.6, “Installation on Linux”](install.linux.php "1.6. Installation on Linux")

*   [Section 1.8, “Installation on Solaris”](install.solaris.php "1.8. Installation on Solaris")

*   [Section 1.10, “Installation on Microsoft Windows (Deprecated)”](install.win32.php "1.10. Installation on Microsoft Windows (Deprecated)")

In addition to administering or monitoring Momentum from the command line or from the system console, if you installed the Momentum web console, you can monitor and configure the MTA from a web browser. The web console provides a convenient interface useful for viewing graphical representations of the state of Momentum, changing configuration options, viewing logs and numerous other tasks.

You can open the web console from the server hosting the application or from elsewhere if remote access is allowed. Point your web browser at the server running the application by entering the appropriate IP address or host name into the address bar.

The web console runs on port 80 so you need not enter the port number. If you wish, you can change this by adjusting the `httpd.conf` file, as you would for any other Apache installation. Any changes made will persist across upgrades.

To log in to the web console use the credentials that you supplied during installation of Momentum. To add or administer web console users see [Section 3.2, “Web Console Authentication”](webconsole.authentication.php "3.2. Web Console Authentication").

### 3.1.1. Linux Administration

Use **/etc/init.d/ecwebconsole** `{start|stop|restart}` for starting and stopping the service. (The installer activates the service, but you can use **chkconfig** to disable it if necessary.)

### 3.1.2. Solaris Administration

The installation scripts automatically import SMF configurations for the Web Console, which will be automatically started at the next boot. To activate the Web Console directly after installation, run **svcadm** `enable ec_stat ecwebconsole`.

In general, you can control a running instance with

<dl class="variablelist">

<dt>svcadm enable ecwebconsole</dt>

<dd>

Enable at boot, and start the service now if not running.

</dd>

<dt>svcadm refresh ecwebconsole</dt>

<dd>

Reread the configuration (similar to SIGHUP)

</dd>

<dt>svcadm disable ecwebconsole</dt>

<dd>

Disable at boot, and stop the service now if running. Additionally, you can use the `-t` option to the disable command (**svcadm** `disable -t`), which will cause the running service to stop, but still be enabled at the next boot.

</dd>

</dl>

| [Prev](webconsole.php)  | [Up](webconsole.php) |  [Next](webconsole.authentication.php) |
| Chapter 3. The Web Console  | [Table of Contents](index.php) |  3.2. Web Console Authentication |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)