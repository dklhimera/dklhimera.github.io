{strip}
{include file='header.tpl' class='shot' title='Вход'}

<div class="tpl_wrap clearfix login_page">
  <div class="container">
    <div class="row">    



                  			{if isset($smarty.get.ip_changed)}
                  				<center>
									<h4 style='display:block; text-align:center;'>Система безопасности</h4>
									<p class="info">
										Вы пытаетесь войти в аккаунт с другого IP-адреса.<br>
										Для продолжения <a href="{_link module='confirm'}">введите код подтверждения</a><br>
										или перейдите по ссылке, которые были высланы на Ваш e-mail
									</p>
								</center>
								{elseif isset($smarty.get.brute_force)}
								<center>
									<h4 style='display:block; text-align:center;'>Система безопасности</h4>
									<p class="info">
										До этого пароль был неверно введен несколько раз подряд.<br>
										Для продолжения <a href="{_link module='confirm'}">введите код подтверждения</a><br>
										или перейдите по ссылке, которые были высланы на Ваш e-mail
									</p>
								</center>
								{else}
								<center >
									{if $url}
										Страница "<i>...{$url}</i>" требует авторизации<br><br>
									{/if}
								</center>
									{if $_cfg.Sys_LockSite}
									<center>
										<p class="info">
											В настоящее время на сайте идут технические работы.<br>
											Вход <b>только</b> для обслуживающего персонала
										</p>
									</center>
									{/if}
									<div class="clearfix"></div>
									<br/>
									<br/>
									<div class="col-md-10">
										{include file='account/login/box.tpl'}
									</div>
								{/if}
				</div>





      </div>
    </div>
  </section>
{include file='footer.tpl'}
{/strip}