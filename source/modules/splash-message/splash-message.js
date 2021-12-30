const message = document.querySelector('.splash-message');

// check if there's a splash message on the dom
if (message) {
  if (window.sessionStorage.getItem('hideSplashMessage')) {
    // if there is, but the user has already closed it during this session, remove it
    message.remove();
  } else {
    // if there is and the user hasn't clicked it away, initialize the module
    const closeButton = document.querySelector('.splash-message-close');

    const close = () => {
      window.sessionStorage.setItem('hideSplashMessage', true);

      message.addEventListener('transitionend', () => {
        message.remove();
      });

      window.requestAnimationFrame(() => {
        message.classList.remove('splash-message-visible');
      });
    };

    const closeViaKeyboard = event => {
      if (event.key === 'Escape') {
        window.removeEventListener('keydown', closeViaKeyboard);
        close();
      }
    };

    const show = () => {
      window.requestAnimationFrame(() => {
        message.classList.add('splash-message-visible');
      });
    };

    closeButton.addEventListener('click', close);
    window.addEventListener('keydown', closeViaKeyboard);
    window.addEventListener('load', show);
  }
}
