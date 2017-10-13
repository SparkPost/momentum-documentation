<a name="conf.ref.control_client_timeout"></a>
## Name

control_client_timeout — network timeout for Momentum control client connections

## Synopsis

`Control_Client_Timeout = 60`

<a name="idp24076176"></a>
## Description

Specifies the timeout in seconds that will be used for control client connections. The `eccmgrio://` wrapper used in clustered configurations is one example of a control client connection. The default value is `60`.

<a name="idp24079056"></a>
## Scope

control_client_timeout is valid in the global scope.
