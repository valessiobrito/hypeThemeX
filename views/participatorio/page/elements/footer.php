<?php

$footer_menu = elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();

echo '<div id="menu-footer">' . $footer_menu . '</div>';

?>


<div style="margin-top:50px;">
	<img id="banner-participatorio" style="height: 109px; width: 990px;" src="<?php echo $site_url; ?>mod/hypeThemeX/graphics/banner.png" alt="Parceiros" usemap="#banner-map" />
	<map id="banner-map" name="banner-map">
		<area shape="rect" alt="Universidade Federal do Rio de Janeiro" title="Universidade Federal do Rio de Janeiro" coords="17,40,170,83" href="http://www.ufrj.br/" target="_blank">
		<area shape="rect" alt="Universidade Federal do Paraná" title="Universidade Federal do Paraná" coords="204,28,298,93" href="http://www.ufpr.br/" target="_blank">
		<area shape="rect" alt="Secretaria Nacional de Juventude" title="Secretaria Nacional de Juventude" coords="417,43,544,86" href="http://www.juventude.gov.br/" target="_blank">
		<area shape="rect" alt="Secretaria-Geral da Presidência da República" title="Secretaria-Geral da Presidência da República" coords="563,44,742,88" href="http://www.secretariageral.gov.br/" target="_blank">
		<area shape="rect" alt="Portal Brasil" title="Portal Brasil" coords="763,28,968,98" href="http://www.brasil.gov.br/" target="_blank">
	</map>
</div>

