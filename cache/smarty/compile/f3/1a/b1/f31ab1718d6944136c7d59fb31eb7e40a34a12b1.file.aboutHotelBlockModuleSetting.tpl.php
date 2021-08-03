<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:08:12
         compiled from "C:\xampp\htdocs\hotelcom\modules\wkabouthotelblock\views\templates\hook\aboutHotelBlockModuleSetting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72479694461076faceb2311-77943666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f31ab1718d6944136c7d59fb31eb7e40a34a12b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\wkabouthotelblock\\views\\templates\\hook\\aboutHotelBlockModuleSetting.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72479694461076faceb2311-77943666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076facebf7f1_00203573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076facebf7f1_00203573')) {function content_61076facebf7f1_00203573($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAboutHotelBlockSetting'), ENT_QUOTES, 'UTF-8', true);?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-file-text"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Hotel Interior Block','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'About Hotel Setting','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure Hotel Interior block. You can display hotel interior images using this block. This block will be displayed in home page','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>
