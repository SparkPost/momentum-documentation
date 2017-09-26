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

| G.3. Extended Commands |
| [Prev](libedit.editor.commands.php)  | Appendix G. Key Binding Reference for ec_console |  [Next](disclaimer.php) |

## G.3. Extended Commands

The following extended commands may appear in your `.editrc` or may be entered directly into the console by entering extended command mode ( **Esc** **X** by default), and then typing in the extended command and pressing **Enter**.

### G.3.1. bind

`bind [-a] [-e] [-k] [-l] [-r] [-s] [-v] [key [command]]`

Without options, list all bound keys, and the editor command to which each is bound. If key is supplied, show the bindings for key. If key command is supplied, bind command to key. Options include:

<dl class="variablelist">

<dt>-e</dt>

<dd>

Bind all keys to the standard GNU Emacs-like bindings

</dd>

<dt>-v</dt>

<dd>

Bind all keys to the standard vi(1) -like bindings.

</dd>

<dt>-a</dt>

<dd>

List or change key bindings in the vi(1) mode alternate (command mode) key map.

</dd>

<dt>-k</dt>

<dd>

*`key`* is interpreted as a symbolic arrow key name, which may be one of `up', `down', `left' or `right'.

</dd>

<dt>-l</dt>

<dd>

List all editor commands and a short description of each.

</dd>

<dt>-r</dt>

<dd>

Remove a key's binding.

</dd>

<dt>-s</dt>

<dd>

*`command`* is taken as a literal string and treated as terminal input when *`key`* is typed. Bound keys in *`command`* are themselves reinterpreted, and this continues for ten levels of interpretation.

</dd>

</dl>

*`command`* may be one of the commands documented in EDITOR COMMANDS below, or another key.

*`key`* and *`command`* can contain control characters of the form `^character` (e.g. `^A`), and the following backslashed escape sequences:

<dl class="variablelist">

<dt>\a</dt>

<dd>

Bell

</dd>

<dt>\b</dt>

<dd>

Backspace

</dd>

<dt>\e</dt>

<dd>

Escape

</dd>

<dt>\f</dt>

<dd>

Formfeed

</dd>

<dt>\n</dt>

<dd>

Newline

</dd>

<dt>\r</dt>

<dd>

Carriage return

</dd>

<dt>\t</dt>

<dd>

Horizontal tab

</dd>

<dt>\v</dt>

<dd>

Vertical tab

</dd>

<dt>\nnn</dt>

<dd>

The ASCII character corresponding to the octal number nnn.

</dd>

</dl>

`\' nullifies the special meaning of the following character, if it has any, notably `\' and `^'.

### G.3.2. echotc

`echotc [-sv] arg ...`

Exercise terminal capabilities given in arg .... If arg is ‘baud’, ‘cols’, ‘lines’, ‘rows’, ‘meta or’ ‘tabs’, the value of that capability is printed, with “yes” or “no” indicating that the terminal does or does not have that capability.

-s returns an emptry string for non-existent capabilities, rather than causing an error. -v causes messages to be verbose.

### G.3.3. edit

`edit [on | off]`

Enable or disable the editline functionality in a program.

### G.3.4. history

`history`

List the history.

### G.3.5. telltc

`telltc`

List the values of all the terminal capabilities (see termcap(5) ).

### G.3.6. settc

`settc cap val`

Set the terminal capability cap to val, as defined in termcap(5). No sanity checking is done.

### G.3.7. setty

`setty [-a] [-d] [-q] [-x] [+mode] [-mode] [mode]`

Control which tty modes that editrc won’t allow the user to change. -d, -q or -x tells setty to act on the ‘edit’, ‘quote’ or ‘execute’ set of tty modes respectively; defaulting to -x.

Without other arguments, setty lists the modes in the chosen set which are fixed on (‘+mode’) or off (‘-mode’). -a lists all tty modes in the chosen set regardless of the setting. With +mode, -mode or mode, fixes mode on or off or removes control of mode in the chosen set.

| [Prev](libedit.editor.commands.php)  | [Up](libedit.php) |  [Next](disclaimer.php) |
| G.2. Editor Commands  | [Table of Contents](index.php) |  Appendix H. Disclaimer |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)