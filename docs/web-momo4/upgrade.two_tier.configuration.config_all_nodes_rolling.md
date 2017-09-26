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

| 11.13. Configuration Changes |
| [Prev](upgrade.two_tier.preparation.rpms_rolling.php)  | Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |  [Next](upgrade.two_tier.configuration.software_upgrade_rolling.php) |

## 11.13. Configuration Changes

Move the Vertica stanza to the root level in the configuration files on all nodes as detailed below.

### Note

Multiple stanzas in the root must be separated by commas. For example, in the webhooks-api version, a Cassandra stanza follows the Application stanza, so you will need to add a comma to the Vertica sub-stanza getting moved. This will help preserve the proper json formatting.

1.  Open a file editor on the **first Analytics node** .

    ```
    % shopt -s extglob
    vim -o /opt/msys/app/+(metrics|webhooks)-api/config/production.json
    ```

2.  Configure the `/opt/msys/app/<metrics and webhooks>-api/config/production.json` file.

    ```
    {
      "application":{
        "vertica": {  //from here
            // stuff, probably hosts
        } //to here
      },

      //put it here
      "vertica": {
         // stuff, probably hosts
      }
    }
    ```

3.  The application stanza (`"application": { }`) is now empty and may be deleted. Save the file and exit the file editor.

4.  Open a file editor on the **first Platform node** .

    `vim /opt/msys/app/metrics-etl/config/production.json`
5.  Update or verify the `/opt/msys/app/metrics-etl/config/production.json` file by copying the root -> application -> vertica stanza to root -> vertica.

    ```
    {
      "application":{
        "vertica": {  //from here
            // stuff, probably hosts
        } //to here
      },

      //put it here
      "vertica": {
         // stuff, probably hosts
      }
    ```

6.  The application stanza (`"application": { }`) is now empty and may be deleted. Save the file and exit the file editor.

7.  SCP the Analytics changes to the **other Analytics nodes** . See below for an example scp command:

    ```
    scp –p /opt/msys/app/webhooks-api/config/production.json {nodename or IP}:/opt/msys/app/webhooks-api/config/production.json
    scp –p /opt/msys/app/metrics-api/config/production.json {nodename or IP}:/opt/msys/app/metrics-api/config/production.json
    ```

8.  SCP the Platform changes to the **other Platform nodes** . See below for an example scp command:

    `scp –p /opt/msys/app/metrics-etl/config/production.json {nodename or IP}:/opt/msys/app/metrics-etl/config/production.json`

| [Prev](upgrade.two_tier.preparation.rpms_rolling.php)  | [Up](upgrade.two_tier_configuration_rolling.php) |  [Next](upgrade.two_tier.configuration.software_upgrade_rolling.php) |
| 11.12. Upgrade Remaining RPMs on Analytics Nodes  | [Table of Contents](index.php) |  11.14. Install the Adaptive Delivery API |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)