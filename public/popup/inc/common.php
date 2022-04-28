<?php
session_start();
if (array_key_exists('debug', $_GET)) error_reporting(-1);
else error_reporting(0);
define('UAP_CORE', 1);
define('UAP_TITLE', esc_html__('Admin Panel', 'hap'));
define('ABSPATH', rtrim(dirname(dirname(__FILE__)), '/').'/');
define('HALFDATA_DEMO', false);
define('HALFDATA_DEMO_LOGIN', 'demo');
define('HALFDATA_DEMO_PASSWORD', 'demo');
define('HALFDATA_BASE_PAGE', 'leform');
$options = array(
	'login' => '',
	'password' => '',
	'url' => '',
	'mail_method' => 'mail',
	'mail_from_name' => UAP_TITLE,
	'mail_from_email' => 'noreply@'.str_replace("www.", "", $_SERVER["SERVER_NAME"]),
	'smtp_server' => '',
	'smtp_port' => '',
	'smtp_secure' => 'none',
	'smtp_username' => '',
	'smtp_password' => '',
	'smtp_from_name' => UAP_TITLE,
	'smtp_from_email' => 'noreply@'.str_replace("www.", "", $_SERVER["SERVER_NAME"])
);
$mail_methods = array('mail' => 'PHP Mail()', 'smtp' => 'SMTP');
$smtp_secures = array('none' => 'None', 'ssl' => 'SSL', 'tls' => 'TLS');

$folders = array();
if (!file_exists(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'plugins')) mkdir(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'plugins', 0777, true);
if (!file_exists(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data')) mkdir(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data', 0777, true);
if (!file_exists(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp')) mkdir(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp', 0777, true);

if (!is_writable(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'plugins')) {
	$folders[] = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'plugins';
} else {
	if (!file_exists(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR.'index.html')) {
		$result = file_put_contents(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR.'index.html', '<html><head><script>location.href="http://codecanyon.net/user/halfdata/portfolio?ref=halfdata";</script></head><body></body></html>');
		if (!$result) $folders[] = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'plugins';
	}
}
if (!is_writable(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data')) {
	$folders[] = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data';
} else {
	if (!file_exists(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'index.html')) {
		$result = file_put_contents(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'index.html', '<html><head><script>location.href="http://codecanyon.net/user/halfdata/portfolio?ref=halfdata";</script></head><body></body></html>');
		if (!$result) $folders[] = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data';
	}
}
if (!is_writable(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp')) {
	$folders[] = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp';
} else {
	if (!file_exists(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR.'index.html')) {
		$result = file_put_contents(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR.'index.html', '<html><head><script>location.href="http://codecanyon.net/user/halfdata/portfolio?ref=halfdata";</script></head><body></body></html>');
	}
	if (!file_exists(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR.'plugins.txt')) {
		$items = '[{"slug":"green-forms","name":"Green Forms","url":"https://greenforms.pro/","icon":"far fa-newspaper"},{"slug":"layered-popups","name":"Layered Popups","url":"https://codecanyon.net/item/layered-popups-for-wordpress/5978263?ref=halfdata","icon":"far fa-newspaper"},{"slug":"layered-popups-tabs","name":"Side Tabs - LP Add-On","url":"https://codecanyon.net/item/side-tabs-layered-popups-addon/10335326?ref=halfdata","icon":"fas fa-arrow-circle-right"},{"slug":"digital-paybox","name":"Digital Paybox","url":"https://codecanyon.net/item/digital-paybox-pay-and-download/2637036?ref=halfdata","icon":"fas fa-dollar-sign"},{"slug":"code-shop","name":"Code Shop","url":"https://codecanyon.net/item/code-shop-for-wordpress/5687817?ref=halfdata","icon":"far fa-credit-card"},{"slug":"stripe-instant-downloads","uap":1,"version":"1.53","file":"sid.php","name":"Stripe Instant Downloads","icon":"fab fa-stripe"}]';
		$result = file_put_contents(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR.'plugins.txt', $items);
		if (!$result) $folders[] = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'temp';
	}
}
$global_message = '';
if (!empty($folders)) {
	$global_message = '<div class="global-message global-message-danger">'.sprintf(esc_html__('Please make sure that the following directories exist and writable (set permissions 0777): %s', 'hap'), '<br /><em>'.implode('<br />', $folders).'</em>').'</div>';
	$writeable = false;
} else $writeable = true;

$wp_filters = array();
$scripts = array();
$styles = array();
$menu = array();

class WP_Error {
	var $message;
	function __construct($_code = '', $_message = '', $_data = '') {
		$this->message = $_message;
	}
	function get_error_message() {
		return $this->message;
	}
}

header('Content-type: text/html; charset=utf-8');
?>