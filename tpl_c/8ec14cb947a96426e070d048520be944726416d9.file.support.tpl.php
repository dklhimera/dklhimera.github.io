<?php /* Smarty version Smarty-3.1.8, created on 2016-05-16 20:52:34
         compiled from "tpl/ru/message/support.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19811995385739def22dfab8-80214003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec14cb947a96426e070d048520be944726416d9' => 
    array (
      0 => 'tpl/ru/message/support.tpl',
      1 => 1463420584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19811995385739def22dfab8-80214003',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5739def231dfa1_10230452',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5739def231dfa1_10230452')) {function content_5739def231dfa1_10230452($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'shot','title'=>'Контакты'), 0);?>
<section class="main1"><div class="container"><div class="row"><div class="col-md-8 col-md-offset-2"><center><h1 ><span>Контакты</span></h1></center><div class="clearfix"></div><br/><div><?php if (isset($_GET['done'])){?><br/><center><h4>Ваш запрос в поддержку успешно отправлен!</h4><p class="info">Администратор ответит Вам в течение 6-и часов</p></center><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('message/support.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><div class="clearfix"></div></div></div></section><section class="map"><div class="block-google-location"><div id="map"></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'other'), 0);?>
<?php }} ?>