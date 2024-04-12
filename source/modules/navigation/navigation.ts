const navigation = document.querySelector<HTMLElement>(".navigation");
const toggle = navigation?.querySelector<HTMLButtonElement>("[data-navigation-toggle]");

const toggleMobileNavigation = () => {
  navigation?.classList.toggle(
    "expanded",
    !navigation.classList.contains("expanded")
  );
};

toggle?.addEventListener("click", toggleMobileNavigation);
