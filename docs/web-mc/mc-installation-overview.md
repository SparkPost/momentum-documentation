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

| 1.4. Installation Overview |
| [Prev](mc-configurations.php)  | Chapter 1. Installing Message Central |  [Next](mc-upgrade-341-to-351.php) |

## 1.4. Installation Overview

Message Central is installed from an archived file bearing the name, message-central-bundle-*`version.platform.architecture`*.tar.gz. where *`version`* indicates the version number, *`platform`* indicates the specific operating system and *`architecture`* indicates the architecture. Navigate to ["Support Site"](https://support.messagesystems.com/start.php) and find the version suitable to your circumstances. If you need to install an MTA, this bundle includes the latest version of Momentum.

### Note

The upgrade process should not be performed during any active phase of a mailing. Doing so may result in dropped emails.

As with Momentum, you can specify an options file when upgrading Message Central. The `/opt/mys/etc/installer/lastinstall` file preserves the choices made during the last installation. For more information see [Installation Options](https://support.messagesystems.com/docs/web-ref/install.options.php).

Message Central is not yet supported in Momentum 3.6.0.

The following users are created during installation:

*   A service account – For system level access to the Momentum instance. Record this password, as it is essential for configuring the machines in your deployment.

*   An admin account – A superuser account. Record this password, as it is essential for configuring the machines in your deployment.

*   A database user – The default user name for the database user is `ecuser`. The password for this user is the same as the admin password.

*   A REST user – This user has the same credentials as the admin account.

*   A web UI login – This username and password is also identical to the admin user.

### Note

As of Message Central version 3.7, you can use Reversible Encryption. During installation you will be asked: "`Do you want to enable encrypted password support? (y,n)`". If you answer `y`, the securecreds module will be added to the `/opt/msys/pe2/etc/mc_auth.conf` file. If you wish to use this capability, review the material at [The securecreds Module](https://support.messagesystems.com/docs/web-ref/modules.securecreds.php). For more information about the `mc_auth.conf` file see [Section 6.4, “The `mc_auth.conf` File”](mc.conf.mc_auth.conf.php "6.4. The mc_auth.conf File").

Prior to installation you should review the previous sections and the installation instructions specific to Momentum given in ["Installation"](https://support.messagesystems.com/docs/web-ref/install.php).

However, the instructions related to injecting email from the generators, warrant further examination.

If you are installing a cluster configuration, during installation you will be asked for the netmask for cluster nodes:

In order to inject e-mail from the generator(s), the MTA's configuration
  has to be set to permit relay.  Please enter either the IP address(es) of
  each generator node, or a network address with CIDR or 255.255.x.x format
  that match all generator node(s).

  Please enter a node (hit enter when finished):

  Please enter *`Node_IP`*'s netmask (in CIDR or 255.255.x.x format):

The following section describes how this information is used in your configuration file.

### 1.4.1. The XSETCONTEXT Extension for SMTP

All generators require XSETCONTEXT to be enabled; this is how Message Central enables or disables features on the MTA. During installation, this extension is installed in the `Peer` scope.

For security reasons, the easiest way to configure XSETCONTEXT securely is to determine the IP address(es) of the Message Central generator machines, and then enable the extension within the Peer scope.

### Warning

The XSETCONTEXT extension allows a remote machine to pre-set validation context variables. For this reason it is strongly recommended that this variable *not* be set in the global scope. If your Momentum server is reachable from the Internet, setting this option in the global scope allows any sender to inject context data.

For example, if machines in the CIDR block 10.0.0.1/24 are Message Central machines you might use the following ESMTP listener configuration:

```
ESMTP_Listener {
  Listen ":25" {
    # various config in here
  }

  Peer "10.0.0.1/24" {
    SMTP_Extensions = ("XSETCONTEXT" "ENHANCEDSTATUSCODES")
  }
}
```

The above configuration will enable XSETCONTEXT only for machines in the specified CIDR block. However, if there are a couple of individual machines and they are on different networks, or you're otherwise unable to use CIDR format, you can specify one Peer scope for each IP address in the following way:

```
Peer "10.0.0.1" {
    SMTP_Extensions = ("XSETCONTEXT" "ENHANCEDSTATUSCODES")
  }
  Peer "192.168.0.2" {
    SMTP_Extensions = ("XSETCONTEXT" "ENHANCEDSTATUSCODES")
  }
```

If you wish to change your peer configuration, the simplest way to do this is by using the Momentum web UI.

| [Prev](mc-configurations.php)  | [Up](mc-installation.php) |  [Next](mc-upgrade-341-to-351.php) |
| 1.3. Installation Configurations  | [Table of Contents](index.php) |  1.5. Upgrading from Message Central version 3.4.1 to version 3.5.1 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)