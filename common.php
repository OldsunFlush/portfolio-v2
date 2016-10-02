<?php
/**
 * LESS COMPILER
 */
	require_once('includes/lessc.inc.php');

    $less = new lessc;
    $less->compileFile('styles/config.less', 'styles/styles.css');

/**
 * LANGUAGE SWITCH
 */
	session_start();
	header('Cache-control: private'); // IE6 fix

	if (isset($_GET['lang'])) {
		$lang = $_GET['lang'];

		// register the session
		$_SESSION['lang'] = $lang;
		setcookie('lang', $lang, time() + (3600 * 24 * 365));
	} 
	else if (isset($_SESSION['lang'])) {
		$lang = $_SESSION['lang'];
	} 
	else if (isset($_COOKIE['lang'])) {
		$lang = $_COOKIE['lang'];
	}
	else {
		$lang = 'fr';
	}

	switch ($lang) {
		case 'en':
		$lang_file = 'lang.en.php';
		break;
            
		case 'fr':
		$lang_file = 'lang.fr.php';
		break;

		default:
		$lang_file = 'lang.en.php';
	}

	require_once 'translations/'.$lang_file;
?>
