<?php
// make sure only logged in users can see this page 
gatekeeper();

// set context
elgg_set_context('accept_terms');

// set the title
// for distributed plugins, be sure to use elgg_echo() for internationalization
$title = elgg_echo("policypages:terms");

// start building the main column of the page
$content = elgg_view_title($title);

// add the form to this section
$content .= elgg_view_form("accept_terms/accept_terms");

// layout the page
$body = elgg_view_layout('one_column', array(
	'content' => $content
));

// draw the page
echo elgg_view_page($title, $body);
?>
