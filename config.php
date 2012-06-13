<?php

$THEME->name = 'dragonslair';

////////////////////////////////////////////////////
// Name of the theme. Most likely the name of
// the directory in which this file resides.
////////////////////////////////////////////////////


$THEME->parents = array('base');

/////////////////////////////////////////////////////
// Which existing theme(s) in the /theme/ directory
// do you want this theme to extend. A theme can
// extend any number of themes. Rather than
// creating an entirely new theme and copying all
// of the CSS, you can simply create a new theme,
// extend the theme you like and just add the
// changes you want to your theme.
////////////////////////////////////////////////////


$THEME->sheets = array('core');

////////////////////////////////////////////////////
// Name of the stylesheet(s) you've including in
// this theme's /styles/ directory.
////////////////////////////////////////////////////


$THEME->enable_dock = true;

////////////////////////////////////////////////////
// Do you want to use the new navigation dock?
////////////////////////////////////////////////////


$THEME->editor_sheets = array('editor');

////////////////////////////////////////////////////
// An array of stylesheets to include within the
// body of the editor.
////////////////////////////////////////////////////

// $THEME->csspostprocess

////////////////////////////////////////////////////
// Allows the user to provide the name of a function
// that all CSS should be passed to before being
// delivered.
////////////////////////////////////////////////////

// $THEME->javascripts

////////////////////////////////////////////////////
// An array containing the names of JavaScript files
// located in /javascript/ to include in the theme.
// (gets included in the head)
////////////////////////////////////////////////////

// $THEME->javascripts_footer

////////////////////////////////////////////////////
// As above but will be included in the page footer.
////////////////////////////////////////////////////

// $THEME->larrow

////////////////////////////////////////////////////
// Overrides the left arrow image used throughout
// Moodle
////////////////////////////////////////////////////

// $THEME->rarrow

////////////////////////////////////////////////////
// Overrides the right arrow image used throughout Moodle
////////////////////////////////////////////////////

$THEME->layouts = array(
    'base' => array(
        'file' => 'general.php',
        'regions' => array(),
    ),
    'standard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true),
    ),
    'course' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true),
    ),
    'coursecategory' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true),
    ),
    'incourse' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true),
    ),
    'frontpage' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true),
    ),
    'admin' => array(
        'file' => 'general.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true),
    ),
    'mydashboard' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu'=>true, 'nonavbar'=>true),
    ),
    'mypublic' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true),
    ),
    'login' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('langmenu'=>true,'nonavbar'=>true),
    ),
    'popup' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'noblocks'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
    ),
    'frametop' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true),
    ),
    'maintenance' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
    ),
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'noblocks'=>true, 'nonavbar'=>false, 'nocustommenu'=>true),
    ),
    'report' => array(
        'file' => 'general.php',
        'regions' => array('side-pre','block-top-left','block-top-midlt','block-top-midrt','block-top-right','block-btm-left','block-btm-midlt','block-btm-midrt','block-btm-right'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar'=>true),
    ),
);

////////////////////////////////////////////////////
// An array setting the layouts for the theme
////////////////////////////////////////////////////

// $THEME->parents_exclude_javascripts

////////////////////////////////////////////////////
// An array of JavaScript files NOT to inherit from
// the themes parents
////////////////////////////////////////////////////

// $THEME->parents_exclude_sheets

////////////////////////////////////////////////////
// An array of stylesheets not to inherit from the
// themes parents
////////////////////////////////////////////////////

// $THEME->plugins_exclude_sheets

////////////////////////////////////////////////////
// An array of plugin sheets to ignore and not
// include.
////////////////////////////////////////////////////

// $THEME->rendererfactory

////////////////////////////////////////////////////
// Sets a custom render factory to use with the
// theme, used when working with custom renderers.
////////////////////////////////////////////////////

