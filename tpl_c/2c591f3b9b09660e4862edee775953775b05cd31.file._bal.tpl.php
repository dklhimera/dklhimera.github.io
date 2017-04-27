<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:07:12
         compiled from "tpl/ru/balance/_bal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26506874258ee7ae051d878-01258188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c591f3b9b09660e4862edee775953775b05cd31' => 
    array (
      0 => 'tpl/ru/balance/_bal.tpl',
      1 => 1491981502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26506874258ee7ae051d878-01258188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'curr1' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58ee7ae05331d0_64811433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee7ae05331d0_64811433')) {function content_58ee7ae05331d0_64811433($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['curr1']->value){?>На Вашем счете <?php echo _z($_smarty_tpl->tpl_vars['curr1']->value['wBal'],$_smarty_tpl->tpl_vars['curr1']->value['cID'],2);?>
<?php }elseif($_smarty_tpl->tpl_vars['user']->value['uBal']>0){?><?php echo $_smarty_tpl->getSubTemplate ('balance/bal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?>На Вашем счете <b>нет средств</b><?php }?><?php }} ?>