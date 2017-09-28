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

| 4.4. Debugging the Clicktracker |
| [Prev](mc-clicktracker-external-db.php)  | Chapter 4. Clicktracker |  [Next](mc-processing-log-files.php) |

## 4.4. Debugging the Clicktracker

If you need to have more information about what is going on with the clicktracker or the MSapp.ear service, create the file `/opt/msys/pe2/etc/webui.site/logging.conf` with the contents `LogLevel Debug`.

Stop the clicktracker service and then start it again:

```
shell> service pe2httpd stop
shell> service pe2httpd start
```

### Note

`restart` does not do precisely the same thing as stopping and starting this service.

You will then be able to see the transactional history of the URLs requested (and other detailed information) in /var/log/pe2-webui/error_log.*`number`* and /var/log/pe2-webui/access_log.*`number`* where *`number`* is the day of the week. (Sunday is `0`.)

| [Prev](mc-clicktracker-external-db.php)  | [Up](mc-clicktracker-component.php) |  [Next](mc-processing-log-files.php) |
| 4.3. Processing clicktracker jlog Files  | [Table of Contents](index.php) |  Chapter 5. Processing the `mc_logger` Log Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)