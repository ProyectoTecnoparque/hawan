<?php /* Smarty version Smarty-3.1.19, created on 2021-08-02 15:13:11
         compiled from "C:\xampp\htdocs\hotelcom\pdf\\invoice.total-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:820906226610851d737cd32-49906456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e768a96c42200132f01bca9ef85a3f5535d03d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\pdf\\\\invoice.total-tab.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '820906226610851d737cd32-49906456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_610851d73aee11_93372956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610851d73aee11_93372956')) {function content_610851d73aee11_93372956($_smarty_tpl) {?>
<table id="total-tab" width="100%">

	<tr>
		<td class="grey" width="70%">
			<?php echo smartyTranslate(array('s'=>'Total Rooms Cost (tax excl.)','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white" width="30%">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['products_before_discounts_tax_excl']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php if (isset($_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te'])&&$_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te']) {?>
		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Extra Demands Cost (tax excl.)','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te']),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['footer']->value['product_taxes'])&&$_smarty_tpl->tpl_vars['footer']->value['product_taxes']) {?>
		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Rooms Tax','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['footer']->value['product_taxes'])),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te'])&&$_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te']) {?>
		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Extra Demands Tax','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_ti']-$_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te'])),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>
	<tr class="bold">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total (Tax excl.)','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_paid_tax_excl']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['footer']->value['total_taxes']>0) {?>
	<tr class="bold">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total Tax','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_taxes']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['footer']->value['product_discounts_tax_excl']>0) {?>
		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Total Discounts','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['product_discounts_tax_excl']),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>

	<tr class="bold big">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Final Booking Amount','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_paid_tax_incl']),$_smarty_tpl);?>

		</td>
	</tr>

	<?php if ($_smarty_tpl->tpl_vars['order']->value->total_paid-$_smarty_tpl->tpl_vars['order']->value->total_paid_real>0) {?>
		<tr class="bold big">
			<td class="grey">
				<?php echo smartyTranslate(array('s'=>'Due Amount','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid-$_smarty_tpl->tpl_vars['order']->value->total_paid_real)),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>
</table>
<?php }} ?>
