# AAWAI WordPress Theme

AIビジネスソリューション WordPress Theme

## Installation

1. **Upload the theme:**
   - Upload the `wp-aawai` folder to your WordPress installation's `/wp-content/themes/` directory
   - Or zip the folder and upload via WordPress Admin → Appearance → Themes → Add New → Upload Theme

2. **Activate the theme:**
   - Go to WordPress Admin → Appearance → Themes
   - Find "AAWAI" theme and click "Activate"

3. **Set up pages:**
   Create the following pages in WordPress Admin → Pages → Add New:
   - **Home** (Front Page) - Set as "Front Page" in Settings → Reading
   - **About** (会社案内) - Use template "About Page"
   - **Service** (サービス) - Use template "Service Page"
   - **Contact** (お問い合わせ) - Use template "Contact Page"
   - **News** (AI最新情報) - Set as "Posts Page" in Settings → Reading
   - **Privacy Policy** (個人情報保護法) - Use template "Privacy Policy Page"

4. **Set up navigation menu:**
   - Go to Appearance → Menus
   - Create a new menu and add the pages you created
   - Assign it to "Primary Menu" location

5. **Configure reading settings:**
   - Go to Settings → Reading
   - Set "Homepage displays" to "A static page"
   - Select your "Home" page as the Front page
   - Select your "News" page as the Posts page

## Theme Structure

```
wp-aawai/
├── style.css              # Theme header (required)
├── functions.php          # Theme functions and enqueues
├── index.php              # Main template fallback
├── front-page.php         # Homepage template
├── header.php             # Header template
├── footer.php             # Footer template
├── archive.php            # Blog/News archive template
├── page-about.php         # About page template
├── page-service.php       # Service page template
├── page-contact.php       # Contact page template
├── page-privacy-policy.php # Privacy policy template
├── template-parts/        # Reusable template parts
│   ├── home-news.php
│   ├── home-business.php
│   ├── home-blog.php
│   └── home-service-banner.php
├── css/                   # Stylesheets
│   ├── style.css
│   ├── animations.css
│   ├── about.css
│   ├── contact.css
│   ├── news.css
│   ├── services.css
│   └── privacypolicy.css
├── js/                    # JavaScript files
│   ├── main.js
│   └── transitions.js
└── assets/                # Images and media
    └── images/
```

## Features

- Responsive design
- Custom page templates for all main pages
- WordPress menu integration
- Post/archive support for news/blog
- Contact form ready (can integrate with Contact Form 7)
- Custom animations and transitions
- Mobile-friendly navigation

## Customization

### Changing Images
All images are located in `assets/images/`. Replace them with your own images while keeping the same filenames, or update the paths in the template files.

### Modifying Styles
Edit the CSS files in the `css/` directory:
- `style.css` - Main styles
- `animations.css` - Animation effects
- Page-specific CSS files for individual pages

### Adding Content
- Use WordPress Customizer (Appearance → Customize) for basic settings
- Edit page templates in the theme files for structural changes
- Use WordPress Editor for page content

## Support

For issues or questions, please contact AAWAI Corporation.

## License

GNU General Public License v2 or later

