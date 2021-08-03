<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:08:13
         compiled from "C:\xampp\htdocs\hotelcom\modules\wktestimonialblock\views\templates\hook\hotelTestimonialSettingLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113875470061076fad01f544-64738215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc0fae6849c7444df368a7987bb189ff8c74c5ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\wktestimonialblock\\views\\templates\\hook\\hotelTestimonialSettingLink.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113875470061076fad01f544-64738215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'testimonials_setting_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076fad029284_68636135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076fad029284_68636135')) {function content_61076fad029284_68636135($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['testimonials_setting_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-quote-left"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Hotel Testimonial','mod'=>'wktestimonialblock'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Hotel Testimonials Setting','mod'=>'wktestimonialblock'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure Hotel Testimonials settings using this link.','mod'=>'wktestimonialblock'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>
