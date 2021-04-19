{include file="header.tpl" title="Users"}


<h1>Users</h1>

<div class="row">

{foreach $queryArr as $row}
	{$row.name} - {$row.email}<br>
{/foreach}

</div>



{include file="footer.tpl"}
