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

| Chapter 44. Sieve Functions |
| [Prev](apis.ec_register_authz_handler2.php)  | Part II. C API |  [Next](apis.sieve_arg_as_number.php) |

## Chapter 44. Sieve Functions

**Table of Contents**

<dl class="toc">

<dt>[sieve_arg_as_number](apis.sieve_arg_as_number.php) — Get the specified argument(s) as a number</dt>

<dt>[sieve_arg_as_numeric](apis.sieve_arg_as_numeric.php) — Obtain a numeric Sieve argument from either a string or a number representation</dt>

<dt>[sieve_arg_as_string](apis.sieve_arg_as_string.php) — Get the specified argument as a string</dt>

<dt>[sieve_arg_delref](apis.sieve_arg_delref.php) — Remove a reference to a Sieve argument</dt>

<dt>[sieve_case_fold2](apis.sieve_case_fold2.php)</dt>

<dt>[sieve_charset_converter_buffer_string](apis.sieve_charset_converter_buffer_string.php) — perform character encoding conversion</dt>

<dt>[sieve_charset_converter_string_string](apis.sieve_charset_converter_string_string.php) — perform character encoding conversion</dt>

<dt>[sieve_compare_compile](apis.sieve_compare_compile.php) — pre-compile matching state for a sieve comparator</dt>

<dt>[sieve_compare_operands](apis.sieve_compare_operands.php) — execute a sieve comparator match</dt>

<dt>[sieve_create_hash](apis.sieve_create_hash.php) — Create a Sieve hash</dt>

<dt>[sieve_create_number](apis.sieve_create_number.php) — Create a Sieve number</dt>

<dt>[sieve_create_string](apis.sieve_create_string.php) — Create a Sieve string</dt>

<dt>[sieve_create_string_list](apis.sieve_create_string_list.php) — Create a Sieve string list</dt>

<dt>[sieve_delref](apis.sieve_delref.php) — Delete a reference to a compiled Sieve script</dt>

<dt>[sieve_error](apis.sieve_error.php) — Create a Sieve error message</dt>

<dt>[sieve_execute](apis.sieve_execute.php) — Prepare and execute a sieve script</dt>

<dt>[sieve_free_seng](apis.sieve_free_seng.php) — Free a prepared sieve engine context</dt>

<dt>[sieve_get_accept_construct](apis.sieve_get_accept_construct.php) — Get an accept_construct from the Sieve engine</dt>

<dt>[sieve_get_arg](apis.sieve_get_arg.php) — Get the argument at the specified index</dt>

<dt>[sieve_get_arg_as_numeric](apis.sieve_get_arg_as_numeric.php) — obtain a numeric sieve argument from either a string or a number representation</dt>

<dt>[sieve_get_arg_as_string](apis.sieve_get_arg_as_string.php) — Return the specified argument as a string</dt>

<dt>[sieve_get_arg_lineno](apis.sieve_get_arg_lineno.php) — Get the current line number</dt>

<dt>[sieve_get_arg_type](apis.sieve_get_arg_type.php) — Return the type of the specified Sieve argument</dt>

<dt>[sieve_get_bag](apis.sieve_get_bag.php) — Get the bag associated with the Sieve engine</dt>

<dt>[sieve_get_ec_message](apis.sieve_get_ec_message.php) — Get the message associated with the Sieve engine</dt>

<dt>[sieve_get_hash_item](apis.sieve_get_hash_item.php) — Get the specified hash item</dt>

<dt>[sieve_get_module_state](apis.sieve_get_module_state.php) — Get the current module state</dt>

<dt>[sieve_get_num_args](apis.sieve_get_num_args.php) — Return the number of Sieve arguments</dt>

<dt>[sieve_get_type_of_arg](apis.sieve_get_type_of_arg.php) — Return the type of a Sieve argument</dt>

<dt>[sieve_get_validation_context](apis.sieve_get_validate_context.php) — Get the validation_context</dt>

<dt>[sieve_hard_error](apis.sieve_hard_error.php) — Report an error in a Sieve extension</dt>

<dt>[sieve_hash_first_item](apis.sieve_hash_first_item.php) — Get the first item from a hash table and add a reference to it</dt>

<dt>[sieve_hash_next_item](apis.sieve_hash_next_item.php) — Get the next item from a hash argument and add a reference to it</dt>

<dt>[sieve_inc_counter](apis.sieve_inc_counter.php) — Increment the specified counter</dt>

<dt>[sieve_next_string_arg](apis.sieve_next_string_arg.php) — Return the next string argument</dt>

<dt>[sieve_parse_args](apis.sieve_parse_args.php) — Parses arguments for a Sieve extension</dt>

<dt>[sieve_parse_file](apis.sieve_parse_file.php) — Parse/compile a Sieve script from a file</dt>

<dt>[sieve_parse_text](apis.sieve_parse_text.php) — parse/compile a sieve script from a memory buffer</dt>

<dt>[sieve_register_action](apis.sieve_register_action.php) — Register a sieve action</dt>

<dt>[sieve_register_extension](apis.sieve_register_extension.php) — Register a Sieve extension</dt>

<dt>[sieve_register_test](apis.sieve_register_test.php) — Register a sieve test</dt>

<dt>[sieve_resume](apis.sieve_resume.php) — Resume the current Sieve action</dt>

<dt>[sieve_return_value_append_string](apis.sieve_return_value_append_string.php) — Append a string to the return value</dt>

<dt>[sieve_return_value_hash](apis.sieve_return_value_hash.php) — Set the return value to a hash</dt>

<dt>[sieve_return_value_number](apis.sieve_return_value_number.php) — Set the return value to a number</dt>

<dt>[sieve_return_value_string](apis.sieve_return_value_string.php) — Set the return value to a string</dt>

<dt>[sieve_return_value_string_list](apis.sieve_return_value_string_list.php) — Set the return value to a string list</dt>

<dt>[sieve_seng_execute](apis.sieve_seng_execute.php) — Execute a prepared sieve script</dt>

<dt>[sieve_seng_get_can_go_async](apis.sieve_seng_get_can_go_async.php) — Determine whether or not the Sieve engine can run asynchronously</dt>

<dt>[sieve_seng_prepare](apis.sieve_seng_prepare.php) — prepare to execute a sieve script</dt>

<dt>[sieve_seng_prepare2](apis.sieve_seng_prepare2.php) — Prepare to execute a Sieve script</dt>

<dt>[sieve_seng_prepare3](apis.sieve_seng_prepare3.php) — prepare to execute a sieve script</dt>

<dt>[sieve_seng_set_can_go_async](apis.sieve_seng_set_can_go_async.php) — Define whether or not the Sieve engine can run asynchronously</dt>

<dt>[sieve_set_error_mode](apis.sieve_set_error_mode.php) — Set the error mode of the Sieve engine</dt>

<dt>[sieve_set_hash_item](apis.sieve_set_hash_item.php) — Set the specified hash item</dt>

<dt>[sieve_set_module_state](apis.sieve_set_module_state.php) — Set the current module state</dt>

<dt>[sieve_set_operation_complete](apis.sieve_set_operation_complete.php) — Set the action of the Sieve engine upon completion</dt>

<dt>[sieve_set_response](apis.sieve_set_response.php) — Set an SMTP response</dt>

<dt>[sieve_set_test_return_value](apis.sieve_set_test_return_value.php) — Set a test result return value</dt>

<dt>[sieve_string_list_append](apis.sieve_string_list_append.php) — Append a value to a string list</dt>

<dt>[sieve_suspend](apis.sieve_suspend.php) — Suspend the current Sieve action</dt>

</dl>

The APIs documented here relate to the [sieve](https://support.messagesystems.com/docs/web-ref/modules.sieve.php) module.

| [Prev](apis.ec_register_authz_handler2.php)  | [Up](pt.apis.php) |  [Next](apis.sieve_arg_as_number.php) |
| ec_register_authz_handler2  | [Table of Contents](index.php) |  sieve_arg_as_number |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)