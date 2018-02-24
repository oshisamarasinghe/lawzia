<?php
/**
 * Created by PhpStorm.
 * User: oshadi
 * Date: 2/2/2018
 * Time: 9:01 PM
 */
    $connection = new mysqli("localhost","root","","lawzia");
    // Check connection
    if (mysqli_connect_error()) {
        die("Database connection failed: " . mysqli_connect_error());
    }