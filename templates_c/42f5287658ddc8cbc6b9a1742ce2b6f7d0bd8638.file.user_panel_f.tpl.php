<?php /* Smarty version Smarty-3.0.6, created on 2012-05-15 12:30:00
         compiled from "./templates/user_panel_f.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92824fb0535c3abbf2-20574853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f5287658ddc8cbc6b9a1742ce2b6f7d0bd8638' => 
    array (
      0 => './templates/user_panel_f.tpl',
      1 => 1337027663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92824fb0535c3abbf2-20574853',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<a href=index.php?module=object&name=add>Dodaj obiekt</a>
<p>Twoje obiekty</p>
<?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('objects')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value){
?>
<p><a href="index.php?module=object&name=edit&object=<?php echo $_smarty_tpl->tpl_vars['object']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['object']->value['name'];?>
</a></p>
<?php }} ?>
