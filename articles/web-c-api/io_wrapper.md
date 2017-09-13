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

| Chapter 30. io_wrapper Functions |
| [Prev](apis.ec_interpolate_string.php)  | Part II. C API |  [Next](apis.io_wrapper_addref.php) |

## Chapter 30. io_wrapper Functions

**Table of Contents**

<dl class="toc">

<dt>[io_wrapper_addref](apis.io_wrapper_addref.php) — Add a reference to the specified io_object</dt>

<dt>[io_wrapper_async_close](apis.io_wrapper_async_close.php) — Close an IO wrapper (deprecated)</dt>

<dt>[io_wrapper_async_destroy](apis.io_wrapper_async_destroy.php) — schedules an io_wrapper_destroy in the IO thread pool if you're not in the scheduler thread, you can use io_wrapper_destroy directly</dt>

<dt>[io_wrapper_clone](apis.io_wrapper_clone.php) — Duplicates an io_object, making it an independent cursor on the stream</dt>

<dt>[io_wrapper_close](apis.io_wrapper_close.php) — Close an IO wrapper (deprecated)</dt>

<dt>[io_wrapper_copy_memory](apis.io_wrapper_copy_memory.php) — Creates a copy of a memory buffer and returns a handle to that buffer</dt>

<dt>[io_wrapper_copy_to_buffer](apis.io_wrapper_copy_to_buffer.php) — copies up to len bytes from the io object and writes them to buf</dt>

<dt>[io_wrapper_create_object](apis.io_wrapper_create_object.php) — manufactures an io_object on the fly</dt>

<dt>[io_wrapper_create_read_job](apis.io_wrapper_create_read_job.php) — Creates a job to read the contents of a file</dt>

<dt>[io_wrapper_delref](apis.io_wrapper_delref.php) — Decrements the refcount on the io_object, and closes and frees it if the refcount reaches 0</dt>

<dt>[io_wrapper_destroy](apis.io_wrapper_destroy.php) — Decrements the refcount on the io_object, and closes and frees it if the refcount reaches 0</dt>

<dt>[io_wrapper_fdopen](apis.io_wrapper_fdopen.php) — Open an io_object on top of an existing descriptor</dt>

<dt>[io_wrapper_flush](apis.io_wrapper_flush.php) — Flush a resource</dt>

<dt>[io_wrapper_get_app_context](apis.io_wrapper_get_app_context.php) — Retrieve the application context value</dt>

<dt>[io_wrapper_get_context](apis.io_wrapper_get_context.php) — Retrieves the context for an io object</dt>

<dt>[io_wrapper_get_handle](apis.io_wrapper_get_handle.php) — Gets the internal handle for an io object</dt>

<dt>[io_wrapper_get_mode](apis.io_wrapper_get_mode.php) — Retrieves the mode associated with an io object</dt>

<dt>[io_wrapper_get_options](apis.io_wrapper_get_options.php) — Retrieve the options associated with an io object</dt>

<dt>[io_wrapper_get_path](apis.io_wrapper_get_path.php) — Retrieve the path associated with an io object</dt>

<dt>[io_wrapper_get_scheme](apis.io_wrapper_get_scheme.php) — Retrieves the scheme associated with an io object</dt>

<dt>[io_wrapper_is_memory_based](apis.io_wrapper_is_memory_based.php) — returns the memtype if an io_object is an in-memory io_object</dt>

<dt>[io_wrapper_lookup](apis.io_wrapper_lookup.php) — Look up the specified IO wrapper</dt>

<dt>[io_wrapper_lseek](apis.io_wrapper_lseek.php) — Reposition read/write resource offset</dt>

<dt>[io_wrapper_mkpath_and_open](apis.io_wrapper_mkpath_and_open.php) — Open a handle to a resource, creating any missing directories if necessary and (options and O_CREAT)</dt>

<dt>[io_wrapper_open](apis.io_wrapper_open.php) — Open a handle to a resource</dt>

<dt>[io_wrapper_open2](apis.io_wrapper_open2.php) — Open a handle to a resource with context</dt>

<dt>[io_wrapper_open_memory](apis.io_wrapper_open_memory.php) — Open a read-only handle on some memory</dt>

<dt>[io_wrapper_open_tmpspool](apis.io_wrapper_open_tmpspool.php) — creates a temporary file in the spool</dt>

<dt>[io_wrapper_printf](apis.io_wrapper_printf.php) — printf-like function that operates on an io_object pointer</dt>

<dt>[io_wrapper_read](apis.io_wrapper_read.php) — Read the specified number of bytes</dt>

<dt>[io_wrapper_set_app_context_and_dtor](apis.io_wrapper_set_app_context_and_dtor.php) — Set an application-specific context value and destructor</dt>

<dt>[io_wrapper_set_context](apis.io_wrapper_set_context.php) — Sets the context for an io object</dt>

<dt>[io_wrapper_set_handle](apis.io_wrapper_set_handle.php) — Sets the internal handle for an io object</dt>

<dt>[io_wrapper_set_path](apis.io_wrapper_set_path.php) — Set the path associated with an io object</dt>

<dt>[io_wrapper_set_scheme](apis.io_wrapper_set_scheme.php) — Set the scheme associated with an io object</dt>

<dt>[io_wrapper_supports_lseek](apis.io_wrapper_supports_lseek.php) — Indicates if a stream is seekable</dt>

<dt>[io_wrapper_vprintf](apis.io_wrapper_vprintf.php) — vprintf-like function that operates on an io_object pointer</dt>

<dt>[io_wrapper_writev](apis.io_wrapper_writev.php) — Write a vector</dt>

</dl>

| [Prev](apis.ec_interpolate_string.php)  | [Up](pt.apis.php) |  [Next](apis.io_wrapper_addref.php) |
| ec_interpolate_string  | [Table of Contents](index.php) |  io_wrapper_addref |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)