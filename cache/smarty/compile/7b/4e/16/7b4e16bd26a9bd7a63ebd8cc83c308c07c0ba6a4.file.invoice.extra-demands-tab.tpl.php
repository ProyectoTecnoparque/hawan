<?php /* Smarty version Smarty-3.1.19, created on 2021-08-02 15:13:11
         compiled from "C:\xampp\htdocs\hotelcom\pdf\\invoice.extra-demands-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767379151610851d72734b2-58088388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b4e16bd26a9bd7a63ebd8cc83c308c07c0ba6a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\pdf\\\\invoice.extra-demands-tab.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767379151610851d72734b2-58088388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart_htl_data' => 0,
    'data_v' => 0,
    'rm_v' => 0,
    'roomDemand' => 0,
    'roomCount' => 0,
    'demand' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_610851d72a0634_76703468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610851d72a0634_76703468')) {function content_610851d72a0634_76703468($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\hotelcom\\tools\\smarty\\plugins\\modifier.date_format.php';
?>

<br><br>
<table id="demands-table" class="bordered-table" width="100%" cellpadding="4" cellspacing="0">
	<thead>
		<tr>
			<th colspan="4" class="header"><?php echo smartyTranslate(array('s'=>'Extra Demands Details','pdf'=>'true'),$_smarty_tpl);?>
</th>
		</tr>
		<tr>
			<th class="header-left small"><?php echo smartyTranslate(array('s'=>'Room Type','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="header-left small"><?php echo smartyTranslate(array('s'=>'Extra demand name','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="header-left small"><?php echo smartyTranslate(array('s'=>'Tax rate(s)','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="header-left small"><?php echo smartyTranslate(array('s'=>'Total','pdf'=>'true'),$_smarty_tpl);?>
 <br /> <?php echo smartyTranslate(array('s'=>'(Tax excl.)','pdf'=>'true'),$_smarty_tpl);?>
</th>
		</tr>
	</thead>
	<tbody>
		<?php if (isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['data_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_v']->_loop = false;
 $_smarty_tpl->tpl_vars['data_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_htl_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_v']->key => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->_loop = true;
 $_smarty_tpl->tpl_vars['data_k']->value = $_smarty_tpl->tpl_vars['data_v']->key;
?>
				<?php  $_smarty_tpl->tpl_vars['rm_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rm_v']->_loop = false;
 $_smarty_tpl->tpl_vars['rm_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data_v']->value['date_diff']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rm_v']->key => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->_loop = true;
 $_smarty_tpl->tpl_vars['rm_k']->value = $_smarty_tpl->tpl_vars['rm_v']->key;
?>
					<?php if (isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])&&$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) {?>
						<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable(1, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['roomDemand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roomDemand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->key => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->_loop = true;
?>
							<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['demand']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
 $_smarty_tpl->tpl_vars['demand']->index++;
 $_smarty_tpl->tpl_vars['demand']->first = $_smarty_tpl->tpl_vars['demand']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['demandRow']['first'] = $_smarty_tpl->tpl_vars['demand']->first;
?>
								<tr class="header small">
									<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['demandRow']['first']) {?>
										<td rowspan="<?php echo count($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands']);?>
">
											<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>
<br>
											<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d-%m-%Y");?>
 <?php echo smartyTranslate(array('s'=>'to','pdf'=>'true'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d-%m-%Y");?>
<br>
											<strong><?php echo smartyTranslate(array('s'=>'Room','pdf'=>'true'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['roomCount']->value;?>
</strong>
										</td>
									<?php }?>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['demand']->value['name'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['demand']->value['extra_demands_tax_label'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['demand']->value['total_price_tax_excl']),$_smarty_tpl);?>

									</td>
								</tr>
							<?php } ?>
							<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['roomCount']->value+1, null, 0);?>
						<?php } ?>
					<?php }?>
				<?php } ?>
			<?php } ?>
		<?php }?>
	</tbody>
</table>
<?php }} ?>
