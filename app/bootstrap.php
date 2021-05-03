<?php
	// Load config
	require_once 'config/config.php';
	// Load helper
	require_once 'helpers/url_helper.php';
	// Mail helper
	require_once 'helpers/mail_helper.php';
	// Session helper
	require_once 'helpers/session_helper.php';

	//Autoload Core Libraries
	spl_autoload_register(function($className)
	{
		require_once 'libraries/' . $className . '.php';
	});
