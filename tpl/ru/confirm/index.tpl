{strip}
{include file='header-page.tpl' title='Confirmation'}
		<section class="section-page">
            	<div class="container">
              		<div class="row">
            				<div class="col-md-6  col-md-offset-3">
									<h1 class='title'>Confirmation </h1>
									{if isset($smarty.get.done)}
										<h4>Operation complete!</h4>
									{else}

										{if isset($smarty.get.need_confirm_sms)}

											
										<h4>Operation NOT complete!</h4>
		<p class="info">
			To complete the operation, you must input confirmation code<br>
			that was sent to your phone
		</p>
										
										{/if}
										
										<br/>
										{include file='edit.other.tpl' 
										url="{_link module='confirm'}"
										fields=
										[
											'Code'=>
												[
													'T', 
													'Confirmation code!!',
													[
														'code_empty'=>'input code',
						'code_not_found'=>'wrong code',
						'code_used'=>'code is already outdated',
						'code_expired'=>'code has expired',
						'dif_ip'=>'confirmation from your IP-address can not be done',
						'oper_wrong'=>'wrong operation',
						'oper_unkn'=>'operation is not implemented'
													],
													'size'=>40,
													'hint'=>'Confirmation code',
													'default'=>$smarty.get.code
												]	
										]
										captcha=$_cfg.Confirm_Captcha
										btn_text='Execute'
									}
									
									{/if}
							</div>
							<div class="clearfix"></div>
					</div>
       		 	</div>
    	</section>
{include file='footer.tpl'}
{/strip}