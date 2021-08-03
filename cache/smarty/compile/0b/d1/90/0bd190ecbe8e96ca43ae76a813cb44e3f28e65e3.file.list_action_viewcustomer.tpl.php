<?php /* Smarty version Smarty-3.1.19, created on 2021-08-02 14:26:52
         compiled from "C:\xampp\htdocs\hotelcom\modules\blocknewsletter\views\templates\admin\list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1388048618610846fcf05b42-29170067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bd190ecbe8e96ca43ae76a813cb44e3f28e65e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\blocknewsletter\\views\\templates\\admin\\list_action_viewcustomer.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388048618610846fcf05b42-29170067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_610846fd046312_61030072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610846fd046312_61030072')) {function content_610846fd046312_61030072($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
