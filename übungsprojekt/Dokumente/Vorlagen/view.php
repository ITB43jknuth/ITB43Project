<!DOCTYPE html>
<html  dir="ltr" lang="de" xml:lang="de">
<head>
    <title>ITB43_44_OOP_C#_HAR: Tipp: Anbindung von ACCESS 2007-2010</title>
    <link rel="shortcut icon" href="https://bk-hilden.lms.schulon.org/theme/image.php/clean/theme/1481028331/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, ITB43_44_OOP_C#_HAR: Tipp: Anbindung von ACCESS 2007-2010" />
<link rel="stylesheet" type="text/css" href="https://bk-hilden.lms.schulon.org/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://bk-hilden.lms.schulon.org/theme/styles.php/clean/1481028331/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/bk-hilden.lms.schulon.org","sesskey":"H4KuZj7tVl","loadingicon":"https:\/\/bk-hilden.lms.schulon.org\/theme\/image.php\/clean\/core\/1481028331\/i\/loading_small","themerev":"1481028331","slasharguments":1,"theme":"clean","jsrev":"1481028331","admin":"admin","svgicons":true};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''};if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else me.path=component+'/'+component+'.'+me.type};
YUI_config = {"debug":false,"base":"https:\/\/bk-hilden.lms.schulon.org\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/bk-hilden.lms.schulon.org\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/bk-hilden.lms.schulon.org\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/bk-hilden.lms.schulon.org\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/bk-hilden.lms.schulon.org\/theme\/yui_combo.php?m\/1481028331\/","combine":true,"comboBase":"https:\/\/bk-hilden.lms.schulon.org\/theme\/yui_combo.php?","ext":false,"root":"m\/1481028331\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-formchangechecker":{"requires":["base","event-focus"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-formautosubmit":{"requires":["base","event-key"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core_availability-form":{"requires":["base","node","event","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-calendar-info":{"requires":["base","node","event-mouseenter","event-key","overlay","moodle-calendar-info-skin"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-toolboxes":{"requires":["node","base","event-key","node","io","moodle-course-coursebase","moodle-course-util"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":["node","base"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-core_message-deletemessage":{"requires":["node","event"]},"moodle-core_message-messenger":{"requires":["escape","handlebars","io-base","moodle-core-notification-ajaxexception","moodle-core-notification-alert","moodle-core-notification-dialogue","moodle-core-notification-exception"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_mobileapp-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-quizquestionbank":{"requires":["base","event","node","io","io-form","yui-later","moodle-question-qbankmanager","moodle-core-notification-dialogue"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-randomquestion":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-util":{"requires":["node"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-block_navigation-navigation":{"requires":["base","io-base","node","event-synthetic","event-delegate","json-parse"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-format_grid-gridkeys":{"requires":["event-nav-keys"]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_computing-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_count-button":{"requires":["io","json-parse","moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_fullscreen-button":{"requires":["event-resize","moodle-editor_atto-plugin"]},"moodle-atto_hr-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_htmlplus-beautify":{},"moodle-atto_htmlplus-codemirror":{"requires":["moodle-atto_htmlplus-codemirror-skin"]},"moodle-atto_htmlplus-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_htmlplus-beautify","moodle-atto_htmlplus-codemirror","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/bk-hilden.lms.schulon.org\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/bk-hilden.lms.schulon.org\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1481028331\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/bk-hilden.lms.schulon.org\/lib\/javascript.php\/1481028331\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker"]}}};
M.yui.loader = {modules: {}};

//]]>
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body  id="page-mod-page-view" class="format-topics  path-mod path-mod-page gecko dir-ltr lang-de yui-skin-sam yui3-skin-sam bk-hilden-lms-schulon-org pagelayout-incourse course-211 context-9100 cmid-3118 category-15 has-region-side-pre used-region-side-pre has-region-side-post empty-region-side-post side-pre-only">

<div class="skiplinks"><a class="skip" href="#maincontent">Zum Hauptinhalt</a></div>
<script type="text/javascript" src="https://bk-hilden.lms.schulon.org/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js&amp;rollup/1481028331/mcore-min.js"></script><script type="text/javascript" src="https://bk-hilden.lms.schulon.org/lib/javascript.php/1481028331/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<header role="banner" class="navbar navbar-fixed-top moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="https://bk-hilden.lms.schulon.org">BKMoodle</a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></a>            <div class="usermenu"><div id="action-menu-0" class="moodle-actionmenu nowrap-items" data-enhance="moodle-core-actionmenu"><ul id="action-menu-0-menubar" class="menubar" role="menubar"><li role="presentation"><a class="toggle-display textmenu" title="" id="action-menu-toggle-0" role="menuitem" href="#"><span class="userbutton"><span class="usertext">julian knuth</span><span class="avatars"><span class="avatar current"><img src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/u/f2" alt="Nutzerbild julian knuth" title="Nutzerbild julian knuth" class="userpicture defaultuserpic" width="35" height="35" role="presentation" /></span></span></span><b class="caret"></b></a></li></ul><ul id="action-menu-0-menu" class="menu  align-tr-br" data-rel="menu-content" aria-labelledby="action-menu-toggle-0" role="menu" data-align="tr-br"><li role="presentation"><a class="icon menu-action" role="menuitem" href="https://bk-hilden.lms.schulon.org/my/" aria-labelledby="actionmenuaction-1"><img class="iconsmall" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/course" /><span class="menu-action-text" id="actionmenuaction-1">Dashboard</span></a></li><li role="presentation"><span class="filler">&nbsp;</span></li><li role="presentation"><a class="icon menu-action" role="menuitem" href="https://bk-hilden.lms.schulon.org/user/profile.php?id=3465" aria-labelledby="actionmenuaction-2"><img class="iconsmall" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/user" /><span class="menu-action-text" id="actionmenuaction-2">Profil</span></a></li><li role="presentation"><a class="icon menu-action" role="menuitem" href="https://bk-hilden.lms.schulon.org/grade/report/overview/index.php" aria-labelledby="actionmenuaction-3"><img class="iconsmall" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/t/grades" /><span class="menu-action-text" id="actionmenuaction-3">Bewertungen</span></a></li><li role="presentation"><a class="icon menu-action" role="menuitem" href="https://bk-hilden.lms.schulon.org/message/index.php" aria-labelledby="actionmenuaction-4"><img class="iconsmall" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/t/message" /><span class="menu-action-text" id="actionmenuaction-4">Mitteilungen</span></a></li><li role="presentation"><a class="icon menu-action" role="menuitem" href="https://bk-hilden.lms.schulon.org/user/preferences.php" aria-labelledby="actionmenuaction-5"><img class="iconsmall" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/t/preferences" /><span class="menu-action-text" id="actionmenuaction-5">Einstellungen</span></a></li><li role="presentation"><span class="filler">&nbsp;</span></li><li role="presentation"><a class="icon menu-action" role="menuitem" href="https://bk-hilden.lms.schulon.org/login/logout.php?sesskey=H4KuZj7tVl" aria-labelledby="actionmenuaction-6"><img class="iconsmall" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/a/logout" /><span class="menu-action-text" id="actionmenuaction-6">Logout</span></a></li></ul></div></div>            <div class="nav-collapse collapse">
                <ul class="nav"><li><a title="Homepage Berufskolleg Hilden" href="http://www.berufskolleg.de">Homepage Berufskolleg Hilden</a></li><li><a title="Impressum" href="http://www.bk-hilden.lms.schulon.org/pluginfile.php/10/mod_resource/content/0/Startseite_Dateien/Impressum_neu.htm">Impressum</a></li><li class="dropdown langmenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Sprache">Deutsch ‎(de)‎<b class="caret"></b></a><ul class="dropdown-menu"><li><a title="Deutsch ‎(de)‎" href="https://bk-hilden.lms.schulon.org/mod/page/view.php?id=3118&amp;lang=de">Deutsch ‎(de)‎</a></li><li><a title="English ‎(en)‎" href="https://bk-hilden.lms.schulon.org/mod/page/view.php?id=3118&amp;lang=en">English ‎(en)‎</a></li></ul></ul>                <ul class="nav pull-right">
                    <li></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">
    <header id="page-header" class="clearfix"><div class="page-context-header"><div class="page-header-headings"><h1>ITB43_44 | OOP mit C# und UML | Hardy </h1></div></div><div class="clearfix" id="page-navbar"><div class="breadcrumb-nav"><span class="accesshide" id="navbar-label">Seitenpfad</span><nav aria-labelledby="navbar-label"><ul class="breadcrumb"><li><a href="https://bk-hilden.lms.schulon.org/">Startseite</a> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><a href="https://bk-hilden.lms.schulon.org/course/index.php?categoryid=32">KURSBEREICH</a> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><a href="https://bk-hilden.lms.schulon.org/course/index.php?categoryid=3">Informationstechnologien</a> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><a href="https://bk-hilden.lms.schulon.org/course/index.php?categoryid=15">ITB</a> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><a title="ITB43_44 | OOP mit C# und UML | Hardy " href="https://bk-hilden.lms.schulon.org/course/view.php?id=211">ITB43_44_OOP_C#_HAR</a> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span tabindex="0">Thema 8</span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><a title="Textseite" href="https://bk-hilden.lms.schulon.org/mod/page/view.php?id=3118">Tipp: Anbindung von ACCESS 2007-2010</a></li></ul></nav></div><div class="breadcrumb-button"></div></div><div id="course-header"></div></header>    <div id="page-content" class="row-fluid">
        <div id="region-main-box" class="span9 desktop-first-column">
            <div class="row-fluid">
                <section id="region-main" class="span8 pull-right">
                    <div role="main"><span id="maincontent"></span><h2>Tipp: Anbindung von ACCESS 2007-2010</h2><div class="box generalbox center clearfix"><div class="no-overflow"><p><strong>Anderen Provider wählen:</strong></p>
<p><em><strong>Beispiel:</strong></em></p>
<p><strong><span style="font-family: courier new,courier,monospace;">string strVerbindung = @"Provider=Microsoft.ACE.OLEDB.12.0; <br />Data Source=C:\temp\Test.accdb";</span></strong></p></div></div><div class="modified">Zuletzt geändert: Freitag, 23. Oktober 2015, 08:35</div></div>                </section>
                <aside id="block-region-side-pre" class="span4 desktop-first-column block-region" data-blockregion="side-pre" data-droptarget="1"><a class="skip skip-block" id="fsb-1" href="#sb-1">Navigation überspringen</a><div id="inst1396" class="block_navigation  block" role="navigation" data-block="navigation" data-instanceid="1396" aria-labelledby="instance-1396-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-1396-header">Navigation</h2></div></div><div class="content"><ul class="block_tree list"><li class="type_unknown depth_1 contains_branch" aria-expanded="true"><p class="tree_item branch canexpand navigation_node"><a href="https://bk-hilden.lms.schulon.org/">Startseite</a></p><ul><li class="type_setting depth_2 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://bk-hilden.lms.schulon.org/my/"><img class="smallicon navicon" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/navigationitem" /><span class="item-content-wrap">Dashboard</span></a></p></li><li class="type_course depth_2 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span title="Berufskolleg-Moodle" tabindex="0">Website</span></p><ul><li class="type_unknown depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://bk-hilden.lms.schulon.org/blog/index.php"><img class="smallicon navicon" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/navigationitem" /><span class="item-content-wrap">Blogs der Website</span></a></p></li><li class="type_custom depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://bk-hilden.lms.schulon.org/badges/view.php?type=1"><img class="smallicon navicon" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/navigationitem" /><span class="item-content-wrap">Globale Auszeichnungen</span></a></p></li><li class="type_setting depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://bk-hilden.lms.schulon.org/tag/search.php"><img class="smallicon navicon" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/navigationitem" /><span class="item-content-wrap">Schlagwörter</span></a></p></li><li class="type_custom depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://bk-hilden.lms.schulon.org/calendar/view.php?view=month"><img class="smallicon navicon" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/navigationitem" /><span class="item-content-wrap">Kalender</span></a></p></li><li class="type_activity depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a title="Datei" href="https://bk-hilden.lms.schulon.org/mod/resource/view.php?id=1" id="action_link588ef7ead52bf3"><img class="smallicon navicon" alt="Datei" title="Datei" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/f/html-24" /><span class="item-content-wrap">Impressum</span></a></p></li><li class="type_activity depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a title="Link/URL" href="https://bk-hilden.lms.schulon.org/mod/url/view.php?id=2" id="action_link588ef7ead52bf4"><img class="smallicon navicon" alt="Link/URL" title="Link/URL" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/url/1481028331/icon" /><span class="item-content-wrap">Homepage Berufskolleg</span></a></p></li><li class="type_activity depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a title="Forum" href="https://bk-hilden.lms.schulon.org/mod/forum/view.php?id=2204"><img class="smallicon navicon" alt="Forum" title="Forum" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/forum/1481028331/icon" /><span class="item-content-wrap">Nachrichten</span></a></p></li></ul></li><li class="type_system depth_2 contains_branch" aria-expanded="true"><p class="tree_item branch"><span tabindex="0">Dieser Kurs</span></p><ul><li class="type_course depth_3 contains_branch" aria-expanded="true"><p class="tree_item branch canexpand"><a title="ITB43_44 | OOP mit C# und UML | Hardy " href="https://bk-hilden.lms.schulon.org/course/view.php?id=211">ITB43_44_OOP_C#_HAR</a></p><ul><li class="type_unknown depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><a href="https://bk-hilden.lms.schulon.org/user/index.php?id=211">Teilnehmer/innen</a></p><ul><li class="type_setting depth_5 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://bk-hilden.lms.schulon.org/blog/index.php?courseid=211"><img class="smallicon navicon" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/navigationitem" /><span class="item-content-wrap">Kursblogs</span></a></p></li><li class="type_user depth_5 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://bk-hilden.lms.schulon.org/user/view.php?id=3465&amp;course=211"><img class="smallicon navicon" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/navigationitem" /><span class="item-content-wrap">julian knuth</span></a></p></li></ul></li><li class="type_unknown depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Auszeichnungen</span></p><ul><li class="type_setting depth_5 item_with_icon"><p class="tree_item leaf hasicon"><a href="https://bk-hilden.lms.schulon.org/badges/view.php?type=2&amp;id=211"><img class="smallicon navicon" alt="Kursspezifische Auszeichnungen" title="Kursspezifische Auszeichnungen" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/badge" /><span class="item-content-wrap">Kursspezifische Auszeichnungen</span></a></p></li></ul></li><li class="type_structure depth_4 contains_branch" aria-expanded="true"><p class="tree_item branch"><span tabindex="0">Thema 8</span></p><ul><li class="type_activity depth_5 item_with_icon current_branch"><p class="tree_item leaf hasicon active_tree_node"><a title="Textseite" href="https://bk-hilden.lms.schulon.org/mod/page/view.php?id=3118"><img class="smallicon navicon" alt="Textseite" title="Textseite" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/page/1481028331/icon" /><span class="item-content-wrap">Tipp: Anbindung von ACCESS 2007-2010</span></a></p></li></ul></li></ul></li></ul></li><li class="type_system depth_2 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_0_mycourses"><span tabindex="0">Meine Kurse</span></p></li></ul></li></ul></div></div><span class="skip-block-to" id="sb-1"></span><a class="skip skip-block" id="fsb-2" href="#sb-2">Einstellungen überspringen</a><div id="inst1397" class="block_settings  block" role="navigation" data-block="settings" data-instanceid="1397" aria-labelledby="instance-1397-header" data-dockable="1"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-1397-header">Einstellungen</h2></div></div><div class="content"><div id="settingsnav" class="box block_tree_box"><ul class="block_tree list"><li class="type_course collapsed contains_branch" aria-expanded="false"><p class="tree_item branch root_node"><span tabindex="0">Kurs-Administration</span></p><ul><li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://bk-hilden.lms.schulon.org/enrol/self/unenrolself.php?enrolid=578"><img class="smallicon navicon" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/user" />Abmelden aus 'ITB43_44_OOP_C#_HAR'</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="https://bk-hilden.lms.schulon.org/grade/report/index.php?id=211"><img class="smallicon navicon" alt="" src="https://bk-hilden.lms.schulon.org/theme/image.php/clean/core/1481028331/i/grades" />Bewertungen</a></p></li></ul></li></ul></div></div></div><span class="skip-block-to" id="sb-2"></span></aside>            </div>
        </div>
        <aside id="block-region-side-post" class="span3 pull-right block-region" data-blockregion="side-post" data-droptarget="1"></aside>    </div>

    <footer id="page-footer">
        <div id="course-footer"></div>
        <p class="helplink"></p>
        <div class="logininfo">Sie sind angemeldet als <a href="https://bk-hilden.lms.schulon.org/user/profile.php?id=3465" title="Profil anzeigen">julian knuth</a> (<a href="https://bk-hilden.lms.schulon.org/login/logout.php?sesskey=H4KuZj7tVl">Logout</a>)</div><div class="homelink"><a href="https://bk-hilden.lms.schulon.org/course/view.php?id=211">ITB43_44_OOP_C#_HAR</a></div>    </footer>

    <script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://bk-hilden.lms.schulon.org/lib/requirejs.php/1481028331/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://bk-hilden.lms.schulon.org/lib/javascript.php/1481028331/lib/jquery/jquery-1.11.3.min',
        jqueryui: 'https://bk-hilden.lms.schulon.org/lib/javascript.php/1481028331/lib/jquery/ui-1.11.4/jquery-ui.min',
        jqueryprivate: 'https://bk-hilden.lms.schulon.org/lib/javascript.php/1481028331/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://bk-hilden.lms.schulon.org/lib/javascript.php/1481028331/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
require(['core/first'], function() {
;
require(["core/log"], function(amd) { amd.setConfig({"level":"warn"}); });
});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
M.yui.add_module({"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.mathjax.org\/mathjax\/2.5-latest\/MathJax.js?delayStartupUntil=configured"}});

//]]>
</script>
<script type="text/javascript" src="https://bk-hilden.lms.schulon.org/theme/javascript.php/clean/1481028331/footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Zuletzt ge\u00e4ndert","name":"Name","error":"Fehler","info":"Informationen","viewallcourses":"Alle Kurse zeigen","morehelp":"Weitere Hilfe","loadinghelp":"Wird geladen...","cancel":"Abbrechen","yes":"Ja","confirm":"Best\u00e4tigen","no":"Nein","areyousure":"Sind Sie sicher?","closebuttontitle":"Schlie\u00dfen","unknownerror":"Unbekannter Fehler"},"repository":{"type":"Typ","size":"Gr\u00f6\u00dfe","invalidjson":"Ung\u00fcltiger JSON-Text","nofilesattached":"Keine Datei","filepicker":"Dateiauswahl","logout":"Abmelden","nofilesavailable":"Keine Dateien vorhanden","norepositoriesavailable":"Keine Ihrer aktuellen Repositories kann Dateien im n\u00f6tigen Format liefern","fileexistsdialogheader":"Datei bereits vorhanden","fileexistsdialog_editor":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt, den Sie gerade bearbeiten","fileexistsdialog_filemanager":"Eine Datei mit diesem Namen wurde bereits an den Text angeh\u00e4ngt","renameto":"Nach '{$a}' umbenennen","referencesexist":"{$a} Aliase\/Verkn\u00fcpfungen zu dieser Datei","select":"W\u00e4hlen Sie"},"block":{"addtodock":"Block ins Dock bewegen","undockitem":"Diesen Block abdocken","dockblock":"Block {$a} ins Dock","undockblock":"'{$a}' abdocken","undockall":"Alles abdocken","hidedockpanel":"Dock verbergen","hidepanel":"Steuerung verbergen"},"langconfig":{"thisdirectionvertical":"btt"},"admin":{"confirmation":"Best\u00e4tigung"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
var navtreeexpansions1396 = [{"id":"expandable_branch_30_2263","key":"2263","type":30},{"id":"expandable_branch_30_2264","key":"2264","type":30},{"id":"expandable_branch_30_2265","key":"2265","type":30},{"id":"expandable_branch_30_2266","key":"2266","type":30},{"id":"expandable_branch_30_2268","key":"2268","type":30},{"id":"expandable_branch_30_2267","key":"2267","type":30},{"id":"expandable_branch_30_2269","key":"2269","type":30},{"id":"expandable_branch_30_2271","key":"2271","type":30},{"id":"expandable_branch_0_mycourses","key":"mycourses","type":0}];
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {M.util.load_flowplayer();
setTimeout("fix_column_widths()", 20);
Y.use("moodle-core-dock-loader",function() {M.core.dock.loader.initLoader();
});
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://bk-hilden.lms.schulon.org/mod/resource/view.php?id=1&redirect=1', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
function legacy_activity_onclick_handler_2(e) { e.halt(); window.open('https://bk-hilden.lms.schulon.org/mod/url/view.php?id=2&redirect=1', '', 'width=620,height=450,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes'); return false; };
Y.use("moodle-block_navigation-navigation",function() {M.block_navigation.init_add_tree({"id":"1396","instance":"1396","candock":true,"courselimit":"20","expansionlimit":"30"});
});
Y.use("moodle-block_navigation-navigation",function() {M.block_navigation.init_add_tree({"id":"1397","instance":"1397","candock":true});
});
M.util.help_popups.setup(Y);
Y.use("moodle-core-popuphelp",function() {M.core.init_popuphelp();
});
M.util.init_skiplink(Y);
Y.use("moodle-core-actionmenu",function() {M.core.actionmenu.init();
});
Y.use("moodle-core-formautosubmit",function() {M.core.init_formautosubmit({"selectid":"single_select588ef7ead52bf8","nothing":false});
});
M.util.init_block_hider(Y, {"id":"inst1396","title":"Navigation","preference":"block1396hidden","tooltipVisible":"Block Navigation verbergen","tooltipHidden":"Block Navigation anzeigen"});
M.util.init_block_hider(Y, {"id":"inst1397","title":"Einstellungen","preference":"block1397hidden","tooltipVisible":"Block Einstellungen verbergen","tooltipHidden":"Block Einstellungen anzeigen"});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"de"});
});
 M.util.js_pending('random588ef7ead52bf11'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random588ef7ead52bf11'); });
Y.on('click', legacy_activity_onclick_handler_1, "#action_link588ef7ead52bf3", null);
Y.on('click', legacy_activity_onclick_handler_2, "#action_link588ef7ead52bf4", null);
})();
//]]>
</script>

</div>
</body>
</html>
