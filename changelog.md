# Layers Changelog

## 1.0.5
### 19 March 2015

Bug fixes and language additions

* **Tweak** - Changed the "Page Builder" page template to "Layers Template"
* **Enhancement** - Added the ability to bypass the built-in Customizer sanitization
* **Fix** - Unchecking all post meta display not longer causes all of the options to actually display
* **Enhancement** - Added new dropdown to customizer so that users can easily navigate back to dashboard, create new page and preview page
* **Enhancement** - Added the "range" option to the Form->input() function
* **Enhancement** - Added Chinese translation files
* **Enhancement** - Added Turkish translation files
* **Enhancement** - Added German translation files
* **Enhancement** - Added Spanish translation files
* **Fix** - When adding a single top menu, the opposite menu no long defaults to show pages
* **Fix** - Added license information to swiper.js
* **Fix** - WooCommerce pages no longer have a spacing issue when right sidebar is turned on
* **Fix** - .sub-menu width in off-canvas menu has been fixed to avoid text-wrapping
* **Fix** - Dots from payment methods in Woo checkout page have been removed
* **Fix** - Grouped product styling in WooCommerce has been fixed
* **Fix** - The large gap appearing above a sticky header when you're logged in on a mobile phone no longer appears
* **Fix** - Fixed when clicking any widget design bar sub menu would erroneously deselect active states of all the controls visual selectors
* **Tweak** - Text change 'Editing widget content' slide
* **Tweak** - Removed unused WooCommerce CSS and placed them in new pro woo extension
* **Tweak** - get_theme_mod( 'custom-css' ); no longer uses layers_inline_style, this is in preparation of PostMessage support
* **Tweak** - Clicking anywhere on the page will close any open design bar sub menus
* **Tweak** - Stop persistent Layers page filtering in page list, choosing all would confusingly show only Layers pages

## 1.0.4
### 02 March 2015

Security and code quality updates

* **Enhancement** - Added 'range' type to the form options
* **Enhancement** - Added filtering to the design bar setup per widget (thanks @kevinlangleyjr)
* **Enhancement** - Improved class initiators (thanks @prettyboymp)
* **Enhancement** - Added filters to design bar components (thanks @prettyboymp)
* **Enhancement** - Clicking out of the design bar closes a control (thanks @prettyboymp @jeffstieler)
* **Enhancement** - Added customizer-preview.js for scripts executed in the customizer preview iframe only
* **Fix** - Deleting all slides then adding your first slide again threw an error (thanks @prettyboymp)
* **Fix** - Fix references from i8n to i18n
* **Fix** - Added check_ajax_referer() for Ajax nonceing
* **Fix** - Removed double <title /> tag
* **Fix** - Improved nonce handling and removed any reference to $_REQUEST[] in the code
* **Fix** - Updated Google maps API link for SSL compatability (thanks @oskapt)
* **Fix** - Improved localization (thanks @tmconnect)
* **Fix** - Added sanitization helpers which we hook into the customizer to clean up the Customizer data
* **Tweak** - Added Typekit ID field to the Site Settings, this means that getting Typekit into Layers is now even easier and safer
* **Tweak** - Move hooks and filters outside of their related function_exists closures
* **Tweak** - Replaced deprecated get_page() with get_post()
* **Tweak** - Added version number to all css and js assets being enqueued
* **Tweak** - Added nonce check and remove unnecessary conditional from to update_page_builder_meta()
* **Tweak** - .media block (used extensively in the content widget html) has been tweaked to behave better on different screensizes and with different column widths
* **Tweak** - Changed jquery-masonry to masonry v3 not dependent on jquery
* **Tweak** - Updated hook used for meta box registration
* **Tweak** - Changed in-line styles and scripts to always use admin_print_styles and admin_print_scripts hooks
* **Tweak** - Moved fouc rendering issue fix from in-line to the customizer-preview.js
* **Tweak** - Slider behaves better in responsive mode - no longer image/copy overlap
* **Tweak** - Apply class to Slider for layout eg slider-layout-full-screen and a unique not-full-screen
* **Tweak** - Merged color.css typography.css and framework.css so that fewer style sheets are loaded, therefore improved load times

## 1.0.3
### 23 February 2015

Post-launch bug fixes before settling into a release schedule

* **Fix** - Portfolio preset template now works correctly (thanks @nitinthewiz)
* **Tweak** - Removed layers_site_title(); function in favor of WordPress built in site title function
* **Tweak** - Added <?php get_search_form(); ?> to the 404 page
* **Fix** - Product page styling with sidebars is now correct (thanks @luizbills)
* **Tweak** - Added target=_blank on the Built With Layers badge
* **Fix** - Fixed the Layers dashboard header


## 1.0.2
### 20 February 2015

Theme Check requirements and url updates

* **Fix** - Added sprintf() to any hard coded urls
* **Fix** - Corrected all Layers Dashboard urls
* **Fix** - Removed unuses scripts from /assets/js/
* **Fix** - Fixed 404 page styling

## 1.0.1
### 19 February 2015

Some quick fixes that help improve the overall experience

* **Tweak** - Removed un-needed scripts from loading on the front-end
* **Fix** - Removed un-used images from the /assets/css/images folder
* **Tweak** - Added a notice to download the Layers Updater to the Layers Dashboard
* **Tweak** - Cleaned up third party JS scripts
* **Fix** - Removed unused WooCommerce Sidebars
