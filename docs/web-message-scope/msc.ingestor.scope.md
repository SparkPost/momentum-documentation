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

| 8.19. The default `scope.xml` File |
| [Prev](msc.ingestor.janitorerrorlogpath.php)  | Chapter 8. Configuring the Ingestor |  [Next](msc.files.php) |

## 8.19. The default `scope.xml` File

For your convenience the default `/opt/msys/scope/etc/scope.xml` file is reproduced below:

```
<?xml version="1.0" encoding="UTF-8"?>
<java version="1.5.0_19" class="java.beans.XMLDecoder">
 <object class="com.messagesystems.Scope.Config">

  <!-- indexBaseDirectory is a path in which Message Scope indexes will be stored -->
  <void property="indexBaseDirectory">
   <string>/var/db/messagescope/data</string>
  </void>

  <!-- Largest segment size, in GB, before splitting -->
  <void property="maxLiveSegmentGB">
   <int>10</int>
  </void>

  <!--
    Length of a time window in seconds. The default value of 864000 is
    10 days. NOTE: Messages older than the current time at analysis minus
    this number will be discarded. For example, a Momentum node goes out
    of commission for 10 days and has old Scope log files. When the
    machine comes back online, these old files will *not* be merged into
    the database.
  -->
  <void property="timeWindow">
   <int>864000</int>
  </void>

  <!-- Number of the above time windows to retain -->
  <void property="retentionWindows">
   <int>4</int>
  </void>

  <!--
    How long to cache index reader data. This can dramatically improve overall
    performance of searches, but means that data may be stale. If you find that
    most searches are for data that is over 15 minutes old, for instance, you may
    want to set this cache to 15 minutes. This value is specified in seconds.

    Note: Setting this number too low can severely degrade performance,
    especially on large datasets. It is recommended to increase this cache
    time to the highest acceptable value.
  -->
  <void property="indexReaderCacheTime">
    <int>300</int>
  </void>

  <!--
    Number of documents to retrieve when warming the cache after an index has
    been re-opened. Larger numbers take longer to fill the cache, but have a
    greater likelihood of usefully warming the cache.
  -->
  <void property="cacheWarmupCount">
    <int>10000</int>
  </void>

  <!--
    Maximum duration of a search before trying to kill it. Value is expressed
    in seconds. 0 means "no time limit."
  -->
  <void property="searchTimeOut">
    <int>0</int>
  </void>

  <!-- Port number for connecting to msc_server instances -->
  <void property="mscServerPort">
    <int>2029</int>
  </void>

  <!-- Identifying name for the Ingestor to use when pulling data from Momentum -->
  <void property="selfName">
    <string>node_name</string>
  </void>

  <!-- Path to a list of momentum nodes -->
  <void property="logNodeListFilepath">
    <string>/opt/msys/scope/etc/momentum_nodes</string>
  </void>

  <!--
    Log level verbosity:
        o 0 contains extremely verbose debugging information
        o 1 includes notices and above
        o 2 includes warnings and above
        o 3 includes errors and above
        o 4 includes only fatal errors
  -->
  <void property="logLevel">
    <int>2</int>
  </void>

  <!--
    An array of Message Scope search nodes to communicate
    with in the search cluster. The <array> length property
    must match the number of children in the array.
  -->
  <void property="searchNodes">
   <array class="java.lang.String" length="1">
    <void index="0">
     <string>127.0.0.1:8080</string>
    </void>
   </array>
  </void>

  <!-- Number of threads to use for concurrent log processing. -->
  <void property="threadCount">
   <int>4</int>
  </void>

  <!-- Log path for the log ingestor component -->
  <void property="ingestorErrorLogPath">
    <string>/var/log/scope/ingestor.error.log</string>
  </void>

  <!-- Log path for the search server component -->
  <void property="serverErrorLogPath">
    <string>/var/log/scope/server.error.log</string>
  </void>

  <!-- Log path for the janitor component -->
  <void property="janitorErrorLogPath">
    <string>/var/log/scope/janitor.error.log</string>
  </void>
 </object>
</java>
```

The `selfName` property is set during installation.

| [Prev](msc.ingestor.janitorerrorlogpath.php)  | [Up](msc.ingestor.php) |  [Next](msc.files.php) |
| 8.18. janitorErrorLogPath  | [Table of Contents](index.php) |  Chapter 9. Files Associated with the Message Scope Web UI |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)