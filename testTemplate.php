<?php

require_once("Template.php");

$page = new Template("My Page");
$page->addHeadElement("<script src='hello.js'></script>");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Some page-specific HTML goes here</h1>\n";
print $page->getBottomSection();

