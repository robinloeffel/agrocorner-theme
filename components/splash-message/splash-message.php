<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ if @{ +splashMessage } @>
<div class="splash-message">
  <div class="splash-message-content">
    <button class="splash-message-close"></button>
    @{ +splashMessage }
  </div>
</div>

<link rel="stylesheet" href="/packages/agrocorner-theme/components/splash-message/splash-message.css">
<script src="/packages/agrocorner-theme/components/splash-message/splash-message.js"></script>
<@ end @>
