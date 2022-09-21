<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCheeta 🚖</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Figtree&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <nav id="mainNavbar" class="navbar navbar-expand-md py-4 container-fluid navbar-dark bg-dark fs-1">
        <div class="container">
            <a href="#" class="navbar-brand">GoCheeta</a>
            <button class="navbar-toggler " data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navLinks">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutUs.php" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="contactUs.php" class="nav-link">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a href="Gallery.php" class="nav-link">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a href="Signup.php" class="nav-link">SIGNUP</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            LOGIN
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="Login.php">Customer Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="driverLogin.php">Driver Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="admin.php">Admin Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>