{strip}
{include file='header-account.tpl' title='Операции'}
<section class="main4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 style='margin-left:15px;'>
						<small>список</small>
						<span>Операций</span>
					</h1>
					<div class="clearfix"></div>
					<br/>
					<br/>
				

					{if isset($smarty.get.fail)}
						<br/>
						<br/>
						<center><h4>Операция НЕ завершена!</h4></center>
						<p class="info">
							Процедура пополнения была прервана или произошла ошибка.<br>
							Попробуйте <a href="{$_selfLink}">повторить операцию</a> позже
						</p>
					{else}
						{if $list}
							{include file='balance/_statuses.tpl'}
							{include file='list.other.tpl'
								url='*'
								table_class='table table-account'
								fields=[
									'oCID'=>['Плат.система'],
									'oOper'=>['Операция'],
									'oTS'=>['Дата'],

									'oSum1'=>['Приход'],
									'oSum2'=>['Расход'],
									'oBatch'=>['Batch-номер']
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
					{/if}
				</div>
			</div>
		</div>
</section>
{include file='footer-account.tpl'}
{/strip}