{strip}
{include file='admin/header.tpl' title='Настройки'}

{include file='edit.admin.tpl'
	values=$cfg
	fields=[
		'Word'=>['T', 'Для <b>включения</b> реф.системы укажите<br>имя параметра в ссылке для приглашения', 'comment'=>'../?<u>ref</u>=..'],
		'Levels'=>['I', 'Кол-во отображаемых уровней <<для многоуровневой>>'],
		1=>'Пополнение',
		'Type'=>['S', 'Метод', '', [
			'многоуровневая'=>'',
			0=>'<процент> вышестоящим', 
			'одноуровневая'=>'',
			2=>'<от_кол-ва_активных_рефов>-<процент>', 
			3=>'<от_суммы_депозитов_рефов>-<процент>',
			4=>'<от_суммы_активных_депозитов_юзера>-<процент>'
		]],
		'_Perc'=>['A', 'Значения', 'size'=>5],
		'Вклад',
		'DType'=>['S', 'Метод', '', [
			'многоуровневая'=>'',
			0=>'<процент> вышестоящим', 
			'одноуровневая'=>'',
			2=>'<от_кол-ва_активных_рефов>-<процент>', 
			3=>'<от_суммы_депозитов_рефов>-<процент>',
			4=>'<от_суммы_активных_депозитов_юзера>-<процент>'
		]],
		'_DPerc'=>['A', 'Значения', 'size'=>5],
		'Начисление',
		'PType'=>['S', 'Метод', '', [
			'многоуровневая'=>'',
			0=>'<процент> вышестоящим', 
			'одноуровневая'=>'',
			2=>'<от_кол-ва_активных_рефов>-<процент>', 
			3=>'<от_суммы_депозитов_рефов>-<процент>',
			4=>'<от_суммы_активных_депозитов_юзера>-<процент>'
		]],
		'_PPerc'=>['A', 'Значения', 'size'=>5]
	]
}

{include file='admin/footer.tpl'}
{/strip}