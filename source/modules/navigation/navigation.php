<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<nav class="navigation">
  <ul class="navigation-list">
    <li class="navigation-item">
      <@ with '/' @>
        <a href="@{ url }" class="navigation-link">
          <img
            src="/packages/agrocorner-theme/source/img/agrocorner-logo.svg"
            class="navigation-logo"
            loading="lazy"
            alt=""
          >
          <span class="screen-reader-only">@{ title }</span>
        </a>
      <@ end @>
    </li>
    <li class="navigation-item">
      <button
        class="navigation-toggle-mobile"
        aria-label="Navigation ein- und ausblenden"
        data-navigation-toggle
      ></button>
    </li>
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
            <@ if @{ :currentPath } @>navigation-link-current<@ end @>
          "
        >@{ title }</a>
      </li>
    <@ end @>
  </ul>
</nav>
