const toggle = document.querySelector('[data-navigation-toggle]');
const navigation = document.querySelector('nav');

const handleClick = () => {
  navigation.classList.toggle(
    'navigation-expanded',
    !navigation.classList.contains('navigation-expanded')
  );
};

const injectStyle = () => {
  const style = document.createElement('style');
  const items = navigation.querySelectorAll('.navigation-item').length;

  style.textContent = `:root{--mobile-navigation-items:${items}}`;
  document.body.append(style);
};

toggle.addEventListener('click', handleClick);

injectStyle();
