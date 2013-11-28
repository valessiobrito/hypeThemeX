<?php

foreach($vars['menu']['default'] as &$menu){
    if($menu->getName() == 'profile'){
        foreach($vars['menu']['alt'] as $menu_alt)
            $menu->addChild($menu_alt);
    }
}

echo elgg_view('navigation/menu/topbar/section', array(
    'items' => $vars['menu']['default'],
//    'class' => "elgg-menu-topbar elgg-menu-topbar-default title-area",
    'class' => "elgg-menu elgg-menu-site elgg-menu-site-default clearfix",
	'section' => 'default',
	'name' => 'topbar',
));

