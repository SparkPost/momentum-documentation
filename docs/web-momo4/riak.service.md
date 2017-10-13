| 30.2. Running the Riak Service |
| [Prev](riak.php)  | Chapter 30. Riak |  [Next](operations.riak.ports.php) |

## 30.2. Running the Riak Service

Riak is configured to start automatically when the system boots. The service can be controlled by the script located at `/etc/init.d/msys-riak`. This initialization script has the usual stop, start, and restart options. The following additional options are also available:

*   `reboot` – Perform a clean restart by first terminating the Erlang VM.

*   `ping` – Check that the service is running.

*   join *`node`* – Join a Riak cluster. Equivalent to running the **riak-admin cluster join *`riak-cluster@otherip`***                                       command. Joins the running node to another running node so that they participate in the same cluster.

*   `attach` – Attaches to the console of a Riak node running in the background, giving access to the Erlang shell and runtime messages.

*   `console` – Start the Riak node in the foreground, giving access to the Erlang shell and runtime messages.

| [Prev](riak.php)  | [Up](riak.php) |  [Next](operations.riak.ports.php) |
| Chapter 30. Riak  | [Table of Contents](index.php) |  30.3. Riak Ports |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)