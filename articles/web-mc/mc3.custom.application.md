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

| Chapter 13. Custom Applications |
| [Prev](extending.message.template.alter.headers.php)  |   |  [Next](mc3.custom.application.create.php) |

## Chapter 13. Custom Applications

**Table of Contents**

<dl class="toc">

<dt>[13.1\. The Hello World App](mc3.custom.application.php#mc3.custom.application.hello-world)</dt>

<dt>[13.2\. Creating Your Own App](mc3.custom.application.create.php)</dt>

</dl>

It is possible to create custom applications that can be invoked from the CUSTOM APPS menu of the Message Central web UI. (See ["Custom Apps"](https://support.messagesystems.com/docs/web-mc-user/mc3-custom.php) chapter of the Message Central User Guide 3.x.)

Custom applications require PHP version 5.3 and are integrated into the Message Central permissions scheme. When developing custom apps it is strongly recommended that you use the REST API rather than accessing the Message Central database directly. The database structure may change with newer versions of Message Central.

The Message Central web UI comes with the sample custom applications `Hello World` and `Paginated List`. These applications are found in the `/opt/msys/pe2/webui/application/modules/custom/views/scripts` directory. In order for these applications to work, you must move the application controller from the `/opt/msys/pe2/webui/application/modules/custom/controllers/sample` directory to the `/opt/msys/pe2/webui/application/modules/custom/controllers` directory on the machine that hosts the Message Central web UI. For the `Hello World` app, do this in the following way:

```
shell> cd /opt/msys/pe2/webui/application/modules/custom/controllers/sample
shell> cp HelloWorldController.php ../
```

After doing this, refresh the web UI and there should be a submenu entry for this application under the CUSTOM APPS menu option. Selecting the HELLO WORLD! menu item executes the `index.phtml` file found in the `/opt/msys/pe2/webui/application/modules/custom/views/scripts/helloworld` directory.

For the `Paginated List` application to work you must also run the related SQL file, `/opt/msys/pe2/webui/application/modules/custom/sql/colors.sql`.

## 13.1. The Hello World App

For your convenience, the files that make up the `Hello World` app are reproduced here.

<a name="idp1631440"></a>

**Example 13.1. Hello World index.phtml file**

```
<?php /* vim: set ft=php ts=2 sw=2 et: */
/** ------------------------------------------------------------------------ *\
 * Copyright (c) 2010 Message Systems, Inc. All rights reserved
 *
 * THIS IS UNPUBLISHED PROPRIETARY SOURCE CODE OF MESSAGE SYSTEMS
 * The copyright notice above does not evidence any actual or
 * intended publication of such source code.
 *
 * Redistribution of this material is strictly prohibited.
\* ------------------------------------------------------------------------- */
?>
<h1>Hello World!</h1>

<p>We had to start somewhere</p>
```

<a name="HelloWorldController.php"></a>

**Example 13.2. HelloWorldController.php file**

```
<?php /* vim: set ft=php ts=2 sw=2 et: */
/** ------------------------------------------------------------------------ *\
* Copyright (c) 2001-2010 Message Systems, Inc. All rights reserved
*
* THIS IS UNPUBLISHED PROPRIETARY SOURCE CODE OF MESSAGE SYSTEMS
* The copyright notice above does not evidence any actual or
* intended publication of such source code.
*
* Redistribution of this material is strictly prohibited.
\* ------------------------------------------------------------------------- */
?>
<?php

class Custom_HelloWorldController extends Msys_CustomApp_Abstract
{
   static public function getDisplayName()
   {
      //optional, default is derived from class name
      return 'Hello World!';
   }
   public function indexAction()
   {
      $brand = $this->brand;
      $this->view->styles->add("/b/$brand/c/custom/mailings/listing.css");

      $auth = Msys_Auth::getInstance()->getIdentity();
      $this->view->auth = $auth;

      // This controller does nothing.
      // what did you expect?  It is a Hello World application.

      parent::indexAction();
   }
}
```

Custom controllers should extend the `Msys_CustomApp_Abstract` class which is found in the `/opt/msys/pe2/webui/library/Msys/CustomApp/Abstract.php` file. In turn, the `Msys_CustomApp_Abstract` class extends the `Msys_CRUD_Action` class found in the `/opt/msys/pe2/webui/library/Msys/CRUD/Action.php` file.

The `Helpers.php` file, also found in `/opt/msys/pe2/webui/library/Msys/CustomApp`, details various library methods for dealing with custom apps.

| [Prev](extending.message.template.alter.headers.php)  |   |  [Next](mc3.custom.application.create.php) |
| 12.7. Programmatically Altering Headers  | [Table of Contents](index.php) |  13.2. Creating Your Own App |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)