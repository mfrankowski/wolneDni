<?php /* Smarty version Smarty-3.0.6, created on 2012-05-15 15:42:53
         compiled from "./templates/object_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29084fb25d5d6e9a46-73997379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64914e06076fdb861df2a5a570399ce20ae6b569' => 
    array (
      0 => './templates/object_add.tpl',
      1 => 1337089272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29084fb25d5d6e9a46-73997379',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('status')->value=="przed"){?>
<form id="addObjectForm" class="form" method="POST" action="index.php?module=object&name=add">
	<p>Dodaj obiekt</p>
	<?php if ($_smarty_tpl->getVariable('errors')->value){?>
	<div><?php echo $_smarty_tpl->getVariable('errors')->value;?>
</div>
	<?php }?>

	<p class="text">
		<label for="name">Nazwa obiektu</label>
		<p><input type="text" value="<?php echo $_POST['name'];?>
" name="name" size="50"></p>
	</p>

	<p class="text">
	<label for="category">Kategoria:</label>
		<p>
		
		<select name="category">
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['id']==$_POST['category']){?>selected="SELECTED"<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
		<?php }} ?>
		</select>
		</p>
	</p>

	<p class="text">
		<label for="street">Ulica (z numerem domu)</label>
		<p><input type="text" value="<?php echo $_POST['street'];?>
" name="street" size="50"></p>
	</p>
	
	<p class="city"><!--Nie powinno być text?-->
		<label for="name">Miasto</label>
		<p><input type="text" value="<?php echo $_POST['city'];?>
" name="city" size="50"></p>
	</p>
	<div id="mapka" style="width: 700px; height: 500px; border: 1px solid black; background: gray;">
			<!-- tu będzie mapa -->
	</div>
	<p>
		<input id="coords_h" type="text" value="" name="coords_h" size="10" disabled="disabled">
		<input id="coords_v" type="text" value="" name="coords_v" size="10" disabled="disabled">
	</p>
	<p class="text">
		<label for="postal">Kod pocztowy</label>
		<p><input type="text" value="<?php echo $_POST['postal'];?>
" name="postal" size="50"></p>
	</p>
	
	<p class="text">
		<label for="description">Opis obiektu</label>
		<p><textarea name="description"><?php echo $_POST['description'];?>
</textarea></p>
	</p>
	

	
	<input type="submit" name="action" value="Dodaj" />
	

</form>

<?php }else{ ?>

	<div align="center"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</div>

<?php }?>
