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
          <div class="header__breadcrumb-wrap pc-block txt-left" style="visibility:visible; padding: 20px 50px 0;">
            <div class="header__breadcrumb"> <?php echo get_the_date('Y.m.d'); ?>　|　
              <?php the_category(', '); ?>
            </div>
          </div>
          <div class="news-outer">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <article <?php post_class(); ?>>
              <?php
              $categories = get_the_category();
              if ( !empty( $categories ) ) {
                echo '<div class="post-category">' . esc_html( $categories[ 0 ]->name ) . '</div>';
              }
              ?>
              <h2 class="news-ttl"> <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a> </h2>
              <div class="news-txt">
                <?php the_content(); ?>
              </div>
            </article>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-cnt"> <a href="<?php echo esc_url(home_url('/')); ?>/news" class="btn-01">ニュースの一覧を見る</a>
ニュースの一覧を見る</a>
</div>
  </section>
  <div>
    <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
  </div>
</main>
<?php get_footer(); ?>
