| Chapter 12. Post-Installation |
| [Prev](upgrade.two_tier.complete_setup_rolling.php)  | Part II. Installing Momentum |  [Next](install.post-install.config.php) |

## Chapter 12. Post-Installation

**Table of Contents**

<dl class="toc">

<dt>[12.1\. Installing Partner Modules](post_installation.php#install.additional.packages)</dt>

<dt>[12.2\. Reviewing Configuration Files](install.post-install.config.php)</dt>

<dt>[12.3\. Rotating Logfiles](install.post-install.rotate.php)</dt>

<dt>[12.4\. Download and Install the Vertica Management Console](install.post-install.vertica_mgmt_console.php)</dt>

<dt>[12.5\. Upgrading the Vertica License](install.vertica.license.php)</dt>

<dt>[12.6\. Security Considerations](install.security_considerations.php)</dt>

</dl>

After you install Momentum 4, you will need to perform some additional actions and consider some potential security issues in order to complete your installation.

*   [Section 12.1, “Installing Partner Modules”](post_installation.php#install.additional.packages "12.1. Installing Partner Modules")

*   [Section 12.2, “Reviewing Configuration Files”](install.post-install.config.php "12.2. Reviewing Configuration Files")

*   [Section 12.3, “Rotating Logfiles”](install.post-install.rotate.php "12.3. Rotating Logfiles")

*   [Section 12.5, “Upgrading the Vertica License”](install.vertica.license.php "12.5. Upgrading the Vertica License")

*   [Section 12.6, “Security Considerations”](install.security_considerations.php "12.6. Security Considerations")

## 12.1. Installing Partner Modules

See the specific module documentation for more information.

*   Policy Tools suite – This package contains tools for receivers and requires the pcap library. This gives you passive OS fingerprinting (p0f) and the url_ripper module, needed for SURBL. For more information, see [Section 71.73, “url_ripper – URL Extraction”](modules.url_ripper.php "71.73. url_ripper – URL Extraction") and [Passive operating system (OS) fingerprinting](glossary.php#gloss-p0f "Passive operating system (OS) fingerprinting").

*   Commtouch content scanning – This package provides the CYREN (formerly known as Commtouch) spam protection technology. Only install this module if you have a license from CYREN. For more information, see [Section 71.20, “commtouch_ctasd – Commtouch Spam Protection”](modules.commtouch.php "71.20. commtouch_ctasd – Commtouch Spam Protection").

*   Cloudmark Authority® content scanning – This package provides the Cloudmark spam technology. Only install this module if you have a license from Cloudmark. For more information, see [Section 71.18, “cloudmark – Cloudmark Authority® Content Scanning”](modules.cloudmark.php "71.18. cloudmark – Cloudmark Authority® Content Scanning").

*   Eleven eXpurgate content scanning – This package provides the eXpurgate spam technology. For more information see [Section 71.31, “eleven – Eleven eXpurgate Content Scanning”](modules.eleven.php "71.31. eleven – Eleven eXpurgate Content Scanning").

*   Symantec CSAPI antivirus support – This package provides integration of the Symantec content scanners. Only install this module if you have a license from Symantec. For more information, see [Section 71.23, “csapi – Symantec CSAPI Antivirus Support”](modules.csapi.php "71.23. csapi – Symantec CSAPI Antivirus Support").

*   Symantec Brightmail™ Engine Integration Kit – This package is an in-process version of the Brightmail module. Only install this module if you have a license from Symantec. For more information, see [Section 71.10, “beik – Symantec Brightmail™ Engine Integration Kit”](modules.beik.php "71.10. beik – Symantec Brightmail™ Engine Integration Kit").

*   Symantec Brightmail™ content scanning support – This package checks inbound content against a Symantec Brightmail AntiSpam content server. Only install this module if you have a license from Symantec. For more information, see [Section 71.14, “brightmail – Symantec Brightmail™ Content Scanning Support”](modules.brightmail.php "71.14. brightmail – Symantec Brightmail™ Content Scanning Support").

*   Ecelerity Developer Tools – You only need to install these tools if you are compiling your own extensions on the machine on which it is installed. Files related to this package are found under the `/opt/msys/ecelerity` directory.

| [Prev](upgrade.two_tier.complete_setup_rolling.php)  | [Up](p.installing.php) |  [Next](install.post-install.config.php) |
| 11.17. Complete the Software Set Up  | [Table of Contents](index.php) |  12.2. Reviewing Configuration Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)