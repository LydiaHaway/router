<?php

//echo phpinfo();

require "../app/core/Router.php";

$Request = new Router;

$url = $_SERVER["REQUEST_URI"];


if ($Request->geturl() === "/") {
    require "../app/views/Homepage.php";
} else if ($Request->geturl()  === "/contact") {
    require "../app/views/Contact.php";
} else {
    echo "Error 404";
}
