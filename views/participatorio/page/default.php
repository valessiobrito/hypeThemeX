<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['title']       The page title
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// backward compatability support for plugins that are not using the new approach
// of routing through admin. See reportedcontent plugin for a simple example.
if (elgg_get_context() == 'admin') {
	if (get_input('handler') != 'admin') {
		elgg_deprecated_notice("admin plugins should route through 'admin'.", 1.8);
	}
	elgg_admin_add_plugin_settings_menu();
	elgg_unregister_css('elgg');
	echo elgg_view('page/admin', $vars);
	return true;
}

// check if user have accepted the terms of use
if (elgg_is_logged_in()){
	if (elgg_get_context() != 'accept_terms') {
		$user = elgg_get_logged_in_user_entity();

		if ($user->terms != 1) {
			forward('accept_terms');
		}
	}
}

// render content before head so that JavaScript and CSS can be loaded. See #4032
$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));
$header = elgg_view('page/elements/header', $vars);
$body = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

// Set the content type
header("Content-type: text/html; charset=UTF-8");

$lang = get_current_language();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">
<head>
<?php echo elgg_view('page/elements/head', $vars); ?>
<?php echo elgg_view('page/elements/shortcut_icon', $vars); ?>
</head>
<?php //identifica se esta logado e armazena em $status_login
if (elgg_is_logged_in()){
    $status_login = logged;
  } else {
    $status_login = nologin;
  }

$actual_page = 'no_page_style';

if(isset($vars['config']->context[0]) && !is_null($vars['config']->context[0]))
    $actual_page = $vars['config']->context[0];
?>

<body class="<?php echo $status_login.' '.$actual_page; ?>">
<div id="barra-brasil">
    <a href="http://brasil.gov.br" style="display: block; padding: 10px; font-size: 0.7em;">Portal do Governo Brasileiro</a></div>
<div class="elgg-page elgg-page-default">
	<div class="elgg-page-messages">
		<?php echo $messages; ?>
	</div>

	<div class="elgg-page-header">
		<div class="elgg-inner">
            <?php echo $header; ?>
		</div>
	</div>
	<a name="corpo"></a>
	<div class="elgg-page-body">
		<div class="elgg-inner">
			<?php echo $body; ?>
		</div>
	</div>
	<a name="footer"></a>
	<div class="elgg-page-footer">
		<div class="elgg-inner">
			<?php echo $footer; ?>
		</div>
	</div>
</div>
<?php echo elgg_view('page/elements/footer-page'); ?>
</body>
</html>
