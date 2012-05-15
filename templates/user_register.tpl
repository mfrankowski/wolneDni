{if $status=="przed"}
<form class="form" method="POST" action="index.php?module=user&name=register_company">
	<p>Zarejestruj swoją firmę, aby dodać pensjonat itd.</p>
	{if $errors}
	<div>{$errors}</div>
	{/if}

	<p class="text">
		<label for="name">Imię</label>
		<p><input type="text" value="{$smarty.post.firstname}" name="firstname" size="50"></p>
	</p>

	<p class="text">
	<label for="surname">Nazwisko:</label>
		<p><input type="text" value="{$smarty.post.lastname}" name="lastname" size="50"></p>
	</p>
	
	<p class="text">
	<label for="company_name">Nazwa firmy:</label>
		<p><input type="text" value="{$smarty.post.company_name}" name="company_name" size="50"></p>
	</p>
	
	<p class="name">
		<label for="address">Adres:</label>
		<p><textarea name="address">{$smarty.post.address}</textarea>
	</p>
	
	<p class="text">
	<label for="nip">NIP:</label>
		<p><input type="text" value="{$smarty.post.nip}" maxlength="10" name="nip" size="50"></p>
	</p>
	
	<p class="text">
		<label for="email">Email:</label>
		<p><input type="text" value="{$smarty.post.email}" name="email" size="50"></p>
	</p>

	<p class="text">
		<label for="password">Hasło:</label>
		<p><input type="password" name="password" size="50"></p>
	</p>

	<p class="submit">
		<input type="submit" name="action" value="Zarejestruj" />
	</p>
</form>
{else}

	<div align="center">{$msg}</div>

{/if}
