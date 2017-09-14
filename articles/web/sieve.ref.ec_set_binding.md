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

| ec_set_binding |
| [Prev](sieve.ref.ec_round.php)  | Chapter 15. Sieve++ Function Reference |  [Next](sieve.ref.ec_set_routing_gateway.php) |

<a name="sieve.ref.ec_set_binding"></a>
## Name

ec_set_binding, ec_set_binding_group — Assign a message to a MultiVIP© binding

## Synopsis

`ec_set_binding` [ *`binding`* ]

`ec_set_binding_group` [ *`binding_group`* ]

<a name="idp15222368"></a>
## Description

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Configuration Change. ** In version 2.2 this feature requires that the sievelib module be loaded.

`ec_set_binding` assigns the current message to the *`binding`* you specify. If the binding does not exist, then an error message will be logged to the paniclog, and the current binding assignment for the message will not be changed.

### Note

If you assign messages to bindings, it is important to ensure that *all* messages are assigned to bindings, or to make sure that the fallback binding (otherwise known as "default") does what you want. Good scripting practice would be to ensure that there is always an `else` clause or some other way of ensuring that all messages are always dealt with in some way. For example, you could create a variable at the top of your script with the most general binding, then `if` blocks to assign a message to a more specific binding if it matches. At the end of the script, assuming no `if` condition applies, the `else` clause would assign the message to the most general binding.

You can use this function to set the binding to the `default` binding. For more information see [the section called “The "default" Binding”](conf.ref.binding.php#conf.ref.binding.default "The "default" Binding").

`ec_set_binding_group` assigns the current message to a randomly selected binding that belongs to the *`binding_group`* you specify. The selection algorithm will not consider bindings that are currently unplumbed.

<a name="example.ec_set_binding"></a>

**Example 15.91. ec_set_binding example**

In the following script, mail for `example.com` is routed out of a binding named `example`, which is set to send mail out via 10.0.0.1\. All other mail is routed via the default binding. The `ecelerity.conf` for this setup looks something like the following:

```
Binding "example" {
  Bind_Address = 10.0.0.1
}

Module generic/sievelib sievelib {}

Validate validate/sieve sieve {
  set_binding_phase1 = "/path/to/myscript.siv"
}
```

and the contents of `myscript.siv`:

```
if envelope :domain :is "to" "example.com" {
  ec_set_binding "example";
}
```

<a name="example.ec_set_binding_group"></a>

**Example 15.92. ec_set_binding_group example**

In the following script, mail for `example.com` is routed out of one of the bindings in the binding group named `example`, which is set to send mail out via the range of IPs from 10.0.0.1 to 10.0.0.5\. All other mail is routed via the default binding. The `ecelerity.conf` for this setup looks something like the following:

```
Binding_Group example {
  Binding ex1 {
    Bind_Address = 10.0.0.1
  }
  Binding ex2 {
    Bind_Address = 10.0.0.2
  }
  Binding ex3 {
    Bind_Address = 10.0.0.3
  }
  Binding ex4 {
    Bind_Address = 10.0.0.4
  }
  Binding ex5 {
    Bind_Address = 10.0.0.5
  }
}

Module generic/sievelib sievelib {}

Validate validate/sieve sieve {
  set_binding_phase1 = "/path/to/myscript.siv"
}
```

and the contents of `myscript.siv`:

```
if envelope :domain :is "to" "example.com" {
  ec_set_binding_group "example";
}
```

<a name="idp15249488"></a>
## See Also

[Section 4.4, “MultiVIP© Interfaces”](operations.multivip.php "4.4. MultiVIP© Interfaces"), [Section 14.46, “regex_binding2 – Regular Expression Based Bindings (II)”](modules.regex_binding2.php "14.46. regex_binding2 – Regular Expression Based Bindings (II)").

| [Prev](sieve.ref.ec_round.php)  | [Up](sieve.ref.php) |  [Next](sieve.ref.ec_set_routing_gateway.php) |
| ec_round  | [Table of Contents](index.php) |  ec_set_routing_gateway |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)