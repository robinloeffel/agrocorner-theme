const lazyLoadHandleLoad = ({ target }) => {
  target.classList.add('page-tile-image-visible');
};
const lazyLoadHandleIntersect = (entries, observer) => {
  entries.forEach(({ target, isIntersecting }) => {
    if (isIntersecting) {
      observer.unobserve(target);

      target.addEventListener('load', lazyLoadHandleLoad);
      target.src = target.dataset.src;
      delete target.dataset.src;
    }
  });
};
const lazyLoadObserver = new IntersectionObserver(lazyLoadHandleIntersect, {
  threshold: .5
});

const fakeLazyLoadHanldeIntersect = (entries, observer) => {
  entries.forEach(({ target, isIntersecting }) => {
    if (isIntersecting) {
      observer.unobserve(target);

      target.style.removeProperty('opacity');
      target.style.removeProperty('transform');
    }
  });
};

const fakeLazyLoadObserver = new IntersectionObserver(fakeLazyLoadHanldeIntersect, {
  threshold: .5
});

/**
 * fakeLazyLoad
 * @param {Element} target
 */
export const fakeLazyLoad = target => {
  target.style.setProperty('opacity', '0');
  target.style.setProperty('transform', 'translateY(10px)');
  target.style.setProperty('transition', 'opacity .5s ease-in-out, transform .5s ease-in-out');

  fakeLazyLoadObserver.observe(target);
};

/**
 * lazyLoad
 * @param {Element} target
 */
export const lazyLoad = target => {
  lazyLoadObserver.observe(target);
};
