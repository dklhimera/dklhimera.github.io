
{if $list}
    {foreach name=list from=$list key=id name=lastnews item=l}

    		 <li {if $smarty.foreach.lastnews.index == 0}class='act'{/if} >
                <div>
                  <i>{$l.nTS|date_format:"%d"}<small>{$l.nTS|date_format:"%b"}</small></i>
                  <a href="{_link module='news/show' chpu=[$l.nID, $l.nTopic]}">{$l.nTopic}</a>
                  <p>
                    {$l.nAnnounce|nl2br|truncate:150}
                  </p>
                </div>
              </li>





    {/foreach}
{/if}









