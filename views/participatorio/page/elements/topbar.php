<?php

// elgg_load_js('foundation.topbar');

// remove toggle (menu) from topbar
elgg_unregister_menu_item('topbar', 'toggle');

echo '<div id="nav-topbar" class="sticky" data-topbar>';
echo elgg_view_menu('topbar', array('sort_by' => 'priority'));
echo '</div>';
