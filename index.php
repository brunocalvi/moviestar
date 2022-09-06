<?php 
require_once('globals.php');
require_once('bd.php'); 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStar</title>
    <link rel="short icon" href="<?php echo $base_url; ?>img/moviestar.ico">
    <!--bootstrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.css" integrity="sha512-h1rwF0uB6r2IuEZcyjPrR53bBKN9Wb4yL+w3Rdlzmc3CkBF1gMSFvQIIstnu4bEtYDaKca5ke5S8UBAACRImyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/styles.css">
</head>
<body>
    <header>
        <nav id="main-navbar" clas="navbar navbar-expand-lg">
            <a href="<?php echo $base_url; ?>" clas="navbar-brand">
                <img src="<?php echo $base_url; ?>img/logo.svg" alt="MovieStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigattion">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" id="search-form" method="GET" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes ..." arial-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php echo $base_url; ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="main-container" class="container-fluid">
        <h1>Corpo</h1>
    </div>

    <footer id="footer">
        <div class="social-container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>

        <div id="footer-links-container">
            <ul>
                <li><a href="#">Adicionar Filme</a></li>
                <li><a href="#">Adicionar Critica</a></li>
                <li><a href="#">Entrar / Cadastrar</a></li>
            </ul>
        </div>

        <p>&copy; 2020 Hora de Codar</p>
        
    </footer>
    <!--bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.js" integrity="sha512-39Q5Yw4jtWPVkYu5Dry3HiRh6DWG4FDODb/rHF+X2Xp0kzhg9VgTyYV209uQ/EsqPDP/4dDvwm1rb8JgnAkHNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>