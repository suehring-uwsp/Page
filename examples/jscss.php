<?php

require_once(__DIR__ . "/../Page.class.php");

$page = new Page("Example Page with JS and CSS");
// Note that neither of these files contain anything in the page class examples
// But this is how you'd add js and css.  One addHeadElement() call per file is best practice.
$page->addHeadElement("<script src=\"js/script.js\"></script>");
$page->addHeadElement("<link rel=\"stylesheet\" href=\"css/styles.css\">");

print $page->getTopSection();
print "<h1>Page created with Page class</h1>" . PHP_EOL;
print "<div class=\"main\">Here is the main section</div>\n";
print $page->getBottomSection();
