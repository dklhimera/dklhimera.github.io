<?php /* Smarty version Smarty-3.1.8, created on 2017-04-12 22:40:45
         compiled from "tpl/ru/balance/oper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1939169195573a0b1cc47090-90539836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb68b7dc7e78d15802a50a0b5b1703f2516c58f2' => 
    array (
      0 => 'tpl/ru/balance/oper.tpl',
      1 => 1492024382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1939169195573a0b1cc47090-90539836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_573a0b1cddea59_88660864',
  'variables' => 
  array (
    'el' => 0,
    'op_names' => 0,
    'dfields' => 0,
    'opc' => 0,
    'b' => 0,
    'oper' => 0,
    '_cfg' => 0,
    'clist' => 0,
    'user' => 0,
    'plans' => 0,
    'pcmax' => 0,
    's' => 0,
    'icurr' => 0,
    'clist2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573a0b1cddea59_88660864')) {function content_573a0b1cddea59_88660864($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Операция'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('balance/_statuses.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['el']->value){?><section class="main4"><div class="container-fluid"><div class="row"><div class="col-md-8"><h1 style='margin-left:15px;'><small>Операция</small><span><?php echo $_smarty_tpl->tpl_vars['op_names']->value[$_smarty_tpl->tpl_vars['el']->value['oOper']];?>
</span></h1><div class="clearfix"></div><br/><br/><div class="box-oper"><?php if (isset($_GET['check'])){?><p class="info"><i class="fa fa-info-circle"></i>&nbsp;Ожидание подтверждения оплаты...</p><?php }else{ ?><?php if (($_smarty_tpl->tpl_vars['el']->value['oState']<=1)){?><?php $_smarty_tpl->tpl_vars['opc'] = new Smarty_variable((($_smarty_tpl->tpl_vars['el']->value['oOper']!='CASHIN')||$_smarty_tpl->tpl_vars['dfields']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['opc']->value){?><p class="info"><i class="fa fa-info-circle"></i>&nbsp;Операция НЕ подтверждена Вами!</p><?php }?><?php }elseif($_smarty_tpl->tpl_vars['el']->value['oState']==2){?><p class="info"><i class="fa fa-info-circle"></i>&nbsp;Операция будет обработана Администратором в ближайшее время</p><?php }?><div class="clearfix"></div><?php $_smarty_tpl->tpl_vars['b'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']<=2){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['cancel'] = 'Отмена';?><?php }?><?php if ($_smarty_tpl->tpl_vars['el']->value['oState']>=5){?><?php $_smarty_tpl->createLocalArrayVariable('b', null, 0);
$_smarty_tpl->tpl_vars['b']->value['del'] = 'Удалить';?><?php }?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('bt'=>valueIf($_smarty_tpl->tpl_vars['opc']->value,'Подтвердить',' '),'b'=>$_smarty_tpl->tpl_vars['b']->value,'edit_form_name'=>'balance/oper_frm','errors'=>array('oper_not_found'=>'неверный статус операции','oper_disabled'=>'операция отключена','low_bal1'=>'недостаточно средств','data_date_wrong'=>'неверная дата операции','data_sum_wrong'=>'неверная сумма','data_batch_wrong'=>'не задан batch-номер операции','batch_exists'=>'операция с таким batch-номером уже существует')), 0);?>
<?php }?></div></div></div></div></section><?php }else{ ?><?php $_smarty_tpl->tpl_vars['oper'] = new Smarty_variable($_GET['add'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['oper']->value=='CASHIN'){?><section class="main4"><div class="container-fluid"><div class="row"><div class="col-md-8"><h1 style='margin-left:15px;'><small>Пополнение</small><span>баланса</span></h1><div class="clearfix"></div><br/><br/><?php if ($_smarty_tpl->tpl_vars['_cfg']->value['Depo_AutoDepo']){?><?php echo $_smarty_tpl->getSubTemplate ('depo/_depo.interval.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('edit.other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','form_class'=>'form-oper closeerr','table_class'=>'table-oper','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','С платежной системы:',array('psys_empty'=>'плат.система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']),'Sum'=>array('T','Сумма вклада:',array('sum_wrong'=>'недостаточное количество'),'hint'=>'Сумма','comment'=>' <i><span id="ccurr" class="in-account-span"><small>USD</small></span></i>','class'=>'amount-in-cabiner'),'Comis'=>array('','Comission','comment'=>' <i><span id="csum" class="none"></span></i>'),'Sum2'=>array('','Your balance will be credited to the amount','comment'=>' <i><span id="sum2" class="none"></span></i>'),'Plan'=>array('S','Plan',array('plan_wrong'=>'wrong plan'),array()+(array)$_smarty_tpl->tpl_vars['plans']->value,'skip'=>(count($_smarty_tpl->tpl_vars['plans']->value)<=1)),'Compnd'=>array('%','Compaund',array('compnd_wrong'=>"wrong value [".($_smarty_tpl->tpl_vars['cmin']->value)."..".($_smarty_tpl->tpl_vars['cmax']->value)."]",'compnd_wrong1'=>"wrong value for plan '".($_smarty_tpl->tpl_vars['cplan']->value)."'"),'hint'=>'Compaund percent (%)','skip'=>!$_smarty_tpl->tpl_vars['pcmax']->value)),'btn_text'=>'Инвестировать','errors'=>array('oper_disabled'=>'operation disabled')), 0);?>
</div></div></div></section><?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='CASHOUT'){?><section class="main4"><div class="container-fluid"><div class="row"><div class="col-md-8"><h1 style='margin-left:15px;'><small>Вывод</small><span>средств</span></h1><div class="clearfix"></div><br/><br/><?php $_smarty_tpl->tpl_vars['s'] = new Smarty_variable(valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr'],'Сумма','Сумма вывода:'), null, 0);?><?php echo $_smarty_tpl->getSubTemplate ('edit.other.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','form_class'=>'form-oper closeerr','table_class'=>'table-oper','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','На платежную систему:',array('psys_empty'=>'плат.система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value,'default'=>$_smarty_tpl->tpl_vars['user']->value['aDefCurr']),'Sum'=>array('T',$_smarty_tpl->tpl_vars['s']->value,array('sum_wrong'=>'ошибка ввода','limit_exceeded'=>'limit exceeded'),'hint'=>'Сумма','class'=>'amount-in-cabiner','comment'=>valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr']," <b>".($_smarty_tpl->tpl_vars['icurr']->value)."</b>",' <i><span id="ccurr" class="in-account-span"><small>USD</small></span></i>')),'Comis'=>array('','Comission','comment'=>' <i><span id="csum"></span></i>'),'Sum2'=>array('','Your account will be injected amount','comment'=>' <i><span id="sum2"></span></i>'),'PIN'=>array('*','Input PIN-code!!',array('pin_wrong'=>'wrong code'),'skip'=>!$_smarty_tpl->tpl_vars['_cfg']->value['Bal_NeedPIN'],'size'=>8)),'errors'=>array('low_bal1'=>'insufficient funds','oper_disabled'=>'operation disabled')), 0);?>
</div></div></div></section><?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='EX'){?><h1><span>Exchange</span></h1><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('table_class'=>'table exchange table-settings','form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>array('S','From payment system',array('psys_empty'=>'pay.system wrong'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- select -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value),'Sum'=>array('$','Amount',array('sum_wrong'=>'wrong amount'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('X','Comission','comment'=>' <i><span id="csum"></span></i>'),'PSys2'=>array('S','To payment system',array('psys2_empty'=>'pay.system wrong','psys2_equal_psys'=>'pay.system must be different','ex_rate_not_set'=>'exchange rate is not specified'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist2']->value)>1,array(0=>'- select -'),array())+(array)$_smarty_tpl->tpl_vars['clist2']->value),'Sum2'=>array('X','Amount to receive','comment'=>' <i><span id="sum2"></span></i>')),'errors'=>array('low_bal1'=>'insufficient funds','oper_disabled'=>'operation disabled')), 0);?>
<?php }elseif($_smarty_tpl->tpl_vars['oper']->value=='TR'){?><h2>Перевод средств</h2><?php echo $_smarty_tpl->getSubTemplate ('edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'add','fields'=>array('Oper'=>$_smarty_tpl->tpl_vars['oper']->value,'PSys'=>valueIf($_smarty_tpl->tpl_vars['_cfg']->value['Const_IntCurr'],1,array('S','Платежная система!!',array('psys_empty'=>'плат.система не указана'),valueIf(count((array)$_smarty_tpl->tpl_vars['clist']->value)>1,array(0=>'- выберите -'),array())+(array)$_smarty_tpl->tpl_vars['clist']->value)),'Sum'=>array('$','Сумма!!',array('sum_wrong'=>'неверная сумма'),'comment'=>' <i><span id="ccurr"></span></i>'),'Comis'=>array('X','Комиссия','comment'=>' <i><span id="csum"></span></i>'),'Sum2'=>array('X','Получателю будет переведена сумма','comment'=>' <i><span id="sum2"></span></i>'),'Login2'=>array('T','Получатель!!',array('user2_empty'=>'пользователь не найден','user2_equal_user'=>'пользователи должны различаться')),'Memo'=>array('W','Примечание','size'=>4)),'errors'=>array('low_bal1'=>'недостаточно средств','oper_disabled'=>'операция отключена')), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('balance/_oper.js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oper'=>$_smarty_tpl->tpl_vars['oper']->value,'use_sum2'=>true), 0);?>
<?php }?><?php echo $_smarty_tpl->getSubTemplate ('footer-account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>