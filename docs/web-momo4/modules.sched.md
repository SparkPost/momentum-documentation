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

| 71.59. sched – The Schedule Module |
| [Prev](modules.response_transcode.php)  | Chapter 71. Modules Reference |  [Next](modules.scriptlet.php) |

## 71.59. sched – The Schedule Module

<a class="indexterm" name="idp22796112"></a>

The sched module is used to schedule tasks that can be run from the console.

### 71.59.1. Configuration

The following configuration stanza loads the sched module:

<a name="example.sched.3"></a>

**Example 71.83. sched module**

```
sched {
  backing_store = "/path/to/sqlite.db"
}
```

`backing_store` defines the path to a SQLite database. If the specified file does not already exist it will be created. The directory containing this database file must be writable by the user/group that the Momentum instance is running as, typically ecuser. Specifying a `backing_store` is not a requirement but if it is not specified any scheduled tasks will be forgotten when the instance is restarted.

**71.59.1.1. sched Management Using Console Commands**

The sched module can be controlled through `ec_console`. The following commands are available:

<dl class="variablelist">

<dt>sched at *`seconds`* *`command`*</dt>

<dd>

Run a command at the specified time expressed as a Unix timestamp.

</dd>

<dt>sched delete *`id`*</dt>

<dd>

This command deletes a scheduled job. To determine the job id use the **sched list**      command. The **delete** command removes a job from memory and from the database.

</dd>

<dt>sched every *`seconds`* *`command`*</dt>

<dd>

Create a recurrent command that repeats at the specified interval.

</dd>

<dt>sched in *`seconds`* *`command`*</dt>

<dd>

Run a command at the specified number of seconds from the current time.

</dd>

<dt>sched list</dt>

<dd>

List any scheduled tasks. The output of this command is shown in the following:

```
JOB ID        	    NEXT RUN TIME	REC	COMMAND
example.com-000000005	1215702990	 y	config set message_expiration 300
```

The output shows the job id followed by the scheduled run time expressed in Unix timestamp format. If the job is recurrent a ‘`y`’ appears under the `REC` column. A command will only be recurrent if it is invoked using **every**. The scheduled command appears under the `COMMAND` column.

</dd>

</dl>

| [Prev](modules.response_transcode.php)  | [Up](modules.php) |  [Next](modules.scriptlet.php) |
| 71.58. response_transcode – Module  | [Table of Contents](index.php) |  71.60. scriptlet - Lua Policy Scripts |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)