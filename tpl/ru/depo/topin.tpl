{strip}
{include file='redirect.tpl' link='/home'}
	
{if $list}

		{foreach from=$list key=i item=r name=topin}
			{if $r.RSUM > 0}
				{if $smarty.foreach.topin.index < 5}
				<li>
                   <span class="left">{$r.uLogin}</span>
                   <span class="mid"></span>
                   <span class="right">${_z($r.RSUM, 1)}</span>
                </li>
                
            	{/if}
            {/if}
		{/foreach}
{else}
<li><center>нет информации</cneter></li>
{/if}

{/strip}