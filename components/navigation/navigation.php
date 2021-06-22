<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<div class="navigation">
	<nav class="navigation-bar">
		<ul class="navigation-list">
      <li class="navigation-item">
        <@ with "/" @>
          <a href="@{ url }" class="navigation-link">
            <@ with @{ imageLogo } @>
              <img src="@{ :file }" alt="@{ :caption }" class="navigation-logo">
            <@ end @>
          </a>
        <@ end @>
      </li>

      <@ newPagelist {
        type: 'children',
        sort: 'date asc',
        context: '/'
      } @>
      <@foreach in pagelist @>
        <li class="navigation-item">
          <a href="@{ url }" class="navigation-link">@{ title }</a>
        </li>
      <@ end @>
		</ul>
	</nav>

	<script src="/packages/agrocorner-theme/components/navigation/navigation.js"></script>
	<link rel="stylesheet" href="/packages/agrocorner-theme/components/navigation/navigation.css">
</div>
