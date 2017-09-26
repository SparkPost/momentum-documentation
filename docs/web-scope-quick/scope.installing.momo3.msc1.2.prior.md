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

| 2.2. Installation Prior to Message Scope 1.2 |
| [Prev](scope.installing.php)  | Chapter 2. Installing the Momentum Component |  [Next](scope.installing.momo3.msc1.2.services.php) |

## 2.2. Installation Prior to Message Scope 1.2

For installation of Message Scope versions prior to Message Scope 1.2, install Momentum as you normally would. Once installation of Momentum is complete, do *not* start up the services immediately. You still need to install the Message Scope RPM file. Do this by copying the msys-ecelerity-messagescope-*`version.os.arch`*.rpm file to the current directory and installing it in the following way:

shell> rpm -ivh msys-ecelerity-messagescope-*`version.os.arch`*.rpm
### Note

As of version 3.1.6, you do not need to install this RPM file manually.

### 2.2.1. Adding the messagescope Module to the Configuration

After installing the Message Scope RPM file add the messagescope module to your configuration:

messagescope {}
msc_logger "msc_logger1" {
  ingestor_nodes = ( *`"node1" "node2" ...`*              )
}
### Note

Manually changing the `ecelerity.conf` file is described in "[Best Practices for Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php)". You can also make these changes through the Momentum web console.

To configure the messagescope module in Momentum 2.2 see [Section 2.2.2, “Momentum 2.2 for Message Scope”](scope.installing.momo3.msc1.2.prior.php#scope.installing.momo2 "2.2.2. Momentum 2.2 for Message Scope").

Replace *`"node1" "node2" ...`*              with a list of all of the ingestor nodes. For more information about the Message Scope modules see "[Message Scope Reference](https://support.messagesystems.com/docs/web-message-scope/)".

You must also create the `/opt/msys/ecelerity/etc/messagescope_remediation.conf` by editing `/opt/msys/ecelerity/etc/sample-configs/messagescope_remediation.conf`. On the first blank line enter the node name of the machine hosting the **Message Scope**       web UI and then copy this file to the `/opt/msys/ecelerity/etc/` directory.

```
shell> cd /opt/msys/ecelerity/etc/sample-configs
shell> vi messagescope_remediation.conf
shell> cp messagescope_remediation.conf ../
```

You can now start up Message Scope server by issuing the following command:

`shell > /etc/init.d/msc_server start`

This service and all others will start up automatically if the system is rebooted. Repeat this process for all nodes.

### Note

As of version 3.1.6, the `messagescope_remediation.conf` file is created and populated by the installer. You do not need to do this manually.

Once the Momentum component of Message Scope has been installed you can install the Message Scope bundle. The next chapter describes installation on Momentum *2.2*.

### 2.2.2. Momentum 2.2 for Message Scope

The installation of Momentum 2.2 for use with Message Scope is identical to the procedure described in the Momentum manual at "[Installation](https://support.messagesystems.com/docs/web/install.linux.php)".

Once Momentum is installed, install the Message Scope RPM as described in [Section 2.2, “Installation Prior to Message Scope 1.2”](scope.installing.momo3.msc1.2.prior.php "2.2. Installation Prior to Message Scope 1.2").

### 2.2.3. Manually Configuring the messagescope Module in Momentum 2.2

This section describes manually configuring the messagescope module in Momentum version 2.2.

When RPM installation is complete module configuration must be performed manually by adding the following to your `ecelerity.conf` configuration file:

Validate validate/messagescope messagescope {}
Logger logging/msc_logger msc_logger {
  ingestor_nodes = ( *`node1 node2 ...`*            )
}

Replace *`node1 node2 ...`*            with a list of all of the ingestor nodes. For more information about the Message Scope modules see "[Message Scope Refrerence](https://support.messagesystems.com/docs/web-message-scope/index.php)".

### Note

Create the `messagescope_remediation.conf` file and start up the msc_server service as described in [Section 2.2.1, “Adding the messagescope Module to the Configuration”](scope.installing.momo3.msc1.2.prior.php#scope.installing.momo3.msc1.2.prior.module "2.2.1. Adding the messagescope Module to the Configuration").

If you are installing a cluster, repeat this process for all nodes.

Once the Momentum component of Message Scope has been installed you can install the Message Scope bundle. The next chapter describes this process.

| [Prev](scope.installing.php)  | [Up](scope.installing.php) |  [Next](scope.installing.momo3.msc1.2.services.php) |
| Chapter 2. Installing the Momentum Component  | [Table of Contents](index.php) |  2.3. Starting the Services |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)