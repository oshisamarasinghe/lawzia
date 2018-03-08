<?php

$connection = new mysqli("localhost", "root", "", "lawzia");
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}