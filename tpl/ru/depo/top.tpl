{strip}
{include file='redirect.tpl' link='/home'}
<tbody>
	{if $list2}
			{foreach from=$list2 key=i item=r name=top}
				{if $r.RCNT > 0}
					{if $smarty.foreach.top.index < 5}
						<tr>
				            <td>{$r.uLogin}
				                <span>
				                    {$r.RCNT}
				                </span>
				            </td>
				        </tr>
					{/if}
				{/if}
			{/foreach}
	{else}

		<tr>
			<td colspan='2' align='center'>операций не найдено</td>
		</tr>
	{/if}
</tbody>
{/strip}