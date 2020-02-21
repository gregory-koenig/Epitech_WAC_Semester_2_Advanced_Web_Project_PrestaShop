<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 16:39:17
         compiled from "/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/modules/welcome/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19489348235b06ce9551e797-65697145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9455988fb95e637680ec5eb31762f6ef1ef11c6' => 
    array (
      0 => '/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/modules/welcome/views/navbar.tpl',
      1 => 1527171424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19489348235b06ce9551e797-65697145',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b06ce95522383_55483051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b06ce95522383_55483051')) {function content_5b06ce95522383_55483051($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
