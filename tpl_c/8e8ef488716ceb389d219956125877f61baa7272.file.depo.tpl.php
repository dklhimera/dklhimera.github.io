<?php /* Smarty version Smarty-3.1.8, created on 2016-05-16 21:01:06
         compiled from "tpl/ru/depo/depo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:928451088573a0ae2a69a14-38636148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e8ef488716ceb389d219956125877f61baa7272' => 
    array (
      0 => 'tpl/ru/depo/depo.tpl',
      1 => 1463420569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928451088573a0ae2a69a14-38636148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'el' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0ae2a9a211_14985816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0ae2a9a211_14985816')) {function content_573a0ae2a9a211_14985816($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Депозит'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><section class="main4"><div class="container-fluid"><div class="row"><div class="col-md-8"><h1 style='margin-left:15px;'><small>Ваш</small><span>Депозит</span></h1><div class="clearfix"></div><br/><br/><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></section><?php }else{ ?><section class="main4"><div class="container-fluid"><div class="row"><div class="col-md-8"><h1 style='margin-left:15px;'><small>Открытие</small><span>депозита</span></h1><div class="clearfix"></div><br/><br/><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.interval.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></section><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>