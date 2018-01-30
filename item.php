<?php

$name = $_POST["user"];
$pass = $_POST["pass"];
$email = $_POST["email"];

include "connect.php";

$query = "INSERT INTO user_data(user_name, password, email, status) VALUES('$name', '$pass', '$email', 'siswa')";

mysqli_query($conn, $query);

header("Location: index.php");