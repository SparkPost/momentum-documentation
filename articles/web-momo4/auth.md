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

| Chapter 21. Enforcing REST API/UI User Authentication |
| [Prev](conf.ref.msg_gen.conf.php)  | Part III. Configuring Momentum |  [Next](using_domainkeys.php) |

## Chapter 21. Enforcing REST API/UI User Authentication

**Configuration Change. ** As of version 4.1, user authentication is enforced on the web-based UI and all REST API by default.

Enforcing authentication is recommend for security reasons. However, your system administrator can disable user authentication if your application does not require it. Note that if you wish to disable user authentication, you must disable it for both the UI and REST API. You cannot disable authentication for one and not the other.

The procedure to disable user authentication requires a restart of Nginx on all Analytics nodes in your cluster. It is recommended that you make any changes at a time that impacts your users the least.

To disable user authentication, do the following:

1.  Shut down Nginx on each Analytics node using the following command:

    `/etc/init.d/msys-nginx stop`
    ### Note

    Users will be unable to access the REST API or UI once this command is executed.

2.  Disable authentication at the REST API layer by modifying the web proxy configuration of Nginx.

    This modification must take place on each Analytics node.

    In the file `/opt/msys/3rdParty/nginx/conf.d/web_proxy.conf`, comment out the line `access_by_lua_file "/opt/msys/app/users-api/nginx/access.lua";`. Commenting in Nginx is done through the use of the *#* symbol.

    Your `web_proxy.conf` file should look like the following:

    ```
    more_set_input_headers 'X-MSYS-CUSTOMER: 1';
    #access_by_lua_file "/opt/msys/app/users-api/nginx/access.lua";
    proxy_set_header  X-Real-IP  $remote_addr;
    proxy_set_header  X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header  Host $http_host;
    proxy_redirect    off;
    proxy_max_temp_file_size 0;
    proxy_intercept_errors on;
    ```

3.  Disable authentication in the web-based UI by modifying the UI configuration.

    This modification must take place on each Analytics node.

    In the file `/opt/msys/app/webui/scripts/config/production.json`, edit the "auth" stanza so that the value of the "enabled" key is false. Note that the value of the "enabled" key is a Boolean value and should not be quoted as a string value.

    The "auth" stanza of your `production.json` file should look similar to the following:

    ```
    "auth": {
      "apiPrefix": "/api/v1",
      "apiHost": "example-host.com",
      "apiPort": 80,
      "cookieDuration": 1209600,
      "enabled": false
    },
    ```

4.  Restart Nginx on each Analytics nodes using the following command:

    `/etc/init.d/msys-nginx start`

    Once Nginx has been turned back on, your users should be able to access all of the REST API and web-based UI without having to supply credentials or API keys.

| [Prev](conf.ref.msg_gen.conf.php)  | [Up](p.configuration.php) |  [Next](using_domainkeys.php) |
| 20.2. `msg_gen.conf` File  | [Table of Contents](index.php) |  Chapter 22. Using Yahoo! DomainKeys |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)