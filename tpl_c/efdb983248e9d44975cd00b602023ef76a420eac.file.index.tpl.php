<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:09:30
         compiled from "tpl/ru/balance/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:487444012573a091d275825-34192928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdb983248e9d44975cd00b602023ef76a420eac' => 
    array (
      0 => 'tpl/ru/balance/index.tpl',
      1 => 1491981502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '487444012573a091d275825-34192928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a091d2be744_34824257',
  'variables' => 
  array (
    '_selfLink' => 0,
    '_cfg' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a091d2be744_34824257')) {function content_573a091d2be744_34824257($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Баланс'), 0);?>
<h1>Баланс</h1><?php if (isset($_GET['fail'])){?><h2>Операция НЕ завершена!</h2><p class="info">Процедура пополнения была прервана или произошла ошибка.<br>Попробуйте <a href="<?php echo $_smarty_tpl->tpl_vars['_selfLink']->value;?>
">повторить операцию</a> позже</p><?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('balance/_bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><br><a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHIN" class="button-green">Пополнить</a>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=CASHOUT" class="button-green">Вывести</a><?php if (!$_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']){?>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=EX" class="button-green">Обменять</a><?php }?>&nbsp;<a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?add=TR" class="button-green">Перевести</a><br><?php if ($_smarty_tpl->tpl_vars['list']->value){?><br><hr width="400px"><?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Операции','url'=>'*','fields'=>array('oTS'=>array('Дата'),'oOper'=>array('Операция'),'oCID'=>array('Плат.система'),'oSum1'=>array('Приход'),'oSum2'=>array('Расход'),'oBatch'=>array('Batch-номер'),'oState'=>array('Статус'),'oMemo'=>array('Примечание')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>