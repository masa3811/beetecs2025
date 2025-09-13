// JavaScript Document



 // スクロールでヘッダー固定＆白背景に変更
 const header = document.querySelector('#header .wrap');
 const scrollposition = 100; 
 
 window.addEventListener('scroll', () => {
   if (window.scrollY > scrollposition) {
     header.classList.add('fixed');
   } else {
     header.classList.remove('fixed');
   }
 });


//トップに戻る
$(document).ready(function () {
  // トップに戻る動作
  $('.to-top').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 600);
  });
});



/* === リンクscroll === */
$(function() {
    var headerHeight=$("#header").height();
    var urlHash = location.hash;
    if(urlHash) { // 別ページからの遷移時にヘッダーの高さ分アンカーを下げる
        $('body,html').stop().scrollTop(0);
        setTimeout(function(){
            var target = $(urlHash);
            var position = target.offset().top - headerHeight;
            $('body,html').stop().animate({scrollTop:position}, 400);
        }, 100);
    }
    // #で始まるアンカーをクリックした場合に処理
    $('a').click(function() {
        var speed = 400; // ミリ秒
        var href = $(this).attr('href'); // アンカーの値取得
        var target = $(href == '#' || href == '' ? 'html' : href); // 移動先を取得
        var position = target.offset().top - headerHeight; // 移動先を数値で取得+ヘッダーの高さ分下げる
        $('body,html').animate({ scrollTop: position }, speed, 'swing'); // スムーススクロール
        return false;
    });
});

    //ハンバーガーメニュー
    $(document).ready(function () {
      $('#header .accordion-content').hide();
    
      // ハンバーガーメニュー開閉
      $('#header #hamburger .icon').on('click', function () {
        let isOpen = $('#hamburger-nav').css('display') === 'block'; 
        
        if (!isOpen) {
          $('#header #hamburger-nav').css('display', 'block').hide().slideDown(500);
          $('#header .hamburger-icon.open').fadeOut(150); 
          setTimeout(() => {
            $('#header .hamburger-icon.close').fadeIn(150); 
          }, 150);
        } else {
          // メニューを非表示
          $('#header #hamburger-nav').slideUp(500, function () {
            $(this).css('display', 'none'); // メニューを非表示
          });
          $('#header .hamburger-icon.close').fadeOut(150);
          setTimeout(() => {
            $('#header .hamburger-icon.open').fadeIn(150); 
          }, 150);
        }
      });

  $('.accordion-header').on('click', function () {
    const parent = $(this).closest('.accordion-item');

    // アクティブ状態をトグル
    parent.toggleClass('active');

    // アコーディオンを開閉
    parent.find('.accordion-content').stop(true, true).slideToggle(300);
  });
});


 

// * === タブ  ===
  $(function () {
    var tabs = $(".tab"); 
    $(".tab").on("click", function () { 
      $(".active").removeClass("active"); 
      $(this).addClass("active"); 
      var index = tabs.index(this);
      $(".content").removeClass("show").eq(index).addClass("show"); 
    });
  });



//ニュースの余白

function adjustPadding() {
  const newsBgIn = document.querySelector('.news-bg-in');
  const newsBg = document.querySelector('.news-bg');

  if (!newsBgIn || !newsBg) return;

  if (window.innerWidth < 600) {
    // スマホは固定で600pxにする
    newsBg.style.paddingBottom = '600px';
  } else {
    // PCだけ元の計算式
    const height = newsBgIn.getBoundingClientRect().height;
    const halfHeight = height / 2;
    const extraSpace = 40;
    const padding = halfHeight + extraSpace;
    newsBg.style.paddingBottom = padding + 'px';
  }
}

window.addEventListener('load', () => {
  setTimeout(adjustPadding, 100);
});
window.addEventListener('resize', adjustPadding);



//お問い合わせ　プライバシーチェック
const checkbox = document.getElementById('agree-check');
const button = document.getElementById('submit-btn');

checkbox.addEventListener('change', () => {
  if (checkbox.checked) {
    button.classList.add('active');
    button.classList.remove('inactive');
  } else {
    button.classList.remove('active');
    button.classList.add('inactive');
  }
});





