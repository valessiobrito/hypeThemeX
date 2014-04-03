<?php

$menu = elgg_view_menu('site');
$login_dropdown = elgg_view('core/account/login_dropdown');
$topbar = elgg_view('page/elements/topbar', $vars);

echo '<nav class="elgg-page-toolbar sticky">';
    echo '<a name="menu"></a><div id="nav-toolbar">';
    echo '<div class="elgg-col elgg-col-3of5">' . $menu . '</div>';

    if(elgg_is_logged_in())
        echo '<div class="elgg-col elgg-col-2of5">' . $topbar . '</div>';
    else
        echo '<div class="elgg-col elgg-col-2of5">' . $login_dropdown . '</div>';
    echo '</div>';
echo '</nav>';
