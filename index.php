<?php
require_once(__DIR__ . "/system/config.php");
include(__DIR__ . "/template/header.php");
if ($_GET["d"] == 1) {
    include(__DIR__ . "/template/download.php");
} else {
    include(__DIR__ . "/template/main.php");
}
include(__DIR__ . "/template/footer.php");