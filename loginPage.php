<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title>Login</title>
</head>
<body>
<div class="container">
    <img src="assets/infogawian.png" alt="infogawian">
    <div class="card">
    <h4>Sign In</h4>
    <form action="login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" placeholder="username">
        <label>Password</label>
        <input type="password" name="password" placeholder="password">
        <div class="button">
            <button name="login">Sign In</button>
        </div>
    </form>
    </div>
</div>
</body>
</html>