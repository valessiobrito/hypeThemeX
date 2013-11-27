<?php

$menu = elgg_view_menu('site');

$topbar = elgg_view('page/elements/topbar', $vars);

echo '<nav class="elgg-page-toolbar sticky">';
    echo '<div class="elgg-col elgg-col-3of4">' . $menu . '</div>';
    echo '<div class="elgg-col elgg-col-1of4">' . $topbar . '</div>';
echo '</nav>';
