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

| 16.2. The Module |
| [Prev](extending.structures.php)  | Chapter 16. Extending Momentum using C |  [Next](extending.logging.php) |

## 16.2. The Module

Modules are used to redefine the way Ecelerity operates. Each module can provide a set of methods that Ecelerity will utilize to perform tasks. Modules can be used to define a new method of handling log information, redefine the way messages and metadata are written to the underlying storage system, or even reject/accept/modify messages as they enter the system. The module system is what allows Ecelerity to adapt to your individual needs.

Every module, regardless of its function, must have a specific form. All modules define a structure in a loadable shared object ("so" files on Unix and "bundle" files on Mach systems). This structure varies based on the the type of module being written, but all begin with the same component: `shared_module_infrastructure`.

```
typedef void (*ControlHookFunc) (generic_module_infrastructure *self,
                                 string *response, char *command);
typedef int  (*ModuleConfFunc) (struct _generic_module_infrastructure *self,
                                configure_construct *cc,
                                char *key, char *value);
typedef void (*ModuleInitFunc) (generic_module_infrastructure *self);

typedef struct _shared_module_infrastructure
{
  u_int32_t module_api_version;
  module_characteristics *__private_ecelerity_data;
  ECDict attributes;
  void *module_private_data;
  char *module_file;
  char *module_symbol;
  char *module_name;
  char *module_description;
  ControlHookFunc module_control;
  ModuleConfFunc module_conf;
  ModuleExtendedConfFunc module_ext_conf;
  ModuleInitFunc module_init;
  ModuleInitFunc module_post_init;
  ModuleConfSetupFunc module_config_setup;
} shared_module_infrastructure;

typedef struct _generic_module_infrastructure
{
  shared_module_infrastructure shared;
} generic_module_infrastructure;

#define module_api_version shared.module_api_version
#define module_control shared.module_control
#define module_conf shared.module_conf
#define module_init shared.module_init
#define module_post_init shared.module_post_init
#define module_name shared.module_name
#define module_description shared.module_description
#define module_file shared.module_file
#define module_symbol shared.module_symbol
#define module_private_data shared.module_private_data
```

This describes what the module is and how it can be controlled from within Ecelerity. All portions of the `shared_module_infrastructure` are mapped using the stated preprocessor defines. As such, all modules should access shared elements as: `module->module_name` rather than `module->shared.module_name`. Every module type (logging, io, and validation) begins with an identically structured shared element.

### 16.2.1. module_api_version

As all APIs change over time, it is important that the binary module that Ecelerity has been asked to load into the system matches the current API specification. Module authors should set this to: `EC_MODULE_API_VERSION`. This version number is coded into the binary and will prevent the module from loading and subsequently malfunctioning due to an API change.

### 16.2.2. name, description, file and symbol

The `module_name` and `module_description` elements are required to load the module. They describe the module so that it can be recognized through `ec_console`.

The `module_file` and `module_symbol` elements are ignored and overwritten internally at load time. They describe what file was opened and what the symbol name was used to instantiate the module.

### 16.2.3. module_control

```
typedef int  (*ControlHookFunc) (generic_module_infrastructure *self,
                                 string *response, char *command);
```

The `module_control` element references an (optional) function that handles control statements passed from Ecelerity.

If a module is loaded as module 1 in Ecelerity, in `ec_console`, one can type: `module 1 statistics` and the function specified as `module_control` will be invoked with a empty `string *` as the first argument and a null terminated `char *` with the contents "statistics" as the second.

From this point forward, it is the module's responsiblity to interpret that command ("statistics") and place the appropriate response data into the `string *`.

Though it is not mandated, it is highly recommended that modules implement a control response to "write config." It is standard to write one line per key-value pair and are written as follows:

`stringprintf(response, "%s = %s", key, value);`
### 16.2.4. module_conf

```
typedef int  (*ModuleConfFunc) (generic_module_infrastructure *self,
                                configure_construct *c, char *key, char *value);
```

The `module_conf` hook is provided to give a module its configuration information when Ecelerity begins. In the event that Ecelerity encounters a configuration section following the module load statement, it will pass the key value pair found therein to this function.

For example, if the ecelerity.conf file contains:

```
Logger logging/exim_logger exim_logger
{
    mainlog = /var/log/exim/mainlog
    paniclog = /var/log/exim/paniclog
#    log_transient_failures = on
}
```

The `module_conf` element will be invoked twice. Once with the arguments (self, c, "mainlog", "/var/log/exim/mainlog") and a second time with the arguments (self, c, "paniclog", "/var/log/exim/paniclog"). The third item in the configuration is preceded by "#" and thus classified as a comment.

On successful parsing of a configuration parameter, this function must return 0\. Returning a non-zero value will subsequently cause Ecelerity to terminate.

### 16.2.5. module_ext_conf

```
typedef int (*ModuleExtendedConfFunc) (generic_module_infrastructure *, 
                                       configure_construct *c, char *key, 
                                       int type, void *data);
```

The `module_ext_conf` hook is provided to allow a module to process nested key-value pairs in a configuration, i.e. configuration structures that look like:

```
key [
        subkey1 = data1
        subkey2 = data2
      ]
```

When your `module_ext_conf` function gets called on the above configuration statement, `key` will be set to the string 'key'. You can then extract the subkeys by name as follows:

```
char *data1, *data2;
ECDict params = (ECDict) data;
data1 = dict_value_for_key(params, "subkey1");
data2 = dict_value_for_key(params, "subkey2");
```

On successful parsing of a configuration parameter, this function must return 0\. Returning a non-zero value will subsequently cause Ecelerity to terminate.

### 16.2.6. module_init

`typedef int  (*ModuleHookFunc) (generic_module_infrastructure *self);`

This hook is called at system startup. It is used to initialize the necessary components of the module's internals prior to the initialization of Ecelerity's core systems - dns, scheduler, etc.

In the event of a failure, returning a non-zero value from this function will cause Ecelerity to abort startup (terminate the program). A successful initialization shall return 0.

### 16.2.7. module_post_init

`typedef int  (*ModuleInitFunc) (generic_module_infrastructure *self);`

The `module_post_init` element references an (optional) function that can perform initialization of the module after it has been loaded and configured. The initialization phase *cannot* perform validation of configuration, but rather gives the module an opportunity to perform any initialization tasks that depend on Ecelerity's subsystems, which were not initialized when the normal `module_init` function was dispatched. Each module infrastructure has its own initialization hook that happens at load time and are discussed in detail in subsequent sections.

A simple ping-pong sample follows. Here we use the `io_infrastructure` as a concrete module type (all the elements except `io_init` can be NULL, init returns 0 on success - this is covered completely in the Extensible IO Infrastructure section.

```
#include "io_module.h"
#include "util.h"

int ping_pong_init(generic_module_infrastructure *self) { return 0; }

void ping_pong_control(generic_module_infrastructure *self,
                       string *r, char *command) {
  if(!strcasecmp(command, "ping")) {
    stringprintf(r, "my_module: pong");
  } else if(!strcasecmp(command, "write config")) {
    stringprintf(r, "# This module has no configuration.");
  } else {
    stringprintf(r, "my_module: command unknown");
  }
}

io_infrastructure ping_pong = {
  {
#ifdef EC_MODULE_SHARED_INIT
    EC_MODULE_SHARED_INIT
    "ping_pong",
    "This is a sample module"
    ping_pong_control,
    NULL,
    NULL,
    ping_pong_init
#else
    EC_MODULE_API_VERSION,
    ping_pong_control,
    NULL,
    ping_pong_init,
    NULL,
    "ping_pong",
    "This is a sample module"
#endif
  },
  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL
};
```

This is loaded into Ecelerity by starting Ecelerity with the following in the ecelerity.conf configuration file:

`IO_System site/ping_pong ping_pong`

The module will be live in the system and can be accessed by `ec_console`:

```
12:04:25 ecelerity> module list
Module ID: 1
        Name: ping_pong
        Description: This is a sample module
        File/Symbol: /opt/ecelerity/libexec/site/ping_pong.so:ping_pong

12:04:28 ecelerity> module 1 ping
my_module: pong

12:04:36 ecelerity> module 1 doit
my_module: command unknown
```

A more complete version of this ping_pong module is available in the "docs" directory of your Ecelerity install as `/opt/ecelerity/docs/ping_pong.c` . It details responding to "write config" requests as well as processing configuration directives.

| [Prev](extending.structures.php)  | [Up](c.sdk.php) |  [Next](extending.logging.php) |
| 16.1. Momentum Data Structures  | [Table of Contents](index.php) |  16.3. Extensible Logging Infrastructure |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)