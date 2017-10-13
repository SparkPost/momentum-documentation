## 6.10. Creating `root` and `vertica_dba` Accounts

`root` and `vertica_dba` accounts must have their own RSA or Digital Signature Algorithm (DSA) keysets.

### Note

This requirement is necessary only if the local security policy has configured SSH `StrictHostKeyChecking` to `yes`.

*   The `vertica_dba` public key(s) must be in the `/var/db/vertica/.ssh/authorized_keys` file on **all** Analytics nodes. Create them if they don't exist.

*   The `root` public key(s) must be in the `/root/.ssh/authorized_keys` and `/var/db/vertica/.ssh/authorized_keys` files on **all** Analytics nodes. Create them if they don't exist.

*   All `root` accounts on the Analytics nodes may have different keysets, depending on local security policy. In this case, public keys from the root account on all Analytics nodes need to be added to both `authorized_keys` files noted above.

| [Prev](byb.jre.php)  | [Up](before_you_begin.php) |  [Next](byb.redefine_ephemeral_ports.php) |
| 6.9. Java Runtime Environment (JRE)  | [Table of Contents](index.php) |  6.11. Redefining Ephemeral Ports |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)