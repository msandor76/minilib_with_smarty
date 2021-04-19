{include file="header.tpl" title="Users in home"}

<h1>Home</h1>

{$felinesays}

<hr>

<h3>Users</h3>

<div class="row">

{foreach $queryArr as $row}
	{$row.name}<br>
{/foreach}

</div>



{include file="footer.tpl"}
