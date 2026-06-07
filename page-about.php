<?php
/**
 * About Page Template
 *
 * @package AAWAI
 */

get_header();
?>

<main>
    <div class="about">
        <h2 class="about-title">当社について</h2>

        <div class="about-wrapper">
            <!-- Left Text Block -->
            <div class="about-left">
                <p class="about-small">社員の手間とわかって続けてしまっている作業</p>
                <p class="about-mid">いい加減やめませんか？</p>
                <p class="about-desc">
                    AIを通じて業務を改善し、より
                    「人間らしい」業務に集中できる
                    環境を作るのは社長の役目です
                </p>
                <p class="about-footer">
                    " AAWAI " の綴りは
                    "Automate" "Anything" "With" "AI"
                    AIを通じて世界の中小企業の圧倒的な成長を提供し、
                    売上UPと経費削減を実現する中で<br>
                    世の中のありようを変える
                </p>
            </div>

            <!-- Right Video Block -->
            <div class="about-right">
                <div class="about-video">
                    <button class="about-play">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"
                            preserveAspectRatio="xMidYMin slice">
                            <g fill="none" fill-rule="evenodd">
                                <circle cx="18" cy="18" r="17" stroke="#fff" stroke-width="2"></circle>
                                <path fill="#fff" d="m23.935 17.708-10.313 6.033V11.676z"></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="team-section">
            <h2 class="team-title">Our Team</h2>
            <p class="team-desc">
                AAWAI株式会社では14年間で10か国の国を渡り歩き、1億・10億円のビジネスを立ち上げてきた代表の村澤と東京大学を出たCTOのKWを筆頭に<br>
                ビジネス経験豊富なチームがAIの業務改善をしっかりとサポートします
            </p>

            <div class="team-wrapper">
                <div class="member">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Profile pic.avif'); ?>" alt="">
                    <div class="member-info">
                        <div class="member-name">村澤　秀明</div>
                        <div class="member-role">FOUNDER/CEO</div>
                    </div>
                </div>

                <div class="member">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/member1.avif'); ?>" alt="">
                    <div class="member-info">
                        <div class="member-name">KW</div>
                        <div class="member-role">CTO　東大卒</div>
                    </div>
                </div>

                <div class="member">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/member2.avif'); ?>" alt="">
                    <div class="member-info">
                        <div class="member-name">RY</div>
                        <div class="member-role">業務改善スペシャリスト</div>
                    </div>
                </div>

                <div class="member">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/member3.avif'); ?>" alt="">
                    <div class="member-info">
                        <div class="member-name">HI</div>
                        <div class="member-role">営業スペシャリスト</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mission-section">
        <div class="text-note mission-note">
            <span>ミッション</span>
        </div>
        <div class="mission-content">
            <h2 class="mission-title">
                AIを通じて世界の中小企業の圧倒的な成長を提供し、
                売上UPと経費削減を実現する中で世の中のありようを変える
            </h2>
            <p class="mission-subtext">
                AIを導入しない企業は「化石」となり世界のビジネス環境の中で生きていけない。<br>
                その理念を言語化し中小企業のAI導入を促進します
            </p>
        </div>
        <div class="core-values">
            <div class="value-box">
                <h3><span class="value-line"></span>AI導入</h3>
                <p>
                    昔のインターネットの黎明期と同じ時期にある「AI」
                    早く導入して競合に差をつける
                </p>
            </div>
            <div class="value-box">
                <h3><span class="value-line"></span>コンサルティング</h3>
                <p>
                    「使われなければ意味がない」をモットーに
                    しっかりと実務導入されるものを提供
                </p>
            </div>
            <div class="value-box">
                <h3><span class="value-line"></span>イノベーション</h3>
                <p>
                    最新技術を創出しながら、提案できる体制を整えます
                </p>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();

