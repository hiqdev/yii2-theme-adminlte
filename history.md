hiqdev/yii2-theme-adminlte
--------------------------

## [Under development]

- Fixed translations
    - [076af08] 2016-08-06 redoing translations [sol@hiqdev.com]
    - [2bbfb44] 2016-08-06 redone with LanguageMenu widget [sol@hiqdev.com]
    - [15ef08e] 2016-08-05 removed old junk Plugin.php [sol@hiqdev.com]
    - [8a31654] 2016-08-04 switched to bumping with `chkipper` [sol@hiqdev.com]
    - [e4f8eb3] 2016-06-24 Updated navbar-custom-menu to use `hipanel` dictionary [d.naumenko.a@gmail.com]
    - [b500e8f] 2016-06-30 Added language switching using langiageSwitcher component [d.naumenko.a@gmail.com]
- Fixed login and password reset pages
    - [60d9df1] 2016-07-29 Fixed autofocus priorities [d.naumenko.a@gmail.com]
    - [ac24dd1] 2016-07-26 removed obsolete comments [sol@hiqdev.com]
    - [3d9aeb0] 2016-07-21 Added ReminderTop widget to top navbar [andreyklochok@gmail.com]
    - [faeccc4] 2016-07-21 Fixed error code in site/error [andreyklochok@gmail.com]
    - [80cbd75] 2016-05-30 enabled ajax validation at signup page [sol@hiqdev.com]
    - [e51869b] 2016-05-25 csfixed [sol@hiqdev.com]
    - [483c500] 2016-05-25 added passing username through login to password reset [sol@hiqdev.com]
    - [af6be14] 2016-05-23 + configurable copyright rendering [sol@hiqdev.com]
    - [888a832] 2016-05-23 fixed resetPassword page to look like others [sol@hiqdev.com]
    - [0a34826] 2016-05-23 used `hiqdev\pnotify\Alert` at mini layout [sol@hiqdev.com]
    - [5c0c7fd] 2016-05-23 + hipanelUrl at lockscreen page [sol@hiqdev.com]
- Changed: redone with composer-config-plugin
    - [871ef44] 2016-05-20 fixed dependencies [sol@hiqdev.com]
    - [55a3405] 2016-05-20 csfixed [sol@hiqdev.com]
    - [e0eb61b] 2016-05-20 hidded search form when no domainchecker [sol@hiqdev.com]
    - [78e6366] 2016-05-18 added gravatar [sol@hiqdev.com]
    - [1c5c515] 2016-05-18 redone config for composer-config-plugin [sol@hiqdev.com]
    - [5f140fd] 2016-04-29 used local hidev and plugins [sol@hiqdev.com]
    - [523dc0a] 2016-04-29 redone `extension-config.php` to `hisite-config.php` [sol@hiqdev.com]
    - [07e495f] 2016-03-30 redone to `extension-config` <- `yii2-extraconfig` [sol@hiqdev.com]
    - [55e9326] 2016-02-24 fixed yii2-extraconfig [sol@hiqdev.com]
    - [b230763] 2016-02-24 + yii2-extraconfig [sol@hiqdev.com]
    - [c8ce706] 2016-02-21 fixing dependencies for hidev initialization [sol@hiqdev.com]
- Fixed build with asset-packagist
    - [f793db0] 2016-04-05 phpcsfixed [sol@hiqdev.com]
    - [b80165c] 2016-04-05 inited tests [sol@hiqdev.com]
    - [176fea2] 2016-04-05 fixed build with asset-packagist [sol@hiqdev.com]
- Fixed bugs
    - [7b79567] 2016-04-29 Fix collapsed sidebar [andreyklochok@gmail.com]
    - [df8a62b] 2016-04-05 Changed domain seach input name in order to match controllers expectations [d.naumenko.a@gmail.com]
    - [a5b323f] 2016-03-29 fixed link to check domain [sol@hiqdev.com]
    - [732878d] 2016-03-29 Fix form action attribute from domain to domainchecker [andreyklochok@gmail.com]
    - [ccfaf5f] 2016-03-24 Removed client login from sidebar [d.naumenko.a@gmail.com]
    - [b7ef75e] 2016-03-17 Translations update, minor [d.naumenko.a@gmail.com]
    - [d1d65b1] 2016-02-29 fixed typo [sol@hiqdev.com]
- Added passwordResetPage and signupPage parameters to change 'I forgot my password' and 'Register' links
    - [2b6afa2] 2016-02-16 + signupPage parameter [sol@hiqdev.com]
    - [39688ee] 2016-02-16 inited tests and CI [sol@hiqdev.com]
    - [1702b5b] 2016-02-16 phpcsfixed [sol@hiqdev.com]
    - [13136d3] 2016-02-16 rehideved [sol@hiqdev.com]
    - [96008fc] 2016-02-16 rehideving [sol@hiqdev.com]
    - [01f5231] 2016-02-16 + passwordResetPage app parameter to change 'I forgot my password' link [sol@hiqdev.com]
- Added balance recharge button
    - [80deae2] 2016-02-11 Add link to rechange account to sidebar balance link [andreyklochok@gmail.com]
    - [9d24d33] 2016-02-11 Minor fix. Change link to button [andreyklochok@gmail.com]
- Changed (redesigned) user menu, error page, searching
    - [91d0b23] 2016-02-18 disabled black and ebony skins [sol@hiqdev.com]
    - [421386c] 2016-02-17 improved showing user data in user-menu: + name [sol@hiqdev.com]
    - [e86f566] 2016-02-10 Redisigne left side bar user view [andreyklochok@gmail.com]
    - [4807bfb] 2016-01-29 added tranlations [sol@hiqdev.com]
    - [02139bd] 2016-01-28 search when no domains still to be done [sol@hiqdev.com]
    - [8873cf0] 2016-01-27 Add load Layout options form to control sidebar panel by ajax [andreyklochok@gmail.com]
    - [fdc3a5c] 2016-01-27 Add control sidebar with theme settings [andreyklochok@gmail.com]
    - [6ba64c1] 2016-01-26 Minor issues fix [andreyklochok@gmail.com]
    - [41e1949] 2016-01-26 Redesigne error page [andreyklochok@gmail.com]
    - [ca2c451] 2016-01-18 Search form for Domain check [andreyklochok@gmail.com]
    - [fa4bc51] 2015-12-24 Fix get params [andreyklochok@gmail.com]
    - [02ed3db] 2015-12-24 Change search field in sidebar to check domain field [andreyklochok@gmail.com]
- Added TopCart widget
    - [7017b08] 2015-10-22 Add TopCart widget [andreyklochok@gmail.com]
    - [d1cc393] 2015-11-12 improved package description [sol@hiqdev.com]
    - [922f537] 2015-11-12 redone yii2-cart <- hipanel-module-cart [sol@hiqdev.com]
- Changed deposit link to @pay/deposit <- @bill/deposit
    - [1ff8710] 2015-10-27 * deposit link to @pay/deposit <- @bill/deposit [sol@hiqdev.com]
- Added use of yii2-asset-pictonic
    - [82e3a42] 2015-09-29 used hiqdev\assets\pictonic\PictonicAsset [sol@hiqdev.com]
    - [ca99f63] 2015-09-28 + require yii2-asset-pictonic [sol@hiqdev.com]
- Added more login related pages
    - [6d6944e] 2015-09-28 renamed recovery to request-password-reset to be yii2 canonical [sol@hiqdev.com]
    - [817de93] 2015-09-28 + resetPassword template [sol@hiqdev.com]
    - [cc5db0c] 2015-09-28 + simple error page, to be redone to theme [sol@hiqdev.com]
    - [418803e] 2015-09-28 redone and renamed recovery to requestPasswordResetToken to be yii2 canonical [sol@hiqdev.com]
    - [3a080c8] 2015-09-28 redone and renamed recovery to requestPasswordResetToken to be yii2 canonical [sol@hiqdev.com]
    - [22aad6c] 2015-09-28 + confirm template [sol@hiqdev.com]
    - [02af038] 2015-09-28 + translation [sol@hiqdev.com]
    - [14c279e] 2015-09-27 + translation [sol@hiqdev.com]
    - [22ab2eb] 2015-09-27 + signup page template [sol@hiqdev.com]
    - [d5435a0] 2015-09-25 fixed all PHP short tags to proper tags [sol@hiqdev.com]
    - [5a8e5c3] 2015-09-16 * change label in view [bladeroot@gmail.com]
- Fixed getting menu items
    - [62990c0] 2015-09-14 fixed getting menu items [sol@hiqdev.com]
- Added css style for Pace widget
    - [94c953c] 2015-08-27 Add PACE [andreyklochok@gmail.com]
- Fixed PHP warnings
    - [40de700] 2015-08-27 Fixed deprecated method calling syntax [d.naumenko.a@gmail.com]
    - [b607552] 2015-08-26 Fixed PHP warnings [sol@hiqdev.com]
- Changed: renamed to AdminLteTheme
    - [e0f127a] 2015-08-22 renamed Theme to AdminLteTheme [sol@hiqdev.com]
- Added views and layouts to make this theme generally usable
    - [9c3db63] 2015-08-22 * mini layout: + powered by [sol@hiqdev.com]
    - [2c6ada6] 2015-08-22 + main layout views [sol@hiqdev.com]
    - [581ac34] 2015-08-21 + login, lockscreen, recovery views for hiam [sol@hiqdev.com]
    - [1d7c848] 2015-08-21 Add mini layout [sol@hiqdev.com]
    - [65cc6e1] 2015-08-21 + local Gravatar widget [sol@hiqdev.com]
    - [26769bc] 2015-08-21 + require gravatar [sol@hiqdev.com]
- Changed: moved to src
    - [b3512ad] 2015-08-21 php-cs-fixed [sol@hiqdev.com]
    - [40cc101] 2015-08-21 php-cs-fixed [sol@hiqdev.com]
    - [82074e1] 2015-08-21 php-cs-fixed [sol@hiqdev.com]
    - [3cf2af2] 2015-08-21 moved to src [sol@hiqdev.com]
    - [a0f6d7c] 2015-08-21 rehideved [sol@hiqdev.com]
- Added basics
    - [8f5b795] 2015-06-12 started adding views/layouts [sol@hiqdev.com]
    - [4f83402] 2015-06-09 hideved [sol@hiqdev.com]
    - [4148ff6] 2015-05-27 fixed namespaces [sol@hiqdev.com]
    - [2f70899] 2015-05-27 inited [sol@hiqdev.com]

## [Development started] - 2015-05-27

[e51869b]: https://github.com/hiqdev/yii2-theme-adminlte/commit/e51869b
[483c500]: https://github.com/hiqdev/yii2-theme-adminlte/commit/483c500
[af6be14]: https://github.com/hiqdev/yii2-theme-adminlte/commit/af6be14
[888a832]: https://github.com/hiqdev/yii2-theme-adminlte/commit/888a832
[0a34826]: https://github.com/hiqdev/yii2-theme-adminlte/commit/0a34826
[5c0c7fd]: https://github.com/hiqdev/yii2-theme-adminlte/commit/5c0c7fd
[871ef44]: https://github.com/hiqdev/yii2-theme-adminlte/commit/871ef44
[55a3405]: https://github.com/hiqdev/yii2-theme-adminlte/commit/55a3405
[e0eb61b]: https://github.com/hiqdev/yii2-theme-adminlte/commit/e0eb61b
[78e6366]: https://github.com/hiqdev/yii2-theme-adminlte/commit/78e6366
[1c5c515]: https://github.com/hiqdev/yii2-theme-adminlte/commit/1c5c515
[5f140fd]: https://github.com/hiqdev/yii2-theme-adminlte/commit/5f140fd
[523dc0a]: https://github.com/hiqdev/yii2-theme-adminlte/commit/523dc0a
[07e495f]: https://github.com/hiqdev/yii2-theme-adminlte/commit/07e495f
[55e9326]: https://github.com/hiqdev/yii2-theme-adminlte/commit/55e9326
[b230763]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b230763
[c8ce706]: https://github.com/hiqdev/yii2-theme-adminlte/commit/c8ce706
[f793db0]: https://github.com/hiqdev/yii2-theme-adminlte/commit/f793db0
[b80165c]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b80165c
[176fea2]: https://github.com/hiqdev/yii2-theme-adminlte/commit/176fea2
[7b79567]: https://github.com/hiqdev/yii2-theme-adminlte/commit/7b79567
[df8a62b]: https://github.com/hiqdev/yii2-theme-adminlte/commit/df8a62b
[a5b323f]: https://github.com/hiqdev/yii2-theme-adminlte/commit/a5b323f
[732878d]: https://github.com/hiqdev/yii2-theme-adminlte/commit/732878d
[ccfaf5f]: https://github.com/hiqdev/yii2-theme-adminlte/commit/ccfaf5f
[b7ef75e]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b7ef75e
[d1d65b1]: https://github.com/hiqdev/yii2-theme-adminlte/commit/d1d65b1
[2b6afa2]: https://github.com/hiqdev/yii2-theme-adminlte/commit/2b6afa2
[39688ee]: https://github.com/hiqdev/yii2-theme-adminlte/commit/39688ee
[1702b5b]: https://github.com/hiqdev/yii2-theme-adminlte/commit/1702b5b
[13136d3]: https://github.com/hiqdev/yii2-theme-adminlte/commit/13136d3
[96008fc]: https://github.com/hiqdev/yii2-theme-adminlte/commit/96008fc
[01f5231]: https://github.com/hiqdev/yii2-theme-adminlte/commit/01f5231
[80deae2]: https://github.com/hiqdev/yii2-theme-adminlte/commit/80deae2
[9d24d33]: https://github.com/hiqdev/yii2-theme-adminlte/commit/9d24d33
[91d0b23]: https://github.com/hiqdev/yii2-theme-adminlte/commit/91d0b23
[421386c]: https://github.com/hiqdev/yii2-theme-adminlte/commit/421386c
[e86f566]: https://github.com/hiqdev/yii2-theme-adminlte/commit/e86f566
[4807bfb]: https://github.com/hiqdev/yii2-theme-adminlte/commit/4807bfb
[02139bd]: https://github.com/hiqdev/yii2-theme-adminlte/commit/02139bd
[8873cf0]: https://github.com/hiqdev/yii2-theme-adminlte/commit/8873cf0
[fdc3a5c]: https://github.com/hiqdev/yii2-theme-adminlte/commit/fdc3a5c
[6ba64c1]: https://github.com/hiqdev/yii2-theme-adminlte/commit/6ba64c1
[41e1949]: https://github.com/hiqdev/yii2-theme-adminlte/commit/41e1949
[ca2c451]: https://github.com/hiqdev/yii2-theme-adminlte/commit/ca2c451
[fa4bc51]: https://github.com/hiqdev/yii2-theme-adminlte/commit/fa4bc51
[02ed3db]: https://github.com/hiqdev/yii2-theme-adminlte/commit/02ed3db
[7017b08]: https://github.com/hiqdev/yii2-theme-adminlte/commit/7017b08
[d1cc393]: https://github.com/hiqdev/yii2-theme-adminlte/commit/d1cc393
[922f537]: https://github.com/hiqdev/yii2-theme-adminlte/commit/922f537
[1ff8710]: https://github.com/hiqdev/yii2-theme-adminlte/commit/1ff8710
[82e3a42]: https://github.com/hiqdev/yii2-theme-adminlte/commit/82e3a42
[ca99f63]: https://github.com/hiqdev/yii2-theme-adminlte/commit/ca99f63
[6d6944e]: https://github.com/hiqdev/yii2-theme-adminlte/commit/6d6944e
[817de93]: https://github.com/hiqdev/yii2-theme-adminlte/commit/817de93
[cc5db0c]: https://github.com/hiqdev/yii2-theme-adminlte/commit/cc5db0c
[418803e]: https://github.com/hiqdev/yii2-theme-adminlte/commit/418803e
[3a080c8]: https://github.com/hiqdev/yii2-theme-adminlte/commit/3a080c8
[22aad6c]: https://github.com/hiqdev/yii2-theme-adminlte/commit/22aad6c
[02af038]: https://github.com/hiqdev/yii2-theme-adminlte/commit/02af038
[14c279e]: https://github.com/hiqdev/yii2-theme-adminlte/commit/14c279e
[22ab2eb]: https://github.com/hiqdev/yii2-theme-adminlte/commit/22ab2eb
[d5435a0]: https://github.com/hiqdev/yii2-theme-adminlte/commit/d5435a0
[5a8e5c3]: https://github.com/hiqdev/yii2-theme-adminlte/commit/5a8e5c3
[62990c0]: https://github.com/hiqdev/yii2-theme-adminlte/commit/62990c0
[94c953c]: https://github.com/hiqdev/yii2-theme-adminlte/commit/94c953c
[40de700]: https://github.com/hiqdev/yii2-theme-adminlte/commit/40de700
[b607552]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b607552
[e0f127a]: https://github.com/hiqdev/yii2-theme-adminlte/commit/e0f127a
[9c3db63]: https://github.com/hiqdev/yii2-theme-adminlte/commit/9c3db63
[2c6ada6]: https://github.com/hiqdev/yii2-theme-adminlte/commit/2c6ada6
[581ac34]: https://github.com/hiqdev/yii2-theme-adminlte/commit/581ac34
[1d7c848]: https://github.com/hiqdev/yii2-theme-adminlte/commit/1d7c848
[65cc6e1]: https://github.com/hiqdev/yii2-theme-adminlte/commit/65cc6e1
[26769bc]: https://github.com/hiqdev/yii2-theme-adminlte/commit/26769bc
[b3512ad]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b3512ad
[40cc101]: https://github.com/hiqdev/yii2-theme-adminlte/commit/40cc101
[82074e1]: https://github.com/hiqdev/yii2-theme-adminlte/commit/82074e1
[3cf2af2]: https://github.com/hiqdev/yii2-theme-adminlte/commit/3cf2af2
[a0f6d7c]: https://github.com/hiqdev/yii2-theme-adminlte/commit/a0f6d7c
[8f5b795]: https://github.com/hiqdev/yii2-theme-adminlte/commit/8f5b795
[4f83402]: https://github.com/hiqdev/yii2-theme-adminlte/commit/4f83402
[4148ff6]: https://github.com/hiqdev/yii2-theme-adminlte/commit/4148ff6
[2f70899]: https://github.com/hiqdev/yii2-theme-adminlte/commit/2f70899
[60d9df1]: https://github.com/hiqdev/yii2-theme-adminlte/commit/60d9df1
[ac24dd1]: https://github.com/hiqdev/yii2-theme-adminlte/commit/ac24dd1
[3d9aeb0]: https://github.com/hiqdev/yii2-theme-adminlte/commit/3d9aeb0
[faeccc4]: https://github.com/hiqdev/yii2-theme-adminlte/commit/faeccc4
[b500e8f]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b500e8f
[e4f8eb3]: https://github.com/hiqdev/yii2-theme-adminlte/commit/e4f8eb3
[80cbd75]: https://github.com/hiqdev/yii2-theme-adminlte/commit/80cbd75
[8a31654]: https://github.com/hiqdev/yii2-theme-adminlte/commit/8a31654
[076af08]: https://github.com/hiqdev/yii2-theme-adminlte/commit/076af08
[2bbfb44]: https://github.com/hiqdev/yii2-theme-adminlte/commit/2bbfb44
[15ef08e]: https://github.com/hiqdev/yii2-theme-adminlte/commit/15ef08e
