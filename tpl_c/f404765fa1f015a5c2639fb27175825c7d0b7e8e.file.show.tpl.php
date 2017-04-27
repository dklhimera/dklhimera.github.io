<?php /* Smarty version Smarty-3.1.8, created on 2016-05-16 21:05:10
         compiled from "tpl/ru/news/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:355819300573a0bd6375396-66301275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f404765fa1f015a5c2639fb27175825c7d0b7e8e' => 
    array (
      0 => 'tpl/ru/news/show.tpl',
      1 => 1463420588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '355819300573a0bd6375396-66301275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0bd63a2836_86419126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0bd63a2836_86419126')) {function content_573a0bd63a2836_86419126($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header-page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'shot','title'=>'Новости'), 0);?>
<section class="main1"><div class="container"><div class="row"><div class="col-md-10 col-md-offset-1"><center><h1 ><span> Новости</span></h1></center><div class="clearfix"></div><br/><h2 style='margin-bottom:10px;'><?php echo $_smarty_tpl->tpl_vars['el']->value['nTopic'];?>
</h2><br/><span style='color:#ccc; text-trunsform:uppercase; font-size:12px;'><?php echo $_smarty_tpl->tpl_vars['el']->value['nTS'];?>
</span><hr><div><?php echo $_smarty_tpl->tpl_vars['el']->value['nText'];?>
<div class="clearfix"></div></div><hr><center><a href="javascript:history.go(-1)" class="btn btn-small" ><span>Назад</span> </a></center></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'bgtopother'), 0);?>

<?php }} ?>