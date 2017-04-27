<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:17:18
         compiled from "tpl/ru/account/_ga.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24649935458ee7d3e4f0f51-62381175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c82ee083366f726c77bd43e7a3e7080fc42d9bf' => 
    array (
      0 => 'tpl/ru/account/_ga.box.tpl',
      1 => 1491981498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24649935458ee7d3e4f0f51-62381175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'GACode' => 0,
    'GAQR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58ee7d3e4ff3d9_34141841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee7d3e4ff3d9_34141841')) {function content_58ee7d3e4ff3d9_34141841($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['user']->value['aGA']){?>
	<input name="GAKey" value="<?php echo $_smarty_tpl->tpl_vars['GACode']->value;?>
" type="hidden">
	Для активиции <a href="https://www.google.com/landing/2step/" target="_blank">Google Authenticator</a> используйте ключ:<br>
	<big><?php echo $_smarty_tpl->tpl_vars['GACode']->value;?>
</big><br>
	<img src="<?php echo $_smarty_tpl->tpl_vars['GAQR']->value;?>
">
	и
<?php }else{ ?>
	Для отключения Google Authenticator
<?php }?><?php }} ?>