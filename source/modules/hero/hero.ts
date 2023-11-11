const heroText = document.querySelector<HTMLDivElement>(".hero-text");

window.addEventListener("load", () => {
  heroText?.classList.add("hero-text-visible");
}, { once: true });
