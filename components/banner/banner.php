<div class="banner">
  <@ with @{ imageHero } @>
    <style>
      .banner {
        background: url(@{ :file });
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
      }
    </style>
  <@ end @>
</div>
