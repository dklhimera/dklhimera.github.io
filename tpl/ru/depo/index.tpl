{strip}

{include file='header-account.tpl' title='Депозиты'}

<section class="main4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 style='margin-left:15px;'>
						<small>История</small>
						<span>депозитов</span>
					</h1>
					<div class="clearfix"></div>
					<br/>
					<br/>
					{include file='depo/_statuses.tpl'}
					{if $list}
						{include file='list.other.tpl'
							url='*'
							table_class='table table-account'
							fields=[
								'pName'=>['План'],
								'dCTS'=>['Дата начала'],
								'cName'=>['Плат.система'],
								'dZD'=>['Сумма'],
								'dLTS'=>['Посл.начисление'],
								'dN'=>['Начислений'],
								'dZP'=>['Начислено'],
								'dNTS'=>['След.начисление']
							]
							values=$list
							row='*'
						}
					{else}
						<center>
							<br>
							<br>
							<center class='text-white'>У Вас нет вкладов</center>
							<br>
							<br>
						</center>
					{/if}
				</div>
			</div>
		</div>
</section>
{include file='footer-account.tpl'}
{/strip}