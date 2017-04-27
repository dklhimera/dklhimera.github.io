<?php /* Smarty version Smarty-3.1.8, created on 2016-05-16 21:01:59
         compiled from "tpl/ru/balance/index.row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219842917573a0b1724aad3-65420501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cea6ed9c8ca08c8652ffddbd9b6450beefe4921' => 
    array (
      0 => 'tpl/ru/balance/index.row.tpl',
      1 => 1463420545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219842917573a0b1724aad3-65420501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'l' => 0,
    'op_names' => 0,
    'op_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0b172d32c3_29332349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0b172d32c3_29332349')) {function content_573a0b172d32c3_29332349($_smarty_tpl) {?><td  class='image'><i><img src="images/p/<?php echo $_smarty_tpl->tpl_vars['l']->value['ocID'];?>
.png" height='30'></i>&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['l']->value['cName'];?>
</span></td><td  class='links'><a href="<?php echo tplModuleToLink(array('module'=>'balance/oper'),$_smarty_tpl);?>
?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['oID'];?>
" ><?php if ($_smarty_tpl->tpl_vars['l']->value['oNTS']){?><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['l']->value['oOper']];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['l']->value['oOper']];?>
<?php }?><small><?php echo $_smarty_tpl->tpl_vars['op_statuses']->value[$_smarty_tpl->tpl_vars['l']->value['oState']];?>
</small></a></td><td class='td-lines td-data'><small style='line-height:10px;'><?php echo $_smarty_tpl->tpl_vars['l']->value['oCTS'];?>
</small><small style='line-height:5px; display:block;'><?php echo $_smarty_tpl->tpl_vars['l']->value['oTS'];?>
</small></td><td align='center' class='balance' style='line-height:30px;'><?php if (in_array($_smarty_tpl->tpl_vars['l']->value['oOper'],array('BONUS','CASHIN','EXIN','TRIN','SELL','REF','TAKE','CALCIN'))){?><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oSum'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
<small><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='USD'){?>$<?php }?><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='RUB'){?>P<?php }?><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='BTC'){?>Ƀ<?php }?></small><?php if ($_smarty_tpl->tpl_vars['l']->value['oComis']!=0){?><br><sup><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oComis'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
</sup><?php }?><?php }?></td><td align='center' class='balance' style='line-height:30px;'><?php if (in_array($_smarty_tpl->tpl_vars['l']->value['oOper'],array('PENALTY','CASHOUT','EX','TR','BUY','GIVE','CALCOUT'))){?><span style="color: red;"><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oSum'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
<small><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='USD'){?>$<?php }?><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='RUB'){?>P<?php }?><?php if ($_smarty_tpl->tpl_vars['l']->value['cCurr']=='BTC'){?>Ƀ<?php }?></small></span><?php if ($_smarty_tpl->tpl_vars['l']->value['oComis']!=0){?><br><sup><?php echo _z($_smarty_tpl->tpl_vars['l']->value['oComis'],$_smarty_tpl->tpl_vars['l']->value['ocID'],-1);?>
</sup><?php }?><?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['l']->value['oBatch'];?>
</td><?php }} ?>