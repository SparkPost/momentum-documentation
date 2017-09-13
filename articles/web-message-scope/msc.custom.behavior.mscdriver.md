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

| A.11. The MscDriver Class |
| [Prev](msc.custom.behavior.DriverMPDT.php)  | Appendix A. The APIs for adding Custom Behavior |  [Next](msc.export.format.php) |

## A.11. The MscDriver Class

For your convenience the `MscDriver.php` file is reproduced below.

```
<?php /* vim: set ts=2 sw=2 et: */
/** ----------------------------------------------------------------------- *\
 * Copyright (c) 2009-2011 Message Systems, Inc. All rights reserved
 *
 * THIS IS UNPUBLISHED PROPRIETARY SOURCE CODE OF MESSAGE SYSTEMS
 * The copyright notice above does not evidence any actual or
 * intended publication of such source code.
 *
 * Redistribution of this material is strictly prohibited.
\* ------------------------------------------------------------------------ */

/**
 *
 * The default MessageScope driver for plugin behaviors.
 *
 */
class MscDriver implements MscDriverInterface
{
  public function traceDataFormatter(array $a)
  {
    $len = 0;
    $ret = array('category' => 'Message Details');
    foreach ($a as $key => $val) {
      $label = null;
      $value = null;

      switch ($key) {

        case 'date':
          $label = 'Date';
          $value = $val;
          $len++;
          break;

        case 'fh':
          $label = 'From';
          $value = $val;
          $len++;
          break;

        case 'mfl':
          if (isset($a['mfd'])) {
            $label = 'Env. From';
            $value = "{$a['mfl']}@{$a['mfd']}";
            $len++;
          }
          break;

        case 'th':
          $label = 'To';
          $value = $val;
          $len++;
          break;

        case 'rtl':
          if (isset($a['rtd'])) {
            $label = 'Env. To';
            $value = "{$a['rtl']}@{$a['rtd']}";
            $len++;
          }
          break;

        case 's':
          $label = 'Subject';
          $value = $val;
          $len++;
          break;

        case 'mid':
          $label = 'Message ID';
          $value = $val;
          $len++;
          break;

        case 'sid':
          $label = 'Spool ID';
          $value = $val;
          $len++;
          break;

        case 'bid':
          $label = 'Batch ID';
          $value = $val;
          $len++;
          break;

        case 'cid':
          $label = 'Conn. ID';
          $value = $val;
          $len++;
          break;

        case 'tid':
          $label = 'Thread ID';
          $value = $val;
          $len++;
          break;

        case 'd':
          $label = 'Device Type';
          $value = $val;
          $len++;
          break;

        // SMPP (eq. mailfrom addr & domain)
        case 'oc':
          $label = 'Orig. Code';
          $value = $val;
          $len++;
          break;

        // SMPP (eq. rcpt to addr & domain)
        case 'dc':
          $label = 'Dest. Code';
          $value = $val;
          $len++;
          break;

        // SMPP (eq. subj line)
        case 'mc':
          $label = 'Contents';
          $value = $val;
          $len ++;
          break;

        // everything else
        default:
        case 'rtd':
        case 'mfd':
          break;
      }

      if ($label != null && $value != null) {
        $ret[] = array('label' => $label, 'value' => $value);
      }
    }

    $ret['length'] = $len;
    return $ret;
  }

  public function eventDataFormatter(array $a)
  {
    /* Common fields */
    $required['Date'] = $a['date'];
    $required['Node'] = "{$a['n']} / {$a['sc']}";

    if (isset($a['d'])) {
      $required['Device'] = $a['device'];
    } else {
      $required['Device'] = 'N/A';
    }

    switch ($a['ty']) {
      case 'SMTP:Reception':
      case 'SMPP:Reception':
      case 'SMPP:Status':
        $required['Pathway']   = isset($a['p'])   &&
          !empty($a['p'])   ? $a['p']   : 'N/A';
        $required['P. Group']  = isset($a['pg'])  &&
          !empty($a['p'])   ? $a['pg']  : 'N/A';
        $required['Source IP'] = isset($a['sip']) &&
          !empty($a['sip']) ? $a['sip'] : 'N/A';
        break;

      case 'SMTP:Rejection':
        $required['Pathway']    = isset($a['p'])      &&
          !empty($a['p'])      ? $a['p']      : 'N/A';
        $required['P. Group']   = isset($a['pg'])     &&
          !empty($a['p'])      ? $a['pg']     : 'N/A';
        $required['Source IP']  = isset($a['sip'])    &&
          !empty($a['sip'])    ? $a['sip']    : 'N/A';
        $required['Reason']     = isset($a['smtprr']) &&
          !empty($a['smtprr']) ? $a['smtprr'] : 'N/A';
        $required['Final Rule'] = isset($a['f'])      &&
          !emtpy($a['f'])      ? $a['f']      : 'N/A';
        break;

      case 'SMTP:Delivery':
        $required['Binding']  = isset($a['b'])      &&
          !empty($a['b'])      ? $a['b']      : 'N/A';
        $required['B. Group'] = isset($a['b'])      &&
          !empty($a['bg'])     ? $a['bg']     : 'N/A';
        $required['Dest. IP'] = isset($a['dip'])    &&
          !empty($a['dip'])    ? $a['dip']    : 'N/A';
        $required['Response'] = isset($a['smtprr']) &&
          !empty($a['smtprr']) ? $a['smtprr'] : 'N/A';
        break;

      case 'SMPP:Delivery':
        // identical to SMTP, but Response uses smpprr instead of smtprr
        $required['Binding']  = isset($a['b'])      &&
          !empty($a['b'])      ? $a['b']      : 'N/A';
        $required['B. Group'] = isset($a['b'])      &&
          !empty($a['bg'])     ? $a['bg']     : 'N/A';
        $required['Dest. IP'] = isset($a['dip'])    &&
          !empty($a['dip'])    ? $a['dip']    : 'N/A';
        $required['Response'] = isset($a['smpprr']) &&
          !empty($a['smpprr']) ? $a['smpprr'] : 'N/A';
        break;

      case 'SMTP:Permfail':
      case 'SMTP:Transfail':
        $required['Binding']  = isset($a['b'])      &&
          !empty($a['b'])      ? $a['b']      : 'N/A';
        $required['B. Group'] = isset($a['b'])      &&
          !empty($a['bg'])     ? $a['bg']     : 'N/A';
        $required['Dest. IP'] = isset($a['dip'])    &&
          !empty($a['dip'])    ? $a['dip']    : 'N/A';
        $required['Response'] = isset($a['smtprr']) &&
          !empty($a['smtprr']) ? $a['smtprr'] : 'N/A';
        break;

      case 'SMPP:Permfail':
      case 'SMPP:Transfail':
        // identical to SMTP, but Response uses smpprr instead of smtprr
        $required['Binding']  = isset($a['b'])      &&
          !empty($a['b'])      ? $a['b']      : 'N/A';
        $required['B. Group'] = isset($a['b'])      &&
          !empty($a['bg'])     ? $a['bg']     : 'N/A';
        $required['Dest. IP'] = isset($a['dip'])    &&
          !empty($a['dip'])    ? $a['dip']    : 'N/A';
        $required['Response'] = isset($a['smpprr']) &&
           !empty($a['smpprr']) ? $a['smpprr'] : 'N/A';
        break;

      default:
        $required['Error'] = 'Unhandled event type: ' . $a['ty'];
        break;
    }

    $ret = array('category' => $a['ty']);

    foreach ($required as $key => $value) {
      $ret[] = array (
        'label' => $key,
        'value' => trim($value) === '' ? 'N/A' : $value,
      );
    }

    $len = count($ret);
    $ret['length'] = $len - 1;

    return $ret;
  }

  public function partnerDataFormatter(array $a)
  {
    $ret = array('category' => "{$a['_msc_name_space']} (Raw)");
    unset($a['_msc_name_space']);

    foreach ($a as $key => $value) {
      $ret[] = array (
        'label' => $key,
        'value' => $value,
      );
    }

    $len = count($ret);
    $ret['length'] = $len - 1;

    return $ret;
  }

  public function userDataFormatter(array $input)
  {
    return $this->partnerDataFormatter($input);
  }

  public function getMessageActionButtons()
  {
    return array();
  }

  public function getMessageActionDialog($action_name)
  {
    return null;
  }

  public function doMessageAction($action_name, $get, $post)
  {
    return null;
  }

  public function modifyTrace(array $trace)
  {
      return $trace;
  }

  public function getSearchFilters()
  {
      return array();
  }

  public function getFields()
  {
    return array();
  }
}
```

| [Prev](msc.custom.behavior.DriverMPDT.php)  | [Up](msc.custom.behavior.php) |  [Next](msc.export.format.php) |
| A.10. The DriverMPDT Driver Class  | [Table of Contents](index.php) |  Appendix B. Export Files |

Follow us on:

[![Facebook](https://support.messagesystems.com/images/icon-facebook.png)](http://www.facebook.com/messagesystems) [![Twitter](https://support.messagesystems.com/images/icon-twitter.png)](http://twitter.com/#!/MessageSystems) [![LinkedIn](https://support.messagesystems.com/images/icon-linkedin.png)](http://www.linkedin.com/company/message-systems)