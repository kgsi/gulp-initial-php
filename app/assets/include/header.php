<!DOCTYPE HTML>
<!--[if lte IE 8 ]><html class="ie8 ie8L ie9L" lang="ja" xmlns:og="http://ogp.me/ns#"><![endif]-->
<!--[if IE 9 ]><html class="ie9 ie9L" lang="ja" xmlns:og="http://ogp.me/ns#"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="ja" xmlns:og="http://ogp.me/ns#"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1300">
<meta name="format-detection" content="telephone=no">
<meta property="og:title" content="<?php echo $pageData->getTitle(PAGE_ID); ?>">
<meta property="og:type" content="<?php echo $pageData->getType(PAGE_ID); ?>">
<meta property="og:image" content="<?php echo HOST_NAME; ?>/assets/images/commons/ogimage.png">
<meta property="og:url" content="<?php echo HOST_NAME . $_SERVER['REQUEST_URI']; ?>">
<meta property="og:site_name" content="<?php echo $pageData->getSiteName(); ?>">
<meta name="description" content="<?php echo $pageDescription; ?><?php echo $pageData->getDescription(PAGE_ID); ?>">
<link rel="canonical" href="<?php echo HOST_NAME . $_SERVER['REQUEST_URI']; ?>" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel='stylesheet' href="/assets/css/style.css">
<?php echo $pageData->getCss(PAGE_ID); ?>
<script src="/assets/js/vendor/libs.js"></script>
<?php echo $pageData->getJs(PAGE_ID); ?>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<title><?php echo $pageTitle; ?><?php echo $pageData->getTitle(PAGE_ID); ?></title>
</head>
<body class="<?php echo setBodyClass(PAGE_ID); ?>">
<div class="wrapper">
