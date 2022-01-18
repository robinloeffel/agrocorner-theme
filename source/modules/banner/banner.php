<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ with @{ imageBanner } @>
  <header
    class="banner"
    style="
      background-image: url(@{ imageBanner });
      background-position: @{ bannerFocusPoint | def('center') };
    "
  ></header>
<@ end @>
