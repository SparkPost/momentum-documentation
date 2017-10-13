<a name="conf.ref.reserve_maintenance_interval"></a>
## Name

reserve_maintenance_interval — how often to perform mail queue maintenance

## Synopsis

`reserve_maintenance_interval = 15`

<a name="idp26014032"></a>
## Description

This option specifies how often to perform mail queue maintenance to evaluate whether reserved connections should be established to get mail out of the system.

The system will usually limit the number of connections to `server_max_outbound_connections`, but during the reserve sweep, will allow up to `server_max_outbound` plus `reserve_outbound connections` to be established.

The system will respect any limits that have been defined, the reserve mechanism will not cause more connections to be established beyond a defined limit for a particular domain.

The default value is `15`.

<a name="idp26019472"></a>
## Scope

reserve_maintenance_interval is valid in the global scope.

<a name="idp26021312"></a>
## See Also

[server_max_outbound_connections](conf.ref.server_max_outbound_connections.php "server_max_outbound_connections")
