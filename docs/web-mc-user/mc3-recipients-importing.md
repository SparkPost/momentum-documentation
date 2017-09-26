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

| 6.3. Import Lists |
| [Prev](mc3-recipients-lists.php)  | Chapter 6. Recipients |  [Next](mc3-recipients-list-tags.php) |

## 6.3. Import Lists

<a class="indexterm" name="idp1177456"></a>

Instead of adding email recipients to your database one by one, you can import a list of recipients from a CSV file. Exporting data as a CSV file is supported by many applications and is often as simple as choosing the right option from a Save As menu item.

### Note

To avoid problems with connection timeouts, the size limit for file uploads through the web UI is 100 MBs. If your file exceeds this size, you can split the file and upload the sections separately. or adjust the `upload_max_filesize` option found in `/opt/msys/pe2/etc/httpd.conf`.

Prior to version 3.6, only CSV files encoded with Latin ISO-8859-1 would import correctly.

You can also use a loader script from the command line. For more information see ["load_contacts_db.pl"](https://support.messagesystems.com/docs/web-mc/load_contacts_db.php). Unix, Mac or DOS formatted text files are acceptable.

Recipients that do not possess the unique key fields defined for an org cannot be imported. For more information see [Section 11.1.4, “Unique Key Fields”](mc3-administration.php#mc3-administration-orgs-key-fields "11.1.4. Unique Key Fields").

### 6.3.1. The CSV File Format

The order and the number of fields in the CSV file is not important, but, as a minimum, the file you are importing must have an email field or must identify the local part and the domain of an email address. Additionally, this value must be unique for each record. It can also help when the first row of the file identifies the fields.

**Configuration Change. ** As of Message Central 3.6, the first row of a CSV file **must** identify the fields of the records being imported.

A sample CSV might appear as follows:

```
Last Name,First Name,Email Address,Gender,Birthdate,Language,Address #1,Address #2,City,Region,
  Postal Code,Country,Phone,Phone 2
...
Doe,John,john.doe@domain.com,M,1980-01-01,eng,2 Main St,,Dunedin,FL,34698,US,7274834885,7275551212
Doe,Jane,jane.doe@domain.com,F,1980-01-01,eng,3 Main St,,Dunedin,FL,34698,US,7274834885,7275551212
...
```

Note the following characteristics of this file:

*   The language code must be the ISO code for the language. For example, `eng` indicates English. Also note that it is case-sensitive and should be all lowercase.

*   As with the language code, country code should also be the ISO code for the country. For example, the United States is `US`. Also note that this field is case-sensitive and should be all *uppercase*.

*   The phone number should be numeric only.

*   Birth date is accepted in the format `yyyy-mm-dd`. However, the format `October 1, 1970` will also import.

If your file contains customized data—data that is not one of the standard fields associated with recipients—you must first add the customized fields. This process is described in [Section 6.5, “Profile Fields”](mc3-administration-profile-fields.php "6.5. Profile Fields").

If you wish to associate imported recipients with a list tag, you may wish to first define that list tag. For more information on creating preference groups see [Section 6.4, “List Tags”](mc3-recipients-list-tags.php "6.4. List Tags"). Note that if you select one or more preference groups, *all* imported recipients will be associated with that group. You cannot pick and choose which imported contacts will be associated.

Also note that all recipients imported through the web UI are assigned a list tag with the name used when you import the list. If all recipients that are being imported belong to a specific preference group simply use the import name as the tag. For more information see [Section 6.3.3, “Specifying columns”](mc3-recipients-importing.php#mc3-recipients-import_step_two "6.3.3. Specifying columns").

You also have the option of adding additional tags to an imported list. However, additional tags must be created before you import. For example, if you have two lists you want to import, and you want the recipients on both lists to have the tag `Gold Clients`, you can name the first import `Gold Clients` to create the tag, then when you import the second list you can select `Gold Clients` from the ASSOCIATED TAGS frame (see [Figure 6.9, “Specifying columns”](mc3-recipients-importing.php#figure-import-recipients2 "Figure 6.9. Specifying columns")). However, you will still need to name the second import.

### 6.3.2. Identify File

Once you have a CSV file prepared, open the web UI and navigate to the LIST IMPORTS menu item under the RECIPIENTS menu. This displays the screen show below:

<a name="figure-import-recipients"></a>

**Figure 6.8. Identifying the file**

![Importing: step one](images/import_recipients.jpg)

You must choose a file encoding before choosing a file. Available options are:

1.  Big5

2.  EUC-JP

3.  GBK

4.  ISO-2022-JP

5.  ISO-8859-1

6.  Shift JIS

7.  UTF-8 (Default)

8.  Windows 1252

### Note

The encoding of your file may not match any of the options given above, some Mac Excel files for example, fall into this category. In such cases, you can load the file from the command line using the `--import-charset` option. For more information see ["load_contacts_db.pl"](https://support.messagesystems.com/docs/web-mc/load_contacts_db.php).

Click the CHOOSE FILE button to select the file that you wish to import.

### 6.3.3. Specifying columns

The next step is to associate the columns in your data file with database fields. To assist in assigning fields, the first record in your CSV file shows up in [Figure 6.9, “Specifying columns”](mc3-recipients-importing.php#figure-import-recipients2 "Figure 6.9. Specifying columns"). Beside each value is a drop-down list box. This list box shows the standard fields associated with a recipient. followed by profile fields if they are defined and identified. For more information about profile fields see [Section 6.5, “Profile Fields”](mc3-administration-profile-fields.php "6.5. Profile Fields"). You may choose to skip a column or to associate a field with a column by choosing from the drop-down list box to the right of the data.

If the first line of your CSV file contains recipient field names, the columns should already be associated with fields.

<a name="figure-import-recipients2"></a>

**Figure 6.9. Specifying columns**

![Specifying columns](images/import_recipients2.jpg)

You can change the name of the list by clicking in the text box at the top of the page. You can also preview the import by clicking the arrow to the left of Sample Rows.

### Note

The import list name must be unique and must not exceed 53 characters in length. No error is displayed if these constraints are violated. However, you can check the web server error log file (/var/log/pe2-webui/error_log.*`number`*).

The import list name becomes a tag associated with each recipient imported. For more information see [Section 6.4, “List Tags”](mc3-recipients-list-tags.php "6.4. List Tags").

In [Figure 6.9, “Specifying columns”](mc3-recipients-importing.php#figure-import-recipients2 "Figure 6.9. Specifying columns") there are only six fields in each record. A file with the fields shown here will import successfully. When importing lists be sure that the list includes the unique key filed(s) defined for your org. Typically, this is an email field or separately, the local part and domain that make up an email address.

The IMPORT OPTIONS frame appears on the lower right side of the screen. Use the drop-down list box to specify the type of import. Options available are:

*   Add/Update Recipients

*   Only Add Recipients

*   Only Update Recipients

*   Add to Global Suppression List

*   Add top Org Suppression List

### Warning

When a user imports a file and selects `Add/Update Recipients` the system checks for a unique key; finding one it updates, and finding none it inserts. This is considerably slower than a straight import. The `Only Add Recipients` mode does not perform this check; it simply imports **all** users regardless of unique keys. The `Only Update Recipients` updates existing recipients, but does not add any new recipients.

If you want to tag the recipients you are importing, choose a tag from the ASSOCIATED TAGS frame. This frame shows all the existing tags for the current org.

Use the Create as a testing list check box if you wish to create a test list. A test list is a list of recipients created for the purpose of sending previews and other test messages. Test lists behave the same way as any other list except that *only* test lists appear in the Preview tab when previewing content. For more information see [Section 7.4, “Previewing Content”](mc3-content-previewing.php "7.4. Previewing Content").

Blank lines that precede the last entry in a CSV file show up as `lines processed` when imported lists are displayed. Lines that follow the last entry are not counted. This may result in an apparent discrepancy in the total line count. For best results, remove any empty lines, prior to importation, especially trailing ones.

Once the file has been imported, a list of imports is displayed showing the date and the number of records imported.

### Note

When a number of files are imported in succession, not all of them may show up in the list of imports. This is a display issue only and will be fixed in a future release.

Any CSV file that you import will also appear in the LISTS/SEGMENTS submenu. Since imported lists are automatically created as lists for both recipient targeting and content segmentation you may wish to edit your imported list. For instructions on doing this see [Section 6.2, “Lists/Segments”](mc3-recipients-lists.php "6.2. Lists/Segments").

### 6.3.4. Importing Suppression Lists

The UI looks and behaves differently for suppression list imports versus normal imports. Specifically:

*   You cannot leave the import running in the background and go to other pages and come back and see the progress. There is no progress bar.

*   Error or status reporting may not be available for later viewing if you navigate away from the import page.

*   Error and status reporting may not include the same details as a normal import.

Importing a suppression list will proceed much more slowly than a regular import. For example, a 100 MB file, may take hours to process. It is recommended that large scripts be imported manually using the PostgreSQL tools that ship with Message Central. For more information see ["Message Central and PostgreSQL"](https://support.messagesystems.com/docs/web-mc/mc-postgresql.php). If you plan to import a suppression list through the web UI, limit the list to a thousand records.

### 6.3.5. Failure to Import

In some circumstances, records may fail to be imported. In this case, errors are reported in the following way:

```
The file you are attempting to import does not contain a valid unique key field.
Your system administrator can look up the required field for your organization.
```

In this case, records failed to be imported because there was no valid unique key field.

### Note

Any recipients imported into Message Central are subscribed by default and content type is set to `text/html` (unless otherwise specified). Other than the timestamp fields no other default values are assigned to fields that do not appear in the CSV file.

As of version 3.6, if the email address of any individual record is illegal, this record will fail to import and an error message will be displayed.

When recipients are imported through the web or from the command line they are automatically associated with the unique list tag created during the import process. If you wish, you can remove this tag. For more information see [Section 6.4, “List Tags”](mc3-recipients-list-tags.php "6.4. List Tags").

| [Prev](mc3-recipients-lists.php)  | [Up](mc3-recipients.php) |  [Next](mc3-recipients-list-tags.php) |
| 6.2. Lists/Segments  | [Table of Contents](index.php) |  6.4. List Tags |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)