{strip}
{include file='header-account.tpl' title='Депозит'}
  {if $el}
    <section class="main4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <h1 style='margin-left:15px;'>
              <small>Ваш</small>
              <span>Депозит</span>
            </h1>
            <div class="clearfix"></div>
            <br/>
            <br/>
            {include file='depo/_depo.tpl'}
          </div>
        </div>
      </div>
    </section>
  {else}
    <section class="main4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <h1 style='margin-left:15px;'>
              <small>Открытие</small>
              <span>депозита</span>
            </h1>
            <div class="clearfix"></div>
            <br/>
            <br/>
            {include file='depo/_depo.interval.tpl'}
    		    {include file='depo/_depo.new.tpl'}
          </div>
        </div>
      </div>
    </section>
  {/if}
{include file='footer-account.tpl'}
{/strip}