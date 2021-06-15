<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="index, follow">
  <@ with @{ imageFavicon } @>
	  <link rel="shortcut icon" href="@{ :file }">
  <@ end @>
	<link rel="canonical" href="https://agrocorner.ch">
	<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link rel="stylesheet" href="https://unpkg.com/@csstools/normalize.css/evergreen.css">
	<link rel="stylesheet" href="/packages/agrocorner-theme/agrocorner.css">
	<script src="/packages/agrocorner-theme/agrocorner.js" defer></script>
	<title>@{ sitename } – @{ title }</title>
</head>