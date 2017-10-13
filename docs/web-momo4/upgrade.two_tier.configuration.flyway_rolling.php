<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>11.11. Prepare and Run Flyway</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="upgrade.two_tier_configuration_rolling.php" title="Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node">
<link rel="prev" href="upgrade.two_tier.preparation.upgrade_vertica_rolling.php" title="11.10. Upgrade Vertica on the Analytics Nodes">
<link rel="next" href="upgrade.two_tier.preparation.rpms_rolling.php" title="11.12. Upgrade Remaining RPMs on Analytics Nodes">
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
<tr><th colspan="3" align="center">11.11. Prepare and Run Flyway</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="upgrade.two_tier.preparation.upgrade_vertica_rolling.php">Prev</a> </td>
<th width="60%" align="center">Chapter 11. Rolling Upgrade - Two-Tier Configuration and Combined Node</th>
<td width="20%" align="right"> <a accesskey="n" href="upgrade.two_tier.preparation.rpms_rolling.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="upgrade.two_tier.configuration.flyway_rolling"></a>11.11. Prepare and Run Flyway</h2></div></div></div>
<p>
      Configure the tables for running the Flyway data migration tool on
      the <span class="bold"><strong>first Analytics node</strong></span>.
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
          Baseline the Flyway schema table.
        </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
              Clean out the
              <code class="filename">/var/tmp/vertica-migrations</code> folder.
            </p>
<p>
</p>
<pre class="screen">
rm -rf /var/tmp/vertica-migrations/*
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Copy the new schema files into the
              <code class="filename">vertica-migrations</code> folder.
            </p>
<p>
</p>
<pre class="screen">
cp /opt/msys/app/db/schema/* /var/tmp/vertica-migrations/
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Truncate the existing <code class="filename">schema_version</code>
              table.
            </p>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/vsql -U vertica_dba -c "TRUNCATE TABLE momo.schema_version;"
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Run the Flyway baseline, which adds a &lt;&lt; BASELINE
              &gt;&gt; record to the table.
            </p>
<p>
</p>
<pre class="screen">
/opt/msys/app/db/flyway baseline
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Update the baseline record to point to the current date
              formatted like the Flyway migration versions we use.
            </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
                The version should be formatted
                <code class="literal">YYYY.MM.DD.HH.MM.SS</code>.
              </p>
</div>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/vsql -U vertica_dba -c "UPDATE momo.schema_version SET version='2014.09.20.00.00.00' \
   WHERE version=1; COMMIT;"
</pre>
<p>
            </p>
</li>
</ol></div>
</li>
<li class="listitem">
<p>
          Run the Flyway data migration tool.
        </p>
<p>
</p>
<pre class="screen">
/opt/msys/app/db/flyway migrate -locations=filesystem:/var/tmp/vertica-migrations
</pre>
<p>
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            Flyway will run a series of scripts, after which you may
            receive the warning Error Code: 6100. This warning is about
            best practices from Vertica and can safely be ignored as it
            does not apply once the scripts have run.
          </p>
</div>
</li>
<li class="listitem">
<p>
          Access Vertica via vsql.
        </p>
<p>
</p>
<pre class="screen">
/opt/vertica/bin/vsql -U vertica_dba
</pre>
<p>
        </p>
<div class="orderedlist"><ol class="orderedlist" type="a">
<li class="listitem">
<p>
              Fix the template column.
            </p>
<p>
</p>
<pre class="screen">
set search_path='momo';
\i /opt/msys/app/db/scripts/V2014.11.26_15.45.00__rename_template_column.sql
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Fix webhook batch status grants.
            </p>
<p>
</p>
<pre class="screen">
grant select, insert on momo.webhook_batch_status to vertica_api;
</pre>
<p>
            </p>
</li>
<li class="listitem">
<p>
              Delete the <code class="literal">tdate_month</code> column.
            </p>
<p>
</p>
<pre class="screen">
\i /opt/msys/app/db/scripts/V2015.01.27_14.35.00__drop_tdate_month.sql
</pre>
<p>
            </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
                This command may take a while to complete, but it must
                be finished before you can proceed.
              </p>
</div>
</li>
<li class="listitem">
<p>
              Quit vsql.
            </p>
<p>
</p>
<pre class="screen">
\q
</pre>
<p>
            </p>
</li>
</ol></div>
</li>
</ol></div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="upgrade.two_tier.preparation.upgrade_vertica_rolling.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="upgrade.two_tier_configuration_rolling.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="upgrade.two_tier.preparation.rpms_rolling.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">11.10. Upgrade Vertica on the Analytics Nodes </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 11.12. Upgrade Remaining RPMs on Analytics Nodes</td>
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
