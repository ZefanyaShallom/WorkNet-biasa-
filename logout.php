<?php
$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "userlsp" && $password == "smkfarmasibjm") {
    header("Location: home.php");
} else {
    echo "
    <script>
        alert('Username atau Password salah');
        window.location.href = 'login.php';
    </script>";
}

?>