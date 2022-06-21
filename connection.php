<?php

$database = new mysqli("localhost", "root", "", "citas");
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
}
