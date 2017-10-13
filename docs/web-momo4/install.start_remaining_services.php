<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>9.4. Start Remaining Services</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="installation">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="new_installation.php" title="Chapter 9. New Installation - All Configurations">
<link rel="prev" href="install.analytics_nodes.php" title="9.3. Configure the Analytics Nodes">
<link rel="next" href="upgrade.single_node.php" title="Chapter 10. Upgrade - Single Node">
<script xmlns:fo="http://www.w3.org/1999/XSL/Format" type="text/javascript" src="/js/jquery.js"></script>
</head>
<body>



<!-- begin header.inc-->
<link rel="stylesheet" type="text/css" href="https://support.messagesystems.com/css/styles.css" />

<div id="container-1">
	<div class="inner">
		<div id="top-login-info">
			<p>Logged in as:     <span id="username">OmniTI, Inc.</span>&nbsp;
			(<a href="https://support.messagesystems.com/logout.php">logout</a>)</p>
		</div>

		<a href="https://support.messagesystems.com/start.php">
			<img src="https://support.messagesystems.com/images/ms-white205.png" class="ms-logo" alt="Message Systems" /></a>

<!-- reverse order for float:right -->
		<div id="main-nav">
			<ul>
				<li class="nav-link last">
					<a href="https://support.messagesystems.com/start.php?show=changelog">Changelog</a></li>
				<li class="nav-link">
					<a href="https://support.messagesystems.com/docs/">Documentation</a></li>
				<li class="nav-link">
					<a href="https://support.messagesystems.com/start.php">Downloads</a></li>
			</ul>
		</div>

		<div class="clear"></div>
	</div><!--.inner-->
</div><!--#container-1-->

<div id="container-2">
	<div class="inner" id="options">
		<ul>
			<li id="search">
				<form action="https://support.messagesystems.com/docs/man.php" method="get">
					<label for="t">Search Documentation: </label>
					<input type="text" size="35" id="t" name="t"  />
					<select name="section" id="section">
					<option value="All">All</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option class='all' value="  All Momentum 3.x">  All Momentum 3.x</option>
<option value="Momentum Reference Manual (3.x)">Momentum Reference Manual (3.x)</option>
<option value="Momentum for Mobile Push Notifications">Momentum for Mobile Push Notifications</option>
<option value="Default Policy User Guide">Default Policy User Guide</option>
<option value="Adaptive Delivery User Guide">Adaptive Delivery User Guide</option>
<option value="Momentum REST Injector">Momentum REST Injector</option>
<option value="Momentum API Reference (3.x)">Momentum API Reference (3.x)</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option value="Momentum 4 Reference Manual" selected="selected">Momentum 4 Reference Manual</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option class='all' value="  All Mobile Momentum">  All Mobile Momentum</option>
<option value="Mobile Momentum Reference Manual">Mobile Momentum Reference Manual</option>
<option value="Mobile Momentum Quick Start">Mobile Momentum Quick Start</option>
<option value="Mobile Momentum Developer Guide">Mobile Momentum Developer Guide</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option class='all' value="  All Message Central 3.x">  All Message Central 3.x</option>
<option value="Message Central 3.x Reference Guide">Message Central 3.x Reference Guide</option>
<option value="User Guide for Message Central 3.x Web UI">User Guide for Message Central 3.x Web UI</option>
<option value="Message Central 3.x REST Guide">Message Central 3.x REST Guide</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option class='all' value="  All Message Scope">  All Message Scope</option>
<option value="Message Scope Reference">Message Scope Reference</option>
<option value="Quick Start Guide for Message Scope">Quick Start Guide for Message Scope</option>
<option disabled="disabled" value="----------------------------">----------------------------</option>
<option value="Momentum Reference Manual 2.2">Momentum Reference Manual 2.2</option>
					</select>
					<input type="submit" class="button" value="Go" />
					<div id="search-help-button"></div>
					<script type="text/javascript">
						$(document).ready(function  () {
							$('#search-help-button').click(function() {
							$('#search-help').slideToggle();
							});
						});
					</script>
				</form>
			</li>
			    <li id="licenses"><a href="https://support.messagesystems.com/license_summary.php">Licenses</a></li>
    <li id="clients">
      <a href="">Clients</a>
      <ul>
        <li><a class="hack" href="https://support.messagesystems.com/cs.php">Support</a></li>
        <li><a class="hack" href="https://support.messagesystems.com/edit_client.php">Add/Edit</a></li>
        <li><a class="hack" href="https://support.messagesystems.com/edit_products.php">Legal/Products</a></li>
      </ul>
    </li>
    <li id="users"><a href="https://support.messagesystems.com/edit_customer.php">Users</a></li>

		</ul>
		<div id="search-help">
			<h2>Search Help</h2>
			<p>Search for a single word or perform multi-word searches 
			by enclosing your search in quotation marks.</p>
			<p>Where you have multiple words but no quotation marks, 
			an <b>OR</b> search is performed. For example, <b>"REST Injection"</b> 
			searches for the phrase <b>"REST Injection"</b>, and, without quotation
			marks, searches for <b>REST OR Injection</b>--the operator is understood.</p>
			<h3>Warning</h3>
			<p>You must escape the following special characters: 
			<b>+ - &amp;&amp; || ! ( ) { } [ ] ^ " ~ * ? : \</b>. 
			Use the <b>\</b> character as the escape character. For example: 
			<b>B0/00-11719-46C328D4\:default\:</b></p>
			<p>You can also perform <b>AND</b> searches, for 
			example, <b>rest AND port</b> (no quotation marks)
			finds pages where both these words occur.</p>
			<p>Terms used in searches are case-insensitive but 
			operators are not. Alphabetic operators <b>must</b> 
			be in uppercase.</p>
			<p>Other operators can also be used. For more 
			information see "<a href="https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html" target="_blank">Query Parser Syntax</a>". Use of fields in searches is not currently supported.</p>
		</div>
	</div><!--.inner-->
</div><!--#container-2-->

<div id="container-3">
	<div class="inner">
<!-- end header.inc-->

  <div id="content" class="documentation">
    <!-- The $page variable is a DocBookPage object
         created by the www.xsl DocBook transformation file.
         The content method is unique for each
         DocBookPage instance. -->
    <div class="navheader"><table width="100%" summary="Navigation header">
<tr><th colspan="3" align="center">9.4. Start Remaining Services</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="install.analytics_nodes.php">Prev</a> </td>
<th width="60%" align="center">Chapter 9. New Installation - All Configurations</th>
<td width="20%" align="right"> <a accesskey="n" href="upgrade.single_node.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="install.start_remaining_services"></a>9.4. Start Remaining Services</h2></div></div></div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="start.services.analytics_nodes"></a>9.4.1. Analytics Nodes</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Start the remaining services on each of the Analytics nodes.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              You will see errors logged if you start the ETL and
              Webhooks services before the matching API endpoints are
              configured on the Analytics node(s). These are a result of
              the back-end API being unavailable and can be safely
              ignored.
            </p>
</div>
<p>
</p>
<pre class="screen">  
# You can check to see what services are currently running using:
# chkconfig --list

service msys-nginx start
service msys-app-metrics-api start
service msys-app-adaptive-delivery-api start
service msys-app-users-api start
service msys-app-webhooks-api start
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            On your Analytics nodes, you can check that the Users,
            Metrics, and Adaptive Delivery APIs are running by using
            <code class="option">netstat</code>.

</p>
<pre class="screen">
netstat -tulpn | grep 208

# Should see something like this, with a row for each API/port:
tcp        0      0 0.0.0.0:2082                0.0.0.0:*                   LISTEN      21416/nginx         
tcp        0      0 0.0.0.0:2083                0.0.0.0:*                   LISTEN      21686/node          
tcp        0      0 0.0.0.0:2084                0.0.0.0:*                   LISTEN      21856/node          
tcp        0      0 0.0.0.0:2085                0.0.0.0:*                   LISTEN      21812/node          
tcp        0      0 0.0.0.0:2086                0.0.0.0:*                   LISTEN      21756/node          
          </pre>
<p>

            If you're missing one of the ports/services, then inspect
            this log directory for the appropriate API log
            <code class="filename">/var/log/msys-nodejs/</code>.
          </p>
</li>
</ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="start.services.mta_nodes"></a>9.4.2. MTA Nodes</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1"><li class="listitem">
<p>
            Start the remaining services on each MTA node.
          </p>
<p>
</p>
<pre class="screen"># You can check to see what services are currently running using:
# chkconfig --list
service msys-app-adaptive-delivery-etl start
service msys-app-metrics-etl start
service msys-app-webhooks-etl start
service msys-riak start
service ecelerity start
service msys-nginx start
</pre>
<p>
          </p>
</li></ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="start.services.create_admin_user"></a>9.4.3. Create an Administrative User</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1"><li class="listitem">
<p>
            Create the following administrative user on the first
            Analytics node. Be sure to substitute appropriate names and
            a valid email address, and change the password. You may also
            change the username ("msys_admin") if you wish.
          </p>
<p>
</p>
<pre class="screen">
export LINE1='"username" : "admin", "password": "EDITME", "access" : "admin"'
export LINE2='"firstName" : "EDITME", "lastName" : "EDITME", "email" : "EDITME@EDITdomain.com"'
curl -XPOST -H "X-MSYS-CUSTOMER: 1" -H "Content-Type: application/json" -d \
   "{ $LINE1, $LINE2 }" http://localhost:2085/api/v1/users
</pre>
<p>
          </p>
</li></ol></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="start.services.cassandra_complete"></a>9.4.4. Complete the Cassandra Configuration</h3></div></div></div>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Modify the
            <code class="filename">populate_customer_metadata.cql</code> file on
            the <span class="bold"><strong>first</strong></span> Cassandra node
            only.
          </p>
<p>
            Edit
            <code class="filename">/opt/msys/app/users-api/cql/upgrades/V2015.01.20_02.00.00__populate_customer_metadata.cql</code>.
            Remove the <code class="filename">sending_disabled</code> column. So,
            the file should look like this:
          </p>
<p>
</p>
<pre class="screen">
copy customer_meta(customer_id) from '/tmp/customerMetaDataMigration.csv';
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Perform Cassandra schema Application-related updates.
          </p>
<p>
</p>
<pre class="screen">
export UPG=/opt/msys/app/users-api/cql/upgrades
export CQLSH=/opt/msys/3rdParty/bin/cqlsh
$CQLSH -k authentication -f $UPG/V2014.06.11_00.00.00__add_oauth_clients.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2014.12.21_00.00.00__create_user_emails.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2014.12.22_00.00.00__populate_email_users.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.01.20_01.00.00__extract_customers.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.01.20_02.00.00__populate_customer_metadata.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.04.09_00.00.00__create_unsuccessful_logins.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.04.10_00.00.00__two_factor.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.04.28_00.00.00__add_is_sso_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.04.28_00.00.00__add_tou_last_updated.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.05.21_00.00.00__create_email_verification_tokens.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.06.16_00.00.00__add_saml_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.06.17_00.00.00__add_valid_ip_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
$CQLSH -k authentication -f $UPG/V2015.06.22_00.00.00__add_last_login_column.cql 2&gt;&amp;1 &gt;&gt; cassandra_schema.log
</pre>
<p>
          </p>
</li>
<li class="listitem"><p>
            You should now be able to login to the UI by placing the IP
            address of the first Analytics node into a browser's address bar.
          </p></li>
</ol></div>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="install.analytics_nodes.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="new_installation.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="upgrade.single_node.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">9.3. Configure the Analytics Nodes </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 10. Upgrade - Single Node</td>
</tr>
</table></div>
<div class="revinfo"></div>
    <div class="clear">&nbsp;</div>
      <div id="comments">
        <!-- BEGIN DISQUS -->
        <div id="disqus_thread">
        </div>
          <script type="text/javascript">
            var disqus_shortname = 'messagesystemssupport';
            //var disqus_identifier = '(get name of page)';
            //var disqus_url = '(Get page URL)';
            var disqus_developer = 1;
    
            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
              var dsq = document.createElement('script'); 
              dsq.type = 'text/javascript'; 
              dsq.async = true;
              dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
          </script>
          <noscript>
            Please enable JavaScript to view the 
            <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
          </noscript>
          <!-- END DISQUS -->
        </div>
      <!--#comments-->
      <div class="clear">
      </div>
  </div>

		<div class="clear"></div>
	</div><!--.inner-->
</div><!--#container-3-->


<div id="container-last">
	<div class="inner">
		<div class="clear" style="height:30px;"></div>
		<div class="follow">
			<p>Follow us on:</p>
			<a href="http://www.facebook.com/messagesystems" target="_blank"><img src="https://support.messagesystems.com/images/icon-facebook.png" alt="Facebook" /></a>
			<a href="http://twitter.com/#!/MessageSystems" target="_blank"><img src="https://support.messagesystems.com/images/icon-twitter.png" alt="Twitter" /></a>
			<a href="http://www.linkedin.com/company/message-systems" target="_blank"><img src="https://support.messagesystems.com/images/icon-linkedin.png" alt="LinkedIn" /></a>
		</div>

		<center>
			<p>
				<a href="https://support.messagesystems.com/">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a href="https://support.messagesystems.com/privacy-policy.php">Privacy Policy</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a href="https://support.messagesystems.com/terms-conditions.php">Terms &amp; Conditions</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a href="http://www.messagesystems.com/" target="_blank">messagesystems.com</a>
			</p>
			<p class="copyright">Copyright &copy;2000-2017 Message Systems. All rights reserved.</p>
		</center>

		<div class="clear" style="height:20px;"></div>
	</div><!--.inner-->
</div><!--#container-last-->


<!-- google analytics -->
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>

    <script type="text/javascript">
    try {
    var pageTracker = _gat._getTracker("UA-904903-3");
    pageTracker._trackPageview();
    } catch(err) {}
    </script>
<!-- END google analytics -->

<!-- Marketo -->
<script src="https://munchkin.marketo.net/munchkin.js" type="text/javascript"></script>
<script>mktoMunchkin("356-SLD-019");</script>
<!-- End Marketo -->


</body>
</html>
