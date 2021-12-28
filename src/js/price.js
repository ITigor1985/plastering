import data from './data';

const price = document.querySelector('.price__list');
const galleryImages = galleryItems
  .map(
    galleryItem => `
<a class="gallery__item" href="${galleryItem.original}">
  <img class="gallery__image" src="${galleryItem.preview}" alt="${galleryItem.description}" />
</a>
`,
  )
  .join('');
price.insertAdjacentHTML('beforeend', galleryImages);