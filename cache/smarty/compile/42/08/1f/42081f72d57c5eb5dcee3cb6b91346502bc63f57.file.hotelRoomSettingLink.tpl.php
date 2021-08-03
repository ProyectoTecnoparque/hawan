<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:08:12
         compiled from "C:\xampp\htdocs\hotelcom\modules\wkhotelroom\views\templates\hook\hotelRoomSettingLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108647335861076facf2d595-51435117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42081f72d57c5eb5dcee3cb6b91346502bc63f57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\wkhotelroom\\views\\templates\\hook\\hotelRoomSettingLink.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108647335861076facf2d595-51435117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htlRoomBlockConfigLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076facf31d07_80743258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076facf31d07_80743258')) {function content_61076facf31d07_80743258($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htlRoomBlockConfigLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-key"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Hotel Rooms Block','mod'=>'wkhotelroom'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Hotel Rooms Setting','mod'=>'wkhotelroom'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure Hotel Rooms settings. Using this module you can display your hotel rooms in home page.','mod'=>'wkhotelroom'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>
