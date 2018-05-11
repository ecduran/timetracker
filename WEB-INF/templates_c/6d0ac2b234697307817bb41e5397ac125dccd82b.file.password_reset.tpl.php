<?php /* Smarty version Smarty-3.0.7, created on 2018-03-23 08:24:18
         compiled from "/var/www/html/timetracker/WEB-INF/templates/password_reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14555202355ab50002247991-91429466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d0ac2b234697307817bb41e5397ac125dccd82b' => 
    array (
      0 => '/var/www/html/timetracker/WEB-INF/templates/password_reset.tpl',
      1 => 1516257362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14555202355ab50002247991-91429466',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php echo $_smarty_tpl->getVariable('forms')->value['resetPasswordForm']['open'];?>

<table cellspacing="4" cellpadding="7" border="0">
  <tr>
    <td>
<?php if ($_smarty_tpl->getVariable('result_message')->value){?>
      <table cellspacing="4" cellpadding="7" border="0" width="100%">
        <tr><td align="center"><font color="red"><b><?php echo $_smarty_tpl->getVariable('result_message')->value;?>
</b></font></td></tr>
      </table>
<?php }else{ ?>
      <table>
        <tr>
          <td align="right"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['login'];?>
:</td>
          <td colspan="3"><?php echo $_smarty_tpl->getVariable('forms')->value['resetPasswordForm']['login']['control'];?>
</td>
        </tr>
        <tr>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3" align="center"><?php echo $_smarty_tpl->getVariable('forms')->value['resetPasswordForm']['btn_submit']['control'];?>
</td>
        </tr>
      </table>
<?php }?>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['resetPasswordForm']['close'];?>

