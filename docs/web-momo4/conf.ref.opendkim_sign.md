<a name="conf.ref.opendkim_sign"></a>
## Name

opendkim_sign — whether or not to enable OpenDKIM signing

## Synopsis

`opendkim_sign = "true"`

<a name="idp25723552"></a>
## Description

Use this option to enable or disable OpenDKIM signing. To use OpenDKIM, you must also configure the [`opendkim`](modules.opendkim.php "71.50. opendkim – Open Source DKIM") module.

Default value is `true`.

<a name="idp25727552"></a>
## Scope

`opendkim_sign` is valid in the binding, binding_group, domain, and global scopes.

<a name="idp25729408"></a>
## See Also

[`opendkim`](modules.opendkim.php "71.50. opendkim – Open Source DKIM")
