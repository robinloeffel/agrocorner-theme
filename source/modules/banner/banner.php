<@ with @{ imageHero } @>
<div
  class="banner"
  style="
    background-image: url(@{ :file });
    background-position: @{ bannerFocusPoint | def('center') };
  "
></div>
<@ end @>
