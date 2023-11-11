const navigation = document.querySelector<HTMLElement>(".navigation")!;
const toggle = navigation.querySelector<HTMLButtonElement>("[data-navigation-toggle]")!;

toggle.addEventListener("click", () => {
  navigation.classList.add("navigation-animating");

  navigation.classList.toggle(
    "navigation-expanded",
    !navigation.classList.contains("navigation-expanded")
  );

  navigation.addEventListener("transitionend", () => {
    navigation.classList.remove("navigation-animating");
  }, { once: true });
});

const setMobileStyles = () => {
  navigation.style.setProperty(
    "--mobile-navigation-links",
    navigation.firstElementChild.childElementCount - 2
  );

  navigation.style.setProperty(
    "--mobile-navigation-link-height",
    window.getComputedStyle(navigation.firstElementChild.lastElementChild).height
  );
};

setMobileStyles();
