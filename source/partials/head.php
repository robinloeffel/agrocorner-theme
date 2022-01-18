<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<head>
  <title>@{ title } — @{ sitename }</title>
	<meta charset="utf-8">
  <link rel="preload" type="font/woff2" href="https://rsms.me/inter/font-files/Inter-roman.var.woff2?v=3.19" as="font" crossorigin="anonymous">
  <link rel="preload" type="text/css" href="https://rsms.me/inter/inter.css" as="style" crossorigin="anonymous">
  <link rel="preload" type="text/css" href="/packages/agrocorner-theme/dist/agrocorner.css" as="style">
  <link rel="preload" type="text/javascript" href="/packages/agrocorner-theme/dist/agrocorner.js" as="script">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@{ metaDescription }">
	<meta name="keywords" content="@{ metaKeywords }">
	<meta name="author" content="@{ metaAuthor | def('AgroCorner AG') }">
	<meta name="robots" content="index, follow">
  <link rel="canonical" href="https://agrocorner.ch@{ url }">
	<link rel="shortcut icon" type="image/png" href="@{ imageFavicon }">
  <link rel="stylesheet" type="text/css" href="https://rsms.me/inter/inter.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/packages/agrocorner-theme/dist/agrocorner.css">
	<script type="text/javascript" src="/packages/agrocorner-theme/dist/agrocorner.js" defer></script>
  <script type="text/javascript">
    if ('documentMode' in document) {
      window.location = '/packages/agrocorner-theme/pages/ie11.html';
    }
  </script>
</head>
