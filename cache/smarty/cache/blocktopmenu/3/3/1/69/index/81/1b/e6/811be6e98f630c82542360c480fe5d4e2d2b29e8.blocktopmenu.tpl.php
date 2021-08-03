<?php /*%%SmartyHeaderCode:3355228361088b19af9da8-13677059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '811be6e98f630c82542360c480fe5d4e2d2b29e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hotelcom\\themes\\hotel-reservation-theme\\modules\\blocktopmenu\\blocktopmenu.tpl',
      1 => 1617197312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3355228361088b19af9da8-13677059',
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61088b19b92802_16243679',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61088b19b92802_16243679')) {function content_61088b19b92802_16243679($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Menú</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://localhost/hotelcom/es/3-colombia" title="Colombia">Colombia</a><ul><li><a href="http://localhost/hotelcom/es/12-risaralda" title="Risaralda">Risaralda</a><ul><li><a href="http://localhost/hotelcom/es/13-pereira" title="pereira">pereira</a><ul><li><a href="http://localhost/hotelcom/es/14-paseo-en-jeep" title="Paseo en jeep">Paseo en jeep</a></li></ul></li></ul></li><li><a href="http://localhost/hotelcom/es/15-quindio" title="Quindio">Quindio</a><ul><li><a href="http://localhost/hotelcom/es/16-armenia" title="Armenia">Armenia</a><ul><li><a href="http://localhost/hotelcom/es/17-caminata-al-nevado" title="Caminata al nevado">Caminata al nevado</a></li></ul></li></ul></li><li class="category-thumbnail"><div><img src="http://localhost/hotelcom/img/c/3-0_thumb.jpg" alt="Colombia" title="Colombia" class="imgm" /></div><div><img src="http://localhost/hotelcom/img/c/3-1_thumb.jpg" alt="Colombia" title="Colombia" class="imgm" /></div></li></ul></li>
							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://localhost/hotelcom/es/buscar" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
