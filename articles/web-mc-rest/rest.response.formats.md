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

| 7.5. Response Formats |
| [Prev](rest.input.parameters.php)  | Chapter 7. Using the API |  [Next](rest.conventions.php) |

## 7.5. Response Formats

The REST API provides three different response formats. The default response format is JSON, but XML and CSV formats can be selected by adding the appropriate filename suffix to the URL, before any GET parameters, or by passing in a GET parameter named `format`.

### Note

Unlike the XML or JSON mode, CSV mode cannot represent hierarchical data. If a response can be represented in CSV format, expect a valid CSV output. If the response cannot be represented in CSV format there is no CSV output.

For example, the report/mailingstats API returns output that can be represented in JSON or XML format since they can represent hierarchical data. The output cannot be represented as CSV because the result is incompatible with CSV format.

The following URLs request that data be returned as JSON:

```
http://api.mc.messagesystems.com/v1.0/campaign?orgid=2&format=json
http://api.mc.messagesystems.com/v1.0/campaign.json?orgid=2
```

The XML format maps object properties to XML elements. If a given property is of an array type, it will have an `isarray="true"` attribute, and the child values of that element will be `<item>` elements that represent each individual entry in the array.

### Warning

If you plan to return data in `XML` format, do not use spaces in the names of profile fields.

An example XML Response to a GET request follows; this requests a list of orgs from the system, limiting it to one entry.

<a name="rest.get.example"></a>

**Example 7.2. GET output**

`GET https://api.mc.messagesystems.com/v1.0/orgs?limit=1&format=xml`
```
<response isarray="true">
<item>
  <orgid>1</orgid>
  <orgname>omniti</orgname>
  <address1/>
  <address2/>
  <city/>
  <region/>
  <postalcode/>
  <countrycode/>
  <languagecode/>
  <contactname/>
  <contactemail/>
  <accountrepemail/>
  <needsapproval>false</needsapproval>
  <billinglocation/>
  <parentid/>
  <loginsenabled>true</loginsenabled>
  <downformaintenance>false</downformaintenance>
  <maintenancemessage/>
  <sendingdomain>omniti.com</sendingdomain>
  <webdomain>http://omniti.com</webdomain>
  <domainkeyssigningenabled>false</domainkeyssigningenabled>
  <dkimsigningenabled>false</dkimsigningenabled>
  <uniquekeyfields>localpart, domain</uniquekeyfields>
  <timezone>UTC</timezone>
  <defaultfromaddress/>
  <returnpathseedlistenabled>false</returnpathseedlistenabled>
  <createddate>2010-07-23T00:02:04Z</createddate>
  <modifieddate>2010-07-23T00:02:04Z</modifieddate>
</item>
</response>
```

The following shows the same request using JSON as the response format (formatted for readability):

<a name="rest.json.example"></a>

**Example 7.3. JSON output**

`GET https://api.mc.messagesystems.com/v1.0/orgs.json?limit=1`
```
[
  {
    orgid: 1,
    orgname: "omniti",
    address1: null,
    address2: null,
    city: null,
    region: null,
    postalcode: null,
    countrycode: null,
    languagecode: null,
    contactname: null,
    contactemail: null,
    accountrepemail: null,
    needsapproval: false,
    billinglocation: null,
    parentid: null,
    loginsenabled: true,
    downformaintenance: false,
    maintenancemessage: null,
    sendingdomain: "omniti.com",
    webdomain: "http://omniti.com",
    domainkeyssigningenabled: false,
    dkimsigningenabled: false,
    uniquekeyfields: "localpart, domain",
    timezone: "UTC",
    defaultfromaddress: null,
    returnpathseedlistenabled: false,
    createddate: "2010-07-23T00:02:04Z",
    modifieddate: "2010-07-23T00:02:04Z"
  }
]
```

The CSV response format cannot be used with APIs that return hierarchical data; attempting to do so will lead to undefined results. [Example 7.3, “JSON output”](rest.response.formats.php#rest.json.example "Example 7.3. JSON output") issued as a CSV response is shown below, but is truncated width-wise for clarity.

<a name="rest.csv.example"></a>

**Example 7.4. CSV output**

`GET https://api.mc.messagesystems.com/v1.0/orgs?format=csv&limit=1`
```
orgid,orgname,address1,address2,city,region,postalcode,countrycode,languagecode,»
contactname,contactemail
1,omniti,,,,,,,,,
```

| [Prev](rest.input.parameters.php)  | [Up](rest.using.php) |  [Next](rest.conventions.php) |
| 7.4. Input Parameters  | [Table of Contents](index.php) |  7.6. General Conventions |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)