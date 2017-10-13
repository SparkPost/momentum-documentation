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

| Chapter 24. Configuring Multiple Event Loops |
| [Prev](using_dkim.validation.php)  | Part III. Configuring Momentum |  [Next](outbound_mail.php) |

## Chapter 24. Configuring Multiple Event Loops

To fully utilize the capacity of multi-core CPU architectures, you can configure Momentum for multiple event loops. This configuration enables Momentum to scale so that the overall performance is not limited by a single event-scheduler thread. Instead, a pool of event scheduler instances is created, running in separate threads. Tasks that are performed in the event scheduler thread will now be farmed out to this pool of scheduler instances. These tasks include message reception, message delivery, mail queue maintenance, DNS lookup, and event operations performed by the various modules.

The platforms that support multiple event loops are Red Hat Enterprise Linux 5 (x86_64) and Red Hat Enterprise Linux 6 (x86_64).

### Note

Configuring Momentum for multi-core CPUs requires an additional Supercharger license. This license specifies a maximum number of event loops. When configuring an event loop, the `concurrency` option cannot exceed the licensed number of event loops.

To enable the multiple event loop feature for SMTP and HTTP injection, add the following options to your [`ecelerity.conf`](conf.ref.ecelerity.conf.php "15.6. ecelerity.conf File") file:

1.  Define a new [eventloop](config.ref.eventloop.php "eventloop") pool called "events_pool" and set the concurrency (i.e. number of event loops) to 75% of the number of available CPUs.

    eventloop "events_pool" {
      concurrency = *`75%_of_available_CPUs`*
    }
2.  Associate email delivery with the new eventloop pool by assigning the eventloop name to [delivery_pool](config.ref.delivery_pool.php "delivery_pool").

    `delivery_pool = "events_pool"`
3.  Associate mail queues, DNS lookup, and module events with the new eventloop pool by assigning the eventloop name to [maintainer_pool](config.ref.maintainer_pool.php "maintainer_pool").

    `maintainer_pool = "events_pool"`
4.  Associate the SMTP listener with the new eventloop pool by assigning the eventloop name to [event_loop](config.ref.event_loop.php "event_loop") inside the listener scope.

    ```
    ESMTP_Listener {
      event_loop = "events_pool"
      Listen ":25" {
        Concurrency = 1
      }
      ...
    }
    ```

5.  Associate the HTTP listener with the new eventloop pool by assigning the eventloop name to [event_loop](config.ref.event_loop.php "event_loop") inside the listener scope.

    ```
    HTTP_Listener {
      event_loop = "events_pool"
       ...
    }
    ```

After you edit your ecelerity.conf file, you must restart the ecelerity process using **/opt/msys/ecelerity/bin/ec_ctl** — issuing the ec_console command **config reload**        will not suffice. See [ec_ctl](executable.ec_ctl.php "ec_ctl").

| [Prev](using_dkim.validation.php)  | [Up](p.configuration.php) |  [Next](outbound_mail.php) |
| 23.2. DKIM Validation  | [Table of Contents](index.php) |  Chapter 25. Configuring Outbound Mail Delivery |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)