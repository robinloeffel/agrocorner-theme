<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<header
  class="
    hero
    <@ if !@{ tagline } @>hero-no-text<@ end @>
  "
  style="
    background-image: url(@{ imageHero | def('') });
    background-position: @{ heroFocusPoint | def('center') };
  "
>
  <@ if @{ tagline } @>
    <div class="hero-text">
      <h1 class="hero-tagline">@{ tagline }</h1>
      <@ if @{ labelCtaButton } @>
        <a href="@{ urlCtaButton }" class="hero-cta">@{ labelCtaButton }</a>
      <@ end @>
    </div>
  <@ end @>
</header>
