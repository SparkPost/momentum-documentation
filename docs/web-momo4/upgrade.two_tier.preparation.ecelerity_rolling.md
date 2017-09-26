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

| 11.6. Upgrade Ecelerity and the Cassandra Schema on the First Platform Node |
| [Prev](upgrade.two_tier.preparation.stop_generations_rolling.php)  | Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |  [Next](upgrade.two_tier.preparation.stop_transmissions_rolling.php) |

## 11.6. Upgrade Ecelerity and the Cassandra Schema on the First Platform Node

1.  The following steps connect Ecelerity and Cassandra. These steps should be done only on the **first Platform node** . Be sure you perform these steps in the order shown below.

    1.  Upgrade the RPM packages with yum (this includes all Momentum and third party packages).

        `yum --disablerepo=* --config momentum.repo --enablerepo=momentum upgrade`
    2.  Set up Cassandra-Momentum compatibility (i.e., the Cassandra schema to be used) (**first Platform node only** ).

        `/opt/msys/ecelerity/bin/cassandra_momo_setup.sh --multinode /opt/msys/ecelerity/etc`
    3.  Start ecconfigd (**first Platform node only** ).

        `service ecconfigd start`
    4.  Start Momentum.

        `service ecelerity start`
        ### Note

        If Ecelerity fails to start due to a licensing issue, copy your license to the `/opt/msys/ecelerity/etc/license` file on **all nodes** .

2.  Modify the `populate_customer_metadata.cql` file to apply the Cassandra schema (**first Platform node only** ).

    ```
    sed -i 's/, sending_disabled//' \
    /opt/msys/app/users-api/cql/upgrades/V2015.01.20_02.00.00__populate_customer_metadata.cql
    ```

3.  Apply the Users API schema changes (**first Platform node only** ).

    ```
    export UPG=/opt/msys/app/users-api/cql/upgrades
    export CQLSH=/opt/msys/3rdParty/bin/cqlsh
    $CQLSH -k authentication -f $UPG/V2015.01.20_00.00.00__create_customer_metadata.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.01.20_01.00.00__extract_customers.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.01.20_02.00.00__populate_customer_metadata.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.01.21_00.00.00__add_terms_of_use_column.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.04.09_00.00.00__create_unsuccessful_logins.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.04.10_00.00.00__two_factor.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.04.28_00.00.00__add_is_sso_column.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.04.28_00.00.00__add_tou_last_updated.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.05.21_00.00.00__add_email_verified_column.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.05.21_00.00.00__create_email_verification_tokens.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.06.16_00.00.00__add_saml_column.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.06.17_00.00.00__add_valid_ip_column.cql 2>&1 >> cassandra_schema.log
    $CQLSH -k authentication -f $UPG/V2015.06.22_00.00.00__add_last_login_column.cql 2>&1 >> cassandra_schema.log
    ```

| [Prev](upgrade.two_tier.preparation.stop_generations_rolling.php)  | [Up](upgrade.two_tier_configuration_rolling.php) |  [Next](upgrade.two_tier.preparation.stop_transmissions_rolling.php) |
| 11.5. Stop Transmissions to the First Platform Node  | [Table of Contents](index.php) |  11.7. Restore Transmissions to the First Platform Node and Stop Transmissions to all other Platform Nodes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)