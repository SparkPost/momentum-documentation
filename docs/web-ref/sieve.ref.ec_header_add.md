| [Prev](sieve.ref.ec_get_message_spool_name)  | 16.2. Sieve Function Details |  [Next](sieve.ref.ec_header_delete.php) |

<a name="sieve.ref.ec_header_add"></a>
## Name

ec_header_add — prepend a header to the current message

## Synopsis

`ec_header_add` { *`field-name`* } { *`field-body`* }

<a name="idp29817488"></a>
## Description

This will prepend an RFC2822 header named <field-name> with the content <field-body> to the current message.

### Note

You should not use this function in the set_binding phases (regardless of version), and, as of Momentum 2.2.2.37, it will not work in these phases.

| [Prev](sieve.ref.ec_get_message_spool_name)  | [Up](sieve.ref.files.php) |  [Next](sieve.ref.ec_header_delete.php) |
| ec_get_message_spool_name  | [Table of Contents](index) |  ec_header_delete |
