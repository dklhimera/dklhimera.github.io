{strip}
{$dfields["acc"]["hint"]='Account number'}

{$ro = !$from_admin and ($el.oState > 1)}
{include file='edit.other.tpl'
	form='data'
	form_class='form-oper'
	table_class='table form table-oper table-manual'
	fields=[
		'oID'=>$el.oID,
		'date'=>
			[
				'T',
				'Дата',
				[
					'data_date_wrong'=>'неверная дата'
				],
				'default'=>$today,
				'readonly'=>$ro
			],
		'sum'=>
			[
				'',
				'Сумма',
				0,
				_z($el.oSum - $oComis, $el.ocID, 1),
				'hint'=>'Cумма'
			],
		'batch'=>
			[
				'T',
				' <<операции/транзакции>>',
				[
					'data_batch_wrong'=>'укажите номер операции',
					'batch_exists'=>'номер используется'
				],
				'default'=>$defaultbatch,
				'readonly'=>$ro,
				'hint'=>'batch операции/транзакции'
			],
		'memo'=>
			[
				'',
				'Примечание',
				'readonly'=>$ro
			]
	] + (array)$dfields
	values=$el.oParams2
	btn_text=valueIf($ro, ' ', valueIf($el.oParams2.batch, 'Изменить', 'Создать'))
	hide_cancel=true
}

{/strip}