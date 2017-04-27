<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:04:55
         compiled from "tpl/ru/account/login/box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19211539745738c0d199b314-50565862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a42ef5265e705ce3c163ca7c362753e5f85768ee' => 
    array (
      0 => 'tpl/ru/account/login/box.tpl',
      1 => 1492023887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19211539745738c0d199b314-50565862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0d19cdbe7_68861665',
  'variables' => 
  array (
    'tpl_errors' => 0,
    'ban_date' => 0,
    '_cfg' => 0,
    '__Capt' => 0,
    'edit_descr_star' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0d19cdbe7_68861665')) {function content_5738c0d19cdbe7_68861665($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['tpl_errors']->value['login_frm'])){?><ul class="error_message"><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['login_frm'][0]=='login_empty'){?><li>Введите логин/пароль</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['login_frm'][0]=='login_not_found'){?><li>Ошибка ввода логина/пароля</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['login_frm'][0]=='not_active'){?><li>Аккаунт не активирован </li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['login_frm'][0]=='banned'){?><li>Access to the account is suspended <?php echo $_smarty_tpl->tpl_vars['ban_date']->value;?>
</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['login_frm'][0]=='blocked'){?><li>Аккаунт заблокирован</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['login_frm'][0]=='captcha_wrong'){?><li>Wrong code</li><?php }?></ul><?php }?><div class="tpl_wrap clearfix login_page"><div class="container"><div class="row"><div class="col-xs-3 left_side"><div class="col-md-12 side_item">Стабильный доход<img src="./images/green_icon1.png" alt=""></div><div class="col-md-12 side_item">Официальная компания<img src="./images/green_icon2.png" alt=""></div><div class="col-md-12 side_item">Страхование вкладов<img src="./images/green_icon3.png" alt=""></div><div class="col-md-12 side_item">Домен на 10 лет<img src="./images/green_icon4.png" alt=""></div></div><div class="col-xs-6 central_part" style="height:740px"><h2>Вход</h2><form method="post" class='form-styled  support-form' name="login_frm" action="login"><input name="a" value="do_login" type="hidden"><input name="follow" value="" type="hidden"><input name="follow_id" value="" type="hidden"><table style="margin: 0 160px;" border="0" cellpadding="2" cellspacing="0"><tbody><tr><td><label for="username">Имя пользователя:</label><input name="Login" id="login_frm_Login" value="<?php echo $_REQUEST['Login'];?>
" type="text" placeholder="Логин"></td></tr><tr><td><label for="password">Пароль:<a href="?a=forgot_password" tabindex="3">Забыли пароль?</a></label><input name="Pass" id="login_frm_Pass" value="<?php echo $_REQUEST['Pass'];?>
"  required="" placeholder="Пароль" type="password"></td></tr><tr><td class="submit_button_td"><input name="login_frm_btn"  value="Вход" style='float:left;' type="submit"></td></tr><?php echo tplFormSecurity(array('form'=>'login_frm','captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Account_LoginCaptcha']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['__Capt']->value){?><?php echo $_smarty_tpl->getSubTemplate ('captcha.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'login_frm','star'=>$_smarty_tpl->tpl_vars['edit_descr_star']->value), 0);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['url']->value){?><input name="URL" id="login_frm_URL" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" type="hidden"><?php }?></tbody></table></form><div class="col-md-12 open_account"><p>Еще не зарегистрированы?</p><a href="?a=signup" class="account_btn"><img src="./images/man_green.png" alt="man">Открыть счет</a></div></div><div class="col-xs-3 right_side"><div class="col-md-12 side_item"><img src="./images/green_icon5.png" alt="">Мощная DDoS защита</div><div class="col-md-12 side_item"><img src="./images/green_icon6.png" alt="">Шифрование Comodo Green EV-SSL</div><div class="col-md-12 side_item"><img src="./images/green_icon7.png" alt="">Профессиональная команда</div><div class="col-md-12 side_item"><img src="./images/green_icon8.png" alt="">Квалифицированная поддержка</div></div></div></div></div><!--tpl_wrap--><?php }} ?>