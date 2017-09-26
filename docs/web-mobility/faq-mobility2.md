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

| 6.2. Domains |
| [Prev](faq.php)  | Chapter 6. FAQ |  [Next](p.mm7.php) |

## 6.2. Domains

<a name="idp1442224"></a>

<dl>

<dt>6.2.1\. [I want to view the status of one of the domains associated with the mobility module. How can I do this?](faq-mobility2.php#faq-queues)</dt>

<dt>6.2.2\. [Is it possible to add new domain stanzas without restarting Momentum?](faq-mobility2.php#faq-domain-stanza)</dt>

</dl>

| <a name="faq-queues"></a><a name="idp31024"></a>

**6.2.1.**

 | 

I want to view the status of one of the domains associated with the mobility module. How can I do this?

 |
|  | 

The easiest way to do this is to log in to the web console and from the dashboard choose `Domains` from the Statistical Breakdown by drop-down list box. This shows the active and delayed queues for all domains. Next, click the specific domain you are interested in. You can also choose to view Transfailures or Bounces by selecting the appropriate tab. For more information see [The Dashboard](https://support.messagesystems.com/docs/web-ref/web3.dashboard.php). Also, from the command line you can go to the system console and issue the command, **showqueue *`domain_name.com`***                    .

 |
| <a name="faq-domain-stanza"></a><a name="idp160912"></a>

**6.2.2.**

 | 

Is it possible to add new domain stanzas without restarting Momentum?

 |
|  | 

Yes. The easiest way to do this is by using the web UI. For more information see [Using the Web Console](https://support.messagesystems.com/docs/web-ref/web3.php).

 |

| [Prev](faq.php)  | [Up](faq.php) |  [Next](p.mm7.php) |
| Chapter 6. FAQ  | [Table of Contents](index.php) |  Part II. Mobile Momentum MMS |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)