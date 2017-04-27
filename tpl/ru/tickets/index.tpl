{strip}
{include file='redirect.tpl' link='/home'}
{include file='header-page.tpl' title='Поддержка'}
<div class="loop-11 middle">
  <div class="label">Тикеты</div>
 {include file='acc_menu.tpl'}
	<div class="loop-10 aRight animated fadeInRight">
  		<div class="block block-in-account relative">

				<div class="block-link">
	            	<a href="{_link module='tickets/newticket'}" class="add">Создать</a>
	            </div>

				  {include file='tickets/_states.tpl'}
							{include file='list.other.tpl'
								title=''
								fields=[
									'tLTS'=>['Дата'],
									'tTopic'=>['Тема'],
									'tState'=>['Статус'],
									'cnt'=>['Ответов']
								]
								values=$list
								row='*'
							}
		</div>
    </div>

{include file='footer.tpl'}
{/strip}