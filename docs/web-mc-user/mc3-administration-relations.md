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

| 11.5. Relational Data |
| [Prev](mc3-administration-suppression-lists.php)  | Chapter 11. Administration |  [Next](mc3-administration-link-groups.php) |

## 11.5. Relational Data

To view relations, choose the RELATIONAL DATA menu option from the ADMIN menu.

<a name="ui-3"></a>Relations provide a way of relating existing customer data external to the Message Central table of recipients (the contacts table). In this sense they supplement or replace profile data.

**Configuration Change. ** This menu option is available as of version 3.4.

### Note

To make use of relational data in Message Central you must add tables to the org000000*`number`*rel schema or the `relational` schema. Any tables in these schemata are "target" tables and these tables appear in the Target Table drop-down list box when you create a relation. For a description of how to add an external table to the PostgreSQL database see [Appendix B, *Exporting Data from MySQL to PostgreSQL*](mc3-export-data.php "Appendix B. Exporting Data from MySQL to PostgreSQL") . For an overview of the PostgreSQL database that ships with Message Central see "[Message Central 3.x and PostgreSQL](https://support.messagesystems.com/docs/web-mc/mc-postgresql.php)".

Field names in relational tables cannot contain any underscores or they will not work for personalization.

Target tables must be owned by the database user, `ecuser` or visible to that user, otherwise they will not be available to the relations editor UI. Use the native PostgreSQL tools to import and add data to these tables. Tables imported into the org000000*`number`*rel schema are accessible by the specific Org only. Use the `relational` schema for tables accessible to all Orgs.

By relating these imported tables to the contacts table, data fields in the imported tables become accessible when you create Lists and Segments or as customized fields when creating a message template. You can use this information in the same way that you use profile data or other existing recipient data.

When you navigate to the Relational Data page you should see something similar to the following:

<a name="figure-relations"></a>

**Figure 11.6. Relational data**

![Relational data](images/relations.jpg)

By default this page displays all relations. When Message Central is first installed, there are no relations on this page.

The following section describes how to add a relationship.

### 11.5.1. Creating a Relation

To create a relation click the NEW RELATION link on the Relational Data page. You should see something similar to the following:

<a name="figure-relations-creating1"></a>

**Figure 11.7. Creating a relation step one**

![Creating a relation step one](images/new_relation1.jpg)

To create a relation to an external table you must have already imported tables as described in [Appendix B, *Exporting Data from MySQL to PostgreSQL*](mc3-export-data.php "Appendix B. Exporting Data from MySQL to PostgreSQL") .

### Warning

Choose a suitable name and add it to the Relation Name text box. *Use only alphanumeric characters, spaces and the underscore character* . Any spaces will be replaced by underscores and uppercase letters are converted to lowercase. The interface allows the use of other characters but using them may result in unexpected behavior.

Use the Source Relation drop-down list box to choose from a full or a limited list of fields related to contacts. You may also choose from any existing relations. Use the Join Type list box to choose the type of join required. The relationship type can be one of "inner join", "left join" or "right join".

A brief description of the join types follows:

*   An "inner join" creates a result set that combines the fields of source and target tables. Only records that match the defined join condition or conditions are included.

    ### Note

    All joins whether left or inner are nested inside a hardcoded left join against the primary query. For this reason, if you use an inner join the result set may not be limited to records with matching data in the joined table.

*   A "left join" contains all records from the Source Table (the table on the left), even if there is no matching record in the Target Table.

*   A "right join" contains all records from the Target Table (the table on the right), even when there is no match.

In the Target Table drop-down list box are system tables and any tables that you have added to the org000000*`number`*rel schema or the `relational` schema. In this list box you should also see the `profiledata`, `profilefields` and the `domains` tables–all system tables. You cannot create join conditions or relation fields until you choose a table from this list box.

The source fields for the join conditions are determined by the source relation that you choose. If you choose `Contact(Simple)` then you can relate to an external table on the following fields only:

*   contactid

*   domainid

*   localpart

*   statusid

If you choose `Contact(Full)`, all the fields in the contact table are available.

To continue creating a relation you need to define how the contact table relates to the target table. Do this by clicking the Add Condition link. You can now define the fields on which the tables are related. Add as many conditions as necessary in order to uniquely define the relationship between the tables. Choose the contact id of the recipients table and the related id field when it is a primary key in the target table, for example.

Once you select the fields for the join condition select an operator.

Selecting an operator reveals all available fields in both the source and the target tables as shown in the following:

<a name="figure-relations-creating2"></a>

**Figure 11.8. Creating a relation step two**

![Creating a relation step two](images/new_relation.jpg)

Check the box to the left of a field if you want it to appear in the result set. You can also alias a field by entering text into the text box to the right of a field name.

### Note

Do not use field names beginning with `xd_` as aliases. This prefix is used to identify field names in relational data. For a list of these field names see [Appendix A, *Fields Used in Conditional Content*](mc3-content-conditional-fields.php "Appendix A. Fields Used in Conditional Content") .

Use the `Choose Operators` link to determine what operators can be used with a field. The numeric operators are pictured below:

<a name="figure-relations-operators"></a>

**Figure 11.9. Numeric operators**

![Numeric operators](images/operators.jpg)

The text operators are as follows:

<a name="figure-relations-text-operators"></a>

**Figure 11.10. Text operators**

![Text operators](images/text_operators.jpg)

The date operators are as follows:

<a name="figure-relations-date-operators"></a>

**Figure 11.11. Date operators**

![Date operators](images/date_operators.jpg)

### Note

As of version 3.7.1, the following date operators have been deprecated:

*   date is between (subsumed by "is between")

*   date is not between (subsumed by "is not between")

*   occurred on this date (subsumed by "is")

Be sure to use the SAVE button when you have finished defining your relation. You cannot save a relation unless you define source and target tables and at least one join condition.

Once you have created a relation, its fields are accessible from elsewhere in the application. You can, for example, select it from the Personalization list box when creating content or reference it when creating a list or segment. For more information see [Section 7.2.2.2, “Personalization and Tools”](mc3-content-editing.php#mc3-content-editor-tools "7.2.2.2. Personalization and Tools").

Fields from a relation appear on the LIST BUILDER CRITERIA page with a field type of `Relational Data`. For more information see [Section 11.8, “List Builder Criteria”](mc3-administration-list-builder-criteria.php "11.8. List Builder Criteria").

### 11.5.2. Editing Relations

Once you have created a relationship you can edit it from the RELATIONAL DATA page. Edit a relation by clicking its name.

The EDIT RELATION page displays the related tables and the kind of join exactly as shown in [Figure 11.8, “Creating a relation step two”](mc3-administration-relations.php#figure-relations-creating2 "Figure 11.8. Creating a relation step two").

If you wish, you can change the tables or the nature of the relationship by redefining the fields that the tables are related on. You can also redefine the fields that are selected.

**Editing Relationships. ** Be careful when editing relationships. Because aggregate fields are dependent upon relationships, altering a relationship may result in the following warning:

```
Because the details of the relation have changed, all
existing aggregate fields have been deleted since they
are no longer valid. If this relation has been used,
the content or reports reliant on it may have been affected
in unpredictable ways.
```

Also, do not make changes that invalidate a relationship that is currently used in content. The mailing may become "stuck" and no error will display. Currently Message Central only checks database errors related to SQL syntax or access violations.

Click the CANCEL button if you wish to undo any changes you may have made.

**11.5.2.1. Creating Aggregate Fields**

Use the AGGREGATE FIELD tab to create an aggregate field. Aggregate fields apply aggregate functions to fields in a relationship. You cannot define an aggregate field until you have defined a relation.

Aggregate fields use aggregating functions to create a total or an average value. For example, you might create an aggregate field that sums total purchases prior to a specified date.

Clicking the NEW AGGREGATE FIELD button opens the following window:

<a name="figure-aggregate-fields"></a>

**Figure 11.12. Creating an aggregate field**

![Creating an aggregate field](images/create_aggregate_field.jpg)

### Note

Only letters, numbers, spaces, dashes, or underscores can be used in the aggregate field name. You cannot have duplicate aggregate field names.

The aggregate functions that you can use are:

*   Count

*   Maximum

*   Minimum

*   Average

*   Sum

When creating an aggregate function, you can choose a `WHERE` condition. Choose a `WHERE` condition in situations where you wish to limit the data selected—where you wish data from a restricted time frame, for example.

When creating a simple `WHERE` condition, the drop down list box as shown in [Figure 11.12, “Creating an aggregate field”](mc3-administration-relations.php#figure-aggregate-fields "Figure 11.12. Creating an aggregate field") lets you select from any field in any of the tables available. You can choose as many `WHERE` conditions as you like. If a simple where condition does not meet your needs, use the Advanced WHERE Clause radio button to create a custom `WHERE` clause.

After defining aggregate fields, you can edit, preview or delete them by checking the appropriate check box and clicking the DELETE or PREVIEW button as shown in the following:

<a name="figure-delete-aggregate"></a>

**Figure 11.13. Deleting or previewing an aggregate field**

![Deleting or previewing an aggregate field](images/delete_aggregate_field.jpg)

### Warning

Aggregate fields are dependent upon relationships. If you alter a relationship any aggregate fields that you have created will be deleted.

In order to preview a relation, you must supply the email address of a recipient.

Once you have created an aggregate field, it is accessible from elsewhere in the application. You can, for example, select it from the Personalization list box when creating content or reference it when creating a list or segment.

You can use aggregate fields in list or segment creation but you will need to add such fields by navigating to the LIST BUILDER CRITERIA page and using the ADD CRITERIA button.

| [Prev](mc3-administration-suppression-lists.php)  | [Up](mc3-administration.php) |  [Next](mc3-administration-link-groups.php) |
| 11.4. Suppression Lists  | [Table of Contents](index.php) |  11.6. Link Groups |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)