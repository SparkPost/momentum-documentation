| 6.11. Redefining Ephemeral Ports |
| [Prev](byb.root_and_vertica_dba.php)  | Chapter 6. Before You Begin |  [Next](byb.config_vertica_services.php) |

## 6.11. Redefining Ephemeral Ports

The lower limits of the port range as currently defined on Centos are too low as Vertica listens on 5433 and Riak listens on 8099. Redefine the Ephemeral Ports lower limit to a safer value, for example:

`echo "49152 65535" > /proc/sys/net/ipv4/ip_local_port_range`

Confirm the new port range:

`cat /proc/sys/net/ipv4/ip_local_port_range`
### Warning

If you are installing Momentum in AWS, do not use ephemeral disks in your production environment as this can potentially cause a loss of messages.

| [Prev](byb.root_and_vertica_dba.php)  | [Up](before_you_begin.php) |  [Next](byb.config_vertica_services.php) |
| 6.10. Creating `root` and `vertica_dba` Accounts  | [Table of Contents](index.php) |  6.12. Configuring Locale |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)