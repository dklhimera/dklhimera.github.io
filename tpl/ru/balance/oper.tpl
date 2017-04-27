{strip}
{include file='header-account.tpl' title='Операция'}
{include file='balance/_statuses.tpl'}
{if $el}
	<section class="main4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<h1 style='margin-left:15px;'>
						<small>Операция</small>
						<span>{$op_names[$el.oOper]}</span>
					</h1>
					<div class="clearfix"></div>
					<br/>
					<br/>
					<div class="box-oper">
							{if isset($smarty.get.check)}

									<p class="info">
										<i class="fa fa-info-circle"></i>&nbsp;
										Ожидание подтверждения оплаты...
									</p>


							{else}
								{if ($el.oState <= 1)}
									{$opc = (($el.oOper != 'CASHIN') or $dfields)}
									{if $opc}

										<p class="info">
											<i class="fa fa-info-circle"></i>&nbsp;
											Операция НЕ подтверждена Вами!
										</p>


									{/if}
								{elseif $el.oState == 2}

										<p class="info">
											<i class="fa fa-info-circle"></i>&nbsp;
											Операция будет обработана Администратором в ближайшее время
										</p>

								{/if}
								<div class="clearfix"></div>
								{$b = []}
								{if $el.oState <= 2}
									{$b['cancel'] = 'Отмена'}
								{/if}
								{if $el.oState >= 5}
									{$b['del'] = 'Удалить'}
								{/if}
								{include file='balance/_oper.tpl' bt=valueIf($opc, 'Подтвердить', ' ') b=$b edit_form_name='balance/oper_frm'
									errors=[
										'oper_not_found'=>'неверный статус операции',
										'oper_disabled'=>'операция отключена',
										'low_bal1'=>'недостаточно средств',
										'data_date_wrong'=>'неверная дата операции',
										'data_sum_wrong'=>'неверная сумма',
										'data_batch_wrong'=>'не задан batch-номер операции',
										'batch_exists'=>'операция с таким batch-номером уже существует'
									]
								}
							{/if}
					</div>
				</div>
			</div>
		</div>
	</section>

{else}
{$oper = $smarty.get.add}
{if $oper == 'CASHIN'}


<section class="main4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<h1 style='margin-left:15px;'>
						<small>Пополнение</small>
						<span>баланса</span>
					</h1>
					<div class="clearfix"></div>
					<br/>
					<br/>



		
				     			{if $_cfg.Depo_AutoDepo}
										{include file='depo/_depo.interval.tpl'}
								{/if}
									{include file='edit.other.tpl'
										form='add'
										form_class='form-oper closeerr'
										table_class='table-oper'
										fields=[
											'Oper'=>$oper,
											'PSys'=>['S', 'С платежной системы:', ['psys_empty'=>'плат.система не указана'], valueIf(count((array)$clist) > 1, [0=>'- выберите -'], []) + (array)$clist, 'default'=>$user.aDefCurr],
				
											'Sum'=>['T', 'Сумма вклада:', ['sum_wrong'=>'недостаточное количество'],'hint'=>'Сумма', 'comment'=>' <i><span id="ccurr" class="in-account-span"><small>USD</small></span></i>',
											'class'=>'amount-in-cabiner'],
											'Comis'=>['', 'Comission', 'comment'=>' <i><span id="csum" class="none"></span></i>'],
											'Sum2'=>['', 'Your balance will be credited to the amount', 'comment'=>' <i><span id="sum2" class="none"></span></i>'],
											'Plan'=>['S', 'Plan', ['plan_wrong'=>'wrong plan'], [] + (array)$plans, 'skip'=>(count($plans) <= 1)],
											'Compnd'=>['%',	'Compaund', ['compnd_wrong'=>"wrong value [$cmin..$cmax]", 'compnd_wrong1'=>"wrong value for plan '$cplan'"], 'hint'=>'Compaund percent (%)','skip'=>!$pcmax]
										]
										btn_text='Инвестировать'
										errors=[
										'oper_disabled'=>'operation disabled'
									]}
				</div>
			</div>
		</div>
</section>

{elseif $oper == 'CASHOUT'}


<section class="main4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<h1 style='margin-left:15px;'>
						<small>Вывод</small>
						<span>средств</span>
					</h1>
					<div class="clearfix"></div>
					<br/>
					<br/>







						{$s = valueIf($_cfg.Const_IntCurr, 'Сумма', 'Сумма вывода:')}
						{include file='edit.other.tpl'
										form='add'
										form_class='form-oper closeerr'
										table_class='table-oper'
										fields=[
											'Oper'=>$oper,
											'PSys'=>['S', 'На платежную систему:', ['psys_empty'=>'плат.система не указана'], valueIf(count((array)$clist) > 1, [0=>'- выберите -'], []) + (array)$clist, 'default'=>$user.aDefCurr],
				
											'Sum'=>['T', $s, ['sum_wrong'=>'ошибка ввода', 'limit_exceeded'=>'limit exceeded'],'hint'=>'Сумма','class'=>'amount-in-cabiner', 'comment'=>valueIf($_cfg.Const_IntCurr, " <b>{$icurr}</b>", ' <i><span id="ccurr" class="in-account-span"><small>USD</small></span></i>')],
											'Comis'=>['', 'Comission', 'comment'=>' <i><span id="csum"></span></i>'],
											'Sum2'=>['', 'Your account will be injected amount', 'comment'=>' <i><span id="sum2"></span></i>'],
											'PIN'=>
												[
													'*',
													'Input PIN-code!!',
													[
														'pin_wrong'=>'wrong code'
													],
													'skip'=>!$_cfg.Bal_NeedPIN,
													'size'=>8
												]
										]
										errors=[
											'low_bal1'=>'insufficient funds',
											'oper_disabled'=>'operation disabled'
										]
						}
				</div>
			</div>
		</div>
</section>

	{elseif $oper == 'EX'}

	      	    <h1><span>Exchange</span></h1>






		{include file='edit.tpl'
		table_class='table exchange table-settings'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>['S', 'From payment system', ['psys_empty'=>'pay.system wrong'], valueIf(count((array)$clist) > 1, [0=>'- select -'], []) + (array)$clist],
				'Sum'=>['$', 'Amount', ['sum_wrong'=>'wrong amount'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Comission', 'comment'=>' <i><span id="csum"></span></i>'],
				'PSys2'=>['S', 'To payment system', ['psys2_empty'=>'pay.system wrong', 'psys2_equal_psys'=>'pay.system must be different', 'ex_rate_not_set'=>'exchange rate is not specified'], valueIf(count((array)$clist2) > 1, [0=>'- select -'], []) + (array)$clist2],
				'Sum2'=>['X', 'Amount to receive', 'comment'=>' <i><span id="sum2"></span></i>']
			]
			errors=[
				'low_bal1'=>'insufficient funds',
				'oper_disabled'=>'operation disabled'
			]
		}




	{elseif $oper == 'TR'}

		<h2>Перевод средств</h2>
		{include file='edit.tpl'
			form='add'
			fields=[
				'Oper'=>$oper,
				'PSys'=>valueIf($_cfg.Const_IntCurr,
					1,
					['S', 'Платежная система!!', ['psys_empty'=>'плат.система не указана'], valueIf(count((array)$clist) > 1, [0=>'- выберите -'], []) + (array)$clist]
				),
				'Sum'=>['$', 'Сумма!!', ['sum_wrong'=>'неверная сумма'], 'comment'=>' <i><span id="ccurr"></span></i>'],
				'Comis'=>['X', 'Комиссия', 'comment'=>' <i><span id="csum"></span></i>'],
				'Sum2'=>['X', 'Получателю будет переведена сумма', 'comment'=>' <i><span id="sum2"></span></i>'],
				'Login2'=>['T', 'Получатель!!', ['user2_empty'=>'пользователь не найден', 'user2_equal_user'=>'пользователи должны различаться']],
				'Memo'=>['W', 'Примечание', 'size'=>4]
			]
			errors=[
				'low_bal1'=>'недостаточно средств',
				'oper_disabled'=>'операция отключена'
			]
		}

	{/if}

	{include file='balance/_oper.js.tpl' oper=$oper use_sum2=true}

{/if}



{include file='footer-account.tpl'}
{/strip}