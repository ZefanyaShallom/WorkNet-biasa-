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
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Landing Page</title>
    <style>
        ul {
            list-style: none;
        }

        .header-text {
            width: 280px;
            line-height: 55px;
        }

        .search-header {
            width: 100%;
            border: 2px solid #222;
            border-radius: 50px;
        }

        .logo {
            font-size: 150px;
        }
        .box-anchor {
            border: 1px solid black;
            border-radius: 7px;
            color: black;
            width: 100%;
            text-decoration: none;
        }

        .box-items {
            border: 2px solid #222; 
            border-radius: 10px;
        }
        
        .apply {
            border: 1px solid #222;
            padding: 5px;
            border-radius: 7px;
            text-decoration: none;
            color: #222;
        }
        .logo{
            width: 250px;
            height: auto;
            position: relative; top: 2px;
            position: relative; right: 25px;
        }

        .container{
            position: relative; left: 23px;
        }
        
    </style>
</head>
<body>
    <nav class="bg-black p-3 d-flex justify-content-between pt-4">
        <ul class="d-flex flex-row gap-2">
            <li><a class="text-white text-decoration-none" href="home.php">Home</a></li>
            <li><a class="text-white text-decoration-none" href="#">Menu</a></li>
        </ul>
        <ul class="d-flex flex-row gap-2">
            <li><a class="text-white text-decoration-none" href="loginPage.php">Login</a></li>
            <li><a class="text-white text-decoration-none" href="Register.php">Register</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="d-flex flex-row justify-content-evenly" style="height: 100vh">
            <div>
                <div class="mt-5">
                    <h5 class="h1 fw-bold header-text">Find Your Next dream jobs in our platform</h5>
                </div>
                <form action="">
                    <input type="text" class="search-header p-2" placeholder="Jobs title and keyboard">
                </form>
            </div>
            <div class="logo">
                <img src="assets/Vector(1).png" class="mt-5 logo">
            </div>
        </div>
        <div style="height: 100vh">
            <div class="mt-5">
                <h5 class="text-start">Rekomendasi pekerjaan :</h5>
            </div>
            <div class="d-flex flex-row justify-content-evenly mt-5">
                <div>
                    <ul class="d-flex flex-column gap-4 ">
                        <li>
                            <a href="#" class="px-5 py-2 box-anchor">pekerjaan</a>
                        </li>
                        <li>
                            <a href="#" class="px-5 py-2 box-anchor">pekerjaan</a>
                        </li>
                        <li>
                            <a href="#" class="px-5 py-2 box-anchor">pekerjaan</a>
                        </li>
                        <li>
                            <a href="#" class="px-5 py-2 box-anchor">pekerjaan</a>
                        </li>
                        <li>
                            <a href="#" class="px-5 py-2 box-anchor">pekerjaan</a>
                        </li>
                        <li>
                            <a href="#" class="px-5 py-2 box-anchor">pekerjaan</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex flex-column gap-1">
                    <div class="d-flex flex-column box-items">
                        <div class="d-flex flex-row gap-3 p-4">
                            <div>
                                LOGO
                            </div>
                            <div class="d-flex flex-column">
                                Type:
                                <ul>
                                    <li>nama pekerjaan</li>
                                    <li>Gaji/perbulan</li>
                                </ul>
                            </div>
                            <div>
                                Time:
                            </div>
                        </div>
                        <div class="bg-body-tertiary p-2 d-flex flex-row justify-content-between">
                            <h5>Lokasi: </h5>
                            <a href="" class="apply" class="bg-white p-2 text-decoration-none text-dark border">Apply Now</a>
                        </div>
                    </div>
                    <div class="d-flex flex-column box-items">
                        <div class="d-flex flex-row gap-3 p-4">
                            <div>
                                LOGO
                            </div>
                            <div class="d-flex flex-column">
                                Type:
                                <ul>
                                    <li>nama pekerjaan</li>
                                    <li>Gaji/perbulan</li>
                                </ul>
                            </div>
                            <div>
                                Time:
                            </div>
                        </div>
                        <div class="bg-body-tertiary p-2 d-flex flex-row justify-content-between">
                            <h5>Lokasi:</h5>
                            <a href="" class="apply" class="bg-white p-2 text-decoration-none text-dark border">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
