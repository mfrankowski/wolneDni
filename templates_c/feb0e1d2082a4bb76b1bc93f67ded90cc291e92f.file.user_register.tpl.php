<?php /* Smarty version Smarty-3.0.6, created on 2012-05-14 18:58:07
         compiled from "./templates/user_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243494fb041479dcee8-68761605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb0e1d2082a4bb76b1bc93f67ded90cc291e92f' => 
    array (
      0 => './templates/user_register.tpl',
      1 => 1336956352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243494fb041479dcee8-68761605',
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
