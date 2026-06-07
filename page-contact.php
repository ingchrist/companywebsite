<?php
/**
 * Contact Page Template
 *
 * @package AAWAI
 */

get_header();
?>

<main>
    <section class="contact-container">
        <div class="contact-image">
            <div class="overlay"></div>
        </div>

        <div class="contact-form">
            <h1>お問い合わせ</h1>
            <p>お気軽にお問い合わせください</p>

            <?php
            // Use Contact Form 7 or custom form
            if (function_exists('wpcf7_contact_form')) {
                echo do_shortcode('[contact-form-7 id="YOUR_FORM_ID" title="Contact form"]');
            } else {
                // Fallback form
                ?>
                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="aawai_contact_form">
                    <?php wp_nonce_field('aawai_contact_form', 'aawai_contact_nonce'); ?>
                    
                    <div class="form-row">
                        <div class="form-group mobile-half">
                            <label for="first-name">姓 *</label>
                            <input type="text" id="first-name" name="first-name" required />
                        </div>
                        <div class="form-group mobile-half">
                            <label for="last-name">名 *</label>
                            <input type="text" id="last-name" name="last-name" required />
                        </div>
                        <div class="form-group mobile-half">
                            <label for="email">メールアドレス *</label>
                            <input type="email" id="email" name="email" required />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group mobile-half">
                            <label for="phone">電話番号 *</label>
                            <input type="tel" id="phone" name="phone" required />
                        </div>
                        <div class="form-group">
                            <label for="position">役職 *</label>
                            <input type="text" id="position" name="position" required />
                        </div>
                        <div class="form-group">
                            <label for="company">会社名 *</label>
                            <input type="text" id="company" name="company" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">メッセージを入力してください *</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">送信</button>
                </form>
                <?php
            }
            ?>
        </div>
    </section>
</main>

<?php
get_footer();

