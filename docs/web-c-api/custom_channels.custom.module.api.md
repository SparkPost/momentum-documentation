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

| A.3. Custom Delivery Module Setup |
| [Prev](custom_channels.momo.module.api.php)  | Appendix A. Custom Delivery Modules |  [Next](custom_channels.custom.routines.php) |

## A.3. Custom Delivery Module Setup

The following sections provide details about setting up a custom delivery module that extends the Generic HTTP Client module. The information given is a subset of the topics discussed in [Section 1.3, “Primary Momentum APIs”](arch.primary.apis.php "1.3. Primary Momentum APIs").

### A.3.1. The .ecm File

Your delivery module must have a **.ecm** file, which defines the name of your module and identifies your module for Momentum. The name *`protocol_name`* is used throughout this document to refer to your custom delivery protocol.

[*`protocol_name`*]**Module Dependencies**

Module dependencies are defined in the **.ecm** file. In your ***`protocol_name`*.ecm**, include the following entry to require the httpclnt module.

[*`protocol_name`*]
msys.requires = httpclnt
### A.3.2. Module Infrastructure

Your module setup routine is established in the `generic_module_infrastructure` that you define for your delivery module. Your module will be a singleton module, and you will need to provide a custom conf_setup callback and a custom ext_init callback. The conf_setup callback is used to configure your delivery module and register custom callbacks. The callbacks you implement and register provide your customized implementation. Be sure that the names you specify in the `generic_module_infrastructure` match the names of your callbacks. The following is a sample module infrastructure for your delivery module.

/* Your delivery module infrastructure */ 
EC_MODULE_EXPORT
generic_module_infrastructure *`protocol_name`* = {{
    EC_MODULE_INIT(EC_MODULE_TYPE_SINGLETON, 0),
    "*`protocol_name`*.c",
    "My Delivery Channel",
    NULL,     /* control  */
    NULL,     /* conf     */
    NULL,     /* ext_conf */
    NULL,     /* init */
    NULL,     /* post_init */
    *`protocol_name`*_conf_setup, /* Your custom conf_setup callback  */
    NULL,     /* enable */
    NULL,     /* can_unload */
    *`protocol_name`*_ext_init, /* Your custom ext_init callback */
}};**Module Configuration Setup**

The function declaration for the conf_setup callback is

static int *`protocol_name`*_conf_setup(generic_module_infrastructure *gself, int notused)

In this function, you must do the following:

*   Get a protocol driver structure for your delivery module for initialization

*   Register the module reference with the httpclnt module

*   Define and register custom memory types (optional)

*   Register your custom callbacks with the httpclnt module

*   Register your callbacks and settings with Momentum

*   Setup any other custom configuration that you require for your implementation (optional)

Use the following utility to get a protocol driver structure. The returned structure is used to setup your custom configuration. The structure is initialized with default settings by the httpclnt module before returning.

ec_pd *pd = http_pd_init(“*`protocol_name`*”);

The module setup routine is passed the delivery module reference in the `generic_module_infrastructure *` parameter. This reference should be stored as a static variable in your delivery module. You must setup a callback function to return the module reference and register that function with the httpclnt module during setup. Define the following in your module.

```
static generic_module_infrastructure *self = NULL;
static generic_module_infrastructure *get_self() {return self;}
```

In your conf_setup callback, register the callback that returns the module reference, as follows.

```
/* The generic_module_infrastructure * arg name is gself */          
self = gself;  
/* Assign the function to retrieve the module instance with the Generic Delivery module */
pd->get_module_closure = get_self;
```

Optionally, your delivery module can define its own memory type. If you need a custom memory type, you must register the memory type with Momentum, as well as the httpclnt module. You also must register a custom free routine and custom malloc routine for that memory type with the httpclnt module during setup. If a custom memory type is not needed, the httpclnt module will allocate memory structures using an internally defined `“http:memory”` memory type.

The following is sample code to define a custom memory type.

static mem_type_def mt_def_*`protocol_name`* = {
 “*`protocol_name`*:memory”,
 0,
  SIZEOF_VOID_P,
  EC_MEMCLASS_DEFAULT,
  EC_ALLOCATOR_VSIZE,
  0
}

static int mt_*`protocol_name`*;
static void *`protocol_name`*_free(void *ptr) 
          { if (ptr) ec_free(mt_*`protocol_name`*, ptr); }
static void* *`protocol_name`*_malloc(int size) 
          { return ec_malloc_size(mt_*`protocol_name`*, size); }

In your conf_setup callback, register your memory type with Momentum using [ec_memtype_register](apis.ec_memtype_register.php "ec_memtype_register") and register your memory type, malloc function, and free function with the httpclnt module using the parent `ec_pd` structure, as follows.

If((mt_*`protocol_name`* = ec_memtype_register(&mt_def_*`protocol_name`*)) == -1)
{
	/* failed to register memory type */
	return -1;
}  
pd->memory_type = mt_*`protocol_name`*;
pd->malloc = *`protocol_name`*_malloc;
pd->free = *`protocol_name`*_free;

Any custom delivery module that extends the httpclnt module must provide, at a minimum, a build_request callback, handle_response callback, and status_classifier callback that are registered with the httpclnt module. In your delivery module, declare your callback functions.

static int *`protocol_name`*_build_request(http_session *sess);
static int *`protocol_name`*_handle_response(http_session *sess);
static int *`protocol_name`*_status_classifier(int error_code);

These custom callback functions are discussed in detail in [Section A.4.1, “Build Request”](custom_channels.custom.routines.php#custom_channels.build.request "A.4.1. Build Request"), [Section A.4.2, “Handle Response”](custom_channels.custom.routines.php#custom_channels.handle.response "A.4.2. Handle Response"), and [Section A.4.3, “Status Classifier”](custom_channels.custom.routines.php#custom_channels.status.classifier "A.4.3. Status Classifier"), respectively.

If logging is required, you will need to implement custom disposer callback functions. In your delivery module, declare the following functions. Implementation of these functions is discussed in [Section A.4.4, “Disposer Callback”](custom_channels.custom.routines.php#custom_channels.disposer "A.4.4. Disposer Callback").

static int *`protocol_name`*_log_delivery(ec_message *msg);
static int_*`protocol_name`*_log_tempfail(ec_message *msg);
static int *`protocol_name`*_log_permfail(ec_message *msg);

There are a number of other custom callbacks (handlers) that you may need to implement, depending on your requirements. These optional functions are discussed in [Section A.4.5, “Additional Custom Handlers”](custom_channels.custom.routines.php#custom_channels.optional.handlers "A.4.5. Additional Custom Handlers"). Be sure to declare any additional callback (handlers) being implemented. If a callback (handler) is not provided, the httpclnt module has default implementations. Typically, these defaults provide no functionality that would suit your requirements.

In your conf_setup callback, register all your custom callback functions, as follows.

/* Register your custom status_classifier */
pd->status_classifier = *`protocol_name`*_status_classifier;

/* Register your custom build_request and handle_response */
http_pd *hpd = pd->user_data;
hpd->build_request = *`protocol_name`*_build_request;
hpd->handle_response = *`protocol_name`*_handle_response;

/* Register your custom logging callbacks, if required */
pd->disposer.dispose_delivery = *`protocol_name`*_log_delivery;
pd->disposer.dispose_tempfail = *`protocol_name`*_log_tempfail;
pd->disposer.dispose_permfail = *`protocol_name`* log_permfail;

/* Register other optional callbacks, as needed */
hpd->reset_request = *`protocol_name`*_reset_request;
hpd->reset_response = *`protocol_name`*_reset_response;
hpd->reset_session = *`protocol_name`*_reset_session;
hpd->init_session = *`protocol_name`*_init_session;
hpd->destroy_session = *`protocol_name`*_destroy_session;

Finally in your conf_setup callback, register your custom callbacks and settings with Momentum, as follows.

`ec_pd_register(pd);`**Module initialization hook**

Although singleton modules must provide an ext_init callback, most likely you will only need to return, depending on your requirements. The following is a sample module initialization hook for your delivery module.

static int *`protocol_name`*_ext_init(generic_module_infrastructure *self,
  ec_config_header *transaction, string *output, int flags)
{
  return 0;
}
### A.3.3. Configuration Options

This section lists the Momentum configuration options that are related to developing a custom delivery module. For additional details about configuration options, see [Ecelerity.conf Configuration Reference](https://support.messagesystems.com/docs/web-ref/conf.ref.php).

**Generic Configuration Options**

Use the `domain` stanza to define the following per-domain configuration options for your delivery module.

*   [delivery_method](https://support.messagesystems.com/docs/web-ref/conf.ref.delivery_method.php)

*   [routes](https://support.messagesystems.com/docs/web-ref/conf.ref.routes.php)

*   [idle_timeout](https://support.messagesystems.com/docs/web-ref/conf.ref.idle_timeout.php)

*   [delivery_response_timeout](https://support.messagesystems.com/docs/web-ref/conf.ref.delivery_response_timeout.php)

When configuring delivery domains in Momentum, be sure to use the same name that you used to get your protocol driver in your custom conf_setup callback (e.g. “DELIVERY_METHOD = “*`protocol_name`*”).

**HTTP–Configuration Options**

Use the `domain` stanza to define the following HTTP–related configuration options for your delivery module.

*   [http_host](https://support.messagesystems.com/docs/web-ref/conf.ref.http_host.php)

*   [http_method](https://support.messagesystems.com/docs/web-ref/conf.ref.http_method.php)

*   [http_uri](https://support.messagesystems.com/docs/web-ref/conf.ref.http_uri.php)

*   [http_version](https://support.messagesystems.com/docs/web-ref/conf.ref.http_version.php)

*   [http_basic_auth](https://support.messagesystems.com/docs/web-ref/conf.ref.http_basic_auth.php)

**TLS**

If your custom channel requires a secure connection, use the Momentum TLS options. For information about configuring these options, see [tls](https://support.messagesystems.com/docs/web-ref/conf.ref.tls.php).

| [Prev](custom_channels.momo.module.api.php)  | [Up](custom_channels.php) |  [Next](custom_channels.custom.routines.php) |
| A.2. Momentum Modules  | [Table of Contents](index.php) |  A.4. Custom Callback Functions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)