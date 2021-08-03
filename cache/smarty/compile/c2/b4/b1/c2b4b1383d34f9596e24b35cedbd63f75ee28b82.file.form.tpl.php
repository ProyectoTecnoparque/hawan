<?php /* Smarty version Smarty-3.1.19, created on 2021-08-02 13:09:31
         compiled from "C:\xampp\htdocs\hotelcom\modules\hotelreservationsystem\views\templates\admin\hotel_features\helpers\form\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1093223789610834db632a92-42691609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b4b1383d34f9596e24b35cedbd63f75ee28b82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\hotelreservationsystem\\views\\templates\\admin\\hotel_features\\helpers\\form\\form.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1093223789610834db632a92-42691609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table' => 0,
    'name_controller' => 0,
    'current' => 0,
    'submit_action' => 0,
    'token' => 0,
    'languages' => 0,
    'currentLang' => 0,
    'language' => 0,
    'edit' => 0,
    'featureInfo' => 0,
    'parent_ftr_name' => 0,
    'child_feature' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_610834db9361a3_04964526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_610834db9361a3_04964526')) {function content_610834db9361a3_04964526($_smarty_tpl) {?>

<div class="panel">
	<div class="panel-heading">
		<i class="icon-plus"></i>&nbsp <?php echo smartyTranslate(array('s'=>'Add New Features','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

	</div>
	<div class="panel-content">
		<form id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_form" class="defaultForm <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_controller']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 form-horizontal" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['submit_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>&token=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" enctype="multipart/form-data">
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
				<div class="col-sm-12">
					<label class="control-label"><?php echo smartyTranslate(array('s'=>'Choose Language','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
					<input type="hidden" name="choosedLangId" id="choosedLangId" value="<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
">
					<button type="button" id="multi_lang_btn" class="btn btn-default dropdown-toggle wk_language_toggle" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['name'];?>

						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu wk_language_menu" style="left:14%;top:32px;">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<li>
								<a href="javascript:void(0)" onclick="showLangField('<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
', <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);">
									<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

								</a>
							</li>
						<?php } ?>
					</ul>
					<p class="help-block"><?php echo smartyTranslate(array('s'=>'Change language for updating information in multiple language.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
					<hr>
				</div>
			<?php }?>
				<div class="form-group row">
					<label class="col-sm-3 control-label" >
						<?php echo smartyTranslate(array('s'=>'Parent Feature Name','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->getSubTemplate ("../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</label>
					<div class="col-sm-4">
						<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['featureInfo']->value['id'];?>
" />
						<?php }?>
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars["parent_ftr_name"] = new Smarty_variable("parent_ftr_name_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
							<input type="text"
							id="parent_ftr_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
							name="parent_ftr_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
							value="<?php if (isset($_POST[$_smarty_tpl->tpl_vars['parent_ftr_name']->value])) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST[$_smarty_tpl->tpl_vars['parent_ftr_name']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php $_tmp1=ob_get_clean();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['featureInfo']->value['name'][$_tmp1], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>"
							class="form-control wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
							maxlength="128"
							<?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?> />
						<?php } ?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 control-label"><?php echo smartyTranslate(array('s'=>'Position','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
					<div class="col-sm-4">
						<input type="text" name="position" class="position" placeholder="<?php echo smartyTranslate(array('s'=>'Feature position','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" class="form-control" value="<?php if (isset($_POST['position'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST['position'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['featureInfo']->value['position'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>"/>
						<p class="error_text" id="pos_err_p"></p>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 control-label">
						<?php echo smartyTranslate(array('s'=>'Child Features','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->getSubTemplate ("../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</label>
					<div class="col-sm-4">
						<input type="text" placeholder="Enter child feature name" class="child_ftr_name" name="child_ftr_name">
						<p class="error_text" id="chld_ftr_err_p"></p>
					</div>
					<div class="col-sm-4">
						<button type="button" class='col-sm-2 btn btn-primary add_feature_to_list'><?php echo smartyTranslate(array('s'=>'Add','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</button>
					</div>
				</div>
				<div class="added_child_features_container">
					<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&$_smarty_tpl->tpl_vars['edit']->value&&isset($_smarty_tpl->tpl_vars['featureInfo']->value['child_features'])&&$_smarty_tpl->tpl_vars['featureInfo']->value['child_features']) {?>
						<?php  $_smarty_tpl->tpl_vars['child_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featureInfo']->value['child_features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child_feature']->key => $_smarty_tpl->tpl_vars['child_feature']->value) {
$_smarty_tpl->tpl_vars['child_feature']->_loop = true;
?>
							<div class="child_feature_row row">
								<label class="col-sm-3 control-label text-right">
								</label>
								<div class="col-sm-4">
									<input type="hidden" name="child_feature_id[]" value="<?php echo $_smarty_tpl->tpl_vars['child_feature']->value['id'];?>
" />
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										<input type="text"
										value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php $_tmp2=ob_get_clean();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['child_feature']->value['name'][$_tmp2], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
										name="child_features_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
[]"
										class="form-control wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
										maxlength="128"
										<?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?> />
									<?php } ?>
								</div>
								<div class="col-sm-4">
									<a href="#" class="remove-chld-ftr btn btn-default">
										<i class="icon-trash"></i>
									</a>
								</div>
							</div>
						<?php } ?>
					<?php }?>
				</div>
			</div>
			<div class="panel-footer">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelFeatures'), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default">
					<i class="process-icon-cancel"></i><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</a>
				<button type="submit" name="submitHtlFeatures" class="btn btn-default pull-right submit_feature">
					<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</button>
				<button type="submit" name="submitHtlFeaturesAndStay" class="btn btn-default pull-right submit_feature">
					<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</button>
			</div>
		</form>
	</div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'prnt_ftr_err')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'prnt_ftr_err'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Enter Parent feature name first.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'prnt_ftr_err'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'chld_ftr_err')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'chld_ftr_err'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Enter at least one child feature.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'chld_ftr_err'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'chld_ftr_text_err')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'chld_ftr_text_err'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Enter child feature name.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'chld_ftr_text_err'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'pos_numeric_err')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'pos_numeric_err'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Position should be numeric.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'pos_numeric_err'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
