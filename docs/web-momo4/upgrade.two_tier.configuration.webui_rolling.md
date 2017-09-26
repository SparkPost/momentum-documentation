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

| 11.15. Update the Web UI Configuration |
| [Prev](upgrade.two_tier.configuration.software_upgrade_rolling.php)  | Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |  [Next](upgrade.two_tier.configuration.start_services_rolling.php) |

## 11.15. Update the Web UI Configuration

We recommend you make these changes on one Analytics node and then use the scp command to copy them to the other Analytics nodes.

1.  Backup the `production.json` file then copy the `default.json` file to production. Answer `yes` at the prompt.

    ```
    cp /opt/msys/app/webui/scripts/config/production.json \
    /opt/msys/app/webui/scripts/config/production.json.bkup

    cp /opt/msys/app/webui/scripts/config/default.json \
    /opt/msys/app/webui/scripts/config/production.json
    ```

2.  Manually migrate environment-specific settings from the `/opt/msys/app/webui/scripts/config/production.json.bkup` file to the `/opt/msys/app/webui/scripts/config/production.json` file.

    All apiPorts and apiHosts default to localhost when set to false. This should be fine in most situations. There should not be many changes, and if the hosts are different they may need to be applied to the new API configuration stanzas. Specifically check for auth -> enabled and API hosts.

    ### Note

    Be sure to set the auth stanza to `"enabled": true`. Failure to do so will result in the message "Data could not be retrieved. Following is a list of errors:"

3.  Edit the `/opt/msys/app/webui/scripts/config/production.json` file to turn on adaptive delivery reporting.

    ```
    {
      "adaptiveDelivery" : {
        "enabled": true
      }
    }
    ```

4.  SCP the file to the other nodes.

    ### Note

    Attempts to scp between nodes may trigger the message "Error reading response length from authentication socket" before the password is requested. Enter your password to continue. You can clear the errors by logging out and back in to each of the nodes.

| [Prev](upgrade.two_tier.configuration.software_upgrade_rolling.php)  | [Up](upgrade.two_tier_configuration_rolling.php) |  [Next](upgrade.two_tier.configuration.start_services_rolling.php) |
| 11.14. Install the Adaptive Delivery API  | [Table of Contents](index.php) |  11.16. Start Services |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)