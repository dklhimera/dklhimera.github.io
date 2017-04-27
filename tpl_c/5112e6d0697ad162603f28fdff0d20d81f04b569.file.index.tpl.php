<?php /* Smarty version Smarty-3.1.8, created on 2016-05-16 20:52:45
         compiled from "tpl/ru/news/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1396509177573994426387e3-36523099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5112e6d0697ad162603f28fdff0d20d81f04b569' => 
    array (
      0 => 'tpl/ru/news/index.tpl',
      1 => 1463420588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1396509177573994426387e3-36523099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573994426caa33_74709049',
  'variables' => 
  array (
    'list' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573994426caa33_74709049')) {function content_573994426caa33_74709049($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/karab197/public_html/smarty3/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header-page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'shot','title'=>'Новости'), 0);?>
<section class="main1"><div class="container"><div class="row"><div class="col-md-10 col-md-offset-1"><center><h1 ><small>события и</small><span>Новости</span></h1></center><div class="clearfix"></div><br/><br/><div class="news-list"><?php if ($_smarty_tpl->tpl_vars['list']->value){?><ul class='news-listing'><?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['l']->key;
?><li><a href="<?php echo tplModuleToLink(array('module'=>'news/show','chpu'=>array($_smarty_tpl->tpl_vars['l']->value['nID'],$_smarty_tpl->tpl_vars['l']->value['nTopic'])),$_smarty_tpl);?>
"> <h2><?php echo $_smarty_tpl->tpl_vars['l']->value['nTopic'];?>
</h2></a><div style="min-height: 55px;"><?php echo smarty_modifier_truncate(nl2br($_smarty_tpl->tpl_vars['l']->value['nAnnounce']),300);?>
<div class="clearfix"></div></div><span style='float:left;' class='small-data'><?php echo $_smarty_tpl->tpl_vars['l']->value['nTS'];?>
  </span><a href="<?php echo tplModuleToLink(array('module'=>'news/show','chpu'=>array($_smarty_tpl->tpl_vars['l']->value['nID'],$_smarty_tpl->tpl_vars['l']->value['nTopic'])),$_smarty_tpl);?>
" class="btn " style='float:right; margin-top:-5px;'>больше</a><div class="clearfix"></div></li><?php } ?></ul><?php echo $_smarty_tpl->getSubTemplate ('pl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('class'=>'bgtopother'), 0);?>



<?php }} ?>