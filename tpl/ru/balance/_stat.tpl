{strip}
{if $stats}
<table class="table table-account"  >
	<tr>
		<th width='180'>Плат. система</th>
		<th>Рефские</th>
		<th>Введено</th>
		<th>На депозитах</th>
		<th>Начислено</th>
		<th>Выведено</th>
	</tr>
{foreach from=$stats key=i item=c}
	{if !$c.cHidden}
		<tr>
			<td class='image'>
				<i>
					<img src="images/p/{$c.cID}.png" height='25'>
				</i>&nbsp;&nbsp;&nbsp;
				<span>{$c.cName}</span>
			</td>
			<td align='center'  class='balance'>{_z($c.ZREF, $c.cID, -1)} <small>{$c.cCurr}</small></td>
			<td align='center'  class='balance'>{_z($c.ZIN, $c.cID, -1)} <small>{$c.cCurr}</small></td>
			<td align='center'  class='balance'>{_z($c.ZINDEPO, $c.cID, -1)} <small>{$c.cCurr}</small></td>
			<td align='center'  class='balance'>{_z($c.ZCALCIN, $c.cID, -1)} <small>{$c.cCurr}</small></td>
			<td align='center'  class='balance'>{_z($c.ZOUT, $c.cID, -1)} <small>{$c.cCurr}</small></td>
		</tr>
	{/if}
{/foreach}
</table>
{/if}
{/strip}