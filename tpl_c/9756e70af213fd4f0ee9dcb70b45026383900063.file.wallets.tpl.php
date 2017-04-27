<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:17:33
         compiled from "tpl/ru/balance/wallets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157406183558ee7d4d4ba0c1-95866064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9756e70af213fd4f0ee9dcb70b45026383900063' => 
    array (
      0 => 'tpl/ru/balance/wallets.tpl',
      1 => 1492024383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157406183558ee7d4d4ba0c1-95866064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_cfg' => 0,
    'defcurr' => 0,
    'k' => 0,
    'user' => 0,
    'v' => 0,
    'wfields' => 0,
    'f' => 0,
    'wdata' => 0,
    'vv' => 0,
    'showbutton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58ee7d4d536f45_50318332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee7d4d536f45_50318332')) {function content_58ee7d4d536f45_50318332($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/c/ca56304/public_html/smarty3/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Платежные реквизиты'), 0);?>
<section class="main4 main-wallets"><div class="container-fluid"><div class="row"><div class="col-md-12"><h1 style='margin-left:15px;'><small>Платежные</small><span>реквизиты</span></h1><div class="clearfix"></div><br/><br/><form method="post" class='form-oper' action="balance/wallets" name="balance/wallets_frm"><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']){?><div class="block_form_el none cfix"><label>Default payment system</label><div class="block_form_el_right"><select name="DefCurr" id="balance/wallets_frm_DefCurr" class="select"><option value="0" selected="">- select -</option><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['defcurr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value['aDefCurr']==$_smarty_tpl->tpl_vars['k']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option><?php } ?></select></div></div><?php }?><div class="block-wallets"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (is_numeric($_smarty_tpl->tpl_vars['f']->value)){?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['vv'] = new Smarty_variable(_arr_val($_smarty_tpl->tpl_vars['wdata']->value,$_smarty_tpl->tpl_vars['f']->value), null, 0);?><div class='<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['f']->value,'[acc]','');?>
'><i></i><label>Номер счета</label><input name="<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" id="balance/wallets_frm_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
" type="text"  placeholder='<?php echo $_smarty_tpl->tpl_vars['v']->value['comment'];?>
' ></div><?php }?><?php } ?></div><div class="clearfix"></div><?php if ($_smarty_tpl->tpl_vars['showbutton']->value&&($_smarty_tpl->tpl_vars['_cfg']->value['Sec_MinPIN']>0)){?><div class="block_form_el cfix"><label for="">Input PIN-code (to confirm changes)</label><div class="block_form_el_right"><input name="PIN" id="balance/wallets_frm_PIN" value="<?php echo $_REQUEST['PIN'];?>
" type="text"></div></div><?php }?><?php echo tplFormSecurity(array('form'=>'balance/wallets_frm'),$_smarty_tpl);?>
<br/><center><input name="balance/wallets_frm_btn" value="Сохранить" type="submit" ></center><div class="clearfix"></div><br/></form></div></div></div></section><?php echo $_smarty_tpl->getSubTemplate ('footer-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>