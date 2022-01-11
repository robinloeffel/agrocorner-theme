const navigation = document.querySelector('nav');
const toggle = navigation.querySelector('[data-navigation-toggle]');
const { childElementCount: items } = navigation.firstElementChild;

const style = document.createElement('style');
style.textContent = `:root{--mobile-navigation-items:${items};}`;
document.body.append(style);

const handleClick = () => {
  window.requestAnimationFrame(() => {
    navigation.classList.toggle(
      'navigation-expanded',
      !navigation.classList.contains('navigation-expanded')
    );
  });
};

toggle.addEventListener('click', handleClick);
