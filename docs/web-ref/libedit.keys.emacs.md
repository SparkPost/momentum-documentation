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

| G.1. Default emacs key bindings |
| [Prev](libedit.php)  | Appendix G. Key Binding Reference for ec_console |  [Next](libedit.editor.commands.php) |

## G.1. Default emacs key bindings

<dl class="variablelist">

<dt>**Ctrl**+**@**</dt>

<dd>

[em-set-mark](libedit.editor.commands.php#libedit.func.em-set-mark "G.2.48. em-set-mark")

</dd>

<dt>**Ctrl**+**A**</dt>

<dd>

[ed-move-to-beg](libedit.editor.commands.php#libedit.func.ed-move-to-beg "G.2.62. ed-move-to-beg")

</dd>

<dt>**Ctrl**+**B**</dt>

<dd>

[ed-prev-char](libedit.editor.commands.php#libedit.func.ed-prev-char "G.2.66. ed-prev-char")

</dd>

<dt>**Ctrl**+**C**</dt>

<dd>

[ed-tty-sigint](libedit.editor.commands.php#libedit.func.ed-tty-sigint "G.2.71. ed-tty-sigint")

</dd>

<dt>**Ctrl**+**D**</dt>

<dd>

[em-delete-or-list](libedit.editor.commands.php#libedit.func.em-delete-or-list "G.2.37. em-delete-or-list")

</dd>

<dt>**Ctrl**+**E**</dt>

<dd>

[ed-move-to-end](libedit.editor.commands.php#libedit.func.ed-move-to-end "G.2.61. ed-move-to-end")

</dd>

<dt>**Ctrl**+**F**</dt>

<dd>

[ed-next-char](libedit.editor.commands.php#libedit.func.ed-next-char "G.2.64. ed-next-char")

</dd>

<dt>**Ctrl**+**H**</dt>

<dd>

[ed-delete-prev-char](libedit.editor.commands.php#libedit.func.ed-delete-prev-char "G.2.79. ed-delete-prev-char")

</dd>

<dt>**Ctrl**+**J**</dt>

<dd>

[ed-newline](libedit.editor.commands.php#libedit.func.ed-newline "G.2.78. ed-newline")

</dd>

<dt>**Ctrl**+**K**</dt>

<dd>

[ed-kill-line](libedit.editor.commands.php#libedit.func.ed-kill-line "G.2.60. ed-kill-line")

</dd>

<dt>**Ctrl**+**L**</dt>

<dd>

[ed-clear-screen](libedit.editor.commands.php#libedit.func.ed-clear-screen "G.2.80. ed-clear-screen")

</dd>

<dt>**Ctrl**+**M**</dt>

<dd>

[ed-newline](libedit.editor.commands.php#libedit.func.ed-newline "G.2.78. ed-newline")

</dd>

<dt>**Ctrl**+**N**</dt>

<dd>

[ed-next-history](libedit.editor.commands.php#libedit.func.ed-next-history "G.2.85. ed-next-history")

</dd>

<dt>**Ctrl**+**O**</dt>

<dd>

[ed-tty-flush-output](libedit.editor.commands.php#libedit.func.ed-tty-flush-output "G.2.73. ed-tty-flush-output")

</dd>

<dt>**Ctrl**+**P**</dt>

<dd>

[ed-prev-history](libedit.editor.commands.php#libedit.func.ed-prev-history "G.2.84. ed-prev-history")

</dd>

<dt>**Ctrl**+**Q**</dt>

<dd>

[ed-tty-start-output](libedit.editor.commands.php#libedit.func.ed-tty-start-output "G.2.77. ed-tty-start-output")

</dd>

<dt>**Ctrl**+**R**</dt>

<dd>

[ed-redisplay](libedit.editor.commands.php#libedit.func.ed-redisplay "G.2.81. ed-redisplay")

</dd>

<dt>**Ctrl**+**S**</dt>

<dd>

[ed-tty-stop-output](libedit.editor.commands.php#libedit.func.ed-tty-stop-output "G.2.76. ed-tty-stop-output")

</dd>

<dt>**Ctrl**+**T**</dt>

<dd>

[ed-transpose-chars](libedit.editor.commands.php#libedit.func.ed-transpose-chars "G.2.63. ed-transpose-chars")

</dd>

<dt>**Ctrl**+**U**</dt>

<dd>

[ed-kill-line](libedit.editor.commands.php#libedit.func.ed-kill-line "G.2.60. ed-kill-line")

</dd>

<dt>**Ctrl**+**V**</dt>

<dd>

[ed-quoted-insert](libedit.editor.commands.php#libedit.func.ed-quoted-insert "G.2.67. ed-quoted-insert")

</dd>

<dt>**Ctrl**+**W**</dt>

<dd>

[em-kill-region](libedit.editor.commands.php#libedit.func.em-kill-region "G.2.41. em-kill-region")

</dd>

<dt>**Ctrl**+**Y**</dt>

<dd>

[em-yank](libedit.editor.commands.php#libedit.func.em-yank "G.2.39. em-yank")

</dd>

<dt>**Ctrl**+**Z**</dt>

<dd>

[ed-tty-sigtstp](libedit.editor.commands.php#libedit.func.ed-tty-sigtstp "G.2.75. ed-tty-sigtstp")

</dd>

<dt>**Ctrl**+**[**</dt>

<dd>

[em-meta-next](libedit.editor.commands.php#libedit.func.em-meta-next "G.2.51. em-meta-next")

</dd>

<dt>**Ctrl**+**\**</dt>

<dd>

[ed-tty-sigquit](libedit.editor.commands.php#libedit.func.ed-tty-sigquit "G.2.74. ed-tty-sigquit")

</dd>

<dt>**Ctrl**+**]**</dt>

<dd>

[ed-tty-dsusp](libedit.editor.commands.php#libedit.func.ed-tty-dsusp "G.2.72. ed-tty-dsusp")

</dd>

<dt>**Esc** **Backspace**</dt>

<dd>

[ed-delete-prev-word](libedit.editor.commands.php#libedit.func.ed-delete-prev-word "G.2.58. ed-delete-prev-word")

</dd>

<dt>**Esc** **Ctrl**+**_**</dt>

<dd>

[em-copy-prev-word](libedit.editor.commands.php#libedit.func.em-copy-prev-word "G.2.53. em-copy-prev-word")

</dd>

<dt>**Esc** **B**</dt>

<dd>

[ed-prev-word](libedit.editor.commands.php#libedit.func.ed-prev-word "G.2.65. ed-prev-word")

</dd>

<dt>**Esc** **C**</dt>

<dd>

[em-capitol-case](libedit.editor.commands.php#libedit.func.em-capitol-case "G.2.46. em-capitol-case")

</dd>

<dt>**Esc** **D**</dt>

<dd>

[em-delete-next-word](libedit.editor.commands.php#libedit.func.em-delete-next-word "G.2.38. em-delete-next-word")

</dd>

<dt>**Esc** **F**</dt>

<dd>

[em-next-word](libedit.editor.commands.php#libedit.func.em-next-word "G.2.44. em-next-word")

</dd>

<dt>**Esc** **L**</dt>

<dd>

[em-lower-case](libedit.editor.commands.php#libedit.func.em-lower-case "G.2.47. em-lower-case")

</dd>

<dt>**Esc** **N**</dt>

<dd>

[ed-search-next-history](libedit.editor.commands.php#libedit.func.ed-search-next-history "G.2.87. ed-search-next-history")

</dd>

<dt>**Esc** **P**</dt>

<dd>

[ed-search-prev-history](libedit.editor.commands.php#libedit.func.ed-search-prev-history "G.2.86. ed-search-prev-history")

</dd>

<dt>**Esc** **U**</dt>

<dd>

[em-upper-case](libedit.editor.commands.php#libedit.func.em-upper-case "G.2.45. em-upper-case")

</dd>

<dt>**Esc** **W**</dt>

<dd>

[em-copy-region](libedit.editor.commands.php#libedit.func.em-copy-region "G.2.42. em-copy-region")

</dd>

<dt>**Esc** **X**</dt>

<dd>

[ed-command](libedit.extended.php "G.3. Extended Commands")

</dd>

</dl>

| [Prev](libedit.php)  | [Up](libedit.php) |  [Next](libedit.editor.commands.php) |
| Appendix G. Key Binding Reference for ec_console  | [Table of Contents](index.php) |  G.2. Editor Commands |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)