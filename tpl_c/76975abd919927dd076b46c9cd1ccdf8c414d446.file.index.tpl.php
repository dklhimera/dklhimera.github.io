<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:06:39
         compiled from "tpl/en/balance/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76790538958ee7abfbace67-58326699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76975abd919927dd076b46c9cd1ccdf8c414d446' => 
    array (
      0 => 'tpl/en/balance/index.tpl',
      1 => 1491981474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76790538958ee7abfbace67-58326699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_selfLink' => 0,
    '_cfg' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58ee7abfc19930_40708786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee7abfc19930_40708786')) {function content_58ee7abfc19930_40708786($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Balance'), 0);?>
<h1>Balance</h1><?php if (isset($_GET['fail'])){?><h2>Operation NOT complete!</h2><p class="info">The operation was was aborted or an error occurs.<br>Try <a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
">again</a> later</p><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><br><a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHIN" class="button-green">Add funds</a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHOUT" class="button-green">Withdraw</a><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']){?>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=EX" class="button-green">Exchange</a><?php }?>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=TR" class="button-green">Transfer</a><br><?php if ($_smarty_tpl->tpl_vars['list']->value){?><br><hr width="400px"><?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Operations','url'=>'*','fields'=>array('oTS'=>array('Date'),'oOper'=>array('Operation'),'oCID'=>array('Pay.system'),'oSum1'=>array('In'),'oSum2'=>array('Out'),'oBatch'=>array('Batch-number'),'oState'=>array('State'),'oMemo'=>array('Memo')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>