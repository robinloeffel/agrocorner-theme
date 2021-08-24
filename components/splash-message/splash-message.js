const message = document.querySelector('.splash-message');
const closeButton = document.querySelector('.splash-message-close');

const close = () => {
  message.classList.add('splash-message-fading-out');

  message.addEventListener('transitionend', () => {
    message.remove();
  });
};

const show = () => {
  window.requestAnimationFrame(() => {
    message.classList.add('splash-message-visible');
  });
};

closeButton.addEventListener('click', close);
window.addEventListener('load', show);
