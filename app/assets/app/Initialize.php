<?php
/*
 *
 * Initialize
 *
 */

 // Variable
ini_set('display_errors', 1);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
mb_language('ja');
mb_internal_encoding('utf-8');

// Require
require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/app/PageData.php');

$pageData = new pageData();

// define
define('HOST_NAME','http://xxx.xxxxx.com');

// function
function setBodyClass($pageID){
	if($pageID != 'top'){
		return $pageID . ' under';
	}else{
		return $pageID;
	}
}

function setCanonical($pageURI){
	if (DEVICE == 'sp'){
		$canonicalUrl = str_replace('/sp', '', $pageURI);
		return $canonicalUrl;
	}
}

function isPCDevice() {
	if (DEVICE == 'pc') return (true);
	return (false);
}
