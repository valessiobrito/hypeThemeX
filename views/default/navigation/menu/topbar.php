<?php

echo elgg_view('navigation/menu/topbar/section', array(
	'items' => $vars['menu']['default'],
	'class' => "elgg-menu-topbar elgg-menu-topbar-default title-area left",
	'section' => 'default',
	'name' => 'topbar',
));

echo '<section class="top-bar-section">';
echo elgg_view('navigation/menu/topbar/section', array(
	'items' => $vars['menu']['alt'],
	'class' => "elgg-menu-topbar elgg-menu-topbar-alt right",
	'section' => 'alt',
	'name' => 'topbar',
));
echo '</section>';
