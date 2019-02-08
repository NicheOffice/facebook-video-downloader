<?php
require_once("config.php");
if (!empty($_POST["url"]) && getDomain($_POST["url"]) === "facebook.com" && parse_url($_POST["url"])["path"] != "/story.php") {
    $data = url_get_contents($_POST["url"]);
    $hdlink = hdLink($data);
    $sdlink = sdLink($data);
    if (!empty($sdlink)) {
        $_SESSION['type'] = "video";
        $_SESSION['url'] = $sdlink;
        $_SESSION['url-hd'] = $hdlink;
        redirect($config["url"] . "?d=1#download");
        die();
    } else {
        customError($config["url"], $lang["deleted-video"]);
        die();
    }
} else if (!empty($_POST["url"]) && parse_url($_POST["url"])["host"] === "m.facebook.com") {
    $data = url_get_contents($_POST["url"]);
    $link = convertUrl(mobilLink($data));
    if (!empty($link)) {
        $_SESSION['type'] = "video";
        $_SESSION['url'] = $link;
        redirect($config["url"] . "?d=1#download");
        die();
    } else {
        customError($config["url"], $lang["deleted-video"]);
        die();
    }
} else {
    errorDialog($config["url"]);
    die();
}