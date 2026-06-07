<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
            <div class="logo-image"></div>
            <div class="logo-text">
                <span>AAWAI Corp</span>
                <span>A I 総合ソリューション</span>
            </div>
        </a>
        <nav>
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                ));
            } else {
                aawai_default_menu();
            }
            ?>
        </nav>

        <!-- Mobile Menu Button -->
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Sidebar Menu -->
        <div class="mobile-menu">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => '',
                ));
            } else {
                aawai_default_menu();
            }
            ?>
        </div>
    </header>
    
    <a href="#" class="chat-button">
        <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
            style="border-radius: 0px; fill: rgb(255, 255, 255); width: 26px; height: 26px; flex-shrink: 0;">
            <g fill="currentColor" fill-rule="nonzero">
                <path
                    d="M4.224 29.97l-1.73-.898V5.307l1.07-1.062H28.93L30 5.307v19.436l-1.07 1.062H9.905L4.224 29.97zm.494-23.602v20.58l4.2-3.103.658-.245h18.365V6.368H4.718z">
                </path>
                <path d="M9.906 10.533h13.835v2.205H9.906zM12.212 16.658h8.235v2.205h-8.235z"></path>
            </g>
        </svg>
        <p>Let's Chat!</p>
    </a>

