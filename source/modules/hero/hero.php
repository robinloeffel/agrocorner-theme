<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<div
  class="hero"
  style="
    background-image: url(@{ imageHero });
    background-position: @{ heroFocusPoint | def('center') };
  "
>
  <@ if @{ tagline } @>
	<p class="hero-text">
		<span class="hero-tagline">
      @{ tagline }
    </span>
    <@ if @{ labelButton } @>
		<a href="@{ urlButton | def('./produkte') }" class="hero-cta">
      @{ labelButton }
		</a>
    <@ end @>
	</p>
  <@ end @>
</div>
