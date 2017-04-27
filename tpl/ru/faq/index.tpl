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
<div class="faq">
            <div class="container">
                <div class="row">
                    <h2>FAQ</h2>
                    <div class="select_box">
                        <select name="plan" id="questions" class="form-control">
                            <option value="cathegory1">ОБЩИЕ ВОПРОСЫ</option>
                            <option value="cathegory2">ВОПРОСЫ КАСАЮЩИЕСЯ ПРОЦЕССА ИНВЕСТИРОВАНИЯ</option>
                            <option value="cathegory3">ВОПРОСЫ О ПАРТНЕРСКОЙ ПРОГРАММЕ</option>
                            <option value="cathegory4">ДРУГИЕ</option>
                        </select>
                    </div>
                    <div class="questions_area">
                        <div class="general_questions category_block_none" id="cathegory1">
                            <h2>ОБЩИЕ ВОПРОСЫ</h2>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Что такое WEEDEX?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                  								  <p>Компания Weedex -это группа инвесторов, которая занимается инвестированием в легальный бизнес на территории США. Все инвестиции осуществляются через венчурные фонды посредством платформы VIA Folio.</p>
                                 <p>Основное направление инвестирования - это компании, производящие медикаменты, в состав которых входит марихуана. Среди них такие гиганты как GW Pharmaceuticals и Palliatech. Годовой оборот медицинской марихуаны в 2016 году по подсчетам Forbes составил около 40 млрд.долларов США. </p>
								</div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Кто управляет инвестиционным портфелем?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Инвестиционный портфель разработан и управляется нашими специалистами с сильной командой аналитиков в области фармацевтики, что позволяет эффективно анализировать ситуацию на рынке оптовых продаж медикаментов.</p>
                                </div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Как стать клиентом WEEDEX?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Для того чтобы стать клиентом WEEDEX, вам необходимо открыть бесплатный аккаунт. Регистрация в системе бесплатная и займет всего несколько минут. После этого вы станете официальным участником и сможете совершать предусмотренные правилами операции. Для получения подробной информации вы можете посетить страницу с инструкциями  <a href="https://WEEDEX.com/started" target="_blank">Как начать?</a> <br><br>
                                    Соглашаясь с Условиями Пользования при прохождении регистрации, вы автоматически подтверждаете что являетесь совершеннолетним в стране, гражданином которой вы являетесь и пользуясь данным сайтом не нарушаете никаких законов вашего государства.</p>
                                </div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Могу ли я иметь несколько открытых аккаунтов в системе?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Каждый зарегистрированный инвестор имеет право зарегистрировать только один аккаунт и уже непосредственно в нем создавать неограниченное количество депозитов. Мультиаккаунты запрещены, средства на таких аккаунтах будут заморожены, а доступ заблокирован. При подозрении в мошенничестве или создании мультиаккаунтов компания WEEDEX Limited оставляет за собой право заблокировать или предотвратить доступ к аккаунту инвестора, нарушившего данное условие.</p>
                                </div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Как я могу получить доступ к учетной записи?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Если вы являетесь зарегистрированным пользователем WEEDEX, нажмите на кнопку "Login" в верхней части сайта, затем введите ваш логин и пароль в соответствующие поля и нажмите кнопку "Log in". Вы будете автоматически перенаправлены в ваш личный кабинет. Если вы еще не зарегистрированы, то вам следует пройти <a href="https://WEEDEX.com/registration" target="_blank">процедуру регистрации</a></p>
                                </div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Что делать сразу после того, как я вошел в личный кабинет?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Вы можете познакомиться с функциями системы, указать/изменить личные данные и прописать реквизиты ваших платежных систем. Заполнить данные о ваших электронных кошельках вы можете нажав на кнопку "Edit account". Обратите внимание, платежные реквизиты прописываются один раз и изменить их можно только после обращения в технический отдел. Такие меры предосторожности используются для защиты финансовых средств наших инвесторов в случае, если доступ к аккаунту получит злоумышленник</p>
                                </div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Как я могу изменить личную информацию в моем аккаунте?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Войдите в учетную запись и нажмите "Изменить учетную запись", чтобы войти в личную информационную страницу, где вы сможете изменить свои данные. Сохраните изменения после того как измените все необходимые данные. Тем не менее, вы не можете изменить свой адрес электронной почты и электронного кошелька, так как эта функция отключена по соображениям безопасности. Если вы хотите изменить эти данные, напишите онлайн-консультанту на сайте.</p>
                                </div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Что делать если я забыл свой пароль?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Вы можете воспользоваться функцией восстановления пароля и на указанный при регистрации email придет письмо с подробными инструкциями и формой для сброса/смены существующего пароля. Если письмо не пришло, обратитесь к онлайн-консультанту на сайте или напишите письмо в технический отдел <a href="mailto:admin@WEEDEX.com">admin@WEEDEX.com</a></p>
                                </div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Я не могу войти в учетную запись. Что может послужить причиной этой проблемы?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Иногда проблемы с авторизацией вызваны ошибками в веб-браузере. Оснований беспокоиться нет, необходимо подождать некоторое время, а затем попытаться снова войти в систему. Также вам нужно очистить кэш вашего браузера. Если проблема не устраняется, обратитесь к онлайн-консультанту на сайте или напишите письмо в технический отдел <a href="mailto:admin@rWEEDEX.com">admin@WEEDEX.com</a></p>
                                </div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Насколько защищен ваш сайт и мои личные данные?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>У нас есть широкий спектр мер безопасности для защиты вашей учетной записи. Наш сайт защищен от DDoS-атак, все передаваемые данные проходят SSL-шифрование. Мы используем лицензионный расчетный скрипт в совокупности с сертификатами интернет-безопасности. Полный перечень вы можете увидеть на главной странице сайта. Наш сайт находится на выделенном сервере.</p>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        <div class="cathegory2 category_block_none" id="cathegory2">
                            <h2>ВОПРОСЫ КАСАЮЩИЕСЯ ПРОЦЕССА ИНВЕСТИРОВАНИЯ</h2>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Какими платежными системами я смогу воспользоваться для открытия депозита?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Для вашего удобства представлены несколько платежных систем:<br>
                                    -Bitcoin<br>
                                    -PerfectMoney<br>
                                    -Payeer<br>
                                    -AdvCash<br>
                                    -NixMoney<br>
                                    -Neteller<br>
                                    -YandexMoney<br>
                                    -QIWI</p>
                                </div>
                            </div>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Какую минимальную/максимальную сумму я могу инвестировать?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Минимальная сумма инвестиций составляет всего <span style="color:#F57E06"><b>$10</b></span>. 
                                    Максимальная сумма инвестиций ограничена лишь вашим капиталом. Обратите внимание, максимальная сумма одного депозита составляет <span style="color:#F57E06"><b>$100.000</b></span>. однако количество депозитов, которые может создать инвестор, не ограничено.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Какова минимальная/максимальная сумма вывода средств?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Для вывода финансовых средств нет ограничений, а минимальная сумма вывода всего <span style="color:#F57E06"><b>$1</b></span>. Вы можете вывести любую часть денег, которая имеется у вас на балансе в личном кабинете.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Как мне пополнить счет и открыть депозит в системе WEEDEX?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>На главной странице личного кабинета есть вкладка "Открыть депозит". Вам нужно выбрать инвестиционный план, удобный для вас способ пополнения, вписать желаемую сумму инвестиций и произвести перевод. Депозит будет оформлен автоматически.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Сколько времени занимает пополнение счета?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Пополнение происходит согласно регламенту самих платежных систем. В большинстве случаев мгновенно. Как только перевод будет осуществлен и денежные средства появятся на кошельке компании, в вашей учетной записи будет автоматически открыт депозит. <br>
                                    При открытии депозита посредством Bitcoin или Neteller необходимо отправить запрашиваемую сумму на указанный Bitcoin/Neteller-адрес. Обратите внимание на то, что сеть Bitcoin не производит мгновенных переводов, время ожидания может занять от 15 минут до 24 часов.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Могу ли я открыть несколько депозитов одновременно?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Да, вы можете иметь неограниченное количество депозитов. Каждый из депозитов будет обрабатываться и приносить прибыль отдельно от других.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Могу ли я открыть депозит прямо с моего баланса в учетной записи?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Вы можете открыть новый депозит с баланса вашего счета. <span style="color:#F57E06"><b>Просто войдите в свою учетную запись пользователя, выберите "Пополнить счет" и выберите "Инвестировать с баланса".</b></span></p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Существуют ли комиссии при пополнении/снятии денежных средств?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Никаких комиссий при пополнении/снятии денежных средств не взимается, однако необходимо учитывать, что при переводе будет снята комиссия вашей платежной системы, если таковая имеется.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>После того как я сделаю запрос на вывод, когда средства поступят на мой электронный кошелек?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Как правило, вывод средств не занимает много времени, перевод средств на ваш электронный кошелек будет произведен в промежутке от нескольких часов до 48 часов.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Что может быть причиной задержки более чем на 48 часов?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Есть несколько причин задержки перевода средств:</p>
                                    <ul>
                                    <li>Номер счета электронной валюты, который должен быть указан при регистрации, отсутствует или прописан неправильно.</li>
                                    <li>В аккаунте вашей платежной системы есть лимит на сумму переводов либо иные ограничения. В таком случае вам необходимо связаться с провайдером используемой вами платежной системы для решения проблемы лимита, а после обратиться к консультанту на сайте для запроса перевода.</li>
                                    <li>В редких случаях (форс-мажор, технические неполадки, подозрение в мошенничестве) обработка платежа может занимать более 48 часов.</li>
                                    </ul> 
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Могу ли я открыв депозит в одной платежной системе выводить прибыль на кошелек другой платежной системы? Могу ли я выводить прибыль на другой адрес кошелька?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Нет. Вывод средств производится только на ту платежную систему и тот адрес кошелька с которого был произведен депозит. Конвертация валют в системе отсутствует.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Как я могу проверить баланс своего счета?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Актуальный баланс вашего счета доступен 24/7 в учетной записи пользователя.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Как рассчитать проценты на мой депозит?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Размер вашего заработка напрямую зависит от выбранного инвестиционного пакета и суммы депозита. В системе WEEDEX есть два вида инвестиционных планов: с ежедневной выплатой процентов и с выплатой процентов в конце срока. Возврат тела депозита производится в конце срока действия инвестиционного плана.Если вы выбираете ежедневные планы  <span style="color:#F57E06"><b>“Стартовые планы”</b></span> то прибыль по ним будет начисляться каждый день и сразу доступна к выводу. В инвестиционных планах "After Plans” и “VIP Plans" тело депозита и проценты прибыли начисляются в конце срока действия инвестиционного вклада. Для того, чтобы рассчитать свой доход, вы можете воспользоваться нашим калькулятором прибыли.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Что делать если деньги не поступили на мой кошелек?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Если все условия и правила системы были соблюдены, а выплата не поступила на ваш кошелек, вам следует в срочном порядке обратиться в техническую поддержку <a href="mailto:admin@WEEDEX.com">admin@WEEDEX.com</a> или написать онлайн-консультанту на сайте.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Какие ограничения в платежной системе Neteller?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Все операции ввода и вывода совершенные при помощи платежной системы Neteller обрабатываются вручную операторами компании WEEDEX. В связи с высокой активностью инвесторов и большим количеством транзакций, введены новые лимиты для пользователей Neteller:<br>
									Минимальная сумма депозита - $30<br>
									Максимальная сумма депозита - $300<br>
									Минимальная сумма для вывода - $30</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Какой курс BTC в системе WEEDEX?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Привязка к курсу 1 BTC = $ 600 необходима для отображения статистики в личном кабинете. Работа инвестиционных планов происходит с фиксированным количеством биткоинов, которые вы перевели при открытии депозита. Например инвестируя 1 BTC, вы будете получать выбранный процент от суммы 1 BTC вне зависимости от текущего курса криптовалюты.<br>
									WEEDEX придерживается справедливой политики плавающего курса Bitcoin, поэтому инвестируя в BTC вы сможете заработать не только с нашими инвестиционными планами, но и на росте криптовалюты.</p>
                                </div>
                            </div>
                            


                        </div>
                        <div class="cathegory3 category_block_none" id="cathegory3">
                            <h2>ВОПРОСЫ О ПАРТНЕРСКОЙ ПРОГРАММЕ</h2>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Что мне даст партнерская программа? Как я могу стать ее участником?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Партнерская программа поможет вам получить дополнительный доход привлекая новых инвесторов в систему WEEDEX. Для этого необходимо, чтобы приглашенные лично вами инвесторы воспользовались вашей реферальной ссылкой. Получить персональную ссылку можно в личном кабинете в разделе "Партнеры".<br><br>
                                    Персональная партнерская ссылка имеет следующий формат: <span style="color:#F57E06"><b>https://WEEDEX.com/?ref=XXXXXX</b></span>, where <span style="color:#F57E06"><b>"XXXXXX"</b></span> это ваше имя пользователя (логин) в WEEDEX.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>У вас есть партнерская программа?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Да. Наша партнерская программа имеет многоуровневую систему вознаграждений. Вы будете получать 7% от каждого депозита реферала 1-го уровня, 2% от каждого депозита реферала 2-го уровня, 1% от каждого депозита реферала 3-го уровня.<br><br>
                                    Кроме того программой предусмотрен ежедневный бонус: 7% от ежедневных начислений каждого реферала 1-го уровня, 2% от ежедневных начислений каждого реферала 2-го уровня, 1% от ежедневных начислений каждого реферала 3-го уровня (действуют только для инвестиционных планов с ежедневными начислениями)..</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Как начисляется партнерское вознаграждение?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Партнерское вознаграждение начисляется на баланс вашей учетной записи мгновенно. Выплата вознаграждения может быть получена только на кошелек в той платежной системе в которой ваш реферал открыл депозит. Например, если ваш реферал использует Bitcoin при открытии депозита, то ваш бонус будет начислен на баланс в Bitcoin и вы можете вывести его только на Bitcoin-кошелек.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Где я могу получить мою персональную ссылку для приглашений? Где найти рекламные материалы?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Персональная ссылка находится на главной странице вашей учетной записи, так же она есть в разделе <a href="https://WEEDEX.com/?a=referals">Ваши партнеры</a>. Графический рекламный материал находится в разделе <a href="https://WEEDEX.com/?a=referallinks">Рекламные материалы</a>.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Как вы узнаете, что новый инвестор был приглашен мной?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Реферальная система работает в автоматическом режиме и если инвестор зарегистрировался по вашей партнерской ссылке, то система мгновенно будет распознавать нового пользователя как вашего реферала. Всех ваших рефералов вы можете увидеть в разделе Ваши партнеры.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Могу ли я сменить аплайнера (вышестоящего партнера)?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Нет. По правилам платформы это запрещено. Смена спонсора может привести к  некорректной работе всей системы. Зарегистрировавшись по ссылке аплайнера, вы будете закреплены за ним на постоянной основе.</p>
                                </div>
                            </div>

                            <div class="question_block">
                                <div class="question">
                                    <h4>Я хочу привлекать новых инвесторов в систему WEEDEX, но еще не создал депозит. Смогу ли я в таком случае участвовать в партнерской программе?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Для участия в партнерской программе не обязательно иметь активный депозит.</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="cathegory4 category_block_none" id="cathegory4">
                            <h2>ДРУГИЕ</h2>
                            <div class="question_block">
                                <div class="question">
                                    <h4>Я не нашел ответа на свой вопрос. Что делать в таком случае?</h4>
                                </div>
                                <div style="display: none;" class="answer">
                                    <p>Если ответа на ваш вопрос нет в разделе FAQ-часто задаваемые вопросы, пожалуйста, свяжитесь со службой поддержки. Для этого, нажмите на кнопку <a href="https://WEEDEX.com/?contact">"Контакты"</a> на правой стороне экрана меню или обратитесь к онлайн-консультанту на сайте. Наша служба поддержки обработает ваш запрос как можно скорее. Мы также с нетерпением ждем ваших отзывов и предложений, которые будут использованы для улучшения нашей платформы.</p>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
{include file="footer.tpl"}