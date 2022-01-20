/////////////////////////////////////
//TOPページ 
/////////////////////////////////////


//slider-top
var slider = new Swiper('.slider-top', {

  /*
  slidesPerView:1,//画像を何枚表示するか
  spaceBetween: 10,//何ピクセル画像の間隔をあけるか
  */
  spaceBetween: 10,//何ピクセル画像の間隔をあけるか
  loop: true,  //ループ可能（ループモードを有効に）
 // slidesPerView:2,  //スライドを2つ（分）表示
  centeredSlides : true,  //アクティブなスライドを中央に表示
  //effect: 'coverflow',  //スライドのエフェクトを coverflow に


  //自動再生する場合
  autoplay: {
    delay: 5000, //3秒後に次の画像に代わる
    disableOnInteraction: false, 
    },
    //loop: true,//最後の画像までいったらループする
    //ページネーションをつける場合


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    // 768px以上の場合
    768: {
      slidesPerView: 1,
    },
    // 980px以上の場合
    900: {
      slidesPerView: 2,
    },
    // 1200px以上の場合
    1200: {
      slidesPerView: 2,
    }
  },

});

//slider-top-bottom
var slider = new Swiper('.slider-top-bottom', {
 // slidesPerView:5,//画像を何枚表示するか
  spaceBetween: 10,//何ピクセル画像の間隔をあけるか

  //自動再生する場合
  autoplay: {
    delay: 5000, //3秒後に次の画像に代わる
    disableOnInteraction: false, 
    },
    //loop: true,//最後の画像までいったらループする
    //ページネーションをつける場合


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  slidesPerView: 2,

  breakpoints: {
    // 768px以上の場合
    768: {
      slidesPerView: 3,
    },
    // 980px以上の場合
    900: {
      slidesPerView: 3,
    },
    // 1200px以上の場合
    1200: {
      slidesPerView: 5,
    }
  },

});


