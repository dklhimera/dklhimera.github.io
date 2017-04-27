{strip}
<td class="nowrap" align=center>
	<small>{$l.tLTS}</small>
</td>
<td align=center>
	<a href="{_link module='tickets/ticket'}?id={$l.tID}">{$l.tTopic}</a>
</td>
<td align=center>
	{$_tstates[$l.tState]}
</td>
<td align=center>
	{$l.cnt}
</td>
{/strip}