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

| Appendix B. Export Files |
| [Prev](msc.custom.behavior.mscdriver.php)  |   |  [Next](copyrights.php) |

## Export Files

When a search is exported, it is in JSON format. Find an example of a single message below (formatted for readability):

```
{
    -
    results: [
        -
        {
            sc: "default"
            ts: "1311344032"
            bg: "default"
            sid: "FF/6C-05745-0A5892E4"
            rtl: "jdoe"
            bc: ""
            th: "jdoe@temp.messagesystems.com"
            cid: "EA/86-05745-0A5892E4"
            rtd: "temp.messagesystems.com"
            fh: "test@test.messagesystems.com"
            s: "test Fri, 22 Jul 2011 10:12:27 -0400"
            p: "default"
            n: "msc-mta1"
            mfl: "test"
            tid: "FF/6C-05745-0A5892E4:msc-mta1:"
            bid: "FF/6C-05745-0A5892E4"
            e: "FF/6C-05745-0A5892E4:msc-mta1:"
            d: "Momentum"
            mfd: "test.messagesystems.com"
            ty: "SMTP:Reception"
            b: "default"
            mid: "<FF.6C.05745.0A5892E4@msc-mta1>"
            pg: "default"
            sip: "10.79.0.24"
            smtprr: ""
        }
        -
        {
            sc: "default"
            ts: "1311344032"
            bg: "default"
            sid: "FF/6C-05745-0A5892E4"
            rtl: "jdoe"
            bc: ""
            th: "jdoe@temp.messagesystems.com"
            cid: "EA/86-05745-0A5892E4"
            rtd: "temp.messagesystems.com"
            fh: "test@test.messagesystems.com"
            s: "test Fri, 22 Jul 2011 10:12:27 -0400"
            p: "default"
            n: "msc-mta1"
            dip: "8.8.38.146"
            mfl: "test"
            tid: "FF/6C-05745-0A5892E4:msc-mta1:"
            bid: "FF/6C-05745-0A5892E4"
            d: "Momentum"
            mfd: "test.messagesystems.com"
            ty: "SMTP:Delivery"
            b: "default"
            mid: "<FF.6C.05745.0A5892E4@msc-mta1>"
            pg: "default"
            smtprr: "250 OK tls=,tls_cipher=,auth_user="
        }
        -
        {
            sc: "default"
            ts: "1311344035"
            bg: "default"
            sid: "C8/22-03997-3A5892E4"
            rtl: "jdoe"
            bc: ""
            th: "jdoe@temp.messagesystems.com"
            cid: "F9/4B-03997-3A5892E4"
            rtd: "temp.messagesystems.com"
            fh: "test@test.messagesystems.com"
            s: "test Fri, 22 Jul 2011 10:12:24 -0400"
            p: "scope_pathway"
            n: "msc-mta2"
            mfl: "test"
            tid: "C8/22-03997-3A5892E4:msc-mta2:"
            bid: "C8/22-03997-3A5892E4"
            e: "C8/22-03997-3A5892E4:msc-mta2:"
            d: "Momentum"
            mfd: "test.messagesystems.com"
            ty: "SMTP:Reception"
            b: "default"
            mid: "<C8.22.03997.3A5892E4@msc-mta2>"
            pg: "scope_pgroup"
            sip: "10.79.0.24"
            smtprr: ""
        }
        -
        {
            sc: "default"
            ts: "1311344035"
            bg: "default"
            sid: "C8/22-03997-3A5892E4"
            rtl: "jdoe"
            bc: ""
            th: "jdoe@temp.messagesystems.com"
            cid: "F9/4B-03997-3A5892E4"
            rtd: "temp.messagesystems.com"
            fh: "test@test.messagesystems.com"
            s: "test Fri, 22 Jul 2011 10:12:24 -0400"
            p: "scope_pathway"
            n: "msc-mta2"
            dip: "8.8.38.146"
            mfl: "test"
            tid: "C8/22-03997-3A5892E4:msc-mta2:"
            bid: "C8/22-03997-3A5892E4"
            d: "Momentum"
            mfd: "test.messagesystems.com"
            ty: "SMTP:Permfail"
            b: "default"
            mid: "<@msc-mta2>"
            pg: "scope_pgroup"
            smtprr: "550 Permanently fail 3% of messages"
        }
    ]
    session: "8186d42d-3114-42e9-ab33-576a0e242609"
    totalHits: 4
    currentOffset: 0

}
```

For a description of the field names see [Section 7.2, “Message Scope Search Fields”](msc.lucene.query.search.fields.php "7.2. Message Scope Search Fields"). `sc` stands for subcluster and `n` indicates the node name. Neither of these fields is searchable.

| [Prev](msc.custom.behavior.mscdriver.php)  |   |  [Next](copyrights.php) |
| A.11. The MscDriver Class  | [Table of Contents](index.php) |  Appendix C. Copyright Notices |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)