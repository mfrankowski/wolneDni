{if $status=="przed"}
<form class="form" method="POST" action="index.php?module=object&name=add">
	<p>Dodaj obiekt</p>
	{if $errors}
	<div>{$errors}</div>
	{/if}

	<p class="text">
		<label for="name">Nazwa obiektu</label>
		<p><input type="text" value="{$smarty.post.name}" name="name" size="50"></p>
	</p>

	<p class="text">
	<label for="category">Kategoria:</label>
		<p>
		
		<select name="category">
		{foreach item=category from=$categories}
		<option value="{$category.id}" {if $category.id==$smarty.post.category}selected="SELECTED"{/if}>{$category.name}</option>
		{/foreach}
		</select>
		</p>
	</p>

	<p class="text">
		<label for="street">Ulica (z numerem domu)</label>
		<p><input type="text" value="{$smarty.post.street}" name="street" size="50"></p>
	</p>
	
	<p class="city">
		<label for="name">Miasto</label>
		<p><input type="text" value="{$smarty.post.city}" name="city" size="50"></p>
	</p>
	
	<p class="text">
		<label for="postal">Kod pocztowy</label>
		<p><input type="text" value="{$smarty.post.postal}" name="postal" size="50"></p>
	</p>
	
	<p class="text">
		<label for="description">Opis obiektu</label>
		<p><textarea name="description">{$smarty.post.description}</textarea></p>
	</p>
	

	
	<input type="submit" name="action" value="Dodaj" />
	

</form>

{else}

	<div align="center">{$msg}</div>

{/if}
