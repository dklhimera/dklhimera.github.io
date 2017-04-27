<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 21:46:46
         compiled from "tpl/en/_country.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26506090358ee76167327f8-23372063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30fd080fd32c3609f08921998892e371e305a439' => 
    array (
      0 => 'tpl/en/_country.tpl',
      1 => 1491981460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26506090358ee76167327f8-23372063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ip' => 0,
    'c' => 0,
    'countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58ee7616749072_59573743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee7616749072_59573743')) {function content_58ee7616749072_59573743($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("geoip2/countries.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable(giGetCountry($_smarty_tpl->tpl_vars['ip']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['c']->value=='AA'){?>Localhost<?php }else{ ?><img src="images/flags/<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
.png" width="15" height="10"> <?php echo $_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['c']->value];?>
<?php }?><?php }} ?>