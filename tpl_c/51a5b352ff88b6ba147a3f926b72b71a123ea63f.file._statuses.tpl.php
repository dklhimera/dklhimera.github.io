<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:40:45
         compiled from "tpl/ru/balance/_statuses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1434844203573a09e65be935-64468862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a5b352ff88b6ba147a3f926b72b71a123ea63f' => 
    array (
      0 => 'tpl/ru/balance/_statuses.tpl',
      1 => 1492024384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1434844203573a09e65be935-64468862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a09e65f76e8_43043873',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a09e65f76e8_43043873')) {function content_573a09e65f76e8_43043873($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['op_names'] = new Smarty_variable(array('BONUS'=>'Бонус','PENALTY'=>'Штраф','CASHIN'=>'Пополнение','CASHOUT'=>'Вывод','EX'=>'Исх. обмен','EXIN'=>'Вх. обмен','TR'=>'Перевод','TRIN'=>'Приход','BUY'=>'Покупка','SELL'=>'Продажа','BUY2'=>'Услуга','SELL2'=>'Оказание услуги','REF'=>'Рефские','GIVE'=>'Вклад','TAKE'=>'Снятие','CALCIN'=>'Начисление','CALCOUT'=>'Отчисление'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['op_names'] = clone $_smarty_tpl->tpl_vars['op_names']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['op_names'] = clone $_smarty_tpl->tpl_vars['op_names'];?>
<?php $_smarty_tpl->tpl_vars['op_statuses'] = new Smarty_variable(array(0=>'Ожидает подтверждения',1=>'Ожидает пополнения',2=>'Ожидает выполнения',3=>'Выполнена',4=>'Отклонена',5=>'Отменена'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['op_statuses'] = clone $_smarty_tpl->tpl_vars['op_statuses']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['op_statuses'] = clone $_smarty_tpl->tpl_vars['op_statuses'];?>
<?php $_smarty_tpl->tpl_vars['op_sums'] = new Smarty_variable(array('BONUS'=>'Сумма','PENALTY'=>'Сумма','CASHIN'=>'Сумма к пополнению','CASHOUT'=>'Сумма к выводу','EX'=>'Сумма к обмену','EXIN'=>'Полученная сумма','TR'=>'Сумма к получению','TRIN'=>'Полученная сумма','BUY'=>'Сумма','SELL'=>'Сумма','BUY2'=>'Сумма','SELL2'=>'Сумма','REF'=>'Сумма','GIVE'=>'Сумма вклада','TAKE'=>'Сумма к получению','CALCIN'=>'Сумма','CALCOUT'=>'Сумма'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['op_sums'] = clone $_smarty_tpl->tpl_vars['op_sums']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['op_sums'] = clone $_smarty_tpl->tpl_vars['op_sums'];?>
<?php }} ?>