<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:07:48
         compiled from "C:\xampp\htdocs\hotelcom\modules\wkfooteraboutblock\views\templates\hook\wkFooterAboutBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116761488461076f9488e4a5-39844702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '695f270043da3e4e10f14222a8441c9a78257d05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\wkfooteraboutblock\\views\\templates\\hook\\wkFooterAboutBlock.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116761488461076f9488e4a5-39844702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_SHORT_DESC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076f94891de6_65853091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076f94891de6_65853091')) {function content_61076f94891de6_65853091($_smarty_tpl) {?>

<div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo smartyTranslate(array('s'=>'About','mod'=>'wkfooteraboutblock'),$_smarty_tpl);?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-about-hotel">
			<p><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['WK_HTL_SHORT_DESC']->value,220,'',true), ENT_QUOTES, 'UTF-8', true);?>
</p>
		</div>
	</section>
</div><?php }} ?>
