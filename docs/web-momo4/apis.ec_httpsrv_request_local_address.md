<a name="apis.ec_httpsrv_request_local_address"></a>
## Name

ec_httpsrv_request_local_address — Returns the local IP address from the current session

## Synopsis

`#include "/modules/listeners/httpsrv.h"`

| `ec_sockaddr * **ec_httpsrv_request_local_address** (` | <var class="pdparam">sess</var>`)`; |   |

`ec_httpsrv_session * <var class="pdparam">sess</var>`;<a name="idp7261072"></a>
## Description

**Configuration Change. ** This option is available as of version 4.0.

This function returns the local IP address from the current session.

**Parameters**

<dl class="variablelist">

<dt>sess</dt>

<dd>

session to interrogate

</dd>

</dl>

**Return Values**

address in ec_sockaddr * format

The local IP address will be valid for the lifetime of the session.
