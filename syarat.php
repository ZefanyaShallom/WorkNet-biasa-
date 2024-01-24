<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- script js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>syarat</title>
    <link rel="stylesheet" href="css/syarat.css">
    <style>
        .fixed {
            position: fixed;
            top: 80px;
            right: 25px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Menu</a></li>
        </ul>
        <div id="profileToggle">
            <a href="#"><i class="fa-solid fa-user"></i></a>
        </div>
        <div id="profile" class="d-none card border rounded w-5 h-5 fixed">
        <ul class="d-flex flex-column my-3 gap-1" style="width: 11rem;">
            <li><a href="#"><i class="fa-solid fa-user"></i> Profile</a></li>
        <div id="logoutButton">
            <li><a href="#"><i class="fa-solid fa-right-to-bracket"></i> Log out</a></li>
        </div>
        </ul>
        </div>
    </nav>

  
  <div class="container">
    <header>
        <img src="assets/Infogawian.png" alt="Logo Perusahaan">
        <div class="company-info">
            <h1>Nama Perusahaan</h1>
            <p>Alamat Perusahaan</p>
        </div>
    </header>
    <main>
        <section id="tentang">
            <h2>Tentang Kami</h2>
            <p>Deskripsi perusahaan dan sejarahnya.</p>
        </section>
        <section id="syarat">
            <h2>Syarat Masuk Perusahaan</h2>
            <ul>
                <li>Syarat 1</li>
                <li>Syarat 2</li>
                <li>Syarat 3</li>
            </ul>
        </section>
        <button class="chat-button">silahkan ajukan lamaran</button>
    </main>
</div>

    <script>
        document.getElementById('profileToggle').addEventListener('click', function() {
            var profileDiv = document.getElementById('profile');
            profileDiv.classList.toggle('d-none');
        });
    document.getElementById('logoutButton').addEventListener('click', function() {
    if (confirm("Apakah Anda yakin ingin logout?")) {
        window.location.href = 'index.php'; 
    } else {
    }
});
    </script>
</body>
</html>