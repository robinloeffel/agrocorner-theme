<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ with @{ imageHero } @>
  <header
    class="
      hero
      <@ if !@{ tagline } @>hero-no-text<@ end @>
    "
    style="
      background-image: url(@{ imageHero });
      background-position: @{ heroFocusPoint | def('center') };
    "
  >
    <@ if @{ tagline } @>
      <div class="hero-text">
        <h1 class="hero-tagline">@{ tagline }</h1>
        <@ if @{ labelCtaButton } @>
          <h2 class="hero-cta">
            <a href="@{ urlCtaButton }" >@{ labelCtaButton }</a>
          </h2>
        <@ end @>
      </div>
    <@ end @>
  </header>
<@ end @>
