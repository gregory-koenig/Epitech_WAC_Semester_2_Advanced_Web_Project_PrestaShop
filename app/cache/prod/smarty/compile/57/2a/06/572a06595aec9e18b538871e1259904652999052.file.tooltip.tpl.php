<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 16:39:17
         compiled from "/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:840475045b06ce9552ae82-80492246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '572a06595aec9e18b538871e1259904652999052' => 
    array (
      0 => '/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/modules/welcome/views/templates/tooltip.tpl',
      1 => 1527171424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '840475045b06ce9552ae82-80492246',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b06ce9552c894_26981222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b06ce9552c894_26981222')) {function content_5b06ce9552c894_26981222($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
