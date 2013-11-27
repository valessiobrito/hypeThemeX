<?php

echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz'));

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
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

<?php
$powered_url = elgg_get_site_url() . "_graphics/powered_by_elgg_badge_drk_bckgnd.gif";
$c3sl_icon = $site_url . "mod/hypeThemeX/graphics/powered_by_c3sl.png";
?>
<div class="mts clearfloat float-alt">
	<a href="http://www.c3sl.ufpr.br" target="_blank">
		<img src="<?php echo $c3sl_icon; ?>" alt="Powered by C3SL" title="Powered and Hosted by C3SL" />
	</a>
	<a href="http://elgg.org" target="_blank">
		<img src="<?php echo $powered_url; ?>" alt="Powered by Elgg" title="Powered by Elgg" width="106" height="15" />
	</a>
</div>

<script type="text/javascript" language="javascript">
$(document).ready(function(){
      imagePreview();
});
this.imagePreview = function(){
            xOffset = -20;
            yOffset = 40;

			$("a.preview").hover(function(e){
				this.t = this.title;
				this.title = "";
				var c = (this.t != "") ? "<br/>" + this.t : "";
				$("body").append("<p id='preview'><img src='"+ this.href +"' alt='Image preview' />"+ c +"</p>");

				$("#preview")
				    .css("top",(e.pageY - xOffset) + "px")
				    .css("left",(e.pageX + yOffset) + "px")
				    .fadeIn("slow");

    		},

			function(){
				this.title = this.t;
				$("#preview").remove();
			});

			$("a.preview").mousemove(function(e){
				$("#preview")
				    .css("top",(e.pageY - xOffset) + "px")
				    .css("left",(e.pageX + yOffset) + "px");
			});
};
</script>
