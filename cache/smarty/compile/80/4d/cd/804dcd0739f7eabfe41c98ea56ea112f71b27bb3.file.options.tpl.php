<?php /* Smarty version Smarty-3.1.19, created on 2021-08-03 15:01:14
         compiled from "C:\xampp\htdocs\hotelcom\modules\hotelreservationsystem\views\templates\admin\hotel_feature_prices_settings\helpers\options\options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8159165566109a08ac6d657-59094543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '804dcd0739f7eabfe41c98ea56ea112f71b27bb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\hotelreservationsystem\\views\\templates\\admin\\hotel_feature_prices_settings\\helpers\\options\\options.tpl',
      1 => 1617190112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8159165566109a08ac6d657-59094543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table' => 0,
    'current' => 0,
    'submit_action' => 0,
    'token' => 0,
    'style' => 0,
    'featurePricePriority' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6109a08acb9235_37743038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6109a08acb9235_37743038')) {function content_6109a08acb9235_37743038($_smarty_tpl) {?><div class="panel">
	<h3><?php echo smartyTranslate(array('s'=>'Priority management','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</h3>
	<div class="alert alert-info">
		<?php echo smartyTranslate(array('s'=>'Sometimes one customer can fit into multiple Feature price rules. In this case priorities allow you to define which rule applies to the Room Type.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

	</div>
	<form id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_form" class="defaultForm form-horizontal" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['submit_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>&token=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" enctype="multipart/form-data" <?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?>style="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['style']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
		<div class="form-group">
			<label class="control-label col-lg-3" for="featurePricePriority"><?php echo smartyTranslate(array('s'=>'Feature Price Calculation Priorities','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
 :: </label>
			<div class="input-group col-lg-9">
				<select name="featurePricePriority[]" class="featurePricePriority">
					<option class="specific_date" value="specific_date" <?php if (isset($_smarty_tpl->tpl_vars['featurePricePriority']->value)&&$_smarty_tpl->tpl_vars['featurePricePriority']->value[0]=='specific_date') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>"Specific Date",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
					<option class="special_day" value="special_day" <?php if (isset($_smarty_tpl->tpl_vars['featurePricePriority']->value)&&$_smarty_tpl->tpl_vars['featurePricePriority']->value[0]=='special_day') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>"Special Days",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
					<option class="date_range" value="date_range" <?php if (isset($_smarty_tpl->tpl_vars['featurePricePriority']->value)&&$_smarty_tpl->tpl_vars['featurePricePriority']->value[0]=='date_range') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>"Date Ranges",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
				</select>
				<span class="input-group-addon"><i class="icon-chevron-right"></i></span>
				<select name="featurePricePriority[]" class="featurePricePriority">
					<option class="specific_date" value="specific_date" <?php if (isset($_smarty_tpl->tpl_vars['featurePricePriority']->value)&&$_smarty_tpl->tpl_vars['featurePricePriority']->value[1]=='specific_date') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>"Specific Date",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
					<option class="special_day" value="special_day" <?php if (isset($_smarty_tpl->tpl_vars['featurePricePriority']->value)&&$_smarty_tpl->tpl_vars['featurePricePriority']->value[1]=='special_day') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>"Special Days",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
					<option class="date_range" value="date_range" <?php if (isset($_smarty_tpl->tpl_vars['featurePricePriority']->value)&&$_smarty_tpl->tpl_vars['featurePricePriority']->value[1]=='date_range') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>"Date Ranges",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
				</select>
				<span class="input-group-addon"><i class="icon-chevron-right"></i></span>
				<select name="featurePricePriority[]" class="featurePricePriority">
					<option class="specific_date" value="specific_date" <?php if (isset($_smarty_tpl->tpl_vars['featurePricePriority']->value)&&$_smarty_tpl->tpl_vars['featurePricePriority']->value[2]=='specific_date') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>"Specific Date",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
					<option class="special_day" value="special_day" <?php if (isset($_smarty_tpl->tpl_vars['featurePricePriority']->value)&&$_smarty_tpl->tpl_vars['featurePricePriority']->value[2]=='special_day') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>"Special Days",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
					<option class="date_range" value="date_range" <?php if (isset($_smarty_tpl->tpl_vars['featurePricePriority']->value)&&$_smarty_tpl->tpl_vars['featurePricePriority']->value[2]=='date_range') {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>"Date Ranges",'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
				</select>
			</div>
		</div>
		<div class="panel-footer">
			<button type="submit" name="submitAddFeaturePricePriority" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</button>
		</div>
	</form>
</div>
<?php }} ?>
