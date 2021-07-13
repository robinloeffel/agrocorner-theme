<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<head>
  <title>@{ title } | @{ sitename }</title>
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
  <link rel="stylesheet" href="https://unpkg.com/@fontsource/inter/latin.css">
  <link rel="stylesheet" href="https://unpkg.com/@csstools/normalize.css/evergreen.css">
	<link rel="stylesheet" href="/packages/agrocorner-theme/agrocorner.css">
	<script src="/packages/agrocorner-theme/agrocorner.js" defer></script>
  <script>
    if (window.navigator.userAgent.indexOf('Trident') > -1) {
      window.location = '/packages/agrocorner-theme/pages/ie11/ie11.html';
    }
  </script>
</head>
