<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<footer class="footer">
  <img
    src="/packages/agrocorner-theme/source/img/agrocorner-pflaenzli.svg"
    class="footer-decoration"
    loading="lazy"
    alt=""
  >
  <div class="footer-column">
    <span class="footer-column-heading">@{ contact | def('Kontakt') }</span>
    <p class="footer-column-paragraph footer-column-paragraph-conserve-breaks">@{ textContactAddress }</p>
    <p class="footer-column-paragraph">
      Telefon: <a href="tel:@{ phoneNumber }">@{ phoneNumber }</a><br>
      E-Mail: <a href="mailto:@{ emailAddress }">@{ emailAddress }</a><br>
      <a href="@{ urlInstagram }" class="social-link">
        <img
          src="/packages/agrocorner-theme/source/img/instagram.svg"
          class="social-icon"
          loading="lazy"
          alt=""
        >
        Instagram
      </a> / <a href="@{ urlFacebook }" class="social-link">
        <img
          src="/packages/agrocorner-theme/source/img/facebook.svg"
          class="social-icon"
          loading="lazy"
          alt=""
        >
        Facebook
      </a>
    </p>
  </div>
  <div class="footer-column">
    <span class="footer-column-heading">@{ hours | def('Öffnungszeiten') }</span>
    <p class="footer-column-paragraph footer-column-paragraph-conserve-breaks">@{ textHoursRegular }</p>
    <p class="footer-column-paragraph footer-column-paragraph-conserve-breaks">@{ textHoursSummer }</p>
  </div>
  <div class="footer-column">
    <span class="footer-column-heading">@{ where | def('So finden Sie uns') }</span>
    <a href="@{ urlLocationPlan }" class="footer-map-link">
      <span class="screen-reader-only">@{ labelUrlLocationPlan | def('Hier finden Sie uns auf Google Maps.') }</span>
      <img
        src="@{ imageLocationPlan }"
        class="footer-map"
        loading="lazy"
        alt=""
      >
    </a>
  </div>
  <div class="footer-column">
    <span class="footer-column-heading">@{ overview | def('Übersicht') }</span>
    <ul class="footer-navigation">
      <@ with "/" @>
        <li class="footer-navigation-item">
          <a href="@{ url }" class="footer-navigation-link">@{ title }</a>
        </li>
      <@ end @>
      <@ newPagelist {
        type: 'children',
        context: '/'
      } @>
      <@foreach in pagelist @>
        <li class="footer-navigation-item">
          <a href="@{ url }" class="footer-navigation-link">@{ title }</a>
        </li>
      <@ end @>
    </ul>
  </div>
</footer>
