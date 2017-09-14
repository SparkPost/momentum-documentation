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

| 71.54. pipe_io – Pipe IO Wrapper |
| [Prev](modules.persistio.php)  | Chapter 71. Modules Reference |  [Next](modules.pipe_transport.php) |

## 71.54. pipe_io – Pipe IO Wrapper

<a class="indexterm" name="idp22563168"></a>

The `pipe_io` module provides facilities for writing content via an arbitrary program. Momentum uses an I/O abstraction layer for writing logs. With this module, you can post-process or transform logs.

`pipe_io` should not be used for post-processing the paniclog on Momentum nodes.

### 71.54.1. Configuration

This module is loaded automatically as required and does not need to be explicitly included. The configuration is in two parts: module-wide error logging and options for a specific pipe.

**71.54.1.1. Module Options**

<dl class="variablelist">

<dt>error_file</dt>

<dd>

If the invoked program writes to `STDERR`, log it to this file. If this is not set, nothing will be logged.

</dd>

<dt>error_mode</dt>

<dd>

When creating `error_file`, use this file mode. Defaults to `0666`.

</dd>

<dt>output_file</dt>

<dd>

If the invoked program writes to `STDOUT`, log it to this file. If this is not set, nothing will be logged.

</dd>

<dt>output_mode</dt>

<dd>

When creating `output_file`, use this file mode. Defaults to `0666`.

</dd>

<dt>timeout</dt>

<dd>

When closing the pipe, `timeout` specifies how many seconds `pipe_io` should wait for the program to exit normally. If the program does not exit normally, `pipe_io` will terminate it.

</dd>

</dl>

**71.54.1.2. URI Parameters**

The URI specifies the path to the program that should be connected to the read end of the pipe; for example, `pipe:///usr/bin/myscript`. The URI parameters specify the environment and arguments for the program, and how to handle errors.

<dl class="variablelist">

<dt>argN</dt>

<dd>

The Nth command-line parameter.

</dd>

<dt>clear_env</dt>

<dd>

If `1`, remove all variables from the environment. This can be used with `envN` to specify a complete environment for your program. By default, the program will inherit the environment of the parent process.

</dd>

<dt>envN</dt>

<dd>

Insert a variable into the environment. The value is of the form `name=value`.

</dd>

<dt>reinvoke</dt>

<dd>

If `1`, then one attempt will be made to restart the program if it exits unexpectedly. This is the default. Otherwise no attempt will be made to restart the program.

</dd>

<dt>shutdown_on_failure</dt>

<dd>

If `1`, shutdown if the program cannot be started, restarted, or exits unexpectedly. This is the default behavior One attempt will be made to restart the program (see `reinvoke`) -- the shutdown will occur if that fails.

If `0`, no shutdown will occur, but data will be lost silently.

</dd>

</dl>

### 71.54.2. Post-processing of Clustered Logs

The following example shows the use of `pipe_io` in `eccluster.conf` for post-processing of logs on the cluster manager.

<a name="example.pipe_io.3"></a>

**Example 71.79. pipe_io module**

```
pipe_io {
  output_file = "/var/log/eccluster/pipe_io_output.log"
  output_mode = 0664
  error_file = "/var/log/eccluster/pipe_io_error.log"
  error_mode = 0664
  timeout = 5
}

Logs {
  # arg1 = path, last component is the log name
  # arg2 = log name
  # arg3 = node name
  logfile = "pipe:///opt/msys/ecelerity/bin/myscript?arg1=/var/log/eccluster/%Y/%m/%d/%{l}&arg2=%{l}&arg3=%{n}"
  file_mode = "0640"
  dir_mode = "0755"

  # Reopen logs every ten minutes, if there's no activity.
  # The pipe reader is expected to manage its own file handles
  # intelligently, so there is less need for eccmgr to age them out.
  max_idle = "600"
}
```

### 71.54.3. Other Considerations

*   Pipe readers should not do intensive post-processing, or any processing that will introduce significant latency (e.g., database access).

*   Pipe readers should be aware that the write end of the pipe is closed when logs are re-opened or when the instance shuts down.

*   To use this module on Linux, add `export ECELERITY_MEMORY=NOREPLACE` to `/opt/msys/ecelerity/etc/environment`.

### 71.54.4. See Also

[Chapter 31, *Configuring the Environment File*](environment_file.php "Chapter 31. Configuring the Environment File") 

| [Prev](modules.persistio.php)  | [Up](modules.php) |  [Next](modules.pipe_transport.php) |
| 71.53. persist_io – Persistent IO Wrapper  | [Table of Contents](index.php) |  71.55. pipe_transport – Module |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)