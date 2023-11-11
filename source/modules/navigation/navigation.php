<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<nav class="navigation">
  <ul class="navigation-list">
    <li class="navigation-group controls">
      <@ with '/' @>
        <a href="@{ url }" class="navigation-link home">
          <img
            src="/packages/agrocorner-theme/source/img/agrocorner-logo.svg"
            class="navigation-logo"
            loading="lazy"
            alt=""
          >
          <span class="sr-only">@{ title }</span>
        </a>
      <@ end @>
      <button class="navigation-toggle-mobile" data-navigation-toggle>
        <span class="sr-only">Navigation ein- und ausblenden</span>
        <img src="/packages/agrocorner-theme/source/img/arrow-down.svg" alt="">
      </button>
    </li>
    <li class="navigation-group items">
      <ul class="navigation-group-list">
        <@ newPagelist {
          type: 'children',
          context: '/'
        } @>
        <@foreach in pagelist @>
          <li class="navigation-item">
            <a
              href="@{ url }"
              class="
                navigation-link
                <@ if @{ :currentPath } @>current<@ end @>
              "
            >@{ title }</a>
          </li>
        <@ end @>
      </ul>
    </li>
  </ul>
</nav>
