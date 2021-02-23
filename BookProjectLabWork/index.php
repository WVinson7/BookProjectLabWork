<?php

session_start();

if (!isset($_SESSION['name_user']) AND !isset($_SESSION['email'])) {

	require_once('library/head_sec.inc');
	require_once('library/main_sec.inc');
	require_once('library/footer_sec.inc');

} else {

	require_once('library/head_sec.inc');
	require_once('library/main_sec_logged.inc');
	require_once('library/footer_sec.inc');	
	
}


?>