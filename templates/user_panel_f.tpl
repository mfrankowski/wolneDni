<a href=index.php?module=object&name=add>Dodaj obiekt</a>
<p>Twoje obiekty</p>
{foreach item=object from=$objects}
<p><a href="index.php?module=object&name=edit&object={$object.id}">{$object.name}</a></p>
{/foreach}
