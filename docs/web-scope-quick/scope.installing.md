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

| Chapter 2. Installing the Momentum Component |
| [Prev](msc.intro.php)  |   |  [Next](scope.installing.momo3.msc1.2.prior.php) |

## Chapter 2. Installing the Momentum Component

**Table of Contents**

<dl class="toc">

<dt>[2.1\. Momentum 3.x for Message Scope](scope.installing.php#scope.installing.momo3)</dt>

<dt>[2.2\. Installation Prior to Message Scope 1.2](scope.installing.momo3.msc1.2.prior.php)</dt>

<dt>[2.3\. Starting the Services](scope.installing.momo3.msc1.2.services.php)</dt>

</dl>

Installation of Momentum must precede installation of the Message Scope specific elements.

### Note

If you are unfamiliar with Message Systems installation instructions you can run the installer with the `--dry-run` option. This will take you through the installation process without installing the application.

## 2.1. Momentum 3.x for Message Scope

The installation of Momentum for use with Message Scope is identical to the procedure described in the Momentum manual at "[Installation](https://support.messagesystems.com/docs/web-ref/install.linux.php)" with two minor exceptions.

### 2.1.1. Installation of Message Scope 1.2

The difference between a standard installation of Momentum and installing with Message Scope is that you will be asked the following questions when installing the cluster manager (or performing a standalone installation) and when installing the nodes:

`Would you like to enable Message Scope (requires additional license)? (y,n)`

You must answer "yes" to this question.

You must also identify the ingestor nodes.

```
Momentum Receiving/Sending Edition requires the name of one or more Ingestor nodes
containing the Lucene database(s).  This does not need to be the
fully qualified hostname, but must be DNS resolvable and must match what
was entered when the Momentum node(s) were configured.

Please enter a node (hit enter when finished):
```

At this point identify the node or nodes that will be hosting the ingestor. When you have identified all the nodes, press **enter**.

If you plan to track SMPP messages, install the Mobile Momentum module when asked during installation.

Once installation is complete, start the services as described in [Section 2.3, “Starting the Services”](scope.installing.momo3.msc1.2.services.php "2.3. Starting the Services"). The next section only applies to installing Message Scope with Momentum 3.1.6 and earlier.

| [Prev](msc.intro.php)  |   |  [Next](scope.installing.momo3.msc1.2.prior.php) |
| Chapter 1. Overview of Message Scope  | [Table of Contents](index.php) |  2.2. Installation Prior to Message Scope 1.2 |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)