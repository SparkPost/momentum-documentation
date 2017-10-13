## 10.7. Start Services

1.  Start the following services.

    ```
    /etc/init.d/msys-app-users-api start
    /etc/init.d/msys-app-metrics-api start
    /etc/init.d/msys-app-webhooks-api start
    ```

    ### Note

    Adaptive Delivery Services will be started later.

2.  Confirm that the following services have been started.

    ```
    /etc/init.d/msys-app-webhooks-batch start
    /etc/init.d/msys-app-webhooks-transmitter start
    /etc/init.d/msys-app-metrics-etl start
    ```

| [Prev](upgrade.single_node.configuration.webui.php)  | [Up](upgrade.single_node.php) |  [Next](upgrade.single_node.complete_setup.php) |
| 10.6. Update Web UI Configuration  | [Table of Contents](index.php) |  10.8. Complete the Software Set Up |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)