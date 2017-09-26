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

| 6.18. Verifying Analytics Node Requirements |
| [Prev](byb.disable_postfix.php)  | Chapter 6. Before You Begin |  [Next](download_bundle.php) |

## 6.18. Verifying Analytics Node Requirements

Analytics nodes have very specific requirements for the HP Vertica Analytic Database. Ensure that the node is suitable for Vertica prior to installation.

First, verify that each Vertica/Analytics node contains at least 8GB of RAM overall and at least 2GB of RAM per CPU.

Next run the `validate_vertica_node` script to ensure that the node's hardware is properly configured for Vertica. You can get this script from the Message Systems Support Download page. Click on Momentum 4.0.0, then click on 'Script to validate if the Analytics software can be installed on a server'. Please note: you will need to run `chmod +x validate_vertica_node` to make the script executable.

This validation script checks that these requirements have been met. After you download the script to the target server, ensure that it is executable and execute it. An unsuitable node will display errors such as the following:

```
Checking node.lan suitability for installing Vertica
    FAIL (S0150): https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0150
        These disks do not have 'deadline' or 'noop' IO scheduling: '/dev/sda1,/dev/sda2'
    FAIL (S0020): https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0020
        Readahead size of /dev/sda2 is too low for typical systems: 256 < 2048
    FAIL (S0020): https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0020
        Readahead size of /dev/sda1 is too low for typical systems: 256 < 2048
    FAIL (S0180): https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0180
        Insufficient swap size. Need 2.00 GB, have 0 GB
    FAIL (S0081): https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0081
        SELinux appears to be enabled and not in permissive mode.
    FAIL (S0310): https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0310
        Transparent hugepages is set to 'always'. Must be 'never' or 'madvise'.
    FAIL (S0030): https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0030
        ntpd process is not running: ['ntpd', 'ntp']
```

When `FAIL` is returned, check the referenced URL for a detailed description of the error. The failures shown above relate to:

*   See [I/O Scheduling](https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0150)

*   See [Disk Readahead](https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0020)

*   See [Swap Space Requirements](https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0180)

*   See [SELinux](https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0081) and [Section 6.5, “Disable SELinux”](byb.disable_selinux.php "6.5. Disable SELinux")

*   See [Transparent Hugepages](https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0310)

*   See [The NTP Server](https://my.vertica.com/docs/7.0.x/HTML/index.htm#cshid=S0030) and [Section 6.6, “Enable Network Time Protocol (NTP)”](byb.ntp.php "6.6. Enable Network Time Protocol (NTP)")

| [Prev](byb.disable_postfix.php)  | [Up](before_you_begin.php) |  [Next](download_bundle.php) |
| 6.17. Disable Postfix and QPIDD  | [Table of Contents](index.php) |  Chapter 7. Download the Software Bundle and Prepare |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)