<a name="conf.ref.max_resident_transfails"></a>
## Name

max_resident_transfails — the threshold for swapping transient failures out of memory

## Synopsis

`max_resident_transfails = 100`

<a name="idp25413376"></a>
## Description

If the transfail queue grows beyond the size specified by this option, messages are swapped out before being queued to the transfail queue thus mitigating a potential memory usage problem.

The default value is `100`.

<a name="idp25416272"></a>
## Scope

max_resident_transfails is valid in the global scope.

<a name="idp25418112"></a>
## See Also

[inline_transfail_processing](conf.ref.inline_transfail_processing "inline_transfail_processing") and [reserve_maintenance_interval](conf.ref.reserve_maintenance_interval.php "reserve_maintenance_interval")
