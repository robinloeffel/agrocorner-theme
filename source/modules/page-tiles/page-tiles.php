<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<@ newPagelist {
  type: 'children'
} @>
<@ if @{ :pagelistCount } > 0 @>
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
          <img data-src="@{ imagePageTile }" alt="" class="page-tile-image">
        </a>
      </li>
    <@ end @>
  </ul>
<@ end @>
