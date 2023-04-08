const heroText = document.querySelector(".hero-text") as HTMLDivElement;

if (heroText) {
  window.addEventListener("load", () => {
    heroText.classList.add("hero-text-visible");
  });
}
