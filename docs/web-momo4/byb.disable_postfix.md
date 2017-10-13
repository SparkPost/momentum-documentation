| 6.17. Disable Postfix and QPIDD |
| [Prev](byb.vertica_partition.php)  | Chapter 6. Before You Begin |  [Next](byb.analytics_reqs.php) |

## 6.17. Disable Postfix and QPIDD

Disable the Postfix software, which would interfere with Ecelerity's SMTP functionality. Disable qpidd, which can interfere with RabbitMQ. Ignore any errors that appear here.

```
service postfix stop
/sbin/chkconfig postfix off
service qpidd stop
/sbin/chkconfig qpidd off
```

| [Prev](byb.vertica_partition.php)  | [Up](before_you_begin.php) |  [Next](byb.analytics_reqs.php) |
| 6.16. Separate Vertica Partition  | [Table of Contents](index.php) |  6.18. Verifying Analytics Node Requirements |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)