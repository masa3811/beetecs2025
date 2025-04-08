// JavaScript Document

 // スクロールでヘッダー固定＆白背景に変更
 const header = document.querySelector('header');
 const scrollposition = 100; 
 
 window.addEventListener('scroll', () => {
   if (window.scrollY > scrollposition) {
     header.classList.add('fixed');
   } else {
     header.classList.remove('fixed');
   }
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
      // ハンバーガーメニュー開閉
      $('#hamburger .icon').on('click', function () {
        let isOpen = $('#hamburger-nav').css('display') === 'flex'; // displayプロパティを確認
        
        if (!isOpen) {
          $('#hamburger-nav').css('display', 'flex').hide().fadeIn(500); // メニューを表示（fadeInを使用）
          $('.hamburger-icon.open').fadeOut(150); // 開いたアイコンをフェードアウト
          setTimeout(() => {
            $('.hamburger-icon.close').fadeIn(150); // 閉じたアイコンをフェードイン
          }, 150);
    
          // 👇 ハンバーガーを開いたときにアコーディオンをすべて閉じる
          $('.accordion-item').removeClass('active');
          $('.accordion-content').stop(true, true).slideUp(300); // アコーディオンを全て閉じる
        } else {
          $('#hamburger-nav').fadeOut(500, function () {
            $(this).css('display', 'none'); // メニューを非表示
          });
          $('.hamburger-icon.close').fadeOut(150); // 閉じたアイコンをフェードアウト
          setTimeout(() => {
            $('.hamburger-icon.open').fadeIn(150); // 開いたアイコンをフェードイン
          }, 150);
        }
      });
    
      // アコーディオン開閉
      $('.accordion-header').on('click', function () {
        const parent = $(this).closest('.accordion-item');
    
        // アコーディオンメニューの切り替え
        $('.accordion-item').not(parent).removeClass('active').find('.accordion-content').stop(true, true).slideUp(300);
        parent.toggleClass('active');
        parent.find('.accordion-content').stop(true, true).slideToggle(300);
      });
    });
    

 

// * === タブ  ===
document.querySelectorAll(".tab").forEach(tab => {
    tab.addEventListener("click", () => {
      const index = tab.getAttribute("data-index");
  
      // タブ切り替え
      document.querySelectorAll(".tab").forEach(t => t.classList.remove("active"));
      tab.classList.add("active");
  
      // コンテンツ切り替え
      document.querySelectorAll(".content").forEach((c, i) => {
        c.classList.toggle("show", i == index);
      });
    });
  });
  

