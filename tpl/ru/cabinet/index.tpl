{strip}
{include file='header-account.tpl' title='Аккаунт'}


<section class="main4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<h1 style='margin-left:15px;'>
						<small>информация</small>
						<span>Баланс</span>
					</h1>
					<div class="clearfix"></div>
					<br/>

					<div class="box">{include file='balance/bal.tpl'}</div>
				</div>
				<div class="col-md-6">
					<h1 >
						<small>График процентов</small>
						<span>Процент доходности</span>
					</h1>
					<div class="clearfix"></div>
					<br/>
					<br/>
					<br/>
					<div id="graph" style="min-width: 310px; height: 480px; margin: 0 auto"></div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
			        <h1 style='margin-left:15px;'><small>дополнительно</small>
						<span>статистика</span></h1>
			        <br/>
					<div class="box">{include file='balance/_stat.tpl'}</div>
			    </div>
			</div>
		</div>
	</section>
{include file='footer-account.tpl'}
{/strip}