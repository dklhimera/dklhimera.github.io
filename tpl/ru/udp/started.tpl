{include file="header.tpl"}
<div class="header_inside">
<div class="container">
            <div class="row">            
                
<div class="header_buttons_area white_header_area">
                <div class="col-xs-12">
                    <h2>Простое инвестирование в оптовые поставки медицинской травы</h2>
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
                    <li style="margin-right: 0px;" class="invest_item" data-name="WEEDEX VIP Plan" data-percent="1500%">
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
<div class="get_started">
            <div class="container">
                <div class="row">
                    <h2>Как начать?</h2>
                    <div class="action_blocks_area">
                        <div class="action_block">
                            <div class="img_block anim-img animated scaleIn">
                                <img src="/images/screen_1n_ru.png" alt="img" class="">
                            </div>
                            <div class="text_block">
                                <h3><span>1.</span>  РЕГИСТРАЦИЯ В СИСТЕМЕ WEEDEX</h3>
                                <p>Для участия в системе WEEDEX вам необходимо пройти простую процедуру регистрации на сайте. Регистрация в системе бесплатная и займет всего несколько минут. После этого вы станете официальным участником и сможете совершать предусмотренные правилами операции. 
								Для того, чтобы зарегистрировать себя в качестве пользователя WEEDEX, нажмите на кнопку «Регистрация» на главной странице сайта, после чего вас перенаправит на страницу с формой регистрации. Заполните всю необходимую информацию и нажмите кнопку «Зарегистрироваться» чтобы завершить процесс.
								Обратите внимание, что соглашаясь с Условиями Пользования при прохождении регистрации, вы автоматически подтверждаете что являетесь совершеннолетним в стране, гражданином которой вы являетесь и пользуясь данным сайтом не нарушаете никаких законов вашего государства.</p>
                            </div>
                        </div>
                        <div class="arrow_img1">
                            <img src="/images/arrow_right.png" alt="arrow">
                        </div>
                        <div class="action_block">
                            <div class="text_block">
                                <h3><span>2.</span>  ОТКРЫТИЕ ДЕПОЗИТА</h3>
                                <p>Чтобы открыть депозит в системе WEEDEX, войдите в свой личный кабинет используя регистрационные данные. На главной странице личного кабинета нажмите на кнопку «Оформить депозит», выберите инвестиционный план который интересен для вас и платежную систему, введите сумму инвестиций. После этого нажмите на кнопку «Открыть новый депозит», которая находится в самом низу страницы. Вы будете перенаправлены на сайт платежной системы. После того, как вы осуществите сделку, вас перенаправит на сайт нашей компании. Ваш депозит будет автоматически зачислен на инвестиционный план, который вы выбрали.
								Рядом с иконкой каждого инвестиционного плана есть калькулятор прибыли, который поможет вам просчитать вашу прибыль.</p>
                            </div>
                            <div class="img_block anim-img animated scaleOut">
                                <img src="/images/screen_2n_ru.png" alt="img" class="">
                            </div>
                        </div>
                        <div class="arrow_img2">
                            <img src="/images/arrow_left.png" alt="arrow">
                        </div>
                        <div class="action_block">
                            <div class="img_block anim-img animated scaleOut">
                                <img src="/images/screen_3n_ru.png" alt="img">
                            </div>
                            <div class="text_block">
                                <h3><span>3.</span>  ПОЛУЧЕНИЕ ПРИБЫЛИ</h3>
                                <p>Процент прибыли от вашего депозита будет автоматически начислен на баланс вашего аккаунта в соответствии с инвестиционным планом, который вы выбрали. Ваш доход зависит от выбранного инвестиционного плана, проценты могут начисляться ежедневно и/или в конце срока вклада. Если вы выбирали ежедневные планы, вы будете получать начисления ежедневно в рабочие дни. В «After plans» и «VIP», тело депозита вместе с процентами будут начислены на баланс вашего аккаунта в конце срока действия инвестиционного плана. Для того, чтобы рассчитать свой доход, воспользуйтесь инвестиционным калькулятором.</p>
                            </div>
                        </div>
                        <div class="arrow_img3">
                            <img src="/images/arrow_right.png" alt="arrow">
                        </div>
                        <div class="action_block">
                            <div class="text_block">
                                <h3><span>4.</span>  ВЫВОД СРЕДСТВ</h3>
                                <p>Для того, чтобы вывести свои доходы или партнерские начисления вам нужно создать запрос на вывод средств на ваш электронный кошелек. Войдите в ваш личный кабинет и нажмите на кнопку «Вывод средств». Заполните форму запроса на вывод и нажмите на кнопку «Вывести средства». Ваш запрос на вывод средств будет обработан нашими операторами в кратчайшие сроки, в соответствии с доступностью наших сотрудников поддержки это может занять до 48 часов. В редких случаях (форс-мажор, технические неполадки, подозрение в мошенничестве) обработка платежа может занимать более 48 часов. Комиссии при переводе отсутствуют.</p>
                            </div>
                            <div class="img_block anim-img animated scaleOut">
                                <img src="/images/screen_4n_ru.png" alt="img">
                            </div>
                        </div>
                        <div class="arrow_img4">
                            <img src="/images/arrow_left.png" alt="arrow">
                        </div>
                    </div>
                    <div class="col-xs-12 button_account">
                                            <a href="/registration" class="account_btn"><img src="/images/Man.png" alt="man">Открыть счет</a>
                                                
                    </div>
                </div>
            </div>
        </div>
{include file="footer.tpl"}