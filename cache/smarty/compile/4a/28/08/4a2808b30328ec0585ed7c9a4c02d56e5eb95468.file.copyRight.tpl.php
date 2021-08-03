<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:07:49
         compiled from "C:\xampp\htdocs\hotelcom\modules\hotelreservationsystem\views\templates\hook\copyRight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142737288761076f952ba730-73850470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a2808b30328ec0585ed7c9a4c02d56e5eb95468' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\hotelreservationsystem\\views\\templates\\hook\\copyRight.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142737288761076f952ba730-73850470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_ESTABLISHMENT_YEAR' => 0,
    'base_dir' => 0,
    'WK_HTL_CHAIN_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076f952c3ed8_00293127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076f952c3ed8_00293127')) {function content_61076f952c3ed8_00293127($_smarty_tpl) {?><div class="copyRightWrapper">
	<p class="copyRight">
		&copy; <?php echo $_smarty_tpl->tpl_vars['WK_HTL_ESTABLISHMENT_YEAR']->value;?>
-<?php echo date('Y');?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value;?>
</a>.&nbsp;<?php echo smartyTranslate(array('s'=>' All rights reserved.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

	</p>
</div><?php }} ?>
