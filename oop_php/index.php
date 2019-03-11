<?php
require_once 'conf.php';

// main page by html templates
$main = new Template('main');
$meta = new Template('meta');
$style = new Template('style');
$js = new Template('js');

// add meta, style and js templates content to main template
$main->set('meta', $meta->parse());
$main->set('style', $style->parse());
$main->set('js', $js->parse());

// set up main page real values
$main->set('lang', $http->get('lang_id'));
$main->set('title', 'App Title');

// add action control
// require_once 'controller.php';

$mainContent= new Template('main_content');
$mainContent->set('header', 'Page header');
$mainContent->set('nav', 'Page navigation');
$mainContent->set('content', 'Page content');
$mainContent->set('footer', 'Page footer');
$main->set('content', $mainContent->parse());

// print out main page full view
echo $main->parse();