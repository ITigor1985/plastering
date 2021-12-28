import {dataItems} from './data';

const price = document.querySelector('.services-and-prices__list');
const prices = dataItems.map(dataItem => `
<li class="services-and-prices__list-item">
    <picture>
        <source
          media="(min-width: 1440px)"
          srcset="
            ${dataItem.webp1x1440} 1x,
            ${dataItem.webp2x1440} 2x
          "
          type="image/webp"
        />
        <source
          media="(min-width: 1440px)"
          srcset="
            ${dataItem.jpg1x1440} 1x,
            ${dataItem.jpg2x1440} 2x
          "
        />
        <source
          media="(min-width: 768px)"
          srcset="
          ${dataItem.webp1x768} 1x,
          ${dataItem.webp2x768} 2x
          "
          type="image/webp"
        />
        <source
          media="(min-width: 768px)"
          srcset="
          ${dataItem.jpg1x768} 1x,
          ${dataItem.jpg2x768} 2x
          "
        />
        <source
          media="(max-width: 768px)"
          srcset="
          ${dataItem.webp1xm768} 1x,
          ${dataItem.webp2xm768} 2x
          "
          type="image/webp"
        />
        <source
          media="(max-width: 768px)"
          srcset="
          ${dataItem.jpg1xm768} 1x,
          ${dataItem.jpg2xm768} 2x
          "
        />
        <img class="services-and-prices__list-item-img" loading="lazy" src="" alt="Антибактериальная обработка внутреннего блока кондиционера " />
      </picture>
      <div class="services-and-prices__list-item-wrapper">
      <p class="services-and-prices__list-item-deskription">
        Антибактериальная обработка кондиционера
      </p>
      <p class="services-and-prices__list-item-cost">ОТ 500 ГРН</p>
    </div>
</li>
`).join('');
price.insertAdjacentHTML('beforeend', prices);


            