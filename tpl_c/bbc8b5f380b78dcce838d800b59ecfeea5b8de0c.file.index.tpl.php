<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:06:44
         compiled from "tpl/en/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:806490745738c0e8844a46-13449563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc8b5f380b78dcce838d800b59ecfeea5b8de0c' => 
    array (
      0 => 'tpl/en/admin/index.tpl',
      1 => 1491981472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '806490745738c0e8844a46-13449563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5738c0e8875fb6_74656905',
  'variables' => 
  array (
    'modules' => 0,
    'mc' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5738c0e8875fb6_74656905')) {function content_5738c0e8875fb6_74656905($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>''), 0);?>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['mc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['mc']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php echo $_smarty_tpl->getSubTemplate ('admin/module.block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('modules_cat'=>$_smarty_tpl->tpl_vars['mc']->value,'modules'=>$_smarty_tpl->tpl_vars['r']->value), 0);?>
<?php } ?><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>