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

| ec_shared_throttle |
| [Prev](sieve.ref.ec_set_routing_gateway.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_spool_space.php) |

<a name="sieve.ref.ec_shared_throttle"></a>
## Name

ec_shared_throttle_create, ec_shared_throttle_inc, ec_shared_throttle_check, ec_shared_throttle_tarpit — Shared Named Throttling

## Synopsis

`ec_shared_throttle_create` { *`name`* } { *`messages/seconds`* } [ *`epsilon`* ]

`ec_shared_throttle_inc` { *`name`* }

`ec_shared_throttle_check` { *`name`* }

`ec_shared_throttle_tarpit` { *`name`* }

<a name="idp15298304"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Allow any number of shared named throttles to be created within Sieve to handle a variety of throttling situations and permutations that the single inbound throttle cannot.

**ec_shared_throttle_create** creates a throttle named name with a throttle of X/Y where X is a number of messages and Y is an interval of time in seconds. Note that the throttle will do nothing on its own, but with the other functions, its full functionality can be exploited. This must be called before other functions attempt to access the throttle.

Epsilon is a positive floating point number strictly less than one that specifies how much of a throttle can be consumed in one iteration of information passage around the cluster. It defaults to `0.95` and is unlikely to need changing. The higher it is, the faster the throttle can converge, but as you increase it you risk a single machine hogging the whole throttle.

**ec_shared_throttle_inc** indicates to the specified throttle that it has received a message to be counted by its mechanisms. This will not stop more messages than desired from passing into the system. This should be called before **ec_shared_throttle_check**.

**ec_shared_throttle_check** checks to see if the specified throttle currently exceeds its quota. If it does so, then **ec_shared_throttle_check** returns true, otherwise, it returns false. This does not work when nested with the :is command. It needs to be assigned to a Sieve variable and then checked in a statement such as: $var = ec_shared_throttle_check "foo" if **ec_test** :is $var "true" {

**ec_shared_throttle_tarpit** increments the named throttle, and tarpits for length of time such that the throttle will return to a state where it is once again permissable to send a message through.

### Note

The cluster module must be configured with the shared named throttle parameters as defined here: [Section 7.5.1.7, “Shared named throttles”](cluster.replication.php#cluster.replication.named_throttles "7.5.1.7. Shared named throttles")

<a name="example.ec_shared_throttle-tarpit"></a>

**Example 15.94. Emulating Inbound_Throttle_Messages**

```
...

ec_shared_throttle_create "foo" "30/1";
ec_shared_throttle_tarpit "foo";

...
```

| [Prev](sieve.ref.ec_set_routing_gateway.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_spool_space.php) |
| ec_set_routing_gateway  | [Table of Contents](index.php) |  ec_spool_space |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)