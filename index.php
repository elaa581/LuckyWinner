<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
include './parts/header.php';
?>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gagnez avec nous</font></font></h1>
      <p class="lead fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Il reste a ouvrir l'enregistrement</font></font></p>
      <h3 id="countdown"></h3>
      <a class="btn btn-outline-secondary" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bientot Disponible</font></font></a>
    </div>
   

  <ul class="list-group list-group-flush">
  <li class="list-group-item">Suivez le live sur notre page Facebook à la date indiquée ci-dessus</li>
  <li class="list-group-item">Je ferai un live d'une heure avec des questions/réponses libres pour tout le monde.</li>
  <li class="list-group-item">Pendant le live, une page d'inscription sera ouverte ici pour enregistrer votre nom et email.</li>
  <li class="list-group-item">À la fin du live, un gagnant sera tiré au sort à partir de la base de données.</li>
  <li class="list-group-item">Le gagnant recevra une copie gratuite de notre programme ou un super cadeau.</li>
</ul>

<div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
   <div class="mb-3">
    <label for="firstname" class="form-label">Votre Prenom </label>
    <input type="text"  name="firstname" class="form-control"  id="firstname" value="<?php echo $firstname ?>" >
    <div class="firstName Error"><?= $errors['firstNameError'] ?></div>
  </div>

   <div class="mb-3">
    <label for="lastname" class="form-label">Votre Nom </label>
    <input type="text"  name="lastname" class="form-control" id="lastname" value="<?php echo $lastname ?>" >
    <div class="lastName Errorr"><?php echo $errors['lastNameError'];?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Votre  Adresse Email</label>
    <input type="text" name="email"  class="form-control" id="email" value="<?php echo $email ?>" >
    <div class=" email Error"><?php echo $errors['emailError'];?></div>
  </div>
  
  <button type="submit"  name="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>
</div>
  

<!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto my-5" ></div>
<button type="button" id="winner" class="btn btn-primary">
 Choisissez le gagnant
</button>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Le gagnant </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php foreach($users as $user): ?>
        <h3 class=" display-1 text-center modal-title" id="ModalLabel"><?php echo htmlspecialchars ($user['firstname']).' '.htmlspecialchars ($user['lastname']); ?></h3>
          <?php endforeach; ?>
      </div>
   
    </div>
  </div>
</div>





<!------------------
  <div id="cards" class="row mb-5 pb-5"> 
   
    <div class="col-d-sm-6">
      <div class="card my-2 bg-light">
        <div class="card-body">
    
    <p class="card-text"> <?php echo htmlspecialchars ($user['email']);  ?></p>
    </div>
    </div>
    </div>
    
    </div>
    --------------->
<?php
include './parts/footer.php';?>