import { lazyLoad } from "../../ts/utils";

const pageTileImages = [
  ...document.querySelectorAll<HTMLLinkElement>(".page-tile")
].map(pageTile => pageTile.querySelector("img")).filter(Boolean);

for (const pageTileImage of pageTileImages) {
  lazyLoad(pageTileImage);
}
