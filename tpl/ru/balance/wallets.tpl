{strip}
{include file='header-account.tpl' title='Платежные реквизиты'}

<section class="main4 main-wallets">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 style='margin-left:15px;'>
						<small>Платежные</small>
						<span>реквизиты</span>
					</h1>
					<div class="clearfix"></div>
					<br/>
					<br/>
					<form method="post" class='form-oper' action="balance/wallets" name="balance/wallets_frm">
											{if $_cfg.Const_IntCurr}
												<div class="block_form_el none cfix">
													<label>Default payment system</label>
													<div class="block_form_el_right">
														<select name="DefCurr" id="balance/wallets_frm_DefCurr" class="select">
															<option value="0" selected="">- select -</option>
															{foreach from=$defcurr key=k item=v}
																<option value="{$k}" {if $user['aDefCurr']==$k}selected="selected"{/if}>{$v}</option>
															{/foreach}
														</select>
													</div>
												</div>
											{/if}
											<div class="block-wallets">

												{foreach from=$wfields key=f item=v}
													{if is_numeric($f)}
													{else}
														{$vv = _arr_val($wdata, $f)}
														<div class='{$f|replace:'[acc]':''}'>
															<i></i>
															<label>Номер счета</label>
															<input name="{$f}" id="balance/wallets_frm_{$f}" value="{$vv}" type="text"  placeholder='{$v.comment}' >
														</div>
													{/if}
												{/foreach}
											</div>
												<div class="clearfix"></div>
												{if $showbutton and ($_cfg.Sec_MinPIN > 0)}
													<div class="block_form_el cfix">
														<label for="">Input PIN-code (to confirm changes)</label>
														<div class="block_form_el_right">
															<input name="PIN" id="balance/wallets_frm_PIN" value="{$smarty.request.PIN}" type="text">
														</div>
													</div>
												{/if}
												{_getFormSecurity form='balance/wallets_frm'}
												<br/>
													<center>

													<input name="balance/wallets_frm_btn" value="Сохранить" type="submit" >
													</center>
											<div class="clearfix"></div>
											<br/>
					</form>
				</div>
			</div>
		</div>
</section>

{include file='footer-account.tpl'}
{/strip}