import { lazyLoad } from "../../ts/utils";

const pageTiles = document.querySelectorAll<HTMLLinkElement>(".page-tile");

for (const pageTile of pageTiles) {
  const pageTileImage = pageTile.querySelector("img")!;
  lazyLoad(pageTileImage);
}
