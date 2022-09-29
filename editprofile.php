<?php 

include_once('./templates/header.php'); 
require_once('dao/UserDAO.php'); 

    $userDao = new UserDAO($conn, $base_url);
    $userData = $userDao->verifyToken(true);

?>

<div id="main-container" class="container-fluid">
    <h1>Edição de Perfil</h1>
</div>

<?php include_once('./templates/footer.php'); ?>