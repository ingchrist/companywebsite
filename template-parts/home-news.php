<?php
/**
 * Home News Section Template Part
 *
 * @package AAWAI
 */
?>
<div class="viewbox">
    <div class="news">
        <div class="news-heading">NEWS</div>
        <div class="news-container">
            <div class="news-left">
                <div class="news-video">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/girlfriends.jpg'); ?>" alt="None Image">
                    <button class="play-btn">▶</button>
                </div>
                <div class="news-sns col">
                    <div class="sns-text">SNS</div>
                    <div class="sns-btn row">
                        <a href="#">YouTube</a>
                        <a href="#">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="news-right">
                <?php
                // Display latest 3 posts
                $news_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                
                if ($news_query->have_posts()) :
                    $image_index = 1;
                    while ($news_query->have_posts()) : $news_query->the_post();
                        $image_url = get_template_directory_uri() . '/assets/images/biz' . $image_index . '.jpg';
                        ?>
                        <div class="news-item">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('class' => 'js-io', 'alt' => get_the_title())); ?>
                            <?php else : ?>
                                <img class="js-io" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="news-item-text">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                            </div>
                        </div>
                        <?php
                        $image_index++;
                        if ($image_index > 3) $image_index = 1;
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Fallback content
                    $fallback_news = array(
                        array('title' => '持続可能な技術の台頭', 'content' => '持続可能な技術は、21世紀のイノベーションの礎となりつつあります。環境責任への関心が高まる中、各産業はより環境に優しい代替案を推進しています。', 'img' => 'biz1.jpg'),
                        array('title' => 'バーチャルリアリティの可能性を探る', 'content' => 'バーチャルリアリティは、ゲーム、教育、さらには治療に至るまで没入型体験を提供し、デジタル世界との関わり方を変革している。VR技術の進歩は、遠隔コラボレーションやインタラクティブ学習に新たな扉を開くことを約束する。', 'img' => 'biz2.jpg'),
                        array('title' => '現代の意思決定におけるデータの役割', 'content' => '今日のデータ駆動型社会において、企業は戦略立案のために膨大な情報に依存している。パターンやトレンドを分析することで、組織はより情報に基づいた正確な意思決定が可能となる。', 'img' => 'biz3.jpg'),
                    );
                    foreach ($fallback_news as $item) :
                        ?>
                        <div class="news-item">
                            <img class="js-io" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $item['img']); ?>" alt="<?php echo esc_attr($item['title']); ?>">
                            <div class="news-item-text">
                                <h4><?php echo esc_html($item['title']); ?></h4>
                                <p><?php echo esc_html($item['content']); ?></p>
                            </div>
                        </div>
                        <?php
                    endforeach;
                endif;
                ?>
                <div class="news-more">
                    <a href="<?php echo esc_url(home_url('/news')); ?>">VIEW MORE →</a>
                </div>
            </div>
            <div class="news-more"></div>
        </div>
    </div>
</div>

