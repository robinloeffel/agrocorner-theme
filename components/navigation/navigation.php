<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<div class="navigation">
	<nav class="navigation-bar">
		<ul class="navigation-list">
      <@ newPagelist {
        type: 'children',
        context: '/'
      } @>
      <@foreach in pagelist @>
        <li class="navigation-item">
          <a href="@{ url }" class="navigation-link">
            <@ if @{ :i } = 1 @>
              <@ with @{ imageLogo } @>
                <img src="@{ :file }" alt="@{ :caption }" class="navigation-logo">
              <@ end @>
            <@ else @>
              @{ title }
            <@ end @>
          </a>
        </li>
      <@ end @>
		</ul>
	</nav>

	<script src="/packages/agrocorner-theme/components/navigation/navigation.js"></script>
	<link rel="stylesheet" href="/packages/agrocorner-theme/components/navigation/navigation.css">
</div>
