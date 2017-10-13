| malloc2mmap_threshold |
| [Prev](config.ref.maintainer_pool.php)  | Chapter 72. Configuration Options Reference |  [Next](conf.ref.masterdb_file.php) |

<a name="conf.ref.malloc2mmap_threshold"></a>
## Name

malloc2mmap_threshold — use mmap when allocations exceed this amount

## Synopsis

`malloc2mmap_threshold = 4092`

<a name="idp25223760"></a>
## Description

When set to a positive value, Momentum will use `mmap` to fulfill memory allocation requirements exeeding the `malloc2mmap_threshold` size, rather than allocating memory from the heap via `malloc`.

Lowering this setting can reduce heap fragmentation and the system RSS, but can use more address space than heap allocations alone, since the minimum granularity of `mmap` is the system page size.

The default is 4092.

<a name="idp25228592"></a>
## Scope

malloc2mmap_threshold is valid in the global scope.

<a name="idp25230432"></a>
## See Also

[use_mmap](conf.ref.use_mmap.php "use_mmap")

| [Prev](config.ref.maintainer_pool.php)  | [Up](config.options.ref.php) |  [Next](conf.ref.masterdb_file.php) |
| maintainer_pool  | [Table of Contents](index.php) |  masterdb_file |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)