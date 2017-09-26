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

| 68.71. scpt_objtype |
| [Prev](structs.scpt_callout.php)  | Chapter 68. Structs |  [Next](structs.scpt_thread.php) |

## 68.71. scpt_objtype

This struct is defined as follows:

```
struct scpt_obj_method {
  char *name;
  scpt_function func;
};
/** Defines a "class" of object
 *
 * @since 3.0
 */
struct _scpt_objtype {
  /** ABI safety; must be sizeof(scpt_objtype) */
  unsigned sizeof_scpt_objtype;
  /** the name of the type */
  char *type_name;
  /** action to perform when an object handle wrapper is created,
   * such as bumping a refcount on the underlying object.
   * This is passed through to a call to luaL_registerptrtype as
   * the pushfunc parameter */
  void (*on_create)(scpt_thread *L, void *ptr);
  /** action to perform when an object handle wrapper is garbage
   * collected by lua, such as decrementing a refcount.
   * This a scpt_function and is set directly as the __gc metatable
   * method on the associated metatable */
  int (*on_gc)(scpt_thread *L);
  /** points to an array of method structs, terminated by a method
   * struct with a NULL name.
   * If the first character of a name is the @ sign, then method is
   * assumed to be a getter, if the first character is the * sign,
   * then it is assumed to be a setter handler.
   */
  struct scpt_obj_method *methods;
  /** any getter/setter methods are referenced by this hash for
   * faster runtime resolution by the __index handler for the
   * object.  You must initialize this to NULL and allow the
   * runtime to populate it for you */
  ec_hash_table *properties;

  /** this field exists to force the size of scpt_objtype to change
   * with respect to earlier versions.  This will trigger the ABI
   * checking sanity check and cause older modules to panic on or
   * very close to startup */
  int _abi_trick;
};
```

To use this struct, include the file `modules/scriptlets/ec_scriptlet.h`.

### 68.71.1. See Also

[Chapter 42, *Scriptlet (and Alerting) Functions*                         ](script.php "Chapter 42. Scriptlet (and Alerting) Functions") [Section 68.31, “ec_hash_table”](structs.ec_hash_table.php "68.31. ec_hash_table") and [Section 68.72, “scpt_thread”](structs.scpt_thread.php "68.72. scpt_thread")

| [Prev](structs.scpt_callout.php)  | [Up](structs.php) |  [Next](structs.scpt_thread.php) |
| 68.70. scpt_callout  | [Table of Contents](index.php) |  68.72. scpt_thread |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)