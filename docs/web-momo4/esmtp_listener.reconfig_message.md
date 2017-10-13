## 19.3. `Reconfig_Message` Option

<a class="indexterm" name="idp2417920"></a>

Inbound SMTP connections check if the configuration has changed between messages and while handling the RSET command. If the connection discovers that it is using an old configuration, a 421 code will be returned in response to the MAIL FROM or RSET command that triggered the check, and the connection will be closed. The message that accompanies the 421 code is configurable via the `Reconfig_Message` setting in the ESMTP_Listener scope, and defaults to "4.3.2 Reconfiguration in progress".

Issuing the console command **config reload**        while receiving email will trigger this message.
