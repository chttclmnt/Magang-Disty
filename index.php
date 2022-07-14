<!DOCTYPE html>
<html lang="en">
<head>
    <title>CV | Miryam Clementine Aksama </title>
    <meta charset="UTF-8">
    <style> body {background-color: #BFA2DB ;}
    </style>
    <meta name="description" contents="Miryam Clementine Aksama">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #BFA2DB;">
   
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #BFA2DB; ">
        <div class="container-fluid ">
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="index.php?page=home">Home</a>
                    <a class="nav-link" href="index.php?page=about">About</a>
                    <a class="nav-link" href="index.php?page=resume">Resume</a>
                    <a class="nav-link" href="index.php?page=services">Services</a>
                    <a class="nav-link" href="index.php?page=contact">Contact</a>

                </div>
            </div>
            <a class="navbar-brand ms-auto " href="#">Miryam Clementine Aksama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>       
 
    </div> 
    <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'about':
                include "about.php";
                break;
                case 'contact':
                include "contact.php";
                break;          
                case 'services':
                include "services.php";
                break;
                case 'resume':
                include "resume.php";
                break;
                case 'contact':
                include "contact1.php";
                break;
                case 'contact2':
                include "contact2.php";
                break;
                case 'contact2-1':
                include "contact2-1.php";
                break;
                case 'contact3':
                include "contact3.php";
                break;
            }
            
        }
        else{
            include "home.php";
        }
    ?>
    <footer class='copyright'>
        &copy Copyright Clementine 2022 | Curiculum Vitae
    </footer>
</body>
</html>