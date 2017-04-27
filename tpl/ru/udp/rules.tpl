{include file="header.tpl"}
<div class="header_inside">
<div class="container">
            <div class="row">            
                
<div class="header_buttons_area white_header_area">
                <div class="col-xs-12">
                    <h2>Простое инвестирование в оптовые поставки медикаментов</h2>
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
	
	<div class="tpl_wrap clearfix rules">
  <div class="container">
    <div class="row">
    <h2>Условия Пользования</h2>

    <p align="justify">

    В данном соглашении описаны основные правила и условия пользования (в дальнейшем "Условия Пользования") для доступа к услугам или функциям на сайтах принадлежащих и управляемых WEEDEX Limited (в дальнейшем так же "WEEDEX"), в том числе https://WEEDEX.com/ . Компания оставляет за собой право время от времени добавлять дополнительные положения соглашения или редактировать уже имеющиеся, поскольку финансовые предложения компании могут быть расширены. Настоящее соглашение так же будет применимо к другим сайтам компании WEEDEX Limited.<br><br> 

    Так же мы не исключаем возможности общения с Вами на сайтах третьих лиц (социальные сети, инвестиционные форумы и т.д.) где мы публикуем свой контент, например, FACEBOOK.COM, INSTAGRAM.COM, TWITTER.COM, VK.COM, MMGP.RU. Будьте внимательны, компания WEEDEX Limited не контролирует сайты третьих лиц  и настоящее Условие Пользования не распространяются на сайты, которые не принадлежат нам. Обязательно ознакомьтесь с условиями пользования размещенные на сайты третьих лиц.<br><br>

    Используя функции https://WEEDEX.com/  Вы выражаете свое согласие с настоящими Условиями Пользования, Политики Конфиденциальности, принципами и правилами пользования, даже если Вы их не читали. Если Вы не согласны с любым из этих соглашений Вы не должны использовать наши сайты.<br><br>

    Компания WEEDEX Limited оставляет за собой право изменять или модифицировать любое из условий, содержащихся в Правилах Пользования. Компания WEEDEX Limited оставляет за собой право время от времени, без предварительного уведомления и по своему усмотрению, редактировать данное соглашение. Дальнейшее использование сайта автоматически означает принятие таких изменений или модификаций Вами. Если же Вы не согласны с этими изменениями или модификациями, Вы должны немедленно прекратить использование веб-ресурсов компании. Желательно чтобы Вы как можно чаще просматривали Условия Пользования и Политику Конфиденциальности.
    </p>

    <h2>Авторское право</h2>

    <p align="justify">

    Дизайн, текст, графика, логотипы, иконки кнопок, изображения, аудио и видео контент, подбор и расположение их и все программное обеспечение на сайтах защищено авторским правом (C) 1995-2016 WEEDEX Limited.<br><br> 
    Компиляция (имеется в виду сбор, размещение и монтаж) всего содержимого сайта является исключительной собственностью WEEDEX (с) и защищены международными законами об авторских правах.

    </p>

    <h2>Использование контента и ограничение ответственности</h2>

    <p align="justify">

    Вы можете получить доступ к содержимому и любому другому контенту на сайте только разрешенных в соответствии с настоящими Условиями Пользования и Политикой Конфиденциальности. Соглашаясь с Условиями Пользования Вы берете обязанность не участвовать в использовании, копировании или распространении любого контента сайта, кроме случаев, прямо предусмотренных в настоящем документе.
    </p>

    <h2>Сохранение прав</h2>

    <p align="justify">
Компания WEEDEX Limited оставляет за собой право в любое время, без предварительного уведомления и по собственному усмотрению, прекратить право на использование интерактивных услуг сайта, а также заблокировать или предотвратить Ваш будущий доступ к веб-ресурсу. 
Компания WEEDEX Limited может открыть, сохранить или передать информацию об учетной записи и личных данных, если это требуется по закону или в связи с тем, что такие действия необходимы для:</p>
<ul>
<li>• соблюдения судебного процесса; </li>
<li>• соблюдения данных Условий Пользования; </li>
<li>• защиты прав собственности или личной и технической безопасности WEEDEX (и его сотрудников), его пользователей и общественности.</li>
</ul>

<h2>Защита от мошенничества</h2>

    <p align="justify">

    В рамках наших процедур обработки принятия платежей, специалисты компании мониторят все операции на предмет мошенничества или другие виды несанкционированной или незаконной деятельности. Компания оставляет за собой право отказать в обработке платежа из-за подозрений в мошенничестве, несанкционированной или незаконной деятельности. Такие меры приняты ради защиты наших клиентов, а также компании от мошенничества или другой незаконной деятельности.<br><br>
Компания WEEDEX Limited не несет ответственности за любые потери средств из-за совместного использования паролей или кражи личных данных. Настоятельно рекомендуем максимально обезопасить Ваши личные данные, необходимые для аутентификации и предоставления доступа к личному кабинету и настройкам. Не передавайте Вашу личную информацию третьим лицам.

    </p>

<h2>Политика возврата</h2>

    <p align="justify">

    Все запросы на возврат средств тщательно изучаются, если они совершены своевременно и в соответствии с данным соглашением и правилами. <br><br>
Компания WEEDEX Limited оставляет за собой право отклонить любые запросы на возврат не подкрепленные доказательствами, на основании решения технического отдела и подкрепленные данным договором.<br><br>
Любые неразрешенные претензии или споры между Вами и WEEDEX должны быть переданы и решены судом компетентной юрисдикции. Если какое-либо положение настоящих Условий Пользования будет признано судом компетентной юрисдикции недействительным, то недействительность такого положения не влияет на юридическую силу остальных положений настоящих Условий Пользования, которые должны оставаться в полной силе и действии.
    </p>

<h2>Общие положения</h2>

    <p align="justify">

    Соглашаясь с Условиями Пользования Вы автоматически подтверждаете, что являетесь совершеннолетним в стране, гражданином которой вы являетесь и пользуясь данным сайтом не нарушаете никаких законов вашего государства.
Все материалы и информация, представленная WEEDEX предназначены для использования только в личных, образовательных или информационных целях.<br><br>
Вы берете на себя обязанность по уплате налога на полученную прибыль, взимаемого согласно действующему законодательству Соединенного Королевства. Прибыль, полученная на территории данного государства, подлежит налогообложению, вне зависимости от конкретного места формального резидентства, фактического проживания лица или страны, в которой зарегистрирована компания.<br><br>
Любые финансовые операции, оформленные в соответствии с данным договором, являются окончательными и необратимыми. 
С целью предотвращения мошенничества и накрутки, категорически запрещено создание мультиаккаунтов или использование совместных платежных систем для разных пользователей. Если такие злоупотребления будут обнаружены, компания WEEDEX Limited оставляет за собой право прекратить все партнерские начисления и ограничить функционал для таких счетов и аккаунтов.<br><br>

Любое несоблюдение данного соглашения в целом или отдельных его пунктов может привести к постоянной приостановке счета.
    </p>


</div>
</div>
</div>
	
{include file="footer.tpl"}