<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:16:45
         compiled from "tpl/ru/cabinet/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1934624187573a09192f8bc9-36233917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c83ee16cf65c988b7c9f3b5e27e5862c269ac824' => 
    array (
      0 => 'tpl/ru/cabinet/index.tpl',
      1 => 1492024387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1934624187573a09192f8bc9-36233917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0919320d39_15276241',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0919320d39_15276241')) {function content_573a0919320d39_15276241($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Аккаунт'), 0);?>
<section class="main4"><div class="container-fluid"><div class="row"><div class="col-md-6"><h1 style='margin-left:15px;'><small>информация</small><span>Баланс</span></h1><div class="clearfix"></div><br/><div class="box"><?php echo $_smarty_tpl->getSubTemplate ('balance/bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><div class="col-md-6"><h1 ><small>График процентов</small><span>Процент доходности</span></h1><div class="clearfix"></div><br/><br/><br/><div id="graph" style="min-width: 310px; height: 480px; margin: 0 auto"></div></div><div class="clearfix"></div><div class="col-md-12"><h1 style='margin-left:15px;'><small>дополнительно</small><span>статистика</span></h1><br/><div class="box"><?php echo $_smarty_tpl->getSubTemplate ('balance/_stat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>