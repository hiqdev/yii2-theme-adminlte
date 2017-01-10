hiqdev/yii2-theme-adminlte
--------------------------

## [0.0.1] - 2017-01-10

- Fixed according to changes in `yii2-thememanager`
    - [41bd3b8] 2017-01-10 csfixed [@hiqsol]
    - [8e8fd44] 2016-12-22 + SidebarMenu widget [@hiqsol]
    - [686b9c6] 2016-12-22 + require yii2-menus [@hiqsol]
    - [eaad5e5] 2016-12-21 fixed requirements [@hiqsol]
    - [9493718] 2016-12-21 redone Menu: widget -> run, + static widget=create+run [@hiqsol]
    - [d97fef8] 2016-12-21 redone Menu::render -> widget [@hiqsol]
    - [440adf6] 2016-12-21 greatly redone according to changes in yii2-thememanager [@hiqsol]
    - [60941b4] 2016-12-21 + require hiqdev/yii2-thememanager [@hiqsol]
    - [0aa8d84] 2016-11-16 redone user-menu layout view to UserMenu widget view [@hiqsol]
    - [4f47ca0] 2016-11-16 simplified gravatar view [@hiqsol]
    - [241a7a3] 2016-11-15 removed domainchecker [@hiqsol]
    - [905cc30] 2016-11-15 Deposit link for users without permission to deposit set to # [@SilverFire]
    - [08a9585] 2016-11-11 Set colors to correct [@SilverFire]
    - [b96f1e9] 2016-11-10 Removed Deposit link for users without permission to deposit [@SilverFire]
    - [50539e0] 2016-11-07 Added iCheckAsset and fontawesome depends [@tafid]
    - [0781524] 2016-11-07 Splitted main and mini layouts [@tafid]
    - [2da135e] 2016-11-04 Removed hipanel\widget\menu from render sidebar [@tafid]
    - [b6b8268] 2016-11-04 Added HIAM style [@tafid]
    - [e5eaa3b] 2016-11-03 Added css for adminlte dashboar SmallBox widget [@tafid]
    - [c407e37] 2016-11-02 Hide `Recharge accounnt` button when user does not have the `deposite` permission [@SilverFire]
    - [d15361d] 2016-11-01 added translations to lockscreen [@hiqsol]
    - [aa37a77] 2016-10-27 Added language delimiter to miniLangMenu view [@tafid]
    - [30d60fd] 2016-10-27 fixed miniLanguageMenu view [@hiqsol]
    - [42cdbe5] 2016-10-27 Added languageMenu for adminlte mini layout [@tafid]
    - [2100fc3] 2016-10-25 translations [@hiqsol]
    - [10143d2] 2016-10-25 fixing translation [@hiqsol]
    - [8a14044] 2016-10-21 improved showing header and message in LoginForm [@hiqsol]
    - [d9807aa] 2016-10-17 used detectInputType/Icon in LoginForm [@hiqsol]
    - [2197415] 2016-10-14 removed login oriented pages: signup, confirm, resetPassword, restorePassword; moved to LoginForm widget [@hiqsol]
    - [e341d7f] 2016-10-14 redone with getText/BoolAttribute/s [@hiqsol]
    - [654e9a5] 2016-10-13 used attribute labels for placeholders in LoginForm [@hiqsol]
    - [717ad49] 2016-10-13 greatly improved LoginForm to be suitable for any login-like pages: signup, restore-password, reset-password [@hiqsol]
    - [7205cfb] 2016-10-11 csfixed [@hiqsol]
    - [5a8118c] 2016-10-10 + disable/enable signup and restore password links [@hiqsol]
    - [e2c5cc0] 2016-10-10 renamed to restorePassword <- requestPasswordResetToken [@hiqsol]
    - [1776f9f] 2016-10-04 used `agree` model field for signup checkbox [@hiqsol]
    - [c43de88] 2016-10-03 no more login -> username in Identity [@hiqsol]
    - [d870759] 2016-09-21 used /site/back to return to site [@hiqsol]
    - [dfc0139] 2016-09-21 used LogoLink widget [@hiqsol]
    - [efacd62] 2016-09-20 Applied menuManager in navbar-custom-menu layout view [@tafid]
    - [aa7e325] 2016-09-20 Deleted inline css style and changed to css class .footer-copytight [@tafid]
    - [7616622] 2016-09-14 removed strong from copyrigh [@hiqsol]
    - [1b87ca0] 2016-09-13 fixed lockscreen page, added copyright and organization link to mini layout [@hiqsol]
    - [cf180da] 2016-09-02 fixed mini layout [@hiqsol]
    - [f1ca222] 2016-09-02 simplified LoginForm: - pictonic, - buttonOptions [@hiqsol]
    - [fa01337] 2016-09-02 used Flashes and PoweredBy widgets [@hiqsol]
    - [927b768] 2016-09-02 - require pictonic asset [@hiqsol]
    - [dd9a622] 2016-09-01 used PoweredBy, CopyrightYears, OrganizationLink widgets [@hiqsol]
    - [59d8acb] 2016-09-01 quickfixes [@hiqsol]
    - [3f976f8] 2016-09-01 splitted main to `_header`, `_content`, `_footer` [@hiqsol]
    - [b12c473] 2016-08-24 redone subtitle to original Yii style [@hiqsol]
    - [3179e00] 2016-08-23 fixed [@hiqsol]
    - [ca72af6] 2016-08-22 used standart breadcrumbs [@hiqsol]
    - [b80715b] 2016-08-22 + params config file [@hiqsol]
    - [2820045] 2016-08-08 fixed translations basePath [@hiqsol]
- Fixed translations
    - [076af08] 2016-08-06 redoing translations [@hiqsol]
    - [2bbfb44] 2016-08-06 redone with LanguageMenu widget [@hiqsol]
    - [15ef08e] 2016-08-05 removed old junk Plugin.php [@hiqsol]
    - [8a31654] 2016-08-04 switched to bumping with `chkipper` [@hiqsol]
    - [e4f8eb3] 2016-06-24 Updated navbar-custom-menu to use `hipanel` dictionary [@SilverFire]
    - [b500e8f] 2016-06-30 Added language switching using langiageSwitcher component [@SilverFire]
- Fixed login and password reset pages
    - [60d9df1] 2016-07-29 Fixed autofocus priorities [@SilverFire]
    - [ac24dd1] 2016-07-26 removed obsolete comments [@hiqsol]
    - [3d9aeb0] 2016-07-21 Added ReminderTop widget to top navbar [@tafid]
    - [faeccc4] 2016-07-21 Fixed error code in site/error [@tafid]
    - [80cbd75] 2016-05-30 enabled ajax validation at signup page [@hiqsol]
    - [e51869b] 2016-05-25 csfixed [@hiqsol]
    - [483c500] 2016-05-25 added passing username through login to password reset [@hiqsol]
    - [af6be14] 2016-05-23 + configurable copyright rendering [@hiqsol]
    - [888a832] 2016-05-23 fixed resetPassword page to look like others [@hiqsol]
    - [0a34826] 2016-05-23 used `hiqdev\pnotify\Alert` at mini layout [@hiqsol]
    - [5c0c7fd] 2016-05-23 + hipanelUrl at lockscreen page [@hiqsol]
- Changed: redone with composer-config-plugin
    - [871ef44] 2016-05-20 fixed dependencies [@hiqsol]
    - [55a3405] 2016-05-20 csfixed [@hiqsol]
    - [e0eb61b] 2016-05-20 hidded search form when no domainchecker [@hiqsol]
    - [78e6366] 2016-05-18 added gravatar [@hiqsol]
    - [1c5c515] 2016-05-18 redone config for composer-config-plugin [@hiqsol]
    - [5f140fd] 2016-04-29 used local hidev and plugins [@hiqsol]
    - [523dc0a] 2016-04-29 redone `extension-config.php` to `hisite-config.php` [@hiqsol]
    - [07e495f] 2016-03-30 redone to `extension-config` <- `yii2-extraconfig` [@hiqsol]
    - [55e9326] 2016-02-24 fixed yii2-extraconfig [@hiqsol]
    - [b230763] 2016-02-24 + yii2-extraconfig [@hiqsol]
    - [c8ce706] 2016-02-21 fixing dependencies for hidev initialization [@hiqsol]
- Fixed build with asset-packagist
    - [f793db0] 2016-04-05 phpcsfixed [@hiqsol]
    - [b80165c] 2016-04-05 inited tests [@hiqsol]
    - [176fea2] 2016-04-05 fixed build with asset-packagist [@hiqsol]
- Fixed bugs
    - [7b79567] 2016-04-29 Fix collapsed sidebar [@tafid]
    - [df8a62b] 2016-04-05 Changed domain seach input name in order to match controllers expectations [@SilverFire]
    - [a5b323f] 2016-03-29 fixed link to check domain [@hiqsol]
    - [732878d] 2016-03-29 Fix form action attribute from domain to domainchecker [@tafid]
    - [ccfaf5f] 2016-03-24 Removed client login from sidebar [@SilverFire]
    - [b7ef75e] 2016-03-17 Translations update, minor [@SilverFire]
    - [d1d65b1] 2016-02-29 fixed typo [@hiqsol]
- Added passwordResetPage and signupPage parameters to change 'I forgot my password' and 'Register' links
    - [2b6afa2] 2016-02-16 + signupPage parameter [@hiqsol]
    - [39688ee] 2016-02-16 inited tests and CI [@hiqsol]
    - [1702b5b] 2016-02-16 phpcsfixed [@hiqsol]
    - [13136d3] 2016-02-16 rehideved [@hiqsol]
    - [96008fc] 2016-02-16 rehideving [@hiqsol]
    - [01f5231] 2016-02-16 + passwordResetPage app parameter to change 'I forgot my password' link [@hiqsol]
- Added balance recharge button
    - [80deae2] 2016-02-11 Add link to rechange account to sidebar balance link [@tafid]
    - [9d24d33] 2016-02-11 Minor fix. Change link to button [@tafid]
- Changed (redesigned) user menu, error page, searching
    - [91d0b23] 2016-02-18 disabled black and ebony skins [@hiqsol]
    - [421386c] 2016-02-17 improved showing user data in user-menu: + name [@hiqsol]
    - [e86f566] 2016-02-10 Redisigne left side bar user view [@tafid]
    - [4807bfb] 2016-01-29 added tranlations [@hiqsol]
    - [02139bd] 2016-01-28 search when no domains still to be done [@hiqsol]
    - [8873cf0] 2016-01-27 Add load Layout options form to control sidebar panel by ajax [@tafid]
    - [fdc3a5c] 2016-01-27 Add control sidebar with theme settings [@tafid]
    - [6ba64c1] 2016-01-26 Minor issues fix [@tafid]
    - [41e1949] 2016-01-26 Redesigne error page [@tafid]
    - [ca2c451] 2016-01-18 Search form for Domain check [@tafid]
    - [fa4bc51] 2015-12-24 Fix get params [@tafid]
    - [02ed3db] 2015-12-24 Change search field in sidebar to check domain field [@tafid]
- Added TopCart widget
    - [7017b08] 2015-10-22 Add TopCart widget [@tafid]
    - [d1cc393] 2015-11-12 improved package description [@hiqsol]
    - [922f537] 2015-11-12 redone yii2-cart <- hipanel-module-cart [@hiqsol]
- Changed deposit link to @pay/deposit <- @bill/deposit
    - [1ff8710] 2015-10-27 * deposit link to @pay/deposit <- @bill/deposit [@hiqsol]
- Added use of yii2-asset-pictonic
    - [82e3a42] 2015-09-29 used hiqdev\assets\pictonic\PictonicAsset [@hiqsol]
    - [ca99f63] 2015-09-28 + require yii2-asset-pictonic [@hiqsol]
- Added more login related pages
    - [6d6944e] 2015-09-28 renamed recovery to request-password-reset to be yii2 canonical [@hiqsol]
    - [817de93] 2015-09-28 + resetPassword template [@hiqsol]
    - [cc5db0c] 2015-09-28 + simple error page, to be redone to theme [@hiqsol]
    - [418803e] 2015-09-28 redone and renamed recovery to requestPasswordResetToken to be yii2 canonical [@hiqsol]
    - [3a080c8] 2015-09-28 redone and renamed recovery to requestPasswordResetToken to be yii2 canonical [@hiqsol]
    - [22aad6c] 2015-09-28 + confirm template [@hiqsol]
    - [02af038] 2015-09-28 + translation [@hiqsol]
    - [14c279e] 2015-09-27 + translation [@hiqsol]
    - [22ab2eb] 2015-09-27 + signup page template [@hiqsol]
    - [d5435a0] 2015-09-25 fixed all PHP short tags to proper tags [@hiqsol]
    - [5a8e5c3] 2015-09-16 * change label in view [@BladeRoot]
- Fixed getting menu items
    - [62990c0] 2015-09-14 fixed getting menu items [@hiqsol]
- Added css style for Pace widget
    - [94c953c] 2015-08-27 Add PACE [@tafid]
- Fixed PHP warnings
    - [40de700] 2015-08-27 Fixed deprecated method calling syntax [@SilverFire]
    - [b607552] 2015-08-26 Fixed PHP warnings [@hiqsol]
- Changed: renamed to AdminLteTheme
    - [e0f127a] 2015-08-22 renamed Theme to AdminLteTheme [@hiqsol]
- Added views and layouts to make this theme generally usable
    - [9c3db63] 2015-08-22 * mini layout: + powered by [@hiqsol]
    - [2c6ada6] 2015-08-22 + main layout views [@hiqsol]
    - [581ac34] 2015-08-21 + login, lockscreen, recovery views for hiam [@hiqsol]
    - [1d7c848] 2015-08-21 Add mini layout [@hiqsol]
    - [65cc6e1] 2015-08-21 + local Gravatar widget [@hiqsol]
    - [26769bc] 2015-08-21 + require gravatar [@hiqsol]
- Changed: moved to src
    - [b3512ad] 2015-08-21 php-cs-fixed [@hiqsol]
    - [40cc101] 2015-08-21 php-cs-fixed [@hiqsol]
    - [82074e1] 2015-08-21 php-cs-fixed [@hiqsol]
    - [3cf2af2] 2015-08-21 moved to src [@hiqsol]
    - [a0f6d7c] 2015-08-21 rehideved [@hiqsol]
- Added basics
    - [8f5b795] 2015-06-12 started adding views/layouts [@hiqsol]
    - [4f83402] 2015-06-09 hideved [@hiqsol]
    - [4148ff6] 2015-05-27 fixed namespaces [@hiqsol]
    - [2f70899] 2015-05-27 inited [@hiqsol]

## [Development started] - 2015-05-27

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[silverfire@hiqdev.com]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[tafid@hiqdev.com]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@hiqdev.com]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
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
[41bd3b8]: https://github.com/hiqdev/yii2-theme-adminlte/commit/41bd3b8
[8e8fd44]: https://github.com/hiqdev/yii2-theme-adminlte/commit/8e8fd44
[686b9c6]: https://github.com/hiqdev/yii2-theme-adminlte/commit/686b9c6
[eaad5e5]: https://github.com/hiqdev/yii2-theme-adminlte/commit/eaad5e5
[9493718]: https://github.com/hiqdev/yii2-theme-adminlte/commit/9493718
[d97fef8]: https://github.com/hiqdev/yii2-theme-adminlte/commit/d97fef8
[440adf6]: https://github.com/hiqdev/yii2-theme-adminlte/commit/440adf6
[60941b4]: https://github.com/hiqdev/yii2-theme-adminlte/commit/60941b4
[0aa8d84]: https://github.com/hiqdev/yii2-theme-adminlte/commit/0aa8d84
[4f47ca0]: https://github.com/hiqdev/yii2-theme-adminlte/commit/4f47ca0
[241a7a3]: https://github.com/hiqdev/yii2-theme-adminlte/commit/241a7a3
[905cc30]: https://github.com/hiqdev/yii2-theme-adminlte/commit/905cc30
[08a9585]: https://github.com/hiqdev/yii2-theme-adminlte/commit/08a9585
[b96f1e9]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b96f1e9
[50539e0]: https://github.com/hiqdev/yii2-theme-adminlte/commit/50539e0
[0781524]: https://github.com/hiqdev/yii2-theme-adminlte/commit/0781524
[2da135e]: https://github.com/hiqdev/yii2-theme-adminlte/commit/2da135e
[b6b8268]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b6b8268
[e5eaa3b]: https://github.com/hiqdev/yii2-theme-adminlte/commit/e5eaa3b
[c407e37]: https://github.com/hiqdev/yii2-theme-adminlte/commit/c407e37
[d15361d]: https://github.com/hiqdev/yii2-theme-adminlte/commit/d15361d
[aa37a77]: https://github.com/hiqdev/yii2-theme-adminlte/commit/aa37a77
[30d60fd]: https://github.com/hiqdev/yii2-theme-adminlte/commit/30d60fd
[42cdbe5]: https://github.com/hiqdev/yii2-theme-adminlte/commit/42cdbe5
[2100fc3]: https://github.com/hiqdev/yii2-theme-adminlte/commit/2100fc3
[10143d2]: https://github.com/hiqdev/yii2-theme-adminlte/commit/10143d2
[8a14044]: https://github.com/hiqdev/yii2-theme-adminlte/commit/8a14044
[d9807aa]: https://github.com/hiqdev/yii2-theme-adminlte/commit/d9807aa
[2197415]: https://github.com/hiqdev/yii2-theme-adminlte/commit/2197415
[e341d7f]: https://github.com/hiqdev/yii2-theme-adminlte/commit/e341d7f
[654e9a5]: https://github.com/hiqdev/yii2-theme-adminlte/commit/654e9a5
[717ad49]: https://github.com/hiqdev/yii2-theme-adminlte/commit/717ad49
[7205cfb]: https://github.com/hiqdev/yii2-theme-adminlte/commit/7205cfb
[5a8118c]: https://github.com/hiqdev/yii2-theme-adminlte/commit/5a8118c
[e2c5cc0]: https://github.com/hiqdev/yii2-theme-adminlte/commit/e2c5cc0
[1776f9f]: https://github.com/hiqdev/yii2-theme-adminlte/commit/1776f9f
[c43de88]: https://github.com/hiqdev/yii2-theme-adminlte/commit/c43de88
[d870759]: https://github.com/hiqdev/yii2-theme-adminlte/commit/d870759
[dfc0139]: https://github.com/hiqdev/yii2-theme-adminlte/commit/dfc0139
[efacd62]: https://github.com/hiqdev/yii2-theme-adminlte/commit/efacd62
[aa7e325]: https://github.com/hiqdev/yii2-theme-adminlte/commit/aa7e325
[7616622]: https://github.com/hiqdev/yii2-theme-adminlte/commit/7616622
[1b87ca0]: https://github.com/hiqdev/yii2-theme-adminlte/commit/1b87ca0
[cf180da]: https://github.com/hiqdev/yii2-theme-adminlte/commit/cf180da
[f1ca222]: https://github.com/hiqdev/yii2-theme-adminlte/commit/f1ca222
[fa01337]: https://github.com/hiqdev/yii2-theme-adminlte/commit/fa01337
[927b768]: https://github.com/hiqdev/yii2-theme-adminlte/commit/927b768
[dd9a622]: https://github.com/hiqdev/yii2-theme-adminlte/commit/dd9a622
[59d8acb]: https://github.com/hiqdev/yii2-theme-adminlte/commit/59d8acb
[3f976f8]: https://github.com/hiqdev/yii2-theme-adminlte/commit/3f976f8
[b12c473]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b12c473
[3179e00]: https://github.com/hiqdev/yii2-theme-adminlte/commit/3179e00
[ca72af6]: https://github.com/hiqdev/yii2-theme-adminlte/commit/ca72af6
[b80715b]: https://github.com/hiqdev/yii2-theme-adminlte/commit/b80715b
[2820045]: https://github.com/hiqdev/yii2-theme-adminlte/commit/2820045
[Under development]: https://github.com/hiqdev/yii2-theme-adminlte/releases
[0.0.1]: https://github.com/hiqdev/yii2-theme-adminlte/releases/tag/0.0.1
