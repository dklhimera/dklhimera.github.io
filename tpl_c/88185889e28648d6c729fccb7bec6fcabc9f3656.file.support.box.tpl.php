<?php /* Smarty version Smarty-3.1.8, created on 2016-05-16 20:52:34
         compiled from "tpl/ru/message/support.box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11858646495739def232d221-89009405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88185889e28648d6c729fccb7bec6fcabc9f3656' => 
    array (
      0 => 'tpl/ru/message/support.box.tpl',
      1 => 1463420584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11858646495739def232d221-89009405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5739def2381df5_96937701',
  'variables' => 
  array (
    'tpl_errors' => 0,
    'user' => 0,
    'cats' => 0,
    'cat' => 0,
    '_cfg' => 0,
    '__Capt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5739def2381df5_96937701')) {function content_5739def2381df5_96937701($_smarty_tpl) {?><div class="block_form"><?php if (count($_smarty_tpl->tpl_vars['tpl_errors']->value)){?><ul class="error_message"><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['message/support_frm'][0]=='user_not_found'){?><li>Input e-mail</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['message/support_frm'][0]=='mail_wrong'){?><li>Wrong e-mail</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['message/support_frm'][0]=='topic_empty'){?><li>Input topic</li><?php }?><?php if ($_smarty_tpl->tpl_vars['tpl_errors']->value['message/support_frm'][0]=='text_empty'){?><li>Input text</li><?php }?></ul><?php }?><form method="post" class='form-styled support-form' action="<?php echo tplModuleToLink(array('module'=>'message/support'),$_smarty_tpl);?>
" name="message/support_frm"><div class="field"><i></i><label for="">Ваш E-Mail</label><input name="Mail" id="message/support_frm_Mail" value="<?php if (($_REQUEST['Mail'])){?><?php echo $_REQUEST['Mail'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['uMail'];?>
<?php }?>" <?php if (_uid()){?>readonly=''<?php }?> type="text"></div><?php if ($_smarty_tpl->tpl_vars['cats']->value){?><div class="block_form_el cfix"><label for="message/support_frm_Category">Category</label><div class="block_form_el_right"><select name="Category" id="message/support_frm_Category"><?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
" <?php if ($_REQUEST['Category']==$_smarty_tpl->tpl_vars['cat']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
</option><?php } ?></select></div></div><?php }?><div class="field"><i></i><label for="">Тема сообщения</label><input name="Topic" id="message/support_frm_Topic" value="<?php echo $_REQUEST['Topic'];?>
" type="text"></div><div class="field filed-textarea"><i></i><label>Текст сообщения...</label><textarea name="Message" id="message/support_frm_Message" wrap="off" ><?php echo $_REQUEST['Message'];?>
</textarea></div><?php echo tplFormSecurity(array('form'=>'message/support_frm','captcha'=>$_smarty_tpl->tpl_vars['_cfg']->value['Msg_Captcha']),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['__Capt']->value){?><?php echo $_smarty_tpl->getSubTemplate ('captcha.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form'=>'message/support_frm'), 0);?>
<?php }?><div class="clearfix"></div><br/><center><div  ><input name="message/support_frm_btn" type="submit" value="Отправить" ></div></center></form></div><?php }} ?>