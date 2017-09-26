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

| Chapter 24. Event Functions |
| [Prev](apis.echash_track_versioning.php)  | Part II. C API |  [Next](apis.build_event.php) |

## Chapter 24. Event Functions

**Table of Contents**

<dl class="toc">

<dt>[build_event](apis.build_event.php) — Create an event</dt>

<dt>[build_event_from_now_f](apis.build_event_from_now_f.php) — Create a timed event</dt>

<dt>[build_fd_event](apis.build_fd_event.php) — Create an event event relating to an open file descriptor</dt>

<dt>[event_close](apis.event_close.php) — Close the specified event</dt>

<dt>[event_free](apis.event_free.php) — Free an event</dt>

<dt>[event_io_printf](apis.event_io_printf.php) — Initiate a formatted write to an event</dt>

<dt>[event_io_read](apis.event_io_read.php) — Initiate or continue a read operation for a fixed length</dt>

<dt>[event_io_retry](apis.event_io_retry.php) — Continue a pending IO operation</dt>

<dt>[event_io_state_clean](apis.event_io_state_clean.php) — Release resources held in an event_io_state structure</dt>

<dt>[event_io_write](apis.event_io_write.php) — initiate a write to an event</dt>

<dt>[event_io_write_string](apis.event_io_write_string.php) — Initiate a write of the contents of a string to an event</dt>

<dt>[event_post_dup](apis.event_post_dup.php) — Duplicate an event</dt>

<dt>[event_read](apis.event_read.php) — Read an event</dt>

<dt>[float_event](apis.float_event.php) — Float an event</dt>

<dt>[get_event_by_fd](apis.get_event_by_fd.php) — Retrieve an event</dt>

<dt>[get_fd_event_set](apis.get_fd_event_set.php) — Retrieve an event set</dt>

<dt>[get_floating_event_set](apis.get_floating_event_set.php) — Retrieve a floating event set</dt>

<dt>[clear_event_by_fd](apis.clear_event_by_fd.php) — Clear the event related to the file descriptor</dt>

<dt>[clear_timed_event](apis.clear_timed_event.php) — Clear the specified timed event</dt>

<dt>[schedule_event](apis.schedule_event.php) — Schedule an event from any thread</dt>

<dt>[schedule_event_and_dispatch](apis.schedule_event_and_dispatch.php) — Schedule an event from any thread, and optionally dispatch the callback</dt>

<dt>[set_delayed_queue_event](apis.set_delayed_queue_event.php) — Schedule a mail queue maintainer for this `mail_queue`</dt>

<dt>[sp_async_fail](apis.sp_async_fail.php) — Fail a message (deprecated)</dt>

<dt>[sp_async_schedule_event](apis.sp_async_schedule_event.php) — Schedule an asynchronous event from any thread, and optionally dispatch the callback</dt>

<dt>[sp_make_swap_out_job](apis.sp_make_swap_out_job.php) — Create and return a job that will manage swap out processing</dt>

<dt>[sp_sync_close](apis.sp_sync_close.php) — Close the specified file descriptor, and optionally dispatch the callback</dt>

</dl>

The event system in Momentum tracks both IO and time-based events using the [event structure](structs.event.php "68.49. Event"). For sample code and a detailed discussion of events see [Section 1.3.3, “The Event API”](arch.primary.apis.php#arch.event "1.3.3. The Event API").

| [Prev](apis.echash_track_versioning.php)  | [Up](pt.apis.php) |  [Next](apis.build_event.php) |
| echash_track_versioning  | [Table of Contents](index.php) |  build_event |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)