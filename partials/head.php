<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="/packages/agrocorner-theme/dist/agrocorner.css" as="style">
  <link rel="preload" href="/packages/agrocorner-theme/dist/agrocorner.js" as="script">
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
  <link rel="canonical" href="@{ url }">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap">
	<link rel="stylesheet" href="/packages/agrocorner-theme/dist/agrocorner.css">
	<script src="/packages/agrocorner-theme/dist/agrocorner.js" defer></script>
  <script>
    if (window.navigator.userAgent.indexOf('Trident') > -1) {
      window.location = '/packages/agrocorner-theme/pages/ie11/ie11.html';
    }
  </script>
</head>
