<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 16:39:17
         compiled from "/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/admin726qzax1e/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15889876075b06ce95412b71-64479765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2195a383e4a4b66dd3409ee621e3b0082af95c5d' => 
    array (
      0 => '/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/admin726qzax1e/themes/default/template/content.tpl',
      1 => 1527171424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15889876075b06ce95412b71-64479765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b06ce95416e20_46627198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b06ce95416e20_46627198')) {function content_5b06ce95416e20_46627198($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
