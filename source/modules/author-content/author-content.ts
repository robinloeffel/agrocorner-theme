import { fakeLazyLoad } from "../../ts/utils";

const imagesToFakeLazyLoad = document.querySelectorAll(".author-content img") as NodeListOf<HTMLImageElement>;

for (const imageToFakeLazyLoad of imagesToFakeLazyLoad) {
  fakeLazyLoad(imageToFakeLazyLoad);
}
