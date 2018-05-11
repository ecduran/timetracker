<?php /* Smarty version Smarty-3.0.7, created on 2018-03-27 09:50:45
         compiled from "/var/www/html/timetracker/WEB-INF/templates/cf_dropdown_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17227136055aba5a45dbfcf4-59286134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f536dfa545cd3fc62f8ab0bc341e131051bac2e' => 
    array (
      0 => '/var/www/html/timetracker/WEB-INF/templates/cf_dropdown_options.tpl',
      1 => 1521061570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17227136055aba5a45dbfcf4-59286134',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/timetracker/WEB-INF/lib/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/html/timetracker/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><script>
  function chLocation(newLocation) { document.location = newLocation; }
</script>

<?php echo $_smarty_tpl->getVariable('forms')->value['dropdownOptionsForm']['open'];?>

<table cellspacing="0" cellpadding="7" border="0" width="720">
  <tr>
    <td valign="top">
<?php if ($_smarty_tpl->getVariable('user')->value->can('manage_custom_fields')){?>
      <table cellspacing="1" cellpadding="3" border="0" width="100%">
        <tr>
          <td width="70%" class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['thing_name'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</td>
          <td class="tableHeader"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</td>
        </tr>
  <?php if ($_smarty_tpl->getVariable('options')->value){?>
    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('options')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#f5f5f5,#ffffff"),$_smarty_tpl);?>
">
          <td><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>
</td>
          <td><a href="cf_dropdown_option_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['edit'];?>
</a></td>
          <td><a href="cf_dropdown_option_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['delete'];?>
</a></td>
        </tr>
    <?php }} ?>
  <?php }?>
      </table>

      <table width="100%">
        <tr>
          <td align="center">
            <br>
            <form>
              <input type="button" onclick="chLocation('cf_dropdown_option_add.php?field_id=<?php echo $_smarty_tpl->getVariable('field_id')->value;?>
');" value="<?php echo $_smarty_tpl->getVariable('i18n')->value['button']['add'];?>
">
            </form>
          </td>
        </tr>
      </table>
<?php }?>
    </td>
  </tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['dropdownOptionsForm']['close'];?>

