<?php /* Smarty version Smarty-3.0.6, created on 2012-05-13 23:15:31
         compiled from "./templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97594fb02473d2cc81-56486607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cbf1e8fe3fd40b5d5d98f1481941b0b65780f26' => 
    array (
      0 => './templates/register.tpl',
      1 => 1336943730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97594fb02473d2cc81-56486607',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('status')->value=="przed"){?>
<form class="form" method="POST" action="index.php?module=user&name=register_company">
	<p>Zarejestruj swoją firmę, aby dodać pensjonat itd.</p>
	<?php if ($_smarty_tpl->getVariable('errors')->value){?>
	<div><?php echo $_smarty_tpl->getVariable('errors')->value;?>
</div>
	<?php }?>

	<p class="text">
		<label for="name">Imię</label>
		<p><input type="text" value="<?php echo $_POST['firstname'];?>
" name="firstname" size="50"></p>
	</p>

	<p class="text">
	<label for="surname">Nazwisko:</label>
		<p><input type="text" value="<?php echo $_POST['lastname'];?>
" name="lastname" size="50"></p>
	</p>
	
	<p class="text">
	<label for="company_name">Nazwa firmy:</label>
		<p><input type="text" value="<?php echo $_POST['company_name'];?>
" name="company_name" size="50"></p>
	</p>
	
	<p class="name">
		<label for="address">Adres:</label>
		<p><textarea name="address"><?php echo $_POST['address'];?>
</textarea>
	</p>
	
	<p class="text">
	<label for="nip">NIP:</label>
		<p><input type="text" value="<?php echo $_POST['nip'];?>
" maxlength="10" name="nip" size="50"></p>
	</p>
	
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
		<input type="submit" name="action" value="Zarejestruj" />
	</p>
</form>
<?php }else{ ?>

	<div align="center"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</div>

<?php }?>
