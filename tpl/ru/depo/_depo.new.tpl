{strip}
{include file='edit.other.tpl'
	form='new'
	form_class='form-oper closeerr'
	table_class='table-oper'
	title_new=valueIf($from_admin, 'Новый депозит')
	fields=[
		'Login'=>$smarty.get.user,
		'User'=>
			[
				'X',
				'Пользователь',
				0,
				$smarty.get.user,
				'skip'=>!$from_admin
			],
		
		'PSys'=>valueIf(!$from_admin and $_cfg.Const_IntCurr, 1,
			[
				'S', 
				'Плат. система:',
				[
					'psys_empty'=>'укажите плат.систему',
					'psys_wrong'=>'неверная плат.система'
				],
				valueIf(count((array)$clist) > 1, [0=>'- выберите -'], []) + (array)$clist
			]),
		'Sum'=>
			[
				'$',
				'Сумма:',
				[
					'sum_empty'=>'укажите сумму',
					'sum_wrong'=>'неверная сумма'
				],
				'comment'=>' <i><span id="ccurr"></span></i>'
			],
		'Plan'=>
			[
				'S', 
				'План:',
				[
					'plan_wrong'=>'неверный план'
				],
				[0=>'- авто -'] + (array)$plans,
				'skip'=>(count($plans) <= 1)
			],
		'Compnd'=>
			[
				'%',
				'Процент реинвеста <<капитализация>>',
				[
					'compnd_wrong'=>"неверное значение [$cmin..$cmax]",
					'compnd_wrong1'=>"неверное значение для плана '$cplan'"
				],
				'skip'=>!$pcmax
			]
	]
	values=$el
	errors=[
		'oper_disabled'=>'операция запрещена',
		'low_bal1'=>'недостаточно средств'
	]
}

<script type="text/javascript">
	function updateCurr()
	{
		$('#ccurr').html('');
		$.ajax(
			{
				type: 'POST',
				url: 'ajax',
				data: 'module=balance&do=getcurr'+
					'&cid='+$('#new_PSys').val(),
				success:
					function(ex)
					{
						$('#ccurr').html(ex);
					}
			}
		);
	}
	$('#new_PSys').change(updateCurr);
	updateCurr();
</script>

{/strip}