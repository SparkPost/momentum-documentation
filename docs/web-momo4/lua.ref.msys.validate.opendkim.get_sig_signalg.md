<a name="lua.ref.msys.validate.opendkim.get_sig_signalg"></a>
## Name

msys.validate.opendkim.get_sig_signalg — Return the signing algorithm as a string

<a name="idp19079488"></a>
## Synopsis

`msys.validate.opendkim.get_sig_signalg(dkim_sig)`

`dkim_sig: userdata, DKIM_SIGINFO type`<a name="idp19082944"></a>
## Description

This function returns the DKIM signing algorithm string. Use `msys.validate.opendkim.get_num_sigs` and `msys.validate.opendkim.get_sig` to get a DKIM_SIGINFO object to pass to this function. For a description of the DKIM_SIGINFO object, see [DKIM_DSIGINFO](http://www.opendkim.org/libopendkim/dkim_siginfo.html).

This function requires the [`opendkim`](modules.opendkim.php "71.50. opendkim – Open Source DKIM") module.

Enable this function with the statement `require('msys.validate.opendkim');`.

This function returns the signing algorithm and DKIM status `DKIM_STAT`.

The signing algorithm can be one of the following values:

*   `rsa-sha1`

*   `rsa-sha256`

*   `unknown`

The `DKIM_STAT` can be one of the following values:

*   `DKIM_STAT_OK` – successful completion

*   `DKIM_STAT_BADSIG` – signature did not match headers and body

*   `DKIM_STAT_NOSIG` – no signature present

*   `DKIM_STAT_NOKEY` – no key available for verifying

*   `DKIM_STAT_CANTVRFY` – cannot get key for verifying

*   `DKIM_STAT_SYNTAX` – message is not in valid syntax

*   `DKIM_STAT_NORESOURCE` – resource unavailable

*   `DKIM_STAT_INTERNAL` – internal error

*   `DKIM_STAT_REVOKED` – signing key revoked

*   `DKIM_STAT_INVALID` – invalid parameter(s)

*   `DKIM_STAT_NOTIMPLEMENT` – function not implemented

*   `DKIM_STAT_KEYFAIL` – key retrieval failed (try again later)

*   `DKIM_STAT_CBREJECT` – callback requested message rejection

*   `DKIM_STAT_CBTRYAGAIN` – callback cannot complete (try again later)

*   `DKIM_STAT_CBERROR` – unspecified callback error

<a name="idp19116496"></a>
## See Also

[msys.validate.opendkim.get_sig_canons](lua.ref.msys.validate.opendkim.get_sig_canons.php "msys.validate.opendkim.get_sig_canons"), [msys.validate.opendkim.sign](lua.ref.msys.validate.opendkim.sign.php "msys.validate.opendkim.sign"), [msys.validate.opendkim.verify](lua.ref.msys.validate.opendkim.verify.php "msys.validate.opendkim.verify"), [msys.validate.opendkim.get_num_sigs](lua.ref.msys.validate.opendkim.get_num_sigs.php "msys.validate.opendkim.get_num_sigs"), [msys.validate.opendkim.get_sig](lua.ref.msys.validate.opendkim.get_sig.php "msys.validate.opendkim.get_sig"), [msys.validate.opendkim.get_sig_domain](lua.ref.msys.validate.opendkim.get_sig_domain.php "msys.validate.opendkim.get_sig_domain"), [msys.validate.opendkim.get_sig_selector](lua.ref.msys.validate.opendkim.get_sig_selector.php "msys.validate.opendkim.get_sig_selector"), [msys.validate.opendkim.get_sig_errorstr](lua.ref.msys.validate.opendkim.get_sig_errorstr.php "msys.validate.opendkim.get_sig_errorstr"), [msys.validate.opendkim.get_sig_flags](lua.ref.msys.validate.opendkim.get_sig_flags.php "msys.validate.opendkim.get_sig_flags"), [msys.validate.opendkim.get_sig_identity](lua.ref.msys.validate.opendkim.get_sig_identity.php "msys.validate.opendkim.get_sig_identity"), [msys.validate.opendkim.get_sig_keysize](lua.ref.msys.validate.opendkim.get_sig_keysize.php "msys.validate.opendkim.get_sig_keysize"), [msys.validate.opendkim.get_sig_hdrsigned](lua.ref.msys.validate.opendkim.get_sig_hdrsigned.php "msys.validate.opendkim.get_sig_hdrsigned")

| [Prev](lua.ref.msys.validate.opendkim.get_sig_selector.php)  | [Up](lua.function.details.php) |  [Next](lua.ref.msys.validate.opendkim.sign.php) |
| msys.validate.opendkim.get_sig_selector  | [Table of Contents](index.php) |  msys.validate.opendkim.sign |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)