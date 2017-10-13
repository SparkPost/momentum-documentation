<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>71.3. adaptive – Adaptive Delivery</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<meta name="generator" content="DocBook XSL Stylesheets V1.78.1">
<meta name="keywords" content="Momentum 4">
<link rel="home" href="index.php" title="Momentum 4 Reference Manual">
<link rel="up" href="modules.php" title="Chapter 71. Modules Reference">
<link rel="prev" href="modules.ac_auth.php" title="71.2. ac_auth – Authentication Handler">
<link rel="next" href="modules.alerting.php" title="71.4. alerting – Send Alerting Emails">
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
<tr><th colspan="3" align="center">71.3. adaptive – Adaptive Delivery</th></tr>
<tr>
<td width="20%" align="left">
<a accesskey="p" href="modules.ac_auth.php">Prev</a> </td>
<th width="60%" align="center">Chapter 71. Modules Reference</th>
<td width="20%" align="right"> <a accesskey="n" href="modules.alerting.php">Next</a>
</td>
</tr>
</table></div>
<div class="section">
<div class="titlepage"><div><div><h2 class="title" style="clear: both">
<a name="modules.adaptive"></a>71.3. adaptive – Adaptive Delivery</h2></div></div></div>
<a class="indexterm" name="idp13975168"></a><p>
    Adaptive Delivery (AD) provides the ability to dynamically tune
    parameters to help manage your outbound mail traffic in a way that
    is more in line with the best practices in use by receivers. AD also
    helps maintain and improve your sending reputation and makes better
    use of system resources. Using AD, you can preempt delivery threats
    by taking appropriate action. For example, you can temporarily
    suspend delivery to a domain if it looks like mail has been blocked,
    thereby allowing time to diagnose the problem and implement
    corrective measures.
  </p>
<p>
    This module is the enabling component of AD. It provides a bridge
    between the core configuration system and the dynamic rule sets that
    are at the heart of AD.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      To use this module you must have AD enabled in your license.
    </p>
</div>
<p>
    In addition to suspended deliveries, responses from receivers can
    trigger other actions such as throttling and reduced deliveries.
    These actions are triggered by the rules contained in the
    <code class="filename">adaptive_rules.lua</code> file. A single response may
    immediately trigger one action, while a number of responses within a
    specified time frame may be required to trigger another. You can
    look at the internal comments in the
    <code class="filename">/opt/msys/ecelerity/libexec/scriptlets/msys/adaptive_rules.lua</code>
    file to determine which actions are taken under what circumstances.
  </p>
<p>
    As a proactive measure, the IP Warmup component of AD will factor in
    the age of the binding and adjust shaping parameters to
    automatically scale those parameters up according to the preferred
    schedule of the major receivers.
  </p>
<p>
    AD is intended to be largely self-managed and auto-tuning, but still
    allows you to adjust a number of parameters to influence its
    decisions.
  </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
      In a cluster configuration, suspension of a binding can result in
      excessive "#mmoves" between nodes. To avoid this possibility
      always assign a <code class="option">duravip_preference</code> for any
      bindings used with the adaptive module. For more information about
      mmove and <span class="trademark">DuraVIP</span>™, see
      <a class="xref" href="cluster.config.duravip.php" title="Chapter 27. DuraVIP™: IP Fail over">Chapter 27, <i><span class="trademark">DuraVIP</span>™: IP Fail over</i></a>.
    </p>
<p>
      There is no upper limit to the number of bindings that can be in a
      binding group. When Adaptive Delivery is enabled, a large number
      of bindings in a binding group will affect performance since
      significant CPU time is spent checking for suspended bindings. For
      this reason, when using the adpative module, the recommended best
      practice is not to exceed 32 bindings per binding group.
    </p>
<p>
      The adaptive module makes heavy use of throttles; therefore, the
      <code class="option">siv_throttle_cache_size</code> default is
      <code class="literal">1000</code>.
    </p>
</div>
<p>
    Whenever the adaptive module makes an adjustment to delivery
    parameters, it logs that information to the paniclog with a prefix
    of <code class="literal">adaptive:</code>. This module can also send an email
    to a configurable email address, and that address can be specified
    at the domain level, although it is typically set either globally or
    at the binding or binding group level.
  </p>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.adaptive.configuration"></a>71.3.1. Configuration</h3></div></div></div>
<p>
      The adaptive module must be included in the
      <code class="literal">ecelerity.conf</code> file and requires the
      <a class="link" href="modules.inbound_audit.php" title="71.41. inbound_audit – Inbound traffic analytics">inbound_audit</a>
      module. The following is an example configuration:
    </p>
<div class="example">
<a name="modules.adaptive.configuration.example"></a><p class="title"><b>Example 71.4. adaptive Configuration</b></p>
<div class="example-contents"><pre class="programlisting">
adaptive_enabled = true
adaptive_notification_interval = 5
adaptive_adjustment_interval = 10

adaptive  {
  suspend_sweep_interval = 5
  operational_log_level = "debug"
  jlog_file = "jlog:///var/log/ecelerity/adaptive.rt=&gt;ad_stats"
  enable_jlog = false
}

alerting {}

scriptlet "scriptlet" {
  # Add the Lua adaptive script
  script "adaptive" {
    source = "msys.adaptive"
  }
  ...
}

inbound_audit {
  monitors = ("300,6")
}
</pre></div>
</div>
<br class="example-break">
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.adaptive.options.adaptive.scope"></a>71.3.2. Options Valid in the <code class="option">adaptive_scope</code>
</h3></div></div></div>
<p>
      This section defines the configuration options that are specific
      to the adaptive module. These options are valid in the adaptive
      module scope.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt>
<a name="modules.adaptive.ad_response_rule_series_prefix"></a><span class="term">
          ad_response_rule_series_prefix
        </span>
</dt>
<dd>
<p>
            When evaluating the trigger of a response rule, the event
            counts are kept in a cluster-wide, named series. At start
            up, the adaptive module creates a number of named series by
            searching over all adaptive rules (both system and custom
            rules, if applicable). If a rule uses
            <em class="replaceable"><code>count/series</code></em> as its trigger, a
            series with the name
            <em class="replaceable"><code>value_of_this_option</code></em>_<em class="replaceable"><code>suffix</code></em>
            is created. <em class="replaceable"><code>suffix</code></em> is the
            interval size used by the series and is computed as
            <em class="replaceable"><code>period</code></em>/<em class="replaceable"><code>interval</code></em>
            + 1. <em class="replaceable"><code>interval</code></em> is the number of
            intervals used by the series.
          </p>
<p>
            The default value is <code class="literal">ADRR_series</code>.
          </p>
</dd>
<dt>
<a name="modules.adaptive.adaptive_cache_size"></a><span class="term">
          adaptive_cache_size
        </span>
</dt>
<dd>
<p>
            Specify the adaptive cache size. The value specifies the
            number of entries <span class="emphasis"><em>not</em></span> the size of the
            cache in bytes. If you reduce the cache size you will have
            to restart ecelerity for the change to take effect. Default
            value is <code class="literal">1048576</code>.
          </p>
<p>
            Depending on the number of bindings in your configuration
            and the number of domains being delivered to, the default
            value for this option may be too small. For a detailed
            discussion of this topic see
            <a class="link" href="https://support.messagesystems.com/docs/web-ad/ad.troubleshooting.console.php" target="_top">Using
            the System Console</a>.
          </p>
</dd>
<dt>
<a name="modules.adaptive.adaptive_cache_ttl"></a><span class="term">
          adaptive_cache_ttl
        </span>
</dt>
<dd><p>
            Specify the time to live for the adaptive cache. Default
            value is <code class="literal">43200</code> seconds.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_manage_options"></a><span class="term">
          adaptive_manage_options
        </span>
</dt>
<dd>
<p>
            This option is required in case an unmanaged option is used
            by a new AD rule action. Options that are not managed by
            default are:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                idle_timeout
              </p></li>
<li class="listitem"><p>
                ehlo_timeout
              </p></li>
<li class="listitem"><p>
                mailfrom_timeout
              </p></li>
<li class="listitem"><p>
                rcptto_timeout
              </p></li>
<li class="listitem"><p>
                body_timeout
              </p></li>
<li class="listitem"><p>
                rset_timeout
              </p></li>
<li class="listitem"><p>
                max_recipients_per_batch
              </p></li>
<li class="listitem"><p>
                max_resident_active_queue
              </p></li>
</ul></div>
<p>
            Managing an option that is not managed by default will not
            improve performance; it will degrade performance. It is
            harmless to manage options that are managed by default.
            Managed options are shown in
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_unmanage_options">
          adaptive_unmanage_options
        </a>.
          </p>
</dd>
<dt>
<a name="modules.adaptive.adaptive_stats_period"></a><span class="term">
          adaptive_stats_period
        </span>
</dt>
<dd><p>
            Specify the period, in seconds, of the sliding window for
            the <code class="literal">audit_series</code> of the adaptive
            statistics. Default value is <code class="literal">3600</code>
            seconds.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_unmanage_options"></a><span class="term">
          adaptive_unmanage_options
        </span>
</dt>
<dd>
<p>
            To reduce overhead, you can unmanage options that are
            managed by default. The options managed by default are:
          </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
                max_outbound_connections
              </p></li>
<li class="listitem"><p>
                max_deliveries_per_connection
              </p></li>
<li class="listitem"><p>
                retry_interval
              </p></li>
<li class="listitem"><p>
                max_retry_interval
              </p></li>
<li class="listitem"><p>
                max_retries
              </p></li>
<li class="listitem"><p>
                outbound_throttle_messages
              </p></li>
</ul></div>
<p>
            Unmanage an option in the following way:
          </p>
<pre class="programlisting">
adaptive_unmanage_options = ("outbound_throttle_messages")
</pre>
<p>
            If you are unmanaging a number of options, use spaces
            between options. Only unmanage options that are unused. It
            is harmless to unmanage options that are unmanaged by
            default.
          </p>
</dd>
<dt>
<a name="modules.adaptive.backing_store_connect_timeout"></a><span class="term">
          backing_store_connect_timeout
        </span>
</dt>
<dd><p>
            Specify the amount of time, in seconds, that the adaptive
            module will wait for a connection to the backing store
            server. This is the connection phase only. Default value is
            <code class="literal">5</code> seconds.
          </p></dd>
<dt>
<a name="modules.adaptive.backing_store_timeout"></a><span class="term">
          backing_store_timeout
        </span>
</dt>
<dd><p>
            Specify the amount of time, in seconds, that the adaptive
            module will wait for a response from the adaptive backing
            store. Default value is <code class="literal">5</code> seconds.
          </p></dd>
<dt>
<a name="modules.adaptive.binding_domain_cache_max_ttl"></a><span class="term">
          binding_domain_cache_max_ttl
        </span>
</dt>
<dd><p>
            Specify the time to live (TTL), in seconds, for the
            binding::domain cache. When a record expires, the associated
            AD parameters still stay in memory. When the same
            binding::domain is referenced again, a new record will be
            inserted and at the same time, the AD parameters are
            refreshed from the Riak data store. Default value is
            <code class="literal">86400</code> seconds.
          </p></dd>
<dt>
<a name="modules.adaptive.binding_domain_cache_size"></a><span class="term">
          binding_domain_cache_size
        </span>
</dt>
<dd><p>
            Specify the number of entries in the binding::domain cache.
            The name of this cache is
            <code class="literal">adaptive_bd_cache</code>. Use the ec_console
            <span class="command"><strong>cache stat</strong></span> command to inspect this cache.
            Default value is <code class="literal">999999</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.bounce_sweep_interval"></a><span class="term">
          bounce_sweep_interval
        </span>
</dt>
<dd>
<p>
            Specify how often, in seconds, to perform a sweep that
            checks the per binding/domain bounce rate and FBL rate and
            determine if there should be suspensions. Default value is
            <code class="literal">3600</code> seconds. Set to <code class="literal">0</code>
            to disable.
          </p>
<div class="note">
<h3 class="title">Note</h3>
<p>
              The notation <code class="literal">binding::domain</code> means the
              domain within the specified binding scope. Note that sweep
              rules can also be applied to a global scope or to a domain
              scope within the global scope. Nevertheless, these scopes
              are still <code class="literal">binding::domain</code>
              scopes—where there is no explicit binding, the
              <code class="literal">default</code> binding is understood.
            </p>
<p>
              A value of <code class="literal">0</code> will not prevent
              suspensions that are in response to specific transient or
              permanent failure errors received from the receiver.
            </p>
</div>
</dd>
<dt>
<a name="modules.adaptive.data_store"></a><span class="term">
          data_store
        </span>
</dt>
<dd>
<p>
            Identifies the IP/Port of the Riak servers, which are used
            as the data store for adaptive parameters.
            <code class="option">data_store</code> is an array with the default
            value of <code class="literal">("http://127.0.0.1:8098")</code>.
          </p>
<p>
            If you are using LevelDB as your backing store, this option
            is not applicable. See
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_backstore_leveldb">
          adaptive_backstore_leveldb
        </a>
          </p>
<p>
            During the installation of a cluster, the installer installs
            Riak on all nodes, giving you the benefit of a distributed
            installation. Additional redundancy can be gained by adding
            the public IP address of these nodes to the
            <code class="option">data_store</code> option.
          </p>
<p>
            For example, given the following nodes in a cluster:

</p>
<pre class="screen">
mta1 192.168.1.10
mta2 192.168.1.11
mta3 192.168.1.12
mgr  192.158.1.13
</pre>
<p>

            The preferred value for <code class="option">data_store</code> is

</p>
<pre class="screen">
("http://127.0.0.1:8098" "http://192.168.1.10:8098" "http://192.168.1.11:8098"
"http://192.168.1.12:8098" "http://192.168.1.13:8098")
</pre>
<p>

            where the first item in the list is the "preferred" URL
            (i.e. local URL). When the adaptive module is configured in
            this way, it is important that all nodes see the same set of
            data no matter which URL is being used to access the data.
            To achieve this, all Riak nodes must be joined together as
            described in
            <a class="xref" href="cluster.riak.configuration.php#cluster.riak.configuration.checking" title="16.7.3. Checking Riak Cluster Communication">Section 16.7.3, “Checking Riak Cluster Communication”</a>.
          </p>
<p>
            In situations where the adaptive module cannot connect to
            the "preferred" URL, it will iterate through the list to
            find a server that it can connect to. The last connected
            server will be reused until it no longer responds or until
            the next time the local parameters are being backed up. (The
            "preferred" server will be reset to the first one and the
            interval between backups is specified by
            <a class="xref" href="modules.adaptive.php#modules.adaptive.data_store_sync_interval">
          data_store_sync_interval
        </a>.)
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              The naming scheme for a Riak ID uses ‘:’ as a
              separator. For this reason you must not use colons in
              binding names.
            </p>
</div>
</dd>
<dt>
<a name="modules.adaptive.data_store_sync_interval"></a><span class="term">
          data_store_sync_interval
        </span>
</dt>
<dd><p>
            Specify how often, in seconds, to synchronize the tables
            stored in memory with the database backing store. Default
            value is <code class="literal">3600</code> seconds.
          </p></dd>
<dt>
<a name="modules.adaptive.enable_bounce_stats"></a><span class="term">
          enable_bounce_stats
        </span>
</dt>
<dd><p>
            Whether or not to consolidate bounce statistics hourly. This
            operation can consume resources so turn this feature off if
            you are not using it. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.enable_fbl_stats"></a><span class="term">
          enable_fbl_stats
        </span>
</dt>
<dd><p>
            Whether or not to consolidate FBL statistics hourly. This
            operation can consume resources so turn this feature off if
            you are not using it. Default value is
            <code class="literal">true</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.enable_jlog"></a><span class="term">
          enable_jlog
        </span>
</dt>
<dd><p>
            Whether or not to enable logging of changes in status,
            suspension and other configuration changes. Default value is
            <code class="literal">false</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.enable_logging"></a><span class="term">
          enable_logging
        </span>
</dt>
<dd><p>
            If this option is set to <code class="literal">false</code>, the
            operational details will not be logged at all. Default value
            is <code class="literal">true</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.fbl_stats_monitor"></a><span class="term">
          fbl_stats_monitor
        </span>
</dt>
<dd><p>
            Create a monitoring window of "window-size, seconds long"
            and maintain the history for the specified number of
            windows. This option is used in conjunction with the
            <code class="option">adaptive_fbl_volume_threshold</code> and
            <code class="option">adaptive_attempt_threshold</code> options. These
            options are discussed in
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_fbl_volume_threshold">
          adaptive_fbl_volume_threshold
        </a>.
            Default value is <code class="literal">14400,6</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.fbl_stats_series"></a><span class="term">
          fbl_stats_series
        </span>
</dt>
<dd><p>
            Specify the name of a persisted named series to be used to
            hold the FBL statistics for all binding::domain
            combinations. The statistics stored in this series are a
            collection of key/value pairs. TheVformat uses the following
            convention:
            <em class="replaceable"><code>binding_name:domain_name</code></em>:fbl:<em class="replaceable"><code>fbl_category</code></em>
            – the total count of FBL feedbacks with this FBL. FBL
            category names vary according to ISP category. Default value
            is <code class="literal">FBL_stats</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.fbl_total_series"></a><span class="term">
          fbl_total_series
        </span>
</dt>
<dd><p>
            Specify the name of a persisted named series to be used to
            hold the total delivery count for all binding::domain
            combinations. This series shares the size monitor window/
            interval with <code class="option">fbl_stats_series</code>. The
            statistics stored in this series are a collection of
            key/value pairs. The format uses the following convention:
            <em class="replaceable"><code>binding_name:domain_name:total_count</code></em>.
            Default value is <code class="literal">FBL_total</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.jlog_file"></a><span class="term">
          jlog_file
        </span>
</dt>
<dd><p>
            Define the location of the jlog adaptive files. Default
            value is
            <code class="filename">jlog:///var/log/adaptive/adaptive.rt=&gt;ad_stats</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.log_base"></a><span class="term">
          log_base
        </span>
</dt>
<dd><p>
            Define the location of the adaptive logs. Default value is
            <code class="filename">/var/log/ecelerity/adaptive</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.operational_log_level"></a><span class="term">
          operational_log_level
        </span>
</dt>
<dd><p>
            Define the log level of the AD module. The different log
            levels are defined in
            <a class="xref" href="conf.ref.debug_flags.php" title="debug_flags"><span class="refentrytitle">debug_flags</span></a>. The setting of this
            option does not affect paniclog events. Default value is
            <code class="literal">NOTICE</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.outbound_throttle_messages_monitor"></a><span class="term">
          outbound_throttle_messages_monitor
        </span>
</dt>
<dd><p>
            Specify the "window" of the outbound throttle audit series.
            This option implements cluster-wide throttle behavior for a
            binding::domain when its <code class="option">adaptive_scope</code> is
            global. Default value is <code class="literal">(3,20)</code>,
            indicating twenty, three-second windows.
          </p></dd>
<dt>
<a name="modules.adaptive.outbound_throttle_messages_series"></a><span class="term">
          outbound_throttle_messages_series
        </span>
</dt>
<dd><p>
            Specify the name of the outbound throttle messages series.
            Default name is <code class="literal">OBTM_Series</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.split_logs_by_binding"></a><span class="term">
          split_logs_by_binding
        </span>
</dt>
<dd><p>
            If split_logs_by_binding is <code class="literal">false</code>, then
            the log file used will be named
            <code class="filename">/var/log/ecelerity/adaptive/adaptive.log</code>.
            If this option is <code class="literal">true</code> then the log
            file(s) used will be named
            <code class="filename">/var/log/ecelerity/adaptive/<em class="replaceable"><code>bindingname</code></em>.log</code>,
            where <code class="literal">bindingname</code> is replaced with the
            name of the binding with which the operational event is
            associated. Default value is <code class="literal">false</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.suspend_sweep_interval"></a><span class="term">
          suspend_sweep_interval
        </span>
</dt>
<dd><p>
            Specify how often, in seconds, to perform a sweep that
            checks for expired suspensions and re-enable the affected
            binding::domain. Default value is <code class="literal">60</code>
            seconds. Set to <code class="literal">0</code> to disable.
          </p></dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.adaptive.options"></a>71.3.3. Options That Affect Specific Domains</h3></div></div></div>
<p>
      This section defines the adaptive options that correspond to core
      configuration options. These options are valid in the binding,
      binding_group, domain, and global scopes. Note that the most
      specific value is used.
    </p>
<p>
      The following options set upper and lower bounds on the effective
      values of the corresponding core configuration options:
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          adaptive_body_timeout
        </p></li>
<li class="listitem"><p>
          adaptive_ehlo_timeout
        </p></li>
<li class="listitem"><p>
          adaptive_idle_timeout
        </p></li>
<li class="listitem"><p>
          adaptive_mailfrom_timeout
        </p></li>
<li class="listitem"><p>
          adaptive_max_deliveries_per_connection
        </p></li>
<li class="listitem"><p>
          adaptive_max_outbound_connections
        </p></li>
<li class="listitem"><p>
          adaptive_max_recipients_per_batch
        </p></li>
<li class="listitem"><p>
          adaptive_max_recipients_per_connection
        </p></li>
<li class="listitem"><p>
          adaptive_max_resident_active_queue
        </p></li>
<li class="listitem"><p>
          adaptive_max_retries
        </p></li>
<li class="listitem"><p>
          adaptive_max_retry_interval
        </p></li>
<li class="listitem"><p>
          adaptive_outbound_throttle_messages
        </p></li>
<li class="listitem"><p>
          adaptive_rcptto_timeout
        </p></li>
<li class="listitem"><p>
          adaptive_retry_interval
        </p></li>
<li class="listitem"><p>
          adaptive_rset_timeout
        </p></li>
</ul></div>
<p>
      The AD rules govern the behavior of the following options and will
      dynamically tune them for the receivers specified. (For more
      information see <a class="link" href="https://support.messagesystems.com/docs/web-ad/index.php" target="_top">Adaptive
      Delivery User Guide</a>.)
    </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
          <code class="option">adaptive_max_outbound_connections</code>
        </p></li>
<li class="listitem"><p>
          <code class="option">adaptive_max_deliveries_per_connection</code>
        </p></li>
<li class="listitem"><p>
          <code class="option">adaptive_outbound_throttle_messages</code>
        </p></li>
<li class="listitem"><p>
          <code class="option">adaptive_retry_interval</code>
        </p></li>
</ul></div>
<p>
      If you want to cap the range, you may use these settings as an
      override:
    </p>
<pre class="programlisting">
domain "example.com" {
  adaptive_max_deliveries_per_connection = ( 20 80 )
}</pre>
<p>
      The preceding example sets the lower boundary to 20 and the upper
      boundary to 80, meaning that if the AD rules think that the value
      should be lower, it will be clipped to 20, or if the rules decide
      that the value should be higher, it will be clipped to 80.
    </p>
<p>
      The following options configure how AD is implemented:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt>
<a name="modules.adaptive.adaptive_adjustment_interval"></a><span class="term">
          adaptive_adjustment_interval
        </span>
</dt>
<dd><p>
            Throttles adjustments so that they happen no more than once
            in this many seconds for a given binding::domain. This
            option acts as a buffer to avoid "flapping" between values.
            Default value is <code class="literal">60</code> seconds.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_alert_email_destination"></a><span class="term">
          adaptive_alert_email_destination
        </span>
</dt>
<dd>
<p>
            Set the address to which notification emails are sent. The
            value is any valid RFC2821 email address. The email is
            generated internally and subject to the usual binding
            assignment logic and signing rules. Default for this option
            is unset, meaning that no email will be generated.
          </p>
<pre class="programlisting">
binding "customer-1" {
  adaptive_alert_email_destination = "postmaster@example.com"
}</pre>
<p>
            The throttle, blackhole, and suspend actions will generate
            an email to the address associated with this option. You can
            define any number of destination addresses by separating
            addresses using spaces or commas, and also configure which
            events generate an email message. See
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_notification_events">
          adaptive_notification_events
        </a>.
          </p>
</dd>
<dt><span class="term">
          adaptive_alert_email_sender
        </span></dt>
<dd><p>
            Set the address for the alert email sender. There is no
            default value.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_attempt_threshold"></a><span class="term">
          adaptive_attempt_threshold
        </span>
</dt>
<dd>
<p>
            Define the minimum number of delivery attempts that must
            have been made before checking the
            <code class="option">adaptive_rejection_rate_suspension_percentage</code>
            option. Also define the minimum number of delivery attempts
            over a period during which bounce statistics are collected.
            This minimum number must be met before a bounce sweep rule
            can fire. The period is one hour and is hard-coded inside
            <code class="filename">adaptive.lua</code>. This option plays a role
            in determining the <code class="option">low_action</code> in the
            adaptive_sweep_rule scope. For more information see
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_sweep_rule">
          adaptive_sweep_rule
        </a>.
          </p>
<p>
            When specified in the global scope, it pertains to
            individual domains, binding_groups or bindings, not the
            aggregate.
          </p>
<p>
            The default value is <code class="literal">2000</code>.
          </p>
</dd>
<dt>
<a name="modules.adaptive.adaptive_backstore_leveldb"></a><span class="term">
          adaptive_backstore_leveldb
        </span>
</dt>
<dd><p>
            For detailed information about this configuration option,
            see <a class="xref" href="conf.ref.adaptive_backstore_leveldb.php" title="adaptive_backstore_leveldb"><span class="refentrytitle">adaptive_backstore_leveldb</span></a>.
          </p></dd>
<dt><span class="term">
          adaptive_backstore_riak
        </span></dt>
<dd><p>
            For detailed information about this configuration option,
            see <a class="xref" href="conf.ref.adaptive_backstore_riak.php" title="adaptive_backstore_riak"><span class="refentrytitle">adaptive_backstore_riak</span></a>.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_default_suspension"></a><span class="term">
          adaptive_default_suspension
        </span>
</dt>
<dd>
<p>
            When AD decides that a domain should be suspended, it will
            be marked as suspended for the amount of time specified by
            this option.
          </p>
<p>
            This option is a string that specifies an integer number
            value and a unit. The unit can be one of
            <code class="literal">seconds</code>, <code class="literal">minutes</code>,
            <code class="literal">hours</code> or <code class="literal">days</code>. The
            default value is <code class="literal">4 hours</code>.
          </p>
</dd>
<dt>
<a name="modules.adaptive.adaptive_default_suspension_enabled"></a><span class="term">
          adaptive_default_suspension_enabled
        </span>
</dt>
<dd>
<p class="config"><b>Configuration Change. </b>
              This option is available as of version 4.2.
            </p>
<p>
            This option will enable and disable
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_rejection_rate_suspension_percentage">
          adaptive_rejection_rate_suspension_percentage
        </a>.
            Its default setting is <code class="literal">false</code>.
          </p>
</dd>
<dt><span class="term">
          adaptive_enabled
        </span></dt>
<dd><p>
            For detailed information about this configuration option,
            see <a class="xref" href="conf.ref.adaptive_enabled.php" title="adaptive_enabled"><span class="refentrytitle">adaptive_enabled</span></a>.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_fbl_volume_threshold"></a><span class="term">
          adaptive_fbl_volume_threshold
        </span>
</dt>
<dd><p>
            Set the minimum total delivered mail count over a period
            during which FBL stats are collected for a given
            binding::domain pair. This minimum must be met before a
            sweep rule for FBL will fire. The period is specified by the
            adaptive option <code class="option">fbl_stats_monitor</code> within
            the adaptive stanza. The default period is 24 hours, and the
            default value is <code class="literal">20000</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_notification_events"></a><span class="term">
          adaptive_notification_events
        </span>
</dt>
<dd>
<p>
            Configures the events that will trigger an email
            notification to the address defined by
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_alert_email_destination">
          adaptive_alert_email_destination
        </a>.
            The default value is shown below:
          </p>
<pre class="programlisting">
adaptive_notification_events = ( throttle suspension blackhole )
</pre>
<p>
            Separate events using a space.
          </p>
</dd>
<dt>
<a name="modules.adaptive.adaptive_notification_interval"></a><span class="term">
          adaptive_notification_interval
        </span>
</dt>
<dd><p>
            Throttles alert notification emails so that no more than one
            alert email will be generated about a given event in this
            many seconds. Default value is <code class="literal">3600</code>
            seconds.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_positive_adjustment_interval"></a><span class="term">
          adaptive_positive_adjustment_interval
        </span>
</dt>
<dd>
<p>
            Throttles positive adjustments so that they happen no more
            than once in this many seconds. Positive adjustments are
            speculatively applied when deliverability appears to be
            working well allowing the system to increase the values over
            time. Default value is <code class="literal">3600</code> seconds.
          </p>
<p>
            This option acts as a brake to prevent rapidly advancing to
            the high end of the permitted range of values.
          </p>
</dd>
<dt>
<a name="modules.adaptive.adaptive_rejection_rate_suspension_percentage"></a><span class="term">
          adaptive_rejection_rate_suspension_percentage
        </span>
</dt>
<dd>
<p class="config"><b>Configuration Change. </b>
              As of version 4.2, this option is enabled and disabled by
              <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_default_suspension_enabled">
          adaptive_default_suspension_enabled
        </a>.
            </p>
<p>
            AD monitors the rate at which messages are rejected by the
            destination MTA (the delivery failure rate). If this rate
            exceeds the configuration value for
            <code class="option">adaptive_rejection_rate_suspension_percentage</code>,
            AD will enact a suspension on the affected binding::domain.
          </p>
<p>
            The default value is <code class="literal">20</code>, which means that
            the domain will be suspended if the rejection rate exceeds
            20% of the number of attempts.
          </p>
<p>
            If a suspension is enacted, it applies to the domain on the
            affected binding and not globally. The suspension will last
            for the amount of time configured by the
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_default_suspension">
          adaptive_default_suspension
        </a>
            option.
          </p>
</dd>
<dt>
<a name="modules.adaptive.adaptive_retry_fuzz"></a><span class="term">
          adaptive_retry_fuzz
        </span>
</dt>
<dd><p>
            Improves the performance of ecelerity when a domain has
            reached its consecutive failure threshold and in other
            instances where all messages associated with a binding
            domain must be requeued. This option uses the adaptive
            improvements to "fuzz" messages over an interval rather than
            attempting to re-process them immediately. See also
            <a class="xref" href="conf.ref.delayed_binding_domain_fuzz.php" title="delayed_binding_domain_fuzz"><span class="refentrytitle">delayed_binding_domain_fuzz</span></a>.
            Default value is <code class="literal">4096</code>.
          </p></dd>
<dt><span class="term">
          adaptive_scope
        </span></dt>
<dd><p>
            For detailed information about this configuration option,
            see <a class="xref" href="conf.ref.adaptive_scope.php" title="adaptive_scope"><span class="refentrytitle">adaptive_scope</span></a>.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_sweep_rule"></a><span class="term">
          adaptive_sweep_rule
        </span>
</dt>
<dd><p>
            Enables adaptive delivery according to bounce and FBL
            statistics. This option requires special attention and is
            documented separately in
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_sweep_rule_scope" title="71.3.5. adaptive_sweep_rule Scope">Section 71.3.5, “<code class="option">adaptive_sweep_rule</code> Scope”</a>.
          </p></dd>
<dt>
<a name="modules.adaptive.adaptive_sweep_rule_enabled"></a><span class="term">
          adaptive_sweep_rule_enabled
        </span>
</dt>
<dd>
<p>
            Disables <code class="option">adaptive_sweep_rule</code> within a scope
            without having to delete the adaptive_sweep_rule stanza from
            the configuration file. Default value is
            <code class="literal">1</code>.
          </p>
<p>
            When explicitly set to <code class="literal">0</code> within a scope,
            bindings or domains in that scope will not be affected by
            the <code class="option">adaptive_sweep_rule</code> applicable in that
            scope.
          </p>
<p>
            In the following example,
            <code class="option">adaptive_sweep_rule</code> is enabled for
            <code class="literal">binding1/domain1</code> but disabled for any
            other domains in the <code class="literal">binding "binding1"</code>
            scope.
          </p>
<div class="example">
<a name="modules.adaptive.adaptive_sweep_rule_enabled.example"></a><p class="title"><b>Example 71.5. adaptive_sweep_rule_enabled example</b></p>
<div class="example-contents"><pre class="programlisting">
binding "binding1" {
  adaptive_sweep_rule_enabled = 0
  adaptive_sweep_rule "rule1" {
    codes = ("bc:24”)
  }
  domain "domain1" {
    adaptive_sweep_rule_enabled = 1
    adaptive_sweep_rule "rule2" {
      codes = ("bc:10")
    }
  }
}
</pre></div>
</div>
<br class="example-break">
</dd>
</dl></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.adaptive.options.adaptive_scope"></a>71.3.4. <code class="option">adaptive_scope</code> Option</h3></div></div></div>
<p>
      This option controls the scope of adaptive delivery. For
      configuration information, see
      <a class="xref" href="conf.ref.adaptive_scope.php" title="adaptive_scope"><span class="refentrytitle">adaptive_scope</span></a>.
    </p>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.adaptive.adaptive_sweep_rule_scope"></a>71.3.5. <code class="option">adaptive_sweep_rule</code> Scope</h3></div></div></div>
<p>
      This scope enables AD according to bounce and FBL statistics. It
      is valid in the global, domain, binding and binding_group scopes.
    </p>
<p>
      For each <code class="option">bounce_sweep_interval</code> (defined in the
      adaptive module), the system iterates through all the binding and
      domain pairs that are local to the current node and examines the
      bounce statistics and the feed back loop (FBL) statistics
      collected through the fbl module. See
      <a class="xref" href="modules.fbl.php" title="71.35. fbl - Feedback Loop">Section 71.35, “fbl - Feedback Loop”</a>.
    </p>
<p>
      A sample configuration showing
      <code class="option">adaptive_sweep_rule</code> defined in the global scope
      and two different domain scopes follows:
    </p>
<div class="example">
<a name="modules.adaptive.adaptive_sweep_rule.examples"></a><p class="title"><b>Example 71.6. adaptive_sweep_rule examples</b></p>
<div class="example-contents"><pre class="programlisting">
adaptive_sweep_rule "fbl” {
  codes = ("fbl:abuse”)
  low_threshold = 0.2
  low_action = ("throttle” "down”)
  high_threshold = 0.5
  high_action = ("suspend” "4 hours”)
}
domain "yahoo.com” {
  adaptive_sweep_rule "y” {
    codes = ("bc:10” "bc:20”)
  }
}
domain "hotmail.com” {
  adaptive_sweep_rule "x” {
    codes = ("bc:10”)
    low_threshold = 2
    high_threshold = 7
  }
}
</pre></div>
</div>
<br class="example-break"><div class="note">
<h3 class="title">Note</h3>
<p>
        You cannot create an <code class="option">adaptive_sweep_rule</code> scope
        before you have added the adaptive module. To use sweep rules,
        you must load the <code class="option">fbl</code> and
        <code class="option">bounce_classifier_override</code> modules.
      </p>
</div>
<p>
      The configuration options valid in the
      <code class="option">adaptive_sweep_rule</code> scope are defined in the
      following list:
    </p>
<div class="variablelist"><dl class="variablelist">
<dt>
<a name="modules.adaptive.codes"></a><span class="term">
          codes
        </span>
</dt>
<dd>
<p>
            Specify a list of bounce codes or FBL categories. The
            summation of their rates is used to evaluate the rule.
            Although the syntax does not prevent using both bounce codes
            and FBL categories within a rule, it is bad practice to mix
            them since they occur in very different time scales.
          </p>
<p>
            Valid values for bounce codes start with the prefix
            <code class="literal">bc:</code> followed by a legitimate bounce code
            number. For a list of valid bounce codes, see
            <a class="xref" href="bounce_logger.classification.codes.php" title="35.10. Bounce Classification Codes">Section 35.10, “Bounce Classification Codes”</a>. You
            can also use custom bounce codes defined by the
            <a class="xref" href="modules.bounce_classifier_override.php" title="71.12. bounce_classifier_override – Override/Augment Bounce Classifications">Section 71.12, “bounce_classifier_override – Override/Augment Bounce Classifications”</a>.
          </p>
<p>
            Valid values for fbl codes start with the prefix
            <code class="literal">fbl:</code> followed by a legitimate fbl
            category such as <code class="literal">abuse</code> or
            <code class="literal">unsubscribe</code>. Legitimate categories are
            determined by the requirements of the specific ISP.
          </p>
<p>
            This option is required. There is no default value for this
            option except as defined in
            <a class="xref" href="modules.adaptive.php#modules.adaptive.default_adaptive_sweep_rule" title="71.3.5.2. Default Adaptive Sweep Rules">Section 71.3.5.2, “Default Adaptive Sweep Rules”</a>.
          </p>
</dd>
<dt>
<a name="modules.adaptive.high_action"></a><span class="term">
          high_action
        </span>
</dt>
<dd>
<p>
            Specify the action when the high threshold is met and the
            number of delivery attempts exceeds the
            <code class="option">adaptive_attempt_threshold</code>. See
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_fbl_volume_threshold">
          adaptive_fbl_volume_threshold
        </a>.
          </p>
<p>
            Default value is <code class="literal">("suspend" "4 hours")</code>.
            For a complete list of valid values see
            <a class="link" href="https://support.messagesystems.com/docs/web-ad/ad.adaptive.rules.actions.php" target="_top">Rule
            Actions</a>. The throttle, blackhole, and suspend actions
            will generate an email to the address associated with the
            <code class="option">adaptive_alert_email_destination</code> option.
          </p>
<div class="warning">
<h3 class="title">Warning</h3>
<p>
              The length of time for a suspension must be specified in
              hours and must be a power of <code class="literal">2</code>. For
              example, 1, 2, 4 hours and so on are valid values for a
              suspension.
            </p>
</div>
</dd>
<dt>
<a name="modules.adaptive.high_threshold"></a><span class="term">
          high_threshold
        </span>
</dt>
<dd><p>
            Specify the high threshold value for the sum of the rates of
            the bounce codes or FBL categories specified by the
            <code class="option">codes</code> option. Default value is
            <code class="literal">10</code> meaning <code class="literal">10%</code>.
          </p></dd>
<dt>
<a name="modules.adaptive.low_action"></a><span class="term">
          low_action
        </span>
</dt>
<dd>
<p>
            Specify the action when the high threshold is not met but
            the low threshold is met and the number of delivery attempts
            exceeds the <code class="option">adaptive_attempt_threshold</code>
            parameter. (See
            <a class="xref" href="modules.adaptive.php#modules.adaptive.adaptive_fbl_volume_threshold">
          adaptive_fbl_volume_threshold
        </a>.)
          </p>
<p>
            Default value is <code class="literal">("throttle" "down")</code>. For
            a complete list of valid values see
            <a class="link" href="https://support.messagesystems.com/docs/web-ad/ad.adaptive.rules.actions.php" target="_top">Rule
            Actions</a>. The throttle, blackhole, and suspend actions
            will generate an email to the address associated with the
            <code class="option">adaptive_alert_email_destination</code> option.
          </p>
</dd>
<dt>
<a name="modules.adaptive.low_threshold"></a><span class="term">
          low_threshold
        </span>
</dt>
<dd><p>
            Specify the low threshold value for the sum of the rates of
            the bounce codes or FBL categories specified in the
            <code class="option">codes</code> option within a binding::domain.
            Default value is <code class="literal">5</code> meaning
            <code class="literal">5%</code>.
          </p></dd>
</dl></div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.adaptive.determining.sweep.rules"></a>71.3.5.1. How Sweep Rules are Determined</h4></div></div></div>
<p>
        <code class="option">adaptive_sweep_rule</code> stanzas are applied
        according to the following rules:
      </p>
<div class="itemizedlist"><ul class="itemizedlist" style="list-style-type: disc; ">
<li class="listitem"><p>
            All adaptive_sweep_rule stanzas must define the
            <code class="option">codes</code> option. If it is not defined, the
            rule is ignored.
          </p></li>
<li class="listitem"><p>
            adaptive_sweep_rule stanzas must have unique names. If two
            adaptive_sweep_rule stanzas with the same name are applied
            to a binding::domain, the most specific one will win, even
            if that stanza is disabled.
          </p></li>
<li class="listitem"><p>
            When multiple adaptive sweep rules are defined in different
            scopes, the applicable adaptive sweep rules for a
            binding::domain pair are determined by the usual scope
            fallback rules with one exception: if the effective value of
            <code class="option">adaptive_sweep_rule_enabled</code> is
            <code class="literal">0</code> in a scope along the fallback path, the
            rules defined in that scope will not apply. For more
            information about fallback, see
            <a class="xref" href="ecelerity.conf.fallback.php" title="15.3. Configuration Scopes and Fallback">Section 15.3, “Configuration Scopes and Fallback”</a>.
          </p></li>
<li class="listitem"><p>
            If the value of the
            <code class="option">adaptive_sweep_rule_enabled</code> option is
            <code class="literal">0</code> within the scope of the
            adaptive_sweep_rule stanza, then that stanza will not apply.
          </p></li>
<li class="listitem"><p>
            For a binding::domain, a default bounce rule is created if
            the effective value of
            <code class="option">adaptive_sweep_rule_enabled</code> is
            <code class="literal">1</code> and no adaptive_sweep_rule stanza
            contains a <code class="option">codes</code> option defining at least
            one bounce code.
          </p></li>
<li class="listitem"><p>
            For a binding::domain, a default fbl rule is created if the
            effective value of
            <code class="option">adaptive_sweep_rule_enabled</code> is
            <code class="literal">1</code> and no adaptive_sweep_rule stanza
            contains a <code class="option">codes</code> option defining at least
            one fbl category.
          </p></li>
<li class="listitem"><p>
            Rules whose codes include both a bounce code and an fbl
            category are ignored.
          </p></li>
<li class="listitem"><p>
            The execution order of rules applicable to a binding::domain
            is undefined.
          </p></li>
<li class="listitem"><p>
            All rules whose criteria are met will have their respective
            actions executed. However, when multiple actions are
            executed, the end result may not always be predictable. For
            example, if two rules fire and both of them want to suspend
            a binding or domain for different durations, it is undefined
            which duration will prevail. The reason being that you
            cannot suspend a binding::domain that is already
            suspended—once a binding::domain is suspended you can
            neither increase nor decrease the suspension. The length of
            the suspension will depend upon which rule executes first.
          </p></li>
</ul></div>
</div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.adaptive.default_adaptive_sweep_rule"></a>71.3.5.2. Default Adaptive Sweep Rules</h4></div></div></div>
<p>
        When <code class="option">adaptive_sweep_rule_enabled</code> is true, there
        should be an adaptive_sweep_rule stanza with the
        <code class="option">codes</code> option set to a minimum of one FBL
        category and also a bounce adaptive_sweep_rule stanza with the
        <code class="option">codes</code> option set to a minimum of one bounce
        category.
      </p>
<p>
        If these stanzas are absent, the following defaults obtain:
      </p>
<pre class="programlisting">
#Default rule for bounces:
adaptive_sweep_rule "default_bounce_rule" {
  codes = ("bc:10” "bc:24”)
  low_threshold = 3
  low_action = ("throttle” "down")
  high_threshold = 10
  high_action = ("suspend” "4 hours”)
}
#Default rule for FBL categories:
adaptive_sweep_rule "default_fbl_rule" {
  codes = ("fbl:abuse”)
  low_threshold = 0.2
  low_action = (“throttle” “down”)
  high_threshold = 0.5
  high_action = (“suspend” “4 hours”)
}
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h4 class="title">
<a name="modules.adaptive.adaptive_delivery_mulitple_event_loops"></a>71.3.5.3. Adaptive Delivery and Multiple Event Loops</h4></div></div></div>
<p>
        If you are using multiple event loops, you must put the spool
        directory and the Adaptive backing store database directory on
        separate disks. This is particularly important if Adaptive is
        enabled for a large number of binding-domain combinations.
        Additionally, when multiple event loops are configured, it is
        not valid to load the adaptive module with <code class="option">config
        reload</code>. The ecelerity process must be restarted when
        adding Adaptive Delivery to your configuration.
      </p>
<p>
        For additional information about configuring Multiple Event
        Loops, see <a class="xref" href="multi_event_loops.php" title="Chapter 24. Configuring Multiple Event Loops">Chapter 24, <i>Configuring Multiple Event Loops</i></a>
      </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.adaptive.console"></a>71.3.6. Console Commands</h3></div></div></div>
<p>
      The following console commands are provided. Most commands accept
      <code class="literal">--binding
      <em class="replaceable"><code>bindingname</code></em></code> or
      <code class="literal">--domain <em class="replaceable"><code>domainname</code></em></code>
      arguments to adjust their scope. In most cases you may specify
      multiple binding or domain arguments.
    </p>
<div class="variablelist"><dl class="variablelist">
<dt><span class="term">
          adaptive list [--binding
          <em class="replaceable"><code>bindingname</code></em> --domain
          <em class="replaceable"><code>domainname</code></em>]
        </span></dt>
<dd>
<p>
            Displays the effective values of the shaping parameters for
            domains that match the specified binding and domain
            arguments, and how long that value has been in effect. See
            sample output below:

</p>
<pre class="screen">
Group/Binding               Domain               Opt   Value
--------------------------------------------------------------------------
default                  gmail.com  max_outbound_connections      30
</pre>
<p>
          </p>
</dd>
<dt><span class="term">
          adaptive override [ --binding
          <em class="replaceable"><code>bindingname</code></em> --domain
          <em class="replaceable"><code>domainname</code></em>] | [ --all ]
        </span></dt>
<dd><p>
            Revoke the suspension for all bindings or for the specified
            binding domain pair. Using this console command with no
            options is equivalent to using it with the
            <code class="literal">--all</code> option.
          </p></dd>
<dt><span class="term">
          adaptive override [--binding
          <em class="replaceable"><code>bindingname</code></em> --domain
          <em class="replaceable"><code>domainname</code></em>] ttl
          <em class="replaceable"><code>seconds</code></em>
        </span></dt>
<dd>
<p>
            Specify a new value for the time to live for the specified
            binding domain pair or for all domains.
          </p>
<p>
            For example, to change the TTL for
            <code class="literal">yahoo.com</code> in the
            <code class="literal">default</code> binding, you would issue the
            command: <strong class="userinput"><code>adaptive override --binding default
            --domain yahoo.com ttl 10</code></strong>.
          </p>
</dd>
<dt><span class="term">
          adaptive override enable --binding
          <em class="replaceable"><code>bindingname</code></em> --domain
          <em class="replaceable"><code>domainname</code></em>
        </span></dt>
<dd><p>
            Reenable suspension for the specified binding domain. For
            examples of this command see
            <a class="xref" href="modules.adaptive.php#modules.adaptive.console.examples" title="Enabling and Disabling Suspensions">the section called “Enabling and Disabling Suspensions”</a>.
          </p></dd>
<dt><span class="term">
          adaptive reset [ --binding
          <em class="replaceable"><code>bindingname</code></em> --domain
          <em class="replaceable"><code>domainname</code></em> ] | [ --all]
        </span></dt>
<dd><p>
            Clears the shaping parameters recorded for domains that
            match the specified binding and domain arguments. Using this
            console command with no options is equivalent to using it
            with the <code class="literal">--all</code> option.
          </p></dd>
<dt><span class="term">
          adaptive rules --binding
          <em class="replaceable"><code>bindingname</code></em> --domain
          <em class="replaceable"><code>domainname</code></em>
        </span></dt>
<dd>
<p>
            This command displays the adaptive rules that are in effect
            for the specified domain/binding pair. You must supply both
            a binding and a domain. The output of this command is as
            follows:
          </p>
<pre class="screen">
default_bounce_rule default_bounce_rule
  enabled       =&gt; 1
  codes         =&gt; bc:10 bc:24
  low_threshold =&gt; 3.000000
  low_action    =&gt; throttle
  low_action_p1 =&gt; down
  low_action_p2 =&gt; (null)
  high_threshold=&gt; 10.000000
  high_action   =&gt; suspend
  high_action_p1=&gt; 4 hours
  high_action_p2=&gt; (null)
  count/total   =&gt; 143/19695
</pre>
<p>
            You can interpret the output as follows: during the most
            recent time period defined by
            <code class="option">bounce_sweep_interval</code> (the default value is
            one hour), <code class="literal">19695</code> delivery attempts were
            made to the specified binding/domain pair. Among those
            <code class="literal">19695</code> attempts, <code class="literal">143</code>
            were bounces and were classified as either code 10 or code
            24.
          </p>
<p>
            The situation is slightly different where fbl rules are
            concerned.
          </p>
<pre class="screen">
default_fbl_ruledefault_fbl_rule
  enabled       =&gt; 1
  codes         =&gt; fbl:abuse
  low_threshold =&gt; 3.000000
  low_action    =&gt; throttle
  low_action_p1 =&gt; down
  low_action_p2 =&gt; (null)
  high_threshold=&gt; 10.000000
  high_action   =&gt; suspend
  high_action_p1=&gt; 4 hours
  high_action_p2=&gt; (null)
  count/total   =&gt; 4/12030303
</pre>
<p>
            During the most recent time period defined by
            <code class="option">fbl_stats_monitor</code> ( the default value is
            one day), <code class="literal">12030303</code> successful deliveries
            were made to the specified domain. During the same time
            period, 4 FBLs categorized as "abuse" were received from
            that domain. These 4 fbls resulted from the mail sent
            through the binding specified as a parameter to the
            "adaptive rules" console command. However, it is not
            possible to determine if these complaints were the direct
            result of the email sent in the past 24 hrs or from email
            sent earlier.
          </p>
</dd>
<dt><span class="term">
          adaptive suspensions [ --binding
          <em class="replaceable"><code>bindingname</code></em> --domain
          <em class="replaceable"><code>domainname</code></em> ] | [ --all ]
        </span></dt>
<dd>
<p>
            This command summarizes the suspensions that are currently
            in effect, whether they are enabled (you may
            administratively override the suspension) and displays how
            much time remains before the suspension will be lifted and
            service returned to normal. For examples of this command see
            <a class="xref" href="modules.adaptive.php#modules.adaptive.console.examples" title="Enabling and Disabling Suspensions">the section called “Enabling and Disabling Suspensions”</a>.
          </p>
<p>
            You can examine all suspensions or just the suspensions for
            a specific binding/domain pairing. Using this console
            command with no options is equivalent to using it with the
            <code class="literal">--all</code> option.
          </p>
</dd>
<dt><span class="term">
          adaptive warmup
        </span></dt>
<dd><p>
            Displays the age of bindings from the perspective of the IP
            warmup component of AD.
          </p></dd>
<dt><span class="term">
          adaptive warmup <em class="replaceable"><code>bindingname</code></em>
          [<em class="replaceable"><code>age</code></em>]
        </span></dt>
<dd>
<p>
            Sets the age of a binding, in seconds. If the age argument
            is omitted, then the binding age is set to 0.
          </p>
<p>
            Setting the age of a binding helps establish a good
            reputation by building up a sending rate that follows the
            schedules that have been set up for the major receivers.
            Some of those schedules limit volume based on the time since
            you started to use the IP address. For newly obtained IP
            addresses, the warmup feature works out of the box. If you
            are installing the adaptive module on a system with
            preexisting IP addresses with established reputations, you
            need to inform the module how old the associated bindings
            are so that it won't underutilize them. It won't hurt your
            reputation to underutilize the bindings, but it may result
            in lower throughput. For more information about IP warmup
            see <a class="xref" href="glossary.php#gloss-ip-warmup" title="IP Warmup">IP Warmup</a>.
          </p>
<p>
            If <code class="option">adaptive_scope</code> evaluates to "global" for
            a binding scope (binding is a scope in Momentum), the age
            set for that binding through the warmup action will be
            applied to that binding across the whole cluster.
            <span class="emphasis"><em>Note</em></span>: If adaptive_scope evaluates to
            "global" for a binding::domain combination, it does not
            imply that <code class="option">adaptive_scope</code> will also
            evaluate to the same value for that binding alone.
          </p>
</dd>
</dl></div>
<h4>
<a name="modules.adaptive.console.examples"></a>Enabling and Disabling Suspensions</h4>
<p>
      Find below examples of the adaptive console commands. Note how the
      <code class="literal">Enable</code> column shows whether suspension is
      enabled or not.
    </p>
<pre class="screen">
17:16:56 /tmp/2025&gt; adaptive suspensions --all
Group/Binding                                     Domain       TTL  Enable
--------------------------------------------------------------------------
default                                        gmail.com     14319       1
default                          test.messagesystems.com     14319       1


17:16:56 /tmp/2025&gt; adaptive override --domain gmail.com --binding default
Overrode 1 entries
17:16:49 /tmp/2025&gt; adaptive suspensions --all
Group/Binding                                     Domain       TTL  Enable
--------------------------------------------------------------------------
default                                        gmail.com     14256       0
default                          test.messagesystems.com     14256       1
</pre>
<p>
      Note that suspension for the gmail.com domain has been disabled by
      the <strong class="userinput"><code>adaptive override</code></strong> command. Suspension
      is reenabled by <strong class="userinput"><code>adaptive override --domain gmail.com
      --binding default enable</code></strong>.
    </p>
<pre class="screen">
17:18:35 /tmp/2025&gt; adaptive override --domain gmail.com --binding default
enable
Overrode 1 entries
17:18:47 /tmp/2025&gt; adaptive suspensions --all
Group/Binding                                     Domain       TTL  Enable
--------------------------------------------------------------------------
default                                        gmail.com     14138       1
default                          test.messagesystems.com     14138       1
</pre>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.adaptive.sample.email"></a>71.3.7. Summary Email</h3></div></div></div>
<p>
      A summary of actions taken by the adaptive module is created at
      <code class="filename">/var/log/ecelerity/adaptive.summary</code> and sent
      via email to the recipient defined by the option
      <code class="option">adaptive_alert_email_destination</code>. The
      <code class="filename">/opt/msys/ecelerity/bin/ad_summary</code> script
      creates this summary and is added to
      <code class="filename">/etc/cron.d/msys-ecelerity</code> when the adaptive
      module is installed. It is run nightly as a cron job. This summary
      is created whether alerts have been generated or not. The default
      sender is <code class="literal">ecuser@localhost</code>. The log
      file,<code class="filename">/var/log/ecelerity/adaptive.summary</code>,
      should be added to <code class="filename">ec_rotate.conf</code>. For
      instructions on doing this, see
      <a class="xref" href="executable.ec_rotate.php" title="ec_rotate"><span class="refentrytitle">ec_rotate</span></a>. For more information about
      the <code class="filename">/opt/msys/ecelerity/bin/ad_summary</code>
      script, see <a class="xref" href="executable.ad_summary.php" title="ad_summary"><span class="refentrytitle">ad_summary</span></a>.
    </p>
<p>
      The following is the layout of a sample summary email sent by the
      adaptive module:
    </p>
<pre class="screen">
Top 20 bindings by number of receptions:
Binding        Receptions   Deliveries     Transfails     Permfails
=======        ==========   ==========     ==========     =========
binding1       241630       240271 ( 99%)   896 (0%)       1359 (  0%)
binding2       213429       213327 ( 99%)  1067 (0%)         98 (  0%)
binding3       144187       142714 ( 98%)   448 (0%)       1473 (  1%)
binding4       143852       142113 ( 98%)   601 (0%)       1739 (  1%)
...

Top 20 domains by number of receptions:
Binding        Receptions   Deliveries     Transfails     Permfails
=======        ==========   ==========     ==========     =========
google.com     3230314      3205400 ( 99%) 16896 (0%)      29782 (  0%)
yahoo.com      113283        111293 ( 98%)     6 (0%)       2100 (  1%)
aol.com        108785        108052 ( 99%)  1795 (1%)        833 (  0%)
...

Binding domains modified by Adaptive Delivery:
Binding/Domain        Receptions   Deliveries     Transfails     Permfails
==============        ==========   ==========     ==========     =========
binding1/aol.com       600         600 (100%)          0 (0%)       0 (  0%)
binding2/hotmail.com   466         464 ( 99%)          0 (0         2 (  0%)
binding3/yahoo.com    5702         427 (  7%)         85 (1%)    2961 ( 51%)
...

Bounce classes by Adaptive binding/domain.
Binding/Domain        Bounce Class        Transfails     Permfails
==============        ============        ==========     =========
binding2/hotmail.com  Invalid Recipient           0              2
binding3/yahoo.com    Undetermined               85              0
binding1/aol.com      Invalid Recipient           0              1
...

Overall statistics:
Receptions        Deliveries        Transfails         Permfails
==========        ==========        ==========         =========
   3580194        3548161 ( 99%)      22126 (  0%)     103175 (  2%)

Adaptive Delivery Adjustments:
Binding          Domain        Variable                         Initial Updated  Changes
=======          ======        ========                         ====== =======  =======
binding1         aol.com        max_deliveries_per_connection     22      23        1
binding1         aol.com        max_outbound_connections          42      43        1
binding2     hotmail.com        max_deliveries_per_connecti      112     113        1
...

Adaptive Delivery Suspensions:
Binding          Domain                              Start    Stop
=======          ======                              =====    ====
binding3         yahoo.com                           02:35    06:35
binding3         yahoo.com                           06:36    10:36
binding3         yahoo.com                           10:36    14:36


Adaptive Delivery Blackholes:
Binding                  Domain                       Start    Stop
=======                  ======                       =====    ====
No blackholes

Top 20 Permanent failure reasons:
66382   : 550 [internal] [oob] The response text could not be identified.
6101    : 550 [internal] [oob] The message is an auto-reply/vacation mail.
3897    : 554 5.4.6 mail loop detected
...

Top 20 Transient failure reasons:
4234    : 451 Message temporarily deferred - [160]
3435    : 451 4.4.2 [internal] no MAIL FROM response
1800    : 451 4.4.2 [internal] connection closed by remote host

Bounce Live Updates patterns: 445, updated Tue Feb 14 01:29:09 2011
</pre>
<div class="note">
<h3 class="title">Note</h3>
<p>
        The summary report shows the time in the timezone of the MTA on
        which it was created.
      </p>
<p>
        Adjusting the format of this report by changing the parameters
        passed to the ad_summary script is
        <span class="bold"><strong>not</strong></span> recommended. Any changes
        made will be overwritten if the application is upgraded.
      </p>
</div>
</div>
<div class="section">
<div class="titlepage"><div><div><h3 class="title">
<a name="modules.adaptive.options.logging"></a>71.3.8. Logging</h3></div></div></div>
<p>
      Log retention is enabled by default and uses the existing
      ec_rotate log rotation process. ec_rotate consults
      <code class="filename">ec_rotate.conf</code> to determine what and where to
      look for logs to rotate. For more information, see
      <a class="xref" href="log_rotating.php#conf.ref.ec_rotate.conf" title="34.1. ec_rotate.conf File">Section 34.1, “<code class="filename">ec_rotate.conf</code> File”</a>.
    </p>
<p>
      For the format of the adaptive log, see
      <a class="xref" href="adaptive.log.format.php" title="35.2. adaptive Log">Section 35.2, “<code class="filename">adaptive</code> Log”</a>.
    </p>
</div>
</div>
<div class="navfooter"><table width="100%" summary="Navigation footer">
<tr>
<td width="40%" align="left">
<a accesskey="p" href="modules.ac_auth.php">Prev</a> </td>
<td width="20%" align="center"><a accesskey="u" href="modules.php">Up</a></td>
<td width="40%" align="right"> <a accesskey="n" href="modules.alerting.php">Next</a>
</td>
</tr>
<tr>
<td width="40%" align="left" valign="top">71.2. ac_auth – Authentication Handler </td>
<td width="20%" align="center"><a accesskey="h" href="index.php">Table of Contents</a></td>
<td width="40%" align="right" valign="top"> 71.4. alerting – Send Alerting Emails</td>
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
