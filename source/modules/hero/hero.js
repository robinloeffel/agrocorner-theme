const heroText = document.querySelector('.hero-text');

if (heroText) {
  window.addEventListener('load', () => {
    heroText.classList.add('hero-text-visible');
  });
}
