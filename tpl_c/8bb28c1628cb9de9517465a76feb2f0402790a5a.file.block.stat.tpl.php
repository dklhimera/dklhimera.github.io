<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 23:20:57
         compiled from "tpl/ru/depo/block.stat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1425587783573a06fb0e1913-03554967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bb28c1628cb9de9517465a76feb2f0402790a5a' => 
    array (
      0 => 'tpl/ru/depo/block.stat.tpl',
      1 => 1492028455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1425587783573a06fb0e1913-03554967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a06fb1727c0_11071352',
  'variables' => 
  array (
    'settings' => 0,
    'stat' => 0,
    'list1' => 0,
    'r' => 0,
    'ccurr' => 0,
    'psys' => 0,
    'list2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a06fb1727c0_11071352')) {function content_573a06fb1727c0_11071352($_smarty_tpl) {?><div class="live_stats"><div class="container"><div class="row" data-step="20" data-intro="&lt;h4&gt;Статистика&lt;/h4&gt;&lt;p&gt;Статистика работы платформы для онлайн инвестирования Razzleton.&lt;/p&gt;" data-highlightclass="menu-highlight" data-position="top"><div class="col-xs-12"><h2>Статистика</h2></div><div class="col-xs-12 stats_area"><div class="stat_block"><p class="stat_number">21.06.1997</p><p class="stat_comment">Основана</p></div><div class="stat_block"><p class="stat_number">   <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_start_month_str_generated'];?>
 <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_start_day'];?>
, <?php echo $_smarty_tpl->tpl_vars['settings']->value['site_start_year'];?>
</p><p class="stat_comment" style="margin: 0 -2px;">Старт</p></div><div class="stat_block"><p class="stat_number"><?php echo $_smarty_tpl->tpl_vars['stat']->value['worked'];?>
</p><p class="stat_comment">Дней работы</p></div><div class="stat_block"><p class="stat_number"><?php echo $_smarty_tpl->tpl_vars['stat']->value['users'];?>
</p><p class="stat_comment">Всего счетов</p></div><div class="stat_block"><p class="stat_number"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['stat']->value['zin']);?>
 $</p><p class="stat_comment">Всего вкладов</p></div><div class="stat_block"><p class="stat_number"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['stat']->value['zout']);?>
 $</p><p class="stat_comment">Всего выплат</p></div><div class="stat_block"><p class="stat_number"><?php echo $_smarty_tpl->tpl_vars['stat']->value['lastuser']['uLogin'];?>
</p><p class="stat_comment">Последний пользователь</p></div><div class="stat_block"><p class="stat_number"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['stat']->value['lastinop']['oSum']);?>
 (<?php echo $_smarty_tpl->tpl_vars['stat']->value['lastinop']['uLogin'];?>
 </p><p class="stat_comment">Последний вклад</p></div></div></div></div></div><div class="paid_in-out_block"><div class="container"><div class="row"><div class="col-xs-6 investors" data-step="21" data-intro="&lt;h4&gt;Последние инвестиции&lt;/h4&gt;&lt;p&gt;Последние открытые вклады на платформе Razzleton в режиме онлайн.&lt;/p&gt;" data-position="right"><h3>Последние инвестиции</h3><table class="investors_table"><tbody><?php $_smarty_tpl->tpl_vars['psys'] = new Smarty_variable(array(2=>'AdvancedCash',3=>'PerfectMoney',4=>'Qiwi',5=>'WebMoney'), null, 0);?><?php $_smarty_tpl->tpl_vars['ccurr'] = new Smarty_variable(array(2=>'USD',3=>'USD',4=>'RUB',5=>'USD'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['list1']->value){?><div class="box"><div class="tabBox"><table class="FormatTable"><tr><th>Пользователь</th><th>Сумма</th><th>Плат. система</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if ($_smarty_tpl->tpl_vars['r']->value['oSum']>0){?><tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value['uLogin'];?>
</td><td>- <?php echo _z($_smarty_tpl->tpl_vars['r']->value['oSum'],$_smarty_tpl->tpl_vars['r']->value['ocID']);?>
 <?php echo $_smarty_tpl->tpl_vars['ccurr']->value[$_smarty_tpl->tpl_vars['r']->value['ocID']];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['psys']->value[$_smarty_tpl->tpl_vars['r']->value['ocID']];?>
</td></tr><?php }?><?php } ?></table><?php }?></tbody></table></div><div class="col-xs-6 paid_out" data-step="22" data-intro="&lt;h4&gt;Последние выплаты&lt;/h4&gt;&lt;p&gt;Последние выплаты инвесторам платформы Razzleton в режиме онлайн.&lt;/p&gt;" data-position="left"><h3>Последние выплаты</h3><table class="paid_out_table"><tbody><?php if ($_smarty_tpl->tpl_vars['list2']->value){?><div class="box"><h3>Последние выплаты</h3><div class="tabBox"><table class="FormatTable"><tr><th>Пользователь</th><th>Сумма</th><th>Плат. система</th></tr><?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['r']->key;
?><?php if ($_smarty_tpl->tpl_vars['r']->value['oSum']>0){?><tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value['uLogin'];?>
</td><td>+ <?php echo _z($_smarty_tpl->tpl_vars['r']->value['oSum'],$_smarty_tpl->tpl_vars['r']->value['ocID']);?>
 <?php echo $_smarty_tpl->tpl_vars['ccurr']->value[$_smarty_tpl->tpl_vars['r']->value['ocID']];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['psys']->value[$_smarty_tpl->tpl_vars['r']->value['ocID']];?>
</td></tr><?php }?><?php } ?></table></div></div><?php }?></tbody></table></div></div></div></div><?php }} ?>