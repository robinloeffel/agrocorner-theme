<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ newPagelist {
  sort: 'date asc',
  type: 'children'
} @>
<@ if @{ :pagelistCount } > 1 @>
  <ul class="page-tiles">
    <@foreach in pagelist @>
      <li
        class="
          page-tile
          <@if @{ checkboxSpanTwo }@>page-tile-span-two<@ end @>
        "
      >
        <a class="page-link" href="@{ url }">
          <span class="page-title">@{ title }</span>
          <@ with @{ imageHero } @>
            <img src="@{ :file }" alt="@{ :caption }" class="page-hero" loading="lazy">
          <@ end @>
        </a>
      </li>
    <@ end @>
  </ul>
  <link rel="stylesheet" href="/packages/agrocorner-theme/components/page-tiles/page-tiles.css">
<@ end @>
