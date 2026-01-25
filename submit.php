<?php

require_once 'classes/SubmitPage.php';

$page = new SubmitPage();
$page->handlePost();
echo $page->render();

?>