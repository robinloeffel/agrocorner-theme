<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ with @{ imageHero } @>
  <header
    class="hero<@ if !@{ tagline } @> hero-no-text<@ end @>"
    style="background-position: @{ heroFocusPoint | def('center') }; background-image: url(@{ :file })"
  >
    <@ if @{ tagline } @>
      <div class="hero-text">
        <h1 class="hero-tagline">@{ tagline }</h1>
        <@ if @{ labelCtaButton } @>
          <h2><a href="@{ urlCtaButton }">@{ labelCtaButton }</a></h2>
        <@ end @>
      </div>
    <@ end @>
  </header>
<@ end @>
