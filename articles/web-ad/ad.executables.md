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

| Appendix B. Adaptive Executables and Console Commands |
| [Prev](ad.options.php)  |   |  [Next](ad.appendix.logs.php) |

## Adaptive Executables and Console Commands

Find below a table of executables related to the adaptive module.

<a name="ad.exectables.table"></a>

**Table B.1. adaptive executables**

| Command/Description |
| --- |
| [ad_summary](https://support.messagesystems.com/docs/web-ref/executable.ad_summary.php) – Summarize the adaptive module actions |
| [adaptive_loader](https://support.messagesystems.com/docs/web-ref/executable.adaptive_loader.php) – the script that loads the adaptive data used by the web UI |
| [adaptivedb](https://support.messagesystems.com/docs/web-ref/executable.adaptivedb.php) *(deprecated)* – Create the SQLite database used by the adaptive module |
| [ec_admigrate](https://support.messagesystems.com/docs/web-ref/executable.ec_admigrate.php) – Migrate from the SQLite adaptive database to Riak |
| [ec_adtool](https://support.messagesystems.com/docs/web-ref/executable.ec_adtool.php) – Manipulate adaptive parameters in a Riak database |
| [lu_pull](https://support.messagesystems.com/docs/web-ref/executable.lu_pull.php) – Update the Live Updates database |

Find below a table of console commands related to the adaptive module.

<a name="ad.console.table"></a>

**Table B.2. adaptive console commands**

| Command/Description | Version |
| --- | --- |
| [adaptive list](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.console) – Display the value of shaping parameters | 3.0 |
| [adaptive override](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.console) – Override a suspension | 3.0 |
| [adaptive reset](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.console) – Clear the values of the shaping parameters | 3.0 |
| [adaptive rules](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.console) – Display the adaptive rules that are in effect for the specified domain/binding pair | 3.0 |
| [adaptive suspensions](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.console) – Summarize the suspensions that are currently in effect | 3.0 |
| [adaptive warmup](https://support.messagesystems.com/docs/web-ref/modules.adaptive.php#modules.adaptive.console) – Display the age of bindings from the perspective of the IP Warmup component | 3.0 |

| [Prev](ad.options.php)  |   |  [Next](ad.appendix.logs.php) |
| Appendix A. Adaptive Options  | [Table of Contents](index.php) |  Appendix C. Adaptive Logs |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)