{strip}
{include file='header-account.tpl' title='Партнерская программа'}

<section class="main4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 style='margin-left:15px;'>
						<small>Партнерская</small>
						<span>программа</span>
					</h1>
					<div class="clearfix"></div>
					<br/>
					<br/>

	
	<ul class="block-stat block-stat-1">
		<li>
			<i class="demo-icon icon-group"></i>
			<small>Pеферальная ссылка</small>
			<span><input type="text"  onclick='this.select();' value='{$refurl}'></span>
		</li>
		<li class="bg">
			<i class="demo-icon icon-chart"></i>
			<small>Вы приглашены</small>
			<span><input  value="{if $reflogin}{$reflogin}{else}N\A{/if}"  readonly="" type="text" ></span>
		</li>
	</ul>
	<div class="clearfix"></div>
	<br/>
	<br/>
	<br/>
		<table class="table table-account">
											<tr>
												<th>Пользователь</th>
												<th>Дата регистрации</th>
												<th>Вклады</th>
												<th>Рефские</th>
											</tr>
											{foreach from=$refs key=i item=r}
												{if count($refs) > 1}
													<tr>
														<th  class='level' colspan="4" align="center">Уровень {$i + 1}{if $r.perc}: {$r.perc}%{/if}</th>
													</tr>
												{/if}
												{foreach from=$r.users key=j item=u}

													<tr>
														<td align="center" class='td-label'>{$u.uLogin}</td>
														<td align="center" class='td-date'>{$u.aCTS}</td>
											            <td  align="center" class='balance'>{_z($u.ZDepo, 1)} <small>{$u.cCurr}</small></td>
														<td  align="center" class='balance'>{_z($u.ZRef, 1)}<small>{$u.cCurr}</small></td>
													</tr>
												{/foreach}
											{/foreach}
		</table>
	

 </div>

{include file='footer-account.tpl'}
{/strip}