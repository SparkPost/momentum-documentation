| 29.2. Running the PostgreSQL Server |
| [Prev](postgresql.php)  | Chapter 29. PostgreSQL |  [Next](postgresql.client.php) |

## 29.2. Running the PostgreSQL Server

<a class="indexterm" name="idp3925776"></a>

The PostgreSQL server is installed as a daemon and starts up whenever the system is rebooted. To start the PostgreSQL server immediately after installation, issue the command

`shell> /etc/init.d/msyspg start`

To determine the options that can be used with the `msyspg` command, issue the command

`shell> /etc/init.d/msyspg`

The following output is displayed:

`Usage: {start|stop|restart}`

where

*   `start` – Start the PostgreSQL server daemon named `msyspg` running at levels 3, 4 and 5

*   `stop` – Stop the PostgreSQL server

*   `restart` – Restart the PostgreSQL server

| [Prev](postgresql.php)  | [Up](postgresql.php) |  [Next](postgresql.client.php) |
| Chapter 29. PostgreSQL  | [Table of Contents](index.php) |  29.3. Using the PostgreSQL Client Program |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)