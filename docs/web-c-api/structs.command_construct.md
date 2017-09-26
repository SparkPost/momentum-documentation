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

| 68.8. command_construct |
| [Prev](structs.cidrnode_ipv4.php)  | Chapter 68. Structs |  [Next](structs.connection.php) |

## 68.8. command_construct

This struct is defined as follows:

```
struct _command_construct
{
  unsigned short type;
  unsigned short command_len;
  unsigned short mode;
  string command;
  struct ec_auth_info auth_info;
  struct ec_authz_info authz_info;
  unsigned short tus[2];
  char respheader[6];
  string response;
  unsigned int responseoff;
  unsigned writing_header:1;
  unsigned xml:1;
  unsigned _spare:30;

  char *personality;

  int argc;
  const char **argv;
  const char **argv_offsets;

  accept_construct *ac;
  ec_config_header *transaction;

  void *async_ptr;
  ec_control_function2 async_resume_func;
};
```

To use this struct, include the file `control.h`.

### 68.8.1. See Also

[run_command2](apis.run_command2.php "run_command2") and [Console Commands](https://support.messagesystems.com/docs/web-ref/console_commands.summary_table.php)

| [Prev](structs.cidrnode_ipv4.php)  | [Up](structs.php) |  [Next](structs.connection.php) |
| 68.7. cidrnode_ipv4  | [Table of Contents](index.php) |  68.9. connection |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)