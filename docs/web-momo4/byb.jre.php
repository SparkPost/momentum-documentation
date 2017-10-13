<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>6.9. Java Runtime Environment (JRE)</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="before you begin">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="before_you_begin.php" title="Chapter 6. Before You Begin">
<link rel="prev" href="byb.set_hostnames.php" title="6.8. Setting Hostnames">
<link rel="next" href="byb.root_and_vertica_dba.php" title="6.10. Creating root and vertica_dba Accounts">
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
<tr><th colspan="3" align="center">6.9. Java Runtime Environment (JRE)</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="byb.set_hostnames.php">Prev</a> </td>
<th width="60%" align="center">Chapter 6. Before You Begin</th>
<td width="20%" align="right"> <a accesskey="n" href="byb.root_and_vertica_dba.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="byb.jre"></a>6.9. Java Runtime Environment (JRE)</h2></div></div></div>
<a class="indexterm" name="idp481328"></a><p>
      You must have an official Oracle Java 7 release installed, as
      <span class="bold"><strong>Java 8 is not supported for use with
      Cassandra and Momentum</strong></span>. Run the following command to
      ensure that the version of Java installed on each Platform node is
      compatible with Cassandra.
    </p>
<p>
</p>
<pre class="screen">
java -version
</pre>
<p>
    </p>
<p>
      Your results should look something like this:
    </p>
<p>
</p>
<pre class="screen">
java version "1.7.0_75"
Java(TM) SE Runtime Environment (build 1.7.0_75-b13)
Java HotSpot(TM) 64-Bit Server VM (build 24.75-b04, mixed mode)    
</pre>
<p>
    </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
        OpenJDK is not supported, and neither are variants such as IBM
        Java.
      </p>
</div>
<p>
      If you use OpenJDK, you will receive the following installation
      error:
    </p>
<pre class="screen">
Unable to install packages due to:
No package matched to upgrade: msys-cassandra
Error: msys-cassandra conflicts with 
1:java-1.7.0-openjdk-1.7.0.51-2.4.4.1.el6_5.x86_64
</pre>
<p>
      If the OpenJDK package is already installed, run <strong class="userinput"><code>rpm
      -qa | grep openjdk</code></strong> to determine the OpenJDK package
      names. Then execute <strong class="userinput"><code>yum remove
      <em class="replaceable"><code>package_name</code></em></code></strong> for each
      package.
    </p>
<p>
      If you need to install Java 7, follow the steps below.
    </p>
<div class="orderedlist"><ol class="orderedlist" type="1">
<li class="listitem">
<p>
          Download and install
          <a class="link" href="http://www.oracle.com/technetwork/java/javase/downloads/java-archive-downloads-javase7-521261.html#jre-7u80-oth-JPR" target="_top">
          Sun Java JRE 7</a> for 64 bit Linux.
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            Oracle JRE 1.7 is approaching its end-of-life status. If the
            above link does not work, or if you cannot find an
            appropriate version to download, then run the following
            command to download Java 1.7.0_51. This version, although a
            bit old, is still usable.
          </p>
<p>
</p>
<pre class="screen">
wget http://javadl.sun.com/webapps/download/AutoDL?BundleId=83375 -O jdk-7u51-linux-x64.rpm
</pre>
<p>
          </p>
</div>
</li>
<li class="listitem"><p>
          Run <strong class="userinput"><code>sudo rpm -Uvh
          <em class="replaceable"><code>jre-7u51-linux-x64</code></em>.rpm</code></strong>
          to install the RPM.
        </p></li>
<li class="listitem">
<p>
          Ensure that Cassandra can locate the installed version of
          Java. Be sure to adjust the pathnames based upon the version
          of Java you are using and where you have installed it.
        </p>
<p>
</p>
<pre class="screen">
alternatives --install <em class="replaceable"><code>/usr/bin/java java /usr/java/jre1.7.0_51/bin/java 2</code></em>
alternatives --config java
</pre>
<p>
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            Simply setting the PATH environment variable will not work.
          </p>
</div>
<p>
          You should see an interface similar to the one below.
        </p>
<p>
</p>
<pre class="screen">
There are 3 programs which provide 'java'.

  Selection    Command
-----------------------------------------------
*  1           /opt/jdk1.7.0_60/bin/java
 + 2           /opt/jdk1.7.0_72/bin/java
   3           /usr/java/jrel.7.0_51/bin/java

Enter to keep the current selection[+], or type selection number:
</pre>
<p>
        </p>
</li>
<li class="listitem">
<p>
          Select the version of Java you just installed (in our example,
          this is option #3).
        </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
            If your results display a single option, then select that
            option.
          </p>
</div>
</li>
</ol></div>
<p>
      For more information, contact Message Systems Professional
      Services.
    </p>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="byb.set_hostnames.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="before_you_begin.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="byb.root_and_vertica_dba.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">6.8. Setting Hostnames </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 6.10. Creating <code class="filename">root</code> and <code class="filename">vertica_dba</code>
        Accounts</td>
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
