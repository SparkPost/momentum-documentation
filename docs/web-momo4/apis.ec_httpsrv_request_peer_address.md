| ec_httpsrv_request_peer_address |
| [Prev](apis.ec_httpsrv_request_local_address.php)  | Chapter 69. Hook Points and C Functions Reference |  [Next](lua.function.details.php) |

<a name="apis.ec_httpsrv_request_peer_address"></a>
## Name

ec_httpsrv_request_peer_address — Returns the remote peer address from the current session

## Synopsis

`#include "/modules/listeners/httpsrv.h"`

| `ec_sockaddr * **ec_httpsrv_request_peer_address** (` | <var class="pdparam">sess</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;<a name="idp7276464"></a>
## Description

**Configuration Change. ** This option is available as of version 4.0.

This function returns the remote peer IP address from the current session.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

session to interrogate

</dd>

</dl>

**Return Values**

address in ec_sockaddr * format

The remote peer IP address will be valid for the lifetime of the session.

| [Prev](apis.ec_httpsrv_request_local_address.php)  | [Up](hooks.php) |  [Next](lua.function.details.php) |
| ec_httpsrv_request_local_address  | [Table of Contents](index.php) |  Chapter 70. Lua Functions Reference |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)