<a name="conf.ref.disable_nagle_algorithm"></a>
## Name

disable_nagle_algorithm — disable nagle algorithm on sockets

## Synopsis

`disable_nagle_algorithm = false`

<a name="idp24341840"></a>
## Description

Momentum can be configured to disable the Nagle algorithm on the TCP connections it manages.

The default for this option is `false`.

### Warning

This is an advanced option. Thorough testing is recommended before deployment in a production environment.

<a name="idp24345648"></a>
## Scope

`disable_nagle_algorithm` is valid in the eccluster_listener, ecstream_listener, esmtp_listener, global, http_listener and listen scopes.

`disable_nagle_algorithm` is valid in the ecstream_listener, esmtp_listener, global and listen scopes.
