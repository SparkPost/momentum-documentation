<a name="lua.ref.msys.gauge_cache.dec"></a>
## Name

msys.gauge_cache.dec — Decrement the value associated with keystring in the named cache

<a name="idp18109104"></a>
## Synopsis

`msys.gauge_cache.dec(cachename, keystring);`

```
cachename: string
keystring: string
```
<a name="idp18112064"></a>
## Description

Decrements the value associated with keystring in the named cache.

Enable this function with the statement `require('msys.gauge_cache');`.

<a name="idp18114896"></a>
## See Also

[msys.gauge_cache.define](lua.ref.msys.gauge_cache.define "msys.gauge_cache.define"), [Section 28.1.9, “Shared Gauge Caches”](cluster.config.replication.php#cluster.replication.gauge_cache "28.1.9. Shared Gauge Caches")
