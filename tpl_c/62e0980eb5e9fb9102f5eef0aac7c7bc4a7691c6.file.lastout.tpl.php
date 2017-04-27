<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 23:04:06
         compiled from "tpl/ru/depo/lastout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22184129358ee87e81f19c4-16569471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62e0980eb5e9fb9102f5eef0aac7c7bc4a7691c6' => 
    array (
      0 => 'tpl/ru/depo/lastout.tpl',
      1 => 1492027429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22184129358ee87e81f19c4-16569471',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58ee87e821bc43_75778868',
  'variables' => 
  array (
    'list' => 0,
    'r' => 0,
    'imgs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee87e821bc43_75778868')) {function content_58ee87e821bc43_75778868($_smarty_tpl) {?><h1>Последние выплаты</h1><?php $_smarty_tpl->tpl_vars['imgs'] = new Smarty_variable(array(1=>'lr_small.png',2=>'pm_small.png'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['list']->value){?><table class="FormatTable" border="1"><tr><th>Пользователь</th><th>Сумма</th><th>Batch</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if ($_smarty_tpl->tpl_vars['r']->value['oSum']>0){?><tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value['uLogin'];?>
</td><td align="right"><img src="images/<?php echo $_smarty_tpl->tpl_vars['imgs']->value[$_smarty_tpl->tpl_vars['r']->value['ocID']];?>
"> <?php echo _z($_smarty_tpl->tpl_vars['r']->value['oSum'],$_smarty_tpl->tpl_vars['r']->value['ocID']);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value['oBatch'];?>
</td></tr><?php }?><?php } ?></table><?php }?><br><?php }} ?>