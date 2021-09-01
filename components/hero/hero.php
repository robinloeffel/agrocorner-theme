<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<div class="hero">
  <@ with @{ imageHero } @>
    <style>
      .hero {
        background: url(@{ :file });
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
      }
    </style>
  <@ end @>

	<p class="hero-text">
		<span class="hero-tagline">
      @{ tagline | def('Wir sind Ihr Partner für alle Gemüsesorten und helfen Ihnen von A wie Aubergine bis Z wie Zucchetti!') }
    </span>
		<a href="@{ urlButton | def('./produkte') }" class="hero-cta">
      @{ labelButton | def('Unsere Produkte') }
		</a>
	</p>
</div>
