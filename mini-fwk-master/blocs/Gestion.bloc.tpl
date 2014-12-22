
{if isset($login) }	
	<li><a href='?module=Compte&action=infoPerso'>Mon compte</a></li>
{/if}
{if $admin==1}
	<li><a href='?module=Admin&action=index'>Admin</a></li>
{/if}
</ul>
</div>