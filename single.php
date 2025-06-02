<?php get_header(); ?>
<main>
  <section class="kv">
    <div class="kv-img"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/kv_news-pc.jpg" alt="キービジュアル画像"> </div>
    <div class="kv-cnt">
      <div class="header__breadcrumb-wrap pc-block" style="visibility: hidden;">
        <div class="header__breadcrumb"> <?php echo get_the_date('Y.m.d'); ?>　|　
          <?php the_category(', '); ?>
        </div>
      </div>
      <p class="font-wb">ニュース</p>
    </div>
  </section>
  <section class="news-sec">
    <div class="news-sec-cnt">
      <div class="news-bg">
        <div class="news-bg-in inner-800">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         
          <div class="news-outer">
            <div class="news-wrapper">
              <article><p><?php the_time('Y.m.d'); ?></p>
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
                <p class="news-txt">
                  <?php the_content(); ?>
                </p>
              </article>
            </div>
          </div>
          <?php endwhile; else : ?>
          <p>投稿が見つかりませんでした。</p>
          <?php endif; ?>
        </div>
        </div>  
      </div>
   
  <div>
    <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
  </div>

  <div class="btn-cnt"> <a href="<?php echo esc_url(home_url('/')); ?>news" class="btn-01">ニュースの一覧を見る</a> </div>
</section>
</main>
<?php get_footer(); ?>
