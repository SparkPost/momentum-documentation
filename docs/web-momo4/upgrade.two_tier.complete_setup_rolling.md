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

| 11.17. Complete the Software Set Up |
| [Prev](upgrade.two_tier.configuration.start_services_rolling.php)  | Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |  [Next](post_installation.php) |

## 11.17. Complete the Software Set Up

1.  Complete the Vertica setup on the **first Analytics node** .

    1.  Open vsql.

        `/opt/vertica/bin/vsql -U vertica_dba`
    2.  Run the following commands. This creates projections in Vertica so that queries can be optimized and executed more quickly, and also converts domain names to lowercase to simplify searching.

        ```
        set search_path='momo';
        \i /opt/msys/app/db/projections/multinode_sql/latest_metrics_projection.sql
        \i /opt/msys/app/db/projections/multinode_sql/latest_ad_projections.sql
        \i /opt/msys/app/db/data-migrations/V2015.02.17_14.21.00__migrate_lc_domain.sql
        ```

    3.  Quit vsql.

        `\q`

2.  Complete the Adaptive Delivery API setup on **all Analytics nodes** . For a combined cluster upgrade, perform this action on **all nodes in the cluster** .

    1.  Create or update the `/opt/msys/app/adaptive-delivery-api/config/production.json` file to configure the Adaptive Delivery API. It should like this.

        ```
        #  This file should be on all Analytics nodes
        #  Example
        #  cat > /opt/msys/app/adaptive-delivery-api/config/production.json
        {
          "vertica": {
            "hosts": [
              "analytics1.yourdomain.com",
              "analytics2.yourdomain.com",
              ...
              "analyticsN.yourdomain.com"      
            ]
          }
        }
        ```

    2.  Create or update the `/opt/msys/3rdParty/nginx/conf.d/api_adaptive_delivery_upstream.conf` file to configure Nginx.

        ```
        # Example
        # cat > /opt/msys/3rdParty/nginx/conf.d/api_adaptive_delivery_upstream.conf
        upstream api_adaptive_delivery {
           server analytics1.yourdomain.com:2086;
           server analytics2.yourdomain.com:2086;
               ...
           server analyticsN.yourdomain.com:2086;
           least_conn;
        }
        ```

    3.  Edit the nginx `/opt/msys/3rdParty/nginx/conf.d/web_proxy.conf` configuration file. Find these lines of code...

        ```
        location /api/v1/metrics {
            proxy_pass http://api_metrics;
            include "../conf.d/default.cors";
        }
        ```

        ...and add these lines immediately after:

        ```
        location /api/v1/adaptive-delivery {
            proxy_pass http://api_adaptive_delivery;
            include "../conf.d/default.cors";
        }

        location /api/v1/metrics/domains {
            more_set_headers 'Cache-Control: public, max-age=86400';
            proxy_pass http://api_metrics;
            include "../conf.d/default.cors";
        }
        ```

    4.  Start the Adaptive Delivery API.

        `/etc/init.d/msys-app-adaptive-delivery-api start`
    5.  Test the nginx configuration.

        `/etc/init.d/msys-nginx configtest`

        If there are no errors, restart nginx.

        `/etc/init.d/msys-nginx restart`

3.  Complete the Adaptive Delivery ETL setup on **all Platform nodes** . For a combined cluster upgrade, perform this action on **all nodes in the cluster** .

    1.  Create or update the `/opt/msys/app/adaptive-delivery-etl/config/production.json` file to configure the Adaptive Delivery API. It should look like this:

        ```
        # Example
        # cat > /opt/msys/app/adaptive-delivery-etl/config/production.json
        {
          "vertica": {
            "hosts": [
              "analytics1.yourdomain.com",
              "analytics2.yourdomain.com",
              ...
              "analyticsN.yourdomain.com"      
            ]
          }
        }
        ```

    2.  Start the Adaptive Delivery API.

        `service msys-app-adaptive-delivery-etl start`
    3.  Test the nginx configuration. If you are performing an upgrade on a Combined Node, you can skip this step.

        `service msys-nginx configtest`

        If there are no errors, restart nginx.

        `service msys-nginx restart`

4.  Clean up your configuration files. Remove all occurrences of `application.vertica|cassandra` from the following files (this is now in the root of all configurations). In a combined cluster upgrade, these files will be on **all nodes in the cluster** .

    *   On **all Analytics nodes** , this file `/opt/msys/app/webhooks-api/config/production.json` should look like this:

        ```
        # Configure Platform and Analytics hosts for the webhooks-api
        # cat > /opt/msys/app/webhooks-api/config/production.json
        {
           "vertica": {
             "hosts": [
                "analytics1.yourdomain.com",
                "analytics2.yourdomain.com", 
                 ...
                "analyticsN.yourdomain.com"
             ]
           },
            "cassandra": {
              "hosts": [
                "platnode1.yourdomain.com",
                "platnode2.yourdomain.com",
                 ...
                "platnodeN.yourdomain.com"
        ]
        }
        }
        ```

    *   On **all Analytics nodes** , this file `/opt/msys/app/metrics-api/config/production.json` should look like this:

        ```
        # cat > /opt/msys/app/metrics-api/config/production.json
        {
          "vertica": {
            "hosts": [
              "analytics1.yourdomain.com",
              "analytics2.yourdomain.com",
              ...
              "analyticsN.yourdomain.com"      
            ]
          }
        }
        ```

    *   On **all Platform nodes** , this file `/opt/msys/app/metrics-etl/config/production.json` should look like this:

        ```
        # Example
        # cat > /opt/msys/app/metrics-etl/config/production.json
        {
          "vertica": {
            "hosts": [
              "analytics1.yourdomain.com",
              "analytics2.yourdomain.com",
              ...
              "analyticsN.yourdomain.com"      
            ]
          }
        }
        ```

### Note

Be sure to read the [Release Notes](https://support.messagesystems.com/start.php) for the version of Momentum that you are installing.

| [Prev](upgrade.two_tier.configuration.start_services_rolling.php)  | [Up](upgrade.two_tier_configuration_rolling.php) |  [Next](post_installation.php) |
| 11.16. Start Services  | [Table of Contents](index.php) |  Chapter 12. Post-Installation |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)