<?php /* Smarty version Smarty-3.1.19, created on 2021-08-01 23:07:48
         compiled from "C:\xampp\htdocs\hotelcom\modules\wkhotelroom\views\templates\hook\hotelRoomDisplayBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57644371361076f944a65f0-34913934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4837c31788be494386b76e3dcd99b7971e0db7c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\modules\\wkhotelroom\\views\\templates\\hook\\hotelRoomDisplayBlock.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57644371361076f944a65f0-34913934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hotelRoomDisplay' => 0,
    'HOTEL_ROOM_DISPLAY_HEADING' => 0,
    'HOTEL_ROOM_DISPLAY_DESCRIPTION' => 0,
    'roomDisplay' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'link' => 0,
    'htlRoomBlockIteration' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61076f94538d08_46544422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61076f94538d08_46544422')) {function content_61076f94538d08_46544422($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['hotelRoomDisplay']->value)&&$_smarty_tpl->tpl_vars['hotelRoomDisplay']->value) {?>
    <div id="hotelRoomsBlock" class="row home_block_container">
        <div class="col-xs-12 col-sm-12">
            <?php if ($_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_HEADING']->value&&$_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_DESCRIPTION']->value) {?>
                <div class="row home_block_desc_wrapper">
                    <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <p class="home_block_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_HEADING']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <p class="home_block_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_DESCRIPTION']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <hr class="home_block_desc_line"/>
                    </div>
                </div>
            <?php }?>
            <div class="row home_block_content">
                <div class="col-sm-12 col-xs-12">
                    <?php $_smarty_tpl->tpl_vars['htlRoomBlockIteration'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['roomDisplay'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roomDisplay']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotelRoomDisplay']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['htlRoom']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['roomDisplay']->key => $_smarty_tpl->tpl_vars['roomDisplay']->value) {
$_smarty_tpl->tpl_vars['roomDisplay']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['htlRoom']['iteration']++;
?>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['htlRoom']['iteration']%2) {?>
                            <div class="row">
                        <?php }?>
                                <div class="col-sm-12 col-md-6 margin-btm-30">
                                    <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive width-100">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayHotelRoomsBlockImageAfter','room_type'=>$_smarty_tpl->tpl_vars['roomDisplay']->value),$_smarty_tpl);?>

                                    <div class="hotelRoomDescContainer">
                                        <div class="row margin-lr-0">
                                            <p class="htlRoomTypeNameText pull-left"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                            <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                                <p class="htlRoomTypePriceText pull-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff']>=0) {?>
                                                        <span class="wk_roomType_price <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff']>0) {?>room_type_old_price<?php }?>"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['roomDisplay']->value['price_without_reduction']),$_smarty_tpl);?>
</span>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff']) {?>
                                                        <span class="wk_roomType_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price']),$_smarty_tpl);?>
</span>
                                                    <?php }?>
                                                    /&nbsp;<?php echo smartyTranslate(array('s'=>'Per Night','mod'=>'wkhotelroom'),$_smarty_tpl);?>

                                                </p>
                                            <?php }?>
                                        </div>
                                        <div class="row margin-lr-0 htlRoomTypeDescText">
                                            <?php echo $_smarty_tpl->tpl_vars['roomDisplay']->value['description'];?>

                                        </div>
                                        <div class="row margin-lr-0">
                                            <a target="blank" class="btn btn-default button htlRoomTypeBookNow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['roomDisplay']->value['id_product']), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php if (!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><?php echo smartyTranslate(array('s'=>'Ver Información','mod'=>'wkhotelroom'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'View','mod'=>'wkhotelroom'),$_smarty_tpl);?>
<?php }?></span></a>
                                        </div>
                                    </div>
                                </div>
                        <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['htlRoom']['iteration']%2)) {?>
                            </div>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['htlRoomBlockIteration'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['htlRoom']['iteration'], null, 0);?>
                    <?php } ?>
                    <?php if ($_smarty_tpl->tpl_vars['htlRoomBlockIteration']->value%2) {?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <hr class="home_block_seperator"/>
    </div>
<?php }?><?php }} ?>
