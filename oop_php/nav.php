<?php
$nav = new Template('nav.nav');
$item = new  Template('nav.item');

$item -> set('name','Main page');

$link = $http->getLink(array('controller' => 'main'));
$item -> set('link', $link);

$nav->add('items', $item -> parse());

$link = $http->getLink(array('controller' => 'contact'));
$item -> set('link', $link);



$item -> set('name','Contact');
$nav->add('items', $item -> parse());

$mainContent->set('nav', $nav->parse());