const fadeInHandleLoad = ({ target }) => {
  target.classList.add('page-tile-image-visible');
};
const fadeInHandleIntersect = (entries, observer) => {
  entries.forEach(({ target, isIntersecting }) => {
    if (isIntersecting) {
      observer.unobserve(target);
      target.addEventListener('load', fadeInHandleLoad);
      target.src = target.dataset.src;
      delete target.dataset.src;
    }
  });
};
const fadeInObserver = new IntersectionObserver(fadeInHandleIntersect, {
  threshold: .5
});

export const fadeIn = target => {
  fadeInObserver.observe(target);
};
