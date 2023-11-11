const message = document.querySelector<HTMLDivElement>(".splash-message");

if (message) {
  if (window.sessionStorage.getItem("hideSplashMessage") === "true") {
    message.remove();
  } else {
    const closeButton = message.querySelector<HTMLButtonElement>(".splash-message-close")!;

    const close = () => {
      message.addEventListener("transitionend", () => {
        message.remove();
      });

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
