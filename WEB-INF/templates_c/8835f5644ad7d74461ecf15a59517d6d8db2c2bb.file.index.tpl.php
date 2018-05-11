<?php /* Smarty version Smarty-3.0.7, created on 2018-03-23 03:16:57
         compiled from "/var/www/html/timetracker/WEB-INF/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17389824385ab4b7f9253d33-40724581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8835f5644ad7d74461ecf15a59517d6d8db2c2bb' => 
    array (
      0 => '/var/www/html/timetracker/WEB-INF/templates/index.tpl',
      1 => 1516257362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17389824385ab4b7f9253d33-40724581',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('content_page_name')->value){?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('content_page_name')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?><?php }?>

<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
