## 29.3. Using the PostgreSQL Client Program

<a class="indexterm" name="idp3961632"></a>

The PostgreSQL client program `psql` enables you to inspect the PostgreSQL database installed by Momentum.

To use this program, do the following:

1.  Log in as the `ecuser` user, which was created during installation.

2.  Start the PostgreSQL client by issuing the command

    `shell> /opt/msys/3rdParty/bin/psql ecelerity ecuser`

    PostgreSQL is configured to run on the default port, 5432, so there is no need to specify a port when running the PostgreSQL client.

### Warning

We strongly advise against building applications to interface with our database and make no guarantees that the database will remain the same between minor revisions of the product.

Additionally, applications that interface directly may be incompatible with future upgrades to the version of PostgreSQL used with Momentum.

| [Prev](postgresql.server.php)  | [Up](postgresql.php) |  [Next](postgresql.migrating.php) |
| 29.2. Running the PostgreSQL Server  | [Table of Contents](index.php) |  29.4. Dumping and Restoring the Database |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)