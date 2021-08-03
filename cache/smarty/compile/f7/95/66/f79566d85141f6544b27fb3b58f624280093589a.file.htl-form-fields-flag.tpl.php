<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:08:40
         compiled from "C:\xampp\htdocs\hotelcom\modules\hotelreservationsystem\views\templates\admin\_partials\htl-form-fields-flag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93957844861076fc8b06331-95886563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f79566d85141f6544b27fb3b58f624280093589a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\hotelreservationsystem\\views\\templates\\admin\\_partials\\htl-form-fields-flag.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93957844861076fc8b06331-95886563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'currentLang' => 0,
    'ps_img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076fc8b0a978_37586239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076fc8b0a978_37586239')) {function content_61076fc8b0a978_37586239($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
	<img class="all_lang_icon" data-lang-id="<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ps_img_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
.jpg">
<?php }?><?php }} ?>
