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

| Chapter 3. Template Files |
| [Prev](rest.http_listener.php)  |   |  [Next](rest.using.api.php) |

## Chapter 3. Template Files

The following conditions apply to template files used with the injection API:

*   The template must be a valid 7-bit RFC 821 compatible message blob.

*   The template engine does not automatically handle MIME encoding when performing substitution. Neither header encoding nor body transfer encoding will be performed. The value data is substituted via straight text substitution; the value provided to the engine must already be encoded appropriately if encoding is required.

*   The template engine normalizes the line-endings to canonical CRLF.

*   Substitutions are denoted by one of the two following sequences:

    ```
    <%= :key %>
    [%= :key %]
    ```

    Keys in substitutions are case in-sensitive.

### Note

The REST API does not do 'dot-stuffing'. The JSON object should already be dot-stuffed and there should be no leading dot in any line.

Sample template files that can be used with the REST injector are as follows.

The following is an example of a simple template where all values are hard coded.

<a name="rest.templates.simple"></a>

**Example 3.1. Simple template**

```
{
  "template": "From: tester@mgr.example.org\nTo: someone@example.com\nSubject:
  Simple content\n\nThis is your injected message",
  "recipients": [
    {
      "to": "someone@example.com",
      "from": "tester@mgr.example.com"
    }
  ]
}
```

The following example uses macro substitution and shows an example template that could be used for a subscription follow-up.

<a name="rest.templates.followup"></a>

**Example 3.2. Subscription follow-up example**

```
{
  "template": "From: <%=:from%>\nTo: <%=:to%>\nSubject: <%=:subject%>\n\nYou
  signed up on <%=:signup%>",
  "recipients": [
    {
      "to": "john@example.com",
      "from": "tester@mgr.example.org",
      "keys": {
        "subject": "personalized subject",
        "signup": "1st October"
      }
    }
  ]
}
```

The following example lists multiple recipients and also makes use of validation context variables.

<a name="rest.templates.multiple"></a>

**Example 3.3. Multiple recipients example**

```
{
  "template": "From: <%=:from%>\nTo: <%=:to%>\nSubject:
  <%=:subject%>\n\nDelivery Date: <%=:signup%>",
  "recipients": [
    {
      "to": "john@example.com",
      "from": "another.user@example.com",
      "vctx": {
        "key": "value",
        "otherkey": "othervalue"
      },
      "keys": {
        "subject": "personalized subject",
        "signup": "1st October"
      }
    },
    {
      "to": "perm@fail.com",
      "from": "a.different.user@example.com",
      "vctx": {
        "key": "value",
        "otherkey": "thisvalue"
      },
      "keys": {
        "subject": "personalized different subject",
        "signup": "2nd October"
      }
    }
  ]
}
```

Validation context variables defined in this way are accessible to policy scripts.

| [Prev](rest.http_listener.php)  |   |  [Next](rest.using.api.php) |
| 2.2. HTTP_Listener  | [Table of Contents](index.php) |  Chapter 4. Using the API |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)