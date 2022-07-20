<?php

//echo phpinfo();

require "../app/core/Request.php";

$Request = new Request;


if ($Request->geturl() === "/") {
    require "../app/views/Homepage.php";
} else if ($Request->geturl()  === "/contact") {
    require "../app/views/Contact.php";
} else {
    echo "Error 404";
}
