const navigation = document.querySelector('.navigation');
const toggle = navigation.querySelector('[data-navigation-toggle]');

toggle.addEventListener('click', () => {
  window.requestAnimationFrame(navigation.classList.toggle(
    'navigation-expanded',
    !navigation.classList.contains('navigation-expanded')
  ));
});

const setMobileStyles = () => {
  if (window.matchMedia('(max-width: 1000px)').matches) {
    navigation.style.setProperty(
      '--mobile-navigation-links',
      navigation.firstElementChild.childElementCount - 2
    );

    navigation.style.setProperty(
      '--mobile-navigation-link-height',
      `${navigation.firstElementChild.lastElementChild.clientHeight }px`
    );
  } else {
    navigation.style.removeProperty('--mobile-navigation-links');
    navigation.style.removeProperty('--mobile-navigation-link-height');
  }
};

window.addEventListener('resize', setMobileStyles);
setMobileStyles();
