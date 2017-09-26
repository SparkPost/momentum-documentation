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

| Chapter 3. Using the Web Console |
| [Prev](conf.testing.installation.php)  | Part I. Configuration Guide |  [Next](web3.starting.web.console.php) |

## Chapter 3. Using the Web Console

**Table of Contents**

<dl class="toc">

<dt>[3.1\. Starting the Web Console](web3.starting.web.console.php)</dt>

<dt>[3.2\. Web Console Overview](web3.overview.php)</dt>

<dt>[3.3\. The Dashboard](web3.dashboard.php)</dt>

<dt>[3.4\. Cluster Status](web3.status.php)</dt>

<dt>[3.5\. Filtering](web3.filters.php)</dt>

<dt>[3.6\. The Reporting Page](web3.reports.php)</dt>

<dt>[3.7\. The Paths Page](web3.paths_page.php)</dt>

<dt>[3.8\. Administration](web3.administration.php)</dt>

<dt>[3.9\. Administering Users From the Web Console](web3.users.php)</dt>

<dt>[3.10\. The Policy Configuration Editor](web3.policy.editor.php)</dt>

<dt>[3.11\. Automated Alerting Configuration](web3.automated.alerting.php)</dt>

</dl>

<a class="indexterm" name="idp1473600"></a>

You can monitor and configure Momentum from a web browser. The web console provides a convenient interface useful for viewing graphical representations of the state of Momentum, changing configuration options, viewing logs and reports and numerous other tasks.

You can open the web console from the server hosting the application or from elsewhere if remote access is allowed. Open the web console by pointing your web browser at the appropriate IP address or domain name.

### Note

As of version 3.2, during installation you can choose to require use of SSL for the web UI. If you are using SSL be sure to use the HTTPS protocol when logging in.

Log in to the web console using the admin credentials created during installation. The default value for the username is `admin` and the password is whatever you chose during installation. To change these credentials or add a new user see [Section 3.9, “Administering Users From the Web Console”](web3.users.php "3.9. Administering Users From the Web Console"). If the web console is not running, see [Section 3.1, “Starting the Web Console”](web3.starting.web.console.php "3.1. Starting the Web Console").

To function properly, the web UI requires a recent version of Flash. On some Linux distributions you may need to upgrade this component.

### Note

The Momentum web UI supports the following browsers:

*   Firefox version 3.6 and higher on PC and Mac

*   Internet Explorer versions 8 and 9

| [Prev](conf.testing.installation.php)  | [Up](p.guide.php) |  [Next](web3.starting.web.console.php) |
| 2.11. Testing Your Installation  | [Table of Contents](index.php) |  3.1. Starting the Web Console |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)