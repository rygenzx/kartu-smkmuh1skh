<?php

$conn = mysqli_connect("localhost", "root", "", "kartumu");

if ($conn) {
    echo "<script>console.log('connected succesfully')</script>";
} else {
    echo "<script>console.log('not connected, maybe error')</script>";
}
