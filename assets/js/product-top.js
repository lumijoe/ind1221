// product-top.js
var mySwiper = new Swiper('.swiper-container', {
    speed: 8000,
    slidesPerView: '1',
    loop: true,
    allowTouchMove: false, // スワイプ操作をできないようにする
    autoplay: {
      delay: 0, // 0にすることで流れ続けるようになる
      disableOnInteraction: false,
    },
  })