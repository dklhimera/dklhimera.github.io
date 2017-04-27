{strip}
{include file='redirect.tpl' link='/home'}
{include file='header-page.tpl' title='Тикет'}
<div class="loop-11 middle">
  <div class="label">Тикет</div>
 {include file='acc_menu.tpl'}
	<div class="loop-10 aRight animated fadeInRight">
  		<div class="block block-in-account relative">
		{include file='tickets/_states.tpl'}
		{if $el.tID}
		<div class="loop-7 pad15">
			{include file='edit.tpl'
				form='ticket'
				title=''
				table_class='table table-settings'
				form_class='settings'
				fields=[
					'tID'=>[],
					'tState'=>
						[
							'T',
							'Статус',
							0,
							$_tstates[$el.tState],
							'readonly'=>'1'
						],
					'tTopic'=>
						[
							'T',
							'Тема',
							'size'=>50,
							'readonly'=>true
						],
					'tText'=>
						[
							'W',
							'Текст',
							'size'=>10,
							'readonly'=>true
						]
				]
				values=$el
				btn_text=' '
				btns=valueIf($el.tState < 8, ['close'=>'Закрыть тикет'])
			}


			<table class="FromatTable" border="0" cellspacing="0" width="100%">
			{foreach $list as $l}
				<tr><td width="250px"><td width="250px"><td width="250px"></tr>
				<tr>
					{if $l.muID == $el.tuID}
						<td colspan="2">
					{else}
						<td><td colspan="2">
					{/if}
					<fieldset>
					{if $l.muID == $el.tuID}Вы{else}Тех.поддержка{/if}, {$l.mTS}<br>
					{$l.mText}
					</fieldset>
					</td>
				</tr>
			{/foreach}
			</table><br>
			</div>
			{if $el.tState < 8}
			<div class="loop-5 block pad0">
				<div class="label">Ваш ответ</div>
				<div class="pad15" style='margin-top:-20px'>
				{include file='edit.other.tpl'
					fields=[
						'tID'=>$el.tID,
						'mText'=>
							[
								'W',
								'',
								[
									'text_empty'=>'укажите текст'
								],
								'size'=>10,
								'hint'=>'Сообщение'
							]
					]
					values=$el
					btn_text=' '
					btns=['answer'=>'Ответить']
				}
				</div>
			</div>
			<div class="clear"></div>

			{/if}

		{else}
			<div class="title">Новый тикет</div>
			<div class="loop-7 pad15">
				{include file='edit.tpl'
					table_class='table table-settings'
					form_class='settings'
					fields=[
						'tTopic'=>
							[
								'T',
								'Тема',
								[
									'topic_empty'=>'укажите тему'
								],
								'size'=>50,
								'hint'=>'Тема'
							],
						'tText'=>
							[
								'W',
								'',
								[
									'text_empty'=>'укажите текст'
								],
								'size'=>15,
								'hint'=>'Teкст'
							]
					]
					values=$el
					btn_text=' '
					btns=['create'=>'Создать тикет']
				}
				<div class="clear"></div>
			</div>

		{/if}
    </div>
</div>
{include file='footer.tpl'}
{/strip}