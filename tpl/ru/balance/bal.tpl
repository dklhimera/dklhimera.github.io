{strip}
    {if $currs}
        <table class="table table-account">
          <tr>
            <th width='180'></th>
            <th>Доступно</th>
            <th>Занято</th>
            <th>Ожидает</th>
          </tr>
          {foreach from=$currs key=i item=c}
              {if !$c.cHidden}
              <tr>
                <td class='image'>
                <i>
                  <img src="images/p/{$c.cID}.png" height='25'>
                </i>&nbsp; &nbsp;&nbsp;
                <span>{$c.cName}</span>
                </td>
                <td align='center' nowrap="nowrap" class='balance'>{_z($c.wBal, $c.wcID, -1)} <small>{$c.cCurr}</small></td>
                <td align='center'  nowrap="nowrap" class='balance'>{_z($c.wLock, $c.wcID, -1)} <small>{$c.cCurr}</small></td>
                <td align='center'  nowrap="nowrap" class='balance'>{_z($c.wOut, $c.wcID, -1)} <small>{$c.cCurr}</small></td>
              </tr>
              {/if}
          {/foreach}
        </table>
    {/if}
{/strip}
