{strip}
<td  class='links'>
	<a href="{_link module='depo/depo'}?id={$l.dID}" >
		{$l.pName}
		<small>{$ststrs[$l.dState]}</small>
	</a>
</td>
<td align="center" class=' td-data'>
	<small style='line-height:25px;'>{$l.dCTS}</small>
</td>
<td align='center' class='image'>
	<i><img src="images/p/{$l.cID}.png" height='25'></i>&nbsp;&nbsp;
	<span>{$l.cName}</span>
</td>
<td align="center" class='balance'>
	{_z($l.dZD, $l.dcID, -1)}
			<small>
			{if $l.cCurr=='USD'}
			$
			{/if}
			{if $l.cCurr=='RUB'}
			P
			{/if}
			{if $l.cCurr=='BTC'}
			Ƀ
			{/if}
			</small>
</td>
<td align="center" class='td-lines td-data'>
	<small style='line-height:25px;'>{$l.dLTS}</small>
</td>
<td align="center" class='balance'>
	{$l.dNPer} из {$l.pNPer}
</td>
<td align="center" class='balance'>
	{_z($l.dZP, $l.dcID, -1)}
	<small>
			{if $l.cCurr=='USD'}
			$
			{/if}
			{if $l.cCurr=='RUB'}
			P
			{/if}
			{if $l.cCurr=='BTC'}
			Ƀ
			{/if}
			</small>
</td>
<td align='center' class='td-lines td-data'>
	<small style='line-height:25px;'>{$l.dNTS}</small>
</td>

{/strip}