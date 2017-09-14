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

| 3.13. Installing an Additional Generator |
| [Prev](mc-post-installation.sms.php)  | Chapter 3. Post-installation Tasks |  [Next](mc-clicktracker-component.php) |

## 3.13. Installing an Additional Generator

After the initial installation you may need to add a new generator node to a cluster. Having a second generator helps reduce the load on the system and thus improves performance. This section describes how to do this.

1.  Perform an installation as described at [Section 1.3, “Installation Configurations”](mc-configurations.php "1.3. Installation Configurations") selecting the generator role. During installation you will need to identify the machines in the cluster that perform the database and MTA roles so have the IP addresses or the hostnames for these machines ready.

2.  After installing the new generator change the `/opt/msys/ecelerity/etc/conf/global/msgc_server.conf` file on the cluster manager by adding the new generator as shown below. (For instructions on changing configuration files see [Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php).)

    ```
    msgc_server {
       peers = [
            db = "192.168.200.141"
            mta = "192.168.200.82"
            gen1 = "192.168.200.117"
            **gen2 = "192.168.200.122"**                     # This is the new entry
       ]
    }
    ```

3.  Configure the new generator as a relay host in the ESMTP_Listener scope. Do this by changing `/opt/msys/ecelerity/etc/conf/default/ecelerity.conf` in the following way:

    ```
    ESMTP_Listener {
      Peer "192.168.200.117" {
        SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "XSETCONTEXT" )
        Relay_Hosts = ( "192.168.200.117" )
      }
      Peer "192.168.200.141" {
        SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "XSETCONTEXT" )
        Relay_Hosts = ( "192.168.200.141" )
      }
      # The new generator follows
      **Peer "192.168.200.122" {
        SMTP_Extensions = ( "ENHANCEDSTATUSCODES" "XSETCONTEXT" )
        Relay_Hosts = ( "192.168.200.122" )
      }** 
    }
    ```

4.  As an alternative to setting `relay_hosts` in the peer scope, you can update the `relay_hosts` option in the global scope in the following way:

    `Relay_Hosts = ( "127.0.0.1/32" ::1 **"192.168.200.122/24"**)`
5.  Commit your change as described in [Manually Changing Configuration Files](https://support.messagesystems.com/docs/web-ref/conf.manual.changes.php) and restart the ecelerity process or execute **`config reload`**         from the system console.

| [Prev](mc-post-installation.sms.php)  | [Up](mc-post-installation.php) |  [Next](mc-clicktracker-component.php) |
| 3.12. Configuring for SMS  | [Table of Contents](index.php) |  Chapter 4. Clicktracker |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)