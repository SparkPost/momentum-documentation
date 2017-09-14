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

| B.3. The `OMNITI-SNMP-MIB.txt` file |
| [Prev](snmp-mib.pergroup.php)  | Appendix B. MIB Files |  [Next](smtp-response-codes.php) |

## B.3. The `OMNITI-SNMP-MIB.txt` file

Find the `OMNITI-SNMP-MIB.txt` file below.

```
OMNITI-SNMP-MIB DEFINITIONS ::= BEGIN

  IMPORTS
  OBJECT-TYPE, NOTIFICATION-TYPE, MODULE-IDENTITY,
  Integer32, Opaque, enterprises, Counter32
  FROM SNMPv2-SMI
  mtaStoredMessages FROM MTA-MIB

  TEXTUAL-CONVENTION, DisplayString, TruthValue
  FROM SNMPv2-TC;

  omniti MODULE-IDENTITY
  LAST-UPDATED "200601090000Z"
  ORGANIZATION "Omniti Computer Consulting"
  CONTACT-INFO
  "email:    ec-support@omniti.com
  "
  DESCRIPTION  "Omniti Enterprise Mib
  "
  ::= { enterprises 19552 }

  ecelerity        OBJECT IDENTIFIER ::= { omniti    1 }
  productInfo      OBJECT IDENTIFIER ::= { ecelerity 1 }
  perDomainMetrics OBJECT IDENTIFIER ::= { ecelerity 2 }
  perGroupMetrics  OBJECT IDENTIFIER ::= { ecelerity 3 }
  ecelerityTraps   OBJECT IDENTIFIER ::= { ecelerity 4 }
  unlinkStats      OBJECT IDENTIFIER ::= { ecelerity 5 }
  threadsStats     OBJECT IDENTIFIER ::= { ecelerity 6 }
  message          OBJECT IDENTIFIER ::= { unlinkStats 3 }
  header           OBJECT IDENTIFIER ::= { unlinkStats 4 }
  body             OBJECT IDENTIFIER ::= { unlinkStats 5 }
  largeMessage     OBJECT IDENTIFIER ::= { unlinkStats 6 }
  overlay          OBJECT IDENTIFIER ::= { unlinkStats 7 }

  productName OBJECT-TYPE
  SYNTAX      DisplayString
  MAX-ACCESS  read-only
  STATUS      current
  DESCRIPTION
  "Product Name"
  ::= { productInfo 1 }

  productVersion OBJECT-TYPE
  SYNTAX      DisplayString
  MAX-ACCESS  read-only
  STATUS      current
  DESCRIPTION
  "Product Version"
  ::= { productInfo 2 }

  productBuildDate OBJECT-TYPE
  SYNTAX      DisplayString
  MAX-ACCESS  read-only
  STATUS      current
  DESCRIPTION
  "Product BuildDate"
  ::= { productInfo 3 }

  activeQueueSize OBJECT-TYPE
  SYNTAX SEQUENCE OF Counter32
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "The table holding group current active queue size."
  ::= {perGroupMetrics 1}

  delayQueueSize OBJECT-TYPE
  SYNTAX SEQUENCE OF Counter32
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "The table holding group current delay queue size."
  ::= {perGroupMetrics 2}

  failedMessageCt OBJECT-TYPE
  SYNTAX SEQUENCE OF Counter32
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "The table holding group current failed message count."
  ::= {perGroupMetrics 3}

  groupName OBJECT-TYPE
  SYNTAX SEQUENCE OF DisplayString
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "The table holding group names."
  ::= {perGroupMetrics 4}

  ecelerityStart NOTIFICATION-TYPE
  STATUS current
  DESCRIPTION
  "Ecelerity Startup"
  ::= { ecelerityTraps 1 }

  ecelerityShutdown NOTIFICATION-TYPE
  STATUS current
  DESCRIPTION
  "Ecelerity Shutdown"
  ::= { ecelerityTraps 2 }

  mailQueueWarning NOTIFICATION-TYPE
  STATUS current
  OBJECTS {mtaStoredMessages.1}
  DESCRIPTION
  "Total Messages Queued Has Reached or Exceed Specified Threshold"
  ::= { ecelerityTraps 3 }

  activeQueueWarning NOTIFICATION-TYPE
  STATUS current
  OBJECTS {activeQueueSize.1}
  DESCRIPTION
  "Total Active Messages Has Reached or Exceed Specified Threshold"
  ::= { ecelerityTraps 4 }

  delayedQueueWarning NOTIFICATION-TYPE
  STATUS current
  OBJECTS {delayQueueSize.1}
  DESCRIPTION
  "Total Delayed Messages Has Reached or Exceed Specified Threshold"
  ::= { ecelerityTraps 5 }

  failedMessageCtWarning NOTIFICATION-TYPE
  STATUS current
  OBJECTS {failedMessageCt.1}
  DESCRIPTION
  "Total Failed Messages Has Reached or Exceed Specified Threshold"
  ::= { ecelerityTraps 6 }

  unlinkBacklog OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "The unlink backlog."
  ::= {unlinkStats 1}

  unlinkBatchBacklog OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "The unlink batch backlog."
  ::= {unlinkStats 2}

  unlinkMessageSubmissions OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink message submissions"
  ::= {message 1}

  unlinkMessageAttempts OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink message attempts"
  ::= {message 2}

  unlinkMessageFailures OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink message failures"
  ::= {message 3}

  unlinkHeaderSubmissions OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink header submissions"
  ::= {header 1}

  unlinkHeaderAttempts OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink header attempts"
  ::= {header 2}

  unlinkHeaderFailures OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink header failures"
  ::= {header 3}

  unlinkBodySubmissions OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink body submissions"
  ::= {body 1}

  unlinkBodyAttempts OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink body attempts"
  ::= {body 2}

  unlinkBodyFailures OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink body failures"
  ::= {body 3}

  unlinkLargeMessageSubmissions OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink largemessage submissions"
  ::= {largeMessage 1}

  unlinkLargeMessageAttempts OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink largemessage attempts"
  ::= {largeMessage 2}

  unlinkLargeMessageFailures OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink largemessage failures"
  ::= {largeMessage 3}

  unlinkOverlaySubmissions OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink overlay submissions"
  ::= {overlay 1}

  unlinkOverlayAttempts OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink overlay attempts"
  ::= {overlay 2}

  unlinkOverlayFailures OBJECT-TYPE
  SYNTAX INTEGER
  MAX-ACCESS read-only
  STATUS current
  DESCRIPTION
  "unlink overlay failures"
  ::= {overlay 3}

  END
```

| [Prev](snmp-mib.pergroup.php)  | [Up](snmp-mib.php) |  [Next](smtp-response-codes.php) |
| B.2. Per-group (binding) Metrics, 1.3.6.1.4.1.19552.1.3  | [Table of Contents](index.php) |  Appendix C. SMTP Response Codes |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)