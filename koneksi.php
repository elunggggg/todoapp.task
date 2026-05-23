<?php

$conn = mysqli_connect(
    "localhost",
    "todoapps_admin",
    "adminganteng1123",
    "todoapps_todo_app"
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>