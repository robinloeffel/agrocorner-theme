<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<!doctype html>
<html lang="@{ pageLang | def('de') }">
<@ partials/head.php @>
<body>
	<@ modules/navigation/navigation.php @>
  <@ modules/banner/banner.php @>
  <@ modules/author-content/author-content.php @>
  <@ modules/page-tiles/page-tiles.php @>
  <@ modules/footer/footer.php @>
</body>
</html>
