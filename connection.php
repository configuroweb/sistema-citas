<?php

$database = new mysqli("localhost", "root", "", "sistema-citas");
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
}
