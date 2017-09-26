Logged in as: OmniTI, Inc.  ([logout](https://support.messagesystems.com/logout.php))

[![Message Systems](https://support.messagesystems.com/images/ms-white205.png)](https://support.messagesystems.com/start.php) 

*   [Changelog](https://support.messagesystems.com/start.php?show=changelog)
*   [Documentation](https://support.messagesystems.com/docs/)
*   [Downloads](https://support.messagesystems.com/start.php)

*   [Licenses](https://support.messagesystems.com/license_summary.php)
*   <a href="">Clients</a>
    *   [Support](https://support.messagesystems.com/cs.php)
    *   [Add/Edit](https://support.messagesystems.com/edit_client.php)
    *   [Legal/Products](https://support.messagesystems.com/edit_products.php)
*   [Users](https://support.messagesystems.com/edit_customer.php)

## Search Help

Search for a single word or perform multi-word searches by enclosing your search in quotation marks.

Where you have multiple words but no quotation marks, an **OR** search is performed. For example, **"REST Injection"** searches for the phrase **"REST Injection"**, and, without quotation marks, searches for **REST OR Injection**--the operator is understood.

### Warning

You must escape the following special characters: **+ - && || ! ( ) { } [ ] ^ " ~ * ? : \**. Use the **\** character as the escape character. For example: **B0/00-11719-46C328D4\:default\:**

You can also perform **AND** searches, for example, **rest AND port** (no quotation marks) finds pages where both these words occur.

Terms used in searches are case-insensitive but operators are not. Alphabetic operators **must** be in uppercase.

Other operators can also be used. For more information see "[Query Parser Syntax](https://lucene.apache.org/core/old_versioned_docs/versions/3_0_0/queryparsersyntax.html)". Use of fields in searches is not currently supported.

| ec_grapher2 |
| [Prev](executable.ec_grapher.php)  | 11.2. Executable Commands |  [Next](executable.ec_jre_setup.php) |

<a name="executable.ec_grapher2"></a>
## Name

ec_grapher2 — produce graph based on information stored in multiple RRDs

## Synopsis

`/opt/ecelerity/bin/ec_grapher2` [ -c *`config file`*       ] [ -f *`file name`*       ] [ -h *`height`* ] [ -w *`width`* ] [ -s *`start time`*       ] [ -e *`end time`*       ] [ -t *`type`* ] [ -r *`source`* ] [ -n *`node names`*        ] [ -nl ] [ -nt ]

<a name="idp7610416"></a>
## Description

**ec_grapher2** is used to produce graphs based on information stored by **ec_rrdd**. It differs from **ec_grapher** in that it can aggregate across multiple datafiles.

It has the following options:

<dl class="variablelist">

<dt>-c *`config file`* </dt>

<dd>

Specify a configuration file. If not specified, the default *`ec_rrdd.conf`* will be used.

</dd>

<dt>-f *`file`*</dt>

<dd>

Specify the name and path of the graph to generate.

</dd>

<dt>-h *`height`*</dt>

<dd>

Specify the height of the graph to generate.

</dd>

<dt>-w *`width`*</dt>

<dd>

Specify the width of the graph to generate.

</dd>

<dt>-s *`start time`* </dt>

<dd>

Specify the start time of the RRD data to use.

</dd>

<dt>-e *`end time`* </dt>

<dd>

Specify the end time of the RRD data to use.

</dd>

<dt>-n *`node name`* </dt>

<dd>

Specify the cluster node names at which to find the data source. Multiple node names may be specified.

</dd>

<dt>-r *`source`*</dt>

<dd>

Specify the data source path on *`node name`*       to use for the graph.

</dd>

<dt>-t *`type`*</dt>

<dd>

Specify the type of graph to generate.

</dd>

<dt>-nl</dt>

<dd>

Show no legend on the graph generated.

</dd>

<dt>-nt</dt>

<dd>

Show no title on the graph generated.

</dd>

</dl>

| [Prev](executable.ec_grapher.php)  | [Up](exe.commands.details.php) |  [Next](executable.ec_jre_setup.php) |
| ec_grapher  | [Table of Contents](index.php) |  ec_jre_setup |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)