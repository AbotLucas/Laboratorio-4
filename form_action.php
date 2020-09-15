<?php

//echo strip_tags($_POST('name'));


$jsondata = json_encode($_POST, JSON_PRETTY_PRINT);
file_put_contents("form.json", $jsondata);