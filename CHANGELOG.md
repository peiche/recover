# Changelog

All notable changes to this project will be documented in this file. This project adheres to [Semantic Versioning](http://semver.org/).

**1.4.2 - 12/10/2018**
- Fixed fatal error in WordPress 5.0. ([#37](https://github.com/peiche/cover2/issues/37), [#38](https://github.com/peiche/cover2/issues/38))
- Fixed inconsistent font weights.
- Fixed styles for Gutenberg image blocks and captions.
- Updated Gutenberg pullquote styles.
- Updated post display specific to quote post format.
- Updated tag cloud widget style.
- Added styles for [Editor Blocks](https://editorblockswp.com/) plugin.
- Added styles for [Atomic Blocks](https://atomicblocks.com/) plugin.
- Added support for larger featured image size in Algolia search results.
- Added utility class styles.
- Added Jetpack social menu to footer.
- Added Customizer setting to display featured images on post listings.
- Added form styles.
- Added calendar icon to post metadata.
- Added SVG support to Jetpack social menu.
- Added class support to icon utility function.
- Added missing icons to Jetpack social menu:
  - [Bitbucket](https://bitbucket.org/)
  - [DEV](https://dev.to/)
  - [GitLab](https://about.gitlab.com/)
  - [Sourcerer](https://sourcerer.io/)
  - [StackShare](https://stackshare.io/) (Note: the StackShare icon is currently broken when using a dark footer.)
- Disabled autocomplete on search form.

**1.4.1 - 8/28/2018**
- Fixed non-printable character on Algolia search result template.
- Fixed site logo aspect ratio.
- Fixed line width for navbar icons.
- Removed static posts Customizer setting.
- Removed most floats and clears in favor of Flexbox.
- Changed panel tag from article to section.
- Updated bookmark icon in navbar with [Nucleo's icon transition tool](https://nucleoapp.com/tool/icon-transition).
- Updated Aesop Story Engine detection when Gutenberg plugin is active.
- Updated Algolia search result page's current page style color.
- Added recent posts logic if the blog page is assigned to a front page panel.
- Added dark and light icons for Jetpack image carousel.
- Added gallery post format support.

**1.4.0 - 8/3/2018**
- Fixed button styles in header, navigation, and overlay.
- Fixed top margin for paged blog posts.
- Fixed Jetpack embed styles when Gutenberg is active.
- Updated Aesop Story Engine plugin's lightbox icons to match Cover2 style.
- Updated Gallery post format icon.
- Updated Jetpack plugin's Contact Form module styles.
- Updated Jetpack plugin's Carousel module styles.
- Updated blockquote styles (Gutenberg and otherwise).
- Updated Gutenberg embed styles.
- Updated Gutenberg cover image text style.
- Adjusted header image opacity to increase legibility.
- Replaced Algolia PNG logo with SVG.
- Rewrote responsive grid to use Flexbox.
- Added styles for Aesop Story Engine plugin's collection component.
- Added styles for Jetpack plugin's contact form module.
- Added panel options to static front page.
- Added recent post options to static front page.
- Added featured post options to static front page (requires Jetpack plugin).
- Added multiple tags icon.
- Added custom header support for static home page.
- Added styles for Jetpack's Related Posts module's grid and list views.
- Added Gutenberg paragraph font size styles.
- Added Gutenberg custom colors.
- Added author name and link to Algolia search results template.

**1.3.1 - 4/20/2018**
- Fixed content and button line-height to address [issue 30](https://github.com/peiche/cover2/issues/30) (again).
- Fixed typo in Jetpack featured content description.
- Added support for button classes on menu items.

**1.3.0 - 4/9/2018**
- Fixed posts navigation margin.
- Fixed blog page top margin.
- Fixed comment navigation width.
- Fixed footer widget colors.
- Fixed word break and hyphenation styles.
- Fixed comment form field widths.
- Fixed full-height header to address [issue 31](https://github.com/peiche/cover2/issues/31).
- Changed header styles.
- Changed posts and comment navigation button styles.
- Changed Customizer footer color options.
- Added support for new [Jetpack social media icons widget](https://jetpack.com/2018/04/03/jetpack-6-0/).
- Added Customizer option to use accent color in theme icons.
- Added Customizer option to add configurable front page content.
- Replaced old grid styles with 12-column responsive grid. [Read the documentation.](RESPONSIVE-GRID.md)

**1.2.2 - 3/16/2018**
- Fixed broken close video button for Featured Video Plus.
- Fixed posts navigation vertical alignment on small screens to address [issue 28](https://github.com/peiche/cover2/issues/28).
- Updated Nucleo icons and added accent color.
- Added background color transition to Jetpack's social network icons.

**1.2.1 - 3/13/2018**
- Fixed archive header margin to address [issue 26](https://github.com/peiche/cover2/issues/26).
- Fixed paged post button styles.
- Fixed nav button focus and hover states.
- Added brand colors to Jetpack social media menu.
- Split Jetpack, Aesop Story Engine, and Algolia styles out of main stylesheet.

**1.2.0 - 2/8/2018**
- Fixed logo scaling (if SVG is used) in Internet Explorer.
- Updated button styles. Buttons now default to "solid" style, and support an optional "ghost" class for an outlined style.
- Tweaked header divider and excerpt widths.
- Added filter sidebar to Algolia Instant Search template. Small screens display a filter button in the header.

**1.1.3 - 2/4/2018**
- Fixed "posted on" and "byline" strings to address [issue 22](https://github.com/peiche/cover2/issues/22).

**1.1.2 - 1/30/2018**
- Fixed Jetpack infinite footer style.
- Fixed footer widget alignment.
- Fixed paging link styles.
- Fixed translation logic for categories and tags.
- Updated icons for video and gallery post formats.

**1.1.1 - 1/26/2018**
- Tweaked footer style.
- Updated styles for Aesop Story Engine map component.
- Updated styles for Gutenberg cover image and button blocks.

**1.1.0 - 1/10/2018**
- Fixed broken pages widget.
- Added option to apply accent color to footer.
- Added footer widgets.
- Updated Jetpack's Infinite Scroll module to account for footer widgets.

**1.0.15 - 12/5/2017**
- Fixed Aesop Story Engine chapter overlay.
- Fixed header styles on paged archives.
- Fixed [JavaScript error](https://github.com/peiche/cover2/issues/13).
- Fixed [error on 404 pages](https://github.com/peiche/cover2/issues/14).
- Fixed Aesop Story Engine chapter component logic for site header and overlay.
- Replaced Font Awesome icons with Nucleo icons.
- Removed Morpheus SVG.
- Updated Gutenberg styles.

**1.0.14 - 10/27/2017**
- Fixed Gutenberg full width gallery.

**1.0.13 - 10/27/2017**
- Fixed accessibility issue with post & page content jump links.
- Fixed JavaScript error when one or more header icons do not exist.
- Fixed featured image function.
- Fixed sub-menus in the mini-nav.
- Fixed masthead styling for posts and pages with long titles and/or excerpts.
- Added excerpt support for pages.
- Added Gutenberg styling and wide image support.
- Added single page template.

**1.0.12 - 7/18/2017**
- Fixed image URLs for page header css (thanks [@eightam](https://github.com/eightam))

**1.0.11 - 7/14/2017**
- Removed margin on page header.

**1.0.10 - 7/5/2017**
- Replaced pseudo-element ASE content overlay with a real element.
- Removed jetpack video margins when inside ASE video component.

**1.0.9 - 6/25/2017**
- Fixed broken author link style in page and post header.
- Fixed excerpt logic on single posts.
- Added "jump to content" link from full screen header.

**1.0.8 - 5/31/2017**
- Fixed caption style inconsistencies.
- Removed wpcom file.
- Moved "no header" template to templates directory.
- Updated Algolia support to include PHP 5.2.

**1.0.7 - 5/10/2017**
- Fixed logo alignment and display.
- Fixed alignment for embedded content.
- Fixed page and post header button styles.
- Fixed logo alignment in navbar.
- Updated `<pre>` and `<code>` styles.
- Updated ASE styles for scroll navigation sections.
- Updated Algolia plugin templates for v2.
- Added side navigation for Timeline components.
- Added support for Post Badges plugin.
- Added page template for Jetpack portfolio pages.
- Removed keyboard navigation for Flexslider.

**1.0.6 - 4/21/2017**
- Replaced Transformicons with SVG.
- Added Morpheus SVG for navbar icon animation.

**1.0.5 - 4/12/2017**
- Fixed link styles for mini menu, overlay, and post/page headers.
- Fixed featured content slider styles.
- Fixed styles for showing and hiding navbar.
- Fixed styles for embedded videos.
- Added navbar color option in Customizer.
- Added icon to navbar for when a post or page contains Aesop Story Engine chapter components.

**1.0.4 - 3/22/2017**
- Removed Bower assets in favor of npm.
- Fixed SVG icon references after switch from Bower to npm.
- Fixed widget text overflow for long titles.
- Fixed mini menu container.
- Fixed missing translation text in avatar alt text.
- Fixed undefined variable error.
- Compressed screenshot image.
- Removed custom logo function in favor of native WordPress function.
- Included unminified third party JavaScript files.
- Added responsive grid classes.

**1.0.3 - 3/12/2017**
- Fixed featured content bug.
- Fixed captioned image alignments.
- Added infinite scrolling spinner

**1.0.2 - 1/24/2017**
- Fixed broken HTML (missing closing style tag if no custom css)
- Fixed link colors inside Aesop content component
- Fixed image and gallery margins

**1.0.1 - 1/20/2017**
- Fixed screenshot.

**1.0 - 1/20/2017**
- Initial release.
