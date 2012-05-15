<?php /* Smarty version Smarty-3.0.6, created on 2012-05-13 23:56:34
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71034fb02e125727d8-37843075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1336946193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71034fb02e125727d8-37843075',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('status')->value=="przed"){?>
<form class="form" method="POST" action="index.php?module=user&name=login">
	<p>Zaloguj się</p>
	<?php if ($_smarty_tpl->getVariable('errors')->value){?>
	<div><?php echo $_smarty_tpl->getVariable('errors')->value;?>
</div>
	<?php }?>

	<p class="text">
		<label for="email">Email:</label>
		<p><input type="text" value="<?php echo $_POST['email'];?>
" name="email" size="50"></p>
	</p>

	<p class="text">
		<label for="password">Hasło:</label>
		<p><input type="password" name="password" size="50"></p>
	</p>

	<p class="submit">
		<input type="submit" name="action" value="Zaloguj" />
	</p>
</form>
<?php }else{ ?>

	<div align="center"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</div>

<?php }?>
