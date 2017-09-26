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

| Chapter 4. Using the API |
| [Prev](rest.sample.templates.php)  |   |   |

## Chapter 4. Using the API

The injection API resides at the endpoint `/v1.0/inject` and accepts a JSON payload describing the injection parameters. A JSON payload will be returned to indicate the outcome of the injection. The API does not support XML input or output template keys. "`to`" and "`from`" default to the value of the "to" and "from" fields (respectively) in the JSON payload, unless overridden via explicit values in the "keys" field. The previous section contains examples of this.

### Note

Prior to Momentum 3.4, the REST injection API would crash Momentum if the HTTP client included an "Expect: 100-continue" header. This occurred after Momentum had sent the "100 continue" response to the HTTP request.

.Net's default HTTP request behavior is to include the "Expect: 100-continue" header, which will trigger this issue. As a workaround, be sure not to use an "Expect: 100-continue" header in the HTTP request.

You can check connectivity to the HTTP_Listener by sending an empty request in the following way:

`shell> curl -X GET http://localhost:8081/v1.0/inject/`

If you connect, no message is output. Failure to connect results in a message such as the following:

`curl: (7) couldn't connect to host`

You can send a test message by editing one of the JSON files shown in [Chapter 3, *Template Files*](rest.sample.templates.php "Chapter 3. Template Files") . Change the `to` address to an accessible mailbox and copy the sample to the current directory on the machine hosting the REST server. Save the file as `sample.json`. You inject your message using curl in the following way:

`shell> curl -X POST  http://localhost:8081/v1.0/inject/  -d @sample.json`

A successful injection should return a JSON object such as the following:

```
{
  "results": [
    {
      "status": "success",
      "mid": "00\/00-02045-5093C9D4",
      "reason": "250 00\/00-02045-5093C9D4"
    }
  ],
  "status": "success"
}
```

### Note

The returned JSON object has been formatted for readability. When accessing the REST injector using curl, specifying `-H 'Content-Type: application/json'` is optional as this is the default content type.

| [Prev](rest.sample.templates.php)  |   |   |
| Chapter 3. Template Files  | [Table of Contents](index.php) |   |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)