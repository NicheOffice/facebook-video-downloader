<?php
/*
 * Enter your website title.
 */
$config["title"] = "Facebook Video Downloader";
/*
 * Enter your website description for SEO. (Used for meta description)
 */
$config["description"] = "Facebook Video Downloader";
/*
 * Enter your language file name. Language files in "language" folder.
 */
$config["language"] = "en";
/*
 * Enter your website author name (person, company or etc.)
 */
$config["author"] = "Ahmet Hakan";
/*
 * Enter your website URL with http or https.
 */
$config["url"] = "http://localhost/fb-dl";
/*
 * Change, add or delete menu links.
 * These links are shown in the main menu
 * Uncomment if you want use
 */
/*
$config["menu"] = array(
    array(
        'title' => 'Link',
        'link' => '#'
    ),
    array(
        'title' => 'Link',
        'link' => '#'
    )
);
*/
/*
 * Enter social media user names (If you don't use leave blank)
 */
$social["facebook"] = "";
$social["twitter"] = "";
$social["google"] = "";
$social["youtube"] = "";
/*
 * Don't change below lines
 */
require_once(__DIR__ . "/../language/" . $config["language"] . ".php");
require_once("functions.php");
session_start();