<?php 
require_once('globals.php');
require_once('bd.php');
require_once('models/Message.php'); 
require_once('dao/UserDAO.php'); 

    $message = new Message($base_url);
    $flassMessage = $message->getMessage();

    if(!empty($flassMessage['msg'])) {
        $message->clearMessage();
    }

    $userDao = new UserDAO($conn, $base_url);

    $userData = $userDao->verifyToken(false);

?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MovieStar</title>
    <link rel="shortcut icon" href="<?php echo $base_url ?>img/moviestar.ico"/>
    <!--bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/styles.css">
  </head>
  <body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light" id="main-navbar">
        <a class="navbar-brand" href="<?php echo $base_url; ?>">
            <img src="<?php echo $base_url; ?>img/logo.svg" alt="MovieStar" id="logo">
            <span id="moviestar-title">MovieStar</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
        </button>

        <form action="" id="search-form" method="GET" class="form-inline my-2 my-lg-0">
            <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes ..." arial-label="Search">
            <button class="btn my-2 my-sm-0" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <?php if($userData){ ?>
                    <li class="nav-item">
                        <a href="<?php echo $base_url; ?>newmovie.php" class="nav-link"><i class="far fa-plus-square"></i> Incluir Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $base_url; ?>dashboard.php" class="nav-link">Meus Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $base_url; ?>editprofile.php" class="nav-link"><?php echo $userData->name; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $base_url; ?>logout.php" class="nav-link">Sair</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="<?php echo $base_url; ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</header>

<?php if(!empty($flassMessage["msg"])) { ?>
    <div class="msg-container">
        <p class="msg <?php echo $flassMessage['type']; ?> "><?php echo $flassMessage['msg']; ?></p>
    </div>

<?php } ?>


