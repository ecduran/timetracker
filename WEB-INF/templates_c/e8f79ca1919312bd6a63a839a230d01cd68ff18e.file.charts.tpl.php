<?php /* Smarty version Smarty-3.0.7, created on 2018-03-23 09:29:44
         compiled from "/var/www/html/timetracker/WEB-INF/templates/charts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7945524115ab50f584ad255-23211547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8f79ca1919312bd6a63a839a230d01cd68ff18e' => 
    array (
      0 => '/var/www/html/timetracker/WEB-INF/templates/charts.tpl',
      1 => 1516257362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7945524115ab50f584ad255-23211547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/timetracker/WEB-INF/lib/smarty/plugins/modifier.escape.php';
?><p></p>
<?php echo $_smarty_tpl->getVariable('forms')->value['chartForm']['open'];?>

<table border="0" width="720">
  <tr>
<?php if ($_smarty_tpl->getVariable('on_behalf_control')->value){?>
      <td width="50%" align="center"><?php echo $_smarty_tpl->getVariable('i18n')->value['label']['user'];?>
: <?php echo $_smarty_tpl->getVariable('forms')->value['chartForm']['onBehalfUser']['control'];?>
</td>
  <?php if ($_smarty_tpl->getVariable('chart_selector')->value){?>
      <td width="50%" align="left"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['charts']['chart'];?>
: <?php echo $_smarty_tpl->getVariable('forms')->value['chartForm']['type']['control'];?>
</td>
  <?php }?>
<?php }else{ ?>
  <?php if ($_smarty_tpl->getVariable('chart_selector')->value){?>
      <td width="100%" align="center"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['charts']['chart'];?>
: <?php echo $_smarty_tpl->getVariable('forms')->value['chartForm']['type']['control'];?>
</td>
  <?php }?>
<?php }?>

  </tr>
</table>
<table border="0" width="720">
  <tr>
    <td width="50%" align="center"><img src="<?php echo $_smarty_tpl->getVariable('img_file_name')->value;?>
" border="0"/></td>
    <td>
      <table border="0" cellspacing="3">
      <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('totals')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
      <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']<=12){?>
        <tr><td style="width:7px;height:1em;background-color:<?php echo $_smarty_tpl->getVariable('totals')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['color_html'];?>
;"></td><td><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('totals')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']);?>
</td></tr>
      <?php }?>
      <?php endfor; endif; ?>
      </table>
    </td>
  </tr>
</table>
<p></p>
<table>
  <tr><td align="center"><?php echo $_smarty_tpl->getVariable('i18n')->value['form']['charts']['interval'];?>
: <?php echo $_smarty_tpl->getVariable('forms')->value['chartForm']['interval']['control'];?>
</td></tr>
  <tr><td valign="top"><?php echo $_smarty_tpl->getVariable('forms')->value['chartForm']['date']['control'];?>
</td></tr>
</table>
<?php echo $_smarty_tpl->getVariable('forms')->value['chartForm']['close'];?>

