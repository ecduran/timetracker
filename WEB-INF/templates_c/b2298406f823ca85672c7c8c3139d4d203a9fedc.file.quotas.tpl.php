<?php /* Smarty version Smarty-3.0.7, created on 2018-03-26 09:53:20
         compiled from "/var/www/html/timetracker/WEB-INF/templates/quotas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3020081905ab909603456e6-44345345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2298406f823ca85672c7c8c3139d4d203a9fedc' => 
    array (
      0 => '/var/www/html/timetracker/WEB-INF/templates/quotas.tpl',
      1 => 1517199798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3020081905ab909603456e6-44345345',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table cellspacing="0" cellpadding="7" border="0" width="720">
  <tr><td valign="top"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['quota']['hint'];?>
</td></tr>
</table>

<?php echo $_smarty_tpl->getVariable('forms')->value['monthlyQuotasForm']['open'];?>

<div style="padding: 0 0 10 0">
  <table border="0" class="divider">
    <tr>
      <td align="center">
        <table>
          <tr>
            <td><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['quota']['workday_hours'];?>
:</td>
            <td><?php echo $_smarty_tpl->getVariable('forms')->value['monthlyQuotasForm']['workdayHours']['control'];?>
</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>
<table>
  <tr>
    <td><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['quota']['year'];?>
:</td>
    <td><?php echo $_smarty_tpl->getVariable('forms')->value['monthlyQuotasForm']['year']['control'];?>
</td>
  </tr>
  <tr><td>&nbsp;</td></tr>
  <tr>
    <td colspan="2">
      <table>
        <tr>
          <td class="tableHeaderCentered"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['quota']['month'];?>
</td>
          <td class="tableHeaderCentered"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['quota']['quota'];?>
</td>
        </tr>
<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('months')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value){
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
:</td>
          <td><?php echo $_smarty_tpl->getVariable('forms')->value['monthlyQuotasForm'][$_smarty_tpl->getVariable('month')->value]['control'];?>
</td>
        </tr>
<?php }} ?>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2" style="text-align:center;"><input type="submit" name="btn_submit" value="<?php echo $_smarty_tpl->getVariable('i18n')->value['button']['save'];?>
"></td></tr>
      </table>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['monthlyQuotasForm']['close'];?>


<script>
function yearChange(value){
  var url = window.location.href;

  if (url.indexOf('?') > 0){
    var parameter = url.substring(url.indexOf('?') + 1, url.length);
    url = url.replace(parameter, 'year=' + value);
  } else {
    url = '?year=' + value;
  }

  window.location = url;
}
</script>
