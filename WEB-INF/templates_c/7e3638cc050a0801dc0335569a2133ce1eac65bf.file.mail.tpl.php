<?php /* Smarty version Smarty-3.0.7, created on 2018-03-26 10:57:22
         compiled from "/var/www/html/timetracker/WEB-INF/templates/mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20965891055ab91862659471-17857449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3638cc050a0801dc0335569a2133ce1eac65bf' => 
    array (
      0 => '/var/www/html/timetracker/WEB-INF/templates/mail.tpl',
      1 => 1516257362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20965891055ab91862659471-17857449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
<tr>
  <td>
    <table cellspacing="4" cellpadding="7" border="0">
    <tr>
      <td valign="top" colspan="2">
        <table>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['mail']['from'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('sender')->value;?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['mail']['to'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['receiver']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['cc'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['cc']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['subject'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['subject']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['comment'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['comment']['control'];?>
</td>
        </tr>
        <tr>
          <td></td>
          <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
        </tr>
        <tr>
          <td colspan="2" align="center" height="70"><?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['btn_send']['control'];?>
</td>
        </tr>
        </table>
      </td>
    </tr>
    </table>
  </td>
</tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['mailForm']['close'];?>

