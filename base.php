<?php require_once "ti.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="media/eti_logo.svg">
    <?php startblock("head");?>
    <?php endblock();?>
</head>
<body>
    <nav id="etiNav" class="navbar navbar-expand-lg shadow">
    <div class="container">
        <a class="navbar-brand logo-text" href="index.php"><img id="navbarLogo"src="media/eti_grey.svg" alt="ETI Logo"></svg> English Training Interactive</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item hover">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item hover">
                    <a class="nav-link" href="#">Topics</a> 
                    <!-- Thinking of making this a dropdown menu -->
                </li>
                <li class="nav-item hover">
                    <a class="nav-link"  href="about.php">About</a>
                </li>
                <li class="nav-item hover">
                    <a class="nav-link"  href="developers.php">Developers</a>
                </li>
                <li class="nav-item hover">
                    <a class="nav-link" href="contactus.php">Contact</a>
                </li>  
            </ul>
        </div>
    </div>
    </nav>
    <main class="container">
        <?php startblock("content");?>
        <?php endblock();?>
    </main>
    <footer>

    </footer>
    <?php startblock("scripts");?>
    <?php endblock();?>
</body>
</html>
<style>
 .hover:hover {
    background-color: #6E75FD;
    border-radius: 5px;
    transition: .3s;
 }

 .navbar {
    background-color: #4A53FC;
 }

 .nav-link {
    color: #DBE4EE;
 }

 a[class~="nav-link active"] {
    color: #F8FAFC;
 }

 .logo-text {
    color: #DBE4EE;
 }

 #navbarLogo {
    height: 48px;
    width: 48px;
    margin: 0;
 }
</style>