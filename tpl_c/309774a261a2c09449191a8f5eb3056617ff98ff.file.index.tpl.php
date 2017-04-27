<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:17:37
         compiled from "tpl/ru/depo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72671700458ee7d51c305f3-21984512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309774a261a2c09449191a8f5eb3056617ff98ff' => 
    array (
      0 => 'tpl/ru/depo/index.tpl',
      1 => 1492024397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72671700458ee7d51c305f3-21984512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58ee7d51c6f090_27022828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee7d51c6f090_27022828')) {function content_58ee7d51c6f090_27022828($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Депозиты'), 0);?>
<section class="main4"><div class="container-fluid"><div class="row"><div class="col-md-12"><h1 style='margin-left:15px;'><small>История</small><span>депозитов</span></h1><div class="clearfix"></div><br/><br/><?php echo $_smarty_tpl->getSubTemplate ('depo/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['list']->value){?><?php echo $_smarty_tpl->getSubTemplate ('list.other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('url'=>'*','table_class'=>'table table-account','fields'=>array('pName'=>array('План'),'dCTS'=>array('Дата начала'),'cName'=>array('Плат.система'),'dZD'=>array('Сумма'),'dLTS'=>array('Посл.начисление'),'dN'=>array('Начислений'),'dZP'=>array('Начислено'),'dNTS'=>array('След.начисление')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*'), 0);?>
<?php }else{ ?><center><br><br><center class='text-white'>У Вас нет вкладов</center><br><br></center><?php }?></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>