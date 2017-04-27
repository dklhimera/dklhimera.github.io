{strip}
{if $curr1}
	{_z($curr1.wBal, $curr1.cID, 2)}
{elseif $user.uBal > 0}
	{include file='balance/bal.tpl'}
{else}

{/if}
{/strip}