<?php
/**
 * Home Blog Section Template Part
 *
 * @package AAWAI
 */
?>
<div class="blog">
    <div class="blog-heading">BLOG</div>
    <div class="blog-slider-wrapper">
        <button class="blog-slider-btn blog-slider-btn-left" aria-label="Previous blog">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
        
        <div class="blog-slider">
            <div class="blog-slider-track" id="blogSliderTrack">
                <?php
                $blog_images = array('biz1.jpg', 'biz2.jpg', 'biz3.jpg', 'biz5.jpg', 'biz7.jpg');
                $blog_texts = array(
                    '最新AI技術があなたのビジネスを大きく変革する瞬間を解説します',
                    '日常業務を劇的に効率化する実践的なAI活用ノウハウをご紹介します',
                    '現場で本当に役立つAI導入ステップを具体例とともに説明します',
                    '競争が激化する市場で成功するための最新ビジネス戦略を解説します',
                    '多くの企業が直面する課題をAIでどう解決できるかを詳しく分析します'
                );
                
                $blog_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                
                if ($blog_query->have_posts()) :
                    $index = 0;
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                        $img_index = isset($blog_images[$index]) ? $index : ($index % count($blog_images));
                        ?>
                        <div class="blog-container">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img alt="None Image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $blog_images[$img_index]); ?>">
                            <?php endif; ?>
                            <div class="blog-text"><?php the_title(); ?></div>
                        </div>
                        <?php
                        $index++;
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Fallback content
                    foreach ($blog_images as $idx => $img) :
                        if (isset($blog_texts[$idx])) :
                            ?>
                            <div class="blog-container">
                                <img alt="None Image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $img); ?>">
                                <div class="blog-text"><?php echo esc_html($blog_texts[$idx]); ?></div>
                            </div>
                            <?php
                        endif;
                    endforeach;
                endif;
                ?>
            </div>
        </div>
        
        <button class="blog-slider-btn blog-slider-btn-right" aria-label="Next blog">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</div>

