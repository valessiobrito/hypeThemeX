<?php
// get the form inputs
$terms = get_input('terms');

// accept terms or delete account
if ($terms == 1) {
	$user = get_loggedin_user();
	$user->terms = 1;

	// save to database
	$user_guid = $user->save();

	if ($user_guid) {
	   forward();
	}
	else {
	   forward(REFERER);
	}
}
elseif ($terms == 0) {
	$user = get_loggedin_user();

	$user->delete();

	system_message(elgg_echo('member_selfdelete:deleted'));
	forward();
}
else {
	forward(REFERER);
}
?>
