
/*==================================================
** top-top
==================================================*/
document.addEventListener("DOMContentLoaded", function () {
  const topBtn = document.getElementById("pagetop-btn");

  // 最初にボタンを非表示にする
  topBtn.style.display = "none";

  // スクロールイベント
  window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
      topBtn.style.display = "block";
    } else {
      topBtn.style.display = "none";
    }
  });

  // クリックイベントでトップへスクロール
  topBtn.addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});


/*==================================================
** hamburger
==================================================*/
        document.getElementById("ham_icon").addEventListener("click", function() {
            var menu = document.getElementById("menu");
            var icon = document.getElementById("ham_icon");

            if (menu.style.display === "none" || menu.style.display === "") {
                // メニューを開く
                menu.style.display = "block";
                setTimeout(function() {
                    menu.style.opacity = "1";
                    menu.style.transform = "translateY(0)";
                }, 10);
                icon.src = "./assets/img/common/ham-close.png"; // アイコン変更（即時）
            } else {
                // メニューを閉じる
                menu.style.opacity = "0";
                menu.style.transform = "translateY(-10px)";
                setTimeout(function() {
                    menu.style.display = "none";
                }, 500);
                icon.src = "./assets/img/common/ham-open.png"; // アイコン変更（即時）
            }
        });

        // 事業案内の▼をクリックしたときにサブメニューを表示/非表示
        var submenuToggles = document.querySelectorAll(".submenu-toggle");

        submenuToggles.forEach(function(toggle) {
            toggle.addEventListener("click", function() {
                var submenu = this.nextElementSibling;
                if (submenu && submenu.classList.contains("submenu")) {
                    if (submenu.classList.contains("open")) {
                        // サブメニューを閉じる
                        submenu.style.height = "0px";
                        submenu.style.opacity = "0";
                        submenu.style.marginTop = "0px";
                        setTimeout(function() {
                            submenu.classList.remove("open");
                        }, 300);
                    } else {
                        // サブメニューを開く
                        submenu.classList.add("open");
                        setTimeout(function() {
                            submenu.style.height = "100px";
                            submenu.style.opacity = "1";
                            submenu.style.marginTop = "10px";
                        }, 10);
                    }
                }
            });
        });

