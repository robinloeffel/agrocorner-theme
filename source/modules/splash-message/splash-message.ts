const message = document.querySelector<HTMLDivElement>(".splash-message");
const hide = window.sessionStorage.getItem("hideSplashMessage") === "true";

if (message) {
  if (hide) {
    message.remove();
  } else {
    const closeButton = message.querySelector<HTMLButtonElement>(".splash-message-close");

    const close = () => {
      message.addEventListener("transitionend", () => {
        message.remove();
      });

      window.sessionStorage.setItem("hideSplashMessage", "true");
      message.classList.remove("splash-message-visible");
    };

    const closeViaKeyboard = ({ key }: KeyboardEvent) => {
      if (key === "Escape") {
        close();
      }
    };

    const show = () => {
      message.classList.add("splash-message-visible");
    };

    closeButton?.addEventListener("click", close, { once: true });
    window.addEventListener("keydown", closeViaKeyboard, { once: true });
    window.addEventListener("load", show, { once: true });
  }
}
