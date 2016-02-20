## 3.3.3 (February 20, 2016)
Fix bug with custom field on post and attachment.
Fix bug with an auto-enabled ElasticSearch engine.

## 3.3.2 (January 11, 2015)
Make the package a plugin from composer.

## 3.3.1 (January 09, 2015)
Update composer and REAMDME.md

## 3.3.0 (January 06, 2015)
HAPPY NEW YEAR EVERYONE :)

- **New**
  - homepage and login redesigned
  - please welcome new tabs on custom pages
  - use of hooks to populate custom contents, such as pages, post types, terms
  - use of the new WP termmeta methods: <get_term_meta> and <update_term_meta>
- **Enhance:**
  - all code globally with new smart folder structure
  - plugins introduction with search engine only for now
  - update all fields design
  - search engine is now ElasticSearch 2.0 ready
  - <grunt> tasks enhanced

## 3.2.7 (December 14, 2015)
## 3.2.6 (December 14, 2015)
Fix <Checkbox> sent values.

## 3.2.5 (December 14, 2015)
Fix file_get_contents access bug.

## 3.2.4 (December 13, 2015)
Fix parse error from STATICS on class definition.

## 3.2.3 (December 10, 2015)
Enhance <Upload> field with labels customization.

## 3.2.2 (December 10, 2015)
Fix global headings CSS.

## 3.2.1 (December 10, 2015)
Fix <Section> CSS.

## 3.2.0 (December 10, 2015)
Fix hooks on post types list page.
Fix some CSS displays.

## 3.1.0 (November 09, 2015)
Use Behat Transliterator script in vendor.

## 3.0.0 (November 09, 2015)
**NEW VERSION, NEW CODE**

- **New**
  - first of all, add new TWIG engine as a template engine
- **Enhance:**
  - update all fields design
- **Delete:**
  - remove <Review> and <Gallery> fields



## 2.3.9 (November 6, 2015)
Make <Hidden> and <Includes> fields usable in a post page.

## 2.3.8 (July 17, 2015)
Get back menu on admin bar, add assets version number, get WordPress 4.3 compatibility.

## 2.3.7 (July 17, 2015)
Fix bug on <Link> field.

## 2.3.6 (July 17, 2015)
Assets are now accessibles even if no pages are defined.

## 2.3.5 (July 08, 2015)
Make `Link` field expandable.

## 2.3.4 (June 26, 2015)
Fix enqueue media action.

## 2.3.3 (June 26, 2015)
Add lots of backend optimization.

- **Fix**
  - override the wp_enqueue_media function from WordPress by a new wp_enqueue_media_tto function
  - remove all flush_rewrite_rules functions
- **New**
  - add a new footer link for flush rewrite rules once


## 2.3.2 (June 24, 2015)
Backend design updated.

## 2.3.1 (June 24, 2015)
New tag with an updated composer.json

## 2.3.0 (June 24, 2015)
Add some htmlentites in text inputs.
Fix some design bugs from the new WP version.

## 2.2.0 (April 01, 2015)
Update the `Gallery` field with some new functions.
Naaaa, that was a joke! I did nothing in fact.

## 2.1.0 (February 25, 2015)
There's a new field in town

- **New:**
  - add new `toggle` field with only 1 or 0 values stored in DB

## 2.0.3 (February 24, 2015)
Fix bug on CTPs check.

## 2.0.2 (February 24, 2015)
Merge code_climate branch into master, fix `Link` field bug.

## 2.0.1 (February 22, 2015)
Fix small bug with _get_option and _set_option

## 2.0.0 (February 22, 2015)
Add a lots of features and fix lots of bugs.
We follow now the [semver](http://semver.org/) guidelines, that's why we made the 2.0.0 ;)

- **Fix:**
  - now saving a CPT will only save its custom fields
  - now saving a CT will only save its custom fields
  - all std attributes are now named default
  - all checkall buttons have now their own ID
- **Enhance:**
  - data are now saved in DB without autoload
  - the main file integrates now _get_option and _set_option methods
  - update the `background` fiend with new display
  - update the `social` field with expandable attribute



## 1.5.2-19 (February 20, 2015)
Fix menu icon call

## 1.5.2-18 (February 19, 2015)
Fix small bug on svg call again

## 1.5.2-17 (February 19, 2015)
Fix small bug on svg call

## 1.5.2-16 (February 12, 2015)
Add your own social networks ;)

- **Enhance:**
  - the `social` field supports now your custom social networks

## 1.5.2-15 (February 09, 2015)
Welcome [Leaflet](http://leafletjs.com/) ;)

- **New:**
  - add Leaflet package from Bower
  - update the `maps` field with real-time preview

## 1.5.2-14 (February 07, 2015)
Fix some bugs.

## 1.5.2-13 (February 06, 2015)
[CodeClimate](https://codeclimate.com/github/Takeatea/tea_theme_options) and [Gratipay](https://gratipay.com/crewstyle/) integration in the README.md

## 1.5.2-12 (February 06, 2015)
Update the .gitignore file with bower generated files (no need in the package)

## 1.5.2-11 (February 06, 2015)
Ladies and Gentlemen, please welcome to BOWER :)

- **New:**
  - all dependencies are imported with bower.json
  - command lines to install Grunt and Bower in README.md
- **Enhance:**
  - the `section` field get now svg and identifier attributes
  - svg files are themed
- **Delete:**
  - remove all JS packages from the Assets folder

## 1.5.2-10 (February 05, 2015)
Update composer.json

## 1.5.2-9 (February 05, 2015)
Add [Selectize.js](http://brianreavis.github.io/selectize.js/) theme colors

## 1.5.2-8 (February 04, 2015)
Add notifications option in instanciation

## 1.5.2-7 (February 02, 2015)
HAPPY NEW YEAR :)

- **New:**
  - add multiselect JS actions on `wordpress` and `multiselect` fields

## 1.5.2-6 (December 01, 2014)
Fix bugs in `upload` field

## 1.5.2-5 (November 24, 2014)
## 1.5.2-4 (November 24, 2014)
Fix bugs in `maps` field with marker

## 1.5.2-3 (November 24, 2014)
Fix `color` fields default value, update custom permalinks with new indications and updated-message block

## 1.5.2-2 (November 20, 2014)
Remove [HTML5 Sortable](http://farhadi.ir/projects/html5sortable) jQuery component already installe din WP core

## 1.5.2-1 (November 20, 2014)
Fix lots of bugs and add update CPTs from footer

- **New:**
  - add new `taxonomies` mode on `wordpress` field
  - add new update CPT from footer
- **Fix:**
  - fix bugs on `Taxonomies`

## 1.5.2 (November 20, 2014)
Lots of new features with some bug fixed

- **New:**
  - some fields are now draggable thanks to the [HTML5 Sortable](http://farhadi.ir/projects/html5sortable) jQuery component
  - `hidden` field is now displayed in the interface (very usefull!)
- **Enhance:**
  - documentation is now on [readme.io](http://tea-theme-options.readme.io/)
  - remove title from `hidden` field
- **Fix:**
  - fix bugs on `checkbox` field
  - fix bugs on `gallery` field
  - fix bugs on `multiselect` field
  - fix bugs on `radio` field
  - fix bugs on `select` field
  - fix bugs on `social` field
  - fix bugs on `upload` field

## 1.5.1-8 (November 18, 2014)
Fix bug with PHP in `code` field.

## 1.5.1-6 ~ 1.5.1-7 (November 18, 2014)
New `code` field with CodeMirror component. You can now add easily snippets CPT if you need it :)

## 1.5.1-5 (November 15, 2014)
Please, welcome to the new 4th elements: new custom admin themes.

## 1.5.1-4 (November 14, 2014)
Fix bugs on `upload` and `gallery` fields.

## 1.5.1-2 ~ 1.5.1-3 (November 13, 2014)
Fix bugs on JS for widgets.

## 1.5.1-1 (November 13, 2014)
Update less compilation, add new messages display.
Theme are now lessables.

## 1.5.1 (November 12, 2014)
Fix bugs on `gallery`, on `upload`, on much more.
Improve package with LESS compilation.

## 1.5.0-4 (November 07, 2014)
Fix bugs on `gallery` finally! TinyMCE improvements

## 1.5.0-3 (November 07, 2014)
Fix bugs on `upload`... too bad...

## 1.5.0-2 (November 07, 2014)
Fix bugs on `upload` field for galleries

## 1.5.0-1 (November 07, 2014)
Fix bugs on `upload` field, add some CSS enhancements

## 1.5.0 (November 07, 2014)
Lots of new features with new core update version

- **New:**
  - new `date` field
  - new `link` field
  - new TeaAdminMessage class
- **Enhance:**
  - all JS packages
  - JShint validation
- **Fix:**
  - fix bugs on `review` field
  - fix bugs on `gallery` field

And so much more...



## 1.4.3.12 (August 19, 2014)
Fix some CSS bugs

## 1.4.3.11 (August 19, 2014)
Add responsive menu

## 1.4.3.10 (August 18, 2014)
Add new process for create index and index contents in Elasticsearch

## 1.4.3.9 (August 11, 2014)
Enhance Elasticsearch check while updating

## 1.4.3.8 (August 10, 2014)
Enhance Elasticsearch check... again...
Fix small bug on Elasticsearch save paramters

## 1.4.3.7 (August 10, 2014)
Enhance Elasticsearch check

## 1.4.3.6 (August 10, 2014)
Add Elasticsearch check before check

## 1.4.3.5 (August 9, 2014)
Add new login page

## 1.4.3.4 (August 8, 2014)
Add two new administration theme colors

## 1.4.3.3 (August 7, 2014)
Add global array configuration, fix some CSS bugs

## 1.4.3.2 (August 7, 2014)
Change licence and headings. Delete the BR field (useless)

## 1.4.3.1 (August 7, 2014)
Fix bug on taxonomies, add optimizations on Maps field, normalize GET actions

## 1.4.3 (August 6, 2014)
Add capabilities, admin notice, and so much more.

## 1.4.2 (August 4, 2014)
Update code to the new version

- **New:**
  - new Custom Taxonomies

## 1.4.1 (August 1, 2014)
Update code to the new version

- **New:**
  - new `review` field
  - new `elasticsearch` field
  - new folder structure
  - use of namespaces
  - use of composer
  - use of GruntJS

## 1.4.0 (April 9, 2014)
Update code to the new version

- **New:**
  - new `map` field
  - new `date` field



## 1.3.0.2 (October 11, 2013)
Fix small bug on upload field

## 1.3.0.1 (October 11, 2013)
Get current dir dynamically

## 1.3.0 (October 11, 2013)
**NEW VERSION, NEW CODE**



## 1.2.13 (August 8, 2013)
Change CRON calls to the constructor method

## 1.2.12 (July 31, 2013)

Fix small bug in Twitter template
Display update date on network templates
Adds descriptions on documentation page

## 1.2.12 (July 31, 2013)
Make all business code in one single function, add `twitter` connection and make new Wordpress CRON schedules to update DB

- **New:**
  - new `twitter` field with API, connection and more
  - new Wordpress CRON schedules to update networks contents in DB and cache
- **Edit:**
  - business code for networks is now in one single function: updateNetwork

## 1.2.11 (July 30, 2013)
Fix some bugs with Instagram recent medias and FlickR username

- **Fix:**
  - fix Instagram recent medias bug
  - fix FlickR username bug

## 1.2.10 (July 30, 2013)
New `flickr` field with API

- **New:**
  - new `flickr` field with API, connection and more

## 1.2.9 (July 29, 2013)
Edit header layout without form, new `instagram` field with API, new _del_option function

- **Edit:**
  - add submit option in header layout: no form without button ;)
- **New:**
  - new `instagram` field with API, connection and more
  - new _del_option function to delete option from DB and transient

## 1.2.8 (July 26, 2013)
Detele Date field and add new RTE field.

- **Edit:**
  - delete `date` field 'cause it useless too...
  - optimize JS scripts
- **New:**
  - new `rte` field to get all Wordpress powaaa :)

## 1.2.7 (July 26, 2013)
Update Background field and fix lots of bugs

- **Edit:**
  - update `background` field to a better experience
  - delete `image` field 'cause it was... hum... useless
- **Fix:**
  - Enqueue new media script to be compliant with Wordpress 3.5.2

## 1.2.6 (July 23, 2013)
Update Google font field and optimize script

- **Edit:**
  - delete all switches to let if/else instead
  - update Google `font` field to display to 18 fonts
- **Fix:**
  - Fix small bug on README.md

## 1.2.5 (July 11, 2013)
New usefull field and fix bug

- **Fix:**
  - fix `multiselect` forgotten field
- **New:**
  - new `include` field to display everything you want

## 1.2.4 (July 11, 2013)
README.md up to date with default documentation page

- **Edit:**
  - README.md

## 1.2.3 (May 27, 2013)
Get real advices from [Xavier C.](https://twitter.com/xavismeh) :)

- **Edit:**
  - assets are now enabled in all Wordpress admin pages (a big news is coming ;))
  - back to `checkbox`/`select`/`radio` instead of `choice` (not userfriendly)
  - icons are now defined in the TeaTO and not settable anymore
  - no more "__categories" special name anymore: you can set "__category" for simple or multiple choices
  - public keys are now privates
- **Fix:**
  - fix `hidden` field which does not need description or title attributes
- **New:**
  - here comes the new default TeaTO Documentation page (appears even if you have no settings)
  - new `features` and `list` fields to display contents
  - new way to disable Wordpress scripts/styles on the TeaTO custom pages

## 1.2.2 (May 27, 2013)
Fix some bugs, adds new fields, adds new default documentation page, better media-views integration, new scripts, and more...
Details on the next commit

## 1.2.1 (May 14, 2013)
Fix some small bugs

- **Fix:**
  - delete a forgotten enclosure
- **New:**
  - add TeaTO version

## 1.2.0 (May 14, 2013)
Add some new fields and fix small bugs

- **Edit:**
  - edit all TeaTO definition by setting only pages (no more subpages now)
  - edit `category`/`menu`/`page`/`post`/`posttype`/`tag` fields with some extra options in a WordpressContents function
- **Fix:**
  - fix the empty color value
- **New:**
  - add Background field with all needed options
  - add new page config to hide submit button
  - prepare default documentation page with no options



## 1.1.1 (May 03, 2013)
Add some new fields and fix small bugs

- **Edit:**
  - edit `social` field to include label and link data
- **New:**
  - add Wordpress admin bar links
  - add some Defaults values
  - add _set_option() function to the Tea TO package
  - add Paragraph field
  - add rows option to `textarea` field
  - prepare RTE and Date new fields

## 1.1.0 (April 25, 2013)
Add some new fields and fix small bugs

- **Edit:**
  - edit `br/` and `hr/` fields
  - edit `text` field with some extra options instead of number/range/email/password/search/url fields
- **Fix:**
  - fix `font` field
- **New:**
  - add _get_option() function to the Tea TO package
  - add Choice field with some extra options instead of checkbox/radio/select/multiselect fields



## 1.0.3 (March 31, 2013)
Some improvments on checkbox fields and new social icons

- **New:**
  - add an "Un/select all checkboxes" on image and social fields
  - add Bloglovin, Hellocoton and Youtube social icons

## 1.0.2 (March 31, 2013)
Add a small checkbox feature

- **New:**
  - add an "Un/select all checkboxes" on checkbox field

## 1.0.1 (March 26, 2013)
List now all next todos and add some extra features

- **Fix:**
  - fix title display on breadcrumb
  - fix JS media popin
- **New:**
  - uses now the Wordpress Media Uploader
  - uses now the Wordpress Color field
  - add information in function comments
  - add admin warning messages
  - add Instagram social button

## v1.0.0 (October 30, 2012)
**INITIAL RELEASE**
