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

| memory |
| [Prev](console_commands.help.php)  | 12.2. System Console Commands |  [Next](console_commands.message_details.php) |

<a name="console_commands.memory"></a>
## Name

memory — report detailed memory usage

## Synopsis

`memory` [ *`memory_type`* ]

<a name="idp9808464"></a>
## Description

The **memory** command provides a detailed overview of the type, count and size of the various memory objects that Momentum uses internally. Sample output is displayed below:

```
10:47:35 /tmp/2025> memory
                        memory   buf  active  peak    allocd    current
                        type     size objects objects objects   bytes
------------------------------ ------ ------- ------- ------- ---------
                         Event     36      15      16     101      4096
                      Skiplist     28      75      75     127      4096
                 domain_record     76       1       1      50      4096
                     mx_record     12       1       1     254      4096
                   host_record     44       1       1      84      4096
                 email_message    136       1       1      29      4096
                    RSplayTree     20       7       7     169      4096
                 cidrnode_ipv4     32       6       6     127      4096
                   time_series     24       1       1     169      4096
               skiplistnode(1)     28      53      56     127      4096
               skiplistnode(2)     36      12      15     101      4096
               skiplistnode(3)     44       5       8      84      4096
               skiplistnode(4)     52       2       2      72      4096
          binding_domain_stats    120       1       1      33      4096
                         int32      4      62      62     508      4096
                 ec_hash_table     24      25      25     169      4096
                ec_hash_bucket     16     889     889    1016     16384
                  message_list     20       0       1     169      4096
                      _dq_list      8       0       1     508      4096
                        ip_acl     44      14      14      84      4096
              accept_construct    132       5       5      29      4096
------------------------------ ------ ------- ------- ------- ---------
                                                                  98304

       memory                  current       peak      mmap
       type                    bytes         bytes     count/peak/current %
------------------------------ ----------- ----------- ---------------------
       buf_storage             16384       16384
       message_body            17          17
       sieve                   113         113
       string                  8802        8802
       snmp                    32768       32768
       ec_cache_key            42          42
       ec_interface            72          72
       ecdict                  53503       53503
       ec_fc_fifo              6576128     6576128
       ds_core:datasource      3276        3276
       statp:vsize             429         429
       scriptlet               14957       14957
       scriptlet:lua           221427      221427
------------------------------ ----------- ----------- ---------------------
       6927918

RSS:            8658726            8,658,726   1.66%
System RSS:   115417088          115,417,088  22.08%
```

The output of this command can be used to diagnose memory growth issues as well as to help determine whether custom modules are leaking memory. The output consists of three parts: memory usage of objects whose size is fixed, memory usage of objects whose size is not fixed and RSS (resident set size).

### Note

This feature is available starting from Momentum 3.0.17\. Output in XML format using the **xml memory**        command is available as of version 3.1.

The **memory** command can also be issued passing a memory type as an argument. Valid memory types are those listed under the "memory type" column. For example, to view the memory used by Sieve, issue the command, **`memory sieve`**       .

The column names used in the first part for fixed-size objects are:

<dl class="variablelist">

<dt>memory type</dt>

<dd>

The name of active objects. Any values shown in this column are valid memory types when the memory command is issued with a parameter.

</dd>

<dt>buf size</dt>

<dd>

The size of a memory type.

</dd>

<dt>active objects</dt>

<dd>

Number of active objects for a memory type.

</dd>

<dt>peak objects</dt>

<dd>

Peak number of active objects ever used for a memory type.

</dd>

<dt>allocd objects</dt>

<dd>

Number of objects pre-allocated for a memory type.

</dd>

<dt>current bytes</dt>

<dd>

Total memory allocated for a memory type.

</dd>

</dl>

Additional column names used for objects whose allocations are not of fixed size are:

<dl class="variablelist">

<dt>peak bytes</dt>

<dd>

The peak bytes ever allocated to a memory type.

</dd>

<dt>mmap count/peak/current %</dt>

<dd>

Percentage of memory allocations that were satisfied using mmap, when system allocators are in use.

</dd>

</dl>

The System RSS represents the current resident set size as seen by the underlying operating system. Note that Momentum tracks its own RSS which can grow and shrink based on usage. On most Unix systems, memory is appropriated by extending a programs heap space using the sbrk() call and as such will never decrease in size.

Earlier versions of Momentum generate a memory usage report such as the following:

```
10:18:32 ecelerity> memory
Type:                Event [   28]  current:     57 alloced:     78 hwm:    832
Type:             Skiplist [   36]  current:    968 alloced:    992 hwm:    992
Type:         skiplistnode [   32]  current:   3984 alloced:   4294 hwm:   4302
Type:        domain_record [   80]  current:    167 alloced:    167 hwm:    167
Type:            mx_record [   12]  current:    414 alloced:    414 hwm:    414
Type:          host_record [   40]  current:    337 alloced:    341 hwm:    341
Type:           connection [    0]  current:   2688 alloced:   2688 hwm:  10368
Type:    connection_handle [   12]  current:     73 alloced:    102 hwm:    292
Type:          buf_storage [ 4096]  current:      1 alloced:      3 hwm:    202
Type:        email_message [  112]  current:    249 alloced:    309 hwm:    324
Type:        short_message [   60]  current:      0 alloced:      0 hwm:      0
Type:         message_body [    0]  current: 1393040 alloced: 1393014 hwm: 1728822
Type:           RSplayTree [   20]  current:    499 alloced:    503 hwm:    503
Type:           rsplaynode [   24]  current:      6 alloced:     13 hwm:    305
Type:       bound_skiplist [   40]  current:      0 alloced:      0 hwm:      0
Type:        mx_bound_stat [    8]  current:      4 alloced:     10 hwm:    307
Type:    bound_connections [   12]  current:      0 alloced:      0 hwm:      0
Type:                 ares [    0]  current:      0 alloced:      0 hwm:      0
RSS:        1661546
System RSS: 56754176
```

All objects with a non-zero size are counted by object. For example, in the above output, the Event object type requires 28 bytes of memory. There are 78 currently allocated Event objects, of which 57 are in use. At some point during the life of the instance, there were 832 Event objects concurrently allocated in the system. Currently, Event objects comprise 28x78 = 2184 bytes of the current 1661546 bytes of internal RSS.

Objects with a size of 0 (connection, message_body, ares) are allocations that are not of fixed size. The current, alloced, and hwm numbers for these types represent the exact number of bytes allocated to that type - not the number of objects.

| [Prev](console_commands.help.php)  | [Up](console.commands.non-module.php) |  [Next](console_commands.message_details.php) |
| help  | [Table of Contents](index.php) |  message details |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)