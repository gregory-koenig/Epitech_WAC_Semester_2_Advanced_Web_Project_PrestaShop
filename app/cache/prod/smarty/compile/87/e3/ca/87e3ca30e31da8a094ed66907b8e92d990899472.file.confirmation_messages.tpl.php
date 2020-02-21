<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 16:41:43
         compiled from "/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/admin726qzax1e/themes/new-theme/template/components/layout/confirmation_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1256525355b06cf27b92498-23580587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87e3ca30e31da8a094ed66907b8e92d990899472' => 
    array (
      0 => '/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/admin726qzax1e/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1527171424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1256525355b06cf27b92498-23580587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmations' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b06cf27b96ee9_73841175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b06cf27b96ee9_73841175')) {function content_5b06cf27b96ee9_73841175($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>
