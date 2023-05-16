

/*
jQuery("#js-slider-2").each(function() {
var slideCount = $(this).children('li').length;
var randomStart = Math.floor(Math.random() * slideCount);
    jQuery(this).slick({
    initialSlide: randomStart,
    infinite: true,
    autoplay: true, // 自動再生
    autoplaySpeed: 5000, // 再生速度（ミリ秒設定） 1000ミリ秒=1秒
    infinite: true, // 無限スライド
    arrows: true, // 前・次のボタンを表示する
    dots: true, // ドットナビゲーションを表示する
    appendDots: jQuery('.dots-2'), // ドットナビゲーションの生成位置を変更
    speed: 1000, // スライドさせるスピード（ミリ秒）
    slidesToShow: 1, // 表示させるスライド数
    centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
    centerPadding:"20%",    //追記
   // variableWidth: true, // スライド幅の自動計算を無効化
   // adaptiveHeight: true,

      responsive: [
        {
          breakpoint: 980, // 399px以下のサイズに適用
          settings: {
          slidesToShow: 1,
          variableWidth: true,
          adaptiveHeight: true,
          centerMode: false,
          },
        },
      ],
    });
});
*/


/*
jQuery(function () {
  jQuery("#js-slider-2").slick({
    slidesToShow: 1,
    centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
    centerPadding:"20%",
    responsive: [
      {
        breakpoint: 1024, // 768〜1023px以下のサイズに適用
        settings: {
          slidesToShow: 1,
          centerMode: false,
          centerPadding:false,
        },
      },
      {
        breakpoint: 768, // 480〜767px以下のサイズに適用
        settings: {
          slidesToShow: 1,
          centerMode: false,
          centerPadding:false,
        },
      },
      {
        breakpoint: 480, // 〜479px以下のサイズに適用
        settings: {
          slidesToShow: 1,
          centerMode: false,
          centerPadding:false,
        },
      },
    ],
  });
});
*/





//トップ画像スライダー
/////////////////////////////////////

jQuery("#js-slider-2").each(function() {
var slideCount = $(this).children('li').length;
var randomStart = Math.floor(Math.random() * slideCount);
    jQuery(this).slick({
    initialSlide: randomStart,
    slidesToShow: 1,
    centerMode: true, // slidesToShowが奇数のとき、現在のスライドを中央に表示する
    centerPadding:"20%",
    autoplay: true, // 自動再生
    speed: 100, // スライドさせるスピード（ミリ秒）
    autoplaySpeed: 5000, // 再生速度（ミリ秒設定） 1000ミリ秒=1秒
    infinite: true, // 無限スライド
    arrows: true, // 前・次のボタンを表示する
    //dots: true, // ドットナビゲーションを表示する
    appendDots: jQuery('.dots-2'), // ドットナビゲーションの生成位置を変更
    speed: 1000, // スライドさせるスピード（ミリ秒）

    responsive: [
    
      // {
      //   breakpoint: 1024, // 768〜1023px以下のサイズに適用
      //   settings: {
      //     slidesToShow: 1,
      //     centerMode: false,
      //     centerPadding:false,
      //   },
      // },

      


      {
        breakpoint: 1023, // 480〜767px以下のサイズに適用
        settings: {
          slidesToShow: 1,
          centerMode: false,
          centerPadding:false,
        },
      },
      {
        breakpoint: 480, // 〜479px以下のサイズに適用
        settings: {
          slidesToShow: 1,
          centerMode: false,
          centerPadding:false,
        },
      },
    ],
    });
});



//トップ新着スライダー
/////////////////////////////////////


jQuery("#js-slider-3").each(function() {
var slideCount = $(this).children('li').length;
var randomStart = Math.floor(Math.random() * slideCount);
    jQuery(this).slick({
    
    slidesToShow: 1,
    autoplay: true, // 自動再生
    speed: 100, // スライドさせるスピード（ミリ秒）
    autoplaySpeed: 5000, // 再生速度（ミリ秒設定） 1000ミリ秒=1秒
    infinite: true, // 無限スライド
    speed: 1000, // スライドさせるスピード（ミリ秒）


    });
});


//トップ新着動画バナー
/////////////////////////////////////


jQuery(function($) {
$.fn.extend({
  randomdisplay : function(num) {
    return this.each(function() {
      var chn = $(this).children().hide().length;
      for(var i = 0; i < num && i < chn; i++) {
        var r = parseInt(Math.random() * (chn - i)) + i;
      $(this).children().eq(r).css('display', 'flex').prependTo($(this));
      }
    });
  }
});
$(function(){
  $("[randomdisplay]").each(function() {
  $(this).randomdisplay($(this).attr("randomdisplay"));
  });
});
});


//navigation bar
/////////////////////////////////////

var BGElement = document.getElementById("backdrop");
var body_element = document.getElementsByTagName("body");

function closenaviBtn() {
  document.getElementById("drawer").style.display = "none";
  BGElement.classList.remove("backdrop");
  body_element[0].style.overflow = "none";
  body_element[0].classList.remove("over-flow-hidden");
}

function opennaviBtn() {
  document.getElementById("drawer").style.display = "block";
  BGElement.classList.add("backdrop");
  document.getElementsByClassName("swiper-wrapper")[0];
  body_element[0].classList.add("over-flow-hidden");
}


 var myfunc = function () {
  document.getElementById("drawer").style.display = "none";
  BGElement.classList.remove("backdrop");
  body_element[0].style.overflow = "none";
  body_element[0].classList.remove("over-flow-hidden");
    }


/////////////////////////////////////
//TOPページ
/////////////////////////////////////

$(function () {
  /** hogeクラスを持つ要素に連番でID付与 */
  $(".js-menu").each(function (i) {
    $(this).attr("id", "my_" + i);
  });
});

$(function () {
  /** hogeクラスを持つ要素に連番でID付与 */
  $(".machine-list").each(function (i) {
    $(this).addClass("my_" + i);
  });
});


$(function () {
  // タイトルをクリックすると
  $(".js-menu").on("click", function () {
    // クリックしたタイトル以外のopenクラスを外す(－から＋にする)
    $(".js-menu").not(this).removeClass("open");
    // クリックしたタイトル以外のコンテンツを閉じる
    $(".js-menu").not(this).next().slideUp(300);
    // クリックしたタイトルにopenクラスを付け外しして＋と－を切り替える
    $(this).toggleClass("open");
    // クリックしたタイトルの次の要素(コンテンツ)を開閉
    $(this).next().slideToggle(300);
  });
});



/*
//////////////////////////////////////////////////////////////////
新着ページネーション
*/



jQuery(function() {
  jQuery('.list-group').paginathing({//親要素のclassを記述
      // show item per page
  perPage: 20,
  limitPagination: 3,
  containerClass: 'panel-footer mt-4',
  pageNumbers: true,
  ulClass: 'pagination flex-wrap justify-content-center',

      
  // pageSize: 5,
  // Limiting your pagination number.
  // Value could be boolean or positive integer.
  //limitPagination: false,
  // Enable previous and next button
  prevNext: true,
  // Enable first and last button
  firstLast: true,
  // Previous button text
  prevText: '&laquo;',
  // Next button text
  nextText: '&raquo;',
  // "First button" text
  firstText: '最初',
  // "Last button" text
  lastText: '最後',
  // Extend default container class
  containerClass: 'pagination-container',
  // Extend default <ul> class
  ulClass: 'pagination',
  // Extend <li> class
  liClass: 'page-item',
  // Extend <a> css class
  linkClass: 'page-link',
  // Active link class
  activeClass: 'active',
  // disabled link class,
  disabledClass: 'disable',
  // class or id (eg: .element or #element). append the paginator after certain element
  insertAfter: null,
  // showing current page number of total pages number, to work properly limitPagination must be true
  
  })
});








/*
//////////////////////////////////////////////////////////////////
テスト
*/


