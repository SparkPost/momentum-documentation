| supplemental_groups |
| [Prev](config.starttls_injection_policy.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.suspend_delivery.php) |

<a name="conf.ref.supplemental_groups"></a>
## Name

supplemental_groups — security: supplemental groups to assume after startup

<a name="idp26779728"></a>
## Description

This security feature instructs Momentum to issue a `setgroups` system call to set the supplemental groups for the Momentum process. This allows more flexibility for granting Momentum access to resources that are restricted based on group membership.

<a name="conf.ref.supplemental_groups.example"></a>

**Example 72.10. supplemental_groups Example**

Security {
  Supplemental_Groups = ( *`"list of group names or ids"`*                         )
  # Allow binding to privileged ports without requiring a process restart  
  Capabilities = "cap_net_bind_service+ep"
}

### Note

Changing the value of options in the `security` scope at runtime requires restarting the ecelerity process—issuing the ec_console command **`config reload`**         will not suffice.

<a name="idp26787216"></a>
## Scope

Supplemental_Groups is valid in the security scope.

<a name="idp26789056"></a>
## See Also

[security](conf.ref.security.php "security"), [capabilities](conf.ref.capabilities.php "capabilities"), [user](conf.ref.user.php "user"), and [chroot](conf.ref.chroot.php "chroot")

| [Prev](config.starttls_injection_policy.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.suspend_delivery.php) |
| starttls_injection_policy  | [Table of Contents](index.php) |  suspend_delivery |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)