<?php
  require_once("templates/header.php");

  require_once("dao/MovieDAO.php");
  require_once("dao/UserDAO.php");

  // Dao dos Filmes
  $movieDao = new MovieDAO($conn, $BASE_URL);

  // Verifica o token, se não for o correto redireciona para a home
  $auth = new UserDAO($conn, $BASE_URL);

  $userData = $auth->verifyToken();

  $userMovies = $movieDao->getMoviesByUserId($userData->id);

?>
<div id="main-container" class="container-fluid">
  <h2 class="section-title">Dashboard</h2>
  <p class="section-description">Adicione ou atualize as informações dos filmes que enviou</p>
  <div class="col-md-12" id="add-movie-container">
      <a href="<?php echo $BASE_URL ?>newmovie.php" class="btn form-btn"><i class="fas fa-plus"></i> Adicionar filme</a>
  </div>
  <div class="col-md-12" id="movies-dashboard">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Título</th>
              <th scope="col">Nota</th>
              <th scope="col" class="actions-column">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($userMovies as $movie): ?>
              <tr>
                <td scope="row"><?php echo $movie->id ?></th>
                <td><a href="<?php echo $BASE_URL ?>movie.php?id=<?php echo $movie->id ?>" class="table-movie-title"><?php echo $movie->title ?></a></td>
                <td><i class="fas fa-star"></i><?php echo $movie->rating ?></td>
                <td class="actions-column">
                    <a href="<?php echo $BASE_URL ?>editmovie.php?id=<?php echo $movie->id ?>" class="edit-btn"><i class="far fa-edit"></i> Editar</a>
                    <form action="<?php echo $BASE_URL ?>movie_process.php?id=<?php echo $movie->id ?>" method="POST">
                      <input type="hidden" name="type" value="delete">
                      <input type="hidden" name="id" value="<?= $movie->id ?>">
                      <button type="submit" class="delete-btn"><i class="fas fa-times"></i> Deletar</a>
                    </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
  </div>
</div>

<?php include_once("templates/footer.php"); ?>