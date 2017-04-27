<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:16:45
         compiled from "tpl/ru/balance/bal-oper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1116015290573a0919463156-02974181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2feab9f73346a4b8e63d2f77dd5dae6afe579213' => 
    array (
      0 => 'tpl/ru/balance/bal-oper.tpl',
      1 => 1492024381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1116015290573a0919463156-02974181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a091951a633_47519487',
  'variables' => 
  array (
    'currs' => 0,
    'c' => 0,
    'data_lock1' => 0,
    'data_bal1' => 0,
    'data_out1' => 0,
    'data_lock2' => 0,
    'data_bal2' => 0,
    'data_out2' => 0,
    'data_lock3' => 0,
    'data_bal3' => 0,
    'data_out3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a091951a633_47519487')) {function content_573a091951a633_47519487($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/c/ca56304/public_html/smarty3/plugins/modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['currs']->value){?><?php $_smarty_tpl->tpl_vars["data_lock1"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["data_lock2"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["data_lock3"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["data_bal1"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["data_bal2"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["data_bal3"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["data_out1"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["data_out2"] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["data_out3"] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?><?php if ($_smarty_tpl->tpl_vars['c']->value['cCurr']=='USD'){?><?php $_smarty_tpl->tpl_vars["data_lock1"] = new Smarty_variable($_smarty_tpl->tpl_vars['data_lock1']->value+$_smarty_tpl->tpl_vars['c']->value['wLock'], null, 0);?><?php $_smarty_tpl->tpl_vars["data_bal1"] = new Smarty_variable($_smarty_tpl->tpl_vars['data_bal1']->value+$_smarty_tpl->tpl_vars['c']->value['wBal'], null, 0);?><?php $_smarty_tpl->tpl_vars["data_out1"] = new Smarty_variable($_smarty_tpl->tpl_vars['data_out1']->value+$_smarty_tpl->tpl_vars['c']->value['wOut'], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['c']->value['cCurr']=='RUB'){?><?php $_smarty_tpl->tpl_vars["data_lock2"] = new Smarty_variable($_smarty_tpl->tpl_vars['data_lock2']->value+$_smarty_tpl->tpl_vars['c']->value['wLock'], null, 0);?><?php $_smarty_tpl->tpl_vars["data_bal2"] = new Smarty_variable($_smarty_tpl->tpl_vars['data_bal2']->value+$_smarty_tpl->tpl_vars['c']->value['wBal'], null, 0);?><?php $_smarty_tpl->tpl_vars["data_out2"] = new Smarty_variable($_smarty_tpl->tpl_vars['data_out2']->value+$_smarty_tpl->tpl_vars['c']->value['wOut'], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['c']->value['cCurr']=='BTC'){?><?php $_smarty_tpl->tpl_vars["data_lock3"] = new Smarty_variable($_smarty_tpl->tpl_vars['data_lock3']->value+$_smarty_tpl->tpl_vars['c']->value['wLock'], null, 0);?><?php $_smarty_tpl->tpl_vars["data_bal3"] = new Smarty_variable($_smarty_tpl->tpl_vars['data_bal3']->value+$_smarty_tpl->tpl_vars['c']->value['wBal'], null, 0);?><?php $_smarty_tpl->tpl_vars["data_out3"] = new Smarty_variable($_smarty_tpl->tpl_vars['data_out3']->value+$_smarty_tpl->tpl_vars['c']->value['wOut'], null, 0);?><?php }?><?php } ?><div class="blocks"><small>USD</small><span><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['data_bal1']->value,2),'-','');?>
<small>$</small></span></div><div class="blocks"><small>BTC</small><span><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['data_bal3']->value,6),'-','');?>
<small>b</small></span></div><div class="blocks"><small>RUB</small><span><?php echo smarty_modifier_replace(number_format($_smarty_tpl->tpl_vars['data_bal2']->value,2),'-','');?>
<small>р</small></span></div><?php }?>
<?php }} ?>