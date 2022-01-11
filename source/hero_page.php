<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<!doctype html>
<html lang="@{ pageLang | def('de') }">
<@ partials/head.php @>
<body>
  <@ modules/navigation/navigation.php @>
  <@ modules/hero/hero.php @>
  <main>
    <@ modules/author-content/author-content.php @>
    <@ modules/page-tiles/page-tiles.php @>
  </main>
  <@ modules/footer/footer.php @>
  <@ modules/splash-message/splash-message.php @>
</body>
</html>
