<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bs431/css/bootstrap.min.css">
    <title>Gestion utilisateurs</title>
  </head>

  <body>

    <!-- include modals -->
    <?php include('modal_ajouter_utilisateurs.html'); ?>
    <?php include('modal_supprimer.php'); ?>

    <!-- Body content -->
    <br>
    <div class="container-fluid">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <div class="container-fluid">
            <div class="row">
              <div class="col text-left">
                <h6 class="m-0 font-weight-bold text-primary">Gestion Utilisateurs</h6>
              </div>
              <div class="col text-right">    
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target='#modalAjouterUtilisateurs'>
                  Ajouter
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>email</th>
                  <th>login</th>
                  <th>Détails</th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
                </tr>
              </thead>
              <tbody>

                <?php include('db_connect.php'); ?>
                <?php
                  // On récupère tout le contenu de la table
                $reponse = $dbs->query('SELECT * FROM utilisateur WHERE usr_del = 0');
                while ($donnees = $reponse->fetch()){
                ?>

                <tr>
                  <th scope="row"><?php echo $donnees['usr_id']; ?></th>
                  <td><?php echo $donnees['usr_nom']; ?></td>
                  <td><?php echo $donnees['usr_prenom']; ?></td>
                  <td><?php echo $donnees['usr_email']; ?></td>
                  <td><?php echo $donnees['usr_login']; ?></td>
                  <td>
                    <form action ="detail_utilisateurs.php" method="get">
                      <input type="hidden" name="row_id" value="<?php echo $donnees['usr_id']; ?>">
                      <button type="submit" class="btn btn-info">Détails</button>
                    </form>
                  </td>
                  <td>
                    <form action ="modifier_utilisateurs.php" method="get">
                      <input type="hidden" name="row_id" value="<?php echo $donnees['usr_id']; ?>">
                      <button type="submit" class="btn btn-success">Modifier</button>
                    </form>
                  </td>
                  <td>
                    <form action ="bdd_supprimer.php" method="get">
                      <input type="hidden" name="row_id" value="<?php echo $donnees['usr_id']; ?>">
                      <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                  </td>
                </tr>

                <?php
                }     
                $reponse->closeCursor(); // Termine le traitement de la requête
                ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>  
    <?php include('footer.php'); ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>