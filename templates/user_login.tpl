{if $status=="przed"}
<form class="form" method="POST" action="index.php?module=user&name=login">
	<p>Zaloguj się</p>
	{if $errors}
	<div>{$errors}</div>
	{/if}

	<p class="text">
		<label for="email">Email:</label>
		<p><input type="text" value="{$smarty.post.email}" name="email" size="50"></p>
	</p>

	<p class="text">
		<label for="password">Hasło:</label>
		<p><input type="password" name="password" size="50"></p>
	</p>

	<p class="submit">
		<input type="submit" name="action" value="Zaloguj" />
	</p>
</form>
{else}

	<div align="center">{$msg}</div>

{/if}
