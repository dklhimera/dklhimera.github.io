<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:17:35
         compiled from "tpl/ru/refsys/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1747451665573a091e8c5542-37740748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5608d2a577ebc05d771d2bba4941fe9194064f9f' => 
    array (
      0 => 'tpl/ru/refsys/index.tpl',
      1 => 1492024410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1747451665573a091e8c5542-37740748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a091e929cf2_10637781',
  'variables' => 
  array (
    'refurl' => 0,
    'reflogin' => 0,
    'refs' => 0,
    'i' => 0,
    'r' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a091e929cf2_10637781')) {function content_573a091e929cf2_10637781($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Партнерская программа'), 0);?>
<section class="main4"><div class="container-fluid"><div class="row"><div class="col-md-12"><h1 style='margin-left:15px;'><small>Партнерская</small><span>программа</span></h1><div class="clearfix"></div><br/><br/><ul class="block-stat block-stat-1"><li><i class="demo-icon icon-group"></i><small>Pеферальная ссылка</small><span><input type="text"  onclick='this.select();' value='<?php echo $_smarty_tpl->tpl_vars['refurl']->value;?>
'></span></li><li class="bg"><i class="demo-icon icon-chart"></i><small>Вы приглашены</small><span><input  value="<?php if ($_smarty_tpl->tpl_vars['reflogin']->value){?><?php echo $_smarty_tpl->tpl_vars['reflogin']->value;?>
<?php }else{ ?>N\A<?php }?>"  readonly="" type="text" ></span></li></ul><div class="clearfix"></div><br/><br/><br/><table class="table table-account"><tr><th>Пользователь</th><th>Дата регистрации</th><th>Вклады</th><th>Рефские</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['refs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if (count($_smarty_tpl->tpl_vars['refs']->value)>1){?><tr><th  class='level' colspan="4" align="center">Уровень <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
<?php if ($_smarty_tpl->tpl_vars['r']->value['perc']){?>: <?php echo $_smarty_tpl->tpl_vars['r']->value['perc'];?>
%<?php }?></th></tr><?php }?><?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['r']->value['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['u']->key;
?><tr><td align="center" class='td-label'><?php echo $_smarty_tpl->tpl_vars['u']->value['uLogin'];?>
</td><td align="center" class='td-date'><?php echo $_smarty_tpl->tpl_vars['u']->value['aCTS'];?>
</td><td  align="center" class='balance'><?php echo _z($_smarty_tpl->tpl_vars['u']->value['ZDepo'],1);?>
 <small><?php echo $_smarty_tpl->tpl_vars['u']->value['cCurr'];?>
</small></td><td  align="center" class='balance'><?php echo _z($_smarty_tpl->tpl_vars['u']->value['ZRef'],1);?>
<small><?php echo $_smarty_tpl->tpl_vars['u']->value['cCurr'];?>
</small></td></tr><?php } ?><?php } ?></table></div><?php echo $_smarty_tpl->getSubTemplate ('footer-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>