<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:16:45
         compiled from "tpl/ru/balance/bal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140286873573a091951f306-56751164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37758ed174d1c9f8fadd285fbd411474d57e3163' => 
    array (
      0 => 'tpl/ru/balance/bal.tpl',
      1 => 1492024382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140286873573a091951f306-56751164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a09195582a2_27318904',
  'variables' => 
  array (
    'currs' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a09195582a2_27318904')) {function content_573a09195582a2_27318904($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['currs']->value){?><table class="table table-account"><tr><th width='180'></th><th>Доступно</th><th>Занято</th><th>Ожидает</th></tr><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?><?php if (!$_smarty_tpl->tpl_vars['c']->value['cHidden']){?><tr><td class='image'><i><img src="images/p/<?php echo $_smarty_tpl->tpl_vars['c']->value['cID'];?>
.png" height='25'></i>&nbsp; &nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['c']->value['cName'];?>
</span></td><td align='center' nowrap="nowrap" class='balance'><?php echo _z($_smarty_tpl->tpl_vars['c']->value['wBal'],$_smarty_tpl->tpl_vars['c']->value['wcID'],-1);?>
 <small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></td><td align='center'  nowrap="nowrap" class='balance'><?php echo _z($_smarty_tpl->tpl_vars['c']->value['wLock'],$_smarty_tpl->tpl_vars['c']->value['wcID'],-1);?>
 <small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></td><td align='center'  nowrap="nowrap" class='balance'><?php echo _z($_smarty_tpl->tpl_vars['c']->value['wOut'],$_smarty_tpl->tpl_vars['c']->value['wcID'],-1);?>
 <small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></td></tr><?php }?><?php } ?></table><?php }?>
<?php }} ?>