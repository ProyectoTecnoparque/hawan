<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:08:13
         compiled from "C:\xampp\htdocs\hotelcom\modules\wkfooterpaymentblock\views\templates\hook\footerPaymentSettingLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38222995861076fad056053-56144397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3079376827fb2214c0aaeb5491281a72460b3d64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\wkfooterpaymentblock\\views\\templates\\hook\\footerPaymentSettingLink.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38222995861076fad056053-56144397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerPaymentBlockLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076fad05aa52_36262436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076fad05aa52_36262436')) {function content_61076fad05aa52_36262436($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['footerPaymentBlockLink']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-money"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Footer Payment Block','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Footer Payment Block Setting','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Using this setting, you can configure payment block view in the footer of page in front end.','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>
