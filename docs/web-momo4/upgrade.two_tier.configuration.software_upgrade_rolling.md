| 11.14. Install the Adaptive Delivery API |
| [Prev](upgrade.two_tier.configuration.config_all_nodes_rolling.php)  | Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node |  [Next](upgrade.two_tier.configuration.webui_rolling.php) |

## 11.14. Install the Adaptive Delivery API

### Note

You must upgrade the Analytics node first.

1.  On **all Analytics nodes** , install the following packages using the new RPMs. For a combined cluster upgrade, perform this action on **all nodes in the cluster** .

    `yum install --disablerepo=* --config momentum.repo --enablerepo=momentum msys-app-adaptive-delivery-api`
2.  On **all Platform nodes** , install the following packages using the new RPMs. For a combined cluster upgrade, perform this action on **all nodes in the cluster** .

    `yum install --disablerepo=* --config momentum.repo --enablerepo=momentum msys-app-adaptive-delivery-etl`

| [Prev](upgrade.two_tier.configuration.config_all_nodes_rolling.php)  | [Up](upgrade.two_tier_configuration_rolling.php) |  [Next](upgrade.two_tier.configuration.webui_rolling.php) |
| 11.13. Configuration Changes  | [Table of Contents](index.php) |  11.15. Update the Web UI Configuration |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)