<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:07:47
         compiled from "C:\xampp\htdocs\hotelcom\modules\wkhotelfeaturesblock\views\templates\hook\hotelfeaturescontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114466972661076f93b9ad68-86791999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f4d47f3afe698eb08857df73f84492859a2b45b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\wkhotelfeaturesblock\\views\\templates\\hook\\hotelfeaturescontent.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114466972661076f93b9ad68-86791999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hotelAmenities' => 0,
    'HOTEL_AMENITIES_HEADING' => 0,
    'HOTEL_AMENITIES_DESCRIPTION' => 0,
    'amenityPosition' => 0,
    'module_dir' => 0,
    'amenity' => 0,
    'link' => 0,
    'amenityIteration' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076f93c0d975_42958671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076f93c0d975_42958671')) {function content_61076f93c0d975_42958671($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['hotelAmenities']->value)&&$_smarty_tpl->tpl_vars['hotelAmenities']->value) {?>
    <div id="hotelAmenitiesBlock" class="row home_block_container">
        <div class="col-xs-12 col-sm-12 home_amenities_wrapper">
            <?php if ($_smarty_tpl->tpl_vars['HOTEL_AMENITIES_HEADING']->value&&$_smarty_tpl->tpl_vars['HOTEL_AMENITIES_DESCRIPTION']->value) {?>
                <div class="row home_block_desc_wrapper">
                    <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <p class="home_block_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_AMENITIES_HEADING']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <p class="home_block_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_AMENITIES_DESCRIPTION']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <hr class="home_block_desc_line"/>
                    </div>
                </div>
            <?php }?>
            <div class="homeAmenitiesBlock home_block_content">
                <?php $_smarty_tpl->tpl_vars['amenityPosition'] = new Smarty_variable(0, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['amenityIteration'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['amenity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['amenity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotelAmenities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['amenityBlock']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['amenity']->key => $_smarty_tpl->tpl_vars['amenity']->value) {
$_smarty_tpl->tpl_vars['amenity']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['amenityBlock']['iteration']++;
?>

                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['amenityBlock']['iteration']%2!=0) {?>
                        <div class="row margin-lr-0">
                        <?php if ($_smarty_tpl->tpl_vars['amenityPosition']->value) {?>
                            <?php $_smarty_tpl->tpl_vars['amenityPosition'] = new Smarty_variable(0, null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['amenityPosition'] = new Smarty_variable(1, null, 0);?>
                        <?php }?>
                    <?php }?>
                            <div class="col-md-6 padding-lr-0 hidden-xs hidden-sm">
                                <div class="row margin-lr-0 amenity_content">
                                    <?php if ($_smarty_tpl->tpl_vars['amenityPosition']->value) {?>
                                        <div class="col-md-6 padding-lr-0">
                                            <div class="amenity_img_primary">

                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))."views/img/hotels_features_img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')).".jpg");?>
')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-md-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))."views/img/hotels_features_img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')).".jpg");?>
')">
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-sm-12 padding-lr-0 visible-sm">
                                <div class="row margin-lr-0 amenity_content">
                                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['amenityBlock']['iteration']%2!=0) {?>
                                        <div class="col-sm-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))."views/img/hotels_features_img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')).".jpg");?>
')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-sm-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))."views/img/hotels_features_img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')).".jpg");?>
')">
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-xs-12 padding-lr-0 visible-xs">
                                <div class="row margin-lr-0 amenity_content">
                                    <div class="col-xs-12 padding-lr-0">
                                        <div class="amenity_img_primary">
                                            <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))."views/img/hotels_features_img/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')).".jpg");?>
')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 padding-lr-0 amenity_desc_cont">
                                        <div class="amenity_desc_primary">
                                            <div class="amenity_desc_secondary">
                                                <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                <hr class="amenity_desc_hr" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['amenityBlock']['iteration']%2==0) {?>
                        </div>
                    <?php }?>
                    <?php $_smarty_tpl->tpl_vars['amenityIteration'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['amenityBlock']['iteration'], null, 0);?>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['amenityIteration']->value%2) {?>
                    </div>
                <?php }?>
            </div>
        </div>
        <hr class="home_block_seperator"/>
    </div>
<?php }?><?php }} ?>
