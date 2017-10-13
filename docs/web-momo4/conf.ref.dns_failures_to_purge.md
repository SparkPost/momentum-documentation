<a name="conf.ref.dns_failures_to_purge"></a>
## Name

dns_failures_to_purge — configure the maximum number of DNS lookups

## Synopsis

`dns_failures_to_purge = 10`

<a name="idp24396144"></a>
## Description

After the specified number of failed DNS lookups, a message will be failed permanently. The default value is `10`.

<a name="idp24398496"></a>
## Scope

`dns_failures_to_purge` is valid in the domain and global scopes.

<a name="idp24400768"></a>
## See Also

[mx_failures_fallback_to_a](conf.ref.mx_failures_fallback_to_a "mx_failures_fallback_to_a")
