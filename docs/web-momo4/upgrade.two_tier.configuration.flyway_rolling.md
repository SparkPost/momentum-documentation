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

| 11.11. Prepare and Run Flyway |
| [Prev](upgrade.two_tier.preparation.upgrade_vertica_rolling.php)  | Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |  [Next](upgrade.two_tier.preparation.rpms_rolling.php) |

## 11.11. Prepare and Run Flyway

Configure the tables for running the Flyway data migration tool on the **first Analytics node** .

1.  Baseline the Flyway schema table.

    1.  Clean out the `/var/tmp/vertica-migrations` folder.

        `rm -rf /var/tmp/vertica-migrations/*`
    2.  Copy the new schema files into the `vertica-migrations` folder.

        `cp /opt/msys/app/db/schema/* /var/tmp/vertica-migrations/`
    3.  Truncate the existing `schema_version` table.

        `/opt/vertica/bin/vsql -U vertica_dba -c "TRUNCATE TABLE momo.schema_version;"`
    4.  Run the Flyway baseline, which adds a << BASELINE >> record to the table.

        `/opt/msys/app/db/flyway baseline`
    5.  Update the baseline record to point to the current date formatted like the Flyway migration versions we use.

        ### Note

        The version should be formatted `YYYY.MM.DD.HH.MM.SS`.

        ```
        /opt/vertica/bin/vsql -U vertica_dba -c "UPDATE momo.schema_version SET version='2014.09.20.00.00.00' \
           WHERE version=1; COMMIT;"
        ```

2.  Run the Flyway data migration tool.

    `/opt/msys/app/db/flyway migrate -locations=filesystem:/var/tmp/vertica-migrations`
    ### Note

    Flyway will run a series of scripts, after which you may receive the warning Error Code: 6100\. This warning is about best practices from Vertica and can safely be ignored as it does not apply once the scripts have run.

3.  Access Vertica via vsql.

    `/opt/vertica/bin/vsql -U vertica_dba`

    1.  Fix the template column.

        ```
        set search_path='momo';
        \i /opt/msys/app/db/scripts/V2014.11.26_15.45.00__rename_template_column.sql
        ```

    2.  Fix webhook batch status grants.

        `grant select, insert on momo.webhook_batch_status to vertica_api;`
    3.  Delete the `tdate_month` column.

        `\i /opt/msys/app/db/scripts/V2015.01.27_14.35.00__drop_tdate_month.sql`
        ### Warning

        This command may take a while to complete, but it must be finished before you can proceed.

    4.  Quit vsql.

        `\q`

| [Prev](upgrade.two_tier.preparation.upgrade_vertica_rolling.php)  | [Up](upgrade.two_tier_configuration_rolling.php) |  [Next](upgrade.two_tier.preparation.rpms_rolling.php) |
| 11.10. Upgrade Vertica on the Analytics Nodes  | [Table of Contents](index.php) |  11.12. Upgrade Remaining RPMs on Analytics Nodes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)