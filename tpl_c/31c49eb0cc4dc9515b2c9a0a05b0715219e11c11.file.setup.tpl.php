<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:49:27
         compiled from "tpl/ru/cron/admin/setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200050677258ee84c76a1642-38287806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c49eb0cc4dc9515b2c9a0a05b0715219e11c11' => 
    array (
      0 => 'tpl/ru/cron/admin/setup.tpl',
      1 => 1492024393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200050677258ee84c76a1642-38287806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_cfg' => 0,
    'cronpath' => 0,
    'cfg' => 0,
    'cronlist' => 0,
    'm' => 0,
    's' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58ee84c76f0721_83597487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ee84c76f0721_83597487')) {function content_58ee84c76f0721_83597487($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Settings'), 0);?>
<?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Cron_Enabled']){?><p class="info">The scheduler is called <b>at the opening of each page</b>,<br>but can not occur more than once per <b>1 minute</b></p><p class="info">In order for the scheduler was called <b>standalone</b>,<br>it is necessary to register the call in hosting panel (cron jobs)</b>:<br><br><i>wget -q -O /dev/null "<?php echo fullURL(moduleToLink('cron'));?>
" > /dev/null</i><br><br>or(depends on hosting settings) there is can be variants:<br><br><i>/usr/bin/fetch -q -O /dev/null "<?php echo fullURL(moduleToLink('cron'));?>
" > /dev/null</i><br><i>/usr/bin/php -q <?php echo $_smarty_tpl->tpl_vars['cronpath']->value;?>
 /dev/null</i><br><i>/usr/local/bin/php -q $HOME/cron.php /dev/null</i></p><a href="<?php echo fullURL(moduleToLink('cron'));?>
" target="_blank" class="button-green">Call manually</a><br><br><?php }?><?php $_smarty_tpl->tpl_vars['f'] = new Smarty_variable(array('Enabled'=>array('C','Enabled'),'ByHost'=>array('C','Called standalone')), null, 0);?><?php if ($_smarty_tpl->tpl_vars['cfg']->value['Enabled']&&$_smarty_tpl->tpl_vars['cronlist']->value){?><?php $_smarty_tpl->createLocalArrayVariable('f', null, 0);
$_smarty_tpl->tpl_vars['f']->value[] = 'Last calls';?><?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cronlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['s']->key;
?><?php $_smarty_tpl->createLocalArrayVariable('f', null, 0);
$_smarty_tpl->tpl_vars['f']->value[$_smarty_tpl->tpl_vars['m']->value] = array('X',"Module ".($_smarty_tpl->tpl_vars['m']->value),'comment'=>valueIf($_smarty_tpl->tpl_vars['s']->value<1440,($_smarty_tpl->tpl_vars['s']->value)." min. ago"));?><?php } ?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('values'=>$_smarty_tpl->tpl_vars['cfg']->value,'fields'=>$_smarty_tpl->tpl_vars['f']->value), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>