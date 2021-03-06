{strip}
{include file='admin/header.tpl' title='План'}

{include file='edit.admin.tpl'
	title='План'
	title_new='Новый план'
	fields=[
		'pID'=>[],
		'pHidden'=>
			[
				'C', 
				'Невидимый'
			],
		'pNoCalc'=>
			[
				'C', 
				'Не начислять'
			],
		'pGroup'=>
			[
				'I', 
				'Номер группы планов'
			],
		'pName'=>
			[
				'L',
				'Наименование!!', 
				['name_empty'=>'укажите наименование']
			],
		'pDescr'=>
			[
				'W', 
				'Описание'
			],
		'pMin'=>
			[
				'$', 
				'Мин. сумма!! <<включительно>>', 
				['min_wrong'=>'укажите минимальную сумму [от 0.010]']
			],
		'pMax'=>
			[
				'$', 
				'Макс. сумма!! <<НЕвключительно>>', 
				['max_wrong'=>'укажите максимальную сумму [до 1000000.000]']
			],
		'pBonus'=>
			[
				'%', 
				'Бонус в процентах'
			],
		'pWDays'=>
			[
				'C', 
				"Только по <a href=\"{_link module='calendar/admin/days'}\" target=\"_blank\">рабочим дням</a> <<если период не более суток>>"
			],
        'pPClndr'=>
			[
				'C',
				"Начислять проценты  указанные в каледнадре <<если не указан или 0 - брать из плана>>"
			],
		'pPerc'=>
			[
				'%', 
				'Процент начисления', 
				['perc_wrong'=>'укажите процент']
			],
		'pPer'=>
			[
				'I', 
				'Период начисления!! <<в часах>>', 
				['period_wrong'=>'укажите период']
			],
		'pNPer'=>
			[
				'I', 
				'Кол-во периодов <<0 - бессрочно>>'
			],
		'pReturn'=>
			[
				'%', 
				'Процент возврата после окончания срока',
				['perc2_wrong'=>'укажите процент'],
				'default'=>100
			],
		1=>'Реинвестирование',
		'pCompndMin'=>
			[
				'%', 
				'Мин. процент',
				['compndmin_wrong' => 'неверное значение']
			],
		'pCompndMax'=>
			[
				'%', 
				'Макс. процент <<0 - запрещено>>',
				['compndmax_wrong' => 'неверное значение']
			],
		'ДОвклад',
		'pEnAdd'=>
			[
				'C', 
				'Разрешить'
			],
		'pMinAdd'=>
			[
				'$', 
				'Мин. сумма <<включительно>>'
			],
		'Снятие',
		'pClComis'=>
			[
				'%', 
				'Процент комиссии <<100 - запрещено>>',
				['clcomis_wrong' => 'неверное значение'],
				'default'=>100
			],
		'pMPer'=>
			[
				'I', 
				'Кол-во периодов невозможности снятия'
			],
		'pClPer'=>
			[
				'I', 
				'Кол-во периодов после которых нет комиссии на снятие'
			],
		'Ограничения',
		'pGroupReq'=>
			[
				'I', 
				'Доступен только после депозита с планом из группы<br><<0 - не использовать>>'
			],
		'pMaxCount'=>
			[
				'I', 
				'Макс. кол-во депозитов с этим планом <<0 - нет ограничения>>'
			],
		'Специальная реф.система',
		'pDPerc'=>
			[
				'A', 
				'От вклада<br><<значения по уровням>>'
			],
		'pPPerc'=>
			[
				'A', 
				'От начисления<br><<значения по уровням>>'
			]
	]
	values=$el
}

{include file='admin/footer.tpl'}
{/strip}