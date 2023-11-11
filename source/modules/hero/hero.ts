const heroText = document.querySelector<HTMLDivElement>(".hero-text")!;

if (heroText) {
  window.addEventListener("load", () => {
    heroText.classList.add("hero-text-visible");
  });
}
