const toggle = document.querySelector('[data-navigation-toggle]');
const navigation = document.querySelector('nav');

const handleClick = () => {
  navigation.classList.toggle(
    'navigation-expanded',
    !navigation.classList.contains('navigation-expanded')
  );
};

toggle.addEventListener('click', handleClick);
