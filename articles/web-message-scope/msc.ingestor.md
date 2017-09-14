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

| Chapter 8. Configuring the Ingestor |
| [Prev](msc.lucene.query.operators.php)  |   |  [Next](msc.ingestor.indexbasedirectory.php) |

## Chapter 8. Configuring the Ingestor

**Table of Contents**

<dl class="toc">

<dt>[8.1\. The `environment` File](msc.ingestor.php#msc.ingestor.environment)</dt>

<dt>[8.2\. indexBaseDirectory](msc.ingestor.indexbasedirectory.php)</dt>

<dt>[8.3\. maxLiveSegmentGB](msc.ingestor.maxLiveSegmentGB.php)</dt>

<dt>[8.4\. timeWindow](msc.ingestor.timewindow.php)</dt>

<dt>[8.5\. retentionWindows](msc.ingestor.retentionwindows.php)</dt>

<dt>[8.6\. indexReaderCacheTime](msc.ingestor.indexreadercachetime.php)</dt>

<dt>[8.7\. cacheWarmupCount](msc.ingestor.cachewarmupcount.php)</dt>

<dt>[8.8\. searchTimeOut](msc.ingestor.searchtimeout.php)</dt>

<dt>[8.9\. maxResults](msc.ingestor.maxResults.php)</dt>

<dt>[8.10\. mscServerPort](msc.ingestor.mscServerPort.php)</dt>

<dt>[8.11\. selfName](msc.ingestor.selfname.php)</dt>

<dt>[8.12\. logNodeListFilepath](msc.ingestor.lognodelistfilepath.php)</dt>

<dt>[8.13\. logLevel](msc.ingestor.loglevel.php)</dt>

<dt>[8.14\. searchNodes](msc.ingestor.searchnodes.php)</dt>

<dt>[8.15\. threadCount](msc.ingestor.threadcount.php)</dt>

<dt>[8.16\. ingestorErrorLogPath](msc.ingestor.ingestorerrorlogpath.php)</dt>

<dt>[8.17\. serverErrorLogPath](msc.ingestor.servererrorlogpath.php)</dt>

<dt>[8.18\. janitorErrorLogPath](msc.ingestor.janitorerrorlogpath.php)</dt>

<dt>[8.19\. The default `scope.xml` File](msc.ingestor.scope.php)</dt>

</dl>

This chapter describes the `/opt/msys/scope/etc/scope.xml` file, an XML file that configures properties of the Message Scope Lucene search engine. This file is installed on the machine or machines where the ingestor is installed.

### Note

See also [Section 3.1, “Module Configuration”](modules.msc_logger.php#msc_logger.configuration "3.1. Module Configuration"). Where multiple ingestors are configured, also see [Section 3.1.1, “Multiple Ingestor Nodes”](modules.msc_logger.php#msc_logger.multiple.ingestors "3.1.1. Multiple Ingestor Nodes").

The ingestor implements the client side of the GIMME protocol; it retrieves data from a Message Scope server and puts it in the Lucene data store.

You may wish to change the values of some of the properties in this file but **changing the names of the properties is not supported** . [Section 8.2, “indexBaseDirectory”](msc.ingestor.indexbasedirectory.php "8.2. indexBaseDirectory") and subsequent sections describes this file.

This `/opt/msys/scope/etc/environment` file is used to configure the Java environment. A description follows immediately

## 8.1. The `environment` File

If the `/opt/msys/scope/etc/environment` file exists it is read on startup by the service script for the search server. Use it to tune various search server Java options.

### Note

You *must* run 64 bit Java on Solaris or any x86_64 platform.

### 8.1.1. The `environment` File in Version 1.0

The two variables that can be set in the environment file deal with tuning the memory that the JVM consumes:

*   `MX` – this should be set to -Xmx[*`size`*] where size is a number followed by a size modifier. The default for 64 bit systems is `-Xmx4G`, which specifies 4 GBs. This number tunes the maximum amount of memory that the JVM should reserve for heap space.

*   `MS` – this should be set to -Xms[*`size`*] where size is a number followed by a size modifier. The default for 64 bit systems is `-Xms4G`, which specifies 4 GBs. This number tunes the amount of memory that the JVM will claim at start-up.

### Note

On 32 bit platforms, the default for these options is `400M`.

It is recommended that these values be set as high as possible.

If you wish to change these setting create the `/opt/msys/scope/etc/environment` file and change the `MS` and `MX` setings. For example, the following entries would use 8 GBs of RAM:

```
MX=-Xmx8G
MS=-Xms8G
```

The `environment` file can also be used to set the `JAVA` environment variable which sets the path to the JVM.

### 8.1.2. The `environment` File after Version 1.0

After version 1.0 use the following variables to tune the memory that Java consumes:

*   `SSMAXHEAP` – specify the maximum size, in bytes, of the memory allocation pool. The default value for this option is `4G`.

*   `SSINITHEAP` – specify the initial size, in bytes, of the memory allocation pool. The default value for this option is `4G`.

*   `SSYGENHEAP` – sets the size of the heap for the young generation. The default value for this option is `3G`.

*   `SSSTACK` – set thread stack size. The default value for this option is `256K`.

For more information see [the Java application launcher](http://docs.oracle.com/javase/1.3/docs/tooldocs/solaris/java.html).

The `environment` file can also be used to set the `JAVA` environment variable which sets the path to the JVM.

| [Prev](msc.lucene.query.operators.php)  |   |  [Next](msc.ingestor.indexbasedirectory.php) |
| 7.4. Operators  | [Table of Contents](index.php) |  8.2. indexBaseDirectory |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)