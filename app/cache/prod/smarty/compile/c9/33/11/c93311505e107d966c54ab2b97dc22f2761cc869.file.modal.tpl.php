<?php /* Smarty version Smarty-3.1.19, created on 2018-05-24 16:37:08
         compiled from "/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/admin726qzax1e/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6910447125b06ce140be6c2-32749053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93311505e107d966c54ab2b97dc22f2761cc869' => 
    array (
      0 => '/home/student/Développement/Webacademie/Semestre_2/Prestashop_Fortune/admin726qzax1e/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1527171424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6910447125b06ce140be6c2-32749053',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b06ce140c0496_46049845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b06ce140c0496_46049845')) {function content_5b06ce140c0496_46049845($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
