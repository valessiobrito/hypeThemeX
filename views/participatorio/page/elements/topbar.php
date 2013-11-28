<?php

// elgg_load_js('foundation.topbar');

echo '<div id="nav-topbar" class="sticky" data-topbar>';
echo elgg_view_menu('topbar', array('sort_by' => 'priority'));
echo '</div>';
