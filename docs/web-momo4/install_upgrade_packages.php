<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Chapter 8. Install / Upgrade the Packages</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="p.installing.php" title="Part II. Installing Momentum">
<link rel="prev" href="download_bundle.php" title="Chapter 7. Download the Software Bundle and Prepare">
<link rel="next" href="new_installation.php" title="Chapter 9. New Installation - All Configurations">
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
<tr><th colspan="3" align="center">Chapter 8. Install / Upgrade the Packages</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="download_bundle.php">Prev</a> </td>
<th width="60%" align="center">Part II. Installing Momentum</th>
<td width="20%" align="right"> <a accesskey="n" href="new_installation.php">Next</a>
</td>
</tr>
</table></div>
<div class="chapter">
<div class="titlepage"><div><div><h2 class="title">
<a name="install_upgrade_packages"></a>Chapter 8. Install / Upgrade the Packages</h2></div></div></div>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
      <span class="bold"><strong>The installation and upgrade instructions
      in Chapters 8 through 11 are only applicable in their entirety 
      for Momentum 4.x releases prior to 4.2.28.</strong></span>
      For release 4.2.28 and beyond, please refer to the installation
      and upgrade PDF documents available under the desired release's
      folder on the Message Systems Support website's
      <a class="link" href="https://support.messagesystems.com/start.php/" target="_top">Downloads page</a>.
      If you are uncertain as to which document is applicable to your
      situation, please contact your technical support representative.
    </p>
</div>
<p>
    Ensure that you are in the
    <code class="filename">/var/tmp/momentum-4.2.1.50062</code> directory, then install
    the appropriate packages on each node type, as directed in the following steps.
  </p>
<p>
    <span class="bold"><strong>NOTE:</strong></span> If you are installing a
    <span class="bold"><strong>three node combined (or similar) topology</strong></span>,
    each node serves all roles: each node is an MTA node <span class="bold"><strong>and</strong></span>
    a Cassandra node <span class="bold"><strong>and</strong></span> an Analytics node.
  </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem">
<p>
        First MTA Node - Identify which server will be the first MTA
        node you are installing. Install these packages only on that
        node.
      </p>
<p>
</p>
<pre class="screen">
yum install -y --config momentum.repo --enablerepo momentum msys-ecelerity-config-server msys-role-db
</pre>
<p>
      </p>
</li>
<li class="listitem">
<p>
        MTA Nodes - For every node you designate as an MTA (including
        the first node), perform the following:
      </p>
<p>
</p>
<pre class="screen">
yum install -y --config momentum.repo --enablerepo momentum \
  msys-role-mta msys-ecelerity-engagement-proxy msys-app-webhooks-cql \
  msys-app-webhooks-etl msys-app-metrics-etl msys-app-adaptive-delivery-etl
</pre>
<p>
      </p>
</li>
<li class="listitem">
<p>
        Cassandra Nodes - For every Cassandra node that is part of a
        Cassandra cluster, run the following commands. If you are
        combining MTA and Cassandra roles, then install packages on all
        MTA nodes.
      </p>
<p>
</p>
<pre class="screen">
yum install -y --config momentum.repo --enablerepo momentum msys-role-cassandra
</pre>
<p>
      </p>
</li>
<li class="listitem">
<p>
        Analytics Nodes - For every node that you have designated as one
        that will be an Analytics node, perform the following:
      </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
            Set the <code class="literal">IS_VERTICA_AWS</code> environment
            variable to distinguish between AWS and non-AWS
            environments. This environment variable indicates whether or
            not the current node is in AWS and running the HP Vertica
            AMI.
          </p>
<p>
            If you ARE installing Vertica in AWS then set
            <code class="literal">export IS_VERTICA_AWS=1</code>
          </p>
<p>
            If you are NOT installing Vertica in AWS then set
            <code class="literal">export IS_VERTICA_AWS=0</code>
          </p>
</li>
<li class="listitem">
<p>
            Install the appropriate packages, depending on whether or
            not you are installing Vertica in AWS:
          </p>
<pre class="screen">
if [ "$IS_VERTICA_AWS" == "1" ]; then
    yum install -y --config momentum.repo --enablerepo momentum --exclude=msys-vertica \
      msys-role-application msys-app-adaptive-delivery-db \
      msys-app-adaptive-delivery-api msys-app-webhooks-api msys-app-webhooks-db
else
    yum install -y --config momentum.repo --enablerepo momentum \
      msys-role-analytics msys-app-adaptive-delivery-db \
      msys-app-adaptive-delivery-api msys-app-webhooks-api msys-app-webhooks-db
fi
</pre>
<p>
            If you have a <span class="bold"><strong>two-tier configuration
            (or similar) topology</strong></span>, run this additional command.
            Do <span class="bold"><strong>not</strong></span> run this command if you
            have a <span class="bold"><strong>three node combined (or similar) topology</strong></span>.
          </p>
<pre class="screen">
# Remove an ETL that is N/A for Analytics nodes in two-tier configurations:
yum remove -y --config momentum.repo --enablerepo momentum msys-app-adaptive-delivery-etl
</pre>
</li>
<li class="listitem">
<p>
            Create a file called <code class="filename">silent_install</code> by running
            the below script on the first Analytics or Combined node, but only
            if you are not installing in an AWS environment.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              This step ONLY needs to be done if you are NOT installing
              in AWS.
            </p>
</div>
<p>
</p>
<pre class="screen">
# ONlY DO THIS IF YOU ARE NOT INSTALLING IN AWS
# Skip this step if you are installing in AWS
cd `cat /var/tmp/inst.dir`
export VERT_CONF='/opt/vertica/config'
export RPMFILE=`/bin/ls $PWD/packages/msys-vertica* | fgrep -v client`
cat &lt;&lt; EOF &gt; ../silent_install
accept_eula = True
data_dir = /var/db/vertica
direct_only = True
failure_threshold = FAIL
license_file = $VERT_CONF/licensing/Message_Systems_vertica.license.key
rpm_file_name = $RPMFILE
spread_subnet = default
vertica_dba_group = verticadba
vertica_dba_user = vertica_dba
vertica_dba_user_dir = /var/db/vertica
vertica_dba_user_password_disabled = True
EOF
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Configure an environment variable on the first Analytics
            or Combined node prior to running the Vertica installer there.
          </p>
<p><a name="install_upgrade_packages.vertica_ips"></a>
            Use the <span class="bold"><strong>IP addresses</strong></span> for
            each Vertica (Analytics) node in your deployment.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              Once you assign IP addresses to a Vertica host you can’t
              change them.
            </p>
</div>
<p>
</p>
<pre class="screen">
export SERVERS=<em class="replaceable"><code>1.2.3.4</code></em>,<em class="replaceable"><code>1.2.3.5</code></em>,<em class="replaceable"><code>1.2.3.6</code></em>
</pre>
<p>
          </p>
</li>
<li class="listitem">
<p>
            Run the Vertica installer once, on the first node. If the topology has mutiple
            Analytics or Combined nodes, enter the password for them if prompted to do so.
          </p>
<p>
            <span class="bold"><strong>NOTE:</strong></span> During the install, you can ignore any messages of
            <code class="literal">HINT</code> level listed under
            "Prerequisites not fully met ...".
            Just confirm receipt of a message containing text "System prerequisites passed."
          </p>
<p>
</p>
<pre class="screen">
if [ "$IS_VERTICA_AWS" == "1" ]; then
    export VERT_CONF='/opt/vertica/config'
    export VERT_BIN='/opt/vertica/bin'
    export VERT_SBIN='/opt/vertica/sbin'
  
    $VERT_SBIN/install_vertica -s $SERVERS --point-to-point --dba-user-password-disabled \
       --dba-user vertica_dba --dba-user-home /var/db/vertica --dba-group verticadba --data-dir /var/db/vertica/data \
       --failure-threshold FAIL --accept-eula --license $VERT_CONF/licensing/vertica_community_edition.license.key
else
    export VERT_BIN='/opt/vertica/bin'
    export VERT_SBIN='/opt/vertica/sbin'
    $VERT_SBIN/install_vertica -z ../silent_install -s $SERVERS \
      2&gt;&amp;1 | tee vertica_install.log
fi
</pre>
<p>
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              The user <code class="option">vertica_dba</code> should now be
              available. If it is not, please contact support.
            </p>
</div>
</li>
<li class="listitem">
<p>
            If you are using the Vertica Management Console, then skip
            this step. Otherwise, turn off the vertica-agent by
            performing these steps on all Analytics or Combined nodes:
          </p>
<p>
</p>
<pre class="screen">
# remove unused or conflicting services from all vertica nodes
/sbin/chkconfig vertica_agent off
/etc/init.d/vertica_agent stop
rm -f /etc/init.d/vertica_agent
if [ "$IS_VERTICA_AWS" == "0" ]; then
    /sbin/chkconfig verticad off
    rm -f /etc/init.d/verticad
fi
</pre>
<p>
          </p>
</li>
</ol></div>
</li>
</ul></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="download_bundle.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="p.installing.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="new_installation.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">Chapter 7. Download the Software Bundle and Prepare </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> Chapter 9. New Installation - All Configurations</td>
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
