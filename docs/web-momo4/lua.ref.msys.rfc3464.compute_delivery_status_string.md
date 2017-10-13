<a name="lua.ref.msys.rfc3464.compute_delivery_status_string"></a>
## Name

msys.rfc3464.compute_delivery_status_string — Generate RFC3464 compliant delivery status headers

<a name="idp18381248"></a>
## Synopsis

`msys.rfc3464.compute_delivery_status_string(response_text);`

`response_text: string`<a name="idp18384256"></a>
## Description

This function is similar to the `compute_delivery_status` function but returns a string concatenation of the header/value pairs separated by `\r\n`. This string is ready for insertion into the original message to form an MDN.

Enable this function with the statement `require('msys.rfc3464');`.

<a name="idp18388096"></a>
## See Also

[msys.rfc3464.compute_delivery_status](lua.ref.msys.rfc3464.compute_delivery_status.php "msys.rfc3464.compute_delivery_status")
