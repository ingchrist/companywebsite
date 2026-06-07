    <footer>
        <div class="footer-container">
            <div class="footer-grid">
                <?php if (is_active_sidebar('footer-widget-area')) : ?>
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                <?php else : ?>
                    <!-- お問い合わせ -->
                    <div class="footer-col">
                        <h3>お問い合わせ</h3>
                        <p>東京都渋谷区<br>代々木5-15-10</p>
                        <p class="footer-email">info@aawai.ai</p>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer-btn">問い合わせをしてみる</a>
                    </div>

                    <!-- 最新情報をお届け -->
                    <div class="footer-col">
                        <h3>最新情報をお届け</h3>
                        <p>
                            ココから登録してＡＩや業務改善に関する最新の<br>
                            情報を受け取ってください
                        </p>
                        <form class="footer-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                            <input type="hidden" name="action" value="aawai_newsletter">
                            <input type="email" name="email" placeholder="メールアドレス *" required />
                            <button type="submit">送信</button>
                        </form>
                    </div>

                    <!-- メニュー -->
                    <div class="footer-col">
                        <h3>メニュー</h3>
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                            <li><a href="<?php echo esc_url(home_url('/service')); ?>">サービス</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>">会社案内</a></li>
                            <li><a href="<?php echo esc_url(home_url('/news')); ?>">AI最新情報</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>

                    <!-- SNS -->
                    <div class="footer-col">
                        <h3>公式 SNS アカウント</h3>
                        <ul class="footer-sns">
                            <li><a href="#">Youtube</a></li>
                            <li><a href="#">LinkedIn</a></li>
                            <li><a href="#">X（旧Twitter）</a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <!-- COPYRIGHT -->
            <div class="footer-bottom">
                <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">プライバシーポリシー</a>
                <a href="#">Cookie（クッキー） ポリシー</a>
                <span>© <?php echo date('Y'); ?> AAWAI Corporation</span>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

