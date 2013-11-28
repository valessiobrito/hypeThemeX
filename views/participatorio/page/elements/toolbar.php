<?php

$menu = elgg_view_menu('site');
$login_dropdown = elgg_view('core/account/login_dropdown');
$topbar = elgg_view('page/elements/topbar', $vars);

echo '<nav class="elgg-page-toolbar sticky">';
    echo '<div id="nav-toolbar">';
    echo '<div class="elgg-col elgg-col-3of4">' . $menu . '</div>';
    echo '<div class="elgg-col elgg-col-1of4">' . $topbar.$login_dropdown . '</div>';
    echo '</div>';
echo '</nav>';
