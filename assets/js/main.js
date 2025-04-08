// JavaScript Document


$(function () {
    // スクロールでヘッダー固定＆白背景に変更
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 10) {
        $("#header").addClass("fixed");
      } else {
        $("#header").removeClass("fixed");
      }
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
        // ハンバーガーメニュー開閉
        $('#hamburger .icon').on('click', function () {
          let isOpen = $('#hamburger-nav').is(':visible');
          if (!isOpen) {
            // メニューが非表示のときに開く
            $('#hamburger-nav').fadeIn(300);
            $('.hamburger-icon.open').fadeOut(150);
            setTimeout(() => {
              $('.hamburger-icon.close').fadeIn(150);
            }, 150);
            
            // メニューが開いた状態でもアコーディオンの状態をリセット（すべて閉じる）
            $('.accordion-item').removeClass('active').find('.accordion-content').stop(true, true).slideUp(200);
          } else {
            // メニューが表示されているときに閉じる
            $('#hamburger-nav').fadeOut(300);
            $('.hamburger-icon.close').fadeOut(150);
            setTimeout(() => {
              $('.hamburger-icon.open').fadeIn(150);
            }, 150);
          }
        });
      
        // アコーディオン開閉
        $('.accordion-header').on('click', function () {
          const parent = $(this).closest('.accordion-item'); // 親アイテムを選択
      
          // 他のアコーディオンを閉じる（閉じたアイテムの表示を更新）
          $('.accordion-item').not(parent).removeClass('active').find('.accordion-content').stop(true, true).slideUp(200);
      
          // 現在クリックされたアイテムを開閉
          parent.toggleClass('active');
          parent.find('.accordion-content').stop(true, true).slideToggle(200);
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
  

