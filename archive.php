<?php
get_header();

$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$newslist = new WP_Query( array(
  'post_type' => 'post',
  'posts_per_page' => 8,
  'post_status' => 'publish',
  'paged' => $paged
) );
?>
<main>
  <section class="kv">
    <div class="kv-img"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/news/kv_news-pc.jpg" alt="キービジュアル画像"> </div>
    <div class="kv-cnt">
      <div class="header__breadcrumb-wrap pc-block" style="visibility: hidden;">
        <div class="header__breadcrumb">
          <?php post_type_archive_title(); ?>
        </div>
      </div>
      <p class="font-wb">ニュース</p>
    </div>
  </section>
  <section class="news-sec">
    <div class="news-sec-cnt">
      <div class="news-bg">
        <div class="news-bg-in inner-800">
          <?php
          // ページ番号取得
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

          // クエリ設定（カテゴリなし・すべての投稿を取得）
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'paged' => $paged
          );
          $the_query = new WP_Query( $args );

          if ( $the_query->have_posts() ):
            while ( $the_query->have_posts() ): $the_query->the_post();
          ?>
          <div class="news-outer bb-1">
            <div class="news-wrapper">
              <article>
                <p>
                  <?php the_time('Y.m.d'); ?>
                </p>
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
                <p class="news-txt"> <?php echo wp_trim_words( get_the_content(), 30, '…' ); ?> </p>
              </article>
            </div>
          </div>
          <?php
          endwhile;
          else :
            echo '<p>投稿が見つかりませんでした。</p>';
          endif;
          wp_reset_postdata();
          ?>
        </div>
        <!-- .news-bg-in --> 
         </div>
      <!-- .news-bg --> 
    </div>
    <!-- .news-sec-cnt --> 

  <div class="ptb-1">
    <?php
    if ( function_exists( 'wp_pagenavi' ) ) {
      wp_pagenavi( array( 'query' => $newslist ) );
    }
    wp_reset_postdata();
    ?>
  </div>
    

</section>
</main>
<?php get_footer(); ?>
