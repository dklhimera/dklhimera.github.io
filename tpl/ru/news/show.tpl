{strip}
{include file='header-page.tpl' class='shot' title='Новости'}
<section class="main1">
    <div class="container">

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <center><h1 ><span> Новости</span></h1></center>
          <div class="clearfix"></div>
          <br/>
          <h2 style='margin-bottom:10px;'>{$el.nTopic}</h2>
          <br/>



                          <span style='color:#ccc; text-trunsform:uppercase; font-size:12px;'>{$el.nTS}</span>
                          <hr>
                          <div>
                            {$el.nText}
                            <div class="clearfix"></div>
                          </div>
                          <hr>
                          <center>
                          <a href="javascript:history.go(-1)" class="btn btn-small" ><span>Назад</span> </a>
                          </center>




      </div>
    </div>
  </section>

{include class='bgtopother' file='footer.tpl'}
{/strip}
