<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ if @{ +splashMessage } @>
<div class="splash-message">
  <div class="splash-message-content">
    <button class="splash-message-close"></button>
    @{ +splashMessage }
  </div>
</div>
<@ end @>
