<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 23:22:11
         compiled from "tpl/ru/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1684533065738c0cb4dc313-72527767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c45542bca2bf347a90ae13e6744c20fc2e39adac' => 
    array (
      0 => 'tpl/ru/index/index.tpl',
      1 => 1492028529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684533065738c0cb4dc313-72527767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0cb514da3_87391496',
  'variables' => 
  array (
    'userinfo' => 0,
    'leftstat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0cb514da3_87391496')) {function content_5738c0cb514da3_87391496($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <title>Weedex -  инвестиции в легальный бизнес на территории США. Все инвестиции осуществляются через венчурные фонды посредством платформы VIA Folio.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">           
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">    
    <link href="/css/jquery.fancybox.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/introjs.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/style_ru.css" rel="stylesheet">
    <link href="/css/flipclock.css" rel="stylesheet">
    <link href="/css/telegram.css" rel="stylesheet">    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" async="" src="/js/watch.js"></script>
	<script type="text/javascript" async="" src="/js/recaptcha__ru.js"></script>
	<script src="/js/api.js"></script>    
	</head>
<body>
<div class="wrapper">
    <div class="header_big">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 logo_row">
                    <div class="col-xs-5 phone_number">
                        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://vk.com" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com" target="_blank" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="#" target="_blank" class="social"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="https://telegram.me" target="_blank" class="social"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                        <span class="header_big-number" data-step="29" data-intro="&lt;h4&gt;Call-центр&lt;/h4&gt;&lt;p&gt;Если у вас остались вопросы, вы можете позвонить нам и связаться с нами любым удобным способом через раздел Контакты&lt;/p&gt;" data-highlightclass="menu-highlight" data-position="bottom">
                        <img src="/images/phone_icon.png"> +441748220037 (12:00 - 17:00 МСК)</span>
                    </div>                   
                  	<div class="col-xs-2 logo">
                        <a href="?a=home"><img src="/images/logo.png" alt="logo"></a>
                    </div>                   
                    <div class="col-xs-5 adress pull-right">
                            <div class="language_select">                                
                            </div>                           
							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="account_btn" data-step="28" data-intro="&lt;h4&gt;Регистрация&lt;/h4&gt;&lt;p&gt;Заполните регистрационные данные и станьте участником системы Weedex.&lt;/p&gt;" data-highlightclass="menu-highlight" data-position="bottom"><img src="/images/Man.png" alt="man">Регистрация</a>
                            <a href="/login" class="login_btn"><img src="/images/Key.png" alt="key">Логин</a>
							<?php }else{ ?>
							<a href="/cabinet" class="account_btn"><img src="/images/Man.png" alt="man">Личный кабинет</a>
							<a href="/logout" class="login_btn"><img src="/images/key_arrow.png" alt="key">Выйти</a>
							<?php }?>
                    </div>
                </div>
                <div class="col-xs-12">
                    <?php echo $_smarty_tpl->getSubTemplate ("header_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
                <div class="header_buttons_area header_buttons_area_main" data-step="1" data-intro="&lt;h4&gt;Приветствуем вас на Weedex.com&lt;/h4&gt;&lt;p&gt;Приветствуем вас на сайте Компании и предлагаем ознакомиться с короткой презентацией возможностей платформы Weedex.&lt;/p&gt;" data-highlightclass="menu-highlight" data-tooltipclass="centered-tooltip" style="min-height: 700px;">
                    <ul id="scene_4" class="paralax_zone banner_none banner_4" data-bgheader="images/bg-test.jpg" style="height: 733px" data-calibrate-x="false" data-calibrate-y="false" data-invert-x="true" data-invert-y="false" data-limit-x="true" data-limit-y="0" data-scalar-x="2" data-scalar-y="0" data-friction-x="0.2" data-friction-y="0.8" data-origin-x="0.0" data-origin-y="0.0">
                        <li class="layer little-cap" data-depth="1.80" style="z-index: 1000">
                          <img src="/images/rooster.png" style="margin: 70px 0 0 -105px">
                        </li>
                        <li class="layer bottle1" data-depth="0.00" style="z-index: 500">
                          <img src="/images/bg.png" style="margin: -130px 0 0 -90px">
                        </li>
                        <li class="layer pack2" data-depth="0.00" style="z-index: 900">
                          <img src="/images/buildings.png" style="margin: 331px 0 0 -651px">
                        </li>
                        <li class="layer little-cap" data-depth="0.50" style="z-index: 530">
                            <img src="/images/lights-small.png" style="margin: -92px 0px 0 -35px">
                        </li>
                        <li class="layer little-cap" data-depth="1.60" style="z-index: 540">
                            <img src="/images/coins.png" style="margin: -92px 0px 0 -35px">
                        </li>
                        <li class="layer little-cap" data-depth="3.20" style="z-index: 550">
                            <img src="/images/lights.png" style="margin: -92px 0px 0 -35px">
                        </li>
                        <li class="layer" data-depth="2.20" style="z-index: 950">
                            <img src="/images/text-en.png" style="margin: 215px 0 0 720px">
                        </li>
                        <li class="layer" data-depth="1.40" style="z-index: 1000">
                          <a href="?language=ru#">
                            <img src="/images/btn.png" style="margin: 598px 0 0 788px">
                          </a>
                        </li>
                    </ul>
                    <ul id="scene_3" class="paralax_zone banner_none banner_3" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;" data-calibrate-x="false" data-calibrate-y="false" data-invert-x="true" data-invert-y="false" data-limit-x="true" data-limit-y="0" data-scalar-x="2" data-scalar-y="0" data-friction-x="0.2" data-friction-y="0.8" data-origin-x="0.0" data-origin-y="0.0">
                        <li class="layer little-cap" data-depth="1.0" style="z-index: 650; transform: translate3d(-1.44033px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                          <img src="/images/text-top-ru.png" style="margin: -10px 0 0 445px">
                        </li>
                        <li class="layer bottle1" data-depth="1.20" style="z-index: 1000; transform: translate3d(-1.7284px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                          <img src="/images/capitan.png" style="margin: -130px 0 0 -90px">
                        </li>
                        <li class="layer pack2" data-depth="2.20" style="z-index: 900; transform: translate3d(-3.16873px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                          <img src="/images/text-ru.png" style="margin: -47px 0 0 -161px">
                        </li>
                        <li class="layer little-cap" data-depth="1.00" style="z-index: 550; transform: translate3d(-1.44033px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;">
                            <img src="/images/bg(1).png" style="margin: -95px 0px 0 -265px">
                        </li>
                        <li class="" style="z-index: 950; width: 100%; display: block;">
                            <img src="/images/logo1.png" style="margin: 610px 0 0 -20px; width: 255px;">
                            <img src="/images/logo2.png" style="margin: 610px 0 0 20px;">
                            <img src="/images/logo3.png" style="margin: 610px 0 0 20px;">
                            <img src="/images/logo4.png" style="margin: 610px 0 0 20px;">
                            <img src="/images/logo5.png" style="margin: 610px 0 0 20px;">
                            <img src="/images/logo6.png" style="margin: 610px 0 0 20px;">
                        </li>
                    </ul>
                    <ul id="scene_1" class="paralax_zone banner_none banner_1" style="" data-calibrate-x="false" data-calibrate-y="false" data-invert-x="true" data-invert-y="false" data-limit-x="true" data-limit-y="0" data-scalar-x="2" data-scalar-y="0" data-friction-x="0.2" data-friction-y="0.8" data-origin-x="0.0" data-origin-y="0.0">
                        <li class="layer little-cap" data-depth="1.0" style="z-index: 650">
                          <img src="/images/text-ru(1).png" style="margin: -30px 0 0 -45px">
                        </li>
                        <li class="layer bottle1" data-depth="2.20" style="z-index: 900">
                          <img src="/images/prize.png" style="margin: 90px 0 0 -70px">
                        </li>
                        <li class="layer pack2" data-depth="2.00" style="z-index: 900">
                          <img src="/images/arrow.png" style="margin: 153px 0 0 98px">
                        </li>
                        <li class="layer little-cap" data-depth="1.00" style="z-index: 950">
                            <a href="#" target="_blank">
                                <img src="/images/button-ru.png" style="margin: 225px 0px 0 850px">
                            </a>
                        </li>
                    </ul>

                    <ul id="scene_2" class="paralax_zone banner_none banner_2" style="max-height: 700px" data-calibrate-x="false" data-calibrate-y="false" data-invert-x="true" data-invert-y="false" data-limit-x="true" data-limit-y="0" data-scalar-x="2" data-scalar-y="0" data-friction-x="0.2" data-friction-y="0.8" data-origin-x="0.0" data-origin-y="0.0">
                        <li class="layer little-cap" data-depth="1.0" style="z-index: 650">
                          <img src="/images/bonus-ru.png" style="margin: -66px 0 0 -185px">
                        </li>
                        <li class="layer big-cap" data-depth="2.40" style="z-index: 100">
                          <img src="/images/sky.png" style="margin: -115px 0 0px -590px">
                        </li>
                        <li class="layer bottle1" data-depth="2.20" style="z-index: 900">
                          <img src="/images/bottle.png" style="margin: 73px 0 0 -236px">
                        </li>
                        <li class="layer pack2" data-depth="1.00" style="z-index: 900">
                          <img src="/images/durov.png" style="margin: -217px 0 0 308px">
                        </li>
                        <li class="layer little-cap" data-depth="1.00" style="z-index: 950">
                          <img src="/images/text-ru(2).png" style="margin: 383px 0px 0 225px">
                        </li>
                        <li class="layer pack2" data-depth="1.00" style="z-index: 1000">
                            <a href="?a=cust&amp;page=telegram">
                              <img src="/images/button01-ru.png" style="margin: 368px 0px 0 -269px">
                            </a>
                        </li>
                        <li class="layer little-cap" data-depth="1.00" style="z-index: 950">
                            <a href="#" target="_blank">
                              <img src="/images/button02-ru.png" style="margin: 505px 0px 0 460px">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="investment" id="invest">
        <div class="container">
            <h2 class="color_white">Наши инвестиционные планы</h2>
            <p class="color_white">Специалисты компании разработали привлекательные инвестиционные планы, которые могут удовлетворить запросы всех частных и корпоративных интернет-инвесторов</p>
            <h3>Калькулятор</h3>
            <div class="calculator" data-step="10" data-intro="&lt;h4&gt;Инвестиционный калькулятор&lt;/h4&gt;&lt;p&gt;Для расчета прибыли вы можете воспользоваться инвестиционным калькулятором.&lt;/p&gt;" data-highlightclass="menu-highlight" data-position="bottom">
                <div class="input_box" data-step="11" data-intro="&lt;h4&gt;Инвестиционный план&lt;/h4&gt;&lt;p&gt;Выберите интересующий вас инвестиционный план.&lt;/p&gt;" data-highlightclass="menu-highlight" data-position="bottom">
                    <label for="plan">Выбрать план:</label>
                    <div class="select_box">
                        <select name="plan" id="plan" class="form-control">
                            <option value="Choose Plan" disabled="" selected="">Выберите план</option>
                            <option value="2.1%">Beginner Daily Plan</option>
                            <option value="2.3%">Stability Daily Plan</option>
                            <option value="2.9%">Pro Daily Plan</option>
                            <option value="150%">Antibiotik</option>
                            <option value="300%">Lab R&amp;D</option>
                            <option value="1000%">IT R&amp;D</option>
                            <option value="5000%">Med R&amp;D</option>
                            <option value="500%">VIP Plan</option>
                            <option value="1500%">VIP+ Plan</option>
                        </select>
                    </div>
                </div>
                <div class="input_box introjs-showElement introjs-relativePosition" data-step="12" data-intro="<h4>Сумма вклада</h4><p>Впишите сумму депозита которую вы хотите инвестировать.</p>" data-highlightclass="menu-highlight" data-position="bottom">
                    <label for="amount">Сумма вклада:</label>
                        <input type="number" id="amount" name="amount">
                </div>
                <div class="input_box" data-step="13" data-intro="<h4>Общий процент прибыли</h4><p>Система автоматически рассчитает общий процент прибыли по выбранному инвестиционному плану.</p>" data-highlightclass="menu-highlight" data-position="bottom">
                    <label>Начисленные проценты: </label>
                    <div id="percent" class="count_box"></div>
                </div>
                <div class="input_box" data-step="14" data-intro="<h4>Общая сумма прибыли</h4><p>Общая сумма прибыли в числовом выражении по выбранному инвестиционному плану.</p>" data-highlightclass="menu-highlight" data-position="bottom">
                    <label>Итоговая сумма:</label>
                    <div id="total" class="count_box"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- <div id="fake_carousel"></div> -->
            <div class="list_carousel" data-step="9" data-intro="&lt;h4&gt;Инвестиционные планы&lt;/h4&gt;&lt;p&gt;Инвестиционные планы платформы Weedex. Для прокрутки используйте иконки стрелок.&lt;/p&gt;" data-highlightclass="menu-highlight" data-tooltipclass="centered-tooltip" data-position="top">
                <div class="caroufredsel_wrapper" style="margin-left: 0 !important; display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1192px; height: 550px; margin: 0px; overflow: hidden;">
				<ul id="foo2" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 6556px; height: 490px;">
                    <li class="invest_item forDate" id="first_slide_item" data-name="Beginner Daily Plan" data-percent="2.1%">
                        <div class="get_this">Инвестируй в этот!!!</div>
                        <div class="bottle_tittle">
                         <span>Beginner</span>
                        </div>
                         <div class="percent_number">2.1%</div>
                        <div class="days_info">ежедневно в течении <span class="forDays">15</span> дней</div>
                        <div class="general_info">
                            <div>Минимум: <span>$10</span></div>
                            <div>Максимум: <span>$5000</span></div>
                            <div>Вклад <span>возвращается</span></div>
                            <div>Календарные <span>дни</span></div>
<!--                            <div>Total-<span>131%</span></div>  -->
                        </div>
						    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="deposit_button">Сделать вклад</a>
							<?php }else{ ?>
							<a href="?a=deposit" class="deposit_button">Сделать вклад</a>
							<?php }?>							
                    </li>
                    <li class="invest_item forDate" data-name="Stability Daily Plan" data-percent="2.3%">
                        <div class="get_this">Инвестируй в этот!!!</div>
                        <div class="bottle_tittle">
                            <div class="marker_choice marker_green">
                                <span class="popular_marker">Popular</span>
                            </div>
                        	<span>Stability</span>
                        </div>
                         <div class="percent_number">2.3%</div>
                        <div class="days_info">ежедневно в течении <span class="forDays">30</span> дней</div>
                        <div class="general_info">
                            <div>Минимум: <span>$1001</span></div>
                            <div>Максимум: <span>$10000</span></div>
                            <div>Вклад <span>возвращается</span></div>
                            <div>Календарные <span>дни</span></div>
<!--                            <div>Total-<span>157%</span></div>    -->
                        </div>
                              <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="deposit_button">Сделать вклад</a>
							<?php }else{ ?>
							<a href="?a=deposit" class="deposit_button">Сделать вклад</a>
							<?php }?>
                                            </li>
                    <li class="invest_item forDate" data-name="Professional Daily Plan" data-percent="2.9%">
                        <div class="get_this">Инвестируй в этот!!!</div>
                        <div class="bottle_tittle">
                        	
                        	<span>Pro</span>
                        </div>
                         <div class="percent_number">2.9%</div>
                        <div class="days_info">ежедневно в течении <span class="forDays">55</span> дней</div>
                        <div class="general_info">
                            <div>Минимум: <span>$10001</span></div>
                            <div>Максимум: <span>$100000</span></div>
                            <div>Вклад <span>возвращается</span></div>
                            <div>Календарные <span>дни</span></div>
<!--                            <div>Total-<span>259.5%</span></div>    -->
                        </div>
                                                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="deposit_button">Сделать вклад</a>
							<?php }else{ ?>
							<a href="?a=deposit" class="deposit_button">Сделать вклад</a>
							<?php }?>
                                            </li>
                    <li class="invest_item" data-name="Antibiotik" data-percent="150%" style="margin-right: 0px;">
                        <div class="get_this">Инвестируй в этот!!!</div>
                        <div class="bottle_tittle">
                            <div class="marker_choice marker_red">
                                <span class="recomended_marker">Recomended</span>
                            </div>
                            <span>Antibiotik</span>
                        </div>
                         <div class="percent_number">150%</div>
                        <div class="days_info">через 15 дней</div>
                        <div class="general_info">
                            <div>Минимум: <span>$100</span></div>
                            <div>Максимум: <span>$5000</span></div>
                            <div>Вклад <span>включен</span></div>
                            <div>Рабочие <span>дни</span></div>
<!--                            <div>Total-<span>150%</span></div>    -->
                        </div>
                              <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="deposit_button">Сделать вклад</a>
							<?php }else{ ?>
							<a href="?a=deposit" class="deposit_button">Сделать вклад</a>
							<?php }?>
                                            </li>
                    <li class="invest_item" data-name="LabResearch" data-percent="300%">
                        <div class="get_this">Инвестируй в этот!!!</div>
                        <div class="bottle_tittle"><span>Lab R&amp;D</span></div>
                         <div class="percent_number">300%</div>
                        <div class="days_info">через 30 дней</div>
                        <div class="general_info">
                            <div>Минимум: <span>$15000</span></div>
                            <div>Максимум: <span>$20000</span></div>
                            <div>Вклад <span>включен</span></div>
                            <div>Рабочие <span>дни</span></div>
<!--                            <div>Total-<span>300%</span></div>    -->
                        </div>
                                                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="deposit_button">Сделать вклад</a>
							<?php }else{ ?>
							<a href="?a=deposit" class="deposit_button">Сделать вклад</a>
							<?php }?>
                                            </li>
                    <li class="invest_item" data-name="ITResearch" data-percent="1000%">
                        <div class="get_this">Инвестируй в этот!!!</div>
                        <div class="bottle_tittle"><span>IT R&amp;D</span></div>
                         <div class="percent_number">1000%</div>
                        <div class="days_info">через 60 дней</div>
                        <div class="general_info">
                            <div>Минимум: <span>$5000</span></div>
                            <div>Максимум: <span>$15000</span></div>
                            <div>Вклад <span>включен</span></div>
                            <div>Рабочие <span>дни</span></div>
<!--                            <div>Total-<span>1000%</span></div>    -->
                        </div>
                                                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="deposit_button">Сделать вклад</a>
							<?php }else{ ?>
							<a href="?a=deposit" class="deposit_button">Сделать вклад</a>
							<?php }?>
                                            </li>
                    <li class="invest_item" data-name="MedResearch" data-percent="5000%">
                        <div class="get_this">Инвестируй в этот!!!</div>
                        <div class="bottle_tittle">
                            <div class="marker_choice marker_orange">
                                <span class="people_choice_marker">Peoples choice</span>
                            </div>
                            <span>Med R&amp;D</span>
                        </div>
                         <div class="percent_number">5000%</div>
                        <div class="days_info">через 90 дней</div>
                        <div class="general_info">
                            <div>Минимум: <span>$200</span></div>
                            <div>Максимум: <span>$10000</span></div>
                            <div>Вклад <span>включен</span></div>
                            <div>Рабочие <span>дни</span></div>
<!--                            <div>Total-<span>5000%</span></div>    -->
                        </div>
                                                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="deposit_button">Сделать вклад</a>
							<?php }else{ ?>
							<a href="?a=deposit" class="deposit_button">Сделать вклад</a>
							<?php }?>
                                            </li>
                    <li class="invest_item" data-name="VIP Plan" data-percent="500%">
                        <div class="get_this">Инвестируй в этот!!!</div>
                        <div class="bottle_tittle"><span>VIP Plan</span></div>
                         <div class="percent_number">500%</div>
                        <div class="days_info">через 20 дней</div>
                        <div class="general_info">
                            <div>Минимум: <span>$20000</span></div>
                            <div>Максимум: <span>$50000</span></div>
                            <div>Вклад <span>включен</span></div>
                            <div>Рабочие <span>дни</span></div>
<!--                            <div>Total-<span>500%</span></div>    -->
                        </div>
                                                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="deposit_button">Сделать вклад</a>
							<?php }else{ ?>
							<a href="?a=deposit" class="deposit_button">Сделать вклад</a>
							<?php }?>
                                            </li>
                    <li class="invest_item" data-name="Weedex VIP Plan" data-percent="1500%">
                        <div class="get_this">Инвестируй в этот!!!</div>
                        <div class="bottle_tittle"><span>VIP+ Plan</span></div>
                         <div class="percent_number">1500%</div>
                        <div class="days_info">через 40 дней</div>
                        <div class="general_info">
                            <div>Минимум: <span>$10000</span></div>
                            <div>Максимум: <span>$40000</span></div>
                            <div>Вклад <span>включен</span></div>
                            <div>Рабочие <span>дни</span></div>
<!--                            <div>Total-<span>1500%</span></div>    -->
                        </div>
                                                <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration" class="deposit_button">Сделать вклад</a>
							<?php }else{ ?>
							<a href="?a=deposit" class="deposit_button">Сделать вклад</a>
							<?php }?>
                                            </li>
                </ul></div>
                <div class="clearfix"></div>
                <a class="nav_btn prev disabled" href="?language=ru#" style="display: inline-block;"></a>
                <a class="nav_btn next" href="?language=ru#" style="display: block;"></a>
            </div>
        </div>
    </div>
    <div class="info_block1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>О компании</h2>
                </div>
                <div class="col-xs-6">
                    <img src="/images/doctor1.png" alt="doctor">
                </div>
                <div class="col-xs-6 info_block_text">
                    <div data-step="15" data-intro="&lt;h4&gt;Информация о компании&lt;/h4&gt;&lt;p&gt;Краткая информация о компании и ее деятельности.&lt;/p&gt;" data-position="left">
                    	<p>Компания Weedex -это группа инвесторов, которая занимается инвестированием в легальный бизнес на территории США. Все инвестиции осуществляются через венчурные фонды посредством платформы VIA Folio.</p> 
                    	<p>
					    Основное направление инвестирования - это компании, производящие медикаменты, в состав которых входит марихуана. Среди них такие гиганты как GW Pharmaceuticals и Palliatech. Годовой оборот медицинской марихуаны в 2016 году по подсчетам Forbes составил около 40 млрд.долларов США.</p>
					    <p>
						Вторым направлением инвестирования это рекреационной марихуана, которая легализована в 24 штатах. Годовые обороты данного сегмента рынка постоянно растут и в 2017 году могут составить 8-10 млрд.долларов.

                        </p>                    
                        
                        
                    </div>
                    <a href="/about" class="read_more_btn" data-step="16" data-intro="&lt;h4&gt;Информация о компании&lt;/h4&gt;&lt;p&gt;Узнать больше о деятельности компании можно нажав эту кнопку.&lt;/p&gt;" data-position="left">Читать дальше</a>
                </div>
            </div>
        </div>
    </div>
    <div class="referral_commission pad">
        <div class="container">
            <div class="row" data-step="17" data-intro="&lt;h4&gt;Партнерская программа&lt;/h4&gt;&lt;p&gt;Трехуровневая партнерская программа Weedex позволяет вам получать дополнительный доход от депозитов и начислений ваших рефералов.&lt;/p&gt;" data-position="top">
                <div class="col-xs-12">
                    <h2>Многоуровневая реферальная комиссия от создания депозита и от ежедневных начислений</h2>
                </div>
                <div class="col-xs-4 referrals_block">
                    <div class="col-xs-7">
                        <img src="/images/blue.gif" alt="ukol" class="ukol">
                    </div>
                    <div class="col-xs-5 referrals_offer">
                        <p>Реферал <span>1-го</span> уровня</p>
                        <p>7<span>%</span></p>
                        <p class="margin_text_refferals">
                        	<span class="bold-referrals">+</span>
                        	<img src="/images/blue_ampula.png" alt="">
                        	<span class="bold-referrals">7%</span>
                        	<span class="text-refferals"> от начислений</span>
                        </p>
                    </div>
                </div>
                <div class="col-xs-4 referrals_block">
                    <div class="col-xs-7">
                        <img src="/images/green.gif" alt="ukol" class="ukol">
                    </div>
                    <div class="col-xs-5 referrals_offer">
                        <p>Реферал <span>2-го</span> уровня</p>
                        <p>2<span>%</span></p>
                        <p class="margin_text_refferals">
                        	<span class="bold-referrals">+</span>
                        	<img src="/images/green_ampula.png" alt="">
                        	<span class="bold-referrals">2%</span>
                        	<span class="text-refferals"> от начислений</span>
                        </p>
                    </div>
                </div>
                <div class="col-xs-4 referrals_block">
                    <div class="col-xs-7">
                        <img src="/images/yellow.gif" alt="ukol" class="ukol">
                    </div>
                    <div class="col-xs-5 referrals_offer">
                        <p>Реферал <span>3-го</span> уровня</p>
                        <p>1<span>%</span></p>
                        <p class="margin_text_refferals">
                        	<span class="bold-referrals">+</span>
                        	<img src="/images/yellow_ampula.png" alt="">
                        	<span class="bold-referrals">1%</span>
                        	<span class="text-refferals"> от начислений</span>
                        </p>
                    </div>
                </div>
            </div>
            </div>
    </div>
    <div class="referral_commission pad light">
        <div class="container">
            <div class="row" style="padding-bottom: 0;">
                <div class="col-xs-12">
                    <h2>Партнерская программа</h2>
                </div>
                <div class="col-xs-4 referrals_block">

                        <img src="/images/many-pill.png" alt="pill" class="ukol">

                    <div class="referrals_offer">
                        <p></p>
                        <p>10<span>%</span></p>
                        <p class="margin_text_refferals">
                            <span class="bold-referrals">+</span>
                            <img src="/images/many-pills-s.png" alt="">
                            <span class="bold-referrals">10%</span>
                            <span class="text-refferals"> от начислений</span>
                        </p>
                    </div>
                </div>
                <div class="col-xs-4 referrals_block">

                    <img src="/images/two-pills.png" alt="pill" class="ukol">

                    <div class="referrals_offer">
                        <p></p>
                        <p>3<span>%</span></p>
                        <p class="margin_text_refferals">
                            <span class="bold-referrals">+</span>
                            <img src="/images/two-pills-s.png" alt="">
                            <span class="bold-referrals">3%</span>
                            <span class="text-refferals"> от начислений</span>
                        </p>
                    </div>
                </div>
                <div class="col-xs-4 referrals_block">

                        <img src="/images/one-pill.png" alt="ukol" class="ukol">

                    <div class="referrals_offer">
                        <p></p>
                        <p>1<span>%</span></p>
                        <p class="margin_text_refferals">
                            <span class="bold-referrals">+</span>
                            <img src="/images/one-pill-s.png" alt="">
                            <span class="bold-referrals">1%</span>
                            <span class="text-refferals"> от начислений</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row pad-top">
                <div class="col-xs-12">
                    <div class="col-xs-10">
                        <p class="referral_commission_p">Хотите узнать больше о том, как стать представителем компании и получить повышенный процент вознаграждения от нашей партнерской программы, нажмите на кнопку “Подробнее”</p>
                    </div>
                    <div class="">
                        <a href="?a=cust&amp;page=referal_page" class="read_more_btn" data-step="18" data-intro="&lt;h4&gt;Представитель компании&lt;/h4&gt;&lt;p&gt;Представитель компании&lt;/h4&gt;&lt;p&gt;Если вы обладаете лидерскими качествами и хорошо разбираетесь в работе платформы Weedex, вы можете стать представителем компании в вашем регионе. Подробности по ссылке&lt;/p&gt;" data-position="left">Подробнее</a>
                    </div>
                </div>
                <div class="col-xs-12" style="text-align: center;">
                
                        <div class="">
                            <a href="?a=cust&amp;page=reg_representatives" class="read_more_btn">Представители</a>
                        </div>
                </div>
            </div>
        </div>
            
    </div>
    </div>
    <div class="choose_us">
    <div class="col-xs-12 reasons_block3">
      <div class="container">
            <div id="player" style="padding: 0px; display: block; line-height: 1; text-align: left; user-select: none; overflow: hidden; background-color: rgb(255, 255, 255);"><uppod_player_div style="display: block; position: relative; width: 100%; height: 100%; border: none; background-color: rgb(255, 255, 255); user-select: none; overflow: hidden; margin: 0px; padding: 0px;"><uppod_player_div style="display: block; position: absolute; top: 0px; left: 0px;"><canvas height="670" width="1192"></canvas><uppod_player_div style="display: block; position: absolute; top: 0px; left: 0px;"><canvas height="670" width="1192"></canvas><div style="background-color: transparent; position: absolute; left: 0px; top: 0px;"><iframe id="yt_media_player" style="display: block;" frameborder="0" allowfullscreen="1" title="YouTube video player" width="1192" height="670" src="/index_files/Pf7brKl11pQ.html"></iframe></div></uppod_player_div><uppod_player_div class="uppod-alert" style="display: none; width: 100%; position: absolute; top: 0px; left: 0px; color: rgb(255, 255, 255); z-index: 3;"><uppod_player_div style="display: block;"><canvas height="20" width="1192"></canvas></uppod_player_div><uppod_player_div style="display: block; position: absolute; top: 0px; left: 0px; padding-top: 10px; padding-left: 15px; padding-bottom: 13px; font-family: Verdana; font-size: 11px; font-style: normal; font-weight: normal;"></uppod_player_div><uppod_player_div style="display: block; position: absolute; top: 0px; right: 0px; padding-top: 5px; padding-right: 10px; cursor: pointer; color: rgb(255, 255, 255);">x</uppod_player_div></uppod_player_div><uppod_player_div class="uppod-mouse-move-catcher" style="display: none; z-index: 103; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"></uppod_player_div><script src="/index_files/iframe_api"></script><uppod_player_div id="layer" style="display: none; width: 100%; height: 670px; position: absolute; top: 0px; left: 0px; z-index: 2;"></uppod_player_div><uppod_player_div class="uppod-control_control_bar" style="display: block; position: absolute; z-index: 5; top: 635px; left: 0px;"><uppod_player_div id="uibg" style="display: block;"><canvas height="35" width="1192" style="position: absolute; top: 0px; left: 0px;"></canvas></uppod_player_div><uppod_player_div class="uppod-control_play" style="display: block; cursor: pointer; position: absolute; top: 7.5px; left: 7px;"><canvas height="20" width="20" style="width: 20px; height: 20px; position: absolute; top: 0px; left: 0px; opacity: 1;"></canvas></uppod_player_div><uppod_player_div class="uppod-control_pause" style="display: none; cursor: pointer; position: absolute; top: 7.5px; left: 7px;"><canvas height="20" width="20" style="width: 20px; height: 20px; position: absolute; top: 0px; left: 0px; opacity: 1;"></canvas></uppod_player_div><uppod_player_div class="uppod-control_back" style="display: block; cursor: pointer; position: absolute; top: 7.5px; left: 32px;"><canvas height="20" width="30" style="width: 30px; height: 20px; position: absolute; top: 0px; left: 0px; opacity: 1;"></canvas></uppod_player_div><uppod_player_div class="uppod-control_time_play" style="display: block; width: 30px; color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: Verdana; text-align: center; margin: 0px; cursor: default; position: absolute; top: 10.5px; white-space: nowrap; left: 67px;">0:00</uppod_player_div><uppod_player_div class="uppod-control_line" style="display: block; position: absolute; top: 15.5px; cursor: pointer; left: 105px;"><uppod_player_div style="display: block; position: absolute; left: 0px; top: 0px; width: 938px; height: 4px; border-radius: 0px; opacity: 0.3; background-color: rgb(255, 255, 255);"></uppod_player_div><uppod_player_div style="display: block; position: absolute; left: 0px; top: 0px; width: 0px; height: 4px; background-color: rgb(255, 255, 255); border-radius: 0px; opacity: 0.4;"></uppod_player_div><uppod_player_div style="display: block; position: absolute; left: 0px; top: 0px; width: 0px; height: 4px; background-color: rgb(255, 255, 255); border-radius: 0px; opacity: 1;"></uppod_player_div></uppod_player_div><uppod_player_div class="uppod-control_line_btn" style="display: block; position: absolute; height: 20px; cursor: pointer; width: 938px; top: 7px; left: 105px;"></uppod_player_div><uppod_player_div class="uppod-control_time_all" style="display: block; width: 30px; color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: Verdana; text-align: center; margin: 0px; cursor: default; position: absolute; top: 10.5px; white-space: nowrap; left: 1051px;">1:59</uppod_player_div><uppod_player_div class="uppod-control_volume" style="display: block; cursor: pointer; position: absolute; top: 7.5px; left: 1086px;"><canvas height="20" width="20" style="width: 20px; height: 20px; position: absolute; top: 0px; left: 0px; opacity: 1;"></canvas></uppod_player_div><uppod_player_div class="uppod-control_volume_mute" style="display: none; cursor: pointer; position: absolute; top: 7.5px; left: 1086px; opacity: 1;"><canvas height="20" width="20" style="width: 20px; height: 20px; position: absolute; top: 0px; left: 0px; opacity: 1;"></canvas></uppod_player_div><uppod_player_div class="uppod-control_volume_barline" style="display: block; cursor: pointer; position: absolute; top: 15.5px; left: 1111px;"><uppod_player_div style="display: block; cursor: pointer; position: absolute; left: 0px; top: -10px; width: 40px; height: 24px; opacity: 0;"></uppod_player_div><uppod_player_div style="display: block; cursor: pointer; position: absolute; left: 0px; top: 0px; width: 40px; height: 4px; border-radius: 0px; opacity: 0.4; background-color: rgb(255, 255, 255);"></uppod_player_div><uppod_player_div style="display: block; cursor: pointer; position: absolute; left: 0px; top: 0px; height: 4px; border-radius: 0px; opacity: 1; background-color: rgb(255, 255, 255); width: 32px;"></uppod_player_div></uppod_player_div><uppod_player_div class="uppod-control_enter_fullscreen" style="display: block; cursor: pointer; position: absolute; top: 7px; left: 1161px;"><canvas height="20" width="20" style="width: 20px; height: 20px; position: absolute; top: 0px; left: 0px; opacity: 1;"></canvas></uppod_player_div><uppod_player_div class="uppod-control_exit_fullscreen" style="display: none; cursor: pointer; position: absolute; top: 7.5px; left: 1161px;"><canvas height="20" width="20" style="width: 20px; height: 20px; position: absolute; top: 0px; left: 0px; opacity: 1;"></canvas></uppod_player_div><uppod_player_div class="uppod-control_buffer" style="display: none; width: 30px; color: rgb(255, 255, 255); font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 10px; line-height: normal; font-family: Arial; text-align: left; cursor: default; position: absolute; white-space: nowrap; left: 105px; top: 6px;">Загрузка</uppod_player_div></uppod_player_div><uppod_player_div class="uppod-control_start" style="display: block; cursor: pointer; position: absolute; top: 297.5px; left: 558.5px; z-index: 7;"><uppod_player_div style="display: block;"><canvas height="75" width="75" style="opacity: 0.1; position: absolute; top: 0px; left: 0px;"></canvas></uppod_player_div><canvas height="75" width="75" style="width: 75px; height: 75px; position: absolute; top: 20px; left: 20px; opacity: 1;"></canvas></uppod_player_div></uppod_player_div></uppod_player_div></div>
            <div class="trailer_l" style="display: block;">
                <div class="play-video" value="Play" onclick="player.Play();">
                  <img src="/images/video-poster.png" alt="">
                </div>
            </div>
      </div>
    </div>

        <div class="container">
            <div class="row" data-step="19" data-intro="&lt;h4&gt;Почему вам стоит выбрать нас&lt;/h4&gt;&lt;p&gt;Преимущества и достижения компании&lt;/p&gt;" data-highlightclass="choose_us-highlight menu-highlight" data-position="top">
                <div class="col-xs-12">
                    <h2>Почему стоит выбрать нас?</h2>
                </div>
                <div class="col-xs-4 reasons_block1">
                    <p><img src="/images/why_we_icon1.png">Стабильный доход</p>
                    <p><img src="/images/why_we_icon2.png">Официальная компания</p>
                    <p><img src="/images/why_we_icon3.png">Страхование вкладов</p>
                </div>
                <div class="col-xs-4 reasons_block2">
                    <p><img src="/images/why_we_icon4.png">Домен на 10 лет</p>
                    <p><img src="/images/why_we_icon5.png">Мощная DDoS защита</p>
                    <p><img src="/images/why_we_icon6.png">Шифрование Comodo Green EV-SSL</p>
                </div>
                <div class="col-xs-4 reasons_block2">
                    <p><img src="/images/why_we_icon7.png">Профессиональная команда</p>
                    <p><img src="/images/why_we_icon8.png">Квалифицированная поддержка</p>
                </div>                
            </div>
        </div>
    </div>

   
   
   
    <?php echo $_smarty_tpl->getSubTemplate ('depo/block.stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('stat'=>$_smarty_tpl->tpl_vars['leftstat']->value), 0);?>


   	
   
	     <div class="info-block2">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 latest_news_block" data-step="23" data-intro="&lt;h4&gt;Новости&lt;/h4&gt;&lt;p&gt;Актуальные новости компании&lt;/p&gt;" data-highlightclass="menu-highlight" data-position="right">
                    <h2>Последние новости</h2>
                        <div class="col-xs-12 news">
                        <a href="?a=news#558"><h4>Увеличен лимит инвестиционного плана Antibiotic - теперь от 100 до 5000 $!</h4></a>
                        <p>Команда Weedex Limited продолжает приводить в соответствие условия работы на нашей платформе с потребностями каждого инвестора и партнера компании.
                        <a href="?a=news#558"> Больше </a>
                        </p>
                        <p class="news_date"><img src="/images/news_clock.png"> Feb-3-2017 07:22:25 PM</p>
                        <a href="?a=news" class="all_news_btn hidden">Все новости</a>
                    </div>
                                    </div>
                <div class="col-xs-6 our_sertificates_block">
                    <h2>Сертификаты</h2>
                    <div class="col-xs-12">
                        <div class="col-xs-8 icons_block" data-step="24" data-intro="&lt;h4&gt;Защита работоспособности платформы&lt;/h4&gt;&lt;p&gt;Weedex имеет несколько степеней защиты личной информации инвесторов и работоспособности платформы.&lt;/p&gt;" data-highlightclass="menu-highlight" data-position="left">
                            <div class="col-xs-4 icon-pairs">
                                <div class="col-xs-12 icon_img">
                                <a href="#" target="_blank" class="icon_img_href"><img src="/images/icon_1.png" alt="icon"></a>
                                </div>
                                <div class="col-xs-12 icon_img">
                                 <a href="#" target="_blank" class="icon_img_href"><img src="/images/sitelock1.png" alt="icon"></a>
                                </div>
                            </div>
                            <div class="col-xs-4 icon-pairs">
                                <div class="col-xs-12 icon_img">
								<!-- <a href="#" class="icon_img_href"> --><img src="/images/icon_2.png" alt="icon"><!-- </a> -->
                                </div>
                                <div class="col-xs-12 icon_img">
								<a href="#" target="_blank" class="icon_img_href"><img src="/images/icon_3.png" alt="icon"></a>
                                </div>
                            </div>
                            <div class="col-xs-4 icon-pairs">
                                <div class="col-xs-12 icon_img">
								<a href="#" target="_blank" class="icon_img_href"><img src="/images/trust_2.png" alt="icon"></a>
                                </div>
                                <div class="col-xs-12 icon_img">
								<a href="#" target="_blank" class="icon_img_href"><img src="/images/trust_geo.png" alt="icon"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 certificates_block text-center">
                            <a id="single_fancy_1" href="/images/certificate_1.png" alt="certificates">
                                <img src="/images/certificate_1.png" alt="certificates" data-step="25" data-intro="&lt;h4&gt;Сертификаты&lt;/h4&gt;&lt;p&gt;Наши сертификаты и регистрационные документы. Более подробно вы можете ознакомиться с ними нажав на картинку.&lt;/p&gt;" data-highlightclass="menu-highlight" data-position="left">
                            </a>
                            <a class="white_link" target="_blank" href="#">Проверить компанию</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="follow_us">
        <div class="container">
            <div class="row" data-step="26" data-intro="&lt;h4&gt;Социальные сети&lt;/h4&gt;&lt;p&gt;Официальные страницы компании в социальных сетях, подписывайтесь и узнавайте все самое интересное первыми.&lt;/p&gt;" data-position="top">
                <div class="col-xs-12">
                    <h2>Следите за нами</h2>
                </div>
                <div class="col-xs-3 social_pill_block fb_pill_block">
                    <div class="col-xs-4">
                        <a href="https://www.facebook.com" target="_blank"><img src="/images/pill_fb.png" alt="pill"></a>
                    </div>
                    <div class="col-xs-8 pill_about">
                        <a href="https://www.facebook.com" target="_blank">Facebook</a>
                                            </div>
                </div>
                <div class="col-xs-3 social_pill_block tw_pill_block">
                    <div class="col-xs-4">
                        <a href="https://twitter.com" target="_blank"><img src="/images/pill_tw.png" alt="pill"></a>
                    </div>
                    <div class="col-xs-8 pill_about">
                        <a href="https://twitter.com" target="_blank">Twitter</a>
                                            </div>
                </div>
                <div class="col-xs-3 social_pill_block insta_pill_block">
                    <div class="col-xs-4">
                        <a href="https://www.instagram.com" target="_blank"><img src="/images/pill_insta.png" alt="pill"></a>
                    </div>
                    <div class="col-xs-8 pill_about">
                        <a href="https://www.instagram.com" target="_blank">Instagram</a>
                                            </div>
                </div>
                <div class="col-xs-3 social_pill_block vk_pill_block">
                    <div class="col-xs-4">
                        <a href="https://vk.com" target="_blank"><img src="/images/pill_vk.png" alt="pill"></a>
                    </div>
                    <div class="col-xs-8 pill_about">
                        <a href="https://vk.com" target="_blank">Vkontakte</a>
                                            </div>
                </div>
            </div>
        </div>
    </div>
        <div class="follow_us_hr"></div>
    <div class="we_accept we_accept_ru">
        <div class="container">
            <div class="row" data-step="27" data-intro="&lt;h4&gt;Платежные системы&lt;/h4&gt;&lt;p&gt;Платежные системы при помощи которых можно открыть депозит в Weedex.&lt;/p&gt;" data-position="top">
                <div class="col-xs-12">
                    <h2>Доступные платежные системы</h2>
                </div>
                <div class="col-xs-12 payment_systems_area">
                    <div class="payment_system pm_system">                        
                    </div>
                    <div class="payment_system payeer_system">                        
                    </div>
                    <div class="payment_system bitcoin_system">                        
                    </div>
                    <div class="payment_system nix_system">
                    </div>
                    <div class="payment_system neteller_sytem">                        
                    </div>
                    <div class="payment_system solid_system">                        
                    </div>
                    <div class="payment_system adv_system">                        
                    </div>
                    <div class="payment_system payza_system">                        
                    </div>
                    <div class="payment_system ya_system">                        
                    </div>
                    <div class="payment_system qi_system">                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="choose_us">
	    <div class="container">
            <div class="row" data-step="19" data-intro="&lt;h4&gt;Why us&lt;/h4&gt;&lt;p&gt;Our advantages and achievements.&lt;/p&gt;" data-highlightclass="choose_us-highlight menu-highlight" data-position="top" style="padding-bottom:25px">
                <div class="col-xs-12" style="text-align:center; color:#fff;">
                    <h2>Персональный аккаунт в телефоне</h2>
					<p>Технологии развиваются, и наша компания не стоит на месте. Инвестиции и депозиты в телефоне. Мобильные приложения на популярных платформах</p>
                </div>
                <div class="col-xs-6 reasons_block1" style="padding-top:40px">
                    <p></p><div class="appst-img"></div><p></p>
				</div>
                <div class="col-xs-6 reasons_block2" style="padding-top:40px">
                    <p></p><div class="playmr-img"></div><p></p>
				</div>                
            </div>
        </div>
    </div>

<div id="referal-popup" class="action_popup" style="color: #fff;">
    <img src="/images/close_window.png" alt="close" class="close_calculator_window">
    <h4>Условия Black Friday!</h4>
    <p>+ 5% к новому депозиту.<br>Реферальная программа 12%-2%-1% от депозита</p>    
</div>

<div class="overlay"></div>
<script type="text/javascript">
	videoID = 'Pf7brKl11pQ';
</script>
<div class="skype-chat">
    <a href="#" target="_blank" class="button-left skype-btn"><img src="/images/skype.png"></a>
</div>
<div class="telegram-chat">
    <a href="https://telegram.me" target="_blank" class="button-left telegram-btn"><img src="/images/tg.png"></a>
</div>
<div class="telegram-channel">
    <a href="https://telegram.me" target="_blank" class="button-left telegram-btn2"><img src="/images/tg2.png">
    <div class="tg-counter-wrapp">
    	<div class="action-alarm"></div>
        <span>до окончания акции:</span>
    	<div class="tg-counter"></div>
    </div>
    </a>
</div>

<div class="video-page">
    <a href="#" target="_blank" class="button-left video-button"><img src="/images/video.png"></a>
</div>

<a href="?language=ru#" class="to-top-arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 copyright_blok">
                    <p>Copyright © 1995 - 2026 Weedex</p>
                    <p>Все права защищены</p>
                                            <a href="/registration" class="footer_btn"><img src="/images/Man.png" alt="man">Открыть счет</a>
                                            <!--                        <a href="/registration" class="footer_btn"><img src="/images/Man.png" alt="man">Open An Account</a>
                    -->
                    <!-- <button type="button" class="btn btn-default"><img src="images/man.png" alt="man">Open An Account</button> -->
                </div>
                <div class="col-xs-2 menu-block1 menu-block">
                    <ul class="footer_menu">
                        <li><a href="/about">О нас</a></li>
                        <li><a href="/started">Как начать?</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/rules">Правила</a></li>
                    </ul>
                </div>
                <div class="col-xs-2 menu-block2 menu-block">
                    <ul class="footer_menu">
                        <li><a href="?a=rateus">Рейтинги</a></li>
                        <li><a href="?a=cust&amp;page=contact_us">Контакты</a></li>
                        <li><a href="?a=cust&amp;page=anti_spam">Анти-SPAM соглашение</a></li>
                        <li><a href="?a=cust&amp;page=policy">Политика конфиденциальности</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 contacts_block">
                    <div class="adress">
                        <img src="/images/point_icon.png"><span>110, Upper Tulse Hill London LON, United Kingdom, SW2 2RR</span>
                    </div>
                    <div class="phone_number">
                        <img src="/images/phone_icon.png"><span> +441748220037 (12:00 - 17:00 МСК)<br> пн-пт</span>
                    </div>
                    <div class="email">
                        <a href="#"><img src="/images/mail_icon.png"> admin@Weedex.com</a>
                    </div>
                </div>
                <div class="col-xs-12 footer_social">
                    <a href="https://www.facebook.com/groups" target="_blank" class="fb_icon"><img src="/images/fb.png"></a>
                    <a href="https://twitter.com" target="_blank" class="tw_icon"><img src="/images/tw.png"></a>
                    <a href="https://vk.com" target="_blank" class="vl_icon"><img src="/images/vk.png"></a>
                    <a href="https://www.instagram.com" target="_blank" class="instagram_icon"><img src="/images/inst.png"></a>
                    <a href="https://www.youtube.com" target="_blank" class="instagram_icon"><img src="/images/youtube.png"></a>
                    <a href="#" target="_blank" class="instagram_icon"><img src="/images/skype(1).png"></a>
                    <a href="https://telegram.me" target="_blank" class="instagram_icon"><img src="/images/telegram.png"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- include jQuery + carouFredSel plugin -->
    <script type="text/javascript" language="javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/parallax.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.nicescroll.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/animate-css.js"></script>
    <script type="text/javascript" language="javascript" src="/js/intro.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" language="javascript" src="/js/jquery.validate.min.js"></script>
    <script type="text/javascript" language="javascript" src="/js/flipclock.js"></script>
    <script type="text/javascript" language="javascript" src="/js/uppod-0.8.4.js"></script>
    <script type="text/javascript" language="javascript" src="/js/common.js"></script>
</body>
</html>



<?php }} ?>