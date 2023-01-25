<?php

$uri = $_SERVER['REQUEST_URI'];

$uriParts = explode('/', $uri);

array_shift($uriParts);

//print_r($uriParts);

include("views/app.html");