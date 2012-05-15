<?php /* Smarty version Smarty-3.0.6, created on 2012-05-15 12:29:40
         compiled from "./templates/user_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14264fb041688e2da6-20295089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b7c149037233aed8f4651867d5b4bb090c2f404' => 
    array (
      0 => './templates/user_login.tpl',
      1 => 1337027661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14264fb041688e2da6-20295089',
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
