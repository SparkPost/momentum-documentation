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

| 14.2. Removing an Analytics Node |
| [Prev](add_remove_analytics_nodes.php)  | Chapter 14. Adding and Removing Analytics Nodes |  [Next](p.configuration.php) |

## 14.2. Removing an Analytics Node

To remove an Analytics node (Vertica+Application) from a cluster, follow the documentation provided by HP on removing a Vertica node, removing all NGINX upstream references, and removing references in API configurations.

### Note

You cannot remove nodes that are critical for K-safety. For more information, see [ HP Vertica documentation](https://my.vertica.com/docs/7.1.x/HTML/Content/Authoring/Glossary/K-Safety.htm).

### Note

These instructions apply to Momentum 4.2.1.*`x`*, where `x` > or = `11`

### 14.2.1. Update Configuration Files on all Platform/MTA/Log Aggregator Nodes

1.  From the first platform node, remove the application node from the "upstream api_webhooks" stanza in the `/opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf` file.

2.  Set the node variable to the FQDN of the application node being removed. Do the same for the other MTA nodes in the cluster. (This example assumes there are three platform nodes in the cluster, but all should be provided here.)

    ```
    export NODE=remove.app.node.fully.qualified.name;
    export MTA2=plat2.fully.qualified.name;
    export MTA3=plat3.fully.qualified.name;
    ```

3.  Update the `production.json` files on all platform nodes.

    ```
    export PATH=/opt/msys/3rdParty/bin/:$PATH
    for f in \
      /opt/msys/app/metrics-etl/config/production.json \
      /opt/msys/app/webhooks-etl/config/production.json \
      /opt/msys/app/adaptive-delivery-etl/config/production.json \
      ; do
      tmpf=$(mktemp --tmpdir=$(dirname $f) -t)
      jq "del(.vertica.hosts[] | select(.==\"$NODE\"))" -a -M $f > $tmpf
      if [ $? = 0 ]; then
        mv -f $tmpf $f
        echo "$f updated";
      fi
    done
    ```

4.  Copy the modified configuration files to all remaining platform nodes (provide more or fewer hostname variables as needed).

    ```
    for f in \
      /opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf \
      /opt/msys/app/metrics-etl/config/production.json \
      /opt/msys/app/webhooks-etl/config/production.json \
      /opt/msys/app/adaptive-delivery-etl/config/production.json \
      ; do
      scp $f $MTA2:$f
      scp $f $MTA3:$f
    done
    ```

5.  Restart all affected services on each platform node.

    ```
    service msys-app-metrics-etl restart
    service msys-app-webhooks-etl restart
    service msys-nginx reload
    ```

### 14.2.2. Update Configuration Files on Remaining Application Nodes

1.  Remove the application node from the "upstream" stanzas in the following `nginx/conf.d` files on the first application node.

    *   `/opt/msys/3rdParty/nginx/conf.d/api_adaptive_delivery_upstream.conf`

    *   `/opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf`

    *   `/opt/msys/3rdParty/nginx/conf.d/api_users_upstream.conf`

    *   `/opt/msys/3rdParty/nginx/conf.d/api_metrics_upstream.conf`

    *   `/opt/msys/3rdParty/nginx/conf.d/webui_upstream.conf`

2.  Set the node variable to the FQDN of the application node being removed. Do the same for the other application nodes in the cluster. (This example assumes there are currently four application nodes in the cluster, but all should be provided here.)

    ```
    export NODE=remove.app.node.fully.qualified.name; 
    export NODE2=app2.fully.qualified.name; 
    export NODE3=app3.fully.qualified.name;
    ```

3.  Update the `production.json` files on all application nodes.

    ```
    export PATH=/opt/msys/3rdParty/bin/:$PATH
    for f in \
      /opt/msys/app/webhooks-api/config/production.json \
      /opt/msys/app/adaptive-delivery-api/config/production.json \
      /opt/msys/app/adaptive-delivery-api/cron/config/production.json \
      /opt/msys/app/metrics-api/config/production.json \
      /opt/msys/app/metrics-api/cron/config/production.json \
      ; do
      tmpf=$(mktemp --tmpdir=$(dirname $f) -t)
      jq "del(.vertica.hosts[] | select(.==\"$NODE\"))" -a -M $f > $tmpf
      if [ $? = 0 ]; then
        mv -f $tmpf $f
        echo "$f updated";
      fi
    done
    ```

4.  Copy the modified configuration files to the original Analytics nodes.

    ```
    for f in \
      /opt/msys/3rdParty/nginx/conf.d/api_adaptive_delivery_upstream.conf \
      /opt/msys/3rdParty/nginx/conf.d/api_webhooks_upstream.conf \
      /opt/msys/3rdParty/nginx/conf.d/api_users_upstream.conf \
      /opt/msys/3rdParty/nginx/conf.d/api_metrics_upstream.conf \
      /opt/msys/3rdParty/nginx/conf.d/webui_upstream.conf \
      /opt/msys/app/webhooks-api/config/production.json \
      /opt/msys/app/adaptive-delivery-api/config/production.json \
      /opt/msys/app/adaptive-delivery-api/cron/config/production.json \
      /opt/msys/app/metrics-api/config/production.json \
      /opt/msys/app/metrics-api/cron/config/production.json \
      ; do
      scp $f $NODE2:$f
      scp $f $NODE3:$f
    done
    ```

5.  Restart the services on all remaining application nodes.

    ```
    service msys-app-metrics-api restart
    service msys-app-users-api restart
    service msys-app-webhooks-api restart
    service msys-nginx reload
    ```

### 14.2.3. Remove the Node from the Vertica Cluster

1.  Follow [ instructions provided by HP](https://my.vertica.com/docs/7.1.x/HTML/Content/Authoring/AdministratorsGuide/ManageNodes/RemovingNodesFromADatabase.htm) to remove a Vertica node from a cluster.

2.  Perform backups as necessary.

| [Prev](add_remove_analytics_nodes.php)  | [Up](add_remove_analytics_nodes.php) |  [Next](p.configuration.php) |
| Chapter 14. Adding and Removing Analytics Nodes  | [Table of Contents](index.php) |  Part III. Configuring Momentum |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)