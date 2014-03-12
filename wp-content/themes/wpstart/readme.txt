Theme Name: WPstart
Theme URI: http://krusze.pl/wpstart
Author: krusze.pl
Author URI: http://krusze.pl
Description: WPstart is a responsive, simple, WordPress Theme built with HTML5 and CSS3. WPstart looks great on any device and allow you to create any type of website you want. WPstart features: cross-browser compatible, custom background, developer friendly, drop-down menu, editor styles, fast loading, header image, highly customizable and adaptable, Multisite ready, post formats support, print styles, responsive, Search Engine Friendly, threaded comments, translation ready, W3C valid, 7 widget-ready areas & more... WPstart is currently translated into 13 languages: Arabic (ar), Catalan (ca), Chinese (zh_CN), Danish (da_DK), Dutch (nl_NL), French (fr_FR), German (de_DE), Italian (it_IT), Japanese (ja), Portuguese (pt_PT), Russian (ru_RU), Spanish (es_ES). Everyone from first-time WordPress users to advanced developers and designers can take advantage of WPstart.
Version: 1.1.3
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: custom-background, custom-header, editor-style, flexible-width, full-width-template, left-sidebar, one-column, post-formats, right-sidebar, sticky-post, threaded-comments, translation-ready, two-columns

Copyright Luke Kruszewski-Zelman http://krusze.pl

== Description ==
WPstart is a WordPress theme allowing you to create any type of website you want.
WPstart works with WordPress 3.5+

Sources and credits
* [960 Grid System] (http://960.gs/) | License: [GPL] (http://www.gnu.org/licenses/gpl.html) & [MIT] (http://www.opensource.org/licenses/mit-license.php)
* [Fluid 960 Grid System] (https://github.com/bauhouse/fluid960gs/) | License: [GPL] (http://www.gnu.org/licenses/gpl.html) & [MIT] (http://www.opensource.org/licenses/mit-license.php)
* [Header image: get to the point] (http://www.publicdomainpictures.net) | License: [GPL] (http://www.gnu.org/licenses/gpl.html)
* [html5shiv] (https://github.com/aFarkas/html5shiv/) | License: [MIT] (http://www.opensource.org/licenses/MIT) & [GPL2] (http://www.gnu.org/licenses/gpl-2.0.html)
* [Respond] (https://github.com/scottjehl/Respond) | License: [MIT] (http://www.opensource.org/licenses/MIT) & [GPL2] (http://www.gnu.org/licenses/gpl-2.0.html)

If you have any questions, suggestions, bug reports or feature requests feel free to contact at kontakt@krusze.pl or visit http://krusze.pl

== Installation ==
1. Unzip wpstart.1.1.3.zip
2. Upload the wpstart directory to the /wp-content/themes/
3. Activate the theme through the appearance menu

== Changelog ==
= 1.1.4 - 06.08.2013 =
* Bugfix : Added generated .mo translation files
* Changed : move do_action('wpstart_main') from 404.php, archive.php, attachment.php, author.php, category.php, index.php, page.php, 
search.php, single.php, tag.php to header.php

= 1.1.3 - 07.07.2013 =
* Changed : minify style.css; added style.dev.css for web developers
* Changed : added respond.min.js (A fast & lightweight polyfill for min/max-width CSS3 Media Queries (for IE 6-8, and more))
* Changed : minor changes in style.css:
- added "word-wrap: break-word" to: #main article, .comment-author cite.fn, .widget-container
- added flexible margin to #header hgroup: "margin-left: 1%; margin-right: 1%;"
- added "-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" to #respond textarea
- removed unncecessary margin from #respond {}
- minor fixes in main navigation (#nav); removed unnecessary .nav-menu class from #nav ul.nav-menu
- fixed custom menu widget, added: .widget_nav_menu ul.sub-menu { margin: 0 0 0 20px; margin: 0 0 0 2rem; }
- added "border: none!important;" to .gallery .gallery-icon img
- added "margin: 5px 20px 10px 0; margin: 0.5rem 2rem 1rem 0;" to .attachment-archive-thumbnail and .attachment-single-post-thumbnail 
- added sections: /* Entry summary */, /* Entry content */, /* Post format: aside */, /* Post format: audio */, /* Post format: chat */, 
/* Post format: gallery */, /* Post format: link */, /* Post format: video */, /* Categories */, /* Menu */, /* Meta */, /* Pages */, 
/* Recent posts */, /* RSS */, /* Search */, /* Tag cloud */, /* Text */
- removed word "added" and changed "fixed:" to "fixed ->"

* Changed : added translations: Arabic (ar), Catalan (ca), Chinese (zh_CN), Danish (da_DK), Dutch (nl_NL), French (fr_FR), German (de_DE), 
Italian (it_IT), Japanese (ja), Portuguese (pt_PT), Russian (ru_RU), Spanish (es_ES)
* Changed : changes in translation files (.po files and wpstart.pot)
- changed string "More &raquo;" to "Continue reading <span class=\"meta-nav\">&rarr;</span>" 
- changed string "Newer <span class=\"meta-nav\">&rarr;</span>" to "Newer posts <span class=\"meta-nav\">&rarr;</span>"
- changed string "<span class=\"meta-nav\">&larr;</span> Older" to "<span class=\"meta-nav\">&larr;</span> Older posts"
- removed unnecessary strings: "Bookmark"; "Header"; "Permalink: %s"; "Search for:"; "Meta"; msgstr[2] "%1$s odpowiedzi na %2$s"

* Changed : content-extensions.php: 
- fixed order of functions
- wpstart_head added: "<meta name="viewport" content="width=device-width">"; changed from: <title><?php wp_title('', true); ?></title> to 
<title><?php wp_title( '|', true, 'right' ); ?></title>
- rename "meta-category-prep" to "meta-categories-prep"

* Changed : added wpstart_enqueue_scripts_and_styles and wpstart_wp_title to functions.php
* Changed : wpstart_footer_content: added esc_url to home_url
* Changed : wpstart_admin_header_style: css fixes; added "@media screen and (min-width: 600px)"

== Changelog ==
= 1.1.2 - 26.04.2013 =
* Changed : layout changed to responsive, based on: [Fluid 960 Grid System] (https://github.com/bauhouse/fluid960gs/) | License: [GPL] (http://www.gnu.org/licenses/gpl.html) & [MIT] (http://www.opensource.org/licenses/mit-license.php)
* Changed : minor css fixes (.entry-summary; #nav; .navigation; Comments form) & added "Media Queries" section

= 1.1.1 - 15.04.2013 =
* Changed : added support for Post Formats
* Changed : minor css fixes (added .meta-tags; changed position of .edit-link; removed 940px from some classes; added img.wp-smiley, .rsswidget img)
* Changed : minor css fixes in editor-style.css
* Changed : functions.php: wpstart_nav moved to wpstart_header
* Changed : changes in wpstart actions (added: wpstart_before_post & wpstart_after_post; removed wpstart_search_no_results_not_found and moved to wpstart_post_no_results_not_found; added: wpstart_single_entry_thumbnail, wpstart_post_entry_thumbnail, wpstart_page_entry_content_start, wpstart_page_entry_content_end, wpstart_single_entry_content_start, wpstart_single_entry_content_end, wpstart_post_entry_content_start, wpstart_post_entry_content_end, wpstart_attachment_entry_content_start, wpstart_attachment_entry_content_end)

= 1.1 - 08.04.2013 =
* Bugfix : fixed letter "Ł" (Themes are required to have all public-facing text in English)
* Bugfix : make string "Original dimensions" translatable
* Changed : implemented CSS Coding Standards (http://make.wordpress.org/core/handbook/coding-standards/css/) & minor changes (added table of contents; append .hentry class to an "article" block; added .wp-caption;)
* Changed : added compatibility with WP-PageNavi plugin
* Changed : minor changes in wpstart actions; made hooks names more user friendly

= 1.0.9 - 20.01.2013 =
* Changed : CSS & html output fixes towards html5, added html5shiv.js

= 1.0.8 - 07.01.2013 =
* Changed : change theme screenshot (screenshot.png) dimensions to 600x450px
* Changed : laytout improvements: move #main, #container, #content, #footer to content-extensions.php
* Changed : wpstart_entry_title divided to: wpstart_post_entry_title and wpstart_single_entry_title

= 1.0.7 - 01.07.2012 =
* Changed : changed header image
* Changed : added wpstart_before_container and wpstart_after_container
* Changed : added wpstart_before_content and wpstart_after_content

= 1.0.6 - 07.06.2012 =
* Changed : add_custom_background replaced with add_theme_support( 'custom-background' ) and add_custom_image_header replaced with add_theme_support( 'custom-header' ); provide backward-compatibility for Custom Background and Custom Header [functions.php]

= 1.0.5 - 29.04.2012 =
* Bugfix : changed _e() to esc_attr__() in "permalink" translations [content-extensions.php]

= 1.0.4 - 29.04.2012 =
* Changed : removed wpstart_body action and function - added wpstart_body_class [function.php, content-extensions.php]
* Bugfix : added textdomain to: 'Permalink: %s'; 'Permalink: '; 'One Response to %2$s', '%1$s Responses to %2$s'
* Changed : added <h1 class="page-title"> to daily archives, monthly archives, yearly archives page titles [content-extensions.php]
* Changed : some CSS fixes

= 1.0.3 - 27.04.2012 =
* Bugfix : removed function_exists() conditional for functions introduced more than one (recommended) or two (optionally) WordPress version prior [functions.php]
* Bugfix : fixed "Clearing Floats" - Edit link is cleared now
* Bugfix : textdomain in translation functions is now 'wpstart' 
* Bugfix : fixed printf in content-extensions.php
* Bugfix : pages in search results - removed meta information and added missing whitespace between them

= 1.0.2 - 24.04.2012 =
* Bugfix : get_template_directory()/get_stylesheet_directory() instead of TEMPLATEPATH/STYLESHEETPATH
* Bugfix : added function_exists() conditional where appropriate in functions.php
* Bugfix : restored default actions in wp_head (rsd_link, wp_generator, index_rel_link, wlwmanifest_link, feed_links_extra, start_post_rel_link, parent_post_rel_link, adjacent_posts_rel_link)
* Bugfix : fixed "Clearing Floats"
* Bugfix : removed "Comments are closed." message on page with comments disabled
* Bugfix : prevent wide images get cut off when overflowing the content area - .entry-content img { height:auto; max-width:100%; }
* Changed : fixed header image preview in the admin area; added wpstart_admin_header_image

= 1.0.1 - 19.04.2012 =
* Changed : new screenshot.png
* Changed : moved get_search_form from wpstart_header_content to sidebar-first area
* Changed : added CSS styles - img.alignleft, img.alignright, .nav-previous; added clear:"both" to .link-page
* Bugfix : CSS fixes - removed unnecessary styles: #headline, #breadcrumb, #banner, .opacity, .gallery-thumbs, input:focus, input[type="text"]:focus, input[type="submit"]:hover, img.header-image, .home #content

= 1.0 - 14.04.2012 =
* Official release.

==================================================================================================================

== Opis ==
WPstart to motyw do aplikacji WordPress, który pozwala na stworzenie dowolnego typu strony internetowej.
WPstart działa z WordPress 3.3+

Źródła:
* [960 Grid System] (http://960.gs/) | Licencja: [GPL] (http://www.gnu.org/licenses/gpl.html) & [MIT] (http://www.opensource.org/licenses/mit-license.php)
* [Fluid 960 Grid System] (https://github.com/bauhouse/fluid960gs/) | Licencja: [GPL] (http://www.gnu.org/licenses/gpl.html) & [MIT] (http://www.opensource.org/licenses/mit-license.php)
* [Obrazek nagłówka: get to the point] (http://www.publicdomainpictures.net) | Licencja: [GPL] (http://www.gnu.org/licenses/gpl.html)
* [html5shiv] (https://github.com/aFarkas/html5shiv/) | Licencja: [MIT] (http://www.opensource.org/licenses/MIT) & [GPL2] (http://www.gnu.org/licenses/gpl-2.0.html)
* [Respond] (https://github.com/scottjehl/Respond) | Licencja: [MIT] (http://www.opensource.org/licenses/MIT) & [GPL2] (http://www.gnu.org/licenses/gpl-2.0.html)

Jeśli masz pytania, sugestie, pomysły lub chcesz zgłosić błąd to skontaktuj się z nami na kontakt@krusze.pl lub odwiedź http://krusze.pl

== Instalacja ==
1. Rozpakuj archiwum wpstart.1.1.3.zip
2. Prześlij folder wpstart do /wp-content/themes/
3. Włącz szablon poprzez menu wygląd

== Changelog ==
= 1.1.4 - 06.08.2013 =
* Poprawka : Dodane brakujące pliki tłumaczeń .mo
* Zmiana : przeniesienie do_action('wpstart_main') z 404.php, archive.php, attachment.php, author.php, category.php, index.php, page.php, 
search.php, single.php, tag.php do header.php

= 1.1.3 - 07.07.2013 =
* Zmiana : minimalizacja style.css; dodany style.dev.css dla web developerów
* Zmiana : dodane respond.min.js - szybka i lekka zgodność dla min/max-width CSS3 Media Queries dla przeglądarek IE 6-8
* Zmiana : drobne zmiany w style.css:
- dodane "word-wrap: break-word" do: #main article, .comment-author cite.fn, .widget-container
- dodany elastyczny margines do #header hgroup: "margin-left: 1%; margin-right: 1%;"
- dodane "-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;" do #respond textarea
- usunięty niepotrzebny margin z #respond {}
- drobne poprawki w głównej nawigacji #nav; usunięta niepotrzebna klasa .nav-menu z #nav ul.nav-menu
- poprawiony widget własne menu, dodane: .widget_nav_menu ul.sub-menu { margin: 0 0 0 20px; margin: 0 0 0 2rem; }
- dodany "border: none!important;" do .gallery .gallery-icon img
- dodany "margin: 5px 20px 10px 0; margin: 0.5rem 2rem 1rem 0;" do .attachment-archive-thumbnail i .attachment-single-post-thumbnail 
- dodane sekcje: /* Entry summary */, /* Entry content */, /* Post format: aside */, /* Post format: audio */, /* Post format: chat */, 
/* Post format: gallery */, /* Post format: link */, /* Post format: video */, /* Categories */, /* Menu */, /* Meta */, /* Pages */, 
/* Recent posts */, /* RSS */, /* Search */, /* Tag cloud */, /* Text */
- usunięte słowo "added" i zmiana z "fixed:" na "fixed ->"

* Zmiana : dodane tłumaczenia: arabski (ar), kataloński (ca), chiński (zh_CN), duński (da_DK), holenderski (nl_NL), francuski (fr_FR), 
niemiecki (de_DE), włoski (it_IT), japoński (ja), portugalski (pt_PT), rosyjski (ru_RU), hiszpański (es_ES)
* Zmiana : zmiany w plikach tłumaczeń (pliki .po i wpstart.pot)
- zmiana frazy "More &raquo;" na "Continue reading <span class=\"meta-nav\">&rarr;</span>"
- zmiana frazy "Newer <span class=\"meta-nav\">&rarr;</span>" na "Newer posts <span class=\"meta-nav\">&rarr;</span>"
- zmiana frazy "<span class=\"meta-nav\">&larr;</span> Older" na "<span class=\"meta-nav\">&larr;</span> Older posts"
- usunięte niepotrzebne frazy: "Bookmark"; "Header"; "Permalink: %s"; "Search for:"; "Meta"; msgstr[2] "%1$s odpowiedzi na %2$s"

* Zmiana : content-extensions.php: 
- poprawiona kolejność funkcji
- wpstart_head dodane: "<meta name="viewport" content="width=device-width">"; zmiana z: "<title><?php wp_title('', true); ?></title>" na 
"<title><?php wp_title( '|', true, 'right' ); ?></title>"
- zmiana nazwy klasy z "meta-category-prep" na "meta-categories-prep"

* Zmiana : dodane wpstart_enqueue_scripts_and_styles i wpstart_wp_title do functions.php
* Zmiana : wpstart_footer_content: dodane esc_url do home_url
* Zmiana : wpstart_admin_header_style: poprawki css; dodane "@media screen and (min-width: 600px)"

== Changelog ==
= 1.1.2 - 26.04.2013 =
* Zmiana : zmiana layoutu na responsywny, oparte o: [Fluid 960 Grid System] (https://github.com/bauhouse/fluid960gs/) | License: [GPL] (http://www.gnu.org/licenses/gpl.html) & [MIT] (http://www.opensource.org/licenses/mit-license.php)
* Zmiana : drobne zmiany w css (.entry-summary; #nav; .navigation; Comments form) & dodanie rozdziału "Media Queries"

= 1.1.1 - 15.04.2013 =
* Zmiana : wsparcie dla Post Formats
* Zmiana : drobne zmiany w css (added .meta-tags; changed position of .edit-link; removed 940px from some classes; added img.wp-smiley, .rsswidget img)
* Zmiana : drobne zmiany w editor-style.css
* Zmiana : functions.php: wpstart_nav przeniesiony do wpstart_header
* Zmiana : zmiany w wpstart actions (added: wpstart_before_post & wpstart_after_post; removed wpstart_search_no_results_not_found and moved to wpstart_post_no_results_not_found; added: wpstart_single_entry_thumbnail, wpstart_post_entry_thumbnail, wpstart_page_entry_content_start, wpstart_page_entry_content_end, wpstart_single_entry_content_start, wpstart_single_entry_content_end, wpstart_post_entry_content_start, wpstart_post_entry_content_end, wpstart_attachment_entry_content_start, wpstart_attachment_entry_content_end)

= 1.1 - 08.04.2013 =
* Poprawka : poprawa literki "Ł" (Themes are required to have all public-facing text in English)
* Poprawka : fraza "Original dimensions" dodana do tłumaczenia
* Zmiana : przebudowa arkusza CSS do zgodności z CSS Coding Standards (http://make.wordpress.org/core/handbook/coding-standards/css/) & drobne zmiany (dodany spis treści; dodanie klasy .hentry do bloku "article"; dodanie .wp-caption;)
* Zmiana : dodanie kompatybilności z pluginem WP-PageNavi
* Zmiana : drobne zmiany w wpstart actions; poprawa nazw na bardziej przyjazne dla użytkowników

= 1.0.9 - 20.01.2013 =
* Zmiana : poprawki w CSS & html dla html5, dodano html5shiv.js

= 1.0.8 - 07.01.2013 =
* Zmiana : zmiana rozmiaru zdjęcia motywu (screenshot.png) na 600x450px
* Zmiana : ulepszenie layoutu: przeniesienie #main, #container, #content, #footer do content-extensions.php
* Zmiana : wpstart_entry_title podzielone na: wpstart_post_entry_title i wpstart_single_entry_title

= 1.0.7 - 01.07.2012 =
* Zmiana : zmieniony obrazek nagłówka
* Zmiana : dodane wpstart_before_container i wpstart_after_container
* Zmiana : dodane wpstart_before_content i wpstart_after_content

= 1.0.6 - 07.06.2012 =
* Zmiana : add_custom_background zastąpione add_theme_support( 'custom-background' ) oraz add_custom_image_header zastąpione add_theme_support( 'custom-header' ); zapewnienie kompatybilności wstecz dla Custom Background i Custom Header [functions.php]

= 1.0.5 - 29.04.2012 =
* Poprawka : zmiana _e() na esc_attr__() w tłumaczeniu "permalink" [content-extensions.php]

= 1.0.4 - 29.04.2012 =
* Zmiana : usunięte wpstart_body akcja i funkcja - dodane wpstart_body_class [function.php, content-extensions.php]
* Poprawka : dodane textdomain: 'Permalink: %s'; 'Permalink: '; 'One Response to %2$s', '%1$s Responses to %2$s'
* Zmiana : dodane <h1 class="page-title"> do tytułów daily archives, monthly archives, yearly archives [content-extensions.php]
* Zmiana : drobne zmiany w CSS

= 1.0.3 - 27.04.2012 =
* Poprawka : usunięte function_exists() dla funkcji wprowadzonych więcej niż 1 (zalecane) lub 2 (opcja) wcześniejsze wersje WordPress [functions.php]
* Poprawka : poprawione "Clearing Floats" - link Edytuj wyrównany
* Poprawka : textdomain ustawiony na 'wpstart' 
* Poprawka : poprawione printf w content-extensions.php
* Poprawka : strony w wywnikach wyszukiwania - usunięte meta i dodana przerwa pomiędzy wynikami listy

= 1.0.2 - 24.04.2012 =
* Poprawka : get_template_directory()/get_stylesheet_directory() zmiast TEMPLATEPATH/STYLESHEETPATH
* Poprawka : dodane function_exists() gdzie wskazane w functions.php
* Poprawka : przywrócone domyślne akcje w wp_head (rsd_link, wp_generator, index_rel_link, wlwmanifest_link, feed_links_extra, start_post_rel_link, parent_post_rel_link, adjacent_posts_rel_link)
* Poprawka : poprawione "Clearing Floats" obrazków
* Poprawka : usunięty komunikat "Możliwość komentowania jest wyłączona." na stronach z blokadą dodawania komentarzy
* Poprawka : zabezpieczenie przed przycinaniem obrazków, które wychodzą poza obszar treści - .entry-content img { height:auto; max-width:100%; }
* Zmiana : poprawione wyświetlanie podglądu obrazka nagłówka w panelu administracyjnym; dodane wpstart_admin_header_image

= 1.0.1 - 19.04.2012 =
* Zmiana : nowy screenshot.png
* Zmiana : przeniesione get_search_form z wpstart_header_content do sidebar-first area
* Zmiana : dodane style CSS - img.alignleft, img.alignright, .nav-previous; dodane clear:"both" to .link-page
* Poprawka : poprawki w CSS - usunięcie zbędnych styli: #headline, #breadcrumb, #banner, .opacity, .gallery-thumbs, input:focus, input[type="text"]:focus, input[type="submit"]:hover, img.header-image, .home #content

= 1.0 - 14.04.2012 =
* Pierwsze wydanie.
