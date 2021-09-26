<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<!doctype html>
<html lang="@{ pageLang | def('de') }">
<@ partials/head.php @>
<body>
  <@ modules/navigation/navigation.php @>
  <@ modules/hero/hero.php @>
  <main>
    <@ modules/page-tiles/page-tiles.php @>
    <@ modules/splash-message/splash-message.php @>
  </main>
  <@ modules/footer/footer.php @>
</body>
</html>
