import { fakeLazyLoad } from '../../js/utils';

const imagesToFakeLazyLoad = document.querySelectorAll('.author-content img');

imagesToFakeLazyLoad.forEach(imageToFakeLazyLoad => {
  fakeLazyLoad(imageToFakeLazyLoad);
});
