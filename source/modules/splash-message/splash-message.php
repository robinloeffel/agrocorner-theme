<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ if @{ +splashMessage } @>
<div class="splash-message">
  <div class="splash-message-content">
    <button class="splash-message-close">
      <span class="screen-reader-only">
        @{ splashMessageClose | def('Fenster schliessen.') }
      </span>
    </button>
    <div class="user-editable">
      @{ +splashMessage }
    </div>
  </div>
</div>
<@ end @>
