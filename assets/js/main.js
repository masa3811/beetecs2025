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
      // 初期状態でアコーディオンの内容はすべて非表示にする
      $('#header .accordion-content').hide();
    
      // ハンバーガーメニュー開閉
      $('#header #hamburger .icon').on('click', function () {
        let isOpen = $('#hamburger-nav').css('display') === 'block'; // displayプロパティを確認
        
        if (!isOpen) {
          // メニューを表示 (最初に display: none; から display: flex; に変更)
          $('#header #hamburger-nav').css('display', 'block').hide().slideDown(500);
          $('#header .hamburger-icon.open').fadeOut(150); // 開いたアイコンをフェードアウト
          setTimeout(() => {
            $('#header .hamburger-icon.close').fadeIn(150); // 閉じたアイコンをフェードイン
          }, 150);
        } else {
          // メニューを非表示
          $('#header #hamburger-nav').slideUp(500, function () {
            $(this).css('display', 'none'); // メニューを非表示
          });
          $('#header .hamburger-icon.close').fadeOut(150); // 閉じたアイコンをフェードアウト
          setTimeout(() => {
            $('#header .hamburger-icon.open').fadeIn(150); // 開いたアイコンをフェードイン
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

  const height = newsBgIn.getBoundingClientRect().height;  // .news-bg-in の高さを取得
  const halfHeight = height / 2;  // 高さの半分

  // 画面幅によって余裕のサイズを変更
  const extraSpace = window.innerWidth < 600 ? 20 : 40;  // 600px 未満なら余裕20px、それ以上なら40px

  // 高さの半分 + 余裕を計算
  const padding = halfHeight + extraSpace;

  // 計算した余白を .news-bg に適用
  newsBg.style.paddingBottom = padding + 'px';
}

window.addEventListener('load', () => {
  setTimeout(adjustPadding, 100);  // ページ読み込み後に実行
});
window.addEventListener('resize', adjustPadding);  // リサイズ時にも調整





