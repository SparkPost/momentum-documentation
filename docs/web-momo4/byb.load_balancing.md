| 6.4. Load Balancing |
| [Prev](byb.redundancy.php)  | Chapter 6. Before You Begin |  [Next](byb.disable_selinux.php) |

## 6.4. Load Balancing

The nginx proxy server embedded in Momentum 4 provides load balancing out of the box; however, it does not provide zero downtime for API injection if the analytics node you use to inject goes dark. Therefore, in a multi-node environment, we recommend adding a load balancer in front of the analytics node to provide load balancing and failover (as REST injection is done on analytics nodes). Also, a load balancer that is able to do TCP load balancing (not just http) can also be used for SMTP load balancing.

| [Prev](byb.redundancy.php)  | [Up](before_you_begin.php) |  [Next](byb.disable_selinux.php) |
| 6.3. Redundancy  | [Table of Contents](index.php) |  6.5. Disable SELinux |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)