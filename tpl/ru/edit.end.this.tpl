{strip}
{*
	captcha: show captcha mode = 0..2
	errors: errors_array
	btn_text: ' ' to hide
	btns: [name => 'button caption']
	hide_cancel:
*}

								{*** CERT & CAPTCHA ***}
	{_getFormSecurity form=$edit_form_name captcha=$captcha}
	{if $__Capt}
		{include file='captcha.tpl' form=$edit_form_name star=$edit_descr_star}
	{/if}
								{*** LOST ERRORS ***}
	{if $errors}
		{include file='err.tpl' form=$edit_form_name errs=$errors}
		{$error_text}
	{/if}
	{if $tpl_errors[$edit_form_name]}
		{$lost_err = ''}
		{foreach from=$tpl_errors[$edit_form_name] key=i item=e}
			{if $e}
				{$lost_err = "$lost_err$e<br>"}
			{/if}
		{/foreach}
		{if $lost_err}
			<span class="err">{$lost_err}</span>
		{/if}
	{/if}


		<center>							{*** BUTTONS ***}
	{if $btn_text !== ' '}


						<input name="{$edit_form_name}_btn"  value="{if $btn_text}{$btn_text}{elseif !$edit_is_new}Сохранить{else}Создать{/if}" type="submit" class="login-btn btn-filled">
				&nbsp;

	{/if}
	{if is_array($btns)}
		{foreach from=$btns key=f item=v}
			&nbsp;

						<input name="{$edit_form_name}_btn{$f}" value="{$v}" onClick="return confirm('подтвердить \'{$v}\'');" type="submit" class="login-btn btn-filled">


		{/foreach}
	{/if}
	{*if !$hide_cancel and !$_IN}
		&nbsp;<a href="javascript:history.go(-1)" class="btn btn-back"><span>Назад</span></a>
	{/if*}
	</center>

</form>

{/strip}