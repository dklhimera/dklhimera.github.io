<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:16:45
         compiled from "tpl/ru/balance/_stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:739520418573a091955a9b6-34630416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a993faacfb645cb32751f66ee2de6679b2677d6' => 
    array (
      0 => 'tpl/ru/balance/_stat.tpl',
      1 => 1492024384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '739520418573a091955a9b6-34630416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a09195a7355_05315977',
  'variables' => 
  array (
    'stats' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a09195a7355_05315977')) {function content_573a09195a7355_05315977($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['stats']->value){?><table class="table table-account"  ><tr><th width='180'>Плат. система</th><th>Рефские</th><th>Введено</th><th>На депозитах</th><th>Начислено</th><th>Выведено</th></tr><?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['c']->key;
?><?php if (!$_smarty_tpl->tpl_vars['c']->value['cHidden']){?><tr><td class='image'><i><img src="images/p/<?php echo $_smarty_tpl->tpl_vars['c']->value['cID'];?>
.png" height='25'></i>&nbsp;&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['c']->value['cName'];?>
</span></td><td align='center'  class='balance'><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZREF'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
 <small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></td><td align='center'  class='balance'><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZIN'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
 <small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></td><td align='center'  class='balance'><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZINDEPO'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
 <small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></td><td align='center'  class='balance'><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZCALCIN'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
 <small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></td><td align='center'  class='balance'><?php echo _z($_smarty_tpl->tpl_vars['c']->value['ZOUT'],$_smarty_tpl->tpl_vars['c']->value['cID'],-1);?>
 <small><?php echo $_smarty_tpl->tpl_vars['c']->value['cCurr'];?>
</small></td></tr><?php }?><?php } ?></table><?php }?><?php }} ?>