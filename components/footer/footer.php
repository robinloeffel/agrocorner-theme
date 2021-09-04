<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<footer class="footer">
  <img src="/packages/agrocorner-theme/img/agrocorner-pflaenzli.svg" alt="" class="footer-decoration">
  <div class="footer-column">
    <span class="footer-column-heading">@{ contact | def('Kontakt') }</span>
    <p class="footer-column-paragraph footer-column-paragraph-conserve-breaks">@{ textContactAddress }</p>
    <p class="footer-column-paragraph">
      Telefon: <a href="tel:@{ phoneNumber }">@{ phoneNumber }</a><br>
      Fax: <a href="tel:@{ faxNumber }">@{ faxNumber }</a><br>
      E-Mail: <a href="mailto:@{ emailAddress }">@{ emailAddress }</a>
    </p>
  </div>
  <div class="footer-column">
    <span class="footer-column-heading">@{ hours | def('Öffnungszeiten') }</span>
    <p class="footer-column-paragraph footer-column-paragraph-conserve-breaks">@{ textHoursRegular }</p>
    <p class="footer-column-paragraph footer-column-paragraph-conserve-breaks">@{ textHoursSummer }</p>
  </div>
  <div class="footer-column">
    <span class="footer-column-heading">@{ where | def('So finden Sie uns') }</span>
    <iframe src="https://www.google.ch/maps/embed?pb=!1m14!1m8!1m3!1d21768.213447271377!2d7.1588054074706875!3d47.000449072392065!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x980966be92540831!2sAgrocorner%20AG!5e0!3m2!1sen!2sch!4v1624976527488!5m2!1sen!2sch" loading="lazy" class="footer-map"></iframe>
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
