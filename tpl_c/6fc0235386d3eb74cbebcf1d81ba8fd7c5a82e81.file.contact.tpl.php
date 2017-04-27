<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 21:18:41
         compiled from "tpl/ru/udp/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32906800558ee6ef888f793-65462957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fc0235386d3eb74cbebcf1d81ba8fd7c5a82e81' => 
    array (
      0 => 'tpl/ru/udp/contact.tpl',
      1 => 1492021117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32906800558ee6ef888f793-65462957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58ee6ef88d2868_04061498',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee6ef88d2868_04061498')) {function content_58ee6ef88d2868_04061498($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="header_inside">
<div class="container">
            <div class="row">            
                
<div class="header_buttons_area white_header_area">
                <div class="col-xs-12">
                    <h2>Простое инвестирование в оптовые поставки медикаментов</h2>
                </div>
                                    <div class="col-xs-6 button_account text-right">
                       <div class="raz-inline-block text-center">
													<a href="/?a=signup" class="account_btn"><img src="/images/Man.png" alt="man">Открыть счет</a>
													<p>Вы еще не зарегистрированы?</p>
                       </div>
                        
                    </div>
                    <div class="col-xs-6 button_login">
                       <div class="raz-inline-block text-center">
													<a href="/?a=login" class="login_btn"><img src="/images/Key.png" alt="key">Войти</a>
													<p>Для зарегистрированных участников</p>
											</div>
                    </div>
                            </div>
            <div class="investment_plans col-xs-12">
							<a href="javascript:void(0)" class="show_plans">
									<p>Показать планы</p>
							</a>
						</div>
        </div>
    </div>
	</div>
	<div style="display: none;" class="investment investment_inner" id="invest">
        <div class="container">
            <h3>Калькулятор</h3>
            <div class="calculator">
                <div class="input_box">
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
                <div class="input_box">
                    <label for="amount">Сумма вклада:</label>
                    <input id="amount" name="amount" type="number">
                </div>
                <div class="input_box">
                    <label>Начисленные проценты:</label>
                    <div id="percent" class="count_box"></div>
                </div>
                <div class="input_box">
                    <label>Итоговая сумма:</label>
                    <div id="total" class="count_box"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- <div id="fake_carousel"></div> -->
            <div class="list_carousel">
                <div style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1192px; height: 550px; margin: 0px; overflow: hidden;" class="caroufredsel_wrapper"><ul style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; z-index: auto; width: 6556px; height: 490px;" id="foo2">
                    
                    <li style="margin-right: 0px;" class="invest_item forDate" data-name="Stability Daily Plan" data-percent="2.3%">
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
                                                    <a href="?a=signup" class="deposit_button">Сделать вклад</a>
                                            </li>
                    <li style="margin-right: 0px;" class="invest_item forDate" data-name="Professional Daily Plan" data-percent="2.9%">
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
                                                    <a href="?a=signup" class="deposit_button">Сделать вклад</a>
                                            </li>
                    <li style="margin-right: 0px;" class="invest_item" data-name="Antibiotik" data-percent="150%">
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
                                                    <a href="?a=signup" class="deposit_button">Сделать вклад</a>
                                            </li>
                    <li style="margin-right: 0px;" class="invest_item" data-name="LabResearch" data-percent="300%">
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
                                                    <a href="?a=signup" class="deposit_button">Сделать вклад</a>
                                            </li>
                    <li style="margin-right: 0px;" class="invest_item" data-name="ITResearch" data-percent="1000%">
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
                                                    <a href="?a=signup" class="deposit_button">Сделать вклад</a>
                                            </li>
                    <li style="margin-right: 0px;" class="invest_item" data-name="MedResearch" data-percent="5000%">
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
                                                    <a href="?a=signup" class="deposit_button">Сделать вклад</a>
                                            </li>
                    <li style="margin-right: 0px;" class="invest_item" data-name="VIP Plan" data-percent="500%">
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
                                                    <a href="?a=signup" class="deposit_button">Сделать вклад</a>
                                            </li>
                    <li style="margin-right: 0px;" class="invest_item" data-name="Razzleton VIP Plan" data-percent="1500%">
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
                                                    <a href="?a=deposit" class="deposit_button">Сделать вклад</a>
                                            </li>
                <li style="margin-right: 0px;" class="invest_item forDate" id="first_slide_item" data-name="Beginner Daily Plan" data-percent="2.1%">
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
                                                    <a href="?a=signup" class="deposit_button">Сделать вклад</a>
                                            </li></ul></div>
                <div class="clearfix"></div>
                <a style="display: inline-block;" class="nav_btn prev" href="#"></a>
                <a style="display: block;" class="nav_btn next" href="#"></a>
            </div>

        </div>
    </div>
	<div class="contact_us_page">
    <div class="contacts_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Контакты</h2>
                </div>
                <div class="col-xs-12">
                    <div class="contacts">
											<h5><img src="/images/point_icon2.png"><span class="contacts-span">Адрес:</span></h5>
                                              					   <p>110, Upper Tulse Hill London LON, United Kingdom, SW2 2RR</p>
                       <hr>
												 <h5><img src="/images/phone_icon2.png"><span class="contacts-span">Телефон:</span></h5>
                       <p>+441748220037<br>(12:00 - 17:00 МСК)<br> пн-пт</p>
                       <hr>
												 <h5><img src="/images/mail_icon2.png"><span class="contacts-span">Email:</span></h5> 
                       <p>admin@razzleton.com</p>
                       <hr>
												 <h5><img src="/images/docment_icon.png"><span class="contacts-span">Юридические документы</span></h5>
                       <p><a href="?a=cust&amp;page=legal_doc">Нажми здесь</a></p>
                       <hr>
												 <h5><img src="/images/follow_icon.png"><span class="contacts-span">Социальные сети:</span></h5>
                       <p>
                           <a href="https://www.facebook.com/groups/razzleton/" target="_blank" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/Razzleton_HC" target="_blank" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://vk.com/razzleton" target="_blank" class="social"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/razzleton.hc/" target="_blank" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/channel/UCVJ8I2ZCRz-6JQCAt9p_P0A" target="_blank" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            <a href="skype:?chat&amp;blob=m_IcgNGrfB3llqY9dg7ivkPuT-a4R-nEtqcoI531AxsNu4-7lmMVIvCR7ckfMppruH8RrnzUQBPvlOk" target="_blank" class="social"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="https://telegram.me/razzleton" target="_blank" class="social"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                       </p>
                    </div>
                    <div class="map_block">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.6549384674386!2d-0.12092948412049989!3d51.446130623001885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876043dc21acd2b%3A0x4e9745c88d67752d!2zMTEwIFVwcGVyIFR1bHNlIEhpbGwsIExvbmRvbiBTVzIgMlJSLCDQktC10LvQuNC60L7QsdGA0LjRgtCw0L3QuNGP!5e0!3m2!1sen!2suk!4v1484072880310" style="border:0" allowfullscreen="" frameborder="0" height="406" width="897"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                   
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>