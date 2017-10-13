## Chapter 4. Licensed Features

**Table of Contents**

<dl class="toc">

<dt>[4.1\. Message Generation](licensed_features.php#licensed_features.message.generation)</dt>

<dt>[4.2\. Adaptive Delivery](licensed_features.adaptive.delivery.php)</dt>

<dt>[4.3\. Supercharger](licensed_features.supercharger.php)</dt>

</dl>

## 4.1. Message Generation

Message Generation enables you to inject your recipient list, template, and message content separately, using the HTTP protocol. It takes these components of a transmission and generates personalized messages for each recipient. The generation and transmission of messages is triggered by the REST API interface.

You must choose to enable Message Generation during installation. It can be configured to run on a stand-alone or cluster installation. In a cluster configuration, it is not necessary for all nodes to load the message generation module, nor is it necessary for those that do load that module to participate in message generation. For example, you may want to have a node (such as the Manager) solely for establishing a [quorum](glossary.php#gloss.quorum "Quorum"), but not for generating messages.

| [Prev](roles_behaviors.php)  | [Up](p.intro.php) |  [Next](licensed_features.adaptive.delivery.php) |
| Chapter 3. Roles and Behaviors  | [Table of Contents](index.php) |  4.2. Adaptive Delivery |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)