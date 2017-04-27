{strip}


{include file='header.tpl' class='shot' title='Отзывы'}
<section class="main1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center><h1><span>О нас говорят</span></h1></center>
          <div class="clearfix"></div>
          <br/>
          <div class="col-md-8">
										{if isset($smarty.get.awating)}
												<center>
													<h4>Your review has successfully added!</h4>
													<p class="info">
														The administrator will check it in the near future
													</p>
												</center>
										{else}
											{if $list}
												<ul class='box-faq'>
	        										{foreach name=list from=$list key=id item=l}
														<li >
												            <a>{$l.uLogin} <span style='float:right;'>{$l.oTS}</span></a>
												            <div class="box">
												            	<div>
												            		{$l.oText|nl2br}
																</div>
												            </div>
														</li>
													{/foreach}
												</ul>
												{include file='pl.tpl'}
											{else}
												<div class="box">
													- Нет отзывов -
												</div>
											{/if}
										{/if}
								</div>
					          	<div class="col-md-4">

						              		{if _uid()}

						              			<h3>Оставить отзыв</h3>
													{include file='edit.other.tpl'
																	title=''
																	form_class='form-oper '
																	table_class='table-oper table-oper-1'
																	fields=
																	[
																		'Text'=>
																			[
																				'W',
																				'',
																				[
																					'text_empty'=>'input text'
																				],
																				'size'=>5,
																				'hint'=>'Text...'
																			]

																	]
																	btn_text='Добавить'
																}

											{else}
											<div class="clearfix"></div>

											{/if}
								</div>


						 </div>
      </div>
    </div>
</section>


</div>
{include file='footer.tpl'}
{/strip}

