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
          <h2 class="page-title">@{ title }</h2>
          <@ with @{ imageHero } @>
            <img src="@{ :file }" alt="@{ :caption }" class="page-hero" loading="lazy">
          <@ end @>
        </a>
      </li>
    <@ end @>
  </ul>
<@ end @>
