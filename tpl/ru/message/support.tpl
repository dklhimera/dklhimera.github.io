{strip}
{include file='header.tpl' class='shot'  title='Контакты'}

<section class="main1">
    <div class="container">

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <center><h1 ><span>Контакты</span></h1></center>
          <div class="clearfix"></div>
          <br/>
          <div>



        

          {if isset($smarty.get.done)}
              <br/>
              <center>
                <h4>Ваш запрос в поддержку успешно отправлен!</h4>
                <p class="info">
                  Администратор ответит Вам в течение 6-и часов
                </p>
              </center>
          {else}
               {include file='message/support.box.tpl'}
          {/if}
       

        

        <div class="clearfix"></div>
      </div>
    </div>
</section>

<section class="map">
  <div class="block-google-location">
      <div id="map"></div>
  </div>
</section>
{include file='footer.tpl' class='other'}
{/strip}