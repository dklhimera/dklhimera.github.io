<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 11:44:16
         compiled from "tpl/ru/account/register/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454349514573a083d5b4642-12863383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7154b93126bce2dbc20a1629b89eb3be0536adb6' => 
    array (
      0 => 'tpl/ru/account/register/index.tpl',
      1 => 1491981564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454349514573a083d5b4642-12863383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a083d6c19f8_81393541',
  'variables' => 
  array (
    '_cfg' => 0,
    'valid_ref' => 0,
    'txt_login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a083d6c19f8_81393541')) {function content_573a083d6c19f8_81393541($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Регистрация'), 0);?>
<h1>Регистрация</h1><?php if (isset($_GET['done'])){?><h2>Регистрация завершена!</h2><p class="info">Теперь Вы можете <a href="<?php echo tplModuleToLink(array('module'=>'account/login'),$_smarty_tpl);?>
">войти</a> в свой аккаунт</p><?php }elseif(isset($_GET['need_confirm'])){?><h2>Регистрация НЕ завершена!</h2><p class="info">Для завершения операции Вы должны подтвердить свой e-mail.<br>Для этого <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail.<br><br>Если письмо долго не приходит, то попробуйте <a href="<?php echo tplModuleToLink(array('module'=>'account/change_mail'),$_smarty_tpl);?>
">сменить e-mail</a></p><?php }elseif(isset($_GET['need_confirm_sms'])){?><h2>Регистрация НЕ завершена!</h2><p class="info">Для завершения операции Вы должны подтвердить свой номер телефона.<br>Для этого <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>который был выслан на Ваш телефон</p><?php }elseif($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==0){?><h2>Регистрация приостановлена!</h2><p class="info">Регистрация на сайте временно приостановлена.<br>По всем вопросам обращайтесь в <a href="<?php echo tplModuleToLink(array('module'=>'message/support'),$_smarty_tpl);?>
">поддержку</a></p><?php }else{ ?><?php $_smarty_tpl->tpl_vars['txt_login'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'e-mail','логин'), null, 0);?><?php if (($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2)&&!$_smarty_tpl->tpl_vars['valid_ref']->value){?><h2>Внимание!</h2><p class="info">Регистрация на сайте возможна <b>только</b> <a href="<?php echo tplModuleToLink(array('module'=>'udp/about'),$_smarty_tpl);?>
">по приглашению</a>.<br>Для этого Вы должны перейти на наш сайт<br>по специальной реф-ссылке участника или указать его <?php echo $_smarty_tpl->tpl_vars['txt_login']->value;?>
</p><?php }elseif($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3){?><h2>Внимание!</h2><p class="info">Регистрация на сайте возможна <b>только</b> <a href="<?php echo tplModuleToLink(array('module'=>'udp/about'),$_smarty_tpl);?>
">по приглашению</a>.<br>Для этого, Вы должны указать код приглашения</p><?php }?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_Loginza']&&(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==1)||(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2)&&$_smarty_tpl->tpl_vars['valid_ref']->value))&&($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0)){?><?php echo $_smarty_tpl->getSubTemplate ('account/loginza/box.small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><h3>или</h3><?php }?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'account/register'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==2){?><?php echo "!!";?><?php }?><?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']){?><?php echo " <<укажите e-mail>>";?><?php }?><?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo tplModuleToLink(array('module'=>'udp/rules'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>$_tmp1,'form'=>'register_frm','fields'=>array('aName'=>array('T','Ваше имя',array('name_empty'=>'укажите имя'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_UseName']!=1)),'uLogin'=>array('T','Придумайте логин!!',array('login_empty'=>'укажите логин','login_short'=>"логин слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Account_MinLogin'])."]",'login_wrong'=>'неверный формат логина','login_used'=>'логин уже используется'),'skip'=>$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins'],'comment'=>' <span id="login_check" class="err"></span>'),'uMail'=>array('T',valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegConfirm'],'e-mail!! <<будет выслано подтверждение>>','e-mail!!'),array('mail_empty'=>'укажите e-mail','mail_wrong'=>'неверный e-mail','mail_used'=>'e-mail уже используется'),'comment'=>' <span id="mail_check" class="err"></span>'),'uPass'=>array('*','Придумайте пароль!!',array('pass_empty'=>'укажите пароль','pass_short'=>"пароль слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Account_MinPass'])."]",'pass_wrong'=>'пароль не соответствует формату')),'Pass2'=>array('*','Повторите пароль!!',array('pass_not_equal'=>'пароли не совпадают')),'aTel'=>array('T','Номер телефона!! <<с кодом страны>>',array('tel_wrong'=>'неверный номер'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['SMS_REG']),'uRef'=>array('T',"Вас пригласил".$_tmp2.$_tmp3,array('ref_empty'=>"укажите ".($_smarty_tpl->tpl_vars['txt_login']->value),'ref_not_found'=>($_smarty_tpl->tpl_vars['txt_login']->value)." не найден"),'default'=>$_SESSION['_ref'],'skip'=>(($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']==3)||!$_smarty_tpl->tpl_vars['_cfg']->value['Ref_Word']),'readonly'=>$_smarty_tpl->tpl_vars['valid_ref']->value),'Invite'=>array('T','Код приглашения!!',array('inv_empty'=>'укажите код','inv_not_found'=>'неверный код','inv_used'=>'код уже использован'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Account_RegMode']!=3)),'aSQuestion'=>array('T','Контрольный вопрос!!',array('secq_empty'=>'укажите вопрос','secq_short'=>"вопрос слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]"),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'aSAnswer'=>array('T','Контрольный ответ!!',array('seca_empty'=>'укажите ответ','seca_short'=>"ответ слишком короткий [не менее ".($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA'])."]",'seqa_equal_secq'=>'ответ не может совпадать с вопросом'),'skip'=>($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinSQA']==0),'size'=>40),'Agree'=>array('CC',"Я принимаю <a href=\"".$_tmp4."\" target=\"_blank\">правила</a> и соглашаюсь!! с условиями предоставления услуг",array('must_agree'=>'вы должны принять правила'))),'errors'=>array('multi_reg'=>'множественная регистрация запрещена'),'captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_RegCaptcha'],'btn_text'=>'Зарегистрироваться'), 0);?>
<?php }?><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Const_NoLogins']){?><script type="text/javascript">function chkLogin(){$('#register_frm_uLogin').removeClass('error');$('#login_check').html('');$.ajax({type: 'POST',url: 'ajax',data: 'module=account/register&do=chklogin&login='+encodeURIComponent($('#register_frm_uLogin').val()),success:function(ex){if (ex == 1){$('#register_frm_uLogin').addClass('error');$('#login_check').html('занят');}}});}tid2=0;$('#register_frm_uLogin').keypress(function(){clearTimeout(tid2);tid2=setTimeout(function(){ chkLogin(); }, 1000);});chkLogin();</script><?php }?><script type="text/javascript">function chkMail(){$('#register_frm_uMail').removeClass('error');$('#mail_check').html('');$.ajax({type: 'POST',url: 'ajax',data: 'module=account/register&do=chkmail&mail='+encodeURIComponent($('#register_frm_uMail').val()),success:function(ex){if (ex == 1){$('#register_frm_uMail').addClass('error');$('#mail_check').html('занят');}}});}tid=0;$('#register_frm_uMail').keypress(function(){clearTimeout(tid);tid=setTimeout(function(){ chkMail(); }, 1000);});chkMail();</script><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>