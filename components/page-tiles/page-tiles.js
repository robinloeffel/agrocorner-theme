import { hyphenate } from 'hyphen/de';

const titles = document.querySelectorAll('.page-title');

titles.forEach(async title => {
  title.textContent = await hyphenate(title.textContent);
});
