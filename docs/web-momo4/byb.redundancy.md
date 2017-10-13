| 6.3. Redundancy |
| [Prev](byb.os.php)  | Chapter 6. Before You Begin |  [Next](byb.load_balancing.php) |

## 6.3. Redundancy

Should any nodes fail, you need a [Quorum](glossary.php#gloss.quorum "Quorum") within both your Platform and Analytics servers in order for Momentum to continue functioning properly. For Momentum, you have a quorum when more than 50% of nodes are active. What constitutes a quorum has implications for redundancy. For example, you cannot support redundancy with only two Platform and two Analytics nodes. Should any one node go down, you will not have the 51% required for a quorum. So, for high availability, the most efficient cluster sizes will be odd numbers of three or more Platform nodes *and* three or more Analytics nodes.

| [Prev](byb.os.php)  | [Up](before_you_begin.php) |  [Next](byb.load_balancing.php) |
| 6.2. Operating System  | [Table of Contents](index.php) |  6.4. Load Balancing |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)