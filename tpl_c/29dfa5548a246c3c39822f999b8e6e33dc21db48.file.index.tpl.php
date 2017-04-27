<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 21:58:36
         compiled from "tpl/ru/account/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14940831725738c0d1935988-35850219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29dfa5548a246c3c39822f999b8e6e33dc21db48' => 
    array (
      0 => 'tpl/ru/account/login/index.tpl',
      1 => 1492023514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14940831725738c0d1935988-35850219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0d198bbd7_98710316',
  'variables' => 
  array (
    'url' => 0,
    '_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0d198bbd7_98710316')) {function content_5738c0d198bbd7_98710316($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'shot','title'=>'Вход'), 0);?>
<div class="tpl_wrap clearfix login_page"><div class="container"><div class="row"><?php if (isset($_GET['ip_changed'])){?><center><h4 style='display:block; text-align:center;'>Система безопасности</h4><p class="info">Вы пытаетесь войти в аккаунт с другого IP-адреса.<br>Для продолжения <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail</p></center><?php }elseif(isset($_GET['brute_force'])){?><center><h4 style='display:block; text-align:center;'>Система безопасности</h4><p class="info">До этого пароль был неверно введен несколько раз подряд.<br>Для продолжения <a href="<?php echo tplModuleToLink(array('module'=>'confirm'),$_smarty_tpl);?>
">введите код подтверждения</a><br>или перейдите по ссылке, которые были высланы на Ваш e-mail</p></center><?php }else{ ?><center ><?php if ($_smarty_tpl->tpl_vars['url']->value){?>Страница "<i>...<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</i>" требует авторизации<br><br><?php }?></center><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Sys_LockSite']){?><center><p class="info">В настоящее время на сайте идут технические работы.<br>Вход <b>только</b> для обслуживающего персонала</p></center><?php }?><div class="clearfix"></div><br/><br/><div class="col-md-10"><?php echo $_smarty_tpl->getSubTemplate ('account/login/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }?></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>