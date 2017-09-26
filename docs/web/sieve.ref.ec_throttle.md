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

| ec_throttle |
| [Prev](sieve.ref.ec_thread_pool_get_queue_size.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_tolower.php) |

<a name="sieve.ref.ec_throttle"></a>
## Name

ec_throttle_create, ec_throttle_inc, ec_throttle_dec, ec_throttle_check, ec_throttle_tarpit — Named Throttling

## Synopsis

`ec_throttle_create` { *`name`* } { *`messages/seconds`* }

`ec_throttle_inc` { *`name`* }

`ec_throttle_dec` { *`name`* }

`ec_throttle_check` { *`name`* }

`ec_throttle_tarpit` { *`name`* }

<a name="idp15418656"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Allow any number of named throttles to be created within Sieve to handle a variety of throttling situations and permutations that the single inbound throttle cannot.

**ec_throttle_create** creates a throttle named *`name`* with a throttle of X/Y where X is a number of messages and Y is an interval of time in seconds. Note that the throttle will do nothing on its own, but with the other functions, its full functionality can be exploited. This must be called before other functions attempt to access the throttle. The `siv_throttle_cache_size` option determines the maximum number of named throttles that can be created. For more information see [siv_throttle_cache_size](conf.ref.siv_throttle_cache_size.php "siv_throttle_cache_size"). A throttle is removed from the cache when either of the following occur:

*   The throttle cache is full and another **ec_throttle_create** request is issued. The least recently used throttle will be removed from the cache in this case.

*   The time interval specified on **ec_throttle_create** is exceeded by one second.

In order to ensure correct thottling behavior, once a throttle has been removed from the cache, a new **ec_throttle_create** must be issued for the removed throttle name before using other throttle functions on it. Issuing an **ec_throttle_create** on the name of a throttle that is already in the throttle cache is a null operation.

**ec_throttle_inc** indicates to the specified throttle that it has received a message to be counted by its mechanisms. This will not stop more messages than desired from passing into the system. This should be called before **ec_throttle_check**.

**ec_throttle_dec** indicates to the specified throttle that it should remove a message from being counted by its mechanisms. This is intended to allow a message which is added via **ec_throttle_inc** to later be removed.

**ec_throttle_check** checks to see if the specified throttle currently exceeds its quota. If it does so, then **ec_throttle_check** returns true, otherwise, it returns false. This does not work when nested with the :is command. It needs to be assigned to a Sieve variable and then checked in a statement such as:

```
$var = ec_throttle_check "foo";
if ec_test :is $var "true" {
...
```

**ec_throttle_tarpit** increments the named throttle and returns if the resulting throttle quota has not been exceeded. Otherwise, **ec_throttle_tarpit** waits (tarpits) for a length of time such that the throttle will return to a state where it is once again permissible to send a message through.

<a name="example.ec_throttle_tarpit"></a>

**Example 15.98. Emulating Inbound_Throttle_Messages**

```
...

ec_throttle_create "foo" "30/1";
ec_throttle_tarpit "foo";

...
```

| [Prev](sieve.ref.ec_thread_pool_get_queue_size.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_tolower.php) |
| ec_thread_pool_get_queue_size  | [Table of Contents](index.php) |  ec_tolower |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)