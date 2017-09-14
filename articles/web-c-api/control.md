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

| Chapter 14. Control Functions |
| [Prev](apis.initiate_connection_smtp.php)  | Part II. C API |  [Next](apis.cli_conn.php) |

## Chapter 14. Control Functions

**Table of Contents**

<dl class="toc">

<dt>[cli_conn](apis.cli_conn.php) — Establish an ec_console control connection</dt>

<dt>[ec_control_factory_init](apis.ec_control_factory_init.php) — Initialize the Control_Listener subsystem</dt>

<dt>[ec_control_get_command_construct](apis.ec_control_get_command_construct.php) — gets the command_construct for the currently dispatched session</dt>

<dt>[ec_control_register_command](apis.ec_control_register_command.php) — Register a command handler (deprecated)</dt>

<dt>[ec_control_register_command2](apis.ec_control_register_command2.php) — Register a command handler with the system</dt>

<dt>[ec_control_register_command3](apis.ec_control_register_command3.php) — Register a command handler with the system</dt>

<dt>[ec_control_register_command_allsched](apis.ec_control_register_command_allsched.php) — Register a command handler (deprecated)</dt>

<dt>[ec_control_register_type](apis.ec_control_register_type.php) — Register a command handler (deprecated)</dt>

<dt>[ec_control_send_command](apis.ec_control_send_command.php) — Send a command over an ec_console control connection</dt>

<dt>[ec_is_shutting_down](apis.ec_is_shutting_down.php) — Is the ecelerity process shutting down?</dt>

<dt>[ec_shutdown_ex](apis.ec_shutdown_ex.php) — Initiates a shutdown of the ecelerity process</dt>

<dt>[run_command](apis.run_command.php) — deprecated, use run_command2</dt>

<dt>[run_command2](apis.run_command2.php) — Execute the console command referenced by a command_construct</dt>

<dt>[send_command](apis.send_command.php) — Send a command over an ec_console control connection</dt>

</dl>

These functions relate to the Momentum system console commands that are documented here: [System Console Commands Summary](https://support.messagesystems.com/docs/web-ref/console_commands.summary_table.php).

| [Prev](apis.initiate_connection_smtp.php)  | [Up](pt.apis.php) |  [Next](apis.cli_conn.php) |
| initiate_connection_smtp  | [Table of Contents](index.php) |  cli_conn |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)