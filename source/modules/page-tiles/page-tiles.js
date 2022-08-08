import { fadeIn } from '../../js/utils';

const pageTiles = document.querySelectorAll('.page-tile');

if (pageTiles.length > 0) {
  pageTiles.forEach(pageTile => {
    const pageTileImage = pageTile.querySelector('img');
    fadeIn(pageTileImage);
  });
}
