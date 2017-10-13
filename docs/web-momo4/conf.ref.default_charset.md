<a name="conf.ref.default_charset"></a>
## Name

default_charset — control usage of the "default" character set

## Synopsis

`default_charset = "charset"`

<a name="idp24195184"></a>
## Description

`default_charset` is intended to allow the customer to specify what the default assumed character set within the product is. This does not prevent the product from interpreting other character sets as normal. This is helpful to international customers, as some MUAs do not correctly represent their charset.

The default value is `"us-ascii"`

<a name="idp24198640"></a>
## Scope

default_binding is valid in the global, pathway_group, and pathway scopes.
