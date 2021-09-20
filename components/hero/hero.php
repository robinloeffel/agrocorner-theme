<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ with @{ imageHero } @>
<div
  class="hero"
  style="
    background-image: url(@{ :file });
    background-position: @{ heroFocusPoint | def('center') };
  ">
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
