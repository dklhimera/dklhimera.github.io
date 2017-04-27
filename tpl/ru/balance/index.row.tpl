{strip}
<td  class='image'>
	<i>
		<img src="images/p/{$l.ocID}.png" height='30'>
	</i>&nbsp;&nbsp;
	<span>{$l.cName}</span>
</td>
<td  class='links'>
	<a href="{_link module='balance/oper'}?id={$l.oID}" >
		{if $l.oNTS}
			{$op_names[$l.oOper]}
		{else}
			{$op_names[$l.oOper]}
		{/if}
		<small>{$op_statuses[$l.oState]}</small>
	</a>
</td>
<td class='td-lines td-data'>
	<small style='line-height:10px;'>{$l.oCTS}</small>
	
	<small style='line-height:5px; display:block;'>{$l.oTS}</small>
</td>

<td align='center' class='balance' style='line-height:30px;'>
	{if in_array($l.oOper, array('BONUS', 'CASHIN', 'EXIN', 'TRIN', 'SELL', 'REF', 'TAKE', 'CALCIN'))}
		{_z($l.oSum, $l.ocID, -1)}
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
		{if $l.oComis != 0}
			<br>
			<sup>{_z($l.oComis, $l.ocID, -1)}</sup>
		{/if}
	{/if}
</td>
<td align='center' class='balance' style='line-height:30px;'>
	{if in_array($l.oOper, array('PENALTY', 'CASHOUT', 'EX', 'TR', 'BUY', 'GIVE', 'CALCOUT'))}
		<span style="color: red;">{_z($l.oSum, $l.ocID, -1)}
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
		</span>
		{if $l.oComis != 0}
			<br>
			<sup>{_z($l.oComis, $l.ocID, -1)}</sup>
		{/if}
	{/if}
</td>
<td>
	{$l.oBatch}
</td>



{/strip}