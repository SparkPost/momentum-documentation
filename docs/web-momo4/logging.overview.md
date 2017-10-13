| Chapter 32. Logging Overview |
| [Prev](p.logs.php)  | Part IV. Logging |  [Next](logging.configuration.php) |

## Chapter 32. Logging Overview

**Table of Contents**

<dl class="toc">

<dt>[32.1\. Log Files](logging.overview.php#logging.overview.files)</dt>

<dt>[32.2\. Logging Configuration](logging.configuration.php)</dt>

</dl>

Momentum’s logging capabilities are implemented by various modules. They are intended to maintain auditing and a history of events, providing information such as system errors, message disposition, and engagement tracking. The logging subsystems range from transactional logs on a server node to replicated server node logs, aggregated on the designated log aggregator.

## 32.1. Log Files

The following are Momentum's logging modules. For additional information about use and configuration, follow each link :

*   [adaptive](modules.adaptive.php#modules.adaptive.options.logging "71.3.8. Logging") - logs adaptive delivery events

*   [as_logger](modules.as_logger.php "71.7. as_logger – Audit Series Logger") - journals replicated audit series to disk at a configurable, periodic interval

*   [bounce_logger](modules.bounce_logger.php "71.13. bounce_logger – Momentum-Style Bounce Logging") - provides bounce data and bounce classification

*   [chunk_logger](modules.chunk_logger.php "71.15. chunk_logger Module") - provides a safe interface for logging asynchronously from Lua, C, and C++

*   [custom_logger](modules.custom_logger.php "71.25. custom_logger – User-defined Logging") - enables you to create custom logs defining your own logging fields and delimiters

*   [ec_logger](modules.ec_logger.php "71.30. EC_logger – Momentum-Style Logging") - provides message disposition status, tracking messages from generation through delivery

*   [event_hydrant](modules.event_hydrant.php "71.33. event_hydrant – Message Tracking") - provides message disposition status, including message generation, message reception, message delivery, and engagement tracking

*   [exim_logger](modules.exim_logger.php "71.34. exim_logger – Exim Logging") - supports logging in the same style as the Open Source MTA Exim (http://www.exim.org)

*   [fbl](modules.fbl.php "71.35. fbl - Feedback Loop") - records all abuse messages from feedback loop services offered by many ISPs

*   [http_logger](modules.http_logger.php "71.37. http_logger – HTTP Requests and Responses") - logs HTTP requests and responses made by the httpsrv module

*   [ilf_logger](modules.ilf_logger.php "71.40. ilf_logger – Incremental License Fee Logging") - provides an easy way to comply with the usage reporting requirements contained in the agreement with Message Systems

*   [postfix_logger](modules.postfix_logger.php "71.56. postfix_logger – Postfix Logging") - supports logging in the same style as the Open Source MTA Postfix (http://www.postfix.org)

*   [sendmail_logger](modules.sendmail_logger.php "71.63. sendmail_logger – Sendmail Logging") - supports logging in the same style as the Open Source MTA Sendmail (http://www.sendmail.org)

Momentum can generate logs in two formats:

*   text - entries vary based on the type of log. For the log formats, see [Chapter 35, *Log Formats*](log_formats.php "Chapter 35. Log Formats") .

*   [jlog](modules.jlog.php "71.43. jlog – jlog-Formatted Logging") - binary, consumable logs, intended to be consumed by an application. These logs will continue to be saved until a consumer reads them.

| [Prev](p.logs.php)  | [Up](p.logs.php) |  [Next](logging.configuration.php) |
| Part IV. Logging  | [Table of Contents](index.php) |  32.2. Logging Configuration |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)