<?php /* Smarty version Smarty-3.1.8, created on 2017-04-16 01:07:35
         compiled from "tpl/en/depo/calc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112744176958f299a7ad0ff2-55879499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d6c6c40a5dc9a6076de5b3ec704d0ea4afff38' => 
    array (
      0 => 'tpl/en/depo/calc.tpl',
      1 => 1491981480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112744176958f299a7ad0ff2-55879499',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58f299a7b0b378_46452410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f299a7b0b378_46452410')) {function content_58f299a7b0b378_46452410($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Calculator'), 0);?>
<h1>Investor calculator</h1><?php echo $_smarty_tpl->getSubTemplate ('depo/calc.box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br><?php echo $_smarty_tpl->getSubTemplate ('depo/calc.result.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>