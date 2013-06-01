<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset=UTF-8" />
    <meta name="description" content="mikansoncho333のブログ" />
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.10.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="mikansoncho333 Blog" width="402" height="70" /></a></h1>
	</div>