<?php /* Smarty version Smarty-3.0.7, created on 2018-03-26 09:54:29
         compiled from "/var/www/html/timetracker/WEB-INF/templates/project_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5387990005ab909a515c973-69760413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01d702d1808ffb947b8afd4e1c4b7b185b41d4bc' => 
    array (
      0 => '/var/www/html/timetracker/WEB-INF/templates/project_edit.tpl',
      1 => 1516257362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5387990005ab909a515c973-69760413',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['projectForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
      <table cellspacing="1" cellpadding="2" border="0">
        <tr>
          <td align = "right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
 (*):</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['projectForm']['project_name']['control'];?>
</td>
        </tr>
        <tr>
          <td align = "right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['description'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['projectForm']['description']['control'];?>
</td>
        </tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['status'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['projectForm']['status']['control'];?>
</td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['users'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['projectForm']['users']['control'];?>
</td>
        </tr>
<?php if ((@MODE_PROJECTS_AND_TASKS==$_smarty_tpl->getVariable('user')->value->tracking_mode)){?>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['tasks'];?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['projectForm']['tasks']['control'];?>
</td>
        </tr>
<?php }?>
        <tr>
          <td></td>
          <td><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['required_fields'];?>
</td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center" height="50"><?php echo $_smarty_tpl->getVariable('forms')->value['projectForm']['btn_save']['control'];?>
 <?php echo $_smarty_tpl->getVariable('forms')->value['projectForm']['btn_copy']['control'];?>
</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['projectForm']['close'];?>

