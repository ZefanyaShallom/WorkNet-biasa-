<?php
$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "admin" && $password == "admin") {
    header("Location: home.php");
} else {
    echo "
    <script>
        alert('Username atau Password salah');
        window.location.href = 'login.php';
    </script>";
}

?>