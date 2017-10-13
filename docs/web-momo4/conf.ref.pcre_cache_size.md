<a name="conf.ref.pcre_cache_size"></a>
## Name

pcre_cache_size — set the maximum size of the ec_pcre_compile cache

## Synopsis

`pcre_cache_size = 0`

<a name="idp25833968"></a>
## Description

pcre_cache_size and pcre_cache_ttl together set the maximum size and TTL of the ec_pcre_compile cache. This cache is used by sieve, sievelib, the bounce_classifier code and the vctx_filter module to cache compiled regular expressions. It should not normally be necessary to modify these values.

The default value is `100`.

<a name="idp25836992"></a>
## Scope

pcre_cache_size is valid in the global scope.

<a name="idp25838832"></a>
## See Also

[pcre_cache_ttl](conf.ref.pcre_cache_ttl "pcre_cache_ttl")
