import { lazyLoad } from "../../ts/utils";

const pageTiles = document.querySelectorAll(".page-tile") as NodeListOf<HTMLLIElement>;

for (const pageTile of pageTiles) {
  const pageTileImage = pageTile.querySelector("img") as HTMLImageElement;
  lazyLoad(pageTileImage);
}
