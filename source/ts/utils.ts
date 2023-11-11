const lazyLoadHandleLoad = ({ target }: Event) => {
  (target as HTMLElement).classList.add("page-tile-image-visible");
};

const lazyLoadObserver = new IntersectionObserver((entries, observer) => {
  for (const { target, isIntersecting } of entries) {
    if (isIntersecting) {
      observer.unobserve(target);

      target.addEventListener("load", lazyLoadHandleLoad);
      target.src = target.dataset.src;
      delete target.dataset.src;
    }
  }
}, { threshold: 0.5 });

const fakeLazyLoadObserver = new IntersectionObserver((entries, observer) => {
  for (const { target, isIntersecting } of entries) {
    if (isIntersecting) {
      observer.unobserve(target);

      target.style.removeProperty("opacity");
      target.style.removeProperty("transform");
    }
  }
}, { threshold: 0.5 });

export const fakeLazyLoad = (target: HTMLElement) => {
  target.style.setProperty("opacity", "0");
  target.style.setProperty("transform", "translateY(10px)");
  target.style.setProperty("transition", "opacity .5s ease-in-out, transform .5s ease-in-out");

  fakeLazyLoadObserver.observe(target);
};

export const lazyLoad = (target: HTMLElement) => {
  lazyLoadObserver.observe(target);
};
