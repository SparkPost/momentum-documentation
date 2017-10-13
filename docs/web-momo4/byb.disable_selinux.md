| 6.5. Disable SELinux |
| [Prev](byb.load_balancing.php)  | Chapter 6. Before You Begin |  [Next](byb.ntp.php) |

## 6.5. Disable SELinux

Red Hat uses the Security-Enhanced Linux (SELinux) security policies. Running Momentum 4 with SELinux enabled is not supported. To disable SELinux, edit `/etc/selinux/config` and set `SELINUX=disabled` then run **`setenforce 0`**   .

| [Prev](byb.load_balancing.php)  | [Up](before_you_begin.php) |  [Next](byb.ntp.php) |
| 6.4. Load Balancing  | [Table of Contents](index.php) |  6.6. Enable Network Time Protocol (NTP) |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)