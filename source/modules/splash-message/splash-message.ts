const message = document.querySelector(".splash-message") as HTMLDivElement;

// check if there's a splash message on the dom
if (message) {
  if (window.sessionStorage.getItem("hideSplashMessage")) {
    // if there is, but the user has already closed it during this session, remove it
    message.remove();
  } else {
    // if there is, and the user hasn't clicked it away, initialize the module
    const closeButton = message.querySelector(".splash-message-close") as HTMLButtonElement;

    const close = () => {
      message.addEventListener("transitionend", message.remove);

      window.sessionStorage.setItem("hideSplashMessage", "true");
      message.classList.remove("splash-message-visible");
    };

    const closeViaKeyboard = ({ key }: KeyboardEvent) => {
      if (key === "Escape") {
        window.removeEventListener("keydown", closeViaKeyboard);
        close();
      }
    };

    const show = () => {
      message.classList.add("splash-message-visible");
    };

    closeButton.addEventListener("click", close);
    window.addEventListener("keydown", closeViaKeyboard);
    window.addEventListener("load", show);
  }
}