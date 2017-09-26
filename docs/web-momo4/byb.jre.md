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

| 6.9. Java Runtime Environment (JRE) |
| [Prev](byb.set_hostnames.php)  | Chapter 6. Before You Begin |  [Next](byb.root_and_vertica_dba.php) |

## 6.9. Java Runtime Environment (JRE)

<a class="indexterm" name="idp481328"></a>

You must have an official Oracle Java 7 release installed, as **Java 8 is not supported for use with Cassandra and Momentum** . Run the following command to ensure that the version of Java installed on each Platform node is compatible with Cassandra.

`java -version`

Your results should look something like this:

```
java version "1.7.0_75"
Java(TM) SE Runtime Environment (build 1.7.0_75-b13)
Java HotSpot(TM) 64-Bit Server VM (build 24.75-b04, mixed mode)
```

### Warning

OpenJDK is not supported, and neither are variants such as IBM Java.

If you use OpenJDK, you will receive the following installation error:

```
Unable to install packages due to:
No package matched to upgrade: msys-cassandra
Error: msys-cassandra conflicts with 
1:java-1.7.0-openjdk-1.7.0.51-2.4.4.1.el6_5.x86_64
```

If the OpenJDK package is already installed, run **`rpm -qa | grep openjdk`**                     to determine the OpenJDK package names. Then execute **yum remove *`package_name`***                         for each package.

If you need to install Java 7, follow the steps below.

1.  Download and install [Sun Java JRE 7](http://www.oracle.com/technetwork/java/javase/downloads/java-archive-downloads-javase7-521261.html#jre-7u80-oth-JPR) for 64 bit Linux.

    ### Note

    Oracle JRE 1.7 is approaching its end-of-life status. If the above link does not work, or if you cannot find an appropriate version to download, then run the following command to download Java 1.7.0_51\. This version, although a bit old, is still usable.

    `wget http://javadl.sun.com/webapps/download/AutoDL?BundleId=83375 -O jdk-7u51-linux-x64.rpm`
2.  Run **sudo rpm -Uvh *`jre-7u51-linux-x64`*.rpm**                                     to install the RPM.

3.  Ensure that Cassandra can locate the installed version of Java. Be sure to adjust the pathnames based upon the version of Java you are using and where you have installed it.

    alternatives --install *`/usr/bin/java java /usr/java/jre1.7.0_51/bin/java 2`*                                       
    alternatives --config java
    ### Note

    Simply setting the PATH environment variable will not work.

    You should see an interface similar to the one below.

    ```
    There are 3 programs which provide 'java'.

      Selection    Command
    -----------------------------------------------
    *  1           /opt/jdk1.7.0_60/bin/java
     + 2           /opt/jdk1.7.0_72/bin/java
       3           /usr/java/jrel.7.0_51/bin/java

    Enter to keep the current selection[+], or type selection number:
    ```

4.  Select the version of Java you just installed (in our example, this is option #3).

    ### Note

    If your results display a single option, then select that option.

For more information, contact Message Systems Professional Services.

| [Prev](byb.set_hostnames.php)  | [Up](before_you_begin.php) |  [Next](byb.root_and_vertica_dba.php) |
| 6.8. Setting Hostnames  | [Table of Contents](index.php) |  6.10. Creating `root` and `vertica_dba` Accounts |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)