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

| Appendix A. The APIs for adding Custom Behavior |
| [Prev](msc.logs.search.php)  |   |  [Next](msc.custom.behavior.lucene.php) |

## The APIs for adding Custom Behavior

**Table of Contents**

<dl class="toc">

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

Using MessageScope you can create one or more "Driver" classes to provide custom behaviors at various points within the application. You can:

*   Add to the list of search filters

*   Add to the list of Lucene fields

*   Modify the standard, partner, and user trace details

*   Modify the trace "as a whole", for example, to change the order of events

*   Add "Act On Message" buttons, dialogs, and backend logic

To provide these behaviors, you need to create a PHP class that implements `MscDriverInterface`, or one that extends the `MscDriver` class, (found in the `/opt/msys/scope/www/lib` directory on the node that hosts the Message Scope web UI) and save it in `/opt/msys/scope/www/lib`. In the following examples the driver is called `DriverVendor`.

```
<?php
class DriverVendor extends MscDriver {
  ...
}
```

You also need to set your driver as the default for all behaviors. To do this, modify the `/opt/msys/scope/www/config/drivers.ini` file and add or change the `default` key:

```
[drivers]
default = DriverVendor
```

The `MscDriver.php` file is found in the `/opt/msys/scope/www/lib` directory. For your convenience this file is reproduced in [Section A.11, “The MscDriver Class”](msc.custom.behavior.mscdriver.php "A.11. The MscDriver Class"). The remainder of this section discusses the various methods of the MscDriver driver class.

## A.1. Search Filters

To add to the list of search filters presented by MessageScope, implement or override the `getSearchFilters()` method of the MscDrivers class. The method should return an array of key-value pairs where the key is the underlying search filter name as defined in the access controls, and the value is the label that will be displayed to the user.

```
<?php
public function getSearchFilters()
{
  return array(
    'extra_filter_name' => 'ExtraFilterName',
    'another_filter'  => 'AnotherFilter',
  );
}
```

| [Prev](msc.logs.search.php)  |   |  [Next](msc.custom.behavior.lucene.php) |
| 9.5. Search Configuration Files  | [Table of Contents](index.php) |  A.2. Lucene Fields |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)