<?php

echo elgg_view('page/elements/header_logo', $vars);

$search = elgg_view('search/search_box');
if ($search) {
    echo '<div id="header-search">' . $search . '</div>';
}

echo elgg_view('core/account/login_dropdown');

echo elgg_view('page/elements/toolbar', $vars);
