{strip}
{include file='header-page.tpl' class='shot' title='Новости'}
<section class="main1">
    <div class="container">

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <center><h1 ><small>события и</small><span>Новости</span></h1></center>
          <div class="clearfix"></div>
          <br/>
          <br/>
            <div class="news-list">
              {if $list}
                <ul class='news-listing'>
                {foreach name=list from=$list key=id item=l}
                    <li>

                        <a href="{_link module='news/show' chpu=[$l.nID, $l.nTopic]}"> <h2>{$l.nTopic}</h2></a>

                        <div style="min-height: 55px;">
                            {$l.nAnnounce|nl2br|truncate:300}
                            <div class="clearfix"></div>
                        </div>

                        
                         <span style='float:left;' class='small-data'>{$l.nTS}  </span>
                        <a href="{_link module='news/show' chpu=[$l.nID, $l.nTopic]}" class="btn " style='float:right; margin-top:-5px;'>больше</a>
                        <div class="clearfix"></div>

                    </li>
                {/foreach}
                </ul>
                {include file='pl.tpl'}
              {/if}
            </div>






      </div>
    </div>
  </section>


{include class='bgtopother' file='footer.tpl'}
{/strip}


