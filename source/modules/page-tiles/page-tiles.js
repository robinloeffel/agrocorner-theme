import { lazyLoad } from '../../js/utils';

const pageTiles = document.querySelectorAll('.page-tile');

pageTiles.forEach(pageTile => {
  const pageTileImage = pageTile.querySelector('img');
  lazyLoad(pageTileImage);
});
