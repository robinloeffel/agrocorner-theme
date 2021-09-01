const hideMessage = !!window.sessionStorage.getItem('hideSplashMessage');
const message = document.querySelector('.splash-message');

if (hideMessage) {
  message.remove();
} else {
  const closeButton = document.querySelector('.splash-message-close');

  const close = () => {
    message.classList.add('splash-message-fading-out');
    window.sessionStorage.setItem('hideSplashMessage', true);

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
}
