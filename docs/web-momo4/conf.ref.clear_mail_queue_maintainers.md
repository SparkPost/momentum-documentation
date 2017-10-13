<a name="conf.ref.clear_mail_queue_maintainers"></a>
## Name

clear_mail_queue_maintainers — reschedule the mail queue maintainer

## Synopsis

`clear_mail_queue_maintainers = true`

<a name="idp23860736"></a>
## Description

`clear_mail_queue_maintainers` enables you to remove and reschedule events in the mail queue maintainer. This prevents you from ending up with redundant events scheduled for a given domain, which could potentially cause abnormally high memory usage.

The default value is `true`.

<a name="idp23865584"></a>
## Scope

This option is valid in the global scope.
