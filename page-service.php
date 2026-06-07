<?php
/**
 * Service Page Template
 *
 * @package AAWAI
 */

get_header();
?>

<main>
    <section class="services-top">
        <h2 class="services-title">提供するサービス</h2>
        <div class="services-grid">
            <div class="service-box">
                <span class="service-line"></span>
                <h3>AIによる爆速業務改善</h3>
                <p>
                    15年間10か国以上での新規事業、ビジネス経験をもとに「実際に使われる」
                    AIの活用方法やお悩み点に対しての解決方法を提案。
                    ただ提案するだけではなくしっかりと使われるシステムになるように実行します。
                </p>
            </div>

            <div class="service-box">
                <span class="service-line"></span>
                <h3>AIコンサルティング</h3>
                <p>
                    AIに興味はあるけれど「何をどこから手を付けたらよいのかわからない」
                    こういうお問い合わせは非常に多いです。
                    安心してAAWAIのメンバーにご相談いただければ解決方法をご提案します。
                </p>
            </div>

            <div class="service-box">
                <span class="service-line"></span>
                <h3>AIでの営業・マーケティング自動化</h3>
                <p>
                    弊社の自社SaaSである「THE SALES AI」を活用して、
                    集客〜販売〜営業のフローを自動化し、
                    1/10の手間で売上10倍を達成を狙う、次世代のAIツール。
                    電話の受信・発信だけの自動化も可能です。
                </p>
            </div>

            <div class="service-box">
                <span class="service-line"></span>
                <h3>AI活用の浸透と業務の検討</h3>
                <p>
                    「なんとなく入れてみた、けど使われていない」
                    そんな経験はありませんか？
                    AAWAIではただ提案するだけで留まらず、しっかりと使われるシステムになるよう
                    社内で浸透させていくお手伝いまで含めてしています。
                </p>
            </div>
        </div>
    </section>

    <div class="service-bottom">
        <div class="service-center">
            <h2>「現状維持とは緩慢な衰退である」</h2>
            <p>村澤　滋　（三菱館事務間）</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="service-btn">お問合せする</a>
        </div>
    </div>
</main>

<?php
get_footer();

