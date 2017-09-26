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

| API_EXPORT |
| [Prev](extending.C.ref.timed-events.php)  | Chapter 17. C API Reference |  [Next](extending.C.genref.cli_conn.php) |

<a name="extending.C.genref.API_EXPORT"></a>
## Name

API_EXPORT — releases resources held in an event_io_state structure.

## Synopsis

`#include "/misc/wc_match.h"`

| `**API_EXPORT**(` | <var class="pdparam"></var>`)`; |   |

`void <var class="pdparam"></var>`;<a name="idp16856432"></a>
## Description

### Note

This reference page was automatically generated from functions found in the header files in the development branch. The function described here may not exist in generally available versions of Momentum, and may change in behavior when it is generally available. Consult your vendor for definitive advice on the use of this function.

releases resources held in an event_io_state structure.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.21.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

Sets a spool context to disable the addition of trace headers.

Sets a spool context to always regenerated message ids on import.

set the maximum retention time for a spool context.

removes the message from the spool.

removes meta data for the message from the IO layer.

Fails a message and removes it from the system.

async close will attempt to asynchronously close the socket/fd

Schedule an event from any thread, and optionally dispatch the callback.

renders an RFC3464 report block into the provided string.

injects and enqueues and internally generated message.

injects and enqueues an internally generated message.

creates an RFC 3464 MDN and enqueues

creates an MDN and enqueues.

decides if we should generate an MDN for a given message.

Parse the remtoe capabilities from the EHLO response.

Remove an argument from an smtp_client_args structure.

Push the SMTP state for the current connection to another state.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

Frees a cloned set of headers.

Unserialize an ec_sockaddr structure.

Serialize an ec_sockaddr structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

Add a set of requirements to an interpolation context.

Register a macro expansion function.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

Pre-calculates delivery parameters for a given domain.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

re-enqueues a message after a delivery attempt.

Adds a message to the lookuptable, and calls dns_get_MXs if the domain wasn't in the lookuptable already.

logs a rejection.

logs a successful delivery.

logs a permanent delivery failure.

logs a transient delivery failure.

logs a delivery attempt.

logs a reception.

records the fact that ecelerity rejected an incoming message.

records the fact that ecelerity delivered a message.

records the fact that ecelerity was permanently unable to deliver a message.

records the fact that ecelerity was temporarily unable to delivery a message.

records the fact that ecelerity attempted to delivery a message.

records the fact that the message was received at a particular time.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

decrements the refcount on the io_object, and closes and frees it if the refcount reaches 0

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.21.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_log_reception() instead.

**Deprecated**

use ec_log_attempt() instead.

**Deprecated**

use ec_log_transient_failure() instead.

**Deprecated**

use ec_log_permanent_failure() instead.

**Deprecated**

use ec_log_delivery() instead.

**Deprecated**

use ec_log_rejection() instead.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

**Deprecated**

use ec_mailq_message_requeue() instead.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

The macro string will be matched using a literal string comparison, unless the macro string contains the character *, which will match any sequence of 1 or more characters terminated by the character that follows it.

so "foo" will be a literal string match, but "foo:*" will match "%{foo:bar}" and "%{foo:baz}" but not "%{foo:}".

**Parameters**

<dl class="variablelist">

<dt>macro</dt>

<dd>

the macro to be matched

</dd>

<dt>func</dt>

<dd>

the function to perform the expansion

</dd>

<dt>flags</dt>

<dd>

indicates function capabilities.

</dd>

</dl>

If a macro is registered as a recursive macro, then it will be called again on its own output continually for as long as the output matches its own macro definition. The number of times that this happens is limited by the expansion infrastructure to a reasonable number to avoid infinitely recursing.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

A macro implementation would use this to hint about what kind of environment it would need for expansion of the string at runtime.

The potential requirements can be discovered using the ec_interpolate_calc_deps() API function.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

The SMTP state is updated whenever the current SMTP state wishes to chanve the state machine.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

the delivery construct for the connection in question

</dd>

<dt>connh</dt>

<dd>

the connection_handle for the connection in question

</dd>

<dt>state</dt>

<dd>

the next SMTP state, NULL to use the default value

</dd>

<dt>now</dt>

<dd>

the current time value

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

the args structure to remove the argument from

</dd>

<dt>extension</dt>

<dd>

the name of the extension argument to remove

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This is primarly a helper for clients who want to write/modify their own SMTP client state machine.

**Parameters**

<dl class="variablelist">

<dt>int]</dt>

<dd>

the delivery construct for the current session

</dd>

<dt>int]</dt>

<dd>

the current connection

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Ensures that an internally generated message is correctly swapped, has a binding assigned, is logged as a reception and then enqueues the message for delivery. This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

identical to ec_internal_inject() except that ec_log_reception is not called.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

ec_internal_inject()

Ensures that an internally generated message is correctly swapped, has a binding assigned.

If flags includeS EC_INJECT_SIGN then it will call out to message signing hooks.

If flags includes EC_INJECT_LOG then it will log a reception.

It will then enqueue the message for delivery.

This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_soft_bounce_process() instead.

**Deprecated**

use ec_generate_soft_bounce() instead.

**Deprecated**

use ec_internal_inject() instead.

**Deprecated**

use ec_internal_inject_no_log() instead.

This adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

Removes the message from the spool, logs a permanent failure and frees the message. After calling this function, you should assume that the message has been freed and should not be touched.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_swap_remove_meta() instead.

**Deprecated**

use ec_swap_remove() instead.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

**Deprecated**

in Ecelerity 2.2; it is no longer required.

**Deprecated**

use post_validate_data_spool_each_rcpt() instead.

releases resources held in an event_io_state structure.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

**Deprecated**

use ec_mailq_message_requeue() instead.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

Sets a spool context to disable the addition of trace headers.

Sets a spool context to always regenerated message ids on import.

set the maximum retention time for a spool context.

removes the message from the spool.

removes meta data for the message from the IO layer.

Fails a message and removes it from the system.

async close will attempt to asynchronously close the socket/fd

Schedule an event from any thread, and optionally dispatch the callback.

renders an RFC3464 report block into the provided string.

injects and enqueues and internally generated message.

injects and enqueues an internally generated message.

creates an RFC 3464 MDN and enqueues

creates an MDN and enqueues.

decides if we should generate an MDN for a given message.

Parse the remtoe capabilities from the EHLO response.

Remove an argument from an smtp_client_args structure.

Push the SMTP state for the current connection to another state.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

Frees a cloned set of headers.

Unserialize an ec_sockaddr structure.

Serialize an ec_sockaddr structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

Add a set of requirements to an interpolation context.

Register a macro expansion function.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

Pre-calculates delivery parameters for a given domain.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

re-enqueues a message after a delivery attempt.

Adds a message to the lookuptable, and calls dns_get_MXs if the domain wasn't in the lookuptable already.

logs a rejection.

logs a successful delivery.

logs a permanent delivery failure.

logs a transient delivery failure.

logs a delivery attempt.

logs a reception.

records the fact that ecelerity rejected an incoming message.

records the fact that ecelerity delivered a message.

records the fact that ecelerity was permanently unable to deliver a message.

records the fact that ecelerity was temporarily unable to delivery a message.

records the fact that ecelerity attempted to delivery a message.

records the fact that the message was received at a particular time.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

decrements the refcount on the io_object, and closes and frees it if the refcount reaches 0

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.21.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_log_reception() instead.

**Deprecated**

use ec_log_attempt() instead.

**Deprecated**

use ec_log_transient_failure() instead.

**Deprecated**

use ec_log_permanent_failure() instead.

**Deprecated**

use ec_log_delivery() instead.

**Deprecated**

use ec_log_rejection() instead.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

**Deprecated**

use ec_mailq_message_requeue() instead.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

The macro string will be matched using a literal string comparison, unless the macro string contains the character *, which will match any sequence of 1 or more characters terminated by the character that follows it.

so "foo" will be a literal string match, but "foo:*" will match "%{foo:bar}" and "%{foo:baz}" but not "%{foo:}".

**Parameters**

<dl class="variablelist">

<dt>macro</dt>

<dd>

the macro to be matched

</dd>

<dt>func</dt>

<dd>

the function to perform the expansion

</dd>

<dt>flags</dt>

<dd>

indicates function capabilities.

</dd>

</dl>

If a macro is registered as a recursive macro, then it will be called again on its own output continually for as long as the output matches its own macro definition. The number of times that this happens is limited by the expansion infrastructure to a reasonable number to avoid infinitely recursing.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

A macro implementation would use this to hint about what kind of environment it would need for expansion of the string at runtime.

The potential requirements can be discovered using the ec_interpolate_calc_deps() API function.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

The SMTP state is updated whenever the current SMTP state wishes to chanve the state machine.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

the delivery construct for the connection in question

</dd>

<dt>connh</dt>

<dd>

the connection_handle for the connection in question

</dd>

<dt>state</dt>

<dd>

the next SMTP state, NULL to use the default value

</dd>

<dt>now</dt>

<dd>

the current time value

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

the args structure to remove the argument from

</dd>

<dt>extension</dt>

<dd>

the name of the extension argument to remove

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This is primarly a helper for clients who want to write/modify their own SMTP client state machine.

**Parameters**

<dl class="variablelist">

<dt>int]</dt>

<dd>

the delivery construct for the current session

</dd>

<dt>int]</dt>

<dd>

the current connection

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Ensures that an internally generated message is correctly swapped, has a binding assigned, is logged as a reception and then enqueues the message for delivery. This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

identical to ec_internal_inject() except that ec_log_reception is not called.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

ec_internal_inject()

Ensures that an internally generated message is correctly swapped, has a binding assigned.

If flags includeS EC_INJECT_SIGN then it will call out to message signing hooks.

If flags includes EC_INJECT_LOG then it will log a reception.

It will then enqueue the message for delivery.

This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_soft_bounce_process() instead.

**Deprecated**

use ec_generate_soft_bounce() instead.

**Deprecated**

use ec_internal_inject() instead.

**Deprecated**

use ec_internal_inject_no_log() instead.

This adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

Removes the message from the spool, logs a permanent failure and frees the message. After calling this function, you should assume that the message has been freed and should not be touched.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_swap_remove_meta() instead.

**Deprecated**

use ec_swap_remove() instead.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

**Deprecated**

in Ecelerity 2.2; it is no longer required.

**Deprecated**

use post_validate_data_spool_each_rcpt() instead.

releases resources held in an event_io_state structure.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

releases resources held in an event_io_state structure.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

**Deprecated**

use ec_mailq_message_requeue() instead.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

Sets a spool context to disable the addition of trace headers.

Sets a spool context to always regenerated message ids on import.

set the maximum retention time for a spool context.

removes the message from the spool.

removes meta data for the message from the IO layer.

Fails a message and removes it from the system.

async close will attempt to asynchronously close the socket/fd

Schedule an event from any thread, and optionally dispatch the callback.

renders an RFC3464 report block into the provided string.

injects and enqueues and internally generated message.

injects and enqueues an internally generated message.

creates an RFC 3464 MDN and enqueues

creates an MDN and enqueues.

decides if we should generate an MDN for a given message.

Parse the remtoe capabilities from the EHLO response.

Remove an argument from an smtp_client_args structure.

Push the SMTP state for the current connection to another state.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

Frees a cloned set of headers.

Unserialize an ec_sockaddr structure.

Serialize an ec_sockaddr structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

Add a set of requirements to an interpolation context.

Register a macro expansion function.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

Pre-calculates delivery parameters for a given domain.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

re-enqueues a message after a delivery attempt.

Adds a message to the lookuptable, and calls dns_get_MXs if the domain wasn't in the lookuptable already.

logs a rejection.

logs a successful delivery.

logs a permanent delivery failure.

logs a transient delivery failure.

logs a delivery attempt.

logs a reception.

records the fact that ecelerity rejected an incoming message.

records the fact that ecelerity delivered a message.

records the fact that ecelerity was permanently unable to deliver a message.

records the fact that ecelerity was temporarily unable to delivery a message.

records the fact that ecelerity attempted to delivery a message.

records the fact that the message was received at a particular time.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

decrements the refcount on the io_object, and closes and frees it if the refcount reaches 0

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.21.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_log_reception() instead.

**Deprecated**

use ec_log_attempt() instead.

**Deprecated**

use ec_log_transient_failure() instead.

**Deprecated**

use ec_log_permanent_failure() instead.

**Deprecated**

use ec_log_delivery() instead.

**Deprecated**

use ec_log_rejection() instead.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

**Deprecated**

use ec_mailq_message_requeue() instead.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

The macro string will be matched using a literal string comparison, unless the macro string contains the character *, which will match any sequence of 1 or more characters terminated by the character that follows it.

so "foo" will be a literal string match, but "foo:*" will match "%{foo:bar}" and "%{foo:baz}" but not "%{foo:}".

**Parameters**

<dl class="variablelist">

<dt>macro</dt>

<dd>

the macro to be matched

</dd>

<dt>func</dt>

<dd>

the function to perform the expansion

</dd>

<dt>flags</dt>

<dd>

indicates function capabilities.

</dd>

</dl>

If a macro is registered as a recursive macro, then it will be called again on its own output continually for as long as the output matches its own macro definition. The number of times that this happens is limited by the expansion infrastructure to a reasonable number to avoid infinitely recursing.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

A macro implementation would use this to hint about what kind of environment it would need for expansion of the string at runtime.

The potential requirements can be discovered using the ec_interpolate_calc_deps() API function.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

The SMTP state is updated whenever the current SMTP state wishes to chanve the state machine.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

the delivery construct for the connection in question

</dd>

<dt>connh</dt>

<dd>

the connection_handle for the connection in question

</dd>

<dt>state</dt>

<dd>

the next SMTP state, NULL to use the default value

</dd>

<dt>now</dt>

<dd>

the current time value

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

the args structure to remove the argument from

</dd>

<dt>extension</dt>

<dd>

the name of the extension argument to remove

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This is primarly a helper for clients who want to write/modify their own SMTP client state machine.

**Parameters**

<dl class="variablelist">

<dt>int]</dt>

<dd>

the delivery construct for the current session

</dd>

<dt>int]</dt>

<dd>

the current connection

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Ensures that an internally generated message is correctly swapped, has a binding assigned, is logged as a reception and then enqueues the message for delivery. This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

identical to ec_internal_inject() except that ec_log_reception is not called.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

ec_internal_inject()

Ensures that an internally generated message is correctly swapped, has a binding assigned.

If flags includeS EC_INJECT_SIGN then it will call out to message signing hooks.

If flags includes EC_INJECT_LOG then it will log a reception.

It will then enqueue the message for delivery.

This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_soft_bounce_process() instead.

**Deprecated**

use ec_generate_soft_bounce() instead.

**Deprecated**

use ec_internal_inject() instead.

**Deprecated**

use ec_internal_inject_no_log() instead.

This adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

Removes the message from the spool, logs a permanent failure and frees the message. After calling this function, you should assume that the message has been freed and should not be touched.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_swap_remove_meta() instead.

**Deprecated**

use ec_swap_remove() instead.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

**Deprecated**

in Ecelerity 2.2; it is no longer required.

**Deprecated**

use post_validate_data_spool_each_rcpt() instead.

releases resources held in an event_io_state structure.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

releases resources held in an event_io_state structure.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

**Deprecated**

use ec_mailq_message_requeue() instead.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

releases resources held in an event_io_state structure.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

This can be classified into using something like the bounce_classification module.

**Parameters**

<dl class="variablelist">

<dt>class_code</dt>

<dd>

the code you want to assign to your new class

</dd>

<dt>name</dt>

<dd>

the short name of your new class

</dd>

<dt>a</dt>

<dd>

more verbose description of the class

</dd>

</dl>

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

Sets a spool context to disable the addition of trace headers.

Sets a spool context to always regenerated message ids on import.

set the maximum retention time for a spool context.

removes the message from the spool.

removes meta data for the message from the IO layer.

Fails a message and removes it from the system.

async close will attempt to asynchronously close the socket/fd

Schedule an event from any thread, and optionally dispatch the callback.

renders an RFC3464 report block into the provided string.

injects and enqueues and internally generated message.

injects and enqueues an internally generated message.

creates an RFC 3464 MDN and enqueues

creates an MDN and enqueues.

decides if we should generate an MDN for a given message.

Parse the remtoe capabilities from the EHLO response.

Remove an argument from an smtp_client_args structure.

Push the SMTP state for the current connection to another state.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

Frees a cloned set of headers.

Unserialize an ec_sockaddr structure.

Serialize an ec_sockaddr structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

Add a set of requirements to an interpolation context.

Register a macro expansion function.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

Pre-calculates delivery parameters for a given domain.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

re-enqueues a message after a delivery attempt.

Adds a message to the lookuptable, and calls dns_get_MXs if the domain wasn't in the lookuptable already.

logs a rejection.

logs a successful delivery.

logs a permanent delivery failure.

logs a transient delivery failure.

logs a delivery attempt.

logs a reception.

records the fact that ecelerity rejected an incoming message.

records the fact that ecelerity delivered a message.

records the fact that ecelerity was permanently unable to deliver a message.

records the fact that ecelerity was temporarily unable to delivery a message.

records the fact that ecelerity attempted to delivery a message.

records the fact that the message was received at a particular time.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

decrements the refcount on the io_object, and closes and frees it if the refcount reaches 0

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.21.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_log_reception() instead.

**Deprecated**

use ec_log_attempt() instead.

**Deprecated**

use ec_log_transient_failure() instead.

**Deprecated**

use ec_log_permanent_failure() instead.

**Deprecated**

use ec_log_delivery() instead.

**Deprecated**

use ec_log_rejection() instead.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

**Deprecated**

use ec_mailq_message_requeue() instead.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

The macro string will be matched using a literal string comparison, unless the macro string contains the character *, which will match any sequence of 1 or more characters terminated by the character that follows it.

so "foo" will be a literal string match, but "foo:*" will match "%{foo:bar}" and "%{foo:baz}" but not "%{foo:}".

**Parameters**

<dl class="variablelist">

<dt>macro</dt>

<dd>

the macro to be matched

</dd>

<dt>func</dt>

<dd>

the function to perform the expansion

</dd>

<dt>flags</dt>

<dd>

indicates function capabilities.

</dd>

</dl>

If a macro is registered as a recursive macro, then it will be called again on its own output continually for as long as the output matches its own macro definition. The number of times that this happens is limited by the expansion infrastructure to a reasonable number to avoid infinitely recursing.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

A macro implementation would use this to hint about what kind of environment it would need for expansion of the string at runtime.

The potential requirements can be discovered using the ec_interpolate_calc_deps() API function.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

The SMTP state is updated whenever the current SMTP state wishes to chanve the state machine.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

the delivery construct for the connection in question

</dd>

<dt>connh</dt>

<dd>

the connection_handle for the connection in question

</dd>

<dt>state</dt>

<dd>

the next SMTP state, NULL to use the default value

</dd>

<dt>now</dt>

<dd>

the current time value

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

the args structure to remove the argument from

</dd>

<dt>extension</dt>

<dd>

the name of the extension argument to remove

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This is primarly a helper for clients who want to write/modify their own SMTP client state machine.

**Parameters**

<dl class="variablelist">

<dt>int]</dt>

<dd>

the delivery construct for the current session

</dd>

<dt>int]</dt>

<dd>

the current connection

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Ensures that an internally generated message is correctly swapped, has a binding assigned, is logged as a reception and then enqueues the message for delivery. This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

identical to ec_internal_inject() except that ec_log_reception is not called.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

ec_internal_inject()

Ensures that an internally generated message is correctly swapped, has a binding assigned.

If flags includeS EC_INJECT_SIGN then it will call out to message signing hooks.

If flags includes EC_INJECT_LOG then it will log a reception.

It will then enqueue the message for delivery.

This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_soft_bounce_process() instead.

**Deprecated**

use ec_generate_soft_bounce() instead.

**Deprecated**

use ec_internal_inject() instead.

**Deprecated**

use ec_internal_inject_no_log() instead.

This adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

Removes the message from the spool, logs a permanent failure and frees the message. After calling this function, you should assume that the message has been freed and should not be touched.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_swap_remove_meta() instead.

**Deprecated**

use ec_swap_remove() instead.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

**Deprecated**

in Ecelerity 2.2; it is no longer required.

**Deprecated**

use post_validate_data_spool_each_rcpt() instead.

releases resources held in an event_io_state structure.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

releases resources held in an event_io_state structure.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

**Deprecated**

use ec_mailq_message_requeue() instead.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

releases resources held in an event_io_state structure.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

releases resources held in an event_io_state structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

This can be classified into using something like the bounce_classification module.

**Parameters**

<dl class="variablelist">

<dt>class_code</dt>

<dd>

the code you want to assign to your new class

</dd>

<dt>name</dt>

<dd>

the short name of your new class

</dd>

<dt>a</dt>

<dd>

more verbose description of the class

</dd>

</dl>

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

Unserialize an ec_sockaddr structure.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

Sets a spool context to disable the addition of trace headers.

Sets a spool context to always regenerated message ids on import.

set the maximum retention time for a spool context.

removes the message from the spool.

removes meta data for the message from the IO layer.

Fails a message and removes it from the system.

async close will attempt to asynchronously close the socket/fd

Schedule an event from any thread, and optionally dispatch the callback.

renders an RFC3464 report block into the provided string.

injects and enqueues and internally generated message.

injects and enqueues an internally generated message.

creates an RFC 3464 MDN and enqueues

creates an MDN and enqueues.

decides if we should generate an MDN for a given message.

Parse the remtoe capabilities from the EHLO response.

Remove an argument from an smtp_client_args structure.

Push the SMTP state for the current connection to another state.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

Frees a cloned set of headers.

Unserialize an ec_sockaddr structure.

Serialize an ec_sockaddr structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

Add a set of requirements to an interpolation context.

Register a macro expansion function.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

Pre-calculates delivery parameters for a given domain.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

re-enqueues a message after a delivery attempt.

Adds a message to the lookuptable, and calls dns_get_MXs if the domain wasn't in the lookuptable already.

logs a rejection.

logs a successful delivery.

logs a permanent delivery failure.

logs a transient delivery failure.

logs a delivery attempt.

logs a reception.

records the fact that ecelerity rejected an incoming message.

records the fact that ecelerity delivered a message.

records the fact that ecelerity was permanently unable to deliver a message.

records the fact that ecelerity was temporarily unable to delivery a message.

records the fact that ecelerity attempted to delivery a message.

records the fact that the message was received at a particular time.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

decrements the refcount on the io_object, and closes and frees it if the refcount reaches 0

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.21.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_log_reception() instead.

**Deprecated**

use ec_log_attempt() instead.

**Deprecated**

use ec_log_transient_failure() instead.

**Deprecated**

use ec_log_permanent_failure() instead.

**Deprecated**

use ec_log_delivery() instead.

**Deprecated**

use ec_log_rejection() instead.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

**Deprecated**

use ec_mailq_message_requeue() instead.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

The macro string will be matched using a literal string comparison, unless the macro string contains the character *, which will match any sequence of 1 or more characters terminated by the character that follows it.

so "foo" will be a literal string match, but "foo:*" will match "%{foo:bar}" and "%{foo:baz}" but not "%{foo:}".

**Parameters**

<dl class="variablelist">

<dt>macro</dt>

<dd>

the macro to be matched

</dd>

<dt>func</dt>

<dd>

the function to perform the expansion

</dd>

<dt>flags</dt>

<dd>

indicates function capabilities.

</dd>

</dl>

If a macro is registered as a recursive macro, then it will be called again on its own output continually for as long as the output matches its own macro definition. The number of times that this happens is limited by the expansion infrastructure to a reasonable number to avoid infinitely recursing.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

A macro implementation would use this to hint about what kind of environment it would need for expansion of the string at runtime.

The potential requirements can be discovered using the ec_interpolate_calc_deps() API function.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

The SMTP state is updated whenever the current SMTP state wishes to chanve the state machine.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

the delivery construct for the connection in question

</dd>

<dt>connh</dt>

<dd>

the connection_handle for the connection in question

</dd>

<dt>state</dt>

<dd>

the next SMTP state, NULL to use the default value

</dd>

<dt>now</dt>

<dd>

the current time value

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

the args structure to remove the argument from

</dd>

<dt>extension</dt>

<dd>

the name of the extension argument to remove

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This is primarly a helper for clients who want to write/modify their own SMTP client state machine.

**Parameters**

<dl class="variablelist">

<dt>int]</dt>

<dd>

the delivery construct for the current session

</dd>

<dt>int]</dt>

<dd>

the current connection

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Ensures that an internally generated message is correctly swapped, has a binding assigned, is logged as a reception and then enqueues the message for delivery. This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

identical to ec_internal_inject() except that ec_log_reception is not called.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

ec_internal_inject()

Ensures that an internally generated message is correctly swapped, has a binding assigned.

If flags includeS EC_INJECT_SIGN then it will call out to message signing hooks.

If flags includes EC_INJECT_LOG then it will log a reception.

It will then enqueue the message for delivery.

This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_soft_bounce_process() instead.

**Deprecated**

use ec_generate_soft_bounce() instead.

**Deprecated**

use ec_internal_inject() instead.

**Deprecated**

use ec_internal_inject_no_log() instead.

This adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

Removes the message from the spool, logs a permanent failure and frees the message. After calling this function, you should assume that the message has been freed and should not be touched.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_swap_remove_meta() instead.

**Deprecated**

use ec_swap_remove() instead.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

**Deprecated**

in Ecelerity 2.2; it is no longer required.

**Deprecated**

use post_validate_data_spool_each_rcpt() instead.

releases resources held in an event_io_state structure.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

releases resources held in an event_io_state structure.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

**Deprecated**

use ec_mailq_message_requeue() instead.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

releases resources held in an event_io_state structure.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

releases resources held in an event_io_state structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

This can be classified into using something like the bounce_classification module.

**Parameters**

<dl class="variablelist">

<dt>class_code</dt>

<dd>

the code you want to assign to your new class

</dd>

<dt>name</dt>

<dd>

the short name of your new class

</dd>

<dt>a</dt>

<dd>

more verbose description of the class

</dd>

</dl>

releases resources held in an event_io_state structure.

Unserialize an ec_sockaddr structure.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

Sets a spool context to disable the addition of trace headers.

Sets a spool context to always regenerated message ids on import.

set the maximum retention time for a spool context.

removes the message from the spool.

removes meta data for the message from the IO layer.

Fails a message and removes it from the system.

async close will attempt to asynchronously close the socket/fd

Schedule an event from any thread, and optionally dispatch the callback.

renders an RFC3464 report block into the provided string.

injects and enqueues and internally generated message.

injects and enqueues an internally generated message.

creates an RFC 3464 MDN and enqueues

creates an MDN and enqueues.

decides if we should generate an MDN for a given message.

Parse the remtoe capabilities from the EHLO response.

Remove an argument from an smtp_client_args structure.

Push the SMTP state for the current connection to another state.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

Frees a cloned set of headers.

Unserialize an ec_sockaddr structure.

Serialize an ec_sockaddr structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

Add a set of requirements to an interpolation context.

Register a macro expansion function.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

Pre-calculates delivery parameters for a given domain.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

re-enqueues a message after a delivery attempt.

Adds a message to the lookuptable, and calls dns_get_MXs if the domain wasn't in the lookuptable already.

logs a rejection.

logs a successful delivery.

logs a permanent delivery failure.

logs a transient delivery failure.

logs a delivery attempt.

logs a reception.

records the fact that ecelerity rejected an incoming message.

records the fact that ecelerity delivered a message.

records the fact that ecelerity was permanently unable to deliver a message.

records the fact that ecelerity was temporarily unable to delivery a message.

records the fact that ecelerity attempted to delivery a message.

records the fact that the message was received at a particular time.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

decrements the refcount on the io_object, and closes and frees it if the refcount reaches 0

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.21.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_log_reception() instead.

**Deprecated**

use ec_log_attempt() instead.

**Deprecated**

use ec_log_transient_failure() instead.

**Deprecated**

use ec_log_permanent_failure() instead.

**Deprecated**

use ec_log_delivery() instead.

**Deprecated**

use ec_log_rejection() instead.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

**Deprecated**

use ec_mailq_message_requeue() instead.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

The macro string will be matched using a literal string comparison, unless the macro string contains the character *, which will match any sequence of 1 or more characters terminated by the character that follows it.

so "foo" will be a literal string match, but "foo:*" will match "%{foo:bar}" and "%{foo:baz}" but not "%{foo:}".

**Parameters**

<dl class="variablelist">

<dt>macro</dt>

<dd>

the macro to be matched

</dd>

<dt>func</dt>

<dd>

the function to perform the expansion

</dd>

<dt>flags</dt>

<dd>

indicates function capabilities.

</dd>

</dl>

If a macro is registered as a recursive macro, then it will be called again on its own output continually for as long as the output matches its own macro definition. The number of times that this happens is limited by the expansion infrastructure to a reasonable number to avoid infinitely recursing.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

A macro implementation would use this to hint about what kind of environment it would need for expansion of the string at runtime.

The potential requirements can be discovered using the ec_interpolate_calc_deps() API function.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

The SMTP state is updated whenever the current SMTP state wishes to chanve the state machine.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

the delivery construct for the connection in question

</dd>

<dt>connh</dt>

<dd>

the connection_handle for the connection in question

</dd>

<dt>state</dt>

<dd>

the next SMTP state, NULL to use the default value

</dd>

<dt>now</dt>

<dd>

the current time value

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

the args structure to remove the argument from

</dd>

<dt>extension</dt>

<dd>

the name of the extension argument to remove

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This is primarly a helper for clients who want to write/modify their own SMTP client state machine.

**Parameters**

<dl class="variablelist">

<dt>int]</dt>

<dd>

the delivery construct for the current session

</dd>

<dt>int]</dt>

<dd>

the current connection

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Ensures that an internally generated message is correctly swapped, has a binding assigned, is logged as a reception and then enqueues the message for delivery. This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

identical to ec_internal_inject() except that ec_log_reception is not called.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

ec_internal_inject()

Ensures that an internally generated message is correctly swapped, has a binding assigned.

If flags includeS EC_INJECT_SIGN then it will call out to message signing hooks.

If flags includes EC_INJECT_LOG then it will log a reception.

It will then enqueue the message for delivery.

This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_soft_bounce_process() instead.

**Deprecated**

use ec_generate_soft_bounce() instead.

**Deprecated**

use ec_internal_inject() instead.

**Deprecated**

use ec_internal_inject_no_log() instead.

This adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

Removes the message from the spool, logs a permanent failure and frees the message. After calling this function, you should assume that the message has been freed and should not be touched.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_swap_remove_meta() instead.

**Deprecated**

use ec_swap_remove() instead.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

**Deprecated**

in Ecelerity 2.2; it is no longer required.

**Deprecated**

use post_validate_data_spool_each_rcpt() instead.

releases resources held in an event_io_state structure.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

releases resources held in an event_io_state structure.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

**Deprecated**

use ec_mailq_message_requeue() instead.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

releases resources held in an event_io_state structure.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

releases resources held in an event_io_state structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

This can be classified into using something like the bounce_classification module.

**Parameters**

<dl class="variablelist">

<dt>class_code</dt>

<dd>

the code you want to assign to your new class

</dd>

<dt>name</dt>

<dd>

the short name of your new class

</dd>

<dt>a</dt>

<dd>

more verbose description of the class

</dd>

</dl>

releases resources held in an event_io_state structure.

Unserialize an ec_sockaddr structure.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

renders an RFC3464 report block into the provided string.

injects and enqueues and internally generated message.

injects and enqueues an internally generated message.

creates an RFC 3464 MDN and enqueues

creates an MDN and enqueues.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Ensures that an internally generated message is correctly swapped, has a binding assigned, is logged as a reception and then enqueues the message for delivery. This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

identical to ec_internal_inject() except that ec_log_reception is not called.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

ec_internal_inject()

Ensures that an internally generated message is correctly swapped, has a binding assigned.

If flags includeS EC_INJECT_SIGN then it will call out to message signing hooks.

If flags includes EC_INJECT_LOG then it will log a reception.

It will then enqueue the message for delivery.

This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_soft_bounce_process() instead.

**Deprecated**

use ec_generate_soft_bounce() instead.

**Deprecated**

use ec_internal_inject() instead.

**Deprecated**

use ec_internal_inject_no_log() instead.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

async close will attempt to asynchronously close the socket/fd

When called from the scheduler thread, scheduling and dispatch can happen immediately.

When called from outside the scheduler thread, this adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

This adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

**Deprecated**

use ec_async_fail() instead.

Removes the message from the spool, logs a permanent failure and frees the message. After calling this function, you should assume that the message has been freed and should not be touched.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

releases resources held in an event_io_state structure.

Sets a spool context to disable the addition of trace headers.

Sets a spool context to always regenerated message ids on import.

set the maximum retention time for a spool context.

removes the message from the spool.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_swap_remove_meta() instead.

**Deprecated**

use ec_swap_remove() instead.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

Sets a spool context to disable the addition of trace headers.

Sets a spool context to always regenerated message ids on import.

set the maximum retention time for a spool context.

removes the message from the spool.

removes meta data for the message from the IO layer.

Fails a message and removes it from the system.

async close will attempt to asynchronously close the socket/fd

Schedule an event from any thread, and optionally dispatch the callback.

renders an RFC3464 report block into the provided string.

injects and enqueues and internally generated message.

injects and enqueues an internally generated message.

creates an RFC 3464 MDN and enqueues

creates an MDN and enqueues.

decides if we should generate an MDN for a given message.

Parse the remtoe capabilities from the EHLO response.

Remove an argument from an smtp_client_args structure.

Push the SMTP state for the current connection to another state.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

Frees a cloned set of headers.

Unserialize an ec_sockaddr structure.

Serialize an ec_sockaddr structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

Add a set of requirements to an interpolation context.

Register a macro expansion function.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

Pre-calculates delivery parameters for a given domain.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

re-enqueues a message after a delivery attempt.

Adds a message to the lookuptable, and calls dns_get_MXs if the domain wasn't in the lookuptable already.

logs a rejection.

logs a successful delivery.

logs a permanent delivery failure.

logs a transient delivery failure.

logs a delivery attempt.

logs a reception.

records the fact that ecelerity rejected an incoming message.

records the fact that ecelerity delivered a message.

records the fact that ecelerity was permanently unable to deliver a message.

records the fact that ecelerity was temporarily unable to delivery a message.

records the fact that ecelerity attempted to delivery a message.

records the fact that the message was received at a particular time.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

decrements the refcount on the io_object, and closes and frees it if the refcount reaches 0

**Configuration Change. ** This feature is available starting from Momentum 2.2.1.21.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_log_reception() instead.

**Deprecated**

use ec_log_attempt() instead.

**Deprecated**

use ec_log_transient_failure() instead.

**Deprecated**

use ec_log_permanent_failure() instead.

**Deprecated**

use ec_log_delivery() instead.

**Deprecated**

use ec_log_rejection() instead.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

**Deprecated**

use ec_mailq_message_requeue() instead.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

The macro string will be matched using a literal string comparison, unless the macro string contains the character *, which will match any sequence of 1 or more characters terminated by the character that follows it.

so "foo" will be a literal string match, but "foo:*" will match "%{foo:bar}" and "%{foo:baz}" but not "%{foo:}".

**Parameters**

<dl class="variablelist">

<dt>macro</dt>

<dd>

the macro to be matched

</dd>

<dt>func</dt>

<dd>

the function to perform the expansion

</dd>

<dt>flags</dt>

<dd>

indicates function capabilities.

</dd>

</dl>

If a macro is registered as a recursive macro, then it will be called again on its own output continually for as long as the output matches its own macro definition. The number of times that this happens is limited by the expansion infrastructure to a reasonable number to avoid infinitely recursing.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

A macro implementation would use this to hint about what kind of environment it would need for expansion of the string at runtime.

The potential requirements can be discovered using the ec_interpolate_calc_deps() API function.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

The SMTP state is updated whenever the current SMTP state wishes to chanve the state machine.

**Parameters**

<dl class="variablelist">

<dt>dc</dt>

<dd>

the delivery construct for the connection in question

</dd>

<dt>connh</dt>

<dd>

the connection_handle for the connection in question

</dd>

<dt>state</dt>

<dd>

the next SMTP state, NULL to use the default value

</dd>

<dt>now</dt>

<dd>

the current time value

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>args</dt>

<dd>

the args structure to remove the argument from

</dd>

<dt>extension</dt>

<dd>

the name of the extension argument to remove

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

This is primarly a helper for clients who want to write/modify their own SMTP client state machine.

**Parameters**

<dl class="variablelist">

<dt>int]</dt>

<dd>

the delivery construct for the current session

</dd>

<dt>int]</dt>

<dd>

the current connection

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Ensures that an internally generated message is correctly swapped, has a binding assigned, is logged as a reception and then enqueues the message for delivery. This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

identical to ec_internal_inject() except that ec_log_reception is not called.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

ec_internal_inject()

Ensures that an internally generated message is correctly swapped, has a binding assigned.

If flags includeS EC_INJECT_SIGN then it will call out to message signing hooks.

If flags includes EC_INJECT_LOG then it will log a reception.

It will then enqueue the message for delivery.

This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_soft_bounce_process() instead.

**Deprecated**

use ec_generate_soft_bounce() instead.

**Deprecated**

use ec_internal_inject() instead.

**Deprecated**

use ec_internal_inject_no_log() instead.

This adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

Removes the message from the spool, logs a permanent failure and frees the message. After calling this function, you should assume that the message has been freed and should not be touched.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_swap_remove_meta() instead.

**Deprecated**

use ec_swap_remove() instead.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

**Deprecated**

in Ecelerity 2.2; it is no longer required.

**Deprecated**

use post_validate_data_spool_each_rcpt() instead.

releases resources held in an event_io_state structure.

Sets the context for an io object.

Set the scheme associated with an io object.

Sets the internal handle for an io object.

Set the path associated with an io object.

set an application specific context value and destructor.

schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

this API ignores refcounts and does not free, you want io_wrapper_async_destroy

An io_object can store 1 context value for "application use" (not an io wrapper implementation). The destructor will be called just prior to the final destruction of the IO object, allowing an application to take some action at that point.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>context</dt>

<dd>

a context value

</dd>

<dt>dtor</dt>

<dd>

a function to call on destruction

</dd>

</dl>

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The path is usually set by io_wrapper_open(), but in some special cases (such as with io_wrapper_fdopen()) it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>path</dt>

<dd>

the path to set

</dd>

</dl>

The io object will take its own copy of the path string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>handle</dt>

<dd>

the handle to set

</dd>

</dl>

Used by a wrapper implementation to store its per-object state.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

The scheme is usually set by io_wrapper_open(), but in some special cases it may be necessary to set it externally.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>scheme</dt>

<dd>

the scheme to set

</dd>

</dl>

The io object will take its own copy of the scheme string that will be freed when the object is destroyed.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Parameters**

<dl class="variablelist">

<dt>io</dt>

<dd>

the io object

</dd>

<dt>ctx</dt>

<dd>

the dictionary to use for the context

</dd>

</dl>

The io_object takes a reference on the dictionary.

Note that this has nothing to do with io_wrapper_set_context_and_dtor(), which is for application level magic.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

This version is more efficient than the normal lookuptable_exists plus lookuptable_add use case since it doesn't do another routing domain lookup (which also prevents problems if the two lookups return different answers) and only makes one pass over the lookuptable hash bucket.

**Parameters**

<dl class="variablelist">

<dt>mess</dt>

<dd>

the message to add

</dd>

<dt>routing_domain</dt>

<dd>

the routing domain of the message

</dd>

</dl>

releases resources held in an event_io_state structure.

pre-calculates next attempt times.

__default_connection_goal is the internally used connection goal determination function.

inserts a message into the active portion of the supplied mail queue.

Enqueue multiple messages in a batch "atomically", prior to running mail queue maintainers.

**Deprecated**

use ec_mailq_message_requeue() instead.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.30.

**Deprecated**

use ec_mailq_insert_active() instead.

It is called if no connection_goal hook is registered. This is provided as an export if you would like to create a hook that uses this default as a part of a larger, smarter calculation.

releases resources held in an event_io_state structure.

Used internally to assign a binding based on the Match_Domain configuration option.

force the binding assignment for a message to be revised.

**Deprecated**

use ec_mailq_set_next_attempt_prep_quick() instead.

email_message_set_binding_slot will forcefully re-bind a message. It will throw away previously assessed binding information and rebind. This is different from validate_set_binding which will bind an "unbound" message.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

You should never need to call this function.

**Deprecated**

use ec_message_reassess_binding_slot() instead.

releases resources held in an event_io_state structure.

Disable the smtp response classification system.

Enable the smtp response classification system.

This can be classified into using something like the bounce_classification module.

**Parameters**

<dl class="variablelist">

<dt>class_code</dt>

<dd>

the code you want to assign to your new class

</dd>

<dt>name</dt>

<dd>

the short name of your new class

</dd>

<dt>a</dt>

<dd>

more verbose description of the class

</dd>

</dl>

releases resources held in an event_io_state structure.

Unserialize an ec_sockaddr structure.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

**See Also**

rfc2822_clone_headers().

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

Free a prepared sieve engine context.

Delete a reference to a compiled sieve script.

Add a reference to a compiled sieve script.

The script will be freed when its refcount falls to zero.

**See Also**

sieve_seng_prepare2(), sieve_seng_prepare().

releases resources held in an event_io_state structure.

renders an RFC3464 report block into the provided string.

injects and enqueues and internally generated message.

injects and enqueues an internally generated message.

creates an RFC 3464 MDN and enqueues

creates an MDN and enqueues.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

Ensures that an internally generated message is correctly swapped, has a binding assigned, is logged as a reception and then enqueues the message for delivery. This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

identical to ec_internal_inject() except that ec_log_reception is not called.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**See Also**

ec_internal_inject()

Ensures that an internally generated message is correctly swapped, has a binding assigned.

If flags includeS EC_INJECT_SIGN then it will call out to message signing hooks.

If flags includes EC_INJECT_LOG then it will log a reception.

It will then enqueue the message for delivery.

This function is safe to call from a non-scheduler thread.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_soft_bounce_process() instead.

**Deprecated**

use ec_generate_soft_bounce() instead.

**Deprecated**

use ec_internal_inject() instead.

**Deprecated**

use ec_internal_inject_no_log() instead.

releases resources held in an event_io_state structure.

async close will attempt to asynchronously close the socket/fd

When called from the scheduler thread, scheduling and dispatch can happen immediately.

When called from outside the scheduler thread, this adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

This adds the event scheduling and dispatch work to a queue in the scheduler. The scheduler will schedule and dispatch the event as soon as possible.

**Parameters**

<dl class="variablelist">

<dt>e</dt>

<dd>

The event

</dd>

<dt>dispatch_mask</dt>

<dd>

The event mask to pass to the event's callback.

</dd>

<dt>dispatch_mask</dt>

<dd>

If non-zero, the callback is also dispatched.

</dd>

<dt>dispatch_mask</dt>

<dd>

Otherwise, the event is just scheduled.

</dd>

</dl>

releases resources held in an event_io_state structure.

**Deprecated**

use ec_async_fail() instead.

Removes the message from the spool, logs a permanent failure and frees the message. After calling this function, you should assume that the message has been freed and should not be touched.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

releases resources held in an event_io_state structure.

Sets a spool context to disable the addition of trace headers.

Sets a spool context to always regenerated message ids on import.

set the maximum retention time for a spool context.

removes the message from the spool.

**Configuration Change. ** This feature is available starting from Momentum 2.2.

**Deprecated**

use ec_swap_remove_meta() instead.

**Deprecated**

use ec_swap_remove() instead.

This is used as a hint for managing spool windows. Retention is measured in seconds; if left unspecified, the global message_expiration parameter will be used.

**Configuration Change. ** This feature is available starting from Momentum 2.2.2.29.

frees an ec_url_details structure returned by ec_parse_url

closes a converter.

**Deprecated**

in Ecelerity 2.2; it is no longer required.

**Deprecated**

use post_validate_data_spool_each_rcpt() instead.

| [Prev](extending.C.ref.timed-events.php)  | [Up](extending.C.ref.php) |  [Next](extending.C.genref.cli_conn.php) |
| timed events  | [Table of Contents](index.php) |  cli_conn |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)