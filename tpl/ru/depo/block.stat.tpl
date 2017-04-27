{strip}
<div class="live_stats">
		  <div class="container">
			  <div class="row" data-step="20" data-intro="&lt;h4&gt;Статистика&lt;/h4&gt;&lt;p&gt;Статистика работы платформы для онлайн инвестирования Razzleton.&lt;/p&gt;" data-highlightclass="menu-highlight" data-position="top">
				  <div class="col-xs-12">
					  <h2>Статистика</h2>
				  </div>
				  <div class="col-xs-12 stats_area">
                                        <div class="stat_block">
                          <p class="stat_number">21.06.1997</p>
                          <p class="stat_comment">Основана</p>
                      </div>
                                          					  <div class="stat_block">
						  <p class="stat_number">   {$settings.site_start_month_str_generated} {$settings.site_start_day}, {$settings.site_start_year}</p>
						  <p class="stat_comment" style="margin: 0 -2px;">Старт</p>
                    
					  </div>
                                          					  <div class="stat_block">
						  <p class="stat_number">{$stat.worked}</p>
						  <p class="stat_comment">Дней работы</p>
					  </div>
                                              					  <div class="stat_block">
						  <p class="stat_number">{$stat.users}</p>
						  <p class="stat_comment">Всего счетов</p>
					  </div>
                                            					  <div class="stat_block">
						  <p class="stat_number">{$stat.zin|string_format:"%.2f"} $</p>
						  <p class="stat_comment">Всего вкладов</p>
					  </div>
                                              					  <div class="stat_block">
						  <p class="stat_number">{$stat.zout|string_format:"%.2f"} $</p>
						  <p class="stat_comment">Всего выплат</p>
					  </div>
                      <div class="stat_block">
						  <p class="stat_number">{$stat.lastuser.uLogin}</p>
						  <p class="stat_comment">Последний пользователь</p>
					  </div>
                      <div class="stat_block">
						  <p class="stat_number">{$stat.lastinop.oSum|string_format:"%.2f"} ({$stat.lastinop.uLogin} </p>
						  <p class="stat_comment">Последний вклад</p>
					  </div>
                                                                                                    
				  </div>
			  </div>
		  </div>
	  </div>
	  <div class="paid_in-out_block">
       <div class="container">
            <div class="row">
                            <div class="col-xs-6 investors" data-step="21" data-intro="&lt;h4&gt;Последние инвестиции&lt;/h4&gt;&lt;p&gt;Последние открытые вклады на платформе Razzleton в режиме онлайн.&lt;/p&gt;" data-position="right">
                    <h3>Последние инвестиции</h3>
                    <table class="investors_table">
                        <tbody>
				{$psys=[
	2=>'AdvancedCash',
	3=>'PerfectMoney',
	4=>'Qiwi',
	5=>'WebMoney'
]}
{$ccurr=[
	2=>'USD',
	3=>'USD',
	4=>'RUB',
	5=>'USD'
]}
		{if $list1}
			<div class="box">
				
				<div class="tabBox">
					<table class="FormatTable">
						<tr>
							<th>Пользователь</th>
							<th>Сумма</th>
						
							<th>Плат. система</th>
						</tr>
						{foreach from=$list1 key=i item=r}
							{if $r.oSum > 0}
								<tr>
									<td>{$r.uLogin}</td>
									<td>- {_z($r.oSum, $r.ocID)} {$ccurr[$r.ocID]}</td>
								
									<td>{$psys[$r.ocID]}</td>
								</tr>
							{/if}
						{/foreach}
					</table>
				
		{/if}
						
						
                            </tbody>
                    </table>
                </div>
                                        <div class="col-xs-6 paid_out" data-step="22" data-intro="&lt;h4&gt;Последние выплаты&lt;/h4&gt;&lt;p&gt;Последние выплаты инвесторам платформы Razzleton в режиме онлайн.&lt;/p&gt;" data-position="left">
                    <h3>Последние выплаты</h3>
                    <table class="paid_out_table">
                        <tbody>
						{if $list2}
			<div class="box">
				<h3>Последние выплаты</h3>
				<div class="tabBox">
					<table class="FormatTable">
						<tr>
							<th>Пользователь</th>
							<th>Сумма</th>
							{*<th>Batch</th>*}
							<th>Плат. система</th>
						</tr>
						{foreach from=$list2 key=i item=r}
							{if $r.oSum > 0}
								<tr>
									<td>{$r.uLogin}</td>
									<td>+ {_z($r.oSum, $r.ocID)} {$ccurr[$r.ocID]}</td>
									{*<td>{$r.oBatch}</td>*}
									<td>{$psys[$r.ocID]}</td>
								</tr>
							{/if}
						{/foreach}
					</table>
				</div>
			</div>
		{/if}                                                    
                        </tbody>
                    </table>
                </div>
            
            </div>
        </div>
    </div>

{*
Программа работает {$stat.worked} дн.<br>
Всего участников {$stat.users}<br>
Сейчас на сайте {$stat.usersonline}<br>
Принято средств ${$stat.zin|string_format:"%.2f"}<br>
Выплачено средств ${$stat.zout|string_format:"%.2f"}<br>
в т.ч. рефских ${$stat.zref|string_format:"%.2f"}<br>
Реинвестировано ${$stat.zreinv|string_format:"%.2f"}<br>
Активных вкладов {$stat.deps}<br>
Оконченных вкладов {$stat.depsclosed}<br>
{if $stat.lastuser}
	Новый участник ({$stat.lastuser.uLogin})<br>
{/if}
{if $stat.lastinop}
	Новый вклад ${$stat.lastinop.oSum|string_format:"%.2f"} ({$stat.lastinop.uLogin})<br>
*}
{*	Новый вклад {_z($stat.lastinop.oSum, $stat.lastinop.ocID, 2)} ({$stat.lastinop.uLogin})<br>*}
{*
{/if}
{if $stat.lastoutop}
	Последняя выплата ${$stat.lastoutop.oSum|string_format:"%.2f"} ({$stat.lastoutop.uLogin})<br>
{/if}
*}
{/strip}