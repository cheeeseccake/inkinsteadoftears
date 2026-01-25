<?php

require_once 'classes/ContactPage.php';

$page = new ContactPage();
$page->handlePost();
echo $page->render();

?>