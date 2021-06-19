<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<div class="hero">
	<p class="hero-text">
		<span class="hero-tagline">
      @{ tagline | def('Wir sind Ihr Partner für alle Gemüsesorten und helfen Ihnen von A wie Aubergine bis Z wie Zucchetti!') }
    </span>
		<a href="@{ urlButton | def('#') }" class="hero-cta">
      @{ labelButton | def('Unsere Produkte') }
		</a>
	</p>
  <@ with @{ imageHero } @>
    <img src="@{ :file }" alt="@{ :caption }" class="hero-image">
  <@ end @>

	<script src="/packages/agrocorner-theme/components/hero/hero.js"></script>
	<link rel="stylesheet" href="/packages/agrocorner-theme/components/hero/hero.css">
</div>
