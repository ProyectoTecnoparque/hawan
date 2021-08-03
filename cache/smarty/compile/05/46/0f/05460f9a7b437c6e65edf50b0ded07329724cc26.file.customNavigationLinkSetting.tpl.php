<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:08:13
         compiled from "C:\xampp\htdocs\hotelcom\modules\blocknavigationmenu\views\templates\hook\customNavigationLinkSetting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160958393661076fad08e7d4-53186481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05460f9a7b437c6e65edf50b0ded07329724cc26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\blocknavigationmenu\\views\\templates\\hook\\customNavigationLinkSetting.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160958393661076fad08e7d4-53186481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'custom_navigation_link_setting_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076fad092a17_70490272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076fad092a17_70490272')) {function content_61076fad092a17_70490272($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['custom_navigation_link_setting_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-chain"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Custom Navigation Link','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Custom Links Setting','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Create custom links which will display at footer navigation block and navigation menu.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>
