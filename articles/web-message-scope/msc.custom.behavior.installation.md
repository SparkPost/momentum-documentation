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

| A.9. Installing Your Driver |
| [Prev](msc.custom.behavior.handle.actions.php)  | Appendix A. The APIs for adding Custom Behavior |  [Next](msc.custom.behavior.DriverMPDT.php) |

## A.9. Installing Your Driver

Once you've written a display driver, it needs to be created as a package. To do this, you need to create a small script that does such things as set permissions—if you are implementing the ability to search on user data or partner data, for instance.

The DriverMPDT driver class, reproduced in [Section A.10, “The DriverMPDT Driver Class”](msc.custom.behavior.DriverMPDT.php "A.10. The DriverMPDT Driver Class"), implements some display and search filters for the UI. This uses a test module to insert partner data into a log entry via the partner data hook. The following shell script installs the permissions, allowing Administrators, Supervisors and Users to search on both `Timestamp` and More Data. One thing to note here is that the permission names used here **must** match the keys implemented in the array returned by the `getSearchFilters()` method in the driver.

To package a driver you must also create a script such as the following:

```
#!/bin/sh
echo "select mss.grantRolePermission($1, 'Admin', 'Timestamp')" | \
  /opt/msys/3rdParty/bin/psql -U ecuser ecelerity
echo "select mss.grantRolePermission($1, 'Supervisor', 'Timestamp')" | \
  /opt/msys/3rdParty/bin/psql -U ecuser ecelerity
echo "select mss.grantRolePermission($1, 'User', 'Timestamp')" | \
  /opt/msys/3rdParty/bin/psql -U ecuser ecelerity
echo "select mss.grantRolePermission($1, 'Admin', 'More Data')" | \
  /opt/msys/3rdParty/bin/psql -U ecuser ecelerity
echo "select mss.grantRolePermission($1, 'Supervisor', 'More Data')" | \
  /opt/msys/3rdParty/bin/psql -U ecuser ecelerity
echo "select mss.grantRolePermission($1, 'User', 'More Data')" |
  /opt/msys/3rdParty/bin/psql -U ecuser ecelerity
echo "register[] = DriverMPDT, standard, search_filters" \
  >> /opt/msys/scope/www/config/drivers.ini
echo "register[] = DriverMPDT, standard, fields"
  >> /opt/msys/scope/www/config/drivers.ini
echo "register[] = DriverMPDT, partner, mpdt"
  >> /opt/msys/scope/www/config/drivers.ini
```

This script **must** be called `init_perms`.

To create the final package, put the `init_perms` file and, in this case, `DriverMPDT.php` in the same directory, and run: **tar -czf DriverMPDT.tgz init_perms DriverMPDT.php** .

Install this driver by running **/opt/msys/scope/scripts/install_package *`admin_username`* DriverMPDT**                               (note the lack of tgz ending).

| [Prev](msc.custom.behavior.handle.actions.php)  | [Up](msc.custom.behavior.php) |  [Next](msc.custom.behavior.DriverMPDT.php) |
| A.8. Handling Actions  | [Table of Contents](index.php) |  A.10. The DriverMPDT Driver Class |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)