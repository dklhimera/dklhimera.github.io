{strip}
  {include file='header.tpl' title='Главная'}
  <section class="contant">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-7">
            <h2>Добро пожаловать</h2>
            <div class="clearfix"></div>
            <p>
              Инвестиции в криптовалюту- это очень прибыльный способ заработка . Но для того чтобы стать профессиональным аналитиком в области крипто-торговли нужно иметь не мало опыта и средств. Компания <b>bitcoin-express.biz</b> предоставляет уникальную возможность! Любой желающий сможет получать стабильную и высокую прибыль.
            </p>
            <p>
              Достаточно всего лишь создать аккаунт, пополнить баланс и каждый день получать дивиденды.Всю работу выполнят за вас наши высококвалифицированные трейдеры и аналитики,а также команда программистов. Наша команда свела все риски к минимуму!
            </p>
          </div>
          <div class="col-md-5">
            <div class="frame-video">
              <iframe src="https://player.vimeo.com/video/56534143?portrait=0&color=333&loop=1&title=0&badge=0&byline=0" width="360" height="210" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>
          <div class="clearfix"></div>
          <br/>
          <br/>
          <img src="images/bitpic1.png"   style='float:left; height:150px; margin:-10px 15px 15px 15px' alt="">
          <h2>Что мы делаем?</h2>
          <p>
            <b>«bitcoin express»</b> -это мощный инвестиционный фонд. Мы ищем инвесторов, которые будут рады доверить нам свои средства, а мы, в свою очередь, инвестируем эти средства в криптовалюту, далее получаем с этого прибыль и распределяем её между инвесторами.
          </p>
          <a href="/registration" class="btn">Cтать участником</a>
        </div>
      </div>
    </div>
  </section>
  <section class="info">
    <div class="container">
      <div class="row">
          <h1>Мы предлагаем</h1>
           {include file='plans.tpl'}
      </div>
    </div>
  </section>
  <section class="advent">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          {include file='depo/block.stat.tpl' stat=$leftstat }
        </div>
        <div class="col-md-6 block-dark">
          <h2 class='text-left' style='padding-left:25px'>Наши достоинства:</h2>
          <ul>
            <li>SSL шифрование-защита всех операций!</li>
            <li>DDoS защита от всех видов атак различной мощности!</li>
            <li>Все платежные шлюзы надежно защищены и доступны 24 часа в сутки, 7 дней в неделю!</li>
            <li>Активная техническая поддержка!</li>
            <li>Очень гибкий и продуманный маркетинг! </li>
            <li>В нашей компании активно работает штат профессиональных аналитиков!</li>
            <li>Мощная 10 уровневая партнёрская программа! </li>
          </ul>
          <center><a href="/registration" style='margin-top:15px' class="btn btn-dark">Регистрация</a></center>
          <div class="calc-block">
          <h2 class='text-left' style='padding-left:25px'>Калькулятор прибыли:</h2>

            <div class="col-md-4">
              <select class='calculate-select'>
                              <option value="1" selected="selected">3.75% в день</option>
                              <option value="2">5.00% в день</option>
                              <option value="3">7.50% в день</option>
                          </select>
            </div>
            <div class="col-md-4">
              <input type="text" class='calculate-amount' value='5' >
            </div>
            <div class="col-md-4">
              <input class="readonly total"  type="text" value='$7.5' readonly />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {include file='footer.tpl'}
{/strip}