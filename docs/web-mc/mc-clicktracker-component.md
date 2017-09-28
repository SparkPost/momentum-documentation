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

| Chapter 4. Clicktracker |
| [Prev](mc-post-installation.second.generator.php)  |   |  [Next](mc-clicktracker-logs.php) |

## Chapter 4. Clicktracker

**Table of Contents**

<dl class="toc">

<dt>[4.1\. Clicktracker Options](mc-clicktracker-component.php#mc-clicktracker-options)</dt>

<dt>[4.2\. Clicktracker Log Rotation](mc-clicktracker-logs.php)</dt>

<dt>[4.3\. Processing clicktracker jlog Files](mc-clicktracker-external-db.php)</dt>

<dt>[4.4\. Debugging the Clicktracker](mc-clicktracker-debug.php)</dt>

</dl>

The clicktracker is one of the web-based components of Message Central. It is run using the **/etc/init.d/pe2clickctl start**       command and starts up automatically on reboot. This component tracks opens and clicks for use in reports.

For debugging purposes it can also be started directly by issuing the command, **/opt/msys/pe2/sbin/pe2-clicktracker**. This command is detailed in [pe2-clicktracker](mc-clicktracker.php "pe2-clicktracker").

## 4.1. Clicktracker Options

The options found in the `pe2.conf` file related to this component are as follows:

```
clicktrack_decouple = on
  clicktrack_cache = /var/log/pe2-webui/linkcache/db
  clicktrack_jlog = /var/log/pe2-webui/clicktrack/jlog
  clicktrack_errors = /var/log/pe2-webui/clicktrack/errors.log
```

The `clicktrack_decouple` option determines whether the clicktracking server should record clicks or opens directly into a database or write them to jlogs. For more information see [clicktrack_decouple](conf.clicktrack_decouple.php "clicktrack_decouple").

The [clicktrack_cache](conf.clicktrack_cache.php "clicktrack_cache") option specifies the location of the database used to cache links and `clicktrack_jlog` the location of the jlogs used by the web UI and `clicktrack_errors` the location of the log file related to clicktracker errors.

These options affect click tracking; the defaults will not likely need to be changed, but they must be specified in the configuration file on the machine that hosts the clicktracker component.

### 4.1.1. Using a Proxy Server with the Clicktracker

**Configuration Change. ** This option is available as of version 3.4.

The server is intended to be a transparent reverse proxy:

*   Any URLs in the email (either images or links) point to the widget server

*   The server rewrites the URL to point to the clicktracker server then accesses that link

*   The returned data (whether it is a file, html page, or a redirect) is sent back to the client

For users who require a proxy server between the clicktracker and the Internet the `MSApp.ear` application is available for installation on Java enterprise application servers such as Geronimo or WebSphere.

Install this proxy server in the following way:

1.  Copy the application to the Java enterprise server or to the system from which you are accessing the Java enterprise server administration console.

2.  Follow the usual procedures for installing an application on your Java application server. For example, on WebSphere you would choose the "New Applications" option from the "Integrated Solutions Console".

3.  Once the application is installed, you must create and configure the `ckhost.properties` file found in the `/opt/WebSphere7/AppServer/msproperties` directory on the machine running your Java enterprise server. Identify the host and port where the clicktracker server is running using the following parameters:

    proxyhost=*`10.79.11.44`*
    proxyport=*`80`*
4.  Open the Message Central web UI to manually set the "Web Domain" setting for the appropriate org or orgs.

    http://*`clicktracker_server:port`*/MSWeb/ProxyServlet?assetString=

    You must use this exact string (identifying your clicktracker server and port) when setting the web domain.

    ### Note

    The `MSApp.ear` application only supports a single clicktracker server.

    If multiple click trackers are installed, the web widget should point to a load balancer which in turn points at the clicktrackers.

    For more information about setting the properties of an org see [Organizations](https://support.messagesystems.com/docs/web-mc-user/mc3-administration.php#mc3-administration-orgs).

| [Prev](mc-post-installation.second.generator.php)  |   |  [Next](mc-clicktracker-logs.php) |
| 3.13. Installing an Additional Generator  | [Table of Contents](index.php) |  4.2. Clicktracker Log Rotation |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)