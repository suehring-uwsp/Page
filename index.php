<?php

require_once("Page.class.php");

$page = new Page("Page");
$page->freezeTopSection();
$page->freezeBottomSection();

print $page->getTopSection();
print "<h1>Page created with Page class</h1>" . PHP_EOL;
print $page->getBottomSection();

