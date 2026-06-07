<?php
/**
 * Main Template File (Blog Archive)
 *
 * @package AAWAI
 */

get_header();
?>

<main style="padding-top: 100px; min-height: 100vh; background: #05060a; color: #fff;">
    <div class="blog-archive-container" style="max-width: 1200px; margin: 0 auto; padding: clamp(40px, 6vw, 100px) clamp(20px, 4vw, 40px);">
        <h1 class="blog-archive-heading" style="font-size: clamp(30px, 4vw, 60px); font-weight: 700; margin-bottom: clamp(24px, 3vw, 40px); text-align: center; color: #fff;">
            ブログ
        </h1>
        
        <?php if (have_posts()) : ?>
            <div class="blog-posts-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: clamp(20px, 3vw, 40px); margin-bottom: 40px;">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="blog-post-card" style="background: #1E1E2F; border-radius: 12px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" style="display: block; overflow: hidden;">
                                <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 200px; object-fit: cover; transition: transform 0.3s ease;', 'alt' => get_the_title())); ?>
                            </a>
                        <?php endif; ?>
                        <div style="padding: clamp(16px, 2vw, 24px);">
                            <h2 style="font-size: clamp(18px, 2vw, 24px); font-weight: 700; margin-bottom: 12px; line-height: 1.4;">
                                <a href="<?php the_permalink(); ?>" style="color: #fff; text-decoration: none; transition: color 0.3s ease;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="post-excerpt" style="font-size: clamp(14px, 1.5vw, 16px); color: #ccc; line-height: 1.6; margin-bottom: 16px;">
                                <?php echo wp_trim_words(get_the_excerpt() ? get_the_excerpt() : get_the_content(), 25); ?>
                            </div>
                            <div class="post-meta" style="display: flex; align-items: center; gap: 12px; font-size: clamp(12px, 1.2vw, 14px); color: #888;">
                                <time datetime="<?php echo get_the_date('c'); ?>" style="color: #888;">
                                    <?php echo get_the_date('Y年 n月 j日'); ?>
                                </time>
                                <?php if (get_the_category()) : ?>
                                    <span style="color: #6D4BFF;"><?php echo get_the_category()[0]->name; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="blog-pagination" style="display: flex; justify-content: center; align-items: center; gap: 12px; margin-top: 40px;">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('← 前へ', 'aawai'),
                    'next_text' => __('次へ →', 'aawai'),
                    'screen_reader_text' => __('投稿ナビゲーション', 'aawai'),
                ));
                ?>
            </div>
        <?php else : ?>
            <div class="no-posts-message" style="text-align: center; padding: 60px 20px;">
                <h2 style="font-size: clamp(24px, 3vw, 36px); font-weight: 600; margin-bottom: 16px; color: #fff;">
                    まだ投稿がありません
                </h2>
                <p style="font-size: clamp(16px, 2vw, 20px); color: #888; line-height: 1.6;">
                    投稿が公開され次第、ここに表示されます。
                </p>
            </div>
        <?php endif; ?>
    </div>
</main>

<style>
.blog-post-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(109, 75, 255, 0.2);
}

.blog-post-card:hover img {
    transform: scale(1.05);
}

.blog-post-card a:hover {
    color: #6D4BFF;
}

.blog-pagination .page-numbers {
    display: inline-block;
    padding: 10px 16px;
    background: #1E1E2F;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-size: 14px;
}

.blog-pagination .page-numbers:hover,
.blog-pagination .page-numbers.current {
    background: #6D4BFF;
    color: #fff;
}

@media (max-width: 768px) {
    .blog-posts-grid {
        grid-template-columns: 1fr !important;
    }
}
</style>

<?php
get_footer();

