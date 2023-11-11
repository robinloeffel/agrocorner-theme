import { fakeLazyLoad } from "../../ts/utils";

const imagesToFakeLazyLoad = document.querySelectorAll<HTMLImageElement>(".author-content img");

for (const imageToFakeLazyLoad of imagesToFakeLazyLoad) {
  fakeLazyLoad(imageToFakeLazyLoad);
}
