<?php
/**
 * Home Business Section Template Part
 *
 * @package AAWAI
 */
?>
<div class="business">
    <div class="business-title">BUSINESS</div>
    <div class="business-list">
        <?php
        $business_items = array(
            array(
                'title' => 'AI SaaS(自動電話、チャットボット)',
                'content' => '最新のAI技術を活用した自動電話システムやチャットボットを提供します。<br>問い合わせ対応、予約受付、カスタマーサポートなどを効率化し、人的コストを大幅に削減します。',
                'img' => 'biz1.jpg'
            ),
            array(
                'title' => 'AIコンサルティング(業務改善箇所の特定)',
                'content' => '御社の現状をヒアリングし、AIを導入すべき業務工程や改善ポイントを明確化します。 <br />業務フロー分析からAI化ロードマップの策定まで、最適な改善案をご提案します。',
                'img' => 'biz2.jpg'
            ),
            array(
                'title' => 'AI研修',
                'content' => 'AIの基礎から実務活用まで、初心者にも分かりやすい研修プログラムを提供します。<br />社員のAIリテラシー向上や、DX推進の基盤づくりをサポートします。',
                'img' => 'biz4.jpg'
            ),
            array(
                'title' => 'その他、業務改善に関するご相談',
                'content' => '「何から始めればいいか分からない」「既存業務をどう効率化したら良いか知りたい」そんな漠然としたお悩みでも構いません。 AI歴15年以上の専門チームが、課題発見から解決まで伴走します。',
                'img' => 'biz5.jpg'
            ),
        );
        
        foreach ($business_items as $item) :
            ?>
            <div class="business-item">
                <div class="biz-text">
                    <h3><?php echo wp_kses_post($item['title']); ?></h3>
                    <p><?php echo wp_kses_post($item['content']); ?></p>
                </div>
                <div class="biz-image">
                    <img class="js-io" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $item['img']); ?>" alt="No Image">
                </div>
            </div>
            <?php
        endforeach;
        ?>
    </div>
</div>

