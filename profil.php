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
        .container-area {
            padding: 0;
        }

        .box-profile {
            width: 89%;
            height: 80vh;
            background-color: #fff;
            display: flex;
            flex-direction: row;
            margin-top: 45px;
            padding: 65px;
        }

        .header-text {
            display: flex;
            flex-direction: column;
            margin-left:120px;
        }

        .header-text div {
            font-size: 60px;
        }

        .row-input {
            display: flex;
            flex-direction: row;
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
        }

        .row-input label {
            width: 300px;
        }

        .row-input input {
            width: 50%;
            border-radius: 7px;
            background-color: #D9D9D9;
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
    
    <div class="container-area">
        <div class="content-col">
            <div class="box-profile">
                <div>
                    <img src="https://as1.ftcdn.net/v2/jpg/03/39/45/96/1000_F_339459697_XAFacNQmwnvJRqe1Fe9VOptPWMUxlZP8.jpg" alt="" width="300">
                </div>
                <div class="header-text">
                    <div>Nama</div>
                    <div>123@gmail.com</div>
                    <div>Jabatan</div>
                </div>
            </div>
            <div class="input-profile">
                <form action="">
                        <div class="row-input">
                            <label for="">Username</label>
                            <input type="text">
                        </div>
                        <div class="row-input">
                            <label for="">Riwayat Pekerjaan</label>
                            <input type="text">
                        </div>
                        <div class="row-input">
                            <label for="">Pendidikan</label>
                            <input type="text">
                        </div>
                        <div class="row-input">
                            <label for="">Daerah</label>
                            <input type="text">
                        </div>
                </form>
            </div>
        </div>
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