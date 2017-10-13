<a name="lua.ref.vctx_remove_recipient"></a>
## Name

vctx:remove_recipient — Remove an address from the recipient list

<a name="idp19292560"></a>
## Synopsis

`vctx:remove_recipient(address);`

`address: string`<a name="idp19295488"></a>
## Description

Removes an address (which may be a table representing multiple addresses) from the recipient list. If used in an invalid phase (after rcptlist final), this function raises an error.

Enable this function with the statement `require('msys.extended.vctx');`.
