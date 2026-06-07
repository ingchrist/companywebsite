<?php
/**
 * Single Post Template
 *
 * @package AAWAI
 */

get_header();
?>

<main style="padding-top: 100px; min-height: 100vh; background: #05060a; color: #fff;">
    <div class="single-post-container" style="max-width: 900px; margin: 0 auto; padding: clamp(40px, 6vw, 100px) clamp(20px, 4vw, 40px);">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: #1E1E2F; border-radius: 12px; padding: clamp(24px, 4vw, 48px); box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);">
                
                <header class="entry-header" style="margin-bottom: 32px;">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail" style="margin-bottom: 24px; border-radius: 8px; overflow: hidden;">
                            <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; display: block;')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <h1 class="entry-title" style="font-size: clamp(28px, 4vw, 42px); font-weight: 700; margin-bottom: 16px; line-height: 1.3; color: #fff;">
                        <?php the_title(); ?>
                    </h1>
                    
                    <div class="entry-meta" style="display: flex; align-items: center; gap: 16px; font-size: clamp(14px, 1.5vw, 16px); color: #888; margin-bottom: 24px; flex-wrap: wrap;">
                        <time datetime="<?php echo get_the_date('c'); ?>" style="color: #888;">
                            <?php echo get_the_date('Y年 n月 j日'); ?>
                        </time>
                        <?php if (get_the_category()) : ?>
                            <span style="color: #6D4BFF;"><?php echo get_the_category()[0]->name; ?></span>
                        <?php endif; ?>
                        <?php if (get_the_author()) : ?>
                            <span style="color: #888;">by <?php the_author(); ?></span>
                        <?php endif; ?>
                    </div>
                </header>
                
                <div class="entry-content" style="font-size: clamp(16px, 1.8vw, 18px); line-height: 1.8; color: #e5e5e5;">
                    <?php
                    the_content();
                    
                    wp_link_pages(array(
                        'before' => '<div class="page-links" style="margin-top: 32px; padding-top: 24px; border-top: 1px solid #333;">' . __('Pages:', 'aawai'),
                        'after'  => '</div>',
                    ));
                    ?>
                </div>
                
                <?php if (get_the_tags()) : ?>
                    <footer class="entry-footer" style="margin-top: 32px; padding-top: 24px; border-top: 1px solid #333;">
                        <div class="post-tags" style="display: flex; flex-wrap: wrap; gap: 8px;">
                            <?php
                            $tags = get_the_tags();
                            foreach ($tags as $tag) {
                                echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" style="display: inline-block; padding: 6px 12px; background: #2e2e3e; color: #fff; border-radius: 6px; text-decoration: none; font-size: 14px; transition: background 0.3s ease;">' . esc_html($tag->name) . '</a>';
                            }
                            ?>
                        </div>
                    </footer>
                <?php endif; ?>
                
            </article>
            
            <nav class="post-navigation" style="margin-top: 48px; display: flex; justify-content: space-between; gap: 16px;">
                <div class="nav-previous" style="flex: 1;">
                    <?php
                    $prev_post = get_previous_post();
                    if ($prev_post) :
                    ?>
                        <a href="<?php echo get_permalink($prev_post->ID); ?>" style="display: block; padding: 16px; background: #1E1E2F; border-radius: 8px; color: #fff; text-decoration: none; transition: background 0.3s ease;">
                            <span style="font-size: 12px; color: #888; display: block; margin-bottom: 4px;">← 前の投稿</span>
                            <span style="font-weight: 600;"><?php echo get_the_title($prev_post->ID); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                
                <div class="nav-next" style="flex: 1; text-align: right;">
                    <?php
                    $next_post = get_next_post();
                    if ($next_post) :
                    ?>
                        <a href="<?php echo get_permalink($next_post->ID); ?>" style="display: block; padding: 16px; background: #1E1E2F; border-radius: 8px; color: #fff; text-decoration: none; transition: background 0.3s ease;">
                            <span style="font-size: 12px; color: #888; display: block; margin-bottom: 4px;">次の投稿 →</span>
                            <span style="font-weight: 600;"><?php echo get_the_title($next_post->ID); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>
            
            <div style="margin-top: 48px; text-align: center;">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="display: inline-block; padding: 12px 24px; background: #6D4BFF; color: #fff; border-radius: 8px; text-decoration: none; font-weight: 600; transition: background 0.3s ease;">
                    ホームに戻る
                </a>
            </div>
            
        <?php endwhile; ?>
    </div>
</main>

<style>
.post-navigation a:hover {
    background: #2e2e3e !important;
}

.entry-content p {
    margin-bottom: 20px;
}

.entry-content h2,
.entry-content h3,
.entry-content h4 {
    color: #fff;
    margin-top: 32px;
    margin-bottom: 16px;
}

.entry-content a {
    color: #6D4BFF;
    text-decoration: underline;
}

.entry-content a:hover {
    color: #8B68FF;
}

.entry-content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 24px 0;
}

.entry-content ul,
.entry-content ol {
    margin-left: 24px;
    margin-bottom: 20px;
}

.entry-content li {
    margin-bottom: 8px;
}
</style>

<?php
get_footer();

