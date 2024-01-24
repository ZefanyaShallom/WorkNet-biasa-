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
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
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
            <li><a href="profil.php"><i class="fa-solid fa-user"></i> Profile</a></li>
        <div id="logoutButton">
            <li><a href="#"><i class="fa-solid fa-right-to-bracket"></i> Log out</a></li>
        </div>
        </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="w-100 d-flex justify-content-center flex-row">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Nama Perusahaan" aria-label="Search">
            </form>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Lokasi" aria-label="Search">
            </form>
            <div class="btn-group gap-2">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Spesialis Pekerjaan</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Semua jenis pekerjaan</a></li>
                <li><a class="dropdown-item" href="#">Akutansi</a></li>
                <li><a class="dropdown-item" href="#">Kontruksi</a></li>
                <li><a class="dropdown-item" href="#">Sains</a></li>
            </ul>
            <a href="kategori.php" class="btn btn-outline-success rounded" type="submit">Search</a>
            </div>
        </div>
    </nav>
    <div class="card-area">
        <img src="assets/telkom.png" class="card-img-top" alt="telkom" style="width: 18rem;">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Telkom Indonesia</h5>
            <p class="card-text">Telkom Indonesia adalah perusahaan yang bergerak di bidang teknologi informasi dan komunikasi</p>
            <a href="detail.php" class="btn btn-primary mx-4">Detail pekerjaan</a>
        </div>
        </div>
    </div>

    <!-- script js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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