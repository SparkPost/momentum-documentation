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

| 14.46. regex_binding2 – Regular Expression Based Bindings (II) |
| [Prev](modules.regex_binding.php)  | Chapter 14. Modules Reference |  [Next](modules.response_transcode.php) |

## 14.46. regex_binding2 – Regular Expression Based Bindings (II)

<a class="indexterm" name="idp12612480"></a>
### Note

The regex binding modules are not available in Momentum version 3.0\. Use Sieve or scriptlets instead.

Momentum allows you to bind individual messages to MultiVIP© addresses based on arbitrary envelope or header context via the `regex_binding2` module. This facility is particularly useful to ESPs and ASPs who service multiple customers through a single Momentum instance.

The `regex_binding2` module is a replacement for the `regex_binding` module, which allows for a more expressive syntax for making MultiVIP© binding decisions.

### 14.46.1. Basic Configuration

The `regex_binding2` module is loaded with the standard module syntax of

```
Validate validate/regex_binding2 regex_binding2 {
    # ...
}
```

Inside the module stanza is a list of assignments that follow the form

`bindingName[,bindingName...] = "matchField =~ 'regex' [(AND|OR)] matchField2 =~ 'regex2'"`

For example, to bind to `ExampleBinding` messages whose envelope sender is in the `example.com` domain, you can use the following syntax:

`ExampleBinding = "mailfrom =~ '@example.com'"`
### 14.46.2. Binding Groups

You can also cause a message to be bound to one of a group of bindings (in round-robin fashion) by specifying a group name or a comma-separated list of bindings. For example, to assign messages from the `example.com` domain to either ExampleBinding1 or ExampleBinding2, you can use the following syntax:

`ExampleBinding1,ExampleBinding2 = "mailfrom =~ '@example\.com'"`

If you specified a `Binding_Group` name in the Binding declarations for ExampleBinding1 and ExampleBinding2, you can achieve the same result using:

`group:ExampleGroup = "mailfrom =~ '@example\.com'"`

You can also combine rules with boolean logic. For example, to match messages from `example.com` or `example.org`, you would use the following syntax:

`ExampleBinding1,ExampleBinding2 = "mailfrom =~ '@example.com' OR mailfrom =~ '@example\.org'"`

Similarly, if you want to match messages from `example.org` to `omniti.com`, you should use this syntax:

`ExampleBinding1,ExampleBinding2 = "mailfrom =~ '@example\.com' AND rcptto =~ '@omniti\.com'"`

These statements can be combined arbitrarly, with parentheses used for precedence:

`ExampleBinding1,ExampleBinding2 = "mailfrom =~ '@example\.com' AND (rcptto =~ '@omniti\.com' OR rcptto =~'omniti\.net')"`
### 14.46.3. Message Fields

In addition to the envelope sender, you can use the following matchable fields:

<dl class="variablelist">

<dt>mailfrom</dt>

<dd>

The envelope sender of the message.

</dd>

<dt>rcptto</dt>

<dd>

The envelope recipient of the message.

</dd>

<dt>header:*name*</dt>

<dd>

The value of the header *name*, i.e. `header:Subject`

</dd>

<dt>body</dt>

<dd>

The entire body of the message.

</dd>

<dt>recv_ip</dt>

<dd>

The IP address upon which the message was received by Momentum.

</dd>

<dt>recv_port</dt>

<dd>

The TCP/IP port upon which the message was received by Momentum.

</dd>

<dt>sender_ip</dt>

<dd>

The IP address from whom the message was received by Momentum.

</dd>

</dl>

### 14.46.4. Matching Syntax

The `regex_binding2` module supports full Perl-compatible regular expressions for matching, as straight equivalence. Matches are always performed with case-sensitivity, unless you use in-pattern case-insensitivity modifiers. A pattern can be made to match as case-insensitive by prefixing it with (?i) in the pattern itself.

### 14.46.5. Precedence and Fall-Thru

`regex_binding2` assignments are always performed after the `MatchDomain` assignments within bindings, and thus will take precedence. They are processed in the order that they appear, so that if a message successfully matches two rule lines, it will honor the assignment from the first matching rule. Messages which do not match any bindings will be assigned to the default binding. Thus, if the main configuration does not have a `Bind_Address` statement, an unbound message will be sent out of a random interface. If you want to specify a default binding you should either use `Bind_Address` statement in the main configuration body or use a fall-thru rule at the end of your `regex_binding2` config. An example of the latter is shown here:

```
Binding ExampleComBinding {
    Bind_Address = 10.0.0.1
    EHLO_Hostname = example.com
}

Binding ExampleOrgBinding {
    Bind_Address = 10.0.0.2
    EHLO_Hostname = example.org
}

Binding DefaultBinding {
    Bind_Address = 10.0.0.3
}

Validate validate/regex_binding2  regex_binding2 {
    ExampleComBinding = "rcptto =~ '@example\.com'"
    ExampleOrgBinding = "rcptto =~ '@example\.org'"
    DefaultBinding    = "rcptto =~ '.*'"
}
```

### 14.46.6. Example: Binding based on header fields

If your generator marks up messages with a special per-customer or even per-campaign identifier, you could use the following syntax to assign bindings. In the sample below, messages with the header `X-Customer: example.com` are sent out via the ExampleComBinding, messages with the header `X-Customer: example.org` are sent over the ExampleOrgBinding, and any others go out over the DefaultBinding.

```
Binding ExampleComBinding {
    Bind_Address = 10.0.0.1
    EHLO_Hostname = example.com
}

Binding ExampleOrgBinding {
    Bind_Address = 10.0.0.2
    EHLO_Hostname = example.org
}

Binding DefaultBinding {
    Bind_Address = 10.0.0.3
}

Validate validate/regex_binding2  regex_binding2 {
    ExampleComBinding = "header:X-Customer == 'example.com'"
    ExampleOrgBinding = "header:X-Customer == 'example.org'"
    DefaultBinding    = "mailfrom =~ '.*'"
}
```

Notice above that we use the exact-match operator `==` instead of the regular-expression matching operator `=~`. When performing exact-matching tasks, `==` is more efficient than `=~`.

| [Prev](modules.regex_binding.php)  | [Up](modules.php) |  [Next](modules.response_transcode.php) |
| 14.45. regex_binding – Regular Expression Based Bindings  | [Table of Contents](index.php) |  14.47. response_transcode – Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)