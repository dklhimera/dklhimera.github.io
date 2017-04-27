<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 20:53:03
         compiled from "tpl/ru/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14894494225738c0cb5178f6-92817132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0692f56266bd24c2dd3cd092d079a9040f52441' => 
    array (
      0 => 'tpl/ru/header.tpl',
      1 => 1492019442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14894494225738c0cb5178f6-92817132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0cb541c82_57847154',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0cb541c82_57847154')) {function content_5738c0cb541c82_57847154($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <title>Weedex -  инвестиции в легальный бизнес на территории США. Все инвестиции осуществляются через венчурные фонды посредством платформы VIA Folio.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">           
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">    
    <link href="/css/jquery.fancybox.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/introjs.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/style_ru.css" rel="stylesheet">
    <link href="/css/flipclock.css" rel="stylesheet">
    <link href="/css/telegram.css" rel="stylesheet">    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" async="" src="/js/watch.js"></script>
	<script type="text/javascript" async="" src="/js/recaptcha__ru.js"></script>
	<script src="/js/api.js"></script>    
	</head> 
<body>
<div class="wrapper">
<div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 logo_row">                   
                   <div class="col-xs-2 logo">
                        <a href="/?a=home"><img src="/images/logo.png" alt="logo"></a>
                    </div>                    
                    <div class="col-xs-5 phone_number">
                        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://vk.com" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com" target="_blank" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            <a href="#" target="_blank" class="social"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="https://telegram.me" target="_blank" class="social"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                        <span class="span_number"><img src="/images/phone_icon.png"> +441748220037 (9:00 AM - 2:00 PM)</span>
                    </div>

                    <div class="col-xs-5 adress">
                            <div class="language_select en">                                
                            </div>             
                            <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']!=1){?>							
                            <a href="/registration class="account_btn"><img src="/images/Man.png" alt="man">Регистрация</a>
                            <a href="/login" class="login_btn"><img src="/images/Key.png" alt="key">Логин</a>
							<?php }else{ ?>
							<a href="/cabinet" class="account_btn"><img src="/images/Man.png" alt="man">Личный кабинет</a>
							<a href="/logout" class="login_btn"><img src="/images/key_arrow.png" alt="key">Выйти</a>
							<?php }?>
                                             </div>
                </div>
                <div class="col-xs-12">
                    <?php echo $_smarty_tpl->getSubTemplate ("header_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>        </div>
    </div>
</div><?php }} ?>