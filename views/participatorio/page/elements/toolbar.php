<?php

$menu = elgg_view_menu('site');

echo '<nav class="elgg-page-toolbar sticky">';
	echo '<div class="elgg-col elgg-col-1of1">' . $menu . '</div>';
echo '</nav>';
