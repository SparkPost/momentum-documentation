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

| Message Scope Reference |
|   |   |  [Next](preface.php) |

## Message Scope Reference

### Message Systems, Inc.

Copyright © 2010-2014 Message Systems, Inc.

<a name="idp50544"></a>

Confidential & Proprietary.

**Abstract**

This book documents Message Scope.

Document generated on: 2017-Aug-09

* * *

**Table of Contents**

<dl class="toc">

<dt>[Preface](preface.php)</dt>

<dd>

<dl>

<dt>[1\. Typographical Conventions Used in This Document](preface.php#typographical)</dt>

</dl>

</dd>

<dt>[1\. Introduction to Message Scope](msc.intro.php)</dt>

<dd>

<dl>

<dt>[1.1\. Installing Message Scope](msc.intro.php#msc.intro.install)</dt>

</dl>

</dd>

<dt>[2\. The messagescope Module](modules.messagescope.php)</dt>

<dd>

<dl>

<dt>[2.1\. Module Configuration](modules.messagescope.php#messagescope.configuration)</dt>

<dt>[2.2\. Sieve Usage](modules.messagescope.sieve.php)</dt>

<dt>[2.3\. Lua Usage](modules.messagescope.lua.php)</dt>

<dt>[2.4\. messagescope Management Using Console Commands](messagescope.console.php)</dt>

</dl>

</dd>

<dt>[3\. The msc_logger Module](modules.msc_logger.php)</dt>

<dd>

<dl>

<dt>[3.1\. Module Configuration](modules.msc_logger.php#msc_logger.configuration)</dt>

<dt>[3.2\. Runtime Usage](msc_logger.runtime.php)</dt>

<dt>[3.3\. Logging SMTP Events](msc.log.smtp.events.php)</dt>

<dt>[3.4\. Logging of SMPP Events](ch03s04.php)</dt>

<dt>[3.5\. Sieve Usage](modules.msc_logger.sieve.php)</dt>

<dt>[3.6\. Lua Usage](modules.msc_logger.lua.php)</dt>

</dl>

</dd>

<dt>[4\. Message Scope and PostgreSQL](msc.postgresql.php)</dt>

<dd>

<dl>

<dt>[4.1\. The `postgresql.conf` File](msc.postgresql.php#msc.postgresql.conf)</dt>

<dt>[4.2\. Running the PostgreSQL Server](msc.postgres.server.php)</dt>

<dt>[4.3\. Using the PostgreSQL Client Program](msc.postgres.client.php)</dt>

<dt>[4.4\. Database Maintenance](msc.postgres.maintenance.php)</dt>

<dt>[4.5\. The PostgreSQL Log File](msc.postgres.log.file.php)</dt>

</dl>

</dd>

<dt>[5\. Message Scope Web UI](msc.ui.php)</dt>

<dd>

<dl>

<dt>[5.1\. Search](msc.ui.php#msc.ui.search)</dt>

<dt>[5.2\. The Clicktrack Server and HTTPS](msc.ui.search.https.php)</dt>

<dt>[5.3\. Adding a Message to a List](msc.ui.flag.message.php)</dt>

<dt>[5.4\. Remediation](msc.ui.remediation.php)</dt>

<dt>[5.5\. Exports](msc.ui.exports.php)</dt>

<dt>[5.6\. Overview](msc.ui.roles.overview.php)</dt>

<dt>[5.7\. Managing Users](msc.ui.add.users.php)</dt>

<dt>[5.8\. Roles & Permissions](msc.ui.roles.php)</dt>

</dl>

</dd>

<dt>[6\. Message Scope Server](msc.server.php)</dt>

<dd>

<dl>

<dt>[6.1\. The Message Scope Server Script](msc.server.php#msc.server.script)</dt>

<dt>[6.2\. Protocol Commands](msc.server.protocol.commands.php)</dt>

<dt>[6.3\. Banner](msc.server.banner.php)</dt>

<dt>[6.4\. Request](msc.server.request.php)</dt>

<dt>[6.5\. Response](msc.server.response.php)</dt>

<dt>[6.6\. Client Handling of Data](msc.server.client.handling.php)</dt>

<dt>[6.7\. Successful Protocol Termination](msc.server.protocol.termination.php)</dt>

<dt>[6.8\. Error Conditions](msc.server.error.conditions.php)</dt>

<dt>[6.9\. Handling Data with GIMME](msc.server.data.handling.php)</dt>

</dl>

</dd>

<dt>[7\. Advanced Search Syntax](msc.lucene.query.php)</dt>

<dd>

<dl>

<dt>[7.1\. Lucene "stop" Words](msc.lucene.query.php#msc.lucene.query.stop.words)</dt>

<dt>[7.2\. Message Scope Search Fields](msc.lucene.query.search.fields.php)</dt>

<dt>[7.3\. Searches](msc.lucene.query.search.php)</dt>

<dt>[7.4\. Operators](msc.lucene.query.operators.php)</dt>

</dl>

</dd>

<dt>[8\. Configuring the Ingestor](msc.ingestor.php)</dt>

<dd>

<dl>

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

</dd>

<dt>[9\. Files Associated with the Message Scope Web UI](msc.files.php)</dt>

<dd>

<dl>

<dt>[9.1\. Installation Files](msc.files.php#msc.files.all.components)</dt>

<dt>[9.2\. The Message Scope .ini Files](msc.files.ini.php)</dt>

<dt>[9.3\. PostgreSQL Files](msc.files.postgres.php)</dt>

<dt>[9.4\. The Message Scope Web Server Files](msc.logs.webui.php)</dt>

<dt>[9.5\. Search Configuration Files](msc.logs.search.php)</dt>

</dl>

</dd>

<dt>[A. The APIs for adding Custom Behavior](msc.custom.behavior.php)</dt>

<dd>

<dl>

<dt>[A.1\. Search Filters](msc.custom.behavior.php#msc.custom.behavior.filters)</dt>

<dt>[A.2\. Lucene Fields](msc.custom.behavior.lucene.php)</dt>

<dt>[A.3\. Modify Trace Details](msc.custom.behavior.trace.details.php)</dt>

<dt>[A.4\. Modify Trace "As A Whole"](msc.custom.behavior.trace.whole.php)</dt>

<dt>[A.5\. "Act On Message" Behaviors](msc.custom.behavior.act.on.message.php)</dt>

<dt>[A.6\. Adding Buttons](msc.custom.behavior.add.buttons.php)</dt>

<dt>[A.7\. Creating Dialogs](msc.custom.behavior.create.dialogs.php)</dt>

<dt>[A.8\. Handling Actions](msc.custom.behavior.handle.actions.php)</dt>

<dt>[A.9\. Installing Your Driver](msc.custom.behavior.installation.php)</dt>

<dt>[A.10\. The DriverMPDT Driver Class](msc.custom.behavior.DriverMPDT.php)</dt>

<dt>[A.11\. The MscDriver Class](msc.custom.behavior.mscdriver.php)</dt>

</dl>

</dd>

<dt>[B. Export Files](msc.export.format.php)</dt>

<dt>[C. Copyright Notices](copyrights.php)</dt>

<dd>

<dl>

<dt>[C.1\. Acknowledgements](copyrights.php#copyright.ack)</dt>

<dt>[C.2\. Disclaimers for Redistributed Third-Party Software](copyright.3rdparty-disclaimer.php)</dt>

</dl>

</dd>

</dl>

[List of Figures](figure-toc.php)[List of Tables](table-toc.php)[List of Examples](example-toc.php)

|   |   |  [Next](preface.php) |
|   |   |  Preface |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)