| 6.16. Separate Vertica Partition |
| [Prev](byb.riak_provisioning.php)  | Chapter 6. Before You Begin |  [Next](byb.disable_postfix.php) |

## 6.16. Separate Vertica Partition

In many cases, Message Systems recommends creating a separate partition `/var/db/vertica` for Vertica's data and workspace (sometimes on dedicated drives). Before installing Vertica, we will create a new user (`vertica_dba`) and new group (`verticadba`):

```
groupadd verticadba
useradd -md /var/db/vertica -gverticadba vertica_dba
```

Doing this pre-step will avoid the following ownership warnings during installation:

```
Provided DB Admin account details: user = vertica_dba, group = verticadba, home = /var/db/vertica
Creating group... Adding group
Validating group... Okay
useradd: warning: the home directory already exists.
Not copying any file from skel directory into it.
Creating user... Adding user
Validating user...
ESC[31mFailESC[0m : User's home directory is owned by some other user
```

| [Prev](byb.riak_provisioning.php)  | [Up](before_you_begin.php) |  [Next](byb.disable_postfix.php) |
| 6.15. Riak Provisioning  | [Table of Contents](index.php) |  6.17. Disable Postfix and QPIDD |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)