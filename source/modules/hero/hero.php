<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<header
  class="hero"
  style="
    background-image: url(@{ imageHero });
    background-position: @{ heroFocusPoint | def('center') };
  "
>
  <@ if @{ tagline } @>
    <div class="hero-text">
      <h1 class="hero-tagline">@{ tagline }</h1>
      <a href="@{ urlButton }" class="hero-cta">@{ labelButton }</a>
    </div>
  <@ end @>
</header>
