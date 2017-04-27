{include file="header.tpl"}
<div class="header_inside">
<div class="container">
            <div class="row">            
                
<div class="header_buttons_area white_header_area">
                <div class="col-xs-12">
                    <h2>Простое инвестирование в легальный бизнес</h2>
                </div>
                                    <div class="col-xs-6 button_account text-right">
                       <div class="raz-inline-block text-center">
													<a href="/registration" class="account_btn"><img src="/images/Man.png" alt="man">Открыть счет</a>
													<p>Вы еще не зарегистрированы?</p>
                       </div>
                        
                    </div>
                    <div class="col-xs-6 button_login">
                       <div class="raz-inline-block text-center">
													<a href="/login" class="login_btn"><img src="/images/Key.png" alt="key">Войти</a>
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
<div class="about_company">
    <div class="container">
        <div class="row company_info">
            <div class="col-xs-12">
                <h2>О компании</h2>
            </div>
            <div class="content">
            	<img src="/images/doctor1_bg.png" class="main_content_img" alt="doctor">
            	<p class="right_text_block">Компания Weedex Limited предлагает вам долевое участие в высоко прибыльном бизнесе основанном на оптовой продажи медицинской травы.</p>
                 <p class="right_text_block">Компания Weedex Limited предлагает вам большой выбор инвестиционных предложений (инвестиционные планы, реферальные системы). С Weedex Limited вы начнете получать не ограниченный доход,и радоватся вашей прибыли .</p>
                <p class="right_text_block">В 2017 году по оценкам экспертов из Bloomberg и The ArcView Group самым быстрорастущим и прибыльным бизнесом в США станет бизнес по производству и продаже медицинской и рекреационной марихуаны. 
                </p>
                <p class="right_text_block">Самый лучший выбор.</p>
                <blockquote><img src="/images/quote-ic.png"><p>Компания Weedex -это группа инвесторов, которая занимается инвестированием в легальный бизнес на территории США. Все инвестиции осуществляются через венчурные фонды посредством платформы VIA Folio.</p></blockquote>
                <p>Основное направление инвестирования - это компании, производящие медикаменты, в состав которых входит марихуана. Среди них такие гиганты как GW Pharmaceuticals и Palliatech. Годовой оборот медицинской марихуаны в 2016 году по подсчетам Forbes составил около 40 млрд.долларов США.</p>
                <p class="left_block">Вторым направлением инвестирования это рекреационной марихуана, которая легализована в 24 штатах. Годовые обороты данного сегмента рынка постоянно растут и в 2017 году могут составить 8-10 млрд.долларов.</p>
                <p class="right_block">И третье направление это инвестиции в стартапы по разработке программного обеспечения и мобильных приложений. Данное направление является самым перспективным в марихуановом бизнесе. В июне 2016 года корпорация Microsoft стала первой IT- компанией с мировым именем, которая вышла рынок легальной марихуаны, заявив о сотрудничестве с Kind Financial.</p>
                <hr>
              
                <blockquote class="quote_bottom"><p>Компания Weedex находится в числе первых, кто инвестирует в легальный марихуановый бизнес. А значит получает более высокую прибыль на начальном этапе.
Weedex. Безопасные инвестиции в безопасный бизнес.

                </p></blockquote>
            </div>
        </div>

    </div>
</div>

{include file="footer.tpl"}