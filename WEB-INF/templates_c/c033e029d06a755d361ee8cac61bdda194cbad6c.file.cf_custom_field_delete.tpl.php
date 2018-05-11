<?php /* Smarty version Smarty-3.0.7, created on 2018-03-27 09:50:53
         compiled from "/var/www/html/timetracker/WEB-INF/templates/cf_custom_field_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13139844705aba5a4de233e6-22492313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c033e029d06a755d361ee8cac61bdda194cbad6c' => 
    array (
      0 => '/var/www/html/timetracker/WEB-INF/templates/cf_custom_field_delete.tpl',
      1 => 1521061468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13139844705aba5a4de233e6-22492313',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/timetracker/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><?php echo $_smarty_tpl->getVariable('forms')->value['fieldDeleteForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
<?php if ($_smarty_tpl->getVariable('user')->value->can('manage_custom_fields')){?>
      <table cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td colspan="2" align="center"><b><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('field')->value);?>
</b></td>
        </tr>
        <tr>
          <td colspan="2" align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('forms')->value['fieldDeleteForm']['btn_delete']['control'];?>
&nbsp;</td>
          <td align="left">&nbsp;<?php echo $_smarty_tpl->getVariable('forms')->value['fieldDeleteForm']['btn_cancel']['control'];?>
</td>
        </tr>
      </table>
<?php }?>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['fieldDeleteForm']['close'];?>

