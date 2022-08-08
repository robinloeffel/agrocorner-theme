const heroText = document.querySelector('.hero-text');

if (heroText) {
  window.addEventListener('load', () => {
    window.requestAnimationFrame(() => {
      heroText.classList.add('hero-text-visible');
    });
  });
}
